<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<a href="23.php">przejdź do pliku 23.php</a>
<br>
  <?php
  session_start();
  echo $_SESSION['sesja'];
  ?>
</body>
</html>