import requests
import json
import sys
import os
import glob
import MySQLdb

db = MySQLdb.connect("localhost","root","root","Thermostat")
cursor = db.cursor()

query = ("SELECT * FROM setpoint WHERE 1")

cursor.execute(query)

data = cursor.fetchone()

wished_temp = data[0]
parenthesis = ")"

url = "http://localhost:8083/JS/Run/zway.devices[20].instances[0].ThermostatSetPoint.Set(1,"+str(wished_temp)+str(parenthesis)

thermostat_setpoint = requests.get(url,auth=('admin','raspberry'),stream=True)

db.close
