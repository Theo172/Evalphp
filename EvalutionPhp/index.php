<?php

require_once '_navbar.php';
require 'includes/database.php';
include_once '_view_annonces.php';

$id = $connexion->prepare('SELECT count(*) FROM advert');
$id->execute();

$resultatId = $id->fetchColumn();

for ($id=0; $id<16;$id++){include_once '_views.php';};

?>