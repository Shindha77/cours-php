<?php
session_start();
$titre = 'Login';
require 'header.php';

if (isset($_POST['name'])) {
    $_SESSION['name'] = $_POST['name'];
}

if (isset($_POST['validate']))
    if (!empty($_POST['name'])) {
        header("location: index.php");
    }
?>

<form action="" method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div class="button">
        <button type="submit" name="validate">S'identifier</button>
    </div>
</form>




<?php
require 'footer.php';
