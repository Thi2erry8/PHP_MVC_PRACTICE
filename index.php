<?php
     

     require_once __DIR__.'/vendor/autoload.php';

     Use app\core\Application;
     


     $app= new Application();

     $app->router->get('/',function(){
         return 'Hello Word' ;
     });

     $app->run();