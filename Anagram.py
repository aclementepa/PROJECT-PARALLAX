import enchant

def Anagrams(word):
    """ Generate all of the anagrams of a word. """ 
    if len(word) < 2:
        yield word
    else:
        for i, letter in enumerate(word):
            if not letter in word[:i]: #avoid duplicating earlier words
                for j in Anagrams(word[:i]+word[i+1:]):
                    yield j+letter


def Words(str):
    words = []
    charSTR = [*str]
    d = enchant.Dict("en_US")

line = args

print("Anagrams:\n")
for i in Anagrams("apple"):
    print(i)

print("Words from " + str)