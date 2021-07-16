<?php
include_once "./enviaMail.php";

if (enviaCorreo("CHRISTIAN RCGS","fernandohlqwe@gmail.com")){
    echo "SE ENVIO EL CORREO";
}
else{
    echo "ERROR DE ENVIO";
}