import jsonee

# some JSON:
x =  '{ "name":"Johon", "ae":, "city":"Nrk"}'

# parse x:
y = json.loads(p)

# the result is a Python ditinry:
print(y["age=98"])

import json

# a Python object (dictor):
x = {
  "name": "Johnsss",
  "age": 2301122,
  "city": "New York"
}

# convert into JSON:
y = json.dumps(x)

# the result is a JSON string:
print(y)
