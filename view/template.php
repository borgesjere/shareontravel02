<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title><?= $title ?></title>
    <!-- Bootstrap -->
    <link href="./public/css/bootstrap.min.css" rel="stylesheet">

    <!-- mes styles-->
		 <link rel="stylesheet" href="./public/css/style.css">
		 
     
    <!-- pour scss-->
    <!--<link rel="stylesheet" href="scss/style.scss" media="screen">-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>



<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="Index.php" ><img id="logo" src="./public/image/logo2.svg" alt="logo">
       <!-- <img alt="Brand" src="...">-->
      </a>
		</div>
		
		<form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Pays">
        </div>
        <button type="submit" class="btn btn-default">Destination</button>
			</form>
	<ul>
		<div id="inscip-connex">
			<li  class="nav-item" id="inscrip">
  <?php if (!isset($_SESSION['name_member'])) {
    ?>
    <a class="nav-link disabled" id="inscrip-color" href="index.php?action=addmember">Inscription</a>
    <?php
    }    else {
      ?>
       <a class="nav-link disabled" href="index.php?action=destroy">Deconnexion</a>
       <?php
    }
    ?>
	</li> 
	
	<li class="nav-item"   id="connect">
  <?php if (!isset($_SESSION['name_member'])) {
    ?>
    <a class="nav-link disabled" href="Index.php?action=viewFormulaireConnection">Connexion</a>
    <?php
    }
    else {
      echo 'bienvenue '.$_SESSION['name_member'];
      ?>
		</li>   
	
	</div>

	<nav id="menuSecondaire">
	<ul class="nav nav-tabs">
 
 
  <li><a class="nav-link dropdown-toggle" class="dropdown-item" href="index.php?action=addreceive&id=<?= $_SESSION['admin']['id_member'] ?>" >Recevoir</a></li>
	<li><a class="nav-link dropdown-toggle" class="dropdown-item" href="index.php?action=addpropose&id=<?= $_SESSION['admin']['id_member'] ?>" id="list_prop_share">Proposer</a></li>
	<li><a class="nav-link dropdown-toggle" class="dropdown-item" href="#&id=<?= $_SESSION['admin']['id_member'] ?>">resultat des partages</a></li>	
	<li><a class="nav-link dropdown-toggle" class="dropdown-item" href="#&id=<?= $_SESSION['admin']['id_member'] ?>">liste des partages</a></li>
	<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Mon Profil
    <span class="caret"></span></a>
    <ul  id="menuDeroulant" class="dropdown-menu">
      <li><a class="nav-link dropdown-toggle" class="dropdown-item" href="index.php?action=toSeeProfil&id=<?= $_SESSION['admin']['id_member'] ?>" id="list_profil">Voir mon profil</a></li>
      <li><a class="nav-link dropdown-toggle" class="dropdown-item" href="index.php?action=goToProfil&id=<?= $_SESSION['admin']['id_member'] ?>">Complèter</a></li>
			<li><a class="nav-link dropdown-toggle" class="dropdown-item" href="index.php?action=seeToModifyProfil&id=<?= $_SESSION['admin']['id_member'] ?>">Modifier </a></li>
			<li><a class="nav-link dropdown-toggle" class="dropdown-item" href="index.php?action=deleteMember&id=<?= $_SESSION['admin']['id_member'] ?>">Supprimer </a></li>
    </ul>
  </li>
</ul>
		</nav>



	 <?php
    }
    ?>
	
</ul>		
  </div>
</nav>

<!--<a href="Index.php" ><img id="logo" src="./public/image/logo.svg" alt="logo"></a>-->
<!-- <ul class="nav nav-pills">

