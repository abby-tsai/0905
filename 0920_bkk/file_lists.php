<?php

$dir = __DIR__;
$files = scandir($dir);

$url = '<a href="http://design.fto.local/%1s" target="_blank">%1s</a>';
$php_list = [];
foreach ($files as $file) {
    $array = explode('.', $file);
    $extension = end($array);
    if ($extension === 'php') {
        echo sprintf($url, $file, $file) . '<br>';
    }
}
