# -*- coding: utf-8 -*-
"""
Created on Wed Apr 18 10:48:53 2018

@author: Hp
"""

# Input data from json convert to list 

theta = [1,2,3,4]
r = [2,1,0,2]
f = [2,2,2,2]

# cont = [{'id': '1', 'uid': '5', 'topic': 'BFS', 'q1': '1', 'q2': '1', 'q3': '1', 'q4': '1', 'q5': 2, 'q6': 2, 'q7': 2, 'q8': 2}]

# r = []
# x = list(cont[0].values())
# for i in range(3,7):
#    d = int(x[i])
#    print(d)
#    r.append(d)
# print(r)

# t = []
# for i in range(7,11):
#    d = x[i]
#    print(d)
#    t.append(d)
# print(t)

# Calculating Difficulty

dif_q1 = r[0]/f[0]
print(dif_q1) 

dif_q2 = r[1]/f[2]
print(dif_q2)

dif_q3 = r[2]/f[2]
print(dif_q3)

dif_q4 = r[3]/f[3]
print(dif_q4)

d = [dif_q1,dif_q2,dif_q3,dif_q4]
print(d)

# Calculating Discrimination

# x =[]
# u1 = [1,1,1,1]
# u2 = [1,0,1,0]
# a = u1[0]
# b = u2[0]
# x.append(a)
# x.append(b)
# print(len(x))

# Input data from json fil
r = [2,1,0,2]
u1 = r
print(u1)
f = [2,2,2,2]
u2 = f
print(u2)

import numpy as np
i=1
a = []
for i in range(4):
    upper = u1[i]
    lower = u2[i]
    p = (upper - lower)/1
    a.append(p)

print(a)


l = 0
k = 0
O = 1
q1 = []
for j in range(15):
    for i in range(4):
        O = 1/(1+2.71**-(a[i]*(O-d[i])))
        print(O)
        l += a[i]*(u1[i]-O)
        k += (a[i]**2)*(O)*(1-O)
        if(k!=0):
            Oi = O + (l/k)
        else:
            Oi = O
    if(O<0.001):
        break
        
    q1.append(Oi)
print(l)
print(k)
print(O)
print(q1) 
print(Oi)


O = 1
q2 = []
for i in range(4):
    O = 1/(1+2.71**-(d[i]*(O-a[i])))
    l = d[i]*(u2[i]-O)
    k = (d[i]**2)*(O)*(1-O)
    if(k!=0):   
        Oi = O + (l/k)
    else:
        Oi = O
    q2.append(Oi)

print(Oi)




# Calculate ability

xe = (1-0.6)
P = 1/(1+2.71**-(1*(1-0.6)))
print(P)

e = (1*(1-P))
y = ((1**2)*(P*(1-P)))
print(y)
XE = P +()

for number in [2, 3, 5]:
    print(number)












