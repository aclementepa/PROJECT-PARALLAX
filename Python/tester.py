import requests
from bs4 import BeautifulSoup

page2 = requests.get("http://barcablaugranes.com")
soup = BeautifulSoup(page2.content, 'html.parser')
news_items = []

# inside - c-five-up__main
# inside - (classes) div.c-entry-box--compact c-entry-box--compact--article c-five-up__entry c-entry-box--compact--hero
# inside - (classes) a . c-entry-box--compact__image-wrapper (link), (text)
# inside - picture c-picture (image)
# inside - source srcset="" media="min-width:950 (ex.)" (img src)
# c-entry-box--compact c-entry-box--compact--article c-five-up__entry c-entry-box--compact--hero
barca_header = "https://barcablaugranes.com"
news_divs = soup.select('div.c-entry-box--compact--article')
counter = 0
for elem in news_divs:
    counter+=1
    link = elem.select('a')[0].attrs['href']
    link_text = elem.select('h2.c-entry-box--compact__title')[0].text.strip()
    image = elem.select('a.c-entry-box--compact__image-wrapper picture source')[0].attrs['srcset']    
    tempArray = [link, image, link_text]
    news_items.append(tempArray)
    if(counter == 7):
        break

for elem in news_items:
    print(elem)
    
with open("C:\\Development\\Github\\PROJECT-PARALLAX\\barcacom.txt", "w") as barca_file:
    for item in news_items:
        barca_file.write(str(item))