<?php

$link = 'mysql:host=localhost;dbname=apibasica';
$user = 'root';
$pass = 'root';

try{

    $pdo = new PDO($link,$user,$pass);
    // echo 'Conectado';

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
