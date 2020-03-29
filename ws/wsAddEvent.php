<?php
require('PasserelleEvenement.php');
$nomEvenement = $_GET['nomEvenement'];
$dateEvenement= $_GET['dateEvenement'];
$nombreParticipant= $_GET['nombreParticipant'];
$urlImage= $_GET['urlImage'];
$numCategorie= $_GET['numCategorie'];
var_dump($nomEvenement."-".$dateEvenement."-".$nombreParticipant."-".$urlImage."-".$numCategorie);
PasserelleEvenement :: addEvenement($nomEvenement,$dateEvenement,$nombreParticipant,$urlImage,$numCategorie);
//http://localhost:8080/ws/wsAddEvent.php?nomEvenement=toto&dateEvenement=2019-11-11&nombreParticipant=10&urlImage=test&numCategorie=1
?>
