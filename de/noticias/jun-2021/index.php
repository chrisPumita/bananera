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
                        <h3 class="mb-3 text-secondary">GRUPO ESFUERZO NIMMT TEIL BEIM AUFBAU EINES DAMMS UM 
                            <span class="text-primary">ÜBERSCHWEMMUNGEN </span>IN KARIBISCHEN GEMEINDEN ZU VERMEIDEN.</h3>
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
                SOZIAL (sección)
            </h3>
            <article class="blog-post">
                <img src="./img-min.jpg" class="img-fluid" alt="...">
                <h2 class="blog-post-title py-3 text-grey">GRUPO ESFUERZO NIMMT TEIL BEIM AUFBAU EINES DAMMS UM 
                    ÜBERSCHWEMMUNGEN IN KARIBISCHEN GEMEINDEN ZU VERMEIDEN</h2>
                <p class="blog-post-meta text-greybold">Jun , 2021 FÜR <strong><a href="#" class=" text-grey">EscritorName</a></strong> </p>
                <p class="text-grey">
                Nachdem Grupo Esfuerzo einen Grundstück in der Bristol Gemeinde in Matina von Limón in 2017 erworben hatte,
                 wurde sich die Unternehmensleitung der Notwendigkeit bewusst, dass die Bevölkerung eine Struktur benötigt, 
                 um die furchterregenden und ständigen Überschwemmungen während der Regenzeit zu verhindern.
                </p>
                <p class="text-grey">
                Auf dem Grund haben sie, gemeinsam mit dem Ministerium der Bauarbeit und des Verkehrs (MOPT), der National Bananencorporation 
                (CORBANA), der Nationalen Kommission für Risikoprävention und Notfallversorgung (CNE), JAPDEVA und der Lokalregierung, an 
                einer erfolgreichen öffentlich-privaten Allianz teilgenommen. 
                </p>
                <p class="text-grey">
                So wurde, Dank der Zusammenarbeit und auf der Grundlage einer Studie über ein Einzugsgebiet des Flusses Matina,
                 im April dieses Jahres ein Damm eingeweiht, der verhindern sollte, dass der Wasserfluss über das linke Ufer bricht,
                  was die Bevölkerung der kleinen Gemeinde B-Line, die Viehhalter und die Kleinbauern der Region direkt betrifft.
                </p>
                <p class="text-grey">
                    Die Einwohner von Bristol, Corina und Baltimore, die diese Route benutzen, haben auch vom Projekt profitiert. 
                </p>
                <p class="text-grey">
                    <cite class="font-italic text-grey">
                    „Vergessen wir nicht, dass es fast jedes Jahr, im Winter, Gemeiden aus Limón gibt, die von Flüssen 
                    überschwemmt werden. Dies betrifft Tausende von Menschen, zwingt die Eröffnung von Notheimen und 
                    verursacht wirtschaftliche Verluste, eine Situation, die Matina, ohnehin schon der am weitesten 
                    zurückgelegene Kanton des Landes ist, wie es im Atlas der menschlichen Entwicklung heisst»
                    </cite>, o Roberto Gómez, Geschäftsführer von Grupo Esfuerzo.
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