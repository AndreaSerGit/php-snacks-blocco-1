<!-- Creiamo un array 'matches' contenente altri array i
quali rappresentano delle partite di basket di
un’ipotetica tappa del calendario. Ogni array della
partita avrà una squadra di casa e una squadra
ospite, punti fatti dalla squadra di casa e punti fatti
dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo
schema:
Olimpia Milano - Cantù | 55 - 60 -->

<?php

$matches = [
  [
    'squadra di casa'=> 'Roma',
    'squadra ospite' => 'Inter',
    'gol casa' => 2,
    'gol fuori casa' => 2
  ],
  [
    'squadra di casa'=> 'Hellas Verona',
    'squadra ospite' => 'Crotone',
    'gol casa' => 2,
    'gol fuori casa' => 1
  ],
  [
    'squadra di casa'=> 'Parma',
    'squadra ospite' => 'Lazio',
    'gol casa' => 0,
    'gol fuori casa' => 2
  ],
  [
    'squadra di casa'=> 'Udinese',
    'squadra ospite' => 'Napoli',
    'gol casa' => 1,
    'gol fuori casa' => 2
  ],
  [
    'squadra di casa'=> 'Fiorentina',
    'squadra ospite' => 'Cagliari',
    'gol casa' => 1,
    'gol fuori casa' => 0
  ],
  [
    'squadra di casa'=> 'Juventus',
    'squadra ospite' => 'Sassuolo',
    'gol casa' => 3,
    'gol fuori casa' => 1
  ],
];

for($i = 0 ; $i < count($matches) ; $i++ ) {
    echo $matches[$i]['squadra di casa'] . ' - ' . $matches[$i]['squadra ospite'] . ' | ' . $matches[$i]['gol casa'] . ' - ' . $matches[$i]['gol fuori casa'] . '<br>';
};

 ?>
