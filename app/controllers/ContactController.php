<?php
namespace App\controllers;

use app\controllers;

class ContactController{
    public function index(){
        return Controller::view("home");  
    }
    public function store($params){
        var_dump($params);
        return Controller::view("contato"); 

    }
}