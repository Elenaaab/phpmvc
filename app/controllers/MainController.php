<?php

namespace app\controllers;
use app\models\Character;

class MainController extends CoreController {

    public function home() {

        $characterModel = new Character();
        $characterList = $characterModel->findAll();

        $this->show('home',['characters' => $characterList]);
    }

    
}