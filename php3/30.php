<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
try{
  file_put_contents("plik.txt", "Hello, World!");
}
catch(Exception $e){
echo $e.getMessage();
}
?>
</body>
</html>