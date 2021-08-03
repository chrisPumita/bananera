<!doctype html>
<?php $titulo = "Plantilla - Grupo Esfuerzo"; ?>
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
                        <h3 class="mb-3 text-secondary">GRUPO ESFUERZO EXPANDS ITS PRESENCE IN THE BANANA MARKET WITH THE ACQUISITION OF <span class="text-primary">TWO MORE FARMS.</span></h3>
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
                Governance (section)
            </h3>
            <article class="blog-post">
                <img src="./img-min.jpg" class="img-fluid" alt="...">
                <h2 class="blog-post-title py-3 text-grey">GRUPO ESFUERZO EXPANDS ITS PRESENCE IN THE BANANA MARKET WITH THE ACQUISITION OF TWO MORE FARMS</h2>
                <p class="blog-post-meta text-greybold">May , 2021 By <strong><a href="#" class=" text-grey">EscritorName</a></strong> </p>
                <p class="text-grey">
                In December 2020, Grupo Esfuerzo decided to expand its presence in the banana market with the acquisition of two new farms to 
                reach a total area of 960 hectares, of which 550 hectares are currently in production. 
                </p>
                <p class="text-grey">
                These are the Vesta farm in Valle La Estrella, which comprises more than 240 hectares of primary forest for the protection of 
                biodiversity, and the Agrotubérculos farm in Cahuita in Talamanca, in the beautiful South Caribbean. Both located in the province
                 of Limón.
                </p>
                <p class="text-grey">The two farms were purchased from the Taylor family.
                    <cite class="font-italic text-grey">“Vesta is known to be the oldest banana farm owned by an independent grower”
                    </cite>, recalled Don Eduardo Gómez, founder of the company. 
                </p>
                <p class="text-grey">Jaime Gómez, member of the Board of Directors of Grupo Esfuerzo, stated that
                    <cite class="font-italic text-grey">"this decision seeks to expand our production and place a greater volume of fruit in the 
                        international banana market. It also allows us to be more competitive and mitigate risks for the peace of mind of 
                        our customers"
                    </cite>.
                </p>
                <p class="text-grey">
                In this way, we also seek to impact the local economy and contribute even more to building the country's brand around the world, 
                thanks to the sustainable production of high-quality Costa Rican bananas.  
                </p>
                <p class="text-grey">
                    <cite class="font-italic text-grey">"In the last four years, through actions such as this, we have tripled our business size, 
                        opened new independent marketing channels and increased productivity per hectare on our farms. All thanks to the contribution
                         of our collaborators, customers, commercial partners and suppliers," 
                        </cite>, the executives concluded.
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