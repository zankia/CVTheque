<?php

class AdminController extends Controller {

    private $model;
    private $view;

    public function __construct($args) {
        parent::__construct($args);
        if($_SESSION["admin"] != 1) {
            header("Location: " . URL_ROOT_PATH);
        }
        include "model/Admin.php";
        include "view/Admin.php";
        $this->model = new AdminModel();
        $this->view = new AdminView();
    }

    public function display() {
        $tuples = $this->model->getUsers();
        $this->view->setView("admin.php", $tuples);
    }
}
