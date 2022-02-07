<?php

$books['Prince Othon'] = '1885';
$books['L\'ile au trésor'] = '1883';
$books['La flèche noire'] = '1888';

asort($books);

foreach ($books as $key => $book){
  echo $book . ' - ' . $key;
}
