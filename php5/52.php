<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>Lista studentów</p>

  <form action="53.php" method="POST">
  <select name="lista" id="st">
  <?php
    try{
      $baza = new PDO("mysql:host=localhost;dbname=uczelnia", "root");

      $studenci = $baza -> query("SELECT id, imie, nazwisko FROM studenci")->fetchAll();

      foreach($studenci as $student)
      {
        echo '<option value="'.$student['id'].'">'.$student['imie'].' '.$student['nazwisko'].'</option>';
      }
    }
    catch (Exception $e) {
      echo  $e->getMessage();
    }
  ?>
  </select>
  <button type="submit">Usun studenta</button>
  </form>
</body>
</html>