<?php include('connectDB.php') ?>
<?php 
if ( isset($_POST['commentaire'])) {
    
    $sqlQuery = 'INSERT INTO commentaires(id_titre,commentaire, auteur, date_comm, ) VALUES (:texte, :commentaire, :auteur, :date_comm)';
    
    $addComment = $db->prepare($sqlQuery);
    $addComment->execute([
        'texte' => $_POST['id_titre'],
        'auteur' => $_POST['auteur'],
        'date_com' => $_POST['date_com'], 
        'id_titre' => $_POST['id_titre'], 
    ]);

    header('Location: '.$rootUrl.'articles.php');
}
    ?>
    