from collections import OrderedDict
from random import random
import requests

from bs4 import BeautifulSoup, FeatureNotFound
from requests import get


# this is for poshmark

other_keywords = ['VINTAGE', 'VTG', 'PLAYER', 'TRAINING', 'FUTBOL', 'LA LIGA', 'PREMIER LEAGUE', 'STADIUM', 'LIGUE 1', '90S']
brand_keywords = ['FC', 'T90', 'total 90', 'opel', 'FLY EMIRATES', 'unicef', 'QATAR',  'dri-fit', 'climalite' 'AIG',   'ETIHAD', 'BWIN', 'RAKUTEN', 'PIRELLI', 'MACRON', 'KAPPA', 'AON']
club_keywords = ['FCB', 'BARCELONA', 'BAYERN' 'ACM', 'MILAN' 'TORINO', 'RM', 'REAL MADRID', 'MANCHESTER', 'ARSENAL', 'DORTMUND', 'INTER', 'LAZIO', 'MUNCHEN', 'CITY', 'UTD', 'JUVENTUS', 'JUVE', 'PSG', 'PARIS', 'GERMAIN', 'ATM', 'MADRID', 'ATLETICO']
country_keywords = ['NATIONAL', 'FIFA', 'WC', 'WORLD CUP', 'USA', 'ARGENTINA', 'DFB', 'GERMANY', 'SPAIN', 'ESPANA', 'ITALY', 'ITALIA', 'BELGIUM', 'PORTUGAL', 'BRAZIL', 'FRANCE', 'NETHERLANDS']
player_keywords = ['MESSI', 'RONALDO', 'ROBBEN', 'PERSIE', 'SUAREZ', 'DEPAY', 'AGUERO', 'LUKAKU', 'FABREGAS', 'BECKHAM', 'VILLA', 'PULISIC', 'TOTTI', 'NEYMAR', 'BATISTUTA', 'GRIEZMANN', 'SAUL', 'SILVA']
shoe_models = {'MERCURIAL', 'NEMEZIZ', ''}

adidas_jerseys = OrderedDict({
        'brand': 'adidas',
})
nike_jerseys = OrderedDict({
        'brand': 'nike',
})
puma_jerseys = OrderedDict({
        'brand': 'puma',
})

standard_jerseys = OrderedDict({    
        'category': 'Shirts',
        'subcategory': 'Jerseys',
        'sort': 'price_asc',
        'size': 'XL',
        'type': 'closet',
        'price': '15-35'
})

def SearchPoshmarkProducts(webpage, searchQuery, adidas_jerseys):
    searchURL = webpage + "search?"
    searchURL += "query=" + searchQuery
    searchURL += "&department=" + adidas_jerseys['department']
    searchURL += "&size[]=" + adidas_jerseys['size']
    searchURL += "&price[]=" + adidas_jerseys['price']
    searchURL += "&brand[]=" + adidas_jerseys['brand']
    searchURL += "&sub_category=" + adidas_jerseys['subcategory']
    searchURL += "&sort_by=price_asc"
    print(searchURL)
    # searchURL.append("&category=" + category)
    # searchURL.append("&type=listings&src=dir")
    page = requests.get(searchURL)
    print(page)
    
    # soup = BeautifulSoup(page.content, 'html.parser')
    


    # print(page)

webpage = "https://poshmark.com/"
query = "soccer jersey"
department = "men"

SearchPoshmarkProducts(webpage, query, adidas_jerseys)

# page2 = requests.get(webpage)
# soup = BeautifulSoup(page2.content, 'html.parser')
# news_items = []
    



    
# strictness_pass = self._check_strictness(tile, arguments)
# if strict and strictness_pass:
#  There needs to be a better way to do this.
# p = Product(
# url=f"https://poshmark.com{tile.find('a').get('href')}")
# p._build_product_from_tile(tile, self.session)
# self.results.append(p)
# continue
# elif strict and not strictness_pass:
# continue
# elif not strict:
# p = Product(
# url=f"https://poshmark.com{tile.find('a').get('href')}")
# p._build_product_from_tile(tile, self.session)
# self.results.append(p)
# continue