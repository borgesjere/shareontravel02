<?php $title = "Share on Travel"?>

<?php ob_start();?>

<main id="login_view_sot">
    <h1 id="title_login">Inscrivez vous sur le site de Share on travel</h1>

    <div id="login_shareontravel">
        <form action="index.php?action=subscribe" method="post">
            <p>
                <input type="radio" class="subscribe_shareontravel" name="genre" id="M"
                    value="true">
                <label for="M">M.</label>
                <input type="radio" class="subscribe_shareontravel" name="genre" id="Mme"
                    value="false">
                <label for="Mme">Mme</label>
            </p>
            <input type="text" class="subscribe_shareontravel" name="name_member"
                placeholder="Nom"><br/>
            <input type="text" class="subscribe_shareontravel" name="surname"
                placeholder="prenom"><br/>
            <input type="text" class="subscribe_shareontravel" name="pseudo"
                placeholder="pseudo"><br/>
            <input type="text" class="subscribe_shareontravel" name="country"
                placeholder="pays d'origine"><br/>
            <input type="text" class="subscribe_shareontravel" name="date_birth"
                placeholder="date de naissance"><br/>
            <input type="text" class="subscribe_shareontravel" name="biography"
                placeholder="quelques informations sur vous"><br/>
            <input type="email" class="subscribe_shareontravel" name="email"
                placeholder="Email"><br/>
            <input type="password" class="subscribe_shareontravel" name="pword"
                placeholder="Mot de passe"><br/>
            <input type="password" class="subscribe_shareontravel" name="confirm_pword"
                placeholder="Confirmer votre mot de passe"><br/>
            <input type="submit" id="subscribe" value="Inscrivez-vous"><br/>


        </form>
        <a href="index.php"> retour à l'accueil</a>
    </div>
</main>

<?php $content=ob_get_clean();?>

<?php require './view/template.php';?>