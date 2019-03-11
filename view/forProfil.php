<?php $title = 'ShareOnTravel'; ?>


 <?php ob_start(); ?>


<form action="index.php?action=createProfil&id=<?=$_SESSION['admin']['id_member'] ?>" method = "post" enctype="multipart/form-data"> 

<label for="paysvisited"> Pays visités </label>

<input type="text"  id="paysvisited"      class="profil_shareontravel" name="country_visited"
                placeholder="Pays visités"><br/>
                <label for="avatar">   Avatar </label>           
<input type="text" id="avatar" class="profil_shareontravel" name="avatar"
                placeholder="avatar"><br/>

    <select id="situation_perso">
    <option   >choisie</option>
    <option  id="solo" name="situation_perso_modify" value="0">En solo</option>
    <option  id="Couple" name="situation_perso_modify" value="1">En couple</option>
    <option id="entreamis" name="situation_perso_modify" value="2">Entre ami(e)s</option>
   </select>


       <!-- <p>   Ta situation personnel :</p>
        <input type="radio"  id="solo" class="profil_shareontravel" name="situation_modify"   <label for="solo"> En Solo</label>
        <input type="radio" id="Couple" class="profil_shareontravel" name="situation_modify"   
        <label for="couple"> En couple</label>
        <input type="radio" id="entreamis" class="profil_shareontravel" name="situation_modify" 
            
        <label for="amis">Entre ami(e)s</label>
         </p><br/> -->
<input type="submit" id="subscribe" value="Completez votre profil"><br/>







</form>






 

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>