<?php

class AccueilView extends View {
    public static function setView($view, $params = null) {
        $viewSet = array('header.php', 'Accueil/'. $view);
        parent::setView($viewSet, $params);
    }
}
