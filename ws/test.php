<?php
class Passerelletest
{
  private static $bdd;
  private static function connexion()
	{
		 self::$bdd =new PDO('mysql:host=localhost;dbname=test', 'root', 'root');
		 self :: $bdd ->exec("SET CHARACTER SET utf8");

   }
  public static function addEvenement($id,$dateT){
    self::connexion();
    $requete = self::$bdd->prepare("INSERT INTO toto (num,dateT) VALUES (:id,:dateT)");
    $requete->bindParam(':id',$id);
    $requete->bindParam(':date',$dateT);
    return $requete->execute();
  }
}
?>
