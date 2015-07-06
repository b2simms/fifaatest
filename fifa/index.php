<?php



require 'Slim/Slim.php';



include_once 'matches.php';


\Slim\Slim::registerAutoloader();



$app = new \Slim\Slim();



$app->get('/matches', 'getMatches');


$app->run();



function getMatches() {

    

    $matches = new Matches();

		

    echo $matches->getMatches();

}






		