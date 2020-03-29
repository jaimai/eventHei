<?php
require('PasserelleCategorie.php');
$arrayCategorie = PasserelleCategorie :: getLesCategories();
print(json_encode($arrayCategorie));
?>
