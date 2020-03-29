<?php
require('Categorie.php');

class PasserelleCategorie
{
  private static $bdd;
  private static function connexion()
	{
		 self::$bdd =new PDO('mysql:host=localhost;dbname=heievenement', 'root', 'root');
		 self :: $bdd ->exec("SET CHARACTER SET utf8");
	}

  public static function getLesCategories(){
		self::connexion();
		$arrayCategorie = array();
		$requete = "SELECT * FROM categorie";
		$sql = self :: $bdd->query($requete);
		$resultat = $sql -> fetchAll();
		foreach ($resultat as $key) {
			$arrayCategorie[] = array("idCategorie" =>$key['idCategorie'],"nomCategorie"=>$key['nomCategorie']);
		}
		return $arrayCategorie;
	}
}
