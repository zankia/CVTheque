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
    public function modifyCV($request) {
        $this->view->setView("modifyCV.php", $request);
    }
    public function modify () {
        $this->model->modify ($_SESSION['nickname'], $_POST['nom'],$_POST['prenom'],$_POST['numsecu'],$_POST['telP'],
            $_POST['telF'],$_POST['telP'], $_POST['adresse'],$_POST['ville'],
            $_POST['codePostal'],$_POST['domaine']);
        //header ("Location ../");
        echo $_SESSION['address'];

    }
    public function addCV() {

        if(isset($_FILES['pdf']['tmp_name'])) {
            $pdf = $_FILES['pdf']['tmp_name'];
            $pdfName = $_FILES['pdf']['name'];
            if($this->model->checkPDFValidity($pdf, $pdfName)) {
                if($this->model->uploadPDF($pdf, $pdfName)) {
                    $this->view->uploadSuccessful();
                    $this->treatForm();
                }
                else {
                    View::error(3673);
                }
            } else {
                View::error(3674);
            }
        } else {
            View::error(3675);
        }

    }

    public function treatForm() {
        if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['numsecu'])
            && (isset($_POST['telF']) || isset($_POST['telP']) )) {

            if(!$this->model->checkSecuValidity($_POST['numsecu']))
                View::error(3759);
                else if(!$this->model->checkPhoneValidity($_POST['telF']))
                    View::error(3760);
                    else if(!$this->model->checkPhoneValidity($_POST['telP']))
                        View::error(3760);
                        else if(!$this->model->checkPostalValidity($_POST['codePostal']))
                            View::error(3761);
                            else $this->model->uploadUserInformation($_SESSION['nickname'], $_POST['nom'],
                                                $_POST['prenom'],$_POST['numsecu'],$_POST['telP'],$_POST['telF'],
                                                $_POST['telP'], $_POST['adresse'],$_POST['codePostal'],$_POST['ville']);
        }
        else{
            View::error(3758);
        }
    }
    public function deleteCV ($request) {
        $login = $this->model->getCVUserId($request[0]);
        if (($_SESSION['admin'] || $login["idUser"] == $_SESSION['nickname']) && !$_SESSION['consultant']) {
            if ($this->model->deleteCV($request[0]))
                header("Location: ../../Stream/CVList");
        }
        else {
            View::error(14);
        }
    }


}
