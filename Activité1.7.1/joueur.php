<?php 
require('monstreChild.php');
class Joueur {
  
    private string $pseudo;
    private int $vie =30;
    private int $mana =10;
    public array $monstresPlace = array();


    function __construct($pseudo) {
        $this->pseudo = $pseudo;
   }

   public function getmonstresPlace() {
    return $this->monstresPlace;
}
 
    public function placerMonstre (Monstre $monstre){
       
        if (count($this->monstresPlace)<5){
             array_push($this->monstresPlace, $monstre);}else{
                echo'your desk is full';
             }

        // print_r($this->monstresPlace);
        
    }
    public function  __toString() {
        $str=''; 
        foreach ($this->monstresPlace as $key =>$value){
       $str= $str .'le joueur '.$this->pseudo .' possede le monstre N°'.($key+1). ' de points de Mana '. $value->getMana(). ' de points de Dégat '. $value->getDegat(). ' et de points de Vie '. $value->getVie() .PHP_EOL;
      
        }
        return PHP_EOL. $str;
    }
     
}

$joueur=new Joueur('rania');
 $joueur->placerMonstre($monstre1);
$joueur->placerMonstre($monstre2);
$joueur->placerMonstre($monstre);
// $joueur->placerMonstre($monstre1);
// $joueur->placerMonstre($monstre2);
// $joueur->placerMonstre($monstre);
echo $joueur->monstresPlace;
echo $joueur->__toString();



