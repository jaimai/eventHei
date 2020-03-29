<?php 
class Evenement{
  /***

    ATTRIBUTE

  **/
  private $idEvenement;
  private $nomEvenement;
  private $dateEvenement;
  private $nombreParticipant;
  private $urlImage;
  private $numCategorie;

  /***

    CONSTRUCTORS

  **/
  public function __construct($idEvenement,$nomEvenement,$dateEvenement,$nombreParticipant,$urlImage,$numCategorie){
    $this->idEvenement = $idEvenement;
    $this->nomEvenement = $nomEvenement;
    $this->dateEvenement = $dateEvenement;
    $this->nombreParticipant = $nombreParticipant;
    $this->urlImage = $urlImage;
    $this->numCategorie = $numCategorie;
  }
  /***

    GETTER

  **/
  public function getIdEvenement(){
    return $this->idEvenement;
  }
  public function getNomEvenement(){
    return $this->nomEvenement;
  }
  public function getDateEvenement(){
    return $this->dateEvenement;
  }
  public function getNombrePaticipant(){
    return $this->nombreParticipant;
  }
  public function getUrlImage(){
    return $this->urlImage;
  }
  public function getNumCategorire(){
    return $this->numCategorie;
  }
  /***

    SETTER

  **/
  public function setNomEvenement ($nomEvent){
		 $this->nomEvenement =$nomEvent;
	}
  public function setDateEvenement($dateEvent){
		 $this->dateEvenement = $dateEvent;
	}
  public function setNombreParticipant ($nombreP){
		 $this->nombreParticipant = $nombreP;
	}
  public function setUrlImage ($urlImg){
		 $this->urlImage = $urlImg;
	}
  public function setNumCategorie ($numCate){
		 $this->numCategorie = $numCate;
	}
  /***

    TOSTRING

  **/
  public function toString(){
		return $this->idEvenement." -> ".$this->nomEvenement." - ".$this->dateEvenement." - ".$this->nombreParticipant." - ".$this->numCategorie;
	}
}
?>
