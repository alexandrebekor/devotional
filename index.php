<?php

require __DIR__ . "/vendor/autoload.php";

//$parse = new Parsedown();

//$text = file_get_contents(__DIR__ . "/posts/2020-11-22-tenha-juizo.md");

//echo $parse->text($text);

$version = "nvi";

$abbrev = filter_input(INPUT_GET, "abbrev");
$chapter = filter_input(INPUT_GET, "chapter");

require __DIR__ . "/views/formSearchAPI.php";

if($abbrev && $chapter){
    $url = "https://www.abibliadigital.com.br/api/verses/{$version}/{$abbrev}/{$chapter}";
    
    $json = json_decode(file_get_contents($url));
    echo "<h1>{$abbrev} - {$chapter}</h1>";
    foreach($json->verses as $verse){
        echo "<p><sup>{$verse->number}</sup> {$verse->text}</p>";
    }
}

require_once __DIR__ . "/views/formDevotional.php";