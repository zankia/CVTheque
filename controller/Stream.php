<?php

class StreamController extends Controller {

    private $view;

    public function __construct($args) {
        parent::__construct($args);
        self::redirectIfNotConnected();
        include "view/Stream.php";
        $this->view = new StreamView();
    }

    public function display() {
        $this->view->setView("stream.php");
    }

    public function deconnexion() {
        session_unset();
        self::redirectIfNotConnected();
    }
}
