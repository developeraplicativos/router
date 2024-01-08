<?php
namespace App\controllers;

use app\controllers;

 
class HomeController{

    public function index($params){
        if( !empty($params->name) ){var_dump($params->name); }
        return Controller::view("home"); 
    }
    
}