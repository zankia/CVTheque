<?php

class StreamView extends View {


    public static function setView($view, $params = null) {
        parent::setView("Stream/" . $view, $params);
    }

}
