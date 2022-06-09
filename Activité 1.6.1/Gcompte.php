<?php 
class Compte {
  
    private float $sldcompte;
     private int $code;
     private static int $nb=1;
     
     function __construct($sldcompte=0) {
          $this->sldcompte = $sldcompte;
          $this->code = self::$nb++;   
     }
     // PERMET DE MODIFIER LE SOLDE
    //  public function setsld($sldcompte){

    //     if (isset($sldcompte) ){
    //         $this->sldcompte=$sldcompte;
    //     }else { 
    //         $this->sldcompte=0;
    //     }
    //  }
    //  public function inccode($nb){
    //      self::$nb++;
    //      $this->code=$nb;
    //  }
     public function getsld (){
        return $this->sldcompte ;

    }

     public function deposer($montant) {
          // ajoute montant au solde
          $this->sldcompte+=$montant;
         

     }
     public function retirer ($montant) {
        // retirer montant au solde
        $this->sldcompte-=$montant; 
        
   }
   public function consulter () {
    // affichage montant au solde
   return " l'identifiant n° ". $this->code ." votre montant actuel est " .number_format($this->sldcompte, 2, '.', ' ') ; 
    
}
  
}

 $obj1= new Compte(100);
var_dump($obj1) ;
// // // $obj2= new Compte(300);
//  var_dump($obj1) ;


// // echo $obj1->consulter();

// // echo $objet;
// // $objt2->deposer(200,1000 );

?>