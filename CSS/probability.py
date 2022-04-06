from unittest import result
from scipy.stats import binom
result=binom.pmf(k=7, n=10, p=0.53)
print ("result: ", result)