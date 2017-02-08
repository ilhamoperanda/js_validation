<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to validate whether a given value type is char or not</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function is_char(value)
    {
      if (Object.prototype.toString.call(value) !== '[object String]')
        return false;
    return value && value.length === 1;
    }
 
console.log(is_char('f'));
console.log(is_char('*'));