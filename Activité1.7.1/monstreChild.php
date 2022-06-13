<?php 
include ('cartes.php');
include ('DamageableInterface.php');
class Monstre extends Carte  implements DamageableInterface {
  
    private int $vie ;
    function __construct($mana,$degat,$vie){
        parent::__construct($mana,$degat);
        $this->vie = $vie;    
    }
    
    public function setVie($vie){
        $this->vie = $vie;
     }
     public function getVie(){
        return $this->vie;
      
     } 
  
     public function takeDamages($n){
        if(  $this->vie > $n){
       return  $this->vie= $this->vie - $n;}else{
           return $this->vie=0;
        }
     }
    public function attaquer ( DamageableInterface $monstre){
        $monstre->takeDamages($this->degats);

        print_r($monstre);
    }

  
}

$monstre=new Monstre(5,10,3);
$monstre1=new Monstre(2,5,3);
$monstre2=new Monstre(4,9,3);
 echo $monstre->getMana();
$monstre->attaquer($monstre1);
?>