<?php $title = "Share on Travel"?>

<?php ob_start();?>

<main id="login_view_sot">

<?php if (isset($_SESSION ['id_member'])) 
{
?>
    <?php
}   ?>

    <h1 id="title_login">Proposez un partage de voyage</h1>

    <div id="login_shareontravel">
        <form action="index.php?action=forProposeTravel" method="post">
            <p>Dans quel pays vous désirez partager?</p>
            <input type="text" class="ProposeTravel" name="country_travel" placeholder="Pays"><br />
            <p>Date de départ</p>
            <input type="date" class="ProposeTravel" name="date_depart" placeholder="date de depart"><br />
            <p>Date retour</p>
            <input type="date" class="ProposeTravel" name="date_return" placeholder="date de retour"><br />
            <p>Vous êtes flexible sur les dates : 
            <input type="radio" class="ProposeTravel" name="flexible" id="true" value="true">
            <label for="true">Oui</label>
            <input type="radio" class="ProposeTravel" name="flexible" id="false" value="false">
            <label for="false">Non</label>
            </p>

            <br />
            <p>Nombre maximum de personnes</p>
            <input type="integer" class="ProposeTravel" name="number_max"
                placeholder="nombre maximun que vous souhaitez"><br />
            <br />
            <br />
            <p>
                <p>Vous préférez voyager avec : </p>
                <input type="radio" class="ProposeTravel" name="participe" id="femme" value="1">
                <label for="Mme">Des femmes</label>
                <input type="radio" class="ProposeTravel" name="participe" id="homme" value="2">
                <label for="Mr">Des hommes</label>
                <input type="radio" class="ProposeTravel" name="participe" id="mite" value="3">
                <label for="Mixte">Tout le monde est Welcome</label>
            </p>
            
            <br />
            <br />
            <p>Decrivez votre partage</p>
            <input type="texarea" class="ProposeTravel" name="comment"
                placeholder="decrivez ce que vous voulez proposer"><br />


            <input type="submit" id="forProposeTravel" value="proposer"><br />


        </form>
        <a href="index.php"> retour à l'accueil</a>
    </div>
</main>

<?php $content=ob_get_clean();?>

<?php require './view/template.php';?>