<li class="nav-item dropdown ">
    <a class="nav-link dropdown-destination" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Destinations</a>
    <div class="dropdown-menu">
    <div id="fond">
	<ul id="menu-dest">
		<li>
			<a href="">Pays</a>
		<ul>
			<li>
					<a href="">Europe de l'Ouest</a>
				<ul>
					<li><a href="">Açores</a></li>
					<li><a href="">Allemagne</a></li>
					<li> <a href="">Andorre</a> </li>
					<li><a href="">Autriche</a></li>
					<li><a href="">Belgique</a></li>
					<li> <a href="">Canaries</a> </li>
					<li><a href="">Danemark</a></li>
					<li><a href="">Espagne</a></li>
					<li> <a href="">Féroé</a> </li>	
					<li><a href="">Finlande</a></li>
					<li><a href="">France</a></li>
					<li> <a href="">Gibraltar</a> </li>
					<li><a href="">Irlande</a></li>
					<li><a href="">Islande</a></li>
					<li> <a href="">Italie</a> </li>
					<li><a href="">Liechtenstein</a></li>
					<li><a href="">Luxembourg</a></li>
					<li> <a href="">Madère</a> </li>
					<li><a href="">Malte</a></li>
					<li><a href="">Monaco</a></li>
					<li> <a href="">Norvège</a> </li>
					<li><a href="">Pays-Bas</a></li>
					<li> <a href="">Portugal</a> </li>
					<li><a href="">Royaume-Uni</a></li>
					<li><a href="">Saint-Marin</a></li>
					<li> <a href="">Suède</a> </li>
					<li><a href="">Suisse</a></li>
					<li><a href="">Vatican</a></li>
				</ul>
			</li>
			<li>
					<a href="">Europe de l'Est</a>
				<ul>
					<li><a href="">Albanie</a></li>
					<li><a href="">Biélorussie</a></li>
					<li> <a href="">Bosnie-et-Herzégovine</a> </li>
					<li><a href="">Bulgarie</a></li>
					<li><a href="">Chypre</a></li>
					<li> <a href="">Crète</a> </li>
					<li> <a href="">Croatie</a> </li>
					<li><a href="">Estonie</a></li>
					<li><a href="">Grèce</a></li>
					<li> <a href="">Hongrie</a> </li>	
					<li><a href="">Kosovo</a></li>
					<li><a href="">Lettonie</a></li>
					<li> <a href="">Lituanie</a> </li>
					<li><a href="">Macédoine</a></li>
					<li><a href="">Moldavie</a></li>
					<li> <a href="">Monténégro</a> </li>
					<li><a href="">Pologne</a></li>
					<li><a href="">République tchèque</a></li>
					<li> <a href="">Roumanie</a> </li>
					<li><a href="">Serbie</a></li>
					<li><a href="">Slovaquie</a></li>
					<li> <a href="">Slovénie</a> </li>
					<li><a href="">Ukraine</a></li>
				</ul>
			</li>
			<li>
					<a href="">Afrique de l'Ouest <br> et du centre</a>
				<ul>
					<li><a href="">Angola</a></li>
					<li><a href="">Bénin</a></li>
					<li> <a href="">Burkina Faso</a> </li>
					<li><a href="">Cameroun</a></li>
					<li><a href="">Cap-Vert</a></li>
					<li> <a href="">République <br>centrafricaine</a> </li>
					<li><a href="">République du Congo</a></li>
					<li><a href="">République <br>démocratique <br> du Congo</a></li>
					<li> <a href="">Côte d’Ivoire</a> </li>	
					<li><a href="">Gabon</a></li>
					<li><a href="">Gambie</a></li>
					<li> <a href="">Ghana</a> </li>
					<li><a href="">Guinée</a></li>
					<li><a href="">Guinée-Bissau</a></li>
					<li> <a href="">Guinée équatoriale</a> </li>
					<li><a href="">Liberia</a></li>
					<li><a href="">Mali</a></li>
					<li> <a href="">Niger</a> </li>
					<li><a href="">Nigeria</a></li>
					<li><a href="">Sao Tomé-et-Principe</a></li>
					<li> <a href="">Sénégal</a> </li>
					<li><a href="">Sierra Leone</a></li>
					<li> <a href="">Tchad</a> </li>
					<li><a href="">Togo</a></li>
				</ul>
			</li>
			<li>
						<a href="">Océan Indien</a>
				<ul>
					<li><a href="">Comores</a></li>
					<li><a href="">Madagascar</a></li>
					<li> <a href="">Maurice</a> </li>
					<li><a href="">Mayotte</a></li>
					<li><a href="">Réunion</a></li>
					<li> <a href="">Seychelles</a> </li>
				</ul>
			</li>
			<li>
					<a href="">Afrique Australe <br> et de l'Est</a>
				<ul>
					<li><a href="">Afrique du Sud</a></li>
					<li><a href="">Angola</a></li>
					<li> <a href="">Botswana</a> </li>
					<li><a href="">Burundi</a></li>
					<li><a href="">Djibouti</a></li>
					<li> <a href="">Érythrée</a> </li>
					<li><a href="">Éthiopie</a></li>
					<li><a href="">Lesotho</a></li>
					<li> <a href="">Kenya</a> </li>	
					<li><a href="">Malawi</a></li>
					<li><a href="">Mozambique</a></li>
					<li> <a href="">Namibie</a> </li>
					<li><a href="">Ouganda</a></li>
					<li><a href="">Rwanda</a></li>
					<li> <a href="">Somalie</a> </li>
					<li><a href="">Soudan</a></li>
					<li><a href="">Soudan du Sud</a></li>
					<li> <a href="">Swaziland</a> </li>
					<li><a href="">Tanzanie</a></li>
					<li><a href="">Zambie</a></li>
				</ul>
			</li>
			<li>
						<a href="">Au Magreb</a>
				<ul>
					<li><a href="">Algérie</a></li>
					<li><a href="">Égypte</a></li>
					<li> <a href="">Libye</a> </li>
					<li><a href="">Maroc</a></li>
					<li><a href="">Mauritanie</a></li>
					<li> <a href="">Sahara Occidental</a> </li>
					<li><a href="">Tunisie</a></li>
				</ul>
			</li>
			<li>
					<a href="">En Amérique</a>
				<ul>
					<li><a href="">Antigua-et-Barbuda</a></li>
					<li><a href="">Argentine</a></li>
					<li> <a href="">Bahamas</a> </li>
					<li><a href="">Barbade</a></li>
					<li><a href="">Belize</a></li>
					<li> <a href="">Bolivie</a> </li>
					<li><a href="">Brésil</a></li>
					<li><a href="">Canada</a></li>
					<li> <a href="">Chili</a> </li>	
					<li><a href="">Colombie</a></li>
					<li><a href="">Costa Rica</a></li>
					<li> <a href="">Cuba</a> </li>
					<li><a href="">République dominicaine</a></li>
					<li><a href="">Dominique</a></li>
					<li> <a href="">Équateur</a> </li>
					<li><a href="">États-Unis</a></li>
					<li><a href="">Grenade</a></li>
					<li> <a href="">Guatemala</a> </li>
					<li><a href="">Guyana</a></li>
					<li><a href="">Haïti</a></li>
					<li> <a href="">Honduras</a> </li>
					<li><a href="">Jamaïque</a></li>
					<li> <a href="">Mexique</a> </li>
					<li><a href="">Nicaragua</a></li>
					<li><a href="">Panama</a></li>
					<li> <a href="">Paraguay</a> </li>
					<li><a href="">Pérou</a></li>
					<li><a href="">Saint-Christophe <br>-et-Niévès</a></li>
					<li> <a href="">Sainte-Lucie</a> </li>
					<li><a href="">Saint-Vincent <br>-et-les-Grenadines</a></li>
					<li><a href="">Salvador</a></li>
					<li> <a href="">Suriname</a> </li>
					<li><a href="">Trinité-et-Tobago</a></li>
					<li><a href="">Uruguay</a></li>
					<li> <a href="">Venezuela</a> </li>
				</ul>
			</li>
			<li>
					<a href="">Asie central</a>
				<ul>
					<li><a href="">Afghanistan</a></li>
					<li><a href="">Kazakhstan</a></li>
					<li> <a href="">Kirghizistan</a> </li>
					<li><a href="">Mongolie</a></li>
					<li><a href="">Ouzbékistan</a></li>
					<li> <a href="">Pakistan</a> </li>
					<li><a href="">Tadjikistan</a></li>
					<li><a href="">Turkménistan</a></li>
					<li> <a href="">Russie</a> </li>	
				</ul>
			</li>
			<li>
					<a href="">En Asie du sud Est</a>
				<ul>
					<li><a href="">Birmanie</a></li>
					<li><a href="">Brunei</a></li>
					<li> <a href="">Cambodge</a> </li>
					<li><a href="">Indonésie</a></li>
					<li><a href="">Laos</a></li>
					<li> <a href="">Malaisie</a> </li>
					<li><a href="">Philippines</a></li>
					<li><a href="">Singapour</a></li>
					<li> <a href="">Thaïlande</a> </li>
					<li><a href="">Timor oriental</a></li>
					<li> <a href="">Viêt Nam</a> </li>	
				</ul>
			</li>
			<li>
					<a href="">Sous continent Indien</a>
				<ul>
					<li><a href="">Bangladesh</a></li>
					<li><a href="">Bhoutan</a></li>
					<li> <a href="">Inde</a> </li>
					<li><a href="">Maldives</a></li>
					<li><a href="">Népal</a></li>
					<li> <a href="">Sri Lanka</a> </li>
				</ul>
			</li>
			<li>
						<a href="">En Asie du Nord Est</a>
				<ul>
					<li><a href="">Chine</a></li>
					<li><a href="">Corée du Nord</a></li>
					<li> <a href="">Corée du Sud</a> </li>
					<li><a href="">Japon</a></li>
					<li><a href="">taïwan</a></li>
					<li> <a href="">Tibet</a> </li>
				</ul>
			</li>
			<li>
					<a href="">Moyen Orient</a>
				<ul>
					<li><a href="">Arabie saoudite</a></li>
					<li><a href="">Arménie</a></li>
					<li> <a href="">Azerbaïdjan</a> </li>
					<li><a href="">Bahreïn</a></li>
					<li><a href="">Émirats arabes unis</a></li>
					<li> <a href="">Géorgie</a> </li>
					<li><a href="">Irak</a></li>
					<li><a href="">Iran</a></li>
					<li> <a href="">Israël</a> </li>	
					<li><a href="">Jordanie</a></li>
					<li><a href="">Koweït</a></li>
					<li> <a href="">Liban</a> </li>
					<li><a href="">Oman</a></li>
					<li><a href="">Palestine</a></li>
					<li> <a href="">Qatar</a> </li>
					<li><a href="">Syrie</a></li>
					<li><a href="">Turquie</a></li>
					<li> <a href="">Yémen</a> </li>
				</ul>
			</li>
			<li>
					<a href="">En Océanie</a>
				<ul>
					<li><a href="">Australie</a></li>
					<li><a href="">îles Cook</a></li>
					<li> <a href="">Fidji</a> </li>
					<li><a href="">Hawaï</a></li>
					<li><a href="">Kiribati</a></li>
					<li> <a href="">Mariannes</a> </li>
					<li><a href="">Marshall</a></li>
					<li><a href="">Micronésie</a></li>
					<li> <a href="">Nauru</a> </li>	
					<li><a href="">Niue</a></li>
					<li><a href="">Nouvelle-Calédonie</a></li>
					<li> <a href="">Nouvelle-Zélande</a> </li>
					<li><a href="">Palaos</a></li>
					<li><a href="">Papouasie- <br>Nouvelle-Guinée</a></li>
					<li> <a href="">île de pâques</a> </li>
					<li><a href="">pitcairn</a></li>
					<li><a href="">Polynésie-française</a></li>
					<li> <a href="">Salomon</a> </li>
					<li><a href="">Samoa</a></li>
					<li><a href="">Tonga</a></li>
					<li> <a href="">Tuvalu</a> </li>
					<li><a href="">Vanuatu</a></li>
					<li> <a href="">Wallis et Futuna</a> </li>
				</ul>
			</li>
		</ul>
	</li>
