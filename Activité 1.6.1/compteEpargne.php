<?php
require_once('Gcompte.php');
class CompteEpargne extends Compte {
    private float $tauxInteret=6;

    function __construct($sldcompte=0){
      parent::__construct($sldcompte);
      $this->tauxInteret =6;
}
    public function calculInteret($sldcompte) {
    
    parent::deposer(($sldcompte)*$this->tauxInteret /100);}

    public function consulter () {
        
       return "Salut". parent::consulter ()." avec un interet " .$this->tauxInteret ."%"; 
        
    }
    
}
//   public function deposer($montant) {
//     // ajoute montant au solde
//     parent::deposer($montant);
//     parent::retirer(2);
// }
// public function retirer($montant) {
//     parent::retirer($montant);
//     parent::retirer(2);
// } 

$Compte= new CompteEpargne(200);
$Compte->calculInteret(100);
echo $Compte->consulter();