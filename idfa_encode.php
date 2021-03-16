<?php
$idfa = "5ab8d1be-0f17-401c-891f-54dde5bf3d1d";
$hash = hash('sha256', strtolower(utf8_encode($idfa)));
$firstFourChar = substr($hash, 0, 4);
echo $firstFourChar. PHP_EOL;
$hexdec = hexdec($firstFourChar);
echo $hexdec. PHP_EOL;
$module = (int)$hexdec % 10;
echo  $module;
