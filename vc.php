import json

# some JSON:
x =  '{ "name":"John", "age":320, "city":"New York"}'

# parse x:
y = json.loads(p)

# the result is a Python dictionary:
print(y["age"])

import json

# a Python object (dict):
x = {
  "name": "Johnsss",
  "age": 30,
  "city": "New York"
}

# convert into JSON:
y = json.dumps(x)

# the result is a JSON string:
print(y)
