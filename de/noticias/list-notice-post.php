<?php
// agregar las noticias de mayor a menor, la noticia principal o actual va hasta arriba
$listNotices = [
    [
        'id' => 4,
        'category' => 'Tecnología',
        'date' => 'Jul 2021',
        'link' => '../jul-2021',
        'titulo' => 'GRUPO ESFUERZO SCHUF NEUE WEBSEITE',
        'preview_text' => 'Als eine Bemühung im Einklang mit ihrer Geschäftsstrategie und mit Aktionen, um ihre Präsenz auf dem globalen Bananenmarkt auszubauen, hat Grupo Esfuerzo im Juni dieses Jahres ihre neue Website veröffentlicht...'
    ],
    [
        'id' => 3,
        'category' => 'Sozial',
        'date' => 'Jun 2021',
        'link' => '../jun-2021',
        'titulo' => 'GRUPO ESFUERZO NIMMT TEIL BEIM AUFBAU EINES DAMMS UM',
        'preview_text' => 'Nachdem Grupo Esfuerzo einen Grundstück in der Bristol Gemeinde in Matina von Limón in 2017...'
    ],
    [
        'id' => 2,
        'category' => 'Gobernanza ',
        'date' => 'Mai 2021',
        'link' => '../may-2021',
        'titulo' => 'GRUPO ESFUERZO AUSWEITET IHRE PRÄSENZ AUF DEM BANANENMARKT MIT DEM ANKAUF VON ZWEI WEITEREN GRUNDSTÜCKEN.',
        'preview_text' => 'In Dezember 2020 hat Grupo Esfuerzo entschieden, ihre Präsenz auf dem Bananenmarkt mit dem Ankauf zweier Grundstücke zu erweitern. Damit erreichen sie eine Gesamtfläche von 960 Hektar...'
    ],
    [
        'id' => 1,
        'category' => 'Gobernanza ',
        'date' => 'Apr 2021',
        'link' => '../abril-2021',
        'titulo' => 'LASTWAGEN VON GRUPO ESFUERZO RECHNEN JETZT MIT GPS ÜBERWACHUNG FÜR MEHR SICHERHEIT.',
        'preview_text' => 'Infolge des Geographysches Positionierungs System (GPS), alle LKWs von Grupo Esfuerzo rechnen seit dem letzten 19. Mai mit...'
    ]
//add new notice
];
$result = json_encode($listNotices);
echo $result;