import itertools
import operator
from itertools import permutations

# Accumulate Implementation
itAc = itertools.accumulate([1,2,3,4,5])
for var in itAc: print(var)
itAc = itertools.accumulate([1,2,3,4,5], initial=500)
for var in itAc: print(var)
itAc = itertools.accumulate([1,2,3,4,5], operator.mul)
for var in itAc: print(var)
itAc = itertools.accumulate(['A','B','C','D','E','F'])
for var in itAc: print(var)


# Chain Implementation
itChain = itertools.chain('ABC', 'DEF')
for var in itChain: print(var)


# Combinations Implementation

itComb = itertools.combinations('abcdef', 3)
# for var in itComb: print(var)


# Permutations Implementation
itComb = itertools.permutations('fedcba')
for var in itComb: print(var)