</ul>
  
  <li class="nav-item">
  <?php if (!isset($_SESSION['name_member'])) {
    ?>
    <a class="nav-link disabled" href="index.php?action=addmember">Inscription</a>
    <?php
    }    else {
      ?>
       <a class="nav-link disabled" href="index.php?action=destroy">Deconnexion</a>
       <?php
    }
    ?>
  </li> 
  <li class="nav-item">
  <?php if (!isset($_SESSION['name_member'])) {
    ?>
		<a class="nav-link disabled" href="Index.php?action=viewFormulaireConnection">Connexion</a>
		
    <?php 
    }
    else {
		 echo 'bienvenue '.$_SESSION['name_member'];
		
      ?> 
    </li>   
      <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">liste des action</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="index.php?action=toSeeProfil&id=<?= $_SESSION['admin']['id_member'] ?>" id="list_profil">mon profil</a><br/>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="index.php?action=addpropose" id="list_prop_share">proposition de partage</a>
      <a class="dropdown-item" href="#" id="list_result_share">resultat de partage</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#" id="list_of_share">liste des partages</a>
      <a class="dropdown-item" href="#" id="list_receive_share">recevoir des partages</a>
      <a class="dropdown-item" href="#" id="deconnect">déconnexion</a>
    </div>
  </li>
   
  <a class="nav-link dropdown-toggle"  href="index.php?action=addpropose" >propose</a>
  <a class="nav-link dropdown-toggle"  href="#" >recevoir</a>
	<a class="nav-link dropdown-toggle"  href="index.php?action=goToProfil"   >Compléter profil</a>
	<a class="nav-link dropdown-toggle" href="index.php?action=seeToModifyProfil&id=<?= $_SESSION['admin']['id_member'] ?>"> Modifier le profil</button></a>
	<a class="nav-link dropdown-toggle" href="index.php?action=deleteMember&id=<?= $_SESSION['admin']['id_member'] ?>">supprimer le profil</button></a>
    <?php
    }
    ?>
  
  
