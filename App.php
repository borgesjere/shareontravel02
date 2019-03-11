<?php
namespace shareontravel;

use \shareontravel\Controler\Controller;
use \Exception;

class App
{
    private $controller;

    public function __construct()
    {
        $this->controller = new Controller();
    }
    public function run()
    {
        try {
            if (isset($_GET['action'])) {
                if ($_GET['action']=='listTravels') {
                    $this->controller->listTravels();
                } elseif ($_GET['action']=='travel') {
                    if (isset($_GET['travel']) && $_GET['travel']>0) {
                        $this->controller->travel();
                    } else {
                        throw new Exception('erreur:aucun identifiant de voyage fut envoyé') ;
                    }
                }
                //aller sur la page 
                elseif ($_GET['action'] == "addmember") {
                    require('view/forsubscribe.php');
                }
                //creer un compte
                elseif ($_GET['action'] == "subscribe") {
                  // print_r ($_POST);die;
                    if (isset($_POST['name_member']) && isset($_POST['country'])
                     && isset($_POST['pword'])&& isset($_POST['confirm_pword'])) {
                    $name_member =htmlspecialchars( $_POST['name_member']);
                    $surname = htmlspecialchars($_POST['surname']) ;
                    $genre = htmlspecialchars($_POST['genre']);
                    $date_birth = htmlspecialchars($_POST['date_birth']);
                    $pword = htmlspecialchars($_POST['pword']);
                    $paword = htmlspecialchars($_POST['confirm_pword']);
                    $email = htmlspecialchars($_POST['email']);
                    $country = htmlspecialchars($_POST['country']);
                    $biography = htmlspecialchars($_POST['biography']);
                    $pseudo = htmlspecialchars($_POST['pseudo']);        
                    
                    {
                      $this->controller->createMember($name_member,$surname,$genre,$date_birth,$pword,$paword,$email
                    ,$country,$biography,$pseudo);
                    }
                  // print_r ($_POST);die;
                }               
                }
                //ce connecter
                elseif ($_GET['action'] == 'viewFormulaireConnection') {
                    require('view/forConnect.php');                 
                } 
                // verifier
                elseif ($_GET['action'] == 'logMember') { 
                 //   print_r ($_POST);die;
                  $this->controller->controlMember($_POST['pseudo'], $_POST['pword']);
                }         
               // ce deconnecter
                elseif ($_GET['action'] == 'destroy') {
                    session_destroy();
                    header('Location: index.php');
                   
                }


                //aller sur la page pour proposer
                elseif ($_GET['action'] == "addpropose") {
                    require('view/propose_travel.php');
                }
                 //proposer un partage
                 elseif ($_GET['action'] == 'forProposeTravel') {
                     if (isset($_POST['country_travel'])){
                    $country_travel =htmlspecialchars( $_POST['country_travel']);
                    $date_depart =htmlspecialchars( $_POST['date_depart']);
                    $date_return =htmlspecialchars( $_POST['date_return']);
                    $flexible =htmlspecialchars($_POST['flexible']);
                    $number_max =htmlspecialchars( $_POST['number_max']);
                    $participe =htmlspecialchars( $_POST['participe']);
                    $comment =htmlspecialchars( $_POST['comment']);           
                    $this->controller->createTravel($country_travel,$date_depart,$date_return,$flexible,$number_max,
                    $participe,$comment,$_SESSION['admin']['id_member']);
                  // require('view/propose_travel.php');
                   }  
                     }
                // aller sur la page pour recevoir des propositions
                elseif ($_GET['action'] == 'addreceive') {
                        require('view/receiveProposition.php');
                    }
                       //recevoir des messages
                elseif ($_GET ['action'] == 'receive'){
                    $country_travel=$_POST['country_travel_receive'];
                    $date_depart=$_POST['date_depart_receive'];
                    $date_return=$_POST['date_return_receive'];
                    $this->controller->receiveThePropo ($country_travel,$date_depart,$date_return);
                }
                
                //voir le detail dune proposition de voyage
                elseif ($_GET['action'] == 'detailTravel') {
                    $this->controller->detailTravel($_GET['id']);

                }
                //page de creation profil
                elseif ($_GET ['action'] == 'goToProfil'){
                    require "view/forProfil.php";
                    
                }
                //enregistrer les information dans la page profil
                elseif ($_GET ['action'] == 'createProfil'){
                    $paysVisiter =htmlspecialchars( $_POST['country_visited']);
                    $avatar =htmlspecialchars( $_POST['avatar']);
                    $situation_perso=htmlspecialchars( $_POST['situation_perso']);
                    
                    $this->controller->createProfil($paysVisiter,$avatar, $situation_perso,$_GET['id']);
                }
                //visualisation de la page profil
                elseif ( $_GET ['action'] == 'toSeeProfil'){
                    $this->controller->toSeeProfil($_GET['id']);
                }

                //voir les profil pour les modifier
                elseif ($_GET['action'] == 'seeToModifyProfil') {
                   
                    $this->controller->seeToModifyProfil($_GET['id']);
                        } 
                      


                //modifier profil
                 elseif ($_GET['action'] == 'modifyProfil') {
                    $pseudo =htmlspecialchars($_POST['pseudo_modify']);
                    $mail =htmlspecialchars($_POST['mail_modify']);
                    $biography =htmlspecialchars($_POST['biography_modify']);
                    $country_visited =htmlspecialchars($_POST['country_visited_modify']);
                    $avatar =htmlspecialchars($_POST['avatar_modify']);
                    $situation_perso =$_POST['situation_perso_modify'];
                    $this->controller->modifyProfil($pseudo, $mail, $biography, $country_visited, $avatar, $situation_perso);
                        } 
                //supprimer profil
              elseif ($_GET['action'] == 'deleteMember'){
               if (isset($_SESSION['id']) && $_SESSION['admin']['id_member'] > 0)
                $this->controller->deleteTheMember ($_GET['id']);
                session_unset();
                   session_destroy();
                   header('Location: index.php');
               } else {
                  throw new Exception('Echec suppression');
               }
                 


               
               
            } else {
                    $this->controller->listTravels();
            }

        } catch (Exception $e) {
                //faire une redirection vers une vus d'erreur
            die('erreur:'.$e->getMessage());
            
        }
    
    }
}