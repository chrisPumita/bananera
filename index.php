<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="./assets/style/style.css">


        <!-- jQuery Library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Counts JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
        <!-- Font Awesome -->
        <style>
            figure.snip0015 {
                color: #fff;
                position: relative;
                overflow: hidden;
                width: 100%;
                background: #000000;
                text-align: center;
                margin: 0;
            }
            figure.snip0015 * {
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            }
            figure.snip0015 img {
                opacity: 1;
                width: 100%;
                -webkit-transition: opacity 0.35s;
                transition: opacity 0.35s;
            }
            figure.snip0015 figcaption {
                position: absolute;
                bottom: 0;
                left: 0;
                padding: 3em 3em;
                width: 100%;
                height: 100%;
            }
            figure.snip0015 figcaption::before {
                position: absolute;
                top: 50%;
                right: 30px;
                bottom: 50%;
                left: 30px;
                border-top: 1px solid rgba(255, 255, 255, 0.8);
                border-bottom: 1px solid rgba(255, 255, 255, 0.8);
                content: "";
                opacity: 0;
                background-color: #ffffff;
                -webkit-transition: all 0.4s;
                transition: all 0.4s;
                -webkit-transition-delay: 0.6s;
                transition-delay: 0.6s;
            }
            figure.snip0015 h2,
            figure.snip0015 p {
                margin: 0 0 5px;
                opacity: 0;
                -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
                transition: opacity 0.35s, -webkit-transform 0.35s, -moz-transform 0.35s,
                -o-transform 0.35s, transform 0.35s;
            }
            figure.snip0015 h2 {
                word-spacing: -0.15em;
                font-weight: 300;
                -webkit-transform: translate3d(0%, 50%, 0);
                transform: translate3d(0%, 50%, 0);
                -webkit-transition-delay: 0.3s;
                transition-delay: 0.3s;
            }
            figure.snip0015 h2 span {
                font-weight: 800;
            }
            figure.snip0015 p {
                font-weight: 200;
                -webkit-transition-delay: 0s;
                transition-delay: 0s;
            }
            figure.snip0015 a {
                left: 0;
                right: 0;
                top: 0;
                bottom: 0;
                position: absolute;
                color: #ffffff;
            }
            figure.snip0015:hover img {
                opacity: 0.35;
            }
            figure.snip0015:hover figcaption h2 {
                opacity: 1;
                -webkit-transform: translate3d(0%, 0%, 0);
                transform: translate3d(0%, 0%, 0);
                -webkit-transition-delay: 0.3s;
                transition-delay: 0.3s;
            }
            figure.snip0015:hover figcaption p {
                opacity: 0.9;
                -webkit-transition-delay: 0.6s;
                transition-delay: 0.6s;
            }
            figure.snip0015:hover figcaption::before {
                background: rgba(255, 255, 255, 0);
                top: 30px;
                bottom: 30px;
                opacity: 1;
                -webkit-transition-delay: 0s;
                transition-delay: 0s;
            }
        </style>

        <style>

            .footer{
                color: #627482 !important;
            }
            small {
                font-size: calc(12px + (15 - 12) * ((100vw - 360px) / (1600 - 360))) !important
            }

            .bold-text {
                color: #989c9e !important
            }

            .mt-55 {
                margin-top: calc(50px + (60 - 50) * ((100vw - 360px) / (1600 - 360))) !important
            }

            .social {
                font-size: 21px !important
            }

            .rights {
                font-size: calc(10px + (12 - 10) * ((100vw - 360px) / (1600 - 360))) !important
            }
        </style>
        <title>Bienvenidos - Grupo Esfuerzo</title>
    </head>
    <body>

        <!--Hey! This is the original version of Simple CSS Waves-->
        <header>
            <div class="overlay"></div>
            <div class="video-container">

                <div class="video-inline">
                    <video class="video" poster="./assets/image/bg-img1.png"  playsinline="playsinline"  autoplay="autoplay" muted="muted" loop="loop" height="100%">
                        <source src="./assets/headerHome.mp4" type="video/mp4" />
                        Tu navegador no soporta video HTML5.
                    </video>
                    <canvas class="canvas"></canvas>
                    <div class="video-timeline js-timeline">
                        <div class="video-timeline-passed js-timeline-passed"></div>
                    </div>
                </div>
            </div>
            <nav id="menu" class="navbar sticky-top navbar-expand-lg navbar-inverse navbar-light bg-light bg-trasparente">
                <div class="container-sm">
                    <a class="navbar-brand" href="#">
                        <img src="./assets/image/logo.svg" alt="" width="100" height="auto" class="d-inline-block align-text-top">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuvar" aria-controls="menuvar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="menuvar">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        </ul>
                        <ul class="navbar-nav mb-2 mb-lg-0 justify-content-end menu">
                            <li class="nav-item">
                                <a class="nav-link text-light" aria-current="page" id="m1" href="#">NOSOTROS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light"  id="m2"  href="#">PRODUCTOS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" id="m3"  href="#">SOSTENIBILIDAD</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" id="m4" href="#">NOTICIAS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" id="m5" href="#">CONTACTO</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container d-flex justify-content-center align-items-center" style="height: 70vh;">
                <div class="row container-headers">
                    <div class="col">
                        <img src="./assets/image/circleHome.png" class="rounded mx-auto d-block circule-home-img" alt="Grupo Esfuerzo" width="300">
                    </div>
                    <div class="col welcome-title">
                        <div class="row">
                            <div class="text-white text-light">
                                <h4 class="mb-3">GRUPO ESFUERZO,</h4>
                                <h3 class="mb-4">Producimos desde Costa Rica <br>
                                    con prácticas sostenibles <br> <span class="text-primary">alimentos que nutren al planeta.</span></h3>
                            </div>
                        </div>
                        <picture>
                            <img src="./assets/image/line-green.svg" width="200" class="rounded float-start text-primary line-header" alt="...">
                        </picture>
                        <div class="py-3">
                            <picture>
                                <img class="certificates" src="./assets/image/certificado-en-proceso.svg" height="30" class="" alt="carbono natural">
                                <img class="certificates" src="./assets/image/certificado-global.svg" height="30" class="" alt="Global G.A.P.">
                                <img class="certificates" src="./assets/image/certificacion-frog.svg" height="30" class="" alt="...">
                            </picture>
                        </div>

                    </div>
                </div>
            </div>
                <div class="circule-back-header" style="background: url('./assets/image/bg-img1.png')">
                </div>
            <div class="wabe">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#ffff" fill-opacity="1" d="M0,128L80,160C160,192,320,256,480,245.3C640,235,800,149,960,133.3C1120,117,1280,171,1360,197.3L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
                </svg>
            </div>
        </header>
        <section>
            <div id="who-i-am" class="bg-light">
                <div class="container d-flex justify-content-center align-items-center">
                    <div class="row">
                        <div class="col">
                            <img src="./assets/image/banana.png" class="rounded mx-auto d-block" width="350" alt="platano">
                        </div>
                        <div class="col welcome-title">
                            <h4 class="text-primary">Lo que hacemos</h4>
                            <p class="my-5">Trabajamos por ser el proveedor referente a nivel
                                mundial del mejor banano costarricense, siempre
                                bajo estrictos estándares de producción sostenible
                                y priorizando el bienestar de nuestros
                                colaboradores y comunidades.</p>
                            <button type="button" class="btn btn-outline-primary">Conozca nuestro producto</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wabe-button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#EDEDED" fill-opacity="1" d="M0,128L80,160C160,192,320,256,480,245.3C640,235,800,149,960,133.3C1120,117,1280,171,1360,197.3L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
            </div>
        </section>
        <section class="bg-greyligth py-5>
            <div class="container-sm">
                <div class="row text-center text-grey py-4 contador-cont">
                    <div class="col p-4">
                        <img src="./assets/image/cultivo.svg" class="rounded mx-auto d-block" width="100"  alt="...">
                    </div>
                    <div class="col p-4">
                        <span class="counts">màs de</span>
                        <h2 class="text-primary" data-toggle="counterUp">500</h2>
                        <span class="counts">colaboradores(as)</span>
                    </div>
                    <div class="col p-4">
                        <h2 class="text-primary" data-toggle="counterUp">960</h2>
                        <span class="counts">hectáreas</span>
                    </div>
                </div>
            </div>
            <hr class="hr-div">
            <div class="container-sm">
                <div class="row text-center text-grey py-5 contador-cont">
                    <picture>
                        <img class="certificates" src="./assets/image/certificado-en-proceso.svg" height="35" class="" alt="carbono natural">
                        <img class="certificates" src="./assets/image/certificado-global.svg" height="35" class="" alt="Global G.A.P.">
                        <img class="certificates" src="./assets/image/certificacion-frog.svg" height="35" class="" alt="...">
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
                    <div class="col">
                        <div class="card h-100 ">
                            <figure class="snip0015">
                                <img src="./assets/image/AgroJPEG.jpg" class="card-img-top" alt="...">
                                <figcaption>
                                    <h2>Finca Agro</h2>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <figure class="snip0015">
                                <img src="./assets/image/EsfuerzoJPEG.jpg" class="card-img-top" alt="...">
                                <figcaption>
                                    <h2>Finca Esfuerzo</h2>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <figure class="snip0015">
                                <img src="./assets/image/VestaJPEG.jpg" class="card-img-top" alt="...">
                                <figcaption>
                                    <h2>Finca Vesta</h2>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 ">
                            <figure class="snip0015">
                                <img src="./assets/image/BristolJPEG.jpg" class="card-img-top" alt="...">
                                <figcaption>
                                    <h2>Finca Bristol</h2>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-greyligth">
            <div class="container-sm">
                <div class="row">
                    <div class="col">
                        <h4>Exportamos desde</h4>
                        <mark>Costa Rica</mark>
                        <h4>al mundo.</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid" style="background: url(./assets/image/globe.png) no-repeat; background-size:cover;">
                <div class="container-sm bg-mg">
                    <div class="row">
                        <img class="world" src="./assets/image/world.png" alt="">
                    </div>
                    <div class="row">
                        <div class="container-experience">
                            <div class="col-6 d-flex">
                                <div class="col-2">
                                    <img class="comilla" src="./assets/image/comilla.png" height="auto" width="150" alt="">
                                </div>
                                <div class="col-10 text-light text-mje" >
                                    <h4 class="mje-2">Mas de <span class="text-primary">30 años de experiencia</span></h4>
                                    <h4 class="mje-2">en la exportación de banano</h4>
                                    <h4 class="mje-2">costarricense”</h4>
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
                        <div class="col-6 d-flex">
                            <div class="col-2">
                            </div>
                            <div class="col-10 text-light text-mje" >
                                <div class="row">
                                    <h6>GRUPO ESFUERZO</h6>
                                </div>
                                <div class="row py-3">
                                    <picture>
                                        <img class="certificates" src="./assets/image/certificado-en-proceso.svg" height="35" class="" alt="carbono natural">
                                        <img class="certificates" src="./assets/image/certificado-global.svg" height="35" class="" alt="Global G.A.P.">
                                        <img class="certificates" src="./assets/image/certificacion-frog.svg" height="35" class="" alt="...">
                                    </picture>
                                </div>
                                <div class="row">
                                    <button type="button" class="btn btn-outline-primary btn-contact">Contáctenos</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-down" style="background: url(./assets/image/working.png) no-repeat;">
                <div class="col-6">
                </div>
                <div class="col-6 bh">

                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="container my-5 justify-content-center py-5">
                <div class="row ">
                    <div class="col-xl-4 col-md-4 col-sm-4 col-12 my-auto mx-auto a">
                        <h6 class="mb-3 mb-lg-4 text-grey "><b>Grupo Esfuerzo, Costa Rica</b></h6>
                            <ul class="list-unstyled text-grey">
                                <li><a class="linkfooter" href="#">Finca Agro</a></li>
                                <li><a class="linkfooter" href="#">Finca Esfuerzo</a></li>
                                <li><a class="linkfooter" href="#">Finca Vesta</a></li>
                                <li><a class="linkfooter" href="#">Finca Brístol</a></li>
                            </ul>

                        <p class="text-grey" py-3>
                            Oficinas San José, Costa Rica. <br>
                            200 Metros Norte del Parque la <br>
                            Amistad, Rohrmoser # 103.
                        </p>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-4 col-12">
                        <h6 class="mb-3 mb-lg-4 text-grey "><b>Últimas Noticias</b></h6>
                        <p class="text-grey notice-footer">
                            <a class="linkfooter" href="#">Nuestro compromiso</a>
                            <hr class="hr-div-notice">
                            Mayo 2021
                        </p>
                        <p class="text-grey notice-footer">
                            <a class="linkfooter" href="#">Nuestro compromiso</a>
                        <hr class="hr-div-notice">
                        Mayo 2021
                        </p>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-4 col-12">
                        <h6 class="mb-3 mb-lg-4 text-grey "><b>Contáctenos</b></h6>
                        <ul class="list-unstyled text-grey">
                            <li>info@grupoesfuerzo.com</li>
                            <li>+506 4036 7160</li>
                            <li>+506 8702 7972</li>
                        </ul>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-xl-4 col-md-4 col-sm-4 col-auto my-md-0 mt-5 order-sm-1 order-3 align-self-end">
                        <h6>Política de privacidad</h6>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-4 col-auto order-1 align-self-end ">
                        </div>
                    <div class="col-xl-4 col-md-4 col-sm-4 col-auto order-2 align-self-end mt-3 ">
                        <a href="#">
                        <img class="icon-youtube" src="./assets/image/youtube.svg" width="60" class="rounded float-start text-primary line-text" alt="...">
                        </a>
                    </div>
                </div>
            </div>
        </footer>

        <script type="text/javascript">
            // jQuery counterUp
            $('[data-toggle="counterUp"]').counterUp({
                delay: 15,
                time: 2500
            });
        </script>
    </body>
