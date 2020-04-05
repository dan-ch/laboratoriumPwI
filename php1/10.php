<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h1>Pętla for</h1>
<?php
for ($i = 1; $i <= 15; $i++) {
  echo nl2br("$i \n") ;
}
?>

<h1>Pętla while</h1>
<?php
$i = 1;
while ($i <=15){
echo nl2br("$i \n");
$i++;
}
?>

<h1>Pętla foreach</h1>
<?php
foreach(range(1,15) as $i){
  echo nl2br("$i \n");
}
?>
</body>
</html>