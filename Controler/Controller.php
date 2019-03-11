<?php

namespace shareontravel\Controler;

use \shareontravel\model\TravelManager;
use \shareontravel\model\CommentManager;
use \shareontravel\model\MemberManager;
use \Exception;

class Controller
{
    private $travelManager;
    private $commentManager;
    private $memberManager;

    public function __construct()
    {
        $this->travelManager = new TravelManager();
        $this->memberManager = new MemberManager();
        $this->commentManager = new CommentManager();
    }

    //j'appel l'ensemble des travels, pour faire des lists  --fait
    public function listTravels()
    {
        $travels = $this->travelManager->getTravels();
        require('view/travelview.php');
    }

    // relier les travels et messages    --fait
    public function travel()
    {
        $travel = $travelManager->getPost($_GET['member']);
        $comments = $commentManager->getMessages($_GET['member']);

        require('view/travelview.php');
    }
    //s'inscrire  --a faire
    public function createMember($name_member,$surname,$genre,$date_birth,$pword,$paword,$email,$country,$biography,$pseudo)
    {
        if ($pword !=$paword) {
            throw new Exception("les deux mots sont différents");
            
        } else { 
            $pword =password_hash($pword, PASSWORD_DEFAULT);
            $this->memberManager->addmember($name_member,$surname,$genre,$date_birth,$pword,$email,$country, $biography, $pseudo);
        }
    

    

    require './view/forConnect.php';
    }
   
    //pour voir le detail des proposition de voyage-- fait
    public function detailTravel($id_detail){
        $travel = $this->travelManager->detailOfTravel($id_detail);
        require ( 'view/onTravelView.php');
        }

    //pour voir la page inscription  --afaire
    public function addmember($id_detail){
        $travelInscription = $this->memberManager->detailInscription;
        require('view/forsubscribe.php');
    }
    //pour ce connecter  --dessus
    public function viewFormulaireConnection($pseudo, $pword)
    {
        $insertMember =  $this->memberManager->insertMember($pseudo, $pword);
        header('Location: index.php');
    }
    //verifivation
    public function controlMember($name_member, $pword)
    {
    $nameverif=htmlspecialchars($name_member);
    $pwordverif = htmlspecialchars($pword);
    $verifMember=$this->memberManager->verifMember($nameverif);


    if ($verifMember==false) {
    
     throw new Exception("erreur d'authentif");
    } else {
        if (password_verify($pwordverif, $verifMember['pword'])) {

          //  echo('Hello');
            //$ echo 'Le mot de passe est valide !'
            $_SESSION['name_member'] = $verifMember['name_member'];

            if ($verifMember['role_user'] == 0) {
                $_SESSION['superAdmin'] = $verifMember;
                 
                 //creer la page viewSuperAdminPost pour le ou les super administrateurs
             }
            elseif ($verifMember['role_user'] == 1) {
                 $_SESSION['admin'] = $verifMember;
                
                     //creer la page viewAdminPost pour que les admins puisse proposer des voyages
             } else {
     
                 $_SESSION['member'] = $verifMember;
               
                     // creer la page viewMemberPosts pour que les members ne puisse de lire certaines pages et non proposer
             }
             header('Location: index.php' );
         
            
            
        } else {
           
             throw new Exception("erreur d'authentification du mot de passe");
        }
    }
}

 //voir quel genre d'utilisateur    -- a faire
    
 public function goToLogin($para1,$para2)
 {
 
     $req = $this->memberManager->checkingMember($para1);
 
     $donnees = $req->fetch();

     require 'view/testView.php';
 
     if ((password_verify($para2, $donnees['pword'])) && ($para1 == $donnees['name_member'])) {
        if ($donnees['role_user'] == 0) {
            $_SESSION['superAdmin'] = $donnees;
             
             //creer la page viewSuperAdminPost pour le ou les super administrateurs
         }
        elseif ($donnees['role_user'] == 1) {
             $_SESSION['admin'] = $donnees;
            
                 //creer la page viewAdminPost pour que les admins puisse proposer des voyages
         } else {
 
             $_SESSION['member'] = $donnees;
           
                 // creer la page viewMemberPosts pour que les members ne puisse de lire certaines pages et non proposer
         }
     }
         header('Location: index.php');  
     }
     //proposer un partage
     public function createTravel($country_travel,$date_depart,$date_return, $flexible,$number_max,$participe,$comment,$id_member){

        $proposeTravel =  $this->travelManager->proposeTravel($country_travel,$date_depart,
        $date_return,$flexible,$number_max,$participe,$comment,$id_member);
     
        header('Location: index.php');
        
     }
     //pour recevoir une proposition
     public function receiveThePropo($country_visited,$date_depat,$date_return){
        $this->travelManager->receiveTheProp($country_visited,$date_depat,$date_return);
        require ( 'view/receiveProposition.php');
    }
     // creer profil
     public function createProfil($paysVisiter,$avatar, $situation_perso,$id_member){
         $this->memberManager->createProfil($paysVisiter,$avatar, $situation_perso,$id_member);
         header('Location: index.php');
     }
     //pour voir le detail des prolifes
    public function toSeeProfil($id_profil){
        $profil =  $this->memberManager->findProfil($id_profil);
        require ( 'view/seeProfil.php');
        }

        //je selectionne les info profil pour après les modifier

        public function seeToModifyProfil($id_profil){
            $profil =  $this->memberManager->findProfil($id_profil);
            require ( 'view/modifyProfil.php');
            
        }
 //modifier le profil
 public function modifyProfil($pseudo,$mail,$biography,$country_visited,$avatar,$situation_perso){
     $this->memberManager->modifyProfil($pseudo, $mail, $biography, $country_visited, $avatar, $situation_perso);

     $profil =  $this->memberManager->findProfil($_SESSION['admin']['id_member']);
     require ( 'view/seeProfil.php');

        }
        //supprimer un compte
        public function deleteTheMember($id_member)
        {
               $this->memberManager->deleteOfTheMember($id_member);
               
       }
       



     //this toujours avec memberManager en minuscule

     
}   