<?php
if(($_GET['a'])==null)
  echo nl2br("Nie podano pierwszej liczby \n");
else
  echo nl2br("Pierwsza liczba to: ". $_GET['a']. "\n");
if(($_GET['b'])==null)
  echo nl2br("Nie podano drugiej liczby \n");
else
  echo nl2br("Druga liczba to: ". $_GET['b']. "\n");
?>