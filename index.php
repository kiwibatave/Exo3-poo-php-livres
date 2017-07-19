<?php

require 'livres.php';

$test = new Livre ('Titre','auteur', 100);

echo $test->show();
// echo $test->sell();
