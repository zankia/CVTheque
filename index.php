<?php
//définition des variables

define('URL_ROOT_PATH', 'http://localhost/CVTheque/');
define('URI_ROOT_PATH', '/CVTheque/');
define('DEBUG', true);


//gestion de l'affichage des erreurs

ini_set('error_reporting', E_ALL);

if(DEBUG)
    ini_set('display_errors', 'on');
else
    ini_set('error_log', 'logs/error.log');


session_name("SessionId");
session_start();

//point d'entrée
require "controller/Controller.php";


//appel du controleur
$control = Controller::initController();
$action = $control->getAction();
if(method_exists($control, $action)) {
    $options = $control->getOptions();
    $control->$action($options);
} else {
    Controller::error(404);
}
