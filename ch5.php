<?php 

$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)];

if ($opponentWeapon == $weapons[0]) {
  $stevensonWeapon = 'whip';
} elseif ($opponentWeapon == $weapons[1]) {
    $stevensonWeapon = 'fists';
} else {
    $stevensonWeapon = 'gun';
} 

echo $stevensonWeapon;