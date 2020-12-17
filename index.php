<?php

require __DIR__ . "/vendor/autoload.php";

$parse = new Parsedown();

$text = file_get_contents(__DIR__ . "/posts/2020-11-22-tenha-juizo.md");

echo $parse->text($text);