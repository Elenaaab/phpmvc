<?php

namespace app\models;

use \app\utils\Database;
use \PDO;

class Character extends CoreModel {

    protected $description;
    protected $picture;
    protected $type_id;


    public function findAll()
    {
        $pdo = Database::getPDO();            
        $sql = "SELECT * FROM `character` ORDER BY `name` ASC";
        $statement = $pdo->query( $sql );            
        return $statement->fetchAll( PDO::FETCH_CLASS, "app\Models\Character" );
    }


    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get the value of picture
     */ 
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Get the value of type_id
     */ 
    public function getType_id()
    {
        return $this->type_id;
    }
}