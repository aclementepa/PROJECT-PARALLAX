import sys
from math import sqrt

quantity = 10 # number of anti-prime numbers to find

def factors(n):
        factors = set()
        for x in range(1, int(sqrt(n)) + 1):
            if n % x == 0: # if the remainder is 0
                factors.add(x) # add the dividend to  the list
                factors.add(n//x) # add the quotient to the list as well
        return sorted(factors)

# def antiprimes():
   
# for i in (60, 53, 64): print( "%i: factors: %s" % (i, factors(i)))
print(len(factors(1)))
print(len(factors(2)))
print(len(factors(4)))
print(len(factors(6)))
print(len(factors(12)))
print(len(factors(24)))
print(len(factors(36)))
print(len(factors(48)))
print(len(factors(60)))
print(len(factors(120)))
print(len(factors(180)))
print(len(factors(240)))
print(len(factors(360)))
print(len(factors(720)))
print(len(factors(840)))
print("1 " + str(len(factors(1260))))
print("2 " + str(len(factors(1680))))
print("3 " + str(len(factors(2520))))
print("4 " + str(len(factors(5040))))
print("5 " + str(len(factors(7560))))
print("6 " + str(len(factors(10080))))
print("7 " + str(len(factors(15120))))
print("8 " + str(len(factors(20160))))
print("9 " + str(len(factors(25200))))
print("10 " + str(len(factors(27720))))
print("11 " + str(len(factors(45360))))
print("12 " + str(len(factors(50400))))
print("13 " + str(len(factors(55440))))
print("14 " + str(len(factors(83160))))
print("15 " + str(len(factors(110880))))
print("16 " + str(len(factors(166320))))
print("17 " + str(len(factors(227160))))
print("18 " + str(len(factors(277200))))
print("19 " + str(len(factors(332640))))
print("20 " + str(len(factors(498960))))
print("21 " + str(len(factors(554400))))
print("22 " + str(len(factors(665280))))
print("23 " + str(len(factors(720720))))
print("24 " + str(len(factors(1081080))))
print("25 " + str(len(factors(1441440))))

# print("Here are the first 20 anti-prime numbers...\n")
# numbers = []
# while numbers.count < quantity:
    