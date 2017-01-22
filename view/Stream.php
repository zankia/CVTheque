<?php

class StreamView extends View {

    public static function setView($view, $params = null) {
        $viewSet = array('header.php', 'Stream/'. $view);
        parent::setView($viewSet, $params);
    }

    public static function CVList($params) {
        $viewList = array('header.php',
                          'Stream/pager.php',
                          'Stream/CVList.php',
                          'Stream/pager.php');
        parent::setView($viewList, $params);
    }

}
