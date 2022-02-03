import requests
from requests.models import HTTPBasicAuth

# github auth with PyGitHub

from github import Github
import os
from pprint import pprint
access_token = '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'

# token = os.getenv('GITHUB_TOKEN', '...')
token = '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'
g = Github(token)

repo = g.get_repo("aclemente-howard/test1")
issues = repo.get_issues(state="open")
pprint(issues.get_page(0))



# github auth with Requests Module

token = os.getenv('GITHUB_TOKEN', '...')
token = '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'
owner = "aclemente-howard"
repo = "test1"
query_url = f"https://api.github.com/repos/{owner}/{repo}/issues"
params = {
    "state": "open",
}
headers = {'Authorization': f'token {token}'}
r = requests.get(query_url, headers=headers, params=params)
pprint(r.json())


# response = requests.get("http://api.open-notify.org/astros.json")
# print(response)

# print("content: " + response.content())
# print("text: " + response.text())
# print("json: " + response.json())

# query = {'lat':'45', 'lon':'180'}
# response = requests.get('http://api.open-notify.org/iss-pass.json', params=query)
# print(response.json())

# response = requests.post('https://httbin.org/post', data = {'key':'value'})
# requests.put('https://httpbin.org/put', data = {'key':'value'})
# print(response.json())

# print(response.headers["date"])

# Authentication
# response = requests.get('https://api.github.com/user', auth=HTTPBasicAuth('aclemente-howard', 'p3T3R*5_5W0RD'))

# print(response)
# my_headers = {'Authorization' : 'Bearer {access_token}'}

# session = requests.Session()
# session.headers.update({'Authorization':'Bearer {access_token}'})
# response = session.get('https://api.github.com/user')
# print(response)

# http errors
# response = requests.get("http://api.open-notify.org/astros.json")
# if (response.status_code == 200):
    # print("The request was a success!")
    # Code here will only run if the request is successful
# elif (response.status_code == 404):
    # print("Result not found!")
# Code here will react to failed requests

# above should return error 404

# If you want requests to raise an exception for all error codes (4xx and 5xx), 
# you can use the raise_for_status() function and catch specific errors using Requests built-in exceptions. 

# try:
    # response = requests.get('http://api.open-notify.org/astros.json')
    # response.raise_for_status()
    # Additional code will only run if the request is successful
# except requests.exceptions.HTTPError as error:
    # print(error)
    # This code will run if there is a 404 error.