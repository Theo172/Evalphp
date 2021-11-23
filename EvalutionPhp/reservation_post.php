<?php



require 'includes/database.php';

$id = $_GET['id'];

    
//$message = htmlspecialchars(trim($_POST["msg"]));
$reqReservation = 'UPDATE advert SET reserved = :reserved WHERE id =:id';
//;reservation_message =:reservation_message
$editReservation = $connexion->prepare($reqReservation);
$editReservation->bindValue(':reserved', true);
$editReservation->bindValue(':id', $id);
//$editReservation->bindValue(':reservation_message', $message);

$editReservation->execute();