<?php

class AdminView extends View {
    public static function setView($view, $params = null) {
        parent::setView("Admin/" . $view, $params);
    }
}
