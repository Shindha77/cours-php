<?php
session_start();
$title = 'Mon panier';
require 'header.php';

if(empty($_SESSION['name']))
{
  header("location: login.php");
  exit();
}
?>

<h2>Mon panier</h2>


<?php
require 'footer.php';