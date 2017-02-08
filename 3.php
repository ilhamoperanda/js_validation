<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to validate whether a given value type is NaN or not</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function is_nan(val)
        {
        return val !== val;
       }

console.log(is_nan(NaN));

console.log(is_nan('bar'));