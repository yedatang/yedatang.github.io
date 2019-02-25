from flask import Flask, render_template, json, request
from flask import Markup
import requests

app = Flask(__name__)
app.config["DEBUG"] = False

@app.route("/")
def main():
  return render_template("index.html",title="Home Page")

@app.route("/chart")
def chart():
   headers = {
       "Authorization": "Bearer keyE2Q3CSRHLNZqT8",
   }
   params = (
       ('view', 'Grid view'),
   )

   r = requests.get('https://api.airtable.com/v0/appakw7OcZ5X2KkDb/user_name?api_key=keyE2Q3CSRHLNZqT8',headers=headers, params=params)
   dict1 = r.json()
   dict2 = {}
   dataset = []
   name_list = []
   sum_list=[]
   for i in dict1['records']:
        dict2 = i['fields']
        dataset.append(dict2)
   for item in dataset:
       name_list.append(item.get('Name'))
       sum_list.append(item.get('creds'))
   return render_template('chart.html', entries = zip(name_list, sum_list))
