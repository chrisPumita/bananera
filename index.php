<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <style>
            .bg-trasparente {
            background-color: transparent !important;
            transition: all 1s ease;
            }
            .bg-primary{
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
                margin-top: -25vh;
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
            .header {
            position:relative;
            text-align:center;
            background: url(assets/image/bg-img1.png) top center no-repeat;
            color:white;
            }
            .logo {
            width:50px;
            fill:white;
            padding-right:15px;
            display:inline-block;
            vertical-align: middle;
            }
            .inner-header {
            height:65vh;
            width:100%;
            margin: 0;
            padding: 0;
            }
            .flex { /*Flexbox for containers*/
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            }
            .waves {
            position:relative;
            width: 100%;
            height:15vh;
            margin-bottom:-7px; /*Fix for safari gap*/
            min-height:100px;
            max-height:150px;
            }
            .content {
            position:relative;
            height:20vh;
            text-align:center;
            background-color: white;
            }
            /* Animation */
            .parallax > use {
            animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
            }
            .parallax > use:nth-child(1) {
            animation-delay: -2s;
            animation-duration: 7s;
            }
            .parallax > use:nth-child(2) {
            animation-delay: -3s;
            animation-duration: 10s;
            }
            .parallax > use:nth-child(3) {
            animation-delay: -4s;
            animation-duration: 13s;
            }
            .parallax > use:nth-child(4) {
            animation-delay: -5s;
            animation-duration: 20s;
            }
            @keyframes move-forever {
            0% {
            transform: translate3d(-90px,0,0);
            }
            100% { 
            transform: translate3d(85px,0,0);
            }
            }
            /*Shrinking for mobile*/
            @media (max-width: 768px) {
            .waves {
            height:40px;
            min-height:40px;
            }
            .content {
            height:30vh;
            }
            h1 {
            font-size:24px;
            }

            .wabe {
                z-index: 99;
                height: 10vh;
                overflow: hidden;
                margin-top: -15vh;
                position: absolute;
                width: 100%;
            }
            }
        </style>
        <title>Hello, world!</title>
    </head>
    <body>
        <!--Hey! This is the original version of Simple CSS Waves-->
        <header>
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
                        <ul class="navbar-nav mb-2 mb-lg-0 justify-content-end">
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


            <div class="" style="height: 100vh;">
                <div class="d-flex h-100 text-center align-items-center">
                    <div class="w-100 text-white">
                        <h1 class="display-3">Video Header</h1>
                        <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p>
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
    </body>
</html>