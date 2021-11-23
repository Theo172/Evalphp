<?php

$viewAnnonces = 'SELECT * from advert';
$reqViewAnnonces = $connexion->query($viewAnnonces);
$annonces = $reqViewAnnonces->fetchAll();