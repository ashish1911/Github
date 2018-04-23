# -*- coding: utf-8 -*-
"""



"""

from flask import Flask, url_for,request,jsonify,json
app = Flask(__name__)

@app.route('/')
def api_root():
    return 'Welcome'

@app.route('/articles')
def api_articles():
    return 'List of ' + url_for('api_articles')

@app.route('/api', methods=['GET', 'POST'])
def add_message():
    content = request.get_json(silent=True)
    #str = {"name":"append"}
    print (content)
    m = 1
    r = []
    x = list(content[0].values())
    for i in range(3,7):
        d = int(x[i])
        print(d)
        r.append(d)
    print(r)
    
    f = []
    for i in range(7,11):
        d = int(x[i])
        print(d)
        f.append(d)
    print(f)
    
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

    
    u1 = []
    u1 = r
    u2 = []
    u2 = f
    
    
    import numpy as np
    i=1
    a = []
    for i in range(4):
        upper = u1[i]
        lower = u2[i]
        p = (upper - lower)/m
        a.append(p)
    
    print(a)
    
    
    
    O = 1
    q1 = []
    for j in range(15):
        for i in range(4):
            O = 1/(1+2.71**-(a[i]*(O-d[i])))
            l = a[i]*(u1[i]-O)
            k = (a[i]**2)*(O)*(1-O)
            if(k!=0):
                Oi = O + (l/k)
            else:
                Oi = O
            
            q1.append(Oi)
        
        print(q1) 
        print(Oi)
       
    return (jsonify(Oi))


@app.route('/articles/<articleid>')
def api_article(articleid):
    return 'You are reading ' + articleid

if __name__ == '__main__':
    app.run()