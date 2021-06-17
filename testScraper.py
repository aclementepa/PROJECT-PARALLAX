from urllib.request import urlopen
fname = "testScraper.txt"
url = "http://goal.com"
page = urlopen(url)
html_bytes = page.read()
html = html_bytes.decode("windows-1252")



with open(fname, "w", encoding="windows-1252") as f:
    f.write(html)
#file = open("testScraper.txt", "w")
#str_dictionary = repr(html)
#file.write("html page = " + str_dictionary + "\n")
#file.write("hello world, it worked lol")
#file.close()
#from selenium import webdriver
#browser = webdriver.Firefox()
#browser.get('http://goal.com')
