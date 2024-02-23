iport soee

# some SN:
x =  '{ "n:"Jon", "ae":, "ciy":"t"}'

# parse x:
y = json.loads(p)

# the result is a Python ditry:
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
