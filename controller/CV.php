<?php

class CVController extends Controller {
    private $view;
    private $model;

    public function __construct($args) {
        parent::__construct($args);
        self::redirectIfNotConnected();
        include "view/CV.php";
        include "model/CV.php";
        $this->view = new CVView("CV.php");
        $this->model = new CVModel();

    }

    public function display() {
        $this->view->setView("cv.php");
    }

    public function ajouterCV(){
        if(isset($_FILES['pdf']['tmp_name'])) {
            $pdf = $_FILES['pdf']['tmp_name'];
            $pdfName = $_FILES['pdf']['name'];
            if($this->model->checkPDFValidity($pdf, $pdfName)){
                if($this->model->uploadPDF($pdf, $pdfName)){
                    $this->view->uploadSuccessful();
                    $this->traiterFormulaire();
                }
                else {
                    View::error(3673);
                }
            }
            else {
                View::error(3674);
            }
        }
        else {
            View::error(3675);
        }

    }

    public function traiterFormulaire() {
        if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['numsecu']) && isset($_POST['telP'])
            && isset($_POST['telF']) && isset($_POST['telP']) && isset($_POST['adresse']) && isset($_POST['codePostal'])
            && isset($_POST['ville']) && isset($_POST['domaine']) ){

            $this->model->uploadUserInformation($_SESSION['nickname'], $_POST['nom'],$_POST['prenom'],$_POST['numsecu'],$_POST['telP'],
                                                $_POST['telF'],$_POST['telP'], $_POST['adresse'],$_POST['ville'],
                                                $_POST['codePostal'],$_POST['domaine']);
        }
        else{
            View::error(3758);
        }
    }
}

