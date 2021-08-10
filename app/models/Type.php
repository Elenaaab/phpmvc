<?php

namespace app\models;

use \app\utils\Database;
use \PDO;

class Type extends CoreModel { 


    public function findAllTypes()
    {
        $pdo = Database::getPDO();            
        $sql = "SELECT * FROM `type` ORDER BY `name` ASC";
        $statement = $pdo->query( $sql );            
        return $statement->fetchAll( PDO::FETCH_CLASS, "app\Models\Type" );
    }




}