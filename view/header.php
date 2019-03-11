<?php $title ='header';  ?>

<?php ob_start();  ?>

<img src="/public/image/logo.svg" alt="logo" id="logo">  


<button type="button" class="">Inscription</button></a>
<button type="button" class="">connection</button></a <?php $content = ob_get_clean(); ?>
    <?php require('view/template.php'); ?>