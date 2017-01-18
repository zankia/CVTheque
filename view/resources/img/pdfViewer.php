<?php
$src = htmlspecialchars($_GET['name']);
$img = new imagick("../stockCV/$src.pdf[0]");
$img->setImageFormat('jpg');
header('Content-Type: image/jpeg');
echo $img;
