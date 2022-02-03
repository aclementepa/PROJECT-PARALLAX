import dns
from dns import resolver

result = dns.resolver.query('howard-48.howardindustries.local', 'A')
for ipval in result:
    print('IP', ipval.to_text())