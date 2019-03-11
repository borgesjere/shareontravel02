<?php $title = 'ShareOnTravel'; ?>


<?php ob_start(); ?>


<header>

    <div id="whyShare">
        <br />
        <p class="wp"> En vous inscrivant sur Share on travel, vous avez la possibilitez de vous
            mettre en contact avec d'autres voyageurs, qui comme vous, désire découvrir
            le monde à moindre coût.</p>
        <p class="wp"> De vous rassembler pour promouvoir des structures locales
            ( guide, agence de voyage, un tour en pirrogue, un tuk tuk )
            et leur permettre de vivre de leur actvitées et à vous de partager les frais.
            Ou tout simplement boire un verre au milieu de null part.</p>
        <p class="wp"> Qui n'a pas trouvé un bon plan , en voyageant seul ou à 2, mais qui n'a pas pu le faire
            car le projet ne rentre pas dans le budget. Qui n'a pas écumé les guest houses ou
            autres endroits touristiques pour ce joindre a vous,afin de partir faire un treck le lendemain ?</p>
        <p class="wp"> pack Maintenant , c'est facile avec SHARE ON TRAVEL.</p>
        <p class="wp"> En vous inscrivant , sur SHARE ON TRAVEL, nous vous proposons de rentrer
            en contact avec d'autres voyages, qui sont dans le même endroit que vous et
            au même date. ainsi vous pourrez proposer et recevoir des suggestions qui
            contriburons a ce que votre voyages deviennent encore plus exceptionnel</p>
    </div>


</header>


<h1> Voici les derniers voyages proposés</h1>

<div class="row">
    <?php
        // Connexion à la base de données
        $id_travel=0;
        while ($donnees = $travels->fetch()) 
    {
        $id_travel=$donnees['id_travel']; 
?>



    <!--proposition des voyages en resumer-->


    <div id="news" class="col-sm-6 col-md-6">
        <div id="cadre-prop">
            <h3>
                <em id="dateprop"> <?=$donnees['date_proposition']; ?></em>
                <p id="nameprop"> <?php   echo htmlspecialchars($donnees['pseudo']); ?></p>

                <p> Partage en : <?php echo htmlspecialchars($donnees['country_travel']);?></p>
            </h3>
            <p id="commentprop">
                <?php   echo nl2br(htmlspecialchars($donnees['comment'])); ?>
                <!--enlever le htmlspecialchars et mettre un regex afin de mettre les '-->
            </p>
            <!--pour montrer le detail de la proposition dans onTravelView-->

            <a href="index.php?action=detailTravel&id=<?=$donnees['id_travel']; ?>"><button type="button"
                    class="detail">Detail</button></a>
            <!--fin-->

        </div>

        <!--  <div class="col-xs-6 ">boite2</div>-->


    </div>


    <?php
    }
?>
</div>
<div id="explication">
    <div class="trio">
        <h4>Consulter ShareOnTravel</h4>
        <img src="./public/image/globe.png" alt="">
        <p>La consultation du site sans inscription, permet de voir les propositions faites par les autres voyageurs,
            par pays.</p>
    </div>
    <div class="trio">
        <h4>Recevoir des propositions </h4>
        <img src="./public/image/envellope.png" alt="">
        <p>En vous inscrivant sur ShareOnTravel, vous pouvez aussi recevoir des propositions de partage.</p>

    </div>
    <div class="trio">
        <h4>Proposer un partage</h4>
        <img src="./public/image/crayon.png" alt="">
        <p>En complétant votre profil, il vous est possible de proposer des partages.</p>

    </div>



</div>



<?php
    $travels->closeCursor(); // Important : on libère le curseur pour la prochaine requête
?>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>