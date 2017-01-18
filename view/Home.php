<?php

class HomeView extends View {

    public static function setView($view, $params = null) {
        $viewSet = array('header.php', 'Home/'. $view);
        parent::setView($viewSet, $params);
    }
}
