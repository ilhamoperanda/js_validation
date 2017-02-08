<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to validate whether a given value type is null or not</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function is_null(val)
        {
        return val === null;
       }

console.log(is_null(null));

console.log(is_null('bar'));