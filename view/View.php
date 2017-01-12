<?php

class View {

    public static function setView($view, $params = null) {
        $viewSet = array('head.php');
        
        // si la vue est un tableau
        if (is_array($view)){
            foreach ($view as $file) {
                // on ajoute chaque fichier à inclure
                $viewSet[] = $file;
            }
        }
        // sinon on ajoute simplement la vue
        else {
            $viewSet[] = $view;
        }
        $viewSet[] = 'foot.php';
        foreach($viewSet as $part) {
            include 'view/resources/page/' . $part;
        }
    }

    final public static function error($id) {
        self::setView('error.php', $id);
        exit();
    }
}
