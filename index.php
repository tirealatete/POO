<?php

include_once('Membre.class.php');

$membre = new Membre();
$membre->setPseudo('Mateo21');
echo $membre->getPseudo() . ', je vais te bannir !';
$membre->bannir();

$membre = new Membre(32); // Le membre n° 32 est chargé !
?>