import json

# some JSON:
x =  '{ "name":"Johnson", "age":320, "city":"New York"}'

# parse x:
y = json.loads(p)

# the result is a Python dictionary:
print(y["age"])

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
