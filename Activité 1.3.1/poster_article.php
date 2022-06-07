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
    Titre :<input type="text" name="titre"/> delete<input type="bool" name="delete"/> <br> 
    Texte :<input type="text" name="texte"/> delete<input type="bool" name="delete"/><br>
    Auteur:<input type="text" name="auteur"/> delete<input type="bool" name="delete"/><br>
    Date :<input type="date" name="date"/> delete <input type="bool" name="delete"/><br>
    <input type="submit" name="publier"/><br>

    </form>
    </body>
    </html> 
    <?php
    
if(isset($_POST['publier'])) {
   if(!empty($_POST['titre']) && !empty($_POST['texte']) && !empty($_POST['auteur'])&& !empty($_POST['date'])) {

     $id=uniqid();
      $titre = htmlspecialchars($_POST['titre']);
      $texte = htmlspecialchars($_POST['texte']);
      $date = htmlspecialchars($_POST['date']);
      $auteur = htmlspecialchars($_POST['auteur']); 
      $supprime=$_POST['supprime'];
      $dataform= array( 'id'=>$id,'titre'=>$titre,'texte'=>$texte,'date'=>$date,'auteur'=>$auteur);
    
    } else {
       echo( $error = 'Merci de compléter tous les champs');
    }
  
    if ( !file_exists('articles.json') ) {
        $arr[0] = $dataform;
        $content = json_encode($arr,JSON_PRETTY_PRINT);
        file_put_contents('articles.json',$content);
    }
    else {

  

   $content = file_get_contents('articles.json');
        $arr = json_decode($content , true);
        $arr[] = $dataform;
        $content = json_encode($arr,JSON_PRETTY_PRINT);
        file_put_contents('articles.json',$content);
    }

 }
//  $id = $_GET['id'];
 
// 	$data = file_get_contents('articles.json');
// 	$json = json_decode($data);
 
// 	unset($json[$id]);
 
// 	$json = json_encode($json, JSON_PRETTY_PRINT);
// 	file_put_contents('articles.json', $json);
 
// 	header('location: index.php');

//  require ('user.class.php');
//  $arr-> deleteUser($id='629e197c44006');

