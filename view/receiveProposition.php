<?php $title = "Share on Travel"?>

<?php ob_start();?>

<main id="login_view_sot">
<h1 id="title_login">Recevoir une proposition de partage</h1>

<form action="index.php?action=receive" method="post">
            <p>quel proposition desirez vous recevoir?</p>
            <input type="text" class="ProposeTravel" name="country_travel" placeholder="Pays"><br />
            <p>Date de départ</p>
            <input type="date" class="ProposeTravel" name="date_depart" placeholder="date de depart"><br />
            <p>Date retour</p>
            <input type="date" class="ProposeTravel" name="date_return" placeholder="date de retour"><br />

            <input type="submit" id="receive" value="recevoir"><br />





</main>

<?php $content=ob_get_clean();?>

<?php require './view/template.php';?>





