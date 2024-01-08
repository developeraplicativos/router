<?php
namespace App\controllers;

use League\Plates\Engine;
class Controller{
    public static function view(String $view, Array $data = []){
        $path = dirname(__FILE__,2)."/Views";
        
        if ( !file_exists($path.DIRECTORY_SEPARATOR.$view.'.php')) {
            throw new \Exception("Pagina  {$view}, não encontrada", 1); 
        }
        
        $templates = new Engine($path); 
        echo $templates->render($view, $data);
    }
}