<?php
$config = 'tsconfig.json';
$configuracionDb = json_decode(file_get_contents($config));

$hostname = $configuracionDb->dbOptions->hostname;
$username = $configuracionDb->dbOptions->username;
$password = $configuracionDb->dbOptions->password;
$database = $configuracionDb->dbOptions->database;
$conexionSQL = mysqli_connect($hostname, $username, $password, $database);

//$conexionSQL = mysqli_connect("127.0.0.1", "root", "", "telefonia");

$resultado = mysqli_query($conexionSQL, "SELECT * FROM usuario");
$registros = [];
while ($unaFila = mysqli_fetch_assoc($resultado)) {
    $registros[] = $unaFila;//array_push($data,$unaFila);
}
echo json_encode($registros);
mysqli_close($conexionSQL);
