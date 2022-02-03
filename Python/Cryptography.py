from cryptography.fernet import Fernet, MultiFernet

# high-level (using built-in fernet functions)

key = Fernet.generate_key()
f = Fernet(key)
token = f.encrypt(b"A really secret message. Not for prying eyes.")
message = f.decrypt(token)
print(message)


# MultiFernet

key1 = Fernet(Fernet.generate_key())
key2 = Fernet(Fernet.generate_key())
key4 = Fernet(Fernet.generate_key())

f = MultiFernet([key1, key2])
token = f.encrypt(b"Secret message!")
message = f.decrypt(token)
print(message)

# use rotate

key3 = Fernet(Fernet.generate_key())
f2 = MultiFernet([key3, key1, key2])
rotated = f2.rotate(token)
message = f2.decrypt(rotated)
print(message)

print("using old key")
# message = f.decrypt(rotated)
print(message)