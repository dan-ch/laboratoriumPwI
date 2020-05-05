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
    $baza = new PDO("mysql:host=localhost;dbname=uczelnia", "root");

    $baza -> exec("DELETE FROM studenci WHERE id = 2");
  }
  catch (PDOException $e) {
    echo  $e->getMessage();
  }
  ?>
</body>
</html>