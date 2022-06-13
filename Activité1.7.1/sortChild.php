<?php 
require('monstreChild.php');

class Sort extends Carte {

     function __construct($mana,$degat) {
        parent::__construct($mana,$degat);
     }
  
    public function attaquer ( Monstre $monstre){
      
        $dg = $monstre->getVie() - $this->degat;
        // echo $dg;
       $monstre->setVie($dg);
       echo $monstre->getVie();
    }
}
$monstre=new Monstre(5,20,3);
$sort=new sort(4,6);
// $monstre=new Monstre(5,10,3);
// echo $monstre->getvie().PHP_EOL;
$sort->attaquer($monstre);
?>