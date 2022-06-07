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
<?php include 'utils.php'; ?> 
<?php foreach($articles as $article):?>
          <h1> Titre du Livre :<?php echo $article['titre'] ?></h1>
          <h5> Type:<?php echo $article['texte'] ?></h5>
          <h4 style="color:rgb(0, 42, 0)">L'auteur :<?php echo $article['auteur'] ?></h4>
          <h6>Date: <?php echo $article['date_pub'] ?></h6>
          
      <?php endforeach ?>
</div>
    
    <?php include 'footer.php'; ?>
</body>
</html>