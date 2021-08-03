<?php
// agregar las noticias de mayor a menor, la noticia principal o actual va hasta arriba
$listNotices = [
    [
        'id' => 4,
        'category' => 'Tecnology',
        'date' => 'Jul 2021',
        'link' => '../jul-2021',
        'titulo' => 'GRUPO ESFUERZO LAUNCHES A NEW WEBSITE',
        'preview_text' => 'As part of an effort cnsistent with its commercial strategy and in line with actions to expand its 
        presence in the global banana market, Grupo Esfuerzo launched its new website...'
    ],
    [
        'id' => 3,
        'category' => 'Social',
        'date' => 'Jun 2021',
        'link' => '../jun-2021',
        'titulo' => 'GRUPO ESFUERZO PARTICIPATES IN THE CONSTRUCTION OF A DAM',
        'preview_text' => ' After Grupo Esfuerzo acquired a farm in the community of Bristol in Matina de Limón in 2017...'
    ],
    [
        'id' => 2,
        'category' => 'Governance ',
        'date' => 'May 2021',
        'link' => '../may-2021',
        'titulo' => 'GRUPO ESFUERZO EXPANDS ITS PRESENCE IN THE BANANA MARKET WITH THE ACQUISITION OF TWO MORE FARMS ',
        'preview_text' => 'In December 2020, Grupo Esfuerzo decided to expand its presence in the banana market with the acquisition of two new farms to 
        reach a total area of 960 hectares...'
    ],
    [
        'id' => 1,
        'category' => 'Governance ',
        'date' => 'Apr 2021',
        'link' => '../abril-2021',
        'titulo' => 'OUR TRUCKS AT GRUPO ESFUERZO NOW HAVE GPS MONITORING FOR INCREASED SECURITY',
        'preview_text' => 'Thanks to a Global Positioning System (GPS), all of Grupo Esfuerzo´s trucks are
        monitored in real-time since May 19... '
    ]
//add new notice
];
$result = json_encode($listNotices);
echo $result;