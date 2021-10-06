import enchant
from itertools import permutations
import sys
import math

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
        if d.check(word):
            words.append(word)
    return words

def UniqueList(listObj):
    for elem in listObj:
      if listObj.count(elem) > 1: 
        listObj.remove(elem)
    return listObj

line = sys.argv[1]
counter = 0

print("Anagrams:")
anagrams = Anagrams(line)
for i in anagrams:
    counter+=1
    print(i)
print("\nNumber of Anagrams: " + str(counter))
print("------------------------------------")

counter = 0
print("Anagram Permutations:")
anagrams = Anagram_Permutations(line)
for i in anagrams:
    counter+=1
    print(i)
print("\nNumber of Anagram Permutations: " + str(counter))
counter = 0
print("------------------------------------")
counter = 0
print("Words from " + line + ":")
permutationsList = ConcatPermutations(line)
wordList = Words(permutationsList)
wordList = UniqueList(wordList)
for word in wordList: 
    print(word)
    counter+=1
print("Number of Words from " + line + ":" + str(counter))