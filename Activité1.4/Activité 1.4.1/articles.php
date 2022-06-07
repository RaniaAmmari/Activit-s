<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<?php include 'header.php' ?>  
<?php include 'utils.php' ?>  

<main class=" container content">
<main class=" container content">        
        <?php include('commentaire.php')?>
    </main>
<?php $articles= getArticles(1); ?>
<!-- <?php print_r($articles) ?> -->
<?php foreach($articles as $article):?>
          <h1> Titre du Livre :<?php echo $article['titre'] ?></h1>
          <h5> Type :<?php echo $article['texte'] ?></h5>
          <h3 style="color:rgb(0, 49, 0)">L'auteur :<?php echo $article['auteur'] ?></h3>
          <h4>Date :<?php echo $article['date_pub'] ?></h4>
          </div>
        <a  class="btn btn-primary" href="delete.php?id=<?php echo $article['id']?>">Supprimer</a>
            </div>
            <?php endforeach ?> 
    </main>
    
    <?php include 'footer.php'; ?>
</body>
</html>

<?php
    $commentsStatement = $db->prepare('SELECT * FROM commentaire WHERE id_titre = :id');
    $commentsStatement->execute([
        'id'=>$article['id']
    ]);
    $comments = $commentsStatement->fetchAll();
     ?>
    <?php foreach($comments as $comment):?>
        <div style="margin-left:35px;background-color:rgb(233, 231, 231);margin-bottom:10px;padding:10px;border-radius:5px 5px;width:70%;">
        <p><?php echo $comment['texte'] ?></p>
        <p>Publié par : <strong> <?php echo $comment['auteur'] ?></strong>, le <strong><?php echo $comment['date_com'] ?></strong></p>
        </div>
    <?php endforeach ?>