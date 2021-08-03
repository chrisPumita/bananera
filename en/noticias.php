<!doctype html>
<?php $titulo = "Noticias - Grupo Esfuerzo"; ?>
<html lang="en">
<head>

    <?php include "include/header.php";?>
    <link rel="stylesheet" href="../assets/style/timeline.css">
    <style>


    </style>

</head>
<body>
<header class="header-ajuste" style="background: url(../assets/image/min/bg-notice-hectareas-min.jpg) top center no-repeat;">
    <div class="overlay"></div>

    <?php include "./include/nav.php" ?>

    <div class="container d-flex justify-content-center align-items-center" style="height: 70vh;">
        <div class="row container-headers">
            <div class="col welcome-title">
                <img src="../assets/image/icon-notice.svg" width="150" class="notice-icon-header rounded mx-auto d-block img-gost py-5" alt="Grupo Esfuerzo">
                <div class="row text-center">
                    <div class="text-white text-light">
                        <h3 class="mb-3">Latest news from Grupo Esfuerzo</h3>
                        <p class="mb-4 text-light">See our latest news</p>
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
                <img src="../assets/notice/notice1/pin-notice-min.png" class="rounded mx-auto d-block img-gost py-5" width="50%" alt="">
                <h5 class="text-grey">GRUPO ESFUERZO LAUNCHES NEW WEBSITE 
                    TO HONOR THE TRUST OF ITS CUSTOMERS
                     AROUND THE WORLD</h5>
                <div class="date">JUL 2021</div>
                <p class="text-grey">As part of an effort consistent with its 
                    commercial strategy and in line with actions to expand 
                    its presence in the global banana market, Grupo Esfuerzo 
                    launched its new website this July. </p>
                <a href="./noticias/jul-2021">
                    <button type="button" class="btn btn-outline-primary btn-contact">See more</button>
                </a>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-img"></div>
            <div class="timeline-content js--fadeInRight">
                <img src="../assets/notice/notice2/pin-notice-min.png" class="rounded mx-auto d-block img-gost py-5" width="50%" alt="">
                <h5 class="text-grey">GRUPO ESFUERZO PARTICIPATES IN THE 
                    CONSTRUCTION OF A DAM TO PREVENT FLOODING IN CARIBBEAN 
                    COMMUNITIES</h5>
                <div class="date">JUN 2021</div>
                <p class="text-grey">After Grupo Esfuerzo acquired a farm in the community 
                    of Bristol in Matina de Limón in 2017, its directors became aware of 
                    the local population's need for a structure to prevent the dreaded 
                    and constant flooding during the rainy season. </p>
                <a href="./noticias/jun-2021">
                    <button type="button" class="btn btn-outline-primary btn-contact">See more</button>
                </a>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-img"></div>
            <div class="timeline-content js--fadeInLeft">
                <img src="../assets/notice/notice3/pin-notice-min.png" class="rounded mx-auto d-block img-gost py-5" width="50%" alt="">
                <h5 class="text-grey">GRUPO ESFUERZO EXPANDS ITS PRESENCE 
                    IN THE BANANA MARKET WITH 
                    THE ACQUISITION OF TWO MORE FARMS</h5>
                <div class="date">MAY 2021</div>
                <p class="text-grey">THE ACQUISITION OF TWO MORE FARMS<br>
                In December 2020, Grupo Esfuerzo decided to expand 
                its presence in the banana market with the 
                acquisition of two new farms to reach a total area of 960 hectares, 
                of which 550 hectares are currently in production. </p>
                <button type="button" class="btn btn-outline-primary btn-contact">See more</button>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-img"></div>

            <div class="timeline-content js--fadeInRight">
                <img src="../assets/notice/notice4/pin-notice-min.png" class="rounded mx-auto d-block img-gost py-5" width="50%" alt="">
                <h5 class="text-grey">OUR TRUCKS AT GRUPO ESFUERZO NOW HAVE GPS MONITORING FOR INCREASED SECURITY</h5>
                <div class="date">ABR 2021</div>
                <p class="text-grey">Thanks to a Global Positioning System (GPS), all of 
                    Grupo Esfuerzo's trucks are monitored in real-time since May 19. 
                </p>
                <button type="button" class="btn btn-outline-primary btn-contact">See more</button>
            </div>
        </div>
    </div>
</section>



<section class="bg-greyligth">
   <div class="cont-limine wabe-backimg" style="background: url(../assets/image/green-circle-wabe.svg);">
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