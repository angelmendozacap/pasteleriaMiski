<?php

require_once "./app/config.php";
require_once "./app/helpers/helps.php";
require_once "./app/DB.php";
require_once "./app/models/Images.php";
require_once "./app/controllers/ImagesController.php";


$imagenes = new ImagesController();
if (isset($_POST["titleImage"]) && isset($_FILES["imageFile"])) {
    if (!isset($_POST["id"])) {
        if ($imagenes -> subirImagen($_FILES["imageFile"])) {
            if ($imagenes->guardarImagen($_POST["titleImage"])) {
                header("Content-type: application/json");
                echo json_encode($imagenes->success,JSON_UNESCAPED_UNICODE);
            } else {
                header("Content-type: application/json");
                echo json_encode($imagenes->err,JSON_UNESCAPED_UNICODE);
            }
        } else {
            header("Content-type: application/json");
            echo json_encode($imagenes->err,JSON_UNESCAPED_UNICODE);
        }
    } else {

    }
} else {
    if (!isset($_POST["id"])) {
        echo ($imagenes->obtenerImagenes());
    } else {

    }
}