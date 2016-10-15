<?php
header('charset: UTF-8');
$url = "http://www.berlin.de/umwelt/themen/abfall/verschenken-statt-wegwerfen/index.php/index/all.json";
if(!empty($_GET['q'])){
    $json = file_get_contents($url . "?q=" . $_GET['q']);
    read_json($json);
} else {
    $json = file_get_contents($url);
    read_json($json);
}

// Read Json and print better Json
function read_json($json){
    $object = json_decode($json, true);
    if($object['results']['count'] === 0){
        echo("False");
        die();
    }
    $final_json = [];

    foreach($object['index'] as $item){
        $final_array['name'] = "Keine Angabe";
        $final_array['gueter'] = "Keine Angabe";
        $final_array['transport'] = "Keine Angabe";
        $final_array['time'] = "Keine Angabe";
        $final_array['street'] = "Keine Angabe";

        if(!empty($item['name'])) $final_array['name'] = $item['name'];
        if(!empty($item['gueter'])) $final_array['gueter'] = $item['gueter'];
        if(!empty($item['transport'])) $final_array['transport'] = $item['transport'];
        if(!empty($item['zeit'])) $final_array['time'] = $item['zeit'];
        if(!empty($item['adresse'])) $final_array['street'] = $item['adresse'];
        array_push($final_json, $final_array);
    }
    echo(json_encode($final_json));
}