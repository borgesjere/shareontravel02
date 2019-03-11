<?php $title = 'detail proposition'; ?>

<?php ob_start(); ?>

<h3>Voici la proposition en detail</h3>
<p><a href="index.php"> retour à la page principale</a></p>

<?php
// Connexion à la base de données
$id_travel=0;
//pour demander toutes des info(fetch) while (en boucle)
while ($donnees = $travel->fetch()) 
{
$id_travel=$donnees['id_travel']; 
?>
<div class="mettre tout ce qu'il faut pour detailler la proposition de voyage">
    <p><strong><?php echo htmlspecialchars($donnees['name_member']); ?></strong>
        le <?php echo $donnees ['date_depart']; ?></p>
    <?php echo $donnees ['country_travel']; ?></p>
    <p><?php echo nl2br(htmlspecialchars($donnees['comment'])); ?></p>
    <p>date de retour : <?= $donnees['date_return']?></p><br />
    <p>flexibiliter: <?= $donnees['flexible']?></p><br />
    <p>nombre de personnes maximun: <?= $donnees['number_max']?></p><br />
    <p> choix sur le sexe des participant <?= $donnees['participe']?></p><br />
    <p>date de proposition de partage: <?= $donnees['date_proposition']?></p><br />
    <p>prénom : <?= $donnees['surname']?></p><br />
    <p>date de naissance : <?= $donnees['date_birth']?></p><br />
    <p>pays d'origine : <?= $donnees['country']?></p><br />
    <img src="<?= $donnees['avatar']?>"><br />

</div>
<?php
}
// Fin de la boucle du detail de la proposition
$travel->closeCursor();
?>

<!-- a voir  -->


<?php
   ?>
<!-- ... -->
<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>