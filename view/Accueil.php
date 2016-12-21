<?php

class AccueilView extends View {
    public static function setView($view, $params = null) {
        parent::setView("Accueil/" . $view, $params);
    }
}
