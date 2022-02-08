<?php

$movies = [
  'Dr. Jekyll and Mr. Hyde' => ['Gianni Capaldi', 'Shaun Paul Piccinino', 'David Beatty'],
  'L\'île au trésor' => ['Eddie Izzard', 'Toby Regbo', 'Rupert Penny-Jones'],
  'Pirates of Treasure Island' => ['Justin Jones', 'Derek Osedach', 'James Ferris']
];

foreach ($movies as $movie => $listActors) {

  echo "Dans le film $movie, les principaux acteurs sont :\n";

  foreach ($listActors as $actor) {

    echo "$actor, ";
  }

  echo "\n";
}