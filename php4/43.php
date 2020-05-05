<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  table, td{
    border: 2px solid black;
  }
  </style>
</head>
<body>
  <?php
    try{
      $baza = new PDO("mysql:host=localhost;dbname=uczelnia", "root");

      $studenci = $baza -> query("SELECT imie, nazwisko, id_rok_studiow FROM studenci")->fetchAll();
      $tabela = "<table><th>Imie</th><th>Nazwisko</th><th>Kierunek</th><th>Stopien</th>";

      foreach($studenci as $student)
      {
        $kierunek = $baza -> query("SELECT kierunek FROM rok WHERE id = ".$student['id_rok_studiow'])->fetch();
        $stopien = $baza -> query("SELECT stopien FROM rok WHERE id = ".$student['id_rok_studiow'])->fetch();
        $tabela .= "<tr><td>".$student['imie']."</td><td>".$student['nazwisko']."</td>";
        $tabela .= "<td>".$kierunek['kierunek']."</td>";
        $tabela .= "<td>".$stopien['stopien']."</td></td>";
      }

      $tabela .= "</table>";
      echo $tabela;
    }
    catch (Exception $e) {
      echo  $e->getMessage();
    }
  ?>
</body>
</html>