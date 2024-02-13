<?php

header('Content-type: application/json');

$pruebas = json_decode(file_get_contents("../pruebas.json"));
//var_dump($pruebas);
$indice_prueba = array_rand($pruebas);
$prueba = $pruebas[$indice_prueba];
$prueba->id = $indice_prueba;
$json_prueba = json_encode($prueba, true);

print(json_encode($prueba));

?>