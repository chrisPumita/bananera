<!doctype html>
<?php $titulo = "Noticias | Grupo Esfuerzo"; ?>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/style/style.css">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">

    <!-- jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Counts JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <!-- Font Awesome -->
    <title> <?php echo $titulo; ?> </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../assets/style/styleContact.css">
    <style>


    </style>
</head>
<body>

<header style="background: url(../../assets/image/min/bg-dialog-grey-min.png) top center no-repeat;height: 70vh;" class="bg-light contacto-header bg-header-news">
    <?php include "../includes/nav.php" ?>
    <div class="container d-flex justify-content-center align-items-center" style="height: 70vh;">
        <div class="row container-headers">
            <div class="col welcome-title">
                <div class="row text-center">
                    <div class="text-white text-light">
                        <h3 class="mb-3 text-secondary">CAMIONES DE GRUPO ESFUERZO AHORA CUENTAN AHORA CUENTAN CON MONITOREO POR GPS PARA MAYOR <span class="text-primary">SEGURIDAD.</span></h3>
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
                <h2 class="blog-post-title py-3 text-grey">CAMIONES DE GRUPO ESFUERZO AHORA CUENTAN AHORA CUENTAN CON MONITOREO POR GPS PARA MAYOR SEGURIDAD</h2>
                <p class="blog-post-meta text-greybold">Abril , 2021 por <strong>Grupo Esfuerzo</strong> </p>

                <p class="text-grey">
                    Gracias a un Sistema de Posicionamiento Global (GPS),
                    todos los camiones del Grupo Esfuerzo cuentan con monitoreo en tiempo real desde el 19 de mayo anterior.
                </p>
                <p class="text-grey">
                    <cite class="font-italic text-grey">“Esto garantiza una mayor seguridad para la carga de nuestros clientes,
                        permitiéndonos conocer cualquier parada o desvío en la ruta de traslado de las frutas”</cite>, aseguró Roberto Gómez, gerente general de la compañía bananera.

                </p>
                <p class="text-grey">
                    Implementar el GPS en la flota vehicular, además, permite generar las rutas más eficientes, ahorrando
                    tiempo y recursos; esto resulta fundamental para cumplir con los plazos de entrega.
                </p>
                <p class="text-grey">
                    El proyecto contó con una inversión inicial de $1.000, y responde también a una estrategia corporativa
                    para mitigar los riesgos relacionados con la salud, seguridad y bienestar del trabajador, en este caso de los conductores de los camiones.
                </p>
                <p class="text-grey">
                    <cite class="font-italic text-grey">
                        “Esta acción nos permite no sólo mejorar nuestro sistema de gestión en control y seguridad sino brindar
                        una mayor tranquilidad a nuestros clientes y colaboradores”
                    </cite>, dijo Gómez.
                </p>
                <p class="text-grey">
                    Grupo Esfuerzo es una empresa bananera costarricense con más de 30 años de trayectoria, que brinda empleo a alrededor de 500 personas.
                </p>
                <p class="text-grey">
                    En la actualidad, Grupo Esfuerzo exporta banano de la variedad Cavendish a Inglaterra, Estados Unidos,
                    Francia, Italia, Alemania y Japón. Su producción equivale al 1.5% del mercado costarricense.
                </p>

            </article>

            <div class="row container-headers py-5">
                <div class="col m-auto text-center py-5">
                <a href="https://api.whatsapp.com/send?phone=50687027972" target="_blank">
                        <button class="learn-more my-5">
                        <span class="circle whatsapp-btn" aria-hidden="true">
                          <span class="icon arrow"></span>
                        </span>
                            <span class="button-text"><i class="bi bi-whatsapp"></i>&nbsp;WhatsApp Bussines</span>
                        </button>
                    </a>
                    <a href="mailto:info@grupoesfuerzo.com">
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
        <div class="row mb-2" id="containerNoticeRandom">
            <?php //include "../includes/more-notices.php" ?>
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

    const checkbox = document.querySelector('.my-form input[type="checkbox"]');
    const btns = document.querySelectorAll(".my-form button");

    checkbox.addEventListener("change", function() {
        const checked = this.checked;
        for (const btn of btns) {
            checked ? (btn.disabled = false) : (btn.disabled = true);
        }
    });

</script>
</body>
</html>
<?php include_once "../../include/js.php";?>
<script src="../../include/js-menu.js"></script>
<script src="../includes/notices-ajax.js"></script>


<!-- Bootstrap core JavaScript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>