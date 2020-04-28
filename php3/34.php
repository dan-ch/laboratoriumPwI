<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
try {
  $baza = new PDO("mysql:host=localhost;dbname=motoryzacja", "root");
  $sam = $baza->query("SELECT id, marka, model, pojemnosc FROM samochody WHERE id=1 or id=3")->fetchAll();

  foreach ($sam as $wiersz) {
    echo "Marka: ".$wiersz['marka']."<br/>";
    echo "Model: ".$wiersz['model']."<br/>";
    echo "Pojemnosc: ".$wiersz['pojemnosc']."<br/><br/>"; 
  }
} catch (PDOException $e) {
  echo 'Błąd połączenia' . $e->getMessage();
}
?>
</body>
</html>
