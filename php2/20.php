<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <a href="21.php">przejdź do pliku 21.php</a>
  <br>
  <?php
  session_start();
  $_SESSION["sesja"] = "Ala ma kota";
  ?>
</body>
</html>