import requests
import json
from pprint import pprint

xml = """<AddressValidateRequest USERID="588NONE04777">
<Revision>1</Revision>
<Address ID="0">
<Address1>SUITE K</Address1>
<Address2>29851 Aventura</Address2>
<City/>
<State>CA</State>
<Zip5>92688</Zip5>
<Zip4/>
</Address>
</AddressValidateRequest>"""
headers = {'Content-Type': 'application/xml'} # set what your server accepts
r = requests.post('https://secure.shippingapis.com/ShippingAPI.dll?API=Verify&XML=', data=xml, headers=headers).text
print r