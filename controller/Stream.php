<?php

class StreamController extends Controller {

    private $view;

    public function __construct($args) {
        parent::__construct($args);
        self::redirectIfNotConnected();
        include "view/Stream.php";
        $view = new StreamView();
    }

    public function display() {
        $this->view->setView("stream");
    }
}
