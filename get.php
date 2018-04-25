<?php
$date = date("d.m.y");
$time = date("H:i:s");

//http://10.0.0.1:80/watchdogs/get.php?mac=60:01:94:08:3a:36&counterDirect=5&counterReverse=13

if ($mac = $_GET['mac']) {
    $f = fopen(__DIR__."/logs/".$mac.".log", "a+");
    fwrite($f, "$date|$time|".$_GET['counterDirect']."|".$_GET['counterReverse'].PHP_EOL);
    fclose($f);
    $f = fopen(__DIR__."/logs/reload", "a+");
    fclose($f);
}
?>
