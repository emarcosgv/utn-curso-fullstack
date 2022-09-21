<?php

$conexionSQL = mysqli_connect("127.0.0.1", "root", "", "telefonia");
if ($conexionSQL) {
    echo "conexión exitosa.";
} else {
    echo "Error en la conexión a la base de datos.";
}
echo "<br>";
$resultado = mysqli_query($conexionSQL, "select * from usuario");

while ($unaFila = mysqli_fetch_assoc($resultado)) {
    print_r($unaFila);
    echo "<br>";
}


echo "<br>";
//var_dump($resultado);
$nombres = ["Juan Ignacio", "Franco", "Ulises", "Aylen"];
print_r($nombres);
echo "<br>";
//echo $nombres[4];
echo "<br>";
//agregar elemento al array
$nombres[] = "Gonzalo";//array_push($nombres, "Gonzalo");
echo "<br>";
$cantidadDeRegistros = count($nombres);
$i = 0;
for ($i; $i < $cantidadDeRegistros; $i++) {
    echo $nombres[$i];
    echo "<br>";
}

foreach ($nombres as $nombre) {
    echo "$nombre";
    echo "<br>";
}
//mysqli_close($conexionSQL);
//Array asociativo
$datosPersonales = ["nombre" => "Marcos", "apellido" => "Villalba", "edad" => "39"];
//echo $datosPersonales;
echo "<br>";
//forma de acceso a clave
echo $datosPersonales["apellido"];

foreach ($datosPersonales as $clave => $valor) {

    echo $clave . ":" . $valor;

}