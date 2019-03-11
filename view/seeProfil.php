<?php $title = "Share on Travel"?>

<?php ob_start();?>
<h1 id="title_login">le profil  en detail</h1>

<a href="index.php"> retour à la page principale</a></p>

<?php
// Connexion à la base de données
$id_profil=0;


?>
<div class="detail du profil">
    <p><strong><?php echo htmlspecialchars($profil['name_member']); ?></strong>
    <p>prénom : <?= $profil['surname']?></p><br />
    <p>pseudo: <?= $profil['pseudo']?></p><br />
    <p>date de naissance : <?= $profil['date_birth']?></p><br />
    <p>pays d'origine : <?= $profil['country']?></p><br />
    <img src="<?= $profil['avatar']?>"><br />
    <p>Email : <?= $profil['email']?></p><br />
    <p>Ma situation personnel : <?= $profil['situation_perso_nom'] ?></p><br />
    <p>Ma biographie : <?= $profil['biography']?></p><br />
    <p>Les pays que j'ai deja visités : <?= $profil['country_visited']?></p><br />
  
</div>


<!-- a voir  -->


<?php
   ?>
<!-- ... -->


<?php $content=ob_get_clean();?>

<?php require './view/template.php';?>



