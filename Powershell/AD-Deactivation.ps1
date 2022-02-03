$user = Get-ADUser -Filter 'Name -like "*dummy*"'

# Write-Output $user
$newPassword = "blahblahblah12345!"
Set-ADAccountPassword -Identity $user -Reset -NewPassword (ConvertTo-SecureString -AsPlainText $newPassword -Force)
Disable-ADAccount -Identity $user


# $laser = "$tardust1"

# main
$administrator = Get-ADUser -Filter 'Name -like "Administrator"'
$mh = Get-ADUser -Filter 'Name -like "*hilde*"'

# shop
$channel  = Get-ADUser -Filter 'Name -like "*channel*"'
$elu  = Get-ADUser -Filter 'Name -like "*elu graphics*"'
$extlaser  = Get-ADUser -Filter 'Name -like "*Exterior Laser*"'
$fabrication  = Get-ADUser -Filter 'Name -like "fabrication"'
$fabricationnorth  = Get-ADUser -Filter 'Name -like "fabrication north*"'
$router  = Get-ADUser -Filter 'Name -like "*Howard Router*"'
$paint = Get-ADUser -Filter 'Name -like "Paint*"'
$rtsInterior  = Get-ADUser -Filter 'Name -like "*RTS Interior*"'
$rtsShipping  = Get-ADUser -Filter 'Name -like "*RTS Shipping*"'
$shipping = Get-ADUser -Filter 'Name -like "Shipping*"'

# main password reset
$mhPassword = "asdfoiwaeoajsaldsfl23019!@@$$"

# shop password reset
$channelPassword = "Channel52"
$eluPassword = "1Tattooine!"
$extlaserPassword = "Kybers3#"
$fabricationPassword = "Fabricate!"
$fabricationnorthPassword = "Sandcrawler$1"
$routerPassword = "Lightning*32"
$paintPassword = "14Paint$"
$rtsPassword = "Howard*rts2!"
$shippingPassword = "14Shipping#"

# Commands

Set-ADAccountPassword -Identity $administrator -Reset -NewPassword (ConvertTo-SecureString -AsPlainText $adminPassword -Force)
# Write-Output($administrator)
Set-ADAccountPassword -Identity $mh -Reset -NewPassword (ConvertTo-SecureString -AsPlainText $mhPassword -Force)

Set-ADAccountPassword -Identity $channel -Reset -NewPassword (ConvertTo-SecureString -AsPlainText $channelPassword -Force)
Set-ADAccountPassword -Identity $elu -Reset -NewPassword (ConvertTo-SecureString -AsPlainText $eluPassword -Force)
Set-ADAccountPassword -Identity $extlaser -Reset -NewPassword (ConvertTo-SecureString -AsPlainText $extlaserPassword -Force)
Set-ADAccountPassword -Identity $fabrication -Reset -NewPassword (ConvertTo-SecureString -AsPlainText $fabricationPassword -Force)
# Write-Output($fabricationnorth)
Set-ADAccountPassword -Identity $fabricationnorth -Reset -NewPassword (ConvertTo-SecureString -AsPlainText $fabricationnorthPassword -Force)
Set-ADAccountPassword -Identity $router -Reset -NewPassword (ConvertTo-SecureString -AsPlainText $routerPassword -Force)
# Write-Output($paint)
Set-ADAccountPassword -Identity $paint -Reset -NewPassword (ConvertTo-SecureString -AsPlainText $paintPassword -Force)
Set-ADAccountPassword -Identity $rtsInterior -Reset -NewPassword (ConvertTo-SecureString -AsPlainText $rtsPassword -Force)
Set-ADAccountPassword -Identity $rtsShipping -Reset -NewPassword (ConvertTo-SecureString -AsPlainText $rtsPassword -Force)
Write-Output($shipping)
Set-ADAccountPassword -Identity $shipping -Reset -NewPassword (ConvertTo-SecureString -AsPlainText $shippingPassword -Force)