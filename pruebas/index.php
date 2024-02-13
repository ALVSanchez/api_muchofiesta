<?php

header('Content-type: application/json');

$pruebas = json_decode(file_get_contents("../pruebas.json"));
$indice_prueba = array_rand($pruebas);
foreach($pruebas as $i=>$prueba) {
    $prueba->id = $i;
}
$prueba->id = $indice_prueba;
$json_prueba = json_encode($prueba, true);

print(json_encode($pruebas));

?>