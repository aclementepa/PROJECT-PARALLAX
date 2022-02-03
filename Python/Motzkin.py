# Python3 program to find Nth Motzkin Number.
   
# Return the nth Motzkin Number.
def motzkin(n) :
       
    dp = [None] * (n+1)
   
    # Base case
    dp[0] = dp[1] = 1
   
    i = 2
    # Finding i-th Motzkin number.
    while i <= n :
        dp[i] = ((2 * i + 1) * dp[i - 1] +
                (3 * i - 3) * dp[i - 2]) / (i + 2)
        i = i + 1
    return dp[n]
   
# Driver code
n = 5
print(str(motzkin(n)))