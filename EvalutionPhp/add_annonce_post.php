<?php


require 'includes/database.php';

if (empty($_POST['title']) || empty($_POST['code_postal']) || empty($_POST['city']) || empty($_POST['type']) || empty($_POST['price'])) {
    header('Location:add_annonce.php?error=missingInput');
    exit();
} else {
    $title = htmlspecialchars(trim($_POST['title']));
    $description = htmlspecialchars(trim($_POST['description']));
    $code_postal = htmlspecialchars(floatval($_POST['code_postal']));
    $city = htmlspecialchars(trim($_POST['city']));
    $type = htmlspecialchars(trim($_POST['type']));
    $price = htmlspecialchars(floatval($_POST['price']));
    
    if (!empty($_POST['description'])) {
        $description = htmlspecialchars(trim($_POST['description']));
    } else {
        $description = null;
    } 
}

$insertAnnonce = 'INSERT INTO wf3_php_intermediaire_theo.advert (title,description,code_postal,city,type,price) VALUES(:title,:description,:code_postal,:city,:type,:price)';
$reqInsertAnnonce = $connexion->prepare($insertAnnonce);
$reqInsertAnnonce->bindValue(':title', $title, PDO::PARAM_STR);
$reqInsertAnnonce->bindValue(':description', $description, PDO::PARAM_STR);
$reqInsertAnnonce->bindValue(':code_postal', $code_postal);
$reqInsertAnnonce->bindValue(':city', $city, PDO::PARAM_STR);
$reqInsertAnnonce->bindValue(':type', $type, PDO::PARAM_STR);
$reqInsertAnnonce->bindValue(':price', $price);

if ($reqInsertAnnonce->execute()) {
    header('Location:annonces.php?success=bravo');
    exit();
} else {
    header('Location:add_annonce.php?error=fail');
    exit();
}