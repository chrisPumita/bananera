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
                        <h3 class="mb-3 text-secondary">GRUPO ESFUERZO AMPLÍA SU PRESENCIA EN EL MERCADO BANANERO CON LA ADQUISICIÓN DE <span class="text-primary">DOS FINCAS MÁS.</span></h3>
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
                Gobernanza (sección)
            </h3>
            <article class="blog-post">
                <img src="./img-min.jpg" class="img-fluid" alt="...">
                <h2 class="blog-post-title py-3 text-grey">GRUPO ESFUERZO AMPLÍA SU PRESENCIA EN EL MERCADO BANANERO CON LA ADQUISICIÓN DE DOS FINCAS MÁS </h2>
                <p class="blog-post-meta text-greybold">Mayo , 2021 por <strong><a href="#" class=" text-grey">EscritorName</a></strong> </p>
                <p class="text-grey">
                    En diciembre del 2020, el Grupo Esfuerzo, decidió ampliar su presencia en el mercado bananero con la
                    adquisición de dos nuevas fincas para alcanzar un área total de 960 hectáreas, de las cuales 534 están produciendo.
                </p>
                <p class="text-grey">
                    Se trata de finca Vesta en Valle La Estrella que incluye más de 240 hectáreas de bosque primario para
                    la protección de la biodiversidad, y finca Agrotubérculos en Puerto Viejo de Talamanca, en el hermoso
                    Caribe Sur. Ambas en la provincia de Limón.
                </p>
                <p class="text-grey">Las dos fincas fueron compradas a la familia Taylor.
                    <cite class="font-italic text-grey">“En el caso de Vesta, se sabe que fue la primera finca bananera propiedad de un productor independiente”
                    </cite>.
                </p>
                <p class="text-grey">Por su parte, Jaime Gómez, miembro de la Junta Directiva de Grupo Esfuerzo, indicó que
                    <cite class="font-italic text-grey">“esta decisión busca expandir nuestra producción y colocar mayor volumen
                        de fruta en el mercado internacional de banano. Además, nos permite ser más competitivos y mitigar riesgos para la tranquilidad de nuestros clientes”
                    </cite>, recordó don Eduardo Gómez, fundador de la compañía.
                </p>
                <p class="text-grey">
                    De esta manera, también se busca impactar la economía local y aportar aún más a la construcción de
                    marca país alrededor del mundo, gracias a la producción sostenible de banano costarricense de altísima calidad.
                </p>
                <p class="text-grey">Por su parte, Jaime Gómez, miembro de la Junta Directiva de Grupo Esfuerzo, indicó que
                    <cite class="font-italic text-grey">“En los últimos 4 años, a través de acciones como esta, triplicamos
                        nuestro tamaño de negocio, abrimos nuevos canales de comercialización independiente y aumentamos la
                        productividad por hectárea en las fincas. Todo gracias al aporte de nuestros colaboradores, clientes,
                        socios comerciales y proveedores”</cite>, finiquitaron los directivos.
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
    <div class="cont-limine footer-img-contacto" style="background: url(../../../assets/image/min/img-footer--cntact-min.png);">
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