import requests
from pprint import pprint


# access_token = 'RTKaT91GWZ/I5X3AaqV0H67oeK7TGHIQiVbZ9yrUb27kKMfQV1GQky/FcPKLytbG'
# owner = "aclemente-howard"
# repo = "test1"
# get_url = "https://api.capsulecrm.com/"
# h = {'Authorization': f'token {access_token}'}
# r = requests.get(get_url, headers=h)
# print(r)

# access_token = 'RTKaT91GWZ/I5X3AaqV0HxUGHosfUXjdSjl8bwLDYpJd+E9qN20/I7TO+PvGo4LT'
# session.headers.update({'Authorization': 'token {access_token}'})
# response = session.get('https://api.capsulecrm.com/')
# print(response)
# print(response.headers)
session = requests.Session()
session.headers.update({'Authorization': 'Bearer {access_token}'})
response = session.get('https://api.capsulecrm.com/api/v2/parties?page=1')
session.close()
print(response)
print(response.text)
print(response.headers)
# print(response.headers["WWW-Authenticate"])
# print(response.headers["error"])
# print(response.json)

# pprint(response.json())


# pprint(r.json())