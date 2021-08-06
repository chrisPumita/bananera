<!doctype html>
<?php $titulo = "Nachrichten | Grupo Esfuerzo"; ?>
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
                        <h3 class="mb-3 text-secondary">GRUPO ESFUERZO AUSWEITET IHRE PRÄSENZ AUF DEM BANANENMARKT MIT DEM ANKAUF VON <span class="text-primary">ZWEI WEITEREN GRUNDSTÜCKEN</span></h3>
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
                Führung (sección)
            </h3>
            <article class="blog-post">
                <img src="./img-min.jpg" class="img-fluid" alt="...">
                <h2 class="blog-post-title py-3 text-grey">GRUPO ESFUERZO AUSWEITET IHRE PRÄSENZ AUF DEM BANANENMARKT MIT 
                    DEM ANKAUF VON ZWEI WEITEREN GRUNDSTÜCKEN</h2>
                <p class="blog-post-meta text-greybold">Mayo , 2021 FÜR <strong>Grupo Esfuerzo</strong> </p>
                <p class="text-grey">
                In Dezember 2020 hat Grupo Esfuerzo entschieden, ihre Präsenz auf dem Bananenmarkt mit dem Ankauf zweier 
                Grundstücke zu erweitern. Damit erreichen sie eine Gesamtfläche von 960 Hektar, von denen 534 schon produzieren. 
                </p>
                <p class="text-grey">
                Diese sind Finca Vesta im Tal La Estrella, dass über 240 Hektar Primärwald für den Schutz der 
                biologischen Vielfalt umfasst, und Finca Agrotubérculos in Puerto Viejo, Talamanca, im Süden der wudernschönen 
                Karibischen Küste. Beide befinden sich in der Provinz von Limón. 
                </p>
                <p class="text-grey">Beide Grundstücke wurden von der Familie Taylor gekauft. 
                    <cite class="font-italic text-grey">Im Fall von Vesta, es ist bekannt, dass sie die erste Bananenplantage von einem unabhängingen Produzenten gehörte”,
                    </cite> erinnerte sich Herr Eduardo Gómez, Begründer des Unternehmens.
                </p>
                <p class="text-grey">Jaime Gómez, Vorstandsmitglied von Grupo Esfuerzo, erklärte, dass 
                    <cite class="font-italic text-grey">«diese Entscheidung darauf abzielte, unsere Produktion zu erweitern 
                        und mehr Obst auf dem internationalen Bananenmarkt zu platzieren. Darüber hinaus ermöglicht es uns, 
                        wettbewerbsfähiger zu sein und Risiken für die Sicherheit unserer Kunden zu mindern. »
                    </cite>.
                </p>
                <p class="text-grey">
                    DAuf diese Weise versucht man auch die lokale Wirtschaft zu beeinflussen und noch mehr zum 
                    Aufbau von Landmarken auf der ganzen Welt beizutragen, dank der nachhaltigen Produktion von 
                    hochqualitativen costaricanischen Bananen.
                </p>
                <p class="text-grey">
                    <cite class="font-italic text-grey">«In den letzten vier Jahren haben wir durch Aktionen wie diese unsere
                         Unternehmensgrösse verdreifacht, neue Kanäle für unabhängige Vermarktung erschlossen und die Hektarproduktivität 
                         auf den landwirtschaftlichen Flächen gesteigert. Das ist dem Beitrag unserer Mitarbeiter, Kunden, 
                         Geschäftspartner und Lieferanten zu verdanken»</cite>, schlossen die Geschäftsleitung.
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