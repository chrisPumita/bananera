<!doctype html>
<?php $titulo = "Plantilla - Grupo Esfuerzo"; ?>
<html lang="en">
<head>
    <?php include "../includes/header.php"?>
</head>
<body>
<header style="background: url(../../assets/image/min/bg-dialog-grey-min.png) top center no-repeat;height: 70vh;" class="bg-light contacto-header bg-header-news">
    <?php include "../includes/nav.php" ?>
    <div class="container d-flex justify-content-center align-items-center" style="height: 70vh;">
        <div class="row container-headers">
            <div class="col welcome-title">
                <div class="row text-center">
                    <div class="text-white text-light">
                        <h3 class="mb-3 text-secondary">GRUPO ESFUERZO PARTICIPA EN LA CONSTRUCCIÓN DE DIQUE PARA
                            <span class="text-primary">EVITAR INUNDACIONES </span>EN COMUNIDADES DEL CARIBE.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="circule-back-header" style="background: url('../../assets/image/min/bg-img1-min.png')">
    </div>
</header>
<main class="container">
    <div class="row g-5">
        <div class="col-md-8">
            <h3 class="pb-4 mb-4 fst-italic border-bottom">
                SOCIAL (sección)
            </h3>
            <article class="blog-post">
                <img src="./imgDemo.jpg" class="img-fluid" alt="...">
                <h2 class="blog-post-title py-3 text-grey">GRUPO ESFUERZO PARTICIPA EN LA CONSTRUCCIÓN DE DIQUE PARA
                    EVITAR INUNDACIONES EN COMUNIDADES DEL CARIBE</h2>
                <p class="blog-post-meta text-greybold">Junio , 2021 por <strong><a href="#" class=" text-grey">EscritorName</a></strong> </p>
                <p class="text-grey">
                    Luego de que, en 2017, el Grupo Esfuerzo adquiriera una finca en la comunidad de Bristol en Matina de Limón,
                    sus directivos tomaron consciencia de la necesidad que tenía la población de contar con una estructura para
                    prevenir las temibles y constantes inundaciones durante la época lluviosa.
                </p>
                <p class="text-grey">
                    Por esa razón, participaron de una exitosa alianza público – privada en conjunto con el Ministerio de
                    Obras Públicas y Transportes (MOPT), la Corporación Bananera Nacional (CORBANA), la Comisión Nacional de
                    Prevención de Riesgos y Atención de Emergencias (CNE), JAPDEVA y el gobierno local.
                </p>
                <p class="text-grey">
                    Fue así como, gracias a ese trabajo conjunto y a partir de lo arrojado por un estudio de la cuenca del
                    río Matina, en abril anterior se inauguró un dique que evitaría que el caudal rompa sobre la margen
                    izquierda afectando directamente a la población de la pequeña comunidad de B-Line, a ganaderos y
                    pequeños agricultores de la zona.
                </p>
                <p class="text-grey">
                    El proyecto contó con una inversión inicial de $1.000, y responde también a una estrategia corporativa
                    para mitigar los riesgos relacionados con la salud, seguridad y bienestar del trabajador, en este caso de los conductores de los camiones.
                </p>
                <p class="text-grey">
                    Los habitantes de Bristol, Corina y Baltimore, quienes utilizan esta ruta, también se ven beneficiados con el proyecto.
                </p>
                <p class="text-grey">
                    <cite class="font-italic text-grey">
                        “Recordemos que, prácticamente todos los años, durante el invierno, hay comunidades limonenses que
                        son anegadas por ríos que se salen de su cauce. Esto impacta a miles de personas, obliga
                        a abrir albergues temporales y provoca pérdidas económicas, una situación que perjudica a Matina,
                        ya de por sí el cantón más rezagado del país, según el Atlas de Desarrollo Humano”
                    </cite>, indicó Roberto Gómez, gerente general de Grupo Esfuerzo.
                </p>
            </article>
            <div class="row container-headers py-5">
                <div class="col m-auto text-center py-5">
                    <a href="">
                        <button class="learn-more my-5">
                        <span class="circle whatsapp-btn" aria-hidden="true">
                          <span class="icon arrow"></span>
                        </span>
                            <span class="button-text"><i class="bi bi-whatsapp"></i>&nbsp;WhatsApp Bussines</span>
                        </button>
                    </a>
                    <a href="">
                        <button class="learn-more my-5">
                        <span class="circle mail-btn" aria-hidden="true">
                          <span class="icon arrow"></span>
                        </span>
                            <span class="button-text"><i class="bi bi-envelope"></i>&nbsp;e-mail</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <?php include "../includes/menu.php"; ?>
    </div>
</main>
<section>
    <div class="container py-5">
        <div class="row mb-2">
            <div class="row mb-2" id="containerNoticeRandom">
                <?php //include "../includes/more-notices.php" ?>
            </div>
        </div>
    </div>
    <div class="cont-limine footer-img-contacto" style="background: url(../../assets/image/min/img-footer--cntact-min.png);">
        <div class="h-300">
        </div>
    </div>
</section>

<?php include "../includes/footer.php"; include "../includes/modal.php";?>
<script type="text/javascript">
    // jQuery counterUp
    $('[data-toggle="counterUp"]').counterUp({
        delay: 15,
        time: 2500
    });
</script>
</body>
</html>
<?php include_once "../../include/js.php";?>
<script src="../../include/js-menu.js"></script>
<script src="../includes/notices-ajax.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>