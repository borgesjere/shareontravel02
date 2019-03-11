<?php

namespace shareontravel\model;

use \shareontravel\model\Manager;

class TravelManager extends Manager{


    //connection a la bdd
    public function getTravels()
     {
         // Connexion à la base de données
         $bdd = $this->bdconnect();
         $req = $bdd->query('SELECT * FROM travel INNER JOIN profile ON profile.id_member=travel.id_member
         INNER JOIN member ON member.id_member=profile.id_member Order BY 1 DESC LIMIT 10');
         return $req;
     }
     //relation entre les tables
     public function getTravel($id_travel)
     {
        $bdd = $this->bdconnect();
        $post = $bdd->prepare('SELECT * FROM travel INNER JOIN profile ON profile.id_member=travel.id_member
        INNER JOIN member ON member.id_member=profile.id_member WHERE travel.id_travel=? ');
        $post->execute(array($id_post));

        return $post;
     }
     //proposer un voyage
     public function proposeTravel( $country_travel,$date_depart,$date_return,$flexible,$number_max,$participe,$comment,$id_member)
     {
        $bdd = $this->bdconnect();
        $req = $bdd->prepare('INSERT INTO travel(country_travel,date_depart,date_return,flexible,number_max,participe,comment,date_proposition,id_member)
        VALUES (?,?,?,?,?,?,?,now(),?) ');
        $req->execute(array(
        $country_travel,
        $date_depart,
        $date_return,
        $flexible,
        $number_max,
        
        $participe,
        $comment,
        $id_member
      ));
        return $req;
     }
     //recevoir un partage
     public function receiveTheProp( $country_travel,$date_depart,$date_return){
      $bdd = $this->bdconnect();
      $req = $bdd->prepare('SELECT id_travel,country_travel,date_depart,date_return FROM Travel
      INNER JOIN member ON travel.id_member=member.id_member
      '
   );
     }

     //detail proposition voyage pour ontravelview
     public function detailOfTravel($id_detail)
     {
      $bdd = $this->bdconnect();
      $detail = $bdd->prepare( 'SELECT id_travel,country_travel,date_depart,date_return,flexible,number_max,participe,comment,date_proposition,name_member,surname,date_birth,country,avatar FROM travel
      INNER JOIN member ON travel.id_member=member.id_member 
      INNER JOIN profile ON member.id_member=profile.id_member 
      WHERE travel.id_travel=?');
      
      $detail->execute(array($id_detail));

      return $detail;
     }
     
}