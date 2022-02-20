<?php
session_start();

$titre = 'Accueil';

require 'header.php';

$querySelect = $pdo->prepare("SELECT livre.*, auteur.nom, auteur.prenom, genre.genre_nom FROM livre JOIN auteur ON livre.auteur_id = auteur.id JOIN genre ON livre.genre_id = genre.id");

$querySelect->execute();
$books = $querySelect->fetchAll(PDO::FETCH_OBJ);

?>
<h1>Liste des livres</h1>
<div>
    <?php foreach ($books as $book) : ?>
        <h2><?= htmlentities($book->titre); ?></h2>
        <div class="d-flex">
            <span>
                <p>Auteur : </p>
            </span>
            <span>
                <p>
                    <?= htmlentities($book->prenom) . ' ' .  htmlentities($book->nom); ?>
                </p>
            </span>
            <span>
                <p>Genre : </p>
            </span><span>
                <p><?= htmlentities($book->genre_nom); ?></p>
            </span>
            <span>
                <p>Édition : </p>
            </span><span>
                <p><?= htmlentities($book->edition); ?></p>
            </span>
            <span>
                <p>Parution : </p>
            </span><span>
                <p><?= htmlentities($book->publication); ?></p>
            </span>
            <span>
                <p>Prix : </p>
            </span><span>
                <p><?= htmlentities($book->prix); ?> €</p>
            </span>
        </div>
        <div>
            <p>Résumé :</p>
            <p><?= htmlentities($book->resume); ?></p>
        </div>
        <div>
            <button type="button" name="add"><a href="addCart.php?id=<?= $book->id; ?>">Ajouter au panier</a></button>
        </div>
    <?php endforeach ?>
</div>



<?php

require 'footer.php';
