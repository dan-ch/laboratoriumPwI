<?php
$a = $_POST['a'];
$b = $_POST['b'];
if($a!= null && $b!=null){
echo nl2br("Suma: ".  ($a + $b). "\n");
echo nl2br("Różnica: ".  ($a - $b). "\n");
echo nl2br("Iloczyn: ".  ($a * $b). "\n");
if($b==0)
  echo nl2br("Dzielenie przez zero\n");
else
  echo nl2br("Iloraz: ".  ($a / $b). "\n");
}
else
  echo "Uzupełnij dane";
?>