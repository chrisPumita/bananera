<!doctype html>
<?php $titulo = "Willkommen | Grupo Esfuerzo"; ?>
<html lang="es">
    <head>

        <?php include "include/header.php";?>

        <style>

        </style>

    </head>
    <body>

        <header style="background: url(../assets/image/min/bg-img1-min.png) top center no-repeat;">
            <div class="video-container">
                <div class="video-inline">
                    <video class="video" poster="../assets/image/min/bg-img1-min.png"  playsinline="playsinline"  autoplay="autoplay" muted="muted" loop="loop" height="100%">
                        <source src="../assets/headerHome.mp4" type="video/mp4" />
                        Tu navegador no soporta video HTML5.
                    </video>
                    <canvas class="canvas"></canvas>
                    <div class="video-timeline js-timeline">
                        <div class="video-timeline-passed js-timeline-passed"></div>
                    </div>
                </div>
            </div>

            <?php include "./include/nav.php" ?>

            <div class="container d-flex justify-content-center align-items-center" style="height: 70vh;">
                <div class="overlay"></div>
                <div class="row container-headers home-header">
                    <div class="col">
                        <img src="../assets/image/min/circleHome-min.png" class="rounded mx-auto d-block circule-home-img img-gost" alt="Grupo Esfuerzo">
                    </div>
                    <div class="col welcome-title">
                        <div class="row">
                            <div class="text-white text-light">
                                <h3 class="mb-3">GRUPO ESFUERZO,</h3>
                                <h2 class="mb-4">Wir produzieren in Costa Rica <br>
                                mit nachhaltigen Praktiken <br> <span class="text-primary">Lebensmitteln die die Welt ernähren.</span></h2>
                            </div>
                        </div>
                        <picture>
                            <img src="../assets/image/line-green.svg" width="200" class="rounded float-start text-primary line-header" alt="...">
                        </picture>
                        <div class="py-3">
                            <picture>
                                <img class="certificates" src="../assets/image/cert-de/certificado-en-proceso-blanco.svg" height="35" class="" alt="carbono natural">
                                <img class="certificates" src="../assets/image/certificado-global-blanco.svg" height="35" class="" alt="Global G.A.P.">
                                <img class="certificates" src="../assets/image/certificacion-frog.svg" height="35" class="" alt="...">
                            </picture>
                        </div>

                    </div>
                </div>
            </div>
            <div class="circule-back-header" style="background: url('../assets/image/min/bg-img1-min.png')">
            </div>
            <div class="wabe d-none d-sm-none d-md-block">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#ffff" fill-opacity="1" d="M0,128L80,160C160,192,320,256,480,245.3C640,235,800,149,960,133.3C1120,117,1280,171,1360,197.3L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
                </svg>
            </div>
        </header>
        <section class="top-header">
            <div id="who-i-am" class="bg-light">
                <div class="container d-flex justify-content-center align-items-center">
                    <div class="row ">
                        <div class="col">
                            <img src="../assets/image/min/banana-min.png" class="rounded mx-auto d-block platano img-gost" alt="platano">
                        </div>
                        <div class="col welcome-title">
                            <h2 class="text-primary">Was wir machen</h2>
                            <p class="py-5 text-grey">Wir arbeiten, um der weltweit führende Lieferant der besten <br>
                                costaricanischen Bananen zu werden, immer  <br>
                                unter strenge Standards für eine nachhaltige <br>
                                Produktion, wo das Wohlergehen  unserer  <br>
                                Mitarbeiter und Gemeiden priorisiert ist.</p>
                            <button type="button" class="btn btn-outline-primary">Lernen sie unser Produkt kennen.</button>
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
                        <img src="../assets/image/cultivo.svg" class="rounded mx-auto d-block" width="100"  alt="...">
                    </div>
                    <div class="col p-4">

                        <span class="counts">Über</span>
                        <div class="count-up">
                            <p class="text-primary  counter1 counter-count">500</p>
                        </div>
                        <span class="counts">Arbeiter</span>
                    </div>
                    <div class="col p-4">
                        <span class="text-light"> .</span>
                        <div class="count-up">
                            <p class="text-primary  counter1 counter-count">960</p>
                        </div>
                        <span class="counts">Hektar </span>
                    </div>
                </div>
            </div>
            <hr class="hr-div">
            <div class="container-sm">
                <div class="row text-center text-grey py-5 contador-cont">
                    <picture>
                        <img class="certificates" src="../assets/image/cert-de/certificado-en-proceso.svg" height="60" class="" alt="carbono natural">
                        <img class="certificates" src="../assets/image/certificado-global.svg" height="60" class="" alt="Global G.A.P.">
                        <img class="certificates" src="../assets/image/certificacion-frog.svg" height="60" class="" alt="...">
                    </picture>
                </div>
            </div>
        <hr class="hr-div">
        </section>
        <section class="bg-greyligth py-5">
            <div class="container-sm">
                <div class="row">
                    <div class="row text-center text-grey py-4 contador-cont">
                        <h5 class="text-greybold text-uppercase">Wo alles anfängt: unsere Grundstücke</h5>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    <div class="col finca-box">
                        <div class="card h-100 ">
                            <figure class="snip0015">
                                <img src="../assets/image/min/fincaAgro-min.jpg" class="card-img-top" alt="...">
                                <figcaption>
                                    <h2>Grundstück&nbsp;&nbsp;&nbsp;&nbsp;Agro</h2>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col finca-box">
                        <div class="card h-100">
                            <figure class="snip0015">
                                <img src="../assets/image/min/fincaEsfuerzo-min.jpg" class="card-img-top" alt="...">
                                <figcaption>
                                    <h2>Grundstück&nbsp;&nbsp;&nbsp;&nbsp;Esfuerzo</h2>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col finca-box">
                        <div class="card h-100">
                            <figure class="snip0015">
                                <img src="../assets/image/min/fincaBristol-min.jpg" class="card-img-top" alt="...">
                                <figcaption>
                                    <h2>Grundstück&nbsp;&nbsp;&nbsp;&nbsp;Vesta</h2>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col finca-box">
                        <div class="card h-100 ">
                            <figure class="snip0015">
                                <img src="../assets/image/min/fincaVesta-min.jpg" class="card-img-top" alt="...">
                                <figcaption>
                                    <h2>Grundstück&nbsp;&nbsp;&nbsp;&nbsp;Bristol</h2>
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
                        <h2 class="text-grey">Wir exportieren aus </h2>
                        <mark>Costa Rica</mark>
                        <h2 class="text-grey">in die ganze Welt</h2>
                    </div>
                </div>
            </div>
            <div class="container-fluid" style="background: url(../assets/image/min/globe-min.png) no-repeat; background-size:cover;">
                <div class="container-sm bg-mg">
                    <div class="row"  id="bellLogo" onmouseover="hvr(this, 'in')" onmouseleave="hvr(this, 'out')">
                        <img class="world" class=bell col="g" src="../assets/image/min/world-min.png" alt="">
                        <img class="world" class=bell style="display:none" col="b" src="../assets/image/mapHoverAleman.svg" alt="">

                    </div>
                    <div class="row">
                        <div class="container-experience">
                            <div class="col-6 d-flex cita-world">
                                <div class="col-2">
                                    <img class="comilla" src="../assets/image/min/comilla-min.png" height="auto" width="150" alt="">
                                </div>
                                <div class="col-10 text-light text-mje cite" >
                                    <h2 class="mje-2">Über <span class="text-primary"><strong>30 ahre Erfahrung </strong></span></h2>
                                    <h2 class="mje-2">mit Export von costaricanischen</h2>
                                    <h2 class="mje-2">Bananen"</h2>
                                </div>
                            </div>
                            <div class="col-6">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="py-3">
                            <picture>
                                <img src="../assets/image/line-green.svg" width="200" class="rounded float-start text-primary line-text" alt="...">
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
                                        <img class="certificates" src="../assets/image/cert-de/certificado-en-proceso-blanco.svg" height="35" class="" alt="carbono natural">
                                        <img class="certificates" src="../assets/image/certificado-global-blanco.svg" height="35" class="" alt="Global G.A.P.">
                                        <img class="certificates" src="../assets/image/certificacion-frog.svg" height="35" class="" alt="...">
                                    </picture>
                                </div>
                                <div class="row">
                                    <a href="./contacto.php">
                                        <button type="button" class="btn btn-outline-primary btn-contact position-front">Kontaktieren Sie uns</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 d-none">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-down" style="background: url(../assets/image/min/working-min.png) no-repeat;">
                <div class="col-6">
                </div>
                <div class="col-6 bh">
                </div>
            </div>
        </section>

        <!-- Modal -->

        <!-- Modal HTML -->

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

