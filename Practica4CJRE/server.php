<?php
    require_once "lib/nusoap.php";
    function getFrutas($datos){
        if($datos == "Frutas"){
            return join(",",array(
                "Sandia",
                "Fresa",
                "Tuna",
                "Uva",
                "Melón"));
        }else{
            return "No hay frutas";
        }
    }

    $server = new soap_server(); //creamos la instancia SOAP
    $server->register("getFrutas"); //indica el metodo o funcion a devolver
    if (!isset($HTTP_RAW_POST_DATA)) $HTTP_RAW_POST_DATA=file_get_contents('php://input');
        $server->service($HTTP_RAW_POST_DATA);
?>