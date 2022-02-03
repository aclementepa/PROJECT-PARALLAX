import enchant
from itertools import permutations
import sys

def ConcatPermutations(letters):
    return [''.join(i) for i in permutations(letters)]

def Anagrams(letters):
    """ Generate all of the anagrams of a word. """ 
    if len(letters) < 2:
        yield letters
    else:
        for i, letter in enumerate(letters):
            if not letter in letters[:i]: # avoid duplicating earlier words
                for j in Anagrams(letters[:i]+letters[i+1:]):
                    yield j+letter

def Anagram_Permutations(letters):
    return [''.join(i) for i in permutations(letters)]


def Words(permutationsList):
    words = []
    d = enchant.Dict("en_US")
    for word in permutationsList:
        if d.check(word) and words.count(word) == 0:
            words.append(word)
    return words

def UniqueList(listObj):
    for elem in listObj:
      if listObj.count(elem) > 1: 
        listObj.remove(elem)
    return listObj

line = sys.argv[1]

anagrams = Anagram_Permutations(line)
print("\nNumber of Anagram Permutations: " + str(len(anagrams)))
print("------------------------------------")
print("Words from " + line + ":")
permutationsList = ConcatPermutations(line)
wordList = Words(permutationsList)
for word in wordList: print(word)
print("Number of Words from " + line + ": " + str(len(wordList)))