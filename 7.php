<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to validate whether a given value type is pure json object or not.</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function is_json(value)
        {
        return toString.call(value) === '[object Object]';
        }

console.log(is_json({name: 'Robert'}));

console.log(is_json('bar'));

console.log(is_json(72));