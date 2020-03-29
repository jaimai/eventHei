<?php
require('PasserelleEvenement.php');
$arrayEvenement = PasserelleEvenement :: getLesEvenementsAdministration();
print(json_encode($arrayEvenement));

 ?>
