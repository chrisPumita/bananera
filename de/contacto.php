<!doctype html>
<?php $titulo = "Contacto - Grupo Esfuerzo"; ?>
<html lang="en">
<head>

    <?php include "include/header.php";?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/style/styleContact.css">
    <style>


    </style>

</head>
<body>

<header style="background: url(./assets/image/min/bg-dialog-grey-min.png) top center no-repeat;" class="header-top-contact bg-light contacto-header">
    <nav id="menu" class="navbar var-contacto fixed-top navbar-expand-lg navbar-inverse navbar-light bg-light">
        <div class="container-sm">
            <a class="navbar-brand" href="./">
                <img src="./assets/image/logo.svg" alt="" width="100" height="auto" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuvar" aria-controls="menuvar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse border-menu" id="menuvar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0 justify-content-end menu">
                    <li class="nav-item">
                        <a class="nav-link text-secondary" aria-current="page" id="m1" href="./nosotros.php"><span class="text-grey">NOSOTROS</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" aria-current="page" id="m2"  href="./producto.php"><span class="text-grey">PRODUCTOS</span></a>
                    </li>
                    <li class="nav-item text-secondary dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            SOSTENIBILIDAD
                        </a>
                        <ul class="dropdown-menu dropdown-menu postition-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li class="link-menu"><a class="dropdown-item" href="./sostenibilidad.php">Compromisos</a></li>
                            <div class="dropdown-divider"></div>
                            <li class="link-menu"><a class="dropdown-item" href="#">Social</a></li>
                            <li class="link-menu"><a class="dropdown-item" href="#">Gobernanza</a></li>
                            <li class="link-menu"><a class="dropdown-item" href="#">Ambiental</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" aria-current="page" id="m4" href="./noticias.php"><span class="text-grey">NOTICIAS</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" aria-current="page"  id="m5" href="./contacto.php"><span class="text-grey">CONTACTO</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container d-flex justify-content-center align-items-center" >
    </div>
    <div class="circule-back-header" style="background: url('./assets/image/min/bg-img1-min.png')">
    </div>
</header>

