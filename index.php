<?php

require 'livres.php';

$livre = new Livre ('Titre','auteur', 100);

$livre2 = new Livre ('Toto va à la plage', 'Jérémy H', 87, 12);

echo $livre.'<br>';
echo $livre2;
