<?php
class Categorie{
  /***

    ATTRIBUTE

  **/
  private $idCategorie;
  private $nomCategorie;

  /***

    CONSTRUCTORS

  **/
  public function __construct($idCategorie,$nomCategorie){
    $this->idCategorie = $idCategorie;
    $this->nomCategorie = $nomCategorie;
  }

  /***

    GETTER

  **/
  public function getIdCategorie(){
    return $this->idCategorie;
  }
  public function getNomCategorie(){
    return $this->nomCategorie;
  }
  /***

    TOSTRING

  **/
  public function toString(){
    return $this->idCategorie."->".$this->nomCategorie;
  }

}



?>
