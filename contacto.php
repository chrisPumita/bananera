<!doctype html>
<?php $titulo = "Contacto - Grupo Esfuerzo"; ?>
<html lang="en">
<head>

    <?php include "include/header.php";?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>

        :root {
            --white: #afafaf;
            --red: #e31b23;
            --bodyColor: var(--ligth);
            --borderFormEls: var(--grey);
            --bgFormEls: var(--ligth);
            --bgFormElsFocus: var(--ligth);
        }

        input,
        select,
        textarea,
        button {
            font-family: inherit;
            font-size: 100%;
        }

        button,
        label {
            cursor: pointer;
        }

        select {
            appearance: none;
        }

        /* Remove native arrow on IE */
        select::-ms-expand {
            display: none;
        }

        /*Remove dotted outline from selected option on Firefox*/
        /*https://stackoverflow.com/questions/3773430/remove-outline-from-select-box-in-ff/18853002#18853002*/
        /*We use !important to override the color set for the select on line 99*/
        select:-moz-focusring {
            color: transparent !important;
            text-shadow: 0 0 0 var(--ligth);
        }

        textarea {
            resize: none;
        }

        ul {
            list-style: none;
        }


        /* FORM ELEMENTS
        –––––––––––––––––––––––––––––––––––––––––––––––––– */
        .my-form h1 {
            margin-bottom: 1.5rem;
        }

        .my-form li,
        .my-form .grid > *:not(:last-child) {
            margin-bottom: 1.5rem;
        }

        .my-form select,
        .my-form input,
        .my-form textarea,
        .my-form button {
            width: 100%;
            line-height: 1.5;
            padding: 15px 10px;
            border: 1px solid var(--borderFormEls);
            color: var(--white);
            background: var(--bgFormEls);
            transition: background-color 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25),
            transform 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25);
        }

        .my-form textarea {
            height: 170px;
        }

        .my-form ::placeholder {
            color: inherit;
            /*Fix opacity issue on Firefox*/
            opacity: 1;
        }

        .my-form select:focus,
        .my-form input:focus,
        .my-form textarea:focus,
        .my-form button:enabled:hover,
        .my-form button:focus,
        .my-form input[type="checkbox"]:focus + label {
            background: var(--bgFormElsFocus);
        }

        .my-form select:focus,
        .my-form input:focus,
        .my-form textarea:focus {
            transform: scale(1.02);
        }

        .my-form *:required,
        .my-form select {
            background-repeat: no-repeat;
            background-position: center right 12px;
            background-size: 15px 15px;
        }

        .my-form *:required {
            background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/asterisk.svg);
        }

        .my-form select {
            background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/down.svg);
        }

        .my-form *:disabled {
            cursor: default;
            filter: blur(2px);
        }


        /* FORM BTNS
        –––––––––––––––––––––––––––––––––––––––––––––––––– */
        .my-form .required-msg {
            display: none;
            background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/asterisk.svg)
            no-repeat center left / 15px 15px;
            padding-left: 20px;
        }

        .my-form .btn-grid {
            position: relative;
            overflow: hidden;
            transition: filter 0.2s;
            z-index: 99;
        }

        .my-form button {
            font-weight: bold;
        }

        .my-form button > * {
            display: inline-block;
            width: 100%;
            transition: transform 0.4s ease-in-out;
        }

        .my-form button .back {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-110%, -50%);
        }

        .my-form button:enabled:hover .back,
        .my-form button:focus .back {
            transform: translate(-50%, -50%);
        }

        .my-form button:enabled:hover .front,
        .my-form button:focus .front {
            transform: translateX(110%);
        }


        /* CUSTOM CHECKBOX
        –––––––––––––––––––––––––––––––––––––––––––––––––– */
        .my-form input[type="checkbox"] {
            position: absolute;
            left: -9999px;
        }

        .my-form input[type="checkbox"] + label {
            position: relative;
            display: inline-block;
            padding-left: 2rem;
            transition: background 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25);
        }

        .my-form input[type="checkbox"] + label::before,
        .my-form input[type="checkbox"] + label::after {
            content: '';
            position: absolute;
        }

        .my-form input[type="checkbox"] + label::before {
            left: 0;
            top: 6px;
            width: 18px;
            height: 18px;
            border: 2px solid var(--primary) !important;
        }

        .my-form input[type="checkbox"]:checked + label::before {
            background: var(--red);
        }

        .my-form input[type="checkbox"]:checked + label::after {
            left: 7px;
            top: 7px;
            width: 6px;
            height: 14px;
            border-bottom: 2px solid var(--white);
            border-right: 2px solid var(--white);
            transform: rotate(45deg);
        }


        /* MQ
        –––––––––––––––––––––––––––––––––––––––––––––––––– */
        @media screen and (min-width: 600px) {
            .my-form .grid {
                display: grid;
                grid-gap: 1.5rem;
            }

            .my-form .grid-2 {
                grid-template-columns: 1fr 1fr;
            }

            .my-form .grid-3 {
                grid-template-columns: auto auto auto;
                align-items: center;
            }

            .my-form .grid > *:not(:last-child) {
                margin-bottom: 0;
            }

            .my-form .required-msg {
                display: block;
            }
        }

        @media screen and (min-width: 541px) {
            .my-form input[type="checkbox"] + label::before {
                top: 50%;
                transform: translateY(-50%);
            }

            .my-form input[type="checkbox"]:checked + label::after {
                top: 3px;
            }
        }

        /* FORM ELEMENTS
        –––––––––––––––––––––––––––––––––––––––––––––––––– */
        .my-form h1 {
            margin-bottom: 1.5rem;
        }

        .my-form li,
        .my-form .grid > *:not(:last-child) {
            margin-bottom: 1.5rem;
        }

        .my-form select,
        .my-form input,
        .my-form textarea,
        .my-form button {
            width: 100%;
            line-height: 1.5;
            padding: 15px 10px;
            border: 2px solid var(--greyligth);
            border-radius: 30px;
            color: var(--white);
            background: var(--bgFormEls);
            transition: background-color 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25),
            transform 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25);
        }

        .my-form textarea {
            height: 170px;
        }

        .my-form ::placeholder {
            color: inherit;
            /*Fix opacity issue on Firefox*/
            opacity: 1;
        }

        .my-form select:focus,
        .my-form input:focus,
        .my-form textarea:focus,
        .my-form button:enabled:hover,
        .my-form button:focus,
        .my-form input[type="checkbox"]:focus + label {
            background: var(--bgFormElsFocus);
        }

        .my-form select:focus,
        .my-form input:focus,
        .my-form textarea:focus {
            transform: scale(1.02);
        }

        .my-form *:required,
        .my-form select {
            background-repeat: no-repeat;
            background-position: center right 12px;
            background-size: 15px 15px;
        }

        .my-form *:required {
            background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/asterisk.svg);
        }

        .my-form select {
            background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/down.svg);
        }

        .my-form *:disabled {
            cursor: default;
            filter: blur(2px);
        }


        /* FORM BTNS
        –––––––––––––––––––––––––––––––––––––––––––––––––– */
        .my-form .required-msg {
            display: none;
            background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/asterisk.svg)
            no-repeat center left / 15px 15px;
            padding-left: 20px;
        }

        .my-form .btn-grid {
            position: relative;
            overflow: hidden;
            transition: filter 0.2s;
        }

        .my-form button {
            font-weight: bold;
        }

        .my-form button > * {
            display: inline-block;
            width: 100%;
            transition: transform 0.4s ease-in-out;
        }

        .my-form button .back {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-110%, -50%);
        }

        .my-form button:enabled:hover .back,
        .my-form button:focus .back {
            transform: translate(-50%, -50%);
        }

        .my-form button:enabled:hover .front,
        .my-form button:focus .front {
            transform: translateX(110%);
        }


        /* CUSTOM CHECKBOX
        –––––––––––––––––––––––––––––––––––––––––––––––––– */
        .my-form input[type="checkbox"] {
            position: absolute;
            left: -9999px;
        }

        .my-form input[type="checkbox"] + label {
            position: relative;
            display: inline-block;
            padding-left: 2rem;
            transition: background 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25);
        }

        .my-form input[type="checkbox"] + label::before,
        .my-form input[type="checkbox"] + label::after {
            content: '';
            position: absolute;
        }

        .my-form input[type="checkbox"] + label::before {
            left: 0;
            top: 6px;
            width: 18px;
            height: 18px;
            border: 2px solid var(--white);
        }

        .my-form input[type="checkbox"]:checked + label::before {
            background: var(--second);
        }

        .my-form input[type="checkbox"]:checked + label::after {
            left: 7px;
            top: 7px;
            width: 6px;
            height: 14px;
            border-bottom: 2px solid var(--white);
            border-right: 2px solid var(--white);
            transform: rotate(45deg);
        }


        /* MQ
        –––––––––––––––––––––––––––––––––––––––––––––––––– */
        @media screen and (min-width: 600px) {
            .my-form .grid {
                display: grid;
                grid-gap: 0rem;
            }

            .my-form .grid-2 {
                grid-template-columns: 1fr 1fr;
            }

            .my-form .grid-3 {
                grid-template-columns: auto auto auto;
                align-items: center;
            }

            .my-form .grid > *:not(:last-child) {
                margin-bottom: 0;
            }

            .my-form .required-msg {
                display: block;
            }
        }

        @media screen and (min-width: 541px) {
            .my-form input[type="checkbox"] + label::before {
                top: 50%;
                transform: translateY(-50%);
            }

            .my-form input[type="checkbox"]:checked + label::after {
                top: 3px;
            }
        }

        /*
        _________________________________ BOTON SOCIALES*/


        button {
            position: relative;
            display: inline-block;
            cursor: pointer;
            outline: none;
            border: 0;
            vertical-align: middle;
            text-decoration: none;
            background: transparent;
            padding: 0;
            font-size: inherit;
            font-family: inherit;
        }
        button.learn-more {
            width: 20rem;
            height: auto;
        }
        button.learn-more .circle {
            transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
            position: relative;
            display: block;
            margin: 0;
            width: 3rem;
            height: 3rem;
            background: #282936;
            border-radius: 1.625rem;
        }
        button.learn-more .circle .icon {
            transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
            position: absolute;
            top: 0;
            bottom: 0;
            margin: auto;
            background: #fff;
        }
        button.learn-more .circle .icon.arrow {
            transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
            left: 0.625rem;
            width: 1.125rem;
            height: 0.125rem;
            background: none;
        }
        button.learn-more .circle .icon.arrow::before {
            position: absolute;
            content: "";
            top: -0.25rem;
            right: 0.0625rem;
            width: 0.625rem;
            height: 0.625rem;
            border-top: 0.125rem solid #fff;
            border-right: 0.125rem solid #fff;
            transform: rotate(45deg);
        }
        button.learn-more .button-text {
            transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            padding: 0.75rem 0;
            margin: 0 0 0 1.85rem;
            color: var(--second);
            font-weight: 700;
            line-height: 1.6;
            text-align: center;
        }
        button:hover .circle {
            width: 100%;
        }
        button:hover .circle .icon.arrow {
            background: #fff;
            transform: translate(1rem, 0);
        }
        button:hover .button-text {
            color: #fff;
        }


        /*
        ____________________________ shadow effect*/


        /*==================================================
         * Effect 5
         * ===============================================*/
        .effect5
        {
            position: relative;
        }
        .effect5:before, .effect5:after
        {
            z-index: -1;
            position: absolute;
            content: "";
            bottom: 25px;
            left: 10px;
            width: 50%;
            top: 80%;
            max-width:300px;
            background: #777;
            -webkit-box-shadow: 0 35px 20px #777;
            -moz-box-shadow: 0 35px 20px #777;
            box-shadow: 0 35px 20px #777;
            -webkit-transform: rotate(-8deg);
            -moz-transform: rotate(-8deg);
            -o-transform: rotate(-8deg);
            -ms-transform: rotate(-8deg);
            transform: rotate(-8deg);
        }
        .effect5:after
        {
            -webkit-transform: rotate(8deg);
            -moz-transform: rotate(8deg);
            -o-transform: rotate(8deg);
            -ms-transform: rotate(8deg);
            transform: rotate(8deg);
            right: 10px;
            left: auto;
        }

        .box {
            width:70%;
            height:200px;
            background:#FFF;
            margin:40px auto;
        }

    </style>

