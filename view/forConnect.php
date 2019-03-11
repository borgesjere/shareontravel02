<?php $title = "shareontravel"?>

<?php ob_start();?>

<h1>bienvenue sur shareontravel</h1>

<div>
    <form action="index.php?action=logMember" method="post">
        <div class="form-group"> <label for="name">nom</label>
            <input type="text" name="pseudo" required class="form-control" id="name" placeholder="name"> <br><br>
        </div>

        <div class="form-group"> <label for="pword">mot de passe </label>
            <input type="password" name="pword" required class="form-control" id="InputPassword"
                placeholder="Password">
            <input type="submit" id="connect_login" value="Se connecter">
        </div>
    </form>
  <!-- <a href="index.php?action=travelview">connection</a></a>-->
</div>
<?php $content = ob_get_clean(); ?>
<?php require('view/template.php'); ?>