<?php

namespace app\controllers;

use app\models\Type;

class CreatorController extends CoreController {

    public function Creator()
    {
        $creatorModel = new Type();
        $creatorList = $creatorModel->findAllTypes();
        
        $this->show('createurs',['createurs' => $creatorList]);
        
    }
  

    
}