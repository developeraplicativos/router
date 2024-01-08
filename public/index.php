<?php
require '../vendor/autoload.php';
require '../routers/router.php';

try {
    //code...
    $uri = parse_url(   $_SERVER['REQUEST_URI'] )['path'];
    $request = $_SERVER['REQUEST_METHOD'];

    if (!isset($routers[$request])) {
        throw new Exception("não existe este metodo", 1);        
    } 
    if( !array_key_exists($uri, $routers[$request] ) ){
        throw new Exception("a rota não existe", 1);
    }
    
    $controller = $routers[$request][$uri];
    $controller();
} catch (\Exception $e) {
    $e->getMessage();
}