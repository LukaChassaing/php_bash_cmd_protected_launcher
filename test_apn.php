<?php
error_reporting(E_ALL);

$output = array();
exec('sudo bash -c "nmcli con"', $output);
var_dump($output);

$stringToWrite = "";
foreach ($output as $key => $ligne) {
    $stringToWrite .= $ligne."\n";
}

file_put_contents("/var/www/html/apn.txt", $stringToWrite);