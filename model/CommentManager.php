<?php
namespace shareontravel\Model;

use\shareontravel\model\Manager;

class CommentManager extends Manager{
    //selectionner des messages
    public function getMessages($postId)
    {
        $bdd = $this->dbconnect();
        $comments = $bdd->prepare('SELECT to_char(timestamp,\'DD/MM/YYYY\')
        As timestamp_fr, id_member,member.pseudo FROM message INNER JOIN member 
        ON member.id=message.id.member
         WHERE id_member =? ORDER BY timestamp');

        $comments->execute(array($_GET['postId']));
        return $comments;
        
    }
    //creer des messages
    public function postTravel( $title,$content, $timestamp,$statut,$id_member,$id_travel)
    {
        $bdd = $this->dbconnect();
        $comments = $bdd->prepare('INSERT INTO message(title,content,timestamp,statut,id_member,id_travel
        VALUES(?,?,now(),?,?,?)');
        $comments->execute(array(
         $title,$content, $timestamp,$statut,$id_member,$id_travel));
        return $comments;
    }
}