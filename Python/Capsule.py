from capsulecrm.client import Client

client = Client(1, 'RTKaT91GWZ/I5X3AaqV0H67oeK7TGHIQiVbZ9yrUb27kKMfQV1GQky/FcPKLytbG')

# print(type(client))
# print(client)
# print(client.token)
client.token = "RTKaT91GWZ/I5X3AaqV0H67oeK7TGHIQiVbZ9yrUb27kKMfQV1GQky/FcPKLytbG"
# print(client.token)
# parties = client.list_milestone(page=1, perpage=25)
dict1 = []
parties = print(client.list_parties(since="2020-01-01 00:00:00", page=1, perpage=25))

print(type(parties))
for party in parties:
    print(party)