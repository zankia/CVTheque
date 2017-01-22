<?php

class StreamController extends Controller {

    private $model;
    private $view;

    public function __construct($args) {
        parent::__construct($args);
        self::redirectIfNotConnected();
        include 'model/Stream.php';
        include 'view/Stream.php';
        $this->model = new StreamModel();
        $this->view = new StreamView();
    }

    public function display() {
        $this->CVList(array());
    }

    public function deconnexion() {
        session_unset();
        self::redirectIfNotConnected();
    }

    public function CVList($request) {
        if($_SESSION['admin'] || $_SESSION['consultant']) {
            $page = array_key_exists(0, $request) ? $request[0] : 1;

            $CVList = $this->model->getCVList(null, $page);
            foreach($CVList as &$CV) {
                $CV['skills'] = $this->model->getSkills($CV['id']);
            }

            $params['data'] = $CVList;
            $params['count'] = $this->model->getRowCount();
            $params['now'] = $page;
            $this->view->CVList($params);

        } else {
            $page = array_key_exists(0, $request) ? $request[0] : 1;

            $CVList = $this->model->getCVList($_SESSION['nickname'], $page);
            foreach($CVList as &$CV) {
                $CV['skills'] = $this->model->getSkills($CV['id']);
            }

            $params['data'] = $CVList;
            $params['count'] = $this->model->getRowCount();
            $params['now'] = $page;
            $this->view->CVList($params);
        }
    }
    public function searchCV ($request) {
        if($_SESSION['admin'] || $_SESSION['consultant']) {
            $page = array_key_exists(0, $request) ? $request[0] : 1;

            $CVList = $this->model->searchCV(null, $page, $_GET['skill']);
            echo empty($CVList);
            foreach($CVList as &$CV) {
                $CV['skills'] = $this->model->getSkills($CV['id']);
            }

            $params['data'] = $CVList;
            $params['count'] = $this->model->getRowCount();
            $params['now'] = $page;
            $this->view->CVList($params);

        } else {
            $page = array_key_exists(0, $request) ? $request[0] : 1;

            $CVList = $this->model->searchCV($_SESSION['nickname'], $page, $request);
            foreach($CVList as &$CV) {
                $CV['skills'] = $this->model->getSkills($CV['id']);
            }

            $params['data'] = $CVList;
            $params['count'] = $this->model->getRowCount();
            $params['now'] = $page;
            $this->view->CVList($params);
        }
    }

    public function sendMail() {
        if($_SESSION['admin'] || $_SESSION['consultant']) {
            $mail = $_POST['mail'];
            foreach($_POST['idCV'] as $candidate) {
                $addr = $this->model->getMailFromCV($candidate);
                mail($addr, 'Offre d\'emploi', $_POST['mail'], 'From: noreply@zankia.fr');
            }
            $this->view->setView('sendMail.php');
        } else {
            self::redirectIfConnected();
        }
    }
}
