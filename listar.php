<?php

$conexionSQL = mysqli_connect("127.0.0.1", "root", "", "telefonia");

$resultado = mysqli_query($conexionSQL, "SELECT * FROM usuario");
$data = [];
while ($unaFila = mysqli_fetch_assoc($resultado)) {
    $data[] = $unaFila;
}
echo json_encode($data);
