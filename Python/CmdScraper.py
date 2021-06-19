from urllib.request import urlopen
import re

fname = "testScraper.txt"
page = urlopen("http://www.goal.com")
html_bytes = page.read()
html = html_bytes.decode("utf-8")
with open(fname, "w", encoding="utf-8", errors="ignore") as f:
    f.write(html)

title_index = html.find("<title>")
start_index = title_index + len("<title>")
end_index = html.find("</title>")
title = html[start_index:end_index]

print(title)
print(re.findall("a.*c", "acc"))
match_results = re.search("ab*c", "ABC", re.IGNORECASE)
match_results.group()
print(match_results)