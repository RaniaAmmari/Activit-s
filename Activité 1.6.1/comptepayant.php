<?php
require_once('Gcompte.php');
class Comptepayant extends Compte {
    function __construct($sldcompte=0){
    parent::__construct($sldcompte);
}

  public function deposer($montant) {
    // ajoute montant au solde
    parent::deposer($montant);
    parent::retirer(2);
}
public function retirer($montant) {
    // ajoute montant au solde
    parent::retirer($montant);
    parent::retirer(2);
} 
}
$Comptepayant= new Comptepayant(200);
$Comptepayant->deposer(100);
echo $Comptepayant->consulter();