<?php

function load(string $controller, string $action){
    try {
        //code...
        $controllerNameSpace = "App\\controllers\\{$controller}";
        // echo $controllerNameSpace; exit;
        if(!class_exists($controllerNameSpace)){
            throw new Exception("O controller {$controller} não existe", 1);
        };
        $controllerInstance = new $controllerNameSpace;
    
        if( !method_exists($controllerInstance, $action)){
            throw new Exception("O metodo {$action} não existe no controller {$controller}", 1);
        }
        
        $controllerInstance->$action( (object) $_REQUEST );
    } catch (\Exception $e) {
        echo $e->getMessage();
    }

}


$routers = array(
    'GET' => [
        '/'=> fn() => load( 'HomeController','index'), 
        '/contatos'=> fn() => load( 'ContactController','index'),
    ],
    'POST' => [
        '/contact'=> fn() => load( 'ContactController','store') 
    ]

);