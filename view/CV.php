<?php

class CVView extends View {
    public static function setView($view, $params = null){
        parent::setView("CV/" . $view, $params);
    }

    public static function uploadSuccessful(){
        $viewList = array(
            0 => "CV/cv.php",
            1 => "CV/uploadSuccessful.php"
        );
        parent::setView($viewList);
    }

}

