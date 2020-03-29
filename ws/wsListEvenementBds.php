<?php
require('PasserelleEvenement.php');
$arrayEvenement = PasserelleEvenement :: getLesEvenementsBds();
print(json_encode($arrayEvenement));

?>
