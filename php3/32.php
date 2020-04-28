<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
$var32 = "To jest zawartosc 32";
echo $var32."<br/>";
try{
  include_once "33.php";
}
catch(Exception $e)
{
  echo $e.getMessage();
}
?>

</body>
</html>