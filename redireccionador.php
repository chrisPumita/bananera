<?php
// Si el idioma esta en la URL, grabarlo en una cookie
if (isset($_GET['wlang'])){
    $webLang=trim($_GET["wlang"]);
    if ($webLang<>"") {
        $expire=time()+60*60*24*30*6; // 6 meses
        setcookie("clang", $webLang, $expire);
    } else
    {
        // Hay una cookie de idioma definida
        if (isset($_COOKIE["clang"])) {
            // leer idioma en la cookie
            $webLang=$_COOKIE["clang"];

            // No hay ninguna cookie de idioma definida
        } else {
            // detectar idioma del navegador
            $webLang = substr ($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
            if (($webLang<>"de") AND ($webLang<>"en") AND ($webLang<>"es") ) {
                // Idioma por defecto, en caso de detectar un idioma raro que no tengamos
                $webLang="es";
            }
            $expire=time()+60*60*24*30*6; // 6 meses
            setcookie("clang", $webLang, $expire);
        }

        // Anti bucles infinitos (evita que si estamos en la página española, nos redirija a la página española y así una y otra vez sin parar.
        if ($thisPageLang<>$webLang) {
            // redireccionar al idioma correspondiente
            switch ($webLang) {
                case "de":
                    Header('Location: ./de');
                    break;
                case "en":
                    Header('Location: ./en');
                    break;
                case "es":
                    Header('Location: ./');
                    break;
                default:
                    Header('Location: ./');
                    break;
            }
        }
    }
}
?>