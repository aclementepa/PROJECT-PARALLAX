# Author: Anthony Clemente
# Purpose: Deactivate user & change their password. Include a delete parameter
# Date: 3/3/2022

Param
    (
        [Parameter(Mandatory=$true)][string]$Identity, # Positional parameter
        [switch]$Delete = $false
    )


function New-RandomPassword {
    param(
        [Parameter()]
        [int]$MinimumPasswordLength = 5,
        [Parameter()]
        [int]$MaximumPasswordLength = 10,
        [Parameter()]
        [int]$NumberOfAlphaNumericCharacters = 5,
        [Parameter()]
        [switch]$ConvertToSecureString
    )
    
    Add-Type -AssemblyName 'System.Web'
    $length = Get-Random -Minimum $MinimumPasswordLength -Maximum $MaximumPasswordLength
    $password = [System.Web.Security.Membership]::GeneratePassword($length,$NumberOfAlphaNumericCharacters)
    if ($ConvertToSecureString.IsPresent) {
        ConvertTo-SecureString -String $password -AsPlainText -Force
    } else {
        $password
    }
}


$firstname = $args[0]
$lastname = $args[1]

# $searchParameters = 'Name -like "*Test*"'

# for testing, remove old user
# $old_ad_user = Get-ADUser -Filter $searchParameters
# Remove-ADUser $old_ad_user

$sam_account_name = $args[0] + "." + $args[1]
$logon_script = $args[0] + "." + $args[1] + ".vbs"
$full_name = $args[0] + " " + $args[1]
$userPrincipalName = $sam_account_name + "@howardindustries.local"
$randomPassword = New-RandomPassword -MinimumPasswordLength 10 -MaximumPasswordLength 16 -NumberOfAlphaNumericCharacters 6 -ConvertToSecureString
$password = ConvertTo-SecureString -String $randomPassword -AsPlainText -Force
New-ADUser -Name $full_name -GivenName $firstname  -UserPrincipalName $userPrincipalName -Organization "Howard Industries" -DisplayName $full_name -SamAccountName $sam_account_name -Surname $lastname -AccountPassword $password -Enabled $true -CannotChangePassword $true -PasswordNeverExpires $true -PasswordNotRequired $False -ScriptPath $logon_script
$newUser = Get-ADUser -Identity ($args[0] + "." + $args[1])
Write-Output($newUser)

# $AD_Object = Get-ADUser -Filter $searchParameters
# Write-Output $AD_Object

# $AD_Object = Get-ADUser -Filter 'Name -like "*Anthony*"'
# Write-Output $AD_Object