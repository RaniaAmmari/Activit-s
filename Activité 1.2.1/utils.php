<?php 
// $article = array( 'titre' => 'les miserables' , 'texte' => 'la littérature française' ,'auteur' => 'Victor Hugo','date' => '1862' );
// $article = array('titre' => 'Alcools d’Apollinaire', 'texte' => 'la littérature française' ,'auteur' => 'Guillaume Apollinaire','date' => '1913' );
// $article = array('titre' =>' L’Etranger', 'texte' => 'la littérature française' ,'auteur' =>'Albert Camus','date' => '1942' );
// print_r($article) ;
// function getArticles (){
// return $article  ;
// }
// echo getArticles();

$articles = array(
    array ( 'titre'=>'les miserables' ,'texte'=>'la littérature française' , 'auteur'=>'Victor Hugo','date'=>'10-7-1999'),
    array ( 'titre'=>'Alcools d’Apollinaire',  'texte'=>'la littérature française' , 'auteur'=>'Guillaume Apollinaire', 'date'=>'22-11-1994' ), 
    array ('titre'=>' L’Etranger', 'texte'=> 'la littérature française' ,'auteur'=>'Albert Camus', 'date'=>'07-04-1970'),
    // array ('titre'=>' Freedome', 'texte'=> 'la littérature anglaise' ,'auteur'=>'James Camus', 'date'=>'07-04-2000'),
);   

// function getArticles (){
  
    
//$articles=array_reverse($articles);
usort($articles,function($x,$y){
    return strtotime($y['date']) <=> strtotime($x['date']);
}
);
function getArticles($n){
  global $articles;
  if ($n> count ($articles) ){
      return $articles;
  }  for ($x = 0; $x <$n; $x++) {
   $tab[]=$articles[$x];

      }
      return $tab ;
}


// print_r (getArticles(1));
?>