<section class="bg-ligth ">
    <div class="container-sm py-5 top-z">
        <div class="container justify-content-center align-items-center">
            <div class="row">
                <h3 class="text-secondary">¡Hagamos negocios juntos!</h3>
            </div>
            <div class="row container-headers py-5">
                <div class="col">
                    <form class="my-form" id="frm-contacto">
                        <div class="container">
                            <ul>
                                <li>
                                    <div class="grid grid-1">
                                        <label for="name" class="form-label text-grey">Nombre y apellido(s)*</label>
                                        <input type="text" id="name" name="nombre" placeholder="Nombre completo" required>
                                    </div>
                                </li>
                                <li>
                                    <div class="grid grid-1">
                                        <label for="name" class="form-label text-grey">Correo Electrónico*</label>
                                        <input type="email" id="email" name="email" placeholder="ejemplo@suempresa.com" required>
                                    </div>
                                </li>
                                <li>
                                    <div class="grid grid-1">
                                        <label for="empresa" class="form-label text-grey">Empresa*</label>
                                        <input type="text" id="empresa" name="empresa" placeholder="Empresa / orgainización" required>
                                    </div>
                                </li>
                                <li>
                                    <div class="grid grid-1">
                                        <label for="telefono" class="form-label text-grey">Número de Teléfono*</label>
                                        <input type="tel" id="telefono" name="telefono" placeholder="Eje. 55 5555 5555" required>
                                    </div>
                                </li>
                                <li>
                                    <label for="pais" class="form-label text-grey">País*</label>
                                    <select name="pais" id="pais">
                                        <option value="Afganistán">Afganistán</option>
                                        <option value="Albania">Albania
                                        <option value="Alemania">Alemania</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antártida">Antártida</option>
                                        <option value="Antigua y Barbuda">Antigua y Barbuda</option>
                                        <option value="Antillas Holandesas">Antillas Holandesas</option>
                                        <option value="Arabia Saudí">Arabia Saudí</option>
                                        <option value="Argelia">Argelia</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaiyán">Azerbaiyán</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrein">Bahrein</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Bélgica">Bélgica</option>
                                        <option value="Belice">Belice</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermudas">Bermudas</option>
                                        <option value="Bielorrusia">Bielorrusia</option>
                                        <option value="Birmania">Birmania</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia y Herzegovina">Bosnia y Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Brasil">Brasil</option>
                                        <option value="Brunei">Brunei</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Bután">Bután</option>
                                        <option value="Cabo Verde">Cabo Verde</option>
                                        <option value="Camboya">Camboya</option>
                                        <option value="Camerún">Camerún</option>
                                        <option value="Canadá">Canadá</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Chipre">Chipre</option>
                                        <option value="Ciudad del Vaticano (Santa Sede)">Ciudad del Vaticano (Santa Sede)</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comores">Comores</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Congo, República Democrática del">Congo, República Democrática del</option>
                                        <option value="Corea">Corea</option>
                                        <option value="Corea del Norte">Corea del Norte</option>
                                        <option value="Costa de Marfíl">Costa de Marfíl</option>
                                        <option value="Costa Rica" selected>Costa Rica</option>
                                        <option value="Croacia (Hrvatska)">Croacia (Hrvatska)</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Dinamarca">Dinamarca</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egipto">Egipto</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Emiratos Árabes Unidos">Emiratos Árabes Unidos</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Eslovenia">Eslovenia</option>
                                        <option value="España">España</option>
                                        <option value="Estados Unidos">Estados Unidos</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Etiopía">Etiopía</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Filipinas">Filipinas</option>
                                        <option value="Finlandia">Finlandia</option>
                                        <option value="Francia">Francia</option>
                                        <option value="Gabón">Gabón</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Granada">Granada</option>
                                        <option value="Grecia">Grecia</option>
                                        <option value="Groenlandia">Groenlandia</option>
                                        <option value="Guadalupe">Guadalupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guayana">Guayana</option>
                                        <option value="Guayana Francesa">Guayana Francesa</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea Ecuatorial">Guinea Ecuatorial</option>
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Haití">Haití</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hungría">Hungría</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Irak">Irak</option>
                                        <option value="Irán">Irán</option>
                                        <option value="Irlanda">Irlanda</option>
                                        <option value="Isla Bouvet">Isla Bouvet</option>
                                        <option value="Isla de Christmas">Isla de Christmas</option>
                                        <option value="Islandia">Islandia</option>
                                        <option value="Islas Caimán">Islas Caimán</option>
                                        <option value="Islas Cook">Islas Cook</option>
                                        <option value="Islas de Cocos o Keeling">Islas de Cocos o Keeling</option>
                                        <option value="Islas Faroe">Islas Faroe</option>
                                        <option value="Islas Heard y McDonald">Islas Heard y McDonald</option>
                                        <option value="Islas Malvinas">Islas Malvinas</option>
                                        <option value="Islas Marianas del Norte">Islas Marianas del Norte</option>
                                        <option value="Islas Marshall">Islas Marshall</option>
                                        <option value="Islas menores de Estados Unidos">Islas menores de Estados Unidos</option>
                                        <option value="Islas Palau">Islas Palau</option>
                                        <option value="Islas Salomón">Islas Salomón</option>
                                        <option value="Islas Svalbard y Jan Mayen">Islas Svalbard y Jan Mayen</option>
                                        <option value="Islas Tokelau">Islas Tokelau</option>
                                        <option value="Islas Turks y Caicos">Islas Turks y Caicos</option>
                                        <option value="Islas Vírgenes (EEUU)">Islas Vírgenes (EEUU)</option>
                                        <option value="Islas Vírgenes (Reino Unido)">Islas Vírgenes (Reino Unido)</option>
                                        <option value="Islas Wallis y Futuna">Islas Wallis y Futuna</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italia">Italia</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japón">Japón</option>
                                        <option value="Jordania">Jordania</option>
                                        <option value="Kazajistán">Kazajistán</option>
                                        <option value="Kenia">Kenia</option>
                                        <option value="Kirguizistán">Kirguizistán</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Letonia">Letonia</option>
                                        <option value="Líbano">Líbano</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libia">Libia</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lituania">Lituania</option>
                                        <option value="Luxemburgo">Luxemburgo</option>
                                        <option value="Macedonia, Ex-República Yugoslava de">Macedonia, Ex-República Yugoslava de</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malasia">Malasia</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Maldivas">Maldivas</option>
                                        <option value="Malí">Malí</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marruecos">Marruecos</option>
                                        <option value="Martinica">Martinica</option>
                                        <option value="Mauricio">Mauricio</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="México">México</option>
                                        <option value="Micronesia">Micronesia</option>
                                        <option value="Moldavia">Moldavia</option>
                                        <option value="Mónaco">Mónaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Níger">Níger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk">Norfolk</option>
                                        <option value="Noruega">Noruega</option>
                                        <option value="Nueva Caledonia">Nueva Caledonia</option>
                                        <option value="Nueva Zelanda">Nueva Zelanda</option>
                                        <option value="Omán">Omán</option>
                                        <option value="Países Bajos">Países Bajos</option>
                                        <option value="Panamá">Panamá</option>
                                        <option value="Papúa Nueva Guinea">Papúa Nueva Guinea</option>
                                        <option value="Paquistán">Paquistán</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Perú">Perú</option>
                                        <option value="Pitcairn">Pitcairn</option>
                                        <option value="Polinesia Francesa">Polinesia Francesa</option>
                                        <option value="Polonia">Polonia</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reino Unido">Reino Unido</option>
                                        <option value="República Centroafricana">República Centroafricana</option>
                                        <option value="República Checa">República Checa</option>
                                        <option value="República de Sudáfrica">República de Sudáfrica</option>
                                        <option value="República Dominicana">República Dominicana</option>
                                        <option value="República Eslovaca">República Eslovaca</option>
                                        <option value="Reunión">Reunión</option>
                                        <option value="Ruanda">Ruanda</option>
                                        <option value="Rumania">Rumania</option>
                                        <option value="Rusia">Rusia</option>
                                        <option value="Sahara Occidental">Sahara Occidental</option>
                                        <option value="Saint Kitts y Nevis">Saint Kitts y Nevis</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="Samoa Americana">Samoa Americana</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="San Vicente y Granadinas">San Vicente y Granadinas</option>
                                        <option value="Santa Helena">Santa Helena</option>
                                        <option value="Santa Lucía">Santa Lucía</option>
                                        <option value="Santo Tomé y Príncipe">Santo Tomé y Príncipe</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leona">Sierra Leona</option>
                                        <option value="Singapur">Singapur</option>
                                        <option value="Siria">Siria</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="St Pierre y Miquelon">St Pierre y Miquelon</option>
                                        <option value="Suazilandia">Suazilandia</option>
                                        <option value="Sudán">Sudán</option>
                                        <option value="Suecia">Suecia</option>
                                        <option value="Suiza">Suiza</option>
                                        <option value="Surinam">Surinam</option>
                                        <option value="Tailandia">Tailandia</option>
                                        <option value="Taiwán">Taiwán</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Tayikistán">Tayikistán</option>
                                        <option value="Territorios franceses del Sur">Territorios franceses del Sur</option>
                                        <option value="Timor Oriental">Timor Oriental</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad y Tobago">Trinidad y Tobago</option>
                                        <option value="Túnez">Túnez</option>
                                        <option value="Turkmenistán">Turkmenistán</option>
                                        <option value="Turquía">Turquía</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Ucrania">Ucrania</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistán">Uzbekistán</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Yugoslavia">Yugoslavia</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabue">Zimbabue</option>
                                    </select>
                                </li>
                                <li>
                                    <label for="name" class="form-label text-grey">Tipo de Sector*</label>
                                    <select name="sector" id="sector">
                                        <option>SUPERMERCADO</option>
                                        <option>MADURADOR</option>
                                        <option selected>DISTRIBUIDOR</option>
                                        <option>CONSUMIDOR</option>
                                        <option>OTROS</option>
                                    </select>
                                </li>
                                <li>
                                    <label for="name" class="form-label text-grey">Comentario adicional</label>
                                    <textarea name="comentario" id="comentario"  placeholder="Escriba un comentario adicional"></textarea>
                                </li>
                                <li>
                                    <input type="checkbox" id="terms" required>
                                    <label for="terms" class="form-label text-grey">He leido y acepto
                                        <a class="linkfooter" href="" data-bs-toggle="modal" data-bs-target="#modalPrivate">términos y condiciones.</a>
                                    </label>
                                </li>
                                <li>
                                    <div class="grid grid-3" >
                                        <div class="required-msg">Requerido</div>
                                        <button class="btn-grid" type="submit" disabled>
                                                <span class="back">
                                                    <i class="fas fa-paper-plane"></i>
                                                  <img src="./assets/image/email-icon.svg" alt="">
                                                </span>
                                                <span class="front">Enviar</span>
                                        </button>
                                        <button class="btn-grid" type="reset" disabled>
                                            <span class="back">
                                              <img src="./assets/image/eraser-icon.svg" alt="">
                                            </span>
                                            <span class="front">Limpiar</span>
                                        </button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </form>
                    <span id="actionSend" ></span>
                </div>
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
    </div>
    <div class="cont-limine footer-img-contacto" style="background: url(./assets/image/min/img-footer--cntact-min.png);">
        <div class="h-300">
        </div>
    </div>
