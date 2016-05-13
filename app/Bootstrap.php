<?php
    class bootstrap
    {
        function __construct()
        {
            include_once 'vendors/n9engine/Autoloader.php';
            $autoloader = new n9engine\Autoloader();
            $autoloader->register();
            $autoloader->addNamespace('n9engine', 'vendors/n9engine');
            $autoloader->addNamespace('App\controllers', 'app/controllers');
            $autoloader->addNamespace('App\models', 'app/models');
        }
    }