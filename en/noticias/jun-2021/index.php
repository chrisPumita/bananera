<!doctype html>
<?php $titulo = "News | Grupo Esfuerzo"; ?>
<html lang="en">
<head>
    <?php include "../includes/header.php"?>
</head>
<body>
<header style="background: url(../../../assets/image/min/bg-dialog-grey-min.png) top center no-repeat;height: 70vh;" class="bg-light contacto-header bg-header-news">
    <?php include "../includes/nav.php" ?>
    <div class="container d-flex justify-content-center align-items-center" style="height: 70vh;">
        <div class="row container-headers">
            <div class="col welcome-title">
                <div class="row text-center">
                    <div class="text-white text-light">
                        <h3 class="mb-3 text-secondary">GRUPO ESFUERZO PARTICIPATES IN THE CONSTRUCTION OF A DAM TO  
                            <span class="text-primary">PREVENT FLOODING </span>IN CARIBBEAN COMMUNITIES.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="circule-back-header" style="background: url('../../../assets/image/min/bg-img1-min.png')">
    </div>
</header>
<main class="container">
    <div class="row g-5">
        <div class="col-md-8">
            <h3 class="pb-4 mb-4 fst-italic border-bottom">
                SOCIAL (section)
            </h3>
            <article class="blog-post">
                <img src="./img-min.jpg" class="img-fluid" alt="...">
                <h2 class="blog-post-title py-3 text-grey">GRUPO ESFUERZO PARTICIPATES IN THE CONSTRUCTION OF A DAM TO PREVENT
                     FLOODING IN CARIBBEAN COMMUNITIES</h2>
                <p class="blog-post-meta text-greybold">Jun , 2021 By <strong>Grupo Esfuerzo</strong> </p>
                <p class="text-grey">
                After Grupo Esfuerzo acquired a farm in the community of Bristol in Matina de Limón in 2017, its directors became
                 aware of the local population's need for a structure to prevent the dreaded and constant flooding during 
                 the rainy season. 
                </p>
                <p class="text-grey">
                For this reason, they participated in a successful public-private partnership with the Ministry of Public 
                Works and Transportation (MOPT), the National Banana Corporation (CORBANA), the National Commission for Risk 
                Prevention and Emergency Attention (CNE), JAPDEVA and the local government. 
                </p>
                <p class="text-grey">
                As a result of this joint work and based on the results of a study of the Matina river, a dam was 
                inaugurated last April to prevent the river from breaking course on its left bank, which would've 
                directly affect the small community of B-Line, cattle ranchers and small farmers in the area. 
                </p>
                <p class="text-grey">
                The residents of Bristol, Corina and Baltimore, who use this route, also benefit from the project. 
                </p>
                <p class="text-grey">
                    <cite class="font-italic text-grey">
                    "Let's recall that practically every year, during the rainy season there are communities in Limón that 
                    are flooded by rivers that break their course. This impacts thousands of people, requiring the opening 
                    of temporary shelters and causing economic losses, a situation that harms Matina, which is already the 
                    most underdeveloped county in the country according to the Human Development Atlas"
                    </cite>, said Roberto Gómez, general manager of Grupo Esfuerzo.
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