</head>
<body>

<header style="background: url(./assets/image/bg-dialog-grey.png) top center no-repeat;" class="header-top-contact bg-light contacto-header">
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
                    <li class="nav-item">
                        <a class="nav-link text-secondary" aria-current="page" id="m3"  href="./sostenibilidad.php"><span class="text-grey">SOSTENIBILIDAD</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" aria-current="page" id="m4" href="#"><span class="text-grey">NOTICIAS</span></a>
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
    <div class="circule-back-header" style="background: url('./assets/image/bg-img1.png')">
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
                    <form class="my-form">
                        <div class="container">
                            <ul>

                                <li>
                                    <div class="grid grid-1">
                                        <label for="name" class="form-label text-grey">Nombre y apellido(s)*</label>
                                        <input type="text" id="name" placeholder="Nombre completo" required>
                                    </div>
                                </li>
                                <li>
                                    <div class="grid grid-1">
                                        <label for="name" class="form-label text-grey">Correo Electrónico*</label>
                                        <input type="email" id="name" placeholder="ejemplo@sudominio.com" required>
                                    </div>
                                </li>
                                <li>
                                    <div class="grid grid-1">
                                        <label for="empresa" class="form-label text-grey">Empresa*</label>
                                        <input type="text" id="empresa" placeholder="Empresa / orgainización" required>
                                    </div>
                                </li>
                                <li>
                                    <div class="grid grid-1">
                                        <label for="telefono" class="form-label text-grey">Número de Teléfono*</label>
                                        <input type="tel" id="telefono" placeholder="Eje. 55 5555 5555" required>
                                    </div>
                                </li>
                                <li>
                                    <label for="pais" class="form-label text-grey">País*</label>
                                    <select name="pais" id="pais">
                                        <option value="AF">Afganistán</option>
                                        <option value="AL">Albania</option>
                                        <option value="DE">Alemania</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AO">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AQ">Antártida</option>
                                        <option value="AG">Antigua y Barbuda</option>
                                        <option value="AN">Antillas Holandesas</option>
                                        <option value="SA">Arabia Saudí</option>
                                        <option value="DZ">Argelia</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AW">Aruba</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaiyán</option>
                                        <option value="BS">Bahamas</option>
                                        <option value="BH">Bahrein</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BB">Barbados</option>
                                        <option value="BE">Bélgica</option>
                                        <option value="BZ">Belice</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BM">Bermudas</option>
                                        <option value="BY">Bielorrusia</option>
                                        <option value="MM">Birmania</option>
                                        <option value="BO">Bolivia</option>
                                        <option value="BA">Bosnia y Herzegovina</option>
                                        <option value="BW">Botswana</option>
                                        <option value="BR">Brasil</option>
                                        <option value="BN">Brunei</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BF">Burkina Faso</option>
                                        <option value="BI">Burundi</option>
                                        <option value="BT">Bután</option>
                                        <option value="CV">Cabo Verde</option>
                                        <option value="KH">Camboya</option>
                                        <option value="CM">Camerún</option>
                                        <option value="CA">Canadá</option>
                                        <option value="TD">Chad</option>
                                        <option value="CL">Chile</option>
                                        <option value="CN">China</option>
                                        <option value="CY">Chipre</option>
                                        <option value="VA">Ciudad del Vaticano (Santa Sede)</option>
                                        <option value="CO">Colombia</option>
                                        <option value="KM">Comores</option>
                                        <option value="CG">Congo</option>
                                        <option value="CD">Congo, República Democrática del</option>
                                        <option value="KR">Corea</option>
                                        <option value="KP">Corea del Norte</option>
                                        <option value="CI">Costa de Marfíl</option>
                                        <option value="CR" selected>Costa Rica</option>
                                        <option value="HR">Croacia (Hrvatska)</option>
                                        <option value="CU">Cuba</option>
                                        <option value="DK">Dinamarca</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DM">Dominica</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egipto</option>
                                        <option value="SV">El Salvador</option>
                                        <option value="AE">Emiratos Árabes Unidos</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="SI">Eslovenia</option>
                                        <option value="ES">España</option>
                                        <option value="US">Estados Unidos</option>
                                        <option value="EE">Estonia</option>
                                        <option value="ET">Etiopía</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="PH">Filipinas</option>
                                        <option value="FI">Finlandia</option>
                                        <option value="FR">Francia</option>
                                        <option value="GA">Gabón</option>
                                        <option value="GM">Gambia</option>
                                        <option value="GE">Georgia</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GI">Gibraltar</option>
                                        <option value="GD">Granada</option>
                                        <option value="GR">Grecia</option>
                                        <option value="GL">Groenlandia</option>
                                        <option value="GP">Guadalupe</option>
                                        <option value="GU">Guam</option>
                                        <option value="GT">Guatemala</option>
                                        <option value="GY">Guayana</option>
                                        <option value="GF">Guayana Francesa</option>
                                        <option value="GN">Guinea</option>
                                        <option value="GQ">Guinea Ecuatorial</option>
                                        <option value="GW">Guinea-Bissau</option>
                                        <option value="HT">Haití</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HU">Hungría</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IQ">Irak</option>
                                        <option value="IR">Irán</option>
                                        <option value="IE">Irlanda</option>
                                        <option value="BV">Isla Bouvet</option>
                                        <option value="CX">Isla de Christmas</option>
                                        <option value="IS">Islandia</option>
                                        <option value="KY">Islas Caimán</option>
                                        <option value="CK">Islas Cook</option>
                                        <option value="CC">Islas de Cocos o Keeling</option>
                                        <option value="FO">Islas Faroe</option>
                                        <option value="HM">Islas Heard y McDonald</option>
                                        <option value="FK">Islas Malvinas</option>
                                        <option value="MP">Islas Marianas del Norte</option>
                                        <option value="MH">Islas Marshall</option>
                                        <option value="UM">Islas menores de Estados Unidos</option>
                                        <option value="PW">Islas Palau</option>
                                        <option value="SB">Islas Salomón</option>
                                        <option value="SJ">Islas Svalbard y Jan Mayen</option>
                                        <option value="TK">Islas Tokelau</option>
                                        <option value="TC">Islas Turks y Caicos</option>
                                        <option value="VI">Islas Vírgenes (EEUU)</option>
                                        <option value="VG">Islas Vírgenes (Reino Unido)</option>
                                        <option value="WF">Islas Wallis y Futuna</option>
                                        <option value="IL">Israel</option>
                                        <option value="IT">Italia</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Japón</option>
                                        <option value="JO">Jordania</option>
                                        <option value="KZ">Kazajistán</option>
                                        <option value="KE">Kenia</option>
                                        <option value="KG">Kirguizistán</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="LA">Laos</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LV">Letonia</option>
                                        <option value="LB">Líbano</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LY">Libia</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lituania</option>
                                        <option value="LU">Luxemburgo</option>
                                        <option value="MK">Macedonia, Ex-República Yugoslava de</option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MY">Malasia</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MV">Maldivas</option>
                                        <option value="ML">Malí</option>
                                        <option value="MT">Malta</option>
                                        <option value="MA">Marruecos</option>
                                        <option value="MQ">Martinica</option>
                                        <option value="MU">Mauricio</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="YT">Mayotte</option>
                                        <option value="MX">México</option>
                                        <option value="FM">Micronesia</option>
                                        <option value="MD">Moldavia</option>
                                        <option value="MC">Mónaco</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="MS">Montserrat</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="NA">Namibia</option>
                                        <option value="NR">Nauru</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NI">Nicaragua</option>
                                        <option value="NE">Níger</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NU">Niue</option>
                                        <option value="NF">Norfolk</option>
                                        <option value="NO">Noruega</option>
                                        <option value="NC">Nueva Caledonia</option>
                                        <option value="NZ">Nueva Zelanda</option>
                                        <option value="OM">Omán</option>
                                        <option value="NL">Países Bajos</option>
                                        <option value="PA">Panamá</option>
                                        <option value="PG">Papúa Nueva Guinea</option>
                                        <option value="PK">Paquistán</option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Perú</option>
                                        <option value="PN">Pitcairn</option>
                                        <option value="PF">Polinesia Francesa</option>
                                        <option value="PL">Polonia</option>
                                        <option value="PT">Portugal</option>
                                        <option value="PR">Puerto Rico</option>
                                        <option value="QA">Qatar</option>
                                        <option value="UK">Reino Unido</option>
                                        <option value="CF">República Centroafricana</option>
                                        <option value="CZ">República Checa</option>
                                        <option value="ZA">República de Sudáfrica</option>
                                        <option value="DO">República Dominicana</option>
                                        <option value="SK">República Eslovaca</option>
                                        <option value="RE">Reunión</option>
                                        <option value="RW">Ruanda</option>
                                        <option value="RO">Rumania</option>
                                        <option value="RU">Rusia</option>
                                        <option value="EH">Sahara Occidental</option>
                                        <option value="KN">Saint Kitts y Nevis</option>
                                        <option value="WS">Samoa</option>
                                        <option value="AS">Samoa Americana</option>
                                        <option value="SM">San Marino</option>
                                        <option value="VC">San Vicente y Granadinas</option>
                                        <option value="SH">Santa Helena</option>
                                        <option value="LC">Santa Lucía</option>
                                        <option value="ST">Santo Tomé y Príncipe</option>
                                        <option value="SN">Senegal</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leona</option>
                                        <option value="SG">Singapur</option>
                                        <option value="SY">Siria</option>
                                        <option value="SO">Somalia</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="PM">St Pierre y Miquelon</option>
                                        <option value="SZ">Suazilandia</option>
                                        <option value="SD">Sudán</option>
                                        <option value="SE">Suecia</option>
                                        <option value="CH">Suiza</option>
                                        <option value="SR">Surinam</option>
                                        <option value="TH">Tailandia</option>
                                        <option value="TW">Taiwán</option>
                                        <option value="TZ">Tanzania</option>
                                        <option value="TJ">Tayikistán</option>
                                        <option value="TF">Territorios franceses del Sur</option>
                                        <option value="TP">Timor Oriental</option>
                                        <option value="TG">Togo</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TT">Trinidad y Tobago</option>
                                        <option value="TN">Túnez</option>
                                        <option value="TM">Turkmenistán</option>
                                        <option value="TR">Turquía</option>
                                        <option value="TV">Tuvalu</option>
                                        <option value="UA">Ucrania</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistán</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VE">Venezuela</option>
                                        <option value="VN">Vietnam</option>
                                        <option value="YE">Yemen</option>
                                        <option value="YU">Yugoslavia</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabue</option>
                                    </select>
                                </li>
                                <li>
                                    <label for="name" class="form-label text-grey">Tipo de Sector*</label>
                                    <select>
                                        <option selected disabled>Elija uno</option>
                                        <option>SUPERMERCADO</option>
                                        <option>MADURADOR</option>
                                        <option>DISTRIBUIDOR</option>
                                        <option>CONSUMIDOR</option>
                                        <option>OTROS</option>
                                    </select>
                                </li>
                                <li>
                                    <label for="name" class="form-label text-grey">Comentario adicional</label>
                                    <textarea placeholder="Escriba un comentario adicional"></textarea>
                                </li>
                                <li>
                                    <input type="checkbox" id="terms">
                                    <label for="terms" class="form-label text-grey">He leido y acepto
                                        <a class="linkfooter" href="">términos y condiciones.</a>
                                    </label>
                                </li>
                                <li>
                                    <div class="grid grid-3">
                                        <div class="required-msg">Requerido</div>
                                        <button class="btn-grid" type="submit" disabled>
                                                <span class="back">
                                                  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/email-icon.svg" alt="">
                                                </span>
                                                <span class="front">Enviar</span>
                                        </button>
                                        <button class="btn-grid" type="reset" disabled>
                                            <span class="back">
                                              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/eraser-icon.svg" alt="">
                                            </span>
                                            <span class="front">Limpiar</span>
                                        </button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </form>
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
    <div class="cont-limine footer-img-contacto" style="background: url(./assets/image/img-footer--cntact.png);">
        <div class="h-300">
        </div>
    </div>
</section>
<section>
    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1DLtvl3dQSV8XwM6xBEgUFvo7FPLvDCQ0" width="100%" height="500"></iframe>
</section>


<?php include_once "./include/footer.php" ?>
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

