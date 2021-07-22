<?php
if (isset($_POST['name']) ||
    isset($_POST['email']) ||
    isset($_POST['empresa']) ||
    isset($_POST['telefono']) ||
    isset($_POST['pais']) ||
    isset($_POST['sector']) ||
    isset($_POST['terms']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $empresa = $_POST['empresa'];
    $telefono = $_POST['telefono'];
    $pais = $_POST['pais'];
    $sector = $_POST['sector'];
    $terms = $_POST['terms'];
    $comentario = $_POST['comentario'];
    include_once "./enviaMail.php";
    if(enviaCorreo($name,$email,$empresa,$telefono,$pais,$sector,$comentario))
        echo "Hemos recibido sus datos, en breve uno de nuestros agentes se pondrá en contacto con usted al correo ".$email;
    else
        echo "Ocurrio un error interno en el servidod.<br> Vuelva a intentarlo";
}
else{
    echo "Los datos no estan completos. Intentelo de nuevo";
}





