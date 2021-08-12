<?php

$thisPageLang = "es";
//Header('Location: index.php?wlang=es');
if (!isset($_GET['wlan']))
{
    //no esta definida entramos por primera vez

    // Hay una cookie de idioma definida
    if (isset($_COOKIE["clang"]))
    {
        // leer idioma en la cookie
        $webLang=$_COOKIE["clang"];
        // No hay ninguna cookie de idioma definida
    }
    else
    {
        // detectar idioma del navegador
        $webLang = substr ($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
        if (($webLang<>"de") AND ($webLang<>"en") AND ($webLang<>"es") ) {
            // Idioma por defecto, en caso de detectar un idioma raro que no tengamos
            $webLang="es";
        }
        $expire=time()+60*60*24; // 1 dia
        setcookie("clang", $webLang, $expire);
    }
}
else{
    $lenguage = $_GET['wlan'];
    $webLang=$lenguage;
    if ($webLang<>"") {
        $expire=time()+60*60*24; // 1 dia meses
        setcookie("clang", $webLang, $expire);
    }
}

//en cualquier caso y una vez definida la cookie
// Anti bucles infinitos (evita que si estamos en la página española, nos redirija a la página española y así una y otra vez sin parar.
if ($thisPageLang<>$webLang)
{
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


//include 'redireccionador.php';

?>
<!doctype html>
<?php $titulo = "Bienvenidos | Grupo Esfuerzo"; ?>
<html lang="es">
    <head>
        <?php include "include/header.php";?>
    </head>
    <body>
<?php
    if (!isset($_COOKIE["clang"]) || ($thisPageLang!=$webLang)){
        include_once "./modal_idioma.php";
    }
?>
        <header style="background: url(./assets/image/min/bg-img1-min.png) top center no-repeat;">

            <div class="video-container">
                <div class="video-inline">
                    <video class="video" poster="./assets/image/min/bg-img1-min.png"  playsinline="playsinline"  autoplay="autoplay" muted="muted" loop="loop" height="100%">
                        <source src="./assets/headerHome.mp4" type="video/mp4" />
                        Tu navegador no soporta video HTML5.
                    </video>
                    <canvas class="canvas"></canvas>
                    <div class="video-timeline js-timeline">
                        <div class="video-timeline-passed js-timeline-passed"></div>
                    </div>
                </div>
            </div>

            <?php include "./include/nav.php" ?>

            <div class="container d-flex justify-content-center align-items-center" style="height: 100%;">
                <div class="overlay"></div>
                <div class="row container-headers home-header">
                    <div class="col">
                        <img src="./assets/image/min/circleHome-min.webp" class="rounded mx-auto d-block circule-home-img img-gost" alt="Grupo Esfuerzo">
                    </div>
                    <div class="col welcome-title">
                        <div class="row">
                            <div class="text-white text-light">
                                <h3 class="mb-3">GRUPO ESFUERZO,</h3>
                                <h2 class="mb-4">Producimos desde Costa Rica <br>
                                    con prácticas sostenibles <br> <span class="text-primary">alimentos que nutren al planeta.</span></h2>
                            </div>
                        </div>
                        <picture>
                            <img src="./assets/image/line-green.svg" width="200" class="rounded float-start text-primary line-header" alt="...">
                        </picture>
                        <div class="py-3">
                            <picture>
                                <img class="certificates" src="./assets/image/certificado-en-proreso-whitte.svg" height="35" class="" alt="carbono natural">
                                <img class="certificates" src="./assets/image/certificago-global-whitte.svg" height="35" class="" alt="Global G.A.P.">
                                <img class="certificates" src="./assets/image/certificacion-frog.svg" height="35" class="" alt="...">
                            </picture>
                        </div>

                    </div>
                </div>
            </div>
            <!--
            <div class=" wabe-mobile d-block d-sm-block d-md-none">
                <div class="container-fluid bg-down" style="background: url(./assets/image/wabe.svg) no-repeat;">
                    <div class="col-6">
                    </div>
                    <div class="col-6 bh">
                    </div>
                </div>
            </div>
            -->
            <div class="wabe d-none d-sm-none d-md-block">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#ffff" fill-opacity="1" d="M0,128L80,160C160,192,320,256,480,245.3C640,235,800,149,960,133.3C1120,117,1280,171,1360,197.3L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
                </svg>
            </div>
        </header>
        <section class="top-header">
            <div id="who-i-am" class="bg-light">
                <div class="container d-flex justify-content-center align-items-center">
                    <div class="row">
                        <div class="col">
                            <img src="./assets/image/min/banana-min.png" class="rounded mx-auto d-block platano img-gost" alt="platano">
                        </div>
                        <div class="col welcome-title">
                            <h2 class="text-primary">Lo que hacemos</h2>
                            <p class="py-5 text-grey">Trabajamos por ser el proveedor referente a nivel <br>
                                mundial del mejor banano costarricense, siempre <br>
                                bajo estrictos estándares de producción sostenible <br>
                                y priorizando el bienestar de nuestros <br>
                                colaboradores y comunidades.</p>
                            <a href="./producto.php">
                                <button type="button" class="btn btn-outline-primary">Conozca nuestro producto</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wabe-button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#EDEDED" fill-opacity="1" d="M0,128L80,160C160,192,320,256,480,245.3C640,235,800,149,960,133.3C1120,117,1280,171,1360,197.3L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
            </div>
        </section>
        <section class="bg-greyligth py-5">
            <div class="container-sm">
                <div class="row text-center text-grey py-4 contador-cont">
                    <div class="col p-4">
                        <img src="./assets/image/cultivo.svg" class="rounded mx-auto d-block" width="100"  alt="...">
                    </div>
                    <div class="col p-4">

                        <span class="counts">más de</span>
                        <div class="count-up">
                            <p class="text-primary  counter1 counter-count">500</p>
                        </div>
                        <span class="counts">colaboradores(as)</span>
                    </div>
                    <div class="col p-4">
                        <span class="text-light"> .</span>
                        <div class="count-up">
                            <p class="text-primary  counter1 counter-count">960</p>
                        </div>
                        <span class="counts">hectáreas</span>
                    </div>
                </div>
            </div>
            <hr class="hr-div">
            <div class="container-sm">
                <div class="row text-center text-grey py-5 contador-cont">
                    <picture>
                        <img class="certificates" src="./assets/image/certificado-en-proceso.svg" height="60" class="" alt="carbono natural">
                        <img class="certificates" src="./assets/image/certificado-global.svg" height="60" class="" alt="Global G.A.P.">
                        <img class="certificates" src="./assets/image/certificacion-frog.svg" height="60" class="" alt="...">
                    </picture>
                </div>
            </div>
        <hr class="hr-div">
        </section>
        <section class="bg-greyligth py-5">
            <div class="container-sm">
                <div class="row">
                    <div class="row text-center text-grey py-4 contador-cont">
                        <h5 class="text-greybold">DONDE TODO NACE: NUESTRAS FINCAS</h5>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    <div class="col finca-box">
                        <div class="card h-100 ">
                            <figure class="snip0015">
                                <img src="./assets/image/min/fincaAgro-min.jpg" class="card-img-top" alt="...">
                                <figcaption>
                                    <h2>Finca&nbsp;&nbsp;&nbsp;&nbsp;Agro</h2>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col finca-box">
                        <div class="card h-100">
                            <figure class="snip0015">
                                <img src="./assets/image/min/fincaEsfuerzo-min.jpg" class="card-img-top" alt="...">
                                <figcaption>
                                    <h2>Finca&nbsp;&nbsp;&nbsp;&nbsp;Esfuerzo</h2>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col finca-box">
                        <div class="card h-100">
                            <figure class="snip0015">
                                <img src="./assets/image/min/fincaBristol-min.jpg" class="card-img-top" alt="...">
                                <figcaption>
                                    <h2>Finca&nbsp;&nbsp;&nbsp;&nbsp;Vesta</h2>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col finca-box">
                        <div class="card h-100 ">
                            <figure class="snip0015">
                                <img src="./assets/image/min/fincaVesta-min.jpg" class="card-img-top" alt="...">
                                <figcaption>
                                    <h2>Finca&nbsp;&nbsp;&nbsp;&nbsp;Bristol</h2>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-greyligth">
            <div class="container-sm py-5">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-11">
                        <h2 class="text-grey">Exportamos desde</h2>
                        <mark>Costa Rica</mark>
                        <h2 class="text-grey">al mundo.</h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid" style="background: url(./assets/image/min/globe-min.png) no-repeat; background-size:cover;">
                <div class="container-sm bg-mg">
                    <div class="row"  id="bellLogo" onmouseover="hvr(this, 'in')" onmouseleave="hvr(this, 'out')">
                        <img class="world" class=bell col="g" src="./assets/image/min/world-min.png" alt="">
                        <img class="world" class=bell style="display:none" col="b" src="./assets/image/min/world-min.svg" alt="">

                    </div>
                    <div class="row">
                        <div class="container-experience">
                            <div class="col-6 d-flex cita-world">
                                <div class="col-2">
                                    <img class="comilla" src="./assets/image/min/comilla-min.png" height="auto" width="150" alt="">
                                </div>
                                <div class="col-10 text-light text-mje cite" >
                                    <h2 class="mje-2">Más de <span class="text-primary"><strong>30 años de experiencia</strong></span></h2>
                                    <h2 class="mje-2">en la exportación de banano</h2>
                                    <h2 class="mje-2">costarricense”</h2>
                                </div>
                            </div>
                            <div class="col-6">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="py-3">
                            <picture>
                                <img src="./assets/image/line-green.svg" width="200" class="rounded float-start text-primary line-text" alt="...">
                            </picture>
                        </div>
                        <div class="col-6 d-flex cita-world">
                            <div class="col-2 d-none">
                            </div>
                            <div class="col-10 text-light text-mje" >
                                <div class="row">
                                    <h4>GRUPO ESFUERZO</h4>
                                </div>
                                <div class="row py-3">
                                    <picture>
                                        <img class="certificates" src="./assets/image/certificado-en-proceso.svg" height="35" class="" alt="carbono natural">
                                        <img class="certificates" src="./assets/image/certificado-global.svg" height="35" class="" alt="Global G.A.P.">
                                        <img class="certificates" src="./assets/image/certificacion-frog.svg" height="35" class="" alt="...">
                                    </picture>
                                </div>
                                <div class="row">
                                    <a class="position-front" href="./contacto.php">
                                    <button type="button" class="btn btn-outline-primary btn-contact ">Contáctenos</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 d-none">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-down" style="background: url(./assets/image/min/working-min.png) no-repeat;">
                <div class="col-6">
                </div>
                <div class="col-6 bh">
                </div>
            </div>
        </section>


        <?php include_once "./include/footer.php" ?>
        <script type="text/javascript">
            // jQuery counterUp
            $('[data-toggle="counterUp"]').counterUp({
                delay: 15,
                time: 2500
            });


            $('.counter-count').each(function () {
                $(this).prop('Counter',0).animate({
                    Counter: $(this).text()
                }, {

                    //chnage count up speed here
                    duration: 4000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });

        </script>

        <script>
            function hvr(dom, action)
            {
                if (action == 'in')
                {
                    $(dom).find("[col=g]").css("display", "none");
                    $(dom).find("[col=b]").css("display", "inline-block");
                }

                else
                {
                    $(dom).find("[col=b]").css("display", "none");
                    $(dom).find("[col=g]").css("display", "inline-block");
                }
            }
        </script>
    </body>


</html>
<?php include_once "./include/js.php";?>
<script src="./include/js-menu.js"></script>

