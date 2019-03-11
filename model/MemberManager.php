<?php 
namespace shareontravel\Model;
use \shareontravel\model\Manager;

class MemberManager extends Manager
{
    const SITUATION = [
        'En solo',
        'En couple',
        'Entre ami(e)s'
    ];

    public function addmember(
        $name_member,
        $surname,
        $genre,
        $date_birth,
        $pword,
        $email,
        $country,
        $biography,
        $pseudo
    ) {
        //je recupere les infos pour les mettre dans la bdd
        $bdd=$this->bdconnect();
        $req=$bdd->prepare('INSERT INTO member(name_member,surname,genre,date_birth,pword,email,
        country,activate_code,activate_count,date_inscription,biography,role_user,pseudo)
        VALUES(?,?,?,?,?,?,?,?,?,now(),?,?,?)');
        $req->execute(array($name_member,$surname,$genre,$date_birth,$pword,$email,$country,'true','true',
        $biography,1,$pseudo));
        return $req;
    }
    //verify quelle participe d'utilisateur ,dans controller.php function goToLogin
    public function goToLogin($role_user)
    {
        $bdd=$this->bdconnect();
        $req=$bdd->prepare('SELECT * from member WHERE role_user=(:role_user)');
        $req->execute(array($role_user
    ));
        return $req;
    }
    //pour ce connecter
    public function insertMember($name_member, $pword)
    {
        $bdd = $this->bdconnect();
        $createCount =$bdd->prepare('INSERT INTO member(name_member,pword,role_user )VALUES(?,?,?)');
        $createCount->execute(array($name_member,$pword,1));
        return $createCount;
    }
    //je verifie
    public function verifMember($name_member)
    {
        $bdd=$this->bdConnect();
        $verifUser= $bdd->prepare('SELECT id_member, name_member, pword, role_user FROM member WHERE name_member =?');
        $verifUser->execute(array($name_member));
        $member=$verifUser->fetch();
        return $member;
    }
    public function createProfil($paysVisiter, $avatar, $situation_perso, $id_member)
    {
        $bdd=$this->bdConnect();
        $forProfil =$bdd->prepare('INSERT INTO profile(country_visited,avatar,situation_perso,id_member)VALUES(?,?,?,?)');
        $forProfil->execute(array($paysVisiter,$avatar, $situation_perso,$id_member));
        return $forProfil;
    }
    //detail du profil
    public function findProfil($id_profil)
    {
        $bdd = $this->bdconnect();
        $detail = $bdd->prepare('SELECT member.id_member,name_member,surname,genre,date_birth,pword,email,country,activate_code,activate_count,biography,pseudo,
        country_visited,avatar,situation_perso FROM member
        INNER JOIN profile ON member.id_member=profile.id_member
        where member.id_member = ? ');
      
      $detail->execute(array($id_profil));
      $d = $detail->fetch();
      $d['situation_perso_nom'] = self::SITUATION[intval($d['situation_perso'])];


        return $d;
    }
    //voir les profil pour les modifier
    public function seeToModifyProfil($pseudo,$mail,$biography,$country_visited,$avatar,$situation_perso)
    { $bdd = $this->bdconnect();
        $update = $bdd->prepare('SELECT pseudo,mail,biography,country_visited,avatar,situation_perso  FROM member
        INNER JOIN profile ON member.id_member=profile.id_member
        where member.id_member = ? ');

    }

        //modifier profil
        public function modifyProfil($pseudo,$mail,$biography,$country_visited,$avatar,$situation_perso)
     {

        echo($pseudo);
         $bdd = $this->bdconnect();
         $update = $bdd->prepare("UPDATE member SET pseudo=:pseudo,mail=:mail,biography=:biography,country_visited=:country_visited,avatar=:avatar,situation_perso=:situation_perso 
        INNER JOIN profile ON member.id_member=profile.id_member
        WHERE id_member =:id_member");
         $update->execute(array(
             ':id_member' => $_SESSION['admin']['id_member'],
             ':pseudo' => $pseudo,
             ':mail' => $mail,
             ':biography' => $biography,
            ':country_visited' =>$country_visited,
            ':avatar' =>$avatar,
            ':situation_perso' =>$situation_perso
         ));
     }
     public function deleteOfTheMember($id_member)
     {
        $bdd = $this->bdconnect();
        $req = $bdd->prepare("DELETE FROM member WHERE id_member = (:deleteid)");
        $req->execute(array("deleteid" => $deleteid));
        return $req;
     
     }

}