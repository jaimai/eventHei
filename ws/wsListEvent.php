<?php
require('PasserelleEvenement.php');
$arrayEvenement = PasserelleEvenement :: getLesEvenements();
print(json_encode($arrayEvenement));

?>
