<?php
$src = htmlspecialchars($_GET['name']);
$filename = "../stockCV/$src.pdf";
if(isset($_GET['img'])) {
    $img = new imagick($filename);
    $img->setImageFormat('jpg');
    header('Content-Type: image/jpeg');
    echo $img;
} else {
    header('Content-Type: application/pdf');
    readfile($filename);
}
