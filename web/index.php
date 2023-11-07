<?php
$version = "unknown";
if (is_file(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'tags.txt')) {
    $version = file_get_contents(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'tags.txt');
}

printf("<p>Current tag version is: %s</p>", $version);
