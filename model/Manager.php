<?php
//connection a la base de donnée
namespace shareontravel\model;

use \PDO;


class Manager
{
    protected function bdconnect()
    {
      
            $bdd= new PDO(
            'pgsql:host=localhost;port=5433;dbname=shareontravel','postgres','adminkercode'
           // , array(\PDO::ATTR_ERRMODE =>\PDO::Errmode_exception)
        );
            return $bdd;
       
    }
}
