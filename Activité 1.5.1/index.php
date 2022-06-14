<?php
     session_start();

     if(!isset($_SESSION['logged_user'])){
         header('Location:'.$rootUrl.'login.php');
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div>
<?php include 'header.php'; ?> 

<div class="alert alert-primary" role="alert">
Bienvenue ,vous voulez se connecter! <a href="connexion.php" class="alert-link">appuyez ici</a>
</div>
<div class="alert alert-secondary" role="alert">
  Bienvenue ,vous voulez s'inscrire! <a href="inscription.php" class="alert-link">appuyez ici</a>
</div>
