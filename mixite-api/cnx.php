<?php

ini_set('display_errors', 'On');

$parameters = parse_ini_file("param/param.ini");

$pdo = new PDO(
    $parameters['dsn'],
    $parameters['user'],
    $parameters['psw'],
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
);

$host = $parameters['host'];