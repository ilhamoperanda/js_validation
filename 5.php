<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to validate whether a given value is number or not.</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function is_number(value)
        {
        return !isNaN(value) && toString.call(value) === '[object Number]';
       }

console.log(is_number(NaN));

console.log(is_number(42.32));

console.log(is_number(72));