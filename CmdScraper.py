import requests
from bs4 import BeautifulSoup

def ScrapePage(webpage):
    page2 = requests.get(webpage)
    soup = BeautifulSoup(page2.content, 'html.parser')
    news_items = []

    if(webpage == "http://www.goal.com"):
        news_divs = soup.select('table.widget-news-card.card-type-article')
        goal_header = "https://goal.com"
        for elem in news_divs:
            image = elem.select('img')[0].attrs['src']
            link_text = elem.select('h3 a')[0].text.strip()
            link = elem.select('h3.widget-news-card__title a')[0].attrs['href']
            tempArray = [(goal_header + link),  image, link_text]
            news_items.append(tempArray)
    elif(webpage == "http://barcablaugranes.com"):
        news_divs = soup.select('div.c-entry-box--compact--article')
        counter = 0
        for elem in news_divs:
            counter+=1
            link = elem.select('a')[0].attrs['href']
            link_text = elem.select('h2.c-entry-box--compact__title')[0].text.strip()
            image = elem.select('a.c-entry-box--compact__image-wrapper picture source')[0].attrs['srcset']    
            tempArray = [link, image, link_text]
            news_items.append(tempArray)
            if(counter == 6):
                break
    
    return news_items

def WriteToFile(content_array, file_path):
        with open(file_path, "w") as file:
            for item in content_array:
                file.write(str(item))


file_contents = ScrapePage("http://www.goal.com")
WriteToFile(file_contents, "C:\\Development\\Github\\PROJECT-PARALLAX\\goalcom.txt")


file_contents = ScrapePage("http://barcablaugranes.com")
WriteToFile(file_contents, "C:\\Development\\Github\\PROJECT-PARALLAX\\barcacom.txt")


# for item in news_items:
#     print(item)

# if os.path.exists("C:\\Development\\Github\\PROJECT-PARALLAX\\testScraper.html"):
#     os.remove("C:\\Development\\Github\\PROJECT-PARALLAX\\testScraper.html")
    
# if os.path.exists("C:\\Development\\Github\\PROJECT-PARALLAX\\testScraper1.html"):
#     os.remove("C:\\Development\\Github\\PROJECT-PARALLAX\\testScraper1.html")

# fname = "C:\\Development\\Github\\PROJECT-PARALLAX\\testScraper.html"
# page = urlopen("http://www.goal.com")

# html_bytes = page.read()
# html = html_bytes.decode("utf-8")

# with open(fname, "w", encoding="utf-8", errors="ignore") as f:
#     f.write(html)

# title_index = html.find("<title>")
# start_index = title_index + len("<title>")
# end_index = html.find("</title>")
# title = html[start_index:end_index]

# print(title)
# print(re.findall("a.*c", "acc"))
# match_results = re.search("ab*c", "ABC", re.IGNORECASE)
# match_results.group()
# print(match_results)