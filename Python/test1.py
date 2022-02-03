from os import error
import subprocess
import socket
from isc_dhcp_leases import Lease, IscDhcpLeases
import dhclientlist

def ScanNetwork():
    results = ["Results for Network Scan"]
    addresses = []
    for ping in range(50,255):
        address = "192.168.100." + str(ping)
        res = subprocess.call(['ping', address])
        try:
            host = socket.gethostbyaddr(address)
            temp = str(host[0]) + " (" + str(host[2]) + ")"
            if "HOWARD" in temp :
                addresses.append(address)
        except:
            temp = "Unidentified: " + address
        if res == 0:
            res = ""
        elif res == 2:
            results.append("No response from " + temp)
        else:
            results.append("Failed ping to " + temp)

    # for addr in addresses:
    #     results.append(RemoteCommands(host[0]))

    return results


def BuildDHCPCommand(ipAddress):
    return("powershell.exe Remove-DhcpServerv4Lease -ComputerName 'telperion.howardindustries.local' -IPAddress " + ipAddress)

def BuildDNSCommand(hostName, ipAddress):
    return("powershell.exe Remove-DnsServerResourceRecord -ComputerName 'telperion.howardindustries.local' -ZoneName 'howardindustries.local' -Name '" + hostName + "' -RRType 'A' -RecordData '" + ipAddress  + "'")

def TestFunction(ipAddresses, hostName):    
    filepath = "\\telperion\C$\System32\dhcp\dhcp.mdb"
    # leases = IscDhcpLeases(filepath, True)
    # leases = DhcpLeases(filepath)
    # leases.get()
    # print(leases)
    
    # res = subprocess.call('powershell.exe Get-DnsServerResourceRecord -ComputerName "telperion.howardindustries.local" -ZoneName "howardindustries.local" -RRType "A"')
    # print(type(res))

    
      
    # RemoveDHCPResult = subprocess.call(BuildDHCPCommand(ipAddresses))
    # RemoveDNSResult = subprocess.call(BuildDNSCommand(ipAddresses, hostName))
    # print(RemoveDHCPResult)
    # print(RemoveDNSResult)
# ips = ScanNetwork()
# TestFunction(ips)
TestFunction("192.168.100.219", "Devin.howardindustries.local")