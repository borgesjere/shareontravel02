 <?php $title = "Share on Travel"?>

<?php ob_start();?>

<main id="login_view_sot">

    <?php if (isset($_SESSION ['id_member'])) 
{
?>
    <?php
}   ?>

<h1 id="title_login">Voir le profil à modifier</h1>



<?php
// Connexion à la base de données
$id_profil=0;

?>

</main>


      <form action="index.php?action=modifyProfil" method="post">
        <label for="pseudo_modify">Modifie ton Pseudo :</label>
       <input type="text" value=<?= $profil['pseudo']?> name="pseudo_modify"><br/>
         <label for="mail_modify">Modifie ton Email :</label>
         <input type="text"value=<?= $profil['email']?> name="mail_modify"><br/>
         <label for="biography_modify">Modifie ta biographie :</label>
         <input type="text" value=<?= $profil['biography']?> name="biography_modify"><br/>
         <label for="avatar_modify">Modifie ton avatar :</label>
         <input type="text" <?= $profil['avatar']?> name="avatar_modify"><br/>
         <label for="situation_perso_modify">selectionne ta situation:</label>
         <select id="situation_perso" name="situation_perso_modify"><br/>
         <br/>
    <option  selected="selected" value=<?= $profil['situation_perso']?> ><?= $profil['situation_perso_nom']?></option>
    
    <option  id="solo"  value="0" >En solo</option>
    <option  id="Couple"  value="1" >En couple</option>
    <option id="entreamis"  value="2" >Entre ami(e)s</option><br/>
   
</select>
<br/>
         <label for="country_visited_modify">Modifie tes pays visités :</label>
         <input type="text" value=<?= $profil['country_visited']?> name="country_visited_modify"><br/>
         
        
        
       

        <input type="submit" value="Modifier">

     </form> 


    <a href="index.php"> retour à l'accueil</a>

      
</div>
<?php

  
 $content=ob_get_clean();?>

<?php require './view/template.php';?>