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

    public function userlist() {
        $tuples = $this->model->getUsers();
        $this->view->setView("userlist.php", $tuples);
    }
    public function display() {
        $this->view->setView("admin.php");
    }
    public function deleteUser ($request) {
        if ($this->model->deleteUser($request[0]))
            header("Location: ../Userlist");

    }

    public function promoteAdmin ($request) {
        if ($this->model->changeAdminStatus($request[0], true))
            header("Location: ../Userlist");
    }
    public function demoteAdmin ($request) {
        if ($this->model->changeAdminStatus($request[0], false))
            header("Location: ../Userlist");
    }
}
