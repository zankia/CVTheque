<?php

class View {

    public static function setView($view, $params = null) {
        $param = $params;
        $viewSet = array("head.php", $view, "foot.php");
        foreach($viewSet as $part) {
            include 'view/resources/page/' . $part;
        }
    }

    final public static function error($id) {
        self::setView("error.php", $id);
        exit();
    }
}
