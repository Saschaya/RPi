import requests
import json

reset_energy_counter = requests.get('http://localhost:8083/JS/Run/zway.devices[16].instances[0].commandClasses[0x32].Reset()',auth=('admin','raspberry'),stream=True)
