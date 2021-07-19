<?php
include_once "./enviaMail.php";

if (enviaCorreo("CHRISTIAN RCGS","christian.floppy@gmail.com")){
    echo "SE ENVIO EL CORREO";
}
else{
    echo "ERROR DE ENVIO";
}