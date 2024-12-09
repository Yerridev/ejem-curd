<?php
    $controllers = glob(CONTROLLERS .'/*.php');
    $models = glob(MODELS .'/*.php');


    foreach($controllers as $c){
        require_once($c);
    };

    foreach($models as $m){
        require_once($m);
    };


?>


