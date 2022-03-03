# Author: Anthony Clemente
# Purpose: Deactivate user & change their password
# Date: 3/3/2022

# accept username to be modified through cmd
$deactivateUser = $args[0]

# get user
$user = Get-ADUser -Identity $deactivateUser # -Filter "username -like '*$deactivateUser*'"


# configurations for random password generator (length, nonalphachars)
# min/max length of password
$min = 5
$max = 10 
$nonAlpha = 5
$length = Get-Random -Minimum $min -Maximum $max
$newPassword = [System.Web.Security.Membership]::GeneratePassword($length, $nonAlpha)

# Change Password then disable user
Set-ADAccountPassword -Identity $user -Reset -NewPassword (ConvertTo-SecureString -AsPlainText $newPassword -Force)
Disable-ADAccount -Identity $user