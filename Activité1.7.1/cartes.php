<?php 
abstract class Carte {
 
   protected int $mana;
   protected int $degat;

     function __construct($mana,$degat) {
          $this->mana = $mana;
          $this->degat = $degat;  
     }
  
    //  public function setMana($mana){
    //     $this->mana = $mana;
    //  }
    public function getMana(){
        return $this->mana;
        
    }
    public function getDegat(){
     
        return $this->degat;
    }
   
}
