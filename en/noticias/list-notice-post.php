<?php
// agregar las noticias de mayor a menor, la noticia principal o actual va hasta arriba
$listNotices = [
    [
        'id' => 4,
        'category' => 'Tecnología',
        'date' => 'Jul 2021',
        'link' => '../jul-2021',
        'titulo' => 'GRUPO ESFUERZO LANZA NUEVO SITIO WEB',
        'preview_text' => 'Como un esfuerzo alineado a su estrategia comercial y de la mano de acciones para ampliar su presencia en el mercado bananero global, Grupo Esfuerzo estrenó su nuevo sitio web...'
    ],
    [
        'id' => 3,
        'category' => 'Social',
        'date' => 'Jun 2021',
        'link' => '../jun-2021',
        'titulo' => 'GRUPO ESFUERZO PARTICIPA EN LA CONSTRUCCIÓN DE DIQUE',
        'preview_text' => 'Luego de que, en 2017, el Grupo Esfuerzo adquiriera una finca en la comunidad de Bristol en Matina de Limón...'
    ],
    [
        'id' => 2,
        'category' => 'Gobernanza ',
        'date' => 'May 2021',
        'link' => '../may-2021',
        'titulo' => 'GRUPO ESFUERZO AMPLÍA SU PRESENCIA EN EL MERCADO BANANERO CON LA ADQUISICIÓN DE DOS FINCAS MÁS.',
        'preview_text' => 'En diciembre del 2020, el Grupo Esfuerzo, decidió ampliar su presencia en el mercado bananero con la adquisición de dos nuevas fincas para alcanzar un área total de 960 hectáreas...'
    ],
    [
        'id' => 1,
        'category' => 'Gobernanza ',
        'date' => 'Apr 2021',
        'link' => '../abril-2021',
        'titulo' => 'CAMIONES DE GRUPO ESFUERZO AHORA CUENTAN AHORA CUENTAN CON MONITOREO POR GPS',
        'preview_text' => 'Gracias a un Sistema de Posicionamiento Global (GPS), todos los camiones del Grupo Esfuerzo cuentan con monitoreo en tiempo real desde el 19 de mayo anterior....'
    ]
//add new notice
];
$result = json_encode($listNotices);
echo $result;