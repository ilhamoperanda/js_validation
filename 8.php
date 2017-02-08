<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to validate whether a given value RegExp or not.</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function is_regexp(value)
        {
       return toString.call(value) === '[object RegExp]';
        }

console.log(is_regexp(/test/));

console.log(is_regexp('bar'));

console.log(is_regexp(72));