<?php
require('PasserelleEvenement.php');
$numCategorie = $_GET['numCategorie'];
$arrayCategorie = PasserelleEvenement :: getLesEvenementSuivi($numCategorie);
print(json_encode($arrayCategorie));
?>
