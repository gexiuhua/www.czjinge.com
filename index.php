<?php

define('APP_APTH',true);

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;

$app->get('/',function(Request $req,Response $res){
    $name = $req->getAttribute('name');
    $res->getBody()->write("欢迎来到czjinge.com");
    return $res;
});

$app->run();


