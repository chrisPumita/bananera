<!doctype html>
<?php $titulo = "Sostenibilidad - Grupo Esfuerzo"; ?>
<html lang="en">
<head>

    <?php include "include/header.php";?>

    <style>
        .column {
            margin: auto;
            padding: 0;
        }
        .column:last-child {
            padding-bottom: 60px;
        }
        .column::after {
            content: "";
            clear: both;
            display: block;
        }

        .column div:first-child {
            margin-left: 0;
        }
        .column div span {
            position: absolute;
            bottom: -20px;
            left: 0;
            z-index: -1;
            display: block;
            width: 300px;
            margin: 0;
            padding: 0;
            color: #444;
            font-size: 18px;
            text-decoration: none;
            text-align: center;
            -webkit-transition: 0.3s ease-in-out;
            transition: 0.3s ease-in-out;
            opacity: 0;
        }
        figure {
            width: auto;
            height: auto;
            margin: 0;
            padding: 0;
            background: #fff;
            overflow: hidden;
        }
        figure:hover + span {
            bottom: -36px;
            opacity: 1;
        }

        /* Shine */
        .hover14 figure {
            position: relative;
        }
        .hover14 figure::before {
            position: absolute;
            top: 0;
            left: -60%;
            z-index: 2;
            display: block;
            content: "";
            width: 50%;
            height: 100%;
            background: -webkit-linear-gradient(
                    left,
                    rgba(255, 255, 255, 0) 0%,
                    rgba(255, 255, 255, 0.3) 100%
            );
            background: linear-gradient(
                    to right,
                    rgba(255, 255, 255, 0) 0%,
                    rgba(255, 255, 255, 0.3) 100%
            );
            -webkit-transform: skewX(-25deg);
            transform: skewX(-25deg);
        }
        .hover14 figure:hover::before {
            -webkit-animation: shine 0.75s;
            animation: shine 0.75s;
        }
        @-webkit-keyframes shine {
            100% {
                left: 125%;
            }
        }
        @keyframes shine {
            100% {
                left: 125%;
            }
        }



        .style_prevu_kit {
            display: inline-block;
            border: 0;
            width: auto;
            height: 300px;
            position: relative;
            -webkit-transition: all 200ms ease-in;
            -webkit-transform: scale(1);
            -ms-transition: all 200ms ease-in;
            -ms-transform: scale(1);
            -moz-transition: all 200ms ease-in;
            -moz-transform: scale(1);
            transition: all 200ms ease-in;
            transform: scale(1);
        }
        .style_prevu_kit:hover {
            box-shadow: 0px 0px 10px #000000;
            z-index: 99;
            -webkit-transition: all 200ms ease-in;
            -webkit-transform: scale(1.1);
            -ms-transition: all 200ms ease-in;
            -ms-transform: scale(1.1);
            -moz-transition: all 200ms ease-in;
            -moz-transform: scale(1.1);
            transition: all 200ms ease-in;
            transform: scale(1.1);
        }


    </style>

</head>
<body>
<header style="background: url(./assets/image/blue-header.jpg) top center no-repeat;">
    <div class="overlay"></div>

    <?php include "./include/nav.php" ?>

    <div class="container d-flex justify-content-center align-items-center" style="height: 70vh;">
        <div class="row container-headers-parrafo">
            <div class="col">
                <div class="text-white text-light">
                    <h2 class="mb-3">Responsabilidad Social Corporativa</h2>
                    <h4 class="mb-4">En Grupo Esfuerzo, la sostenibilidad es nuestra única
                        forma de hacer negocios. Nuestra estrategia consiste en
                        construir un negocio exitoso a largo plazo, priorizando el
                        bienestar de nuestros grupos de interés, y respetando los
                        recursos naturales y los ecosistemas de los cuales
                        formamos parte.</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="circule-back-header" style="background: url('./assets/image/bg-img1.png')">
    </div>
    <div class="wabe">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#FFFFFF" fill-opacity="1" d="M0,128L80,160C160,192,320,256,480,245.3C640,235,800,149,960,133.3C1120,117,1280,171,1360,197.3L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
        </svg>
    </div>
</header>

