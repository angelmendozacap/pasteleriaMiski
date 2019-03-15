<?php

class ImagesController extends Images
{
    public $err;
    public $success;
    public function obtenerImagenes() {
        $respuesta = $this->getAllImages();
        if (!empty($respuesta)) {
            $json = $this->statusMsg("Petición correcta",200,true);
            foreach ($respuesta as $key => $row) {
                $item = [
                    "id" => $row["id"],
                    "image" => $row["image"],
                    "name" => $row["name"]
                ];
                array_push($json["items"], $item);
            }
        } else {
            $json = $this->statusMsg("Petición correcta pero sin contenido",204,false);
        }
        header("Content-type: application/json");
        return json_encode($json,JSON_UNESCAPED_UNICODE);
    }
    public function guardarImagen($title)
    {
        $title = ValidarCampo($title);
        $this->setImage('name',$title);
        $respuesta = $this->addImage();
        if ($respuesta) {
            $this->success = $this->statusMsg('Archivo subido con éxito',201);
            return $respuesta;
        } else {
            $this->err = $this->statusMsg('Hubo un problema al subir el archivo',500);
            return $respuesta;
        }
    }
    public function subirImagen($image)
    {
        $directorio = "pictures/";

        $this->setImage('image',basename($image['name']));

        $archivo = $directorio.$this->getImage('image');

        $tipo_archivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));

        $es_imagen = getimagesize($image['tmp_name']);

        if ($es_imagen) {
            if ($tipo_archivo == 'jpg' || $tipo_archivo == 'jpeg' || $tipo_archivo == 'png') {
                if (move_uploaded_file($image['tmp_name'],$archivo)) {
                    return true;
                } else {
                    $this->err = $this->statusMsg('Hubo un problema al subir el archivo',500);
                    return false;
                }
            } else {
                $this->err = $this->statusMsg('Solo se permite imagenes jpg, jpeg y png',400);
                return false;
            }
        } else {
            $this->err = $this->statusMsg('El archivo no es una imagen',400);
            return false;
        }
    }
    public function statusMsg($msg,$code,$is_request=false)
    {
        return $is_request ? ["message"=> $msg, "code" => $code, "items" => array()] : ["message"=> $msg,"code" => $code];
    }
}