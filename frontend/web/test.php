<?php

$log = fopen(dirname(dirname(__DIR__)) . '/vagrant/down.log', "r");
if ($log) {
    while (!feof($log)) {
        $info = fgets($log, 1024);
        if ($info) {
            $info = explode('|', $info);
            down($info[0], trim($info[1]));
        }
    }
}

function down($name, $url)
{
    $write = dirname(dirname(__DIR__)) . '/vagrant/mp3/' . $name . '.mp3';
    $file  = fopen($url, "rb");
    if ($file) {
        $writeFile = fopen($write, "wb");
        if ($writeFile) {
            while (!feof($file)) {
                fwrite($writeFile, fread($file, 1024 * 8), 1024 * 8);
            }
        }
    }
    if ($file) {
        fclose($file);
    }
    if ($writeFile) {
        fclose($writeFile);
    }
}

?>