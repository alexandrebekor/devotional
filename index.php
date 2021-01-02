<?php

require __DIR__ . "/vendor/autoload.php";

//$parse = new Parsedown();

//$text = file_get_contents(__DIR__ . "/posts/2020-11-22-tenha-juizo.md");

//echo $parse->text($text);

$version = "nvi";

$abbrev = filter_input(INPUT_GET, "abbrev");
$chapter = filter_input(INPUT_GET, "chapter");

require __DIR__ . "/views/form.php";

if($abbrev && $chapter){
    $url = "https://www.abibliadigital.com.br/api/verses/{$version}/{$abbrev}/{$chapter}";
    
    $json = json_decode(file_get_contents($url));
    foreach($json->verses as $verse){
        echo "<p>{$verse->number}: {$verse->text}</p>";
    }
}