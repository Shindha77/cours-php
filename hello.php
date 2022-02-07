<?php

$title = "Voyage avec un âne dans les Cévennes";
$read = false;
$release = 2017;
$price = 7.99;

echo $title . '<br>';
if (is_bool($read)){
  echo "Je ne l'ai pas lu" . '<br>';
}
echo $release . '<br>';
echo $price;

?>