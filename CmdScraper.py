import requests
from bs4 import BeautifulSoup
import json



page2 = requests.get("http://www.goal.com")
soup = BeautifulSoup(page2.content, 'html.parser')

# Extract page title

page_title = soup.title.text

# Extract body of page
page_body = soup.body

# Extract head
page_head = soup.head.text

# All h1 tags
all_h1_tags = []
for element in soup.select('h1'):
    all_h1_tags.append(element.text)

# Create seventh_p_text and set it to 7th p element text of the page
# seventh_p_text = soup.select('p')[6].text

news_items = []

news_divs = soup.select('table.widget-news-card.card-type-article')
goal_header = "https://goal.com"
for elem in news_divs:
    image = elem.select('img')[0].attrs['src']
    link_text = elem.select('h3 a')[0].text.strip()
    link = elem.select('h3.widget-news-card__title a')[0].attrs['href']
    info = {
        "img": image,
        "href": (goal_header + link),
        "text": link_text
    }
    # news_items.append(info)
    tempArray = [link_text, (goal_header + link),  image]
    news_items.append(tempArray)


with open("C:\\Development\\Github\\PROJECT-PARALLAX\\goalcom.txt", "w") as goal_file:
    # goal_file.write(json.dumps(news_items))
    for news_item in news_items:
        goal_file.write(str(news_item))




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