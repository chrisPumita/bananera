<!doctype html>
<?php $titulo = "Noticias - Grupo Esfuerzo"; ?>
<html lang="en">
<head>

    <?php include "include/header.php";?>
    <link rel="stylesheet" href="./assets/style/timeline.css">
    <style>


    </style>

</head>
<body>
<header class="header-ajuste" style="background: url(./assets/image/bg-notice-hectareas.jpg) top center no-repeat;">
    <div class="overlay"></div>

    <?php include "./include/nav.php" ?>

    <div class="container d-flex justify-content-center align-items-center" style="height: 70vh;">
        <div class="row container-headers">
            <div class="col welcome-title">
                <img src="./assets/image/icon-notice.svg" width="150" class="rounded mx-auto d-block img-gost py-5" alt="Grupo Esfuerzo">
                <div class="row text-center">
                    <div class="text-white text-light">
                        <h3 class="mb-3">Últimas noticias de Grupo Esfuerzo</h3>
                        <p class="mb-4 text-light">Consulte nuestras últimas noticias</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wabe">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#EDEDED" fill-opacity="1" d="M0,128L80,160C160,192,320,256,480,245.3C640,235,800,149,960,133.3C1120,117,1280,171,1360,197.3L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
        </svg>
    </div>
</header>

<section class="timeline bg-greyligth py-5 top-header">
    <div class="container">
        <div class="timeline-item">
            <div class="timeline-img"></div>
            <div class="timeline-content js--fadeInLeft">
                <img src="./assets/notice/notice1/pin-notice.png" class="rounded mx-auto d-block img-gost py-5" width="50%" alt="">
                <h5 class="text-grey">Grupo Esfuerzo lanza nuevo sitio web para honrar
                    la confianza de sus clientes alrededor del mundo</h5>
                <div class="date">JUL 2021</div>
                <p class="text-grey">Como un esfuerzo alineado a su estrategia comercial y de la
                    mano de acciones para ampliar su presencia en el mercado
                    bananero global, Grupo Esfuerzo estrenó su nuevo sitio web, este
                    mes de junio.</p>
                <button type="button" class="btn btn-outline-primary btn-contact">Ver más</button>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-img"></div>
            <div class="timeline-content js--fadeInRight">
                <img src="./assets/notice/notice2/pin-notice.png" class="rounded mx-auto d-block img-gost py-5" width="50%" alt="">
                <h5 class="text-grey">Grupo esfuerzo participa en la
                    construcción de dique para evitar
                    inundaciones en comunidades del caribe</h5>
                <div class="date">JUN 2021</div>
                <p class="text-grey">Luego de que, en 2017, el Grupo Esfuerzo adquiriera una finca en
                    la comunidad de Bristol en Matina de Limón, sus directivos
                    tomaron consciencia de la necesidad que tenía la población de
                    contar con una estructura para prevenir las temibles y constantes
                    inundaciones durante la época lluviosa.</p>
                <button type="button" class="btn btn-outline-primary btn-contact">Ver más</button>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-img"></div>
            <div class="timeline-content js--fadeInLeft">
                <img src="./assets/notice/notice3/pin-notice.png" class="rounded mx-auto d-block img-gost py-5" width="50%" alt="">
                <h5 class="text-grey">Grupo Esfuerzo amplía su presencia en el
                    mercado bananero con la adquisición de
                    dos fincas más</h5>
                <div class="date">MAY 2021</div>
                <p class="text-grey">LA ADQUISICIÓN DE DOS FINCAS MÁS <br>
                    En diciembre del 2020, el Grupo Esfuerzo, decidió ampliar su
                    presencia en el mercado bananero con la adquisición de dos
                    nuevas fincas para alcanzar un área total de 960 hectáreas, de las
                    cuales 534 están produciendo.</p>
                <button type="button" class="btn btn-outline-primary btn-contact">Ver más</button>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-img"></div>

            <div class="timeline-content js--fadeInRight">
                <img src="./assets/notice/notice4/pin-notice.png" class="rounded mx-auto d-block img-gost py-5" width="50%" alt="">
                <h5 class="text-grey">Camiones de Grupo Esfuerzo ahora
                    cuentan con monitoreo por gps para
                    mayor seguridad</h5>
                <div class="date">ABR 2021</div>
                <p class="text-grey">Gracias a un Sistema de Posicionamiento Global (GPS), todos los
                    camiones del Grupo Esfuerzo cuentan con monitoreo en tiempo
                    real desde el 19 de mayo anterior.</p>
                <button type="button" class="btn btn-outline-primary btn-contact">Ver más</button>
            </div>
        </div>
    </div>
</section>



<section class="bg-greyligth">
   <div class="cont-limine wabe-backimg" style="background: url(./assets/image/green-circle-wabe.svg);">
        <div class="wabe-button">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FFFF" fill-opacity="1" d="M0,160L80,144C160,128,320,96,480,122.7C640,149,800,235,960,240C1120,245,1280,171,1360,133.3L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
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


<script>
    $(function(){

        window.sr = ScrollReveal();

        if ($(window).width() < 768) {

            if ($('.timeline-content').hasClass('js--fadeInLeft')) {
                $('.timeline-content').removeClass('js--fadeInLeft').addClass('js--fadeInRight');
            }

            sr.reveal('.js--fadeInRight', {
                origin: 'right',
                distance: '300px',
                easing: 'ease-in-out',
                duration: 800,
            });

        } else {

            sr.reveal('.js--fadeInLeft', {
                origin: 'left',
                distance: '300px',
                easing: 'ease-in-out',
                duration: 800,
            });

            sr.reveal('.js--fadeInRight', {
                origin: 'right',
                distance: '300px',
                easing: 'ease-in-out',
                duration: 800,
            });

        }

        sr.reveal('.js--fadeInLeft', {
            origin: 'left',
            distance: '300px',
            easing: 'ease-in-out',
            duration: 800,
        });

        sr.reveal('.js--fadeInRight', {
            origin: 'right',
            distance: '300px',
            easing: 'ease-in-out',
            duration: 800,
        });


    });

</script>