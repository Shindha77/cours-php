<?php
session_start();

$titre = 'Ajouté au panier';

require 'header.php';

if(empty($_SESSION['name']))
{
  header("location: login.php");
  exit();
}

if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$product = $pdo->prepare("SELECT id FROM livre WHERE id =:id");
$product->bindValue(":id", $_GET['id'], PDO::PARAM_INT);
$product->execute();
$product = $product->fetchAll(PDO::FETCH_OBJ);

if (isset($_SESSION['cart'][$product[0]->id])) {
    $_SESSION['cart'][$product[0]->id]++;
} else {
$_SESSION['cart'][$product[0]->id] = 1;
}
?>

<h2>Produit ajouté au panier</h2>
<h3><a href="index.php"> Retourner à la liste des livres</a></h3>