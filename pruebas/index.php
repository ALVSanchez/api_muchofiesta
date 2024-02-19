<?php

header('Content-type: application/json');

$pruebas = json_decode(file_get_contents("../pruebas.json"));
$indice_prueba = array_rand($pruebas);
foreach($pruebas as $i=>$prueba) {
    $prueba->id = $i;
}
$json_prueba = json_encode($pruebas, true);

print($json_prueba);


?>