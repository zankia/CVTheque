<?php

class CVView extends View {

    public static function setView($view, $params = null) {
        $viewList = array('header.php', 'CV/' . $view);
        parent::setView($viewList, $params);
    }

    public static function uploadSuccessful() {
        $viewList = array('header.php', 'CV/cv.php', 'CV/uploadSuccessful.php');
        parent::setView($viewList);
    }

}

