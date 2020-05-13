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
      $usun = $baza -> prepare("DELETE FROM studenci WHERE id=:id");
      $usun -> bindValue(':id', $_POST['lista'], PDO::PARAM_INT);
      $usun -> execute();
    }
    catch (Exception $e) {
      echo  $e->getMessage();
    }
  ?>
</body>
</html>