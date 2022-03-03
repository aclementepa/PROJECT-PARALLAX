import time
import requests
import subprocess
import os

file_location = "C:\\Users\\anthony.clemente\\Desktop\\report.txt"
command = "msinfo32 /computer HOWARD-99 /report "
os.system(command + file_location)
with open(file_location) as f:
    info = f.readlines()
print(info)