</html>

<!-- Optional JavaScript; choose one of the two! -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
<script type="text/javascript" src="assets/js/canva.js"></script>
<script>
    var isIOS = /iPad|iPhone|iPod/.test(navigator.platform);
    if (isIOS) {
        var canvasVideo = new CanvasVideoPlayer({
            videoSelector: '.video',
            canvasSelector: '.canvas',
            timelineSelector: false,
            autoplay: true,
            makeLoop: true,
            pauseOnClick: false,
            audio: false
        });
    }else {
        // Use HTML5 video
        document.querySelectorAll('.canvas')[0].style.display = 'none';
    }
</script>

<script>
    $(window).scroll(function () {
        if ($("#menu").offset().top>56){
            $("#menu").removeClass("bg-trasparente");
            $("#menu").addClass("bg-light");
            $("#m1").removeClass("text-light");
            $("#m1").addClass("text-secondary");
            $("#m2").removeClass("text-light");
            $("#m2").addClass("text-secondary");
            $("#m3").removeClass("text-light");
            $("#m3").addClass("text-secondary");
            $("#m4").removeClass("text-light");
            $("#m4").addClass("text-secondary");
            $("#m5").removeClass("text-light");
            $("#m5").addClass("text-secondary");
        }
        else{
            $("#menu").removeClass("bg-light");
            $("#menu").addClass("bg-trasparente");
            $("#m1").addClass("text-light");
            $("#m1").removeClass("text-secondary");
            $("#m2").addClass("text-light");
            $("#m2").removeClass("text-secondary");
            $("#m3").addClass("text-light");
            $("#m3").removeClass("text-secondary");
            $("#m4").addClass("text-light");
            $("#m4").removeClass("text-secondary");
            $("#m5").addClass("text-light");
            $("#m5").removeClass("text-secondary");
        }
    });

</script>