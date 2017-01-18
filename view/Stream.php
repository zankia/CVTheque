<?php

class StreamView extends View {

    public static function setView($view, $params = null) {
        parent::setView("Stream/" . $view, $params);
    }

    public static function CVList($params) {
        $viewList = array("Stream/pager.php",
                          "Stream/CVList.php",
                          "Stream/pager.php");
        parent::setView($viewList, $params);
    }

}
