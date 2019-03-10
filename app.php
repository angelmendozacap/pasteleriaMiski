<?php

require_once "./app/config.php";
require_once "./app/DB.php";
require_once "./app/models/Images.php";
require_once "./app/controllers/ImagesController.php";
// $_POST["image"] = "septimo.jpg";
// $_POST["name"] = "Torta Helada";

$imagenes = new ImagesController();
if (isset($_POST["image"]) && isset($_POST["name"])) {
    if (!isset($_POST["id"])) {
        $data = [
            $_POST["image"],
            $_POST["name"]
        ];
        var_dump($imagenes->crearImagen($data));
    } else {

    }
} else {
    if (!isset($_POST["id"])) {
        echo ($imagenes->obtenerImagenes());
    } else {

    }
}