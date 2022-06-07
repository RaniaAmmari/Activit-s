<?php foreach($articles as $article):?>
            <!-- <div class="card" style="width: 90%;margin: 10px;color :darkgreen"> -->
                <div class="card-body">
                    <h5 class="card-title"><?php echo $article['titre']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $article['auteur']; ?></h6>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $article['date_pub']; ?></h6>
                    <p class="card-text"><?php echo $article['texte']; ?></p>
                    </div>
        <a  class="btn btn-primary" href="delete.php?id=<?php echo $article['id']?>">Supprimer</a>
            </div>
            
<?php endforeach ?>
<?php include 'commentaire.php'; ?> 
<?php foreach($articles as $article):?>
<form method="post" action="commentaire.php">
<p>Ajouter votre commentaire</p>
<label for="Auteur">Auteur</label><input type="text" id="Auteur" name="auteur"/><br />
<label for="id_titre">id</label><input type="text" id="id_titre" name="id_titre"/><br />
<label for="commentaire">Commentaire</label><textarea name="commentaire" id="commentaire"></textarea>
<input type="hidden" name="id" value="<?php $_GET['id']?>"/>
<input type="submit" value="Envoyer"/>
</form>
<?php endforeach ?>