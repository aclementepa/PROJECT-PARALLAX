import requests

api_key = "a992fcaaf803f4f35f181723f92b6c4782d8f35d"

response = requests.get("https://api.open-notify.org/this-api-doesnt-exist")
print(response.status_code)