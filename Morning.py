import webbrowser
import os

chrome_path = 'C:/Program Files(x86)/Google/Chrome/Application/chrome.exe %s'
webbrowser.register('google-chrome', None, webbrowser.BackgroundBrowser(chrome_path))
webbrowser.open_new("https://")
webbrowser.open_new("http://dms.howardindustries.local")
webbrowser.open_new("https://techrepublic.com")

# start programs

os.startfile("outlook")
os.startfile("C:\\Program Files\\PremiumSoft\\Navicat for MySQL\\navicat.exe")
os.startfile("C:\\Program Files (x86)\\Mitel\\Connect\\Mitel.exe")
os.startfile("C:\\Users\\anthony.clemente\\AppData\\Local\\GitHubDesktop\\GitHubDesktop.exe")
os.startfile("C:\\Users\\anthony.clemente\\AppData\\Local\\Programs\\Microsoft VS Code\\Code.exe")