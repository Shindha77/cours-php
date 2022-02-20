<?php
session_start();
$titre = 'Mon panier';
require 'header.php';

if (empty($_SESSION['name'])) {
    header('location: login.php');
    exit();
}
$total = 0;
$ids = array_keys($_SESSION['cart']);
if (empty($ids)) {
    $products = array();
} else {
    $products = $pdo->query('SELECT livre.*, auteur.nom, auteur.prenom FROM livre JOIN auteur ON livre.auteur_id = auteur.id WHERE livre.id IN (' . implode(',', $ids) . ')');
    $products = $products->fetchAll(PDO::FETCH_OBJ);
}

if (isset($_GET['del'])) {
    unset($_SESSION['cart'][$_GET['del']]);
    header('location: cart.php');
}

foreach ($products as $product) :
?>
    <h1>Mon Panier</h1>
    <p>Total du panier : <?= $product->prix; ?> €</p>

    <h2><?= $product->titre; ?></h2>
    <p><?= $product->prenom . ' ' . $product->nom; ?></p>
    <p>Prix unitaire : <?= $product->prix; ?> €</p>
    <p>Quantité : <?= $_SESSION['cart'][$product->id]; ?></p>
    <button type="button" name="del"><a href="cart.php?del=<?= $product->id; ?>"> Supprimer du panier</a></button>

<?php endforeach; ?>
<?php
require 'footer.php';