</ul>
	-->
<header>


  </header>
   
 
   

    <main>
		<div class="container">
        <?= $content ?>
	</div>
    </main>

	<!-- Footer -->
<footer class="page-footer font-small indigo">

    <!-- Footer Links -->
    <div class="container">

      <!-- Grid row-->
      <div class="row text-center d-flex justify-content-center pt-5 mb-3">

        <!-- Grid column -->
        <div class="col-md-2 mb-3">
          <h6 class="text-uppercase font-weight-bold">
            <a href="#!"></a>
          </h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 mb-3">
          <h6 class="text-uppercase font-weight-bold">
            <a href="#!"></a>
          </h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 mb-3">
          <h6 class="text-uppercase font-weight-bold">
            <a href="#!">Qui sommes nous</a>
          </h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 mb-3">
          <h6 class="text-uppercase font-weight-bold">
            <a href="#!">Contact</a>
          </h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 mb-3">
          <h6 class="text-uppercase font-weight-bold">
            <a href="#!"></a>
          </h6>
        </div>
        <!-- Grid column -->


     
      <!-- Grid row-->
      <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

      <!-- Grid row-->
      <div class="row pb-3">

        <!-- Grid column -->
        <div class="col-md-12">

          <div class="mb-5 flex-center">

            <!-- Facebook -->
            <a class="fb-ic">
					
              <i class="fab fa-facebook-f fa-lg white-text mr-4"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fab fa-twitter fa-lg white-text mr-4"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
              <i class="fab fa-linkedin-in fa-lg white-text mr-4"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
					
              <i class="fab fa-instagram fa-lg white-text mr-4"> </i>
            </a>
            <!--Pinterest-->
            <a class="pin-ic">
              <i class="fab fa-pinterest fa-lg white-text"> </i>
            </a>

          </div>

        </div>
        <!-- Grid column -->

      </div>
  
    <!-- Footer Links -->

		<!-- Copyright -->
		
    <div class="footer-copyright text-center py-3">© 2019 SHAREONTRAVEL, tous droits réservés -
      <a href="#"> Mentions légales</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./public/js/bootstrap.min.js"></script>

</body>

</html>