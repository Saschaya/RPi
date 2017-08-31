import requests
import json

plug_data_power = requests.get('http://localhost:8083/JS/Run/zway.devices[16].instances[0].commandClasses[0x31].valueOf()',auth=('admin','raspberry'),stream=True)
plug_state = requests.get('http://localhost:8083/JS/Run/zway.devices[16].instances[0].commandClasses[0x25].data.level', auth=('admin','raspberry'),stream=True)
thermostat_setpoint_value = requests.get('http://localhost:8083/JS/Run/zway.devices[20].instances[0].commandClasses[0x43].valueOf()', auth=('admin','raspberry'),stream=True)
plug_data_energy = requests.get('http://localhost:8083/JS/Run/zway.devices[16].instances[0].commandClasses[0x32].valueOf()',auth=('admin','raspberry'),stream=True)
battery_level_thermostat = requests.get('http://130.240.152.93:8083/JS/Run/zway.devices[20].instances[0].commandClasses[0x80].valueOf()', auth=('admin','raspberry'),stream=True)
#print "print r :"
#print r
print "print plug_data_power.json() :"
print plug_data_power.json()
print "print plug_state.json() :"
print plug_state.json()
print "print thermostat_setpoint_value() :"
print thermostat_setpoint_value.json()
print "print plug_data_energy.json() :"
print plug_data_energy.json()
print "print batterye_level_thermostat.json()"
print battery_level_thermostat.json()
#print "print r.raw.read(10) :"
#print r.raw.read(10)
#print "print r.headers['content-type'] :"
#print r.headers['content-type']
#print "print r.text"
#print r.text
#print "print r.encoding"
#print r.encoding
#print " "
#print "print r1.raw.read(10) :"
#print r1.raw.read(10)
