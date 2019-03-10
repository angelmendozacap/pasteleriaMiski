<?php

class ImagesController extends Images
{
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
    public function crearImagen($data)
    {
        return $data;
        /*if (!empty($data)) {
            $respuesta = $this->addImage($data);
            if ($respuesta) {
                $json = $this->statusMsg("Petición correcta se creo un nuevo recurso",201,false);
            } else {
                $json = $this->statusMsg("Error de servidor",500,false);
            }
        } else {
            $json = $this->statusMsg("Error de petición",400,false);
        }
        header("Content-type: application/json");
        return json_encode($json,JSON_UNESCAPED_UNICODE);*/
    }
    private function statusMsg($msg,$code,$is_request=false)
    {
        return $is_request ? ["message"=> $msg, "code" => $code, "items" => array()] : ["message"=> $msg,"code" => $code];
    }
}