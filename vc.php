import jsonee

# some JSON:
x =  '{ "name":"Johnon", "age":0, "city":"New ork"}'

# parse x:
y = json.loads(p)

# the result is a Python ditionary:
print(y["age=98"])

import json

# a Python object (dictor):
x = {
  "name": "Johnsss",
  "age": 23022,
  "city": "New York"
}

# convert into JSON:
y = json.dumps(x)

# the result is a JSON string:
print(y)
