<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <!-- Font Awesome -->

        <style>
            .bg-trasparente {
            background-color: transparent !important;
            transition: all 1s ease;
            }
            .bg-light{
                transition: all 1s ease;
            }
            header {
            height: 100vh;
            /* padding: 200px 0; */
            background: url(assets/image/bg-img1.png) top center no-repeat;
            background-size: cover;
            color: #ffffff;
            }
            .video-container {
            position: absolute;
            background-color: black;
            height: 100vh;
            min-height: 25rem;
            width: 100%;
            overflow: hidden;
            }
            header video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: 0;
            -ms-transform: translateX(-50%) translateY(-50%);
            -moz-transform: translateX(-50%) translateY(-50%);
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
            }
            header .container {
            position: relative;
            z-index: 2;
            }
            header .overlay {
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                width: 100%;
                background-color: #041d11;
                opacity: 0.8;
                z-index: 1;
            }


            .wabe{
                z-index: 99;
                height: 25vh;
                overflow: hidden;
                margin-top: 0vh;
                position: absolute;
                width: 100%;
            }

            @media (pointer: coarse) and (hover: none) {
            header {
            background: url('./assets/image/bg-img1.png') black no-repeat center center scroll;
            }
                header video{
                position: absolute;
                top: 50%;
                left: 50%;
                min-height: 100vh;
                height: 100vh;
                width: auto;
                    min-width: auto;
                z-index: 0;
                    -ms-transform: translateX(-50%) translateY(-50%);
                    -moz-transform: translateX(-50%) translateY(-50%);
                    -webkit-transform: translateX(-50%) translateY(-50%);
                    transform: translateX(-50%) translateY(-50%);
                }

                .canvas{
                    height: 100vh !important;
                }

            }
        </style>
        <style type="text/css">
            @import url(//fonts.googleapis.com/css?family=Lato:300:400);
            body {
            margin:0;
            }
            h1 {
            font-family: 'Lato', sans-serif;
            font-weight:300;
            letter-spacing: 2px;
            font-size:48px;
            }
            p {
            font-family: 'Lato', sans-serif;
            letter-spacing: 1px;
            font-size:14px;
            color: #333333;
            }
            /*Shrinking for mobile*/
            @media (max-width: 768px) {
            h1 {
            font-size:24px;
            }
            .bg-trasparente{
                background-color: #fff !important;
            }



            .video-container {
                    height: 95vh;
                }
            header .overlay {
                position: absolute;
                height: 950%;
            }
            .wabe {
                z-index: 99;
                height: 10vh;
                overflow: hidden;
                margin-top: 0vh;
                position: relative;
                width: 100%;
            }
            }
        </style>
        <style>

            .menu {
                display: flex;
                justify-content: center;
                align-items: center;
                max-width: 720px;
                list-style: none;
            }

            .menu li {
                width: 125px;
                height: 50px;
                transition: background-position-x 0.9s linear;
                text-align: center;
            }
            .menu li a {
                font-size: 12px;
                color: #777;
                text-decoration: none;
                transition: all 0.45s;
            }
            .menu li:hover {
                border-bottom: 1px solid #C00;
                 -webkit-animation: line 1s;
                animation: line 1s;
            }
            .menu li:hover a {
                color: #a71a1a !important;
            }
            .menu li:not(:last-child) {
                margin-right: 10px;
            }

            @-webkit-keyframes line {
                0% {
                    background-position-x: 390px;
                }
            }

            @keyframes line {
                0% {
                    background-position-x: 390px;
                }
            }
        </style>
        <title>Hello, world!</title>
    </head>
    <body>

        <!--Hey! This is the original version of Simple CSS Waves-->
        <header style="height: 100vh">
            <div class="overlay"></div>
            <div class="video-container">

                <div class="video-inline">
                    <video class="video" poster="./assets/image/bg-img1.png"  playsinline="playsinline"  autoplay="autoplay" muted="muted" loop="loop" height="100%">
                        <source src="./assets/image/bg-video.mp4" type="video/mp4" />
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
                        <img src="./assets/image/logo.svg" alt="" width="auto" height="50" class="d-inline-block align-text-top">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuvar" aria-controls="menuvar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="menuvar">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        </ul>
                        <ul class="navbar-nav mb-2 mb-lg-0 justify-content-end menu">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">NOSOTROS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">PRODUCTOS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">RSE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">NOTICIAS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">CONTACTO</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container" style="height: 75vh;">
                    <div class="d-flex justify-content-center align-items-center h-100">

                        <div class="text-white text-center">
                            <h1 class="mb-3">Learn Bootstrap 5 with MDB</h1>
                            <h5 class="mb-4">Best & free guide of responsive web design</h5>
                            <a class="btn btn-outline-light btn-lg m-2" href="https://www.youtube.com/watch?v=c9B4TPnak1A"
                               role="button" rel="nofollow" target="_blank">Start tutorial</a>
                            <a class="btn btn-outline-light btn-lg m-2" href="https://mdbootstrap.com/docs/standard/"
                               target="_blank" role="button">Download MDB UI KIT</a>
                        </div>
                    </div>
            </div>
            <div class="wabe" >
                <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                    <path d="M0.00,5.44 C215.00,202.78 232.50,-133.70 502.82,69.56 L501.12,150.48 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
                </svg>
            </div>
        </header>
        <section>
            <div  style="height: 1600px; background-color: white;"> </div>
        </section>
        <!-- MDB -->
        <script
                type="text/javascript"
                src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.js"
        ></script>
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
                }
               else{
                   $("#menu").removeClass("bg-light");
                   $("#menu").removeClass("bg-trasparente");

                }
            });
        </script>
    </body>
</html>