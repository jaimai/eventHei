<?php
require('PasserelleEvenement.php');
$arrayEvenement = PasserelleEvenement :: getLesEvenementsBde();
print(json_encode($arrayEvenement));

 ?>
