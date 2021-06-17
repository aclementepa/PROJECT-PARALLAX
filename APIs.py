import requests
from requests.exceptions import HTTPError


response = requests.get("https://api.github.com")

for url in ["https://api.github.com", "https://api.github.com/invalid"]:
    try:
        response = requests.get(url)

        #If the response was succesful, no exception
        response.raise_for_status()
    except HTTPError as http_error:
        print(f'HTTP error occurred: {http_error}')
    except Exception as error:
        print(f'Other error occurred: {error}')
    else:
        print("Success!")

# response.
# response = requests.get("https://http.cat/424")
# print(response.status_code)
# print(response.headers)
# print(response)

# response2 = requests.get("https://open.spotify.com/track/5lWFrW5T3JtxVCLDb7etPu?si=016a741dd0094ab8")
# requests.get("https://api.spotify.com/v1/artists/1vCWHaC5f2uS3yhpwWbIA6/albums?album_type=SINGLE&offset=20&limit=10")
# print(response2.status_code)
# print(response2.url)
# print(response2.encoding)
# print(response2.content)
# test1 = 
# html = response2.json().decode("utf-8")
# print(html)
# print(response2)
# print(response.json())
# print(response.json())