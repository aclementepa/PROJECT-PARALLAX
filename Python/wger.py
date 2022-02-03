import requests
import json
from pprint import pprint

url = 'https://wger.de//api/v2/exercise/'
result = requests.get(url)
print(result)
print(type(result.content))
# pprint(json.loads((result.content)))


# data = '{"key": "value"}'
# headers = {'Accept': 'application/json',
#                'Authorization': 'a992fcaaf803f4f35f181723f92b6c4782d8f35d'}
# r = requests.patch(url=url, data=data, headers=headers)
# print(r)
# r.content
# pprint(json.loads(r.content))