import requests
import json


set_plug_on = requests.get('http://localhost:8083/JS/Run/zway.devices[16].instances[0].commandClasses[0x25].Set(255)', auth=('admin','raspberry'), stream=True)