<section class="bg-ligth">
    <div class="container d-flex justify-content-center align-items-center py-5">
        <div class="row container-headers">
            <div class="col">
                <div class="container-ball">
                    <div class="div-img" >
                        <img class="img-ball img-gost" src="./assets/image/banana-circle.png" title="Foto5" alt="Foto5">
                        <div class="text"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container-sm py-3">
            <div class="row text-center">
                <div class="col d-flex justify-content-center align-items-center">
                    <div class="position-absolute text-center">
                        <h3 class="text-light font-weight-bold ">
                            ODS
                        </h3>
                    </div>
                    <img src="./assets/image/bg-red.ods.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="container-sm py-3">
            <div class="row row-cols-7 text-center  g-2 py-5  hover14 column">
                <div class="col finca-box">
                    <figure><img src="./assets/image/ods1.jpg" alt=""></figure>
                </div>
                <div class="col finca-box">
                    <figure><img src="./assets/image/ods2.jpg" alt=""></figure>
                </div>
                <div class="col finca-box">
                    <figure><img src="./assets/image/ods3.jpg" alt=""></figure>
                </div>
                <div class="col finca-box">
                    <figure><img src="./assets/image/ods4.jpg" alt=""></figure>
                </div>
                <div class="col finca-box">
                    <figure><img src="./assets/image/ods5.jpg" alt=""></figure>
                </div>
                <div class="col finca-box">
                    <figure><img src="./assets/image/ods6.jpg" alt=""></figure>
                </div>
                <div class="col finca-box">
                    <figure><img src="./assets/image/ods7.jpg" alt=""></figure>
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-center align-items-center">
            <div class="row container-headers-parrafo">
                <div class="col">
                    <div class="text-white text-light">
                        <p class="mb-4 text-grey">Operamos gestionando nuestro triple impacto de manera
                            responsable, aportando a la consecución de los <span class="text-blue"> Objetivos de
                            Desarrollo Sostenible 4, 7, 8, 11, 12, 15 y 17. </span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wabe-button">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#EDEDED" fill-opacity="1" d="M0,128L80,160C160,192,320,256,480,245.3C640,235,800,149,960,133.3C1120,117,1280,171,1360,197.3L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
        </svg>
    </div>
</section>
<section class="bg-greyligth">
    <div class="container-sm py-5">
        <div class="col align-items-center">
            <div class="row">
                <video width=100%  height=100% controls poster="./assets/image/bg-img1.png">
                    <source src="./assets/bg-video.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
    <div class="container-fluid img-producto-bk py-5 focus-img-ok" style="background: url(./assets/image/people-ok.png) no-repeat; background-size:cover;">
        <div class="container-sm bg-mg-producto">
            <div class="row py-3">
                <div class="col text-center">
                    <h2 class="text-grey">
                        Conozca nuestras acciones
                    </h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center px-5 py-5">
                <div class="col d-block text-center style_prevu_kit">
                    <div class="py-3">
                        <img src="./assets/image/action-home.svg" class="m-3" height="150" alt="">
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        <div class="position-absolute text-center">
                            <h3 class="text-light m-0">SOCIAL</h3>
                        </div>
                        <img src="./assets/image/bg-red.ods.jpg" width="200" alt="">
                    </div>
                </div>
                <div class="col d-block text-center style_prevu_kit">
                    <div class="py-3">
                        <img src="./assets/image/action-foco.svg" class="m-3" height="150" alt="">
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        <div class="position-absolute text-center">
                            <h3 class="text-light m-0">GOBERNANZA</h3>
                        </div>
                        <img src="./assets/image/bg-blue-rd.jpg" width="200" alt="">
                    </div>
                </div>
                <div class="col d-block text-center style_prevu_kit">
                    <div class="py-3">
                        <img src="./assets/image/action-premio.svg" class="m-3" height="150" alt="">
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        <div class="position-absolute text-center">
                            <h3 class="text-light m-0">AMBIENTAL</h3>
                        </div>
                        <img src="./assets/image/bg-rd-cr.jpg" width="200" alt="">
                    </div>
                </div>

            </div>
        </div>

        <div class="container-sm" style="z-index: 99;">
            <div class="row py-5 m-5">
                <picture class="py-3">
                    <img src="./assets/image/line-green.svg" width="200" class="rounded float-start text-primary line-header" alt="...">
                </picture>
                <div class="col-6 d-flex cita-world">
                    <div class="col-2 d-none">
                    </div>
                    <div class="col-10 text-light text-mje">
                        <div class="row">
                            <h4>Finca Esfuerzo, 2021</h4>
                        </div>
                        <div class="row py-3">
                            <picture>
                                <img class="certificates" src="./assets/image/certificado-en-proceso.svg" height="35" alt="carbono natural">
                                <img class="certificates" src="./assets/image/certificado-global.svg" height="35" alt="Global G.A.P.">
                                <img class="certificates" src="./assets/image/certificacion-frog.svg" height="35" alt="...">
                            </picture>
                        </div>
                        <div class="row">
                            <button type="button" class="btn btn-outline-primary btn-contact">Contáctenos</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 d-none">
                </div>
            </div>
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
</script>
</body>
</html>
<?php include_once "./include/js.php";?>
<script src="./include/js-menu.js"></script>