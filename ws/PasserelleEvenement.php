<?php
require('Evenement.php');

class PasserelleEvenement
{
  private static $bdd;
  private static function connexion()
	{
		 self::$bdd =new PDO('mysql:host=localhost;dbname=heievenement', 'root', 'root');
		 self :: $bdd ->exec("SET CHARACTER SET utf8");
	}
  public static function getLesEvenements(){
		self::connexion();
		$arrayEvenement = array();
		$requete = "SELECT * FROM evenement ORDER BY dateEvenement";
		$sql = self :: $bdd->query($requete);
		$resultat = $sql -> fetchAll();
		foreach ($resultat as $key) {
			$arrayEvenement[] = array("idEvenement" =>$key['idEvenement'],"nomEvenement"=>$key['nomEvenement'], "dateEvenement"=>$key['dateEvenement'],"nombreParticipant"=>$key['nombreParticipant'],
				"numCategorie"=>$key['numCategorie']);
		}
		return $arrayEvenement;
	}
  public static function getLesEvenementsBde(){
		self::connexion();
		$arrayEvenement = array();
		$requete = "SELECT * FROM evenement WHERE numCategorie = 1 ORDER BY dateEvenement";
		$sql = self :: $bdd->query($requete);
		$resultat = $sql -> fetchAll();
		foreach ($resultat as $key) {
			$arrayEvenement[] = array("idEvenement" =>$key['idEvenement'],"nomEvenement"=>$key['nomEvenement'], "dateEvenement"=>$key['dateEvenement'],"nombreParticipant"=>$key['nombreParticipant'],
				"numCategorie"=>$key['numCategorie']);
		}
		return $arrayEvenement;
	}
  public static function getLesEvenementsBds(){
		self::connexion();
		$arrayEvenement = array();
		$requete = "SELECT * FROM evenement WHERE numCategorie = 2 ORDER BY dateEvenement";
		$sql = self :: $bdd->query($requete);
		$resultat = $sql -> fetchAll();
		foreach ($resultat as $key) {
			$arrayEvenement[] = array("idEvenement" =>$key['idEvenement'],"nomEvenement"=>$key['nomEvenement'], "dateEvenement"=>$key['dateEvenement'],"nombreParticipant"=>$key['nombreParticipant'],
				"numCategorie"=>$key['numCategorie']);
		}
		return $arrayEvenement;
	}
  public static function getLesEvenementsAdministration(){
    self::connexion();
    $arrayEvenement = array();
    $requete = "SELECT * FROM evenement WHERE numCategorie = 3 ORDER BY dateEvenement";
    $sql = self :: $bdd->query($requete);
    $resultat = $sql -> fetchAll();
    foreach ($resultat as $key) {
      $arrayEvenement[] = array("idEvenement" =>$key['idEvenement'],"nomEvenement"=>$key['nomEvenement'], "dateEvenement"=>$key['dateEvenement'],"nombreParticipant"=>$key['nombreParticipant'],
        "numCategorie"=>$key['numCategorie']);
    }
    return $arrayEvenement;
  }
  public static function addEvenement($nomEvenement,$dateEvenement,$nombreParticipant,$urlImage,$numCategorie){
    self::connexion();
    $requete = self::$bdd->prepare("INSERT INTO evenement (nomEvenement,dateEvenement,nombreParticipant,urlImage,numCategorie) VALUES (:nomEvenement,:dateEvenement,:nombreParticipant,:urlImage,:numCategorie)");
    $requete->bindParam(':nomEvenement',$nomEvenement);
    $requete->bindParam(':dateEvenement',$dateEvenement);
    $requete->bindParam(':nombreParticipant',$nombreParticipant);
    $requete->bindParam(':urlImage',$urlImage);
    $requete->bindParam(':numCategorie',$numCategorie);

    return $requete->execute();
  }

  public static function getLesEvenementSuivi($numCategorie){
    self::connexion();
    $arrayEvenement = array();
    $requete = self :: $bdd->prepare("SELECT * FROM evenement WHERE numCategorie = :numCategorie ORDER BY dateEvenement");
    $requete->bindParam(':numCategorie',$numCategorie);
    $requete->execute();
    $resultat = $requete -> fetchAll();
    foreach ($resultat as $key) {
      $arrayEvenement[] = array("idEvenement" =>$key['idEvenement'],"nomEvenement"=>$key['nomEvenement'], "dateEvenement"=>$key['dateEvenement'],"nombreParticipant"=>$key['nombreParticipant'],
        "numCategorie"=>$key['numCategorie']);
    }
    return $arrayEvenement;
  }
}


?>
