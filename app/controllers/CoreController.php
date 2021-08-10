<?php

namespace app\controllers;


class CoreController 

{
    protected $commonViewVars = [];

    
    protected function show( $viewName, $viewVars = [] ) 
    {
        $baseUrl = dirname($_SERVER['BASE_URI']);

    global $router;

        require_once __DIR__.'/../views/partials/_header.tpl.php';
        require_once __DIR__.'/../views/'.$viewName.'.tpl.php';
    }

}