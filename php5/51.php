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

      $dodaj = $baza -> prepare("INSERT INTO studenci(imie, nazwisko, email, id_rok_studiow) VALUES (:imie, :nazwisko, :email, :rok)");
      $dodaj -> bindValue(':imie',$_GET['imie'] , PDO::PARAM_STR);
      $dodaj -> bindValue(':nazwisko',$_GET['nazwisko'] , PDO::PARAM_STR);
      $dodaj -> bindValue(':email',$_GET['email'] , PDO::PARAM_STR);
      $dodaj -> bindValue(':rok', $_GET['rokStudiow'], PDO::PARAM_INT);
      $dodaj->execute();
    }
    catch (Exception $e) {
      echo  $e->getMessage();
    }
  ?>
</body>
</html>