<?php
function writeSecretSentence ($animal, $objet) {
  return $animal . ' s\'inline devant ' . $objet;
}

$animal = readline('Entrez le nom d\'un animal :');
$objet = readline('Entrez le nom d\'un objet :');

echo writeSecretSentence($animal, $objet);
