<?php include_once("connectDB.php") ?>
<?php 
// $article = array( 'titre' => 'les miserables' , 'texte' => 'la littérature française' ,'auteur' => 'Victor Hugo','date' => '1862' );
// $article = array('titre' => 'Alcools d’Apollinaire', 'texte' => 'la littérature française' ,'auteur' => 'Guillaume Apollinaire','date' => '1913' );
// $article = array('titre' =>' L’Etranger', 'texte' => 'la littérature française' ,'auteur' =>'Albert Camus','date' => '1942' );
// print_r($article) ;
// function getArticles (){
// return $article  ;
// }
// echo getArticles();
$articlesStatement = $db->prepare('SELECT * FROM articles');
$articlesStatement->execute();
$articles = $articlesStatement->fetchAll();

// $articles = array(
//     array ( 'titre'=>'les miserables' ,'texte'=>'la littérature française' , 'auteur'=>'Victor Hugo','date'=>'10-7-1999'),
//     array ( 'titre'=>'Alcools d’Apollinaire',  'texte'=>'la littérature française' , 'auteur'=>'Guillaume Apollinaire', 'date'=>'22-11-1994' ), 
//     array ('titre'=>' L’Etranger', 'texte'=> 'la littérature française' ,'auteur'=>'Albert Camus', 'date'=>'07-04-1970'),
//     array ('titre'=>' Freedome', 'texte'=> 'la littérature anglaise' ,'auteur'=>'James Camus', 'date'=>'07-04-2000'),
// );   
// $articles_json = file_get_contents("articles.json");
// $articles = json_decode($articles_json, true);

// function getArticles (){
  
    // function date_compare($element1, $element2) {
    //     $datetime1 = strtotime($element1['date_publication']);
    //     $datetime2 = strtotime($element2['date_publication']);
    //     return $datetime2 - $datetime1;
    //     } 
    //     usort($articles, 'date_compare');
//$articles=array_reverse($articles);
// usort($articles,function($x,$y){
//     return strtotime($y['date']) <=> strtotime($x['date']);
// }
// );
function getArticles($n){
  global $articles;
  if ($n> count ($articles) ){
      return $articles;
  }  for ($x = 0; $x <$n; $x++) {
   $articles[]=$articles[$x];

      }
      return $articles ;
}


// print_r (getArticles(3));
?>
