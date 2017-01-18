<?php

abstract class Controller {
    private $actionList;

    public function __construct($args) {
        include "model/Model.php";
        $this->actionList = $args;
    }

    final public function getAction() {
        if($this->actionList && $this->actionList[0] != "") {
            return $this->actionList[0];
        } else {
            return "display";
        }
    }

    final public function getOptions() {
        $args = $this->actionList;
        if($args) {
            array_shift($args);
        }
        return $args;
    }

    abstract public function display();

    final protected static function redirectIfConnected() {
        if(isset($_SESSION["connected"])) {
            header("Location: " . URL_ROOT_PATH . "Stream/");
        }
    }

    final protected static function redirectIfNotConnected() {
        if(!isset($_SESSION["connected"])) {
            header("Location: " . URL_ROOT_PATH . "Home/");
        }
    }

    final public static function initController() {
        //recupere la requete HTTP en gardant class/action/argument1/argument2/..
        $uri = $_SERVER["REQUEST_URI"];
        $uri = substr($uri, strpos($uri, URI_ROOT_PATH) + strlen(URI_ROOT_PATH));

        $interroMark = strpos($uri, "?");
        $uri = substr($uri, 0, $interroMark !== false ? $interroMark : strlen($uri) );

        //page par defaut
        if(!$uri) {
            $uri = "Stream/";
        }

        //si pas d'action spécifié redirige vers class/
        if(strpos($uri, '/') === false) {
            header("Location: " . URL_ROOT_PATH . $uri . "/");
        }

        $args = explode("/", $uri);

        include "view/View.php";

        //va chercher le fichier de la classe correspondante et l'initialise
        $file = "controller/" . $args[0] . ".php";
        if(!file_exists($file) || $args[0] == "Controller") {
            View::error(404);
        }
        include $file;
        $class = array_shift($args) . "Controller";
        return new $class($args);
    }
}
