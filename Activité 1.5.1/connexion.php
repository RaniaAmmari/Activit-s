<?php include_once("header.php") ?>
<?php include('connectDB.php') ?>
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
    <form method="Post" action="connexion.php"> 
    <div class="mb-3 row">
    <label for="inputEmail" class="col-sm-2 col-form-label">Identifiant</label>
    <div class="col-sm-10">
      <input type="texte"  class="form-control" id="inputemail" name='identifiant'>
    </div>
  </div>
    <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Mot de Passe</label>
    <div class="col-sm-10">
      <input type="mdp" class="form-control" id="inputPassword" name='mdp'>
    </div>
    <div class="mb-3 row">
    <!-- <label for="inputName" class="col-sm-2 col-form-label">Nom et Prénom</label>
    <div class="col-sm-10">
      <input type="texte" class="form-control" id="inputname">
    </div> -->

    <!-- <div class="mb-3 row"> -->
   <div class="col-sm-10">
    <input type="submit" name="publier"/><br>
  </div>
  <div class="alert alert-primary" role="alert">
      Bienvenue ,vous n'êtes pas encore inscrit! <a href="inscription.php" class="alert-link">appuyez ici</a>
    </div>
  </div>
    </form>
    </body>
    </html> 
    <?php 
    // if ( isset($_POST['soumettre'])) {
    
    //     $sqlQuery = 'INSERT INTO enregistrer(identifiant,mdp ) VALUES (:identifiant, :mdp,)';
        
    //     $insertinfo = $db->prepare($sqlQuery);
        
    //     $insertinfo->execute([
    //         'mdp' => $_POST['mdp'],
    //         'identifiant' => $_POST['identifiant'],
         
    
    //     ]);
    // }
    // Connexion et sélection de la base
$link =mysqli_connect('localhost','root','','inscrit')
    or die("Impossible de se connecter");
echo "Connexion réussie";
// mysqli_select_db("inscrit") or die("Could not select database");
 
// Exécuter des requêtes SQL
$query  = "SELECT * FROM enregistrer ";
$query .= "WHERE 'identifiant' = ". $identifiant ." ";
$query .= "AND 'mdp' = " . $mdp . " LIMIT 1";
 
$result = mysqli_query($link,$query) or die("Query failed");
if(mysqli_num_rows($result) == 1) {
  echo "Authentification OK";
}
else {
  echo "Erreur d'authentification";
}
 
// Libération des résultats 
mysqli_free_result($result);
 
// Fermeture de la connexion 
mysqli_close($link);

    