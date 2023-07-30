#!/usr/bin/env python3

import os
os.system("bash script_bash.sh")

# подключение к постгрес
import psycopg2

conn = psycopg2.connect(
host='localhost',
port='5555',
database='appdb',
user='postgres',
password='111')

new_user = "user102"
table = "books102"

cur = conn.cursor()

cur.execute("CREATE USER "+new_user+" WITH PASSWORD 'password102'")

cur.execute("CREATE TABLE "+table+"(book_id SERIAL PRIMARY KEY, title CHARACTER VARYING(50), author CHARACTER VARYING(30), price DECIMAL(8,2),amount INTEGER)")

cur.execute("INSERT INTO "+table+" VALUES(1, 'Мастер и Маргарита', 'Булгаков М.А.', 670.99, 3)")
cur.execute("INSERT INTO "+table+" VALUES(2, 'Белая гвардия', 'Булгаков М.А.', 540.50, 5)")
cur.execute("INSERT INTO "+table+" VALUES(3, 'Идиот', 'Достоевский Ф.М.', 460.00, 10)")
cur.execute("INSERT INTO "+table+" VALUES(4, 'Братья Карамазовы', 'Достоевский Ф.М.', 799.01, 3)")
cur.execute("INSERT INTO "+table+" VALUES(5, 'Игрок', 'Достоевский Ф.М.', 480.50, 10)")
cur.execute("INSERT INTO "+table+" VALUES(6, 'Стихотворения и поэмы', 'Есенин С.А.', 650.00, 15)")

conn.commit()   # реальное выполнение команд sql

print()
print("appdb " + table)
cur.execute('SELECT * FROM ' + table)
rows = cur.fetchall()
for row in rows:
    for elem in row:
        print ("{:<25}".format(elem), end=' ')
    print ()

print()
print("ALL POSTGRES USERS:")
cur.execute('SELECT usename FROM pg_user')
rows = cur.fetchall()
for row in rows:
    for elem in row:
        print ("{:<25}".format(elem), end=' ')
    print ()

conn.commit()   # реальное выполнение команд sql

cur.close()
conn.close()
