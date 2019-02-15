import requests
import csv
from bs4 import BeautifulSoup
quote_page=requests.get('https://book.douban.com/tag/%E6%B8%AF%E5%8F%B0?start=40&type=T')
soup=BeautifulSoup(quote_page.content,'html.parser')
data= []
for div in soup.find_all('div',class_='info'):
    title=div.h2.a.text
    url=div.h2.a.get('href')
    intro=div.div.text
    excerpt=div.p
    data.append((title,url,intro,excerpt))

with open('douban22.csv', 'w') as csv_file:
    writer=csv.writer(csv_file)
    header= ['title','url','intro','excerpt']
    writer.writerow(header)
    for title,url,intro,excerpt in data:
        writer.writerow([title,url,intro,excerpt])