</section>
<section id="map">
    <!-- RH: this is bootstrap 5 tabbed panel -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="home" aria-selected="true">Bananera El Esfuerzo</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="profile" aria-selected="false">Bananera Bristol</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#tab3" role="tab" aria-controls="contact" aria-selected="false">AgroTuberculos</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#tab4" role="tab" aria-controls="contact" aria-selected="false">Vesta</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="home-tab">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3899.6720266637394!2d-83.36783648876926!3d10.08080559523029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa73b20e227c68b%3A0x27291f4709409545!2sBananera%20El%20Esfuerzo!5e1!3m2!1ses!2smx!4v1626931662835!5m2!1ses!2smx" width="100%" height="540" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="profile-tab">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4655.124942549033!2d-83.303452!3d10.0361269!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa73d5bb9329b31%3A0x272ae4518a7beb0b!2sBananera%20Bristol%20S.A.!5e1!3m2!1ses!2smx!4v1626931620385!5m2!1ses!2smx" width="100%" height="540" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="contact-tab">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3904.9848510497095!2d-82.79922433937091!3d9.66034259542066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa651594f990b29%3A0xf7a94ae33c6aef8a!2sAgrotuberculos!5e1!3m2!1ses!2smx!4v1626931718367!5m2!1ses!2smx" width="100%" height="540" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="contact-tab">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d38383.63825047722!2d-83.0675096303943!3d9.716666354921152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa6fb13a90a2fdf%3A0x37540abfeaf28c6a!2sLim%C3%B3n%2C%20Vesta%2C%20Costa%20Rica!5e1!3m2!1ses!2smx!4v1626931739518!5m2!1ses!2smx" width="100%" height="540" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>



</section>


<?php include_once "./include/footer.php" ?>
<script src="./ajax/mailContact.js"></script>
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
<?php include_once "./include/js.php";?>
<script src="./include/js-menu.js"></script>


<!-- Bootstrap core JavaScript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>