import socket
import sys
 
address = sys.argv[1]
host = socket.gethostbyaddr(address)
 
print('Address: ', address, '\n' 'Host: ', host[0])