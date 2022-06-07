<?php include_once("header.php") ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <form method="Post" action="" > 
    Titre :<input type="text" name="titre"/>  <br> 
    Texte :<input type="text" name="texte"/> <br>
    Auteur:<input type="text" name="auteur"/> <br>
    Date :<input type="date" name="date_pub"/> <br>
    <input type="submit" name="publier"/><br>

    </form>
    </body>
    </html> 
    <?php include('connectDB.php') ?>
    <?php
    if ( isset($_POST['publier'])) {
    
        $sqlQuery = 'INSERT INTO articles(titre, texte, auteur, date_pub) VALUES (:titre, :texte, :auteur, :date_pub)';
        
        $insertArticle = $db->prepare($sqlQuery);
        
        $insertArticle->execute([
            'titre' => $_POST['titre'],
            'texte' => $_POST['texte'],
            'auteur' => $_POST['auteur'],
            'date_pub' => $_POST['date_pub'], 
        ]);
    }
   
// if(isset($_POST['publier'])) {
//    if(!empty($_POST['titre']) && !empty($_POST['texte']) && !empty($_POST['auteur'])&& !empty($_POST['date'])) {

//      $id=uniqid();
//       $titre = htmlspecialchars($_POST['titre']);
//       $texte = htmlspecialchars($_POST['texte']);
//       $date = htmlspecialchars($_POST['date']);
//       $auteur = htmlspecialchars($_POST['auteur']); 
//       $supprime=$_POST['supprime'];
//       $dataform= array( 'id'=>$id,'titre'=>$titre,'texte'=>$texte,'date'=>$date,'auteur'=>$auteur);
    
//     } else {
//        echo( $error = 'Merci de compléter tous les champs');
//     }
  
//     if ( !file_exists('articles.json') ) {
//         $arr[0] = $dataform;
//         $content = json_encode($arr,JSON_PRETTY_PRINT);
//         file_put_contents('articles.json',$content);
//     }
//     else {

  

//    $content = file_get_contents('articles.json');
//         $arr = json_decode($content , true);
//         $arr[] = $dataform;
//         $content = json_encode($arr,JSON_PRETTY_PRINT);
//         file_put_contents('articles.json',$content);
//     }

//  }


