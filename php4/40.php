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

    $baza -> exec("INSERT INTO rok (id, nazwa, kierunek, stopien) VALUES(1, 'PierwszyInf', 'Informatyka', 1), (2, 'DrugiInf', 'Informatyka', 2)");
    $baza -> exec("INSERT INTO studenci (imie, nazwisko, email, id_rok_studiow) VALUES('Jan', 'Nowak', 'jn@email.com', 1), ('Adam', 'Kowalski', 'ak@email.com', 2), ('Mariusz', 'Dudek', 'md@email.com', 1)");
  
  }
  catch (PDOException $e) {
    echo  $e->getMessage();
  }
  
  ?>
</body>
</html>