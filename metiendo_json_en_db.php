<?php
$file=file_get_contents("listadoperrosjsondef.json");
$decode=json_decode($file,true);
//var_dump($decode);
$decodefinal=$decode["mensaje"];


$hostname="localhost";
$nombreUsuario="root";
$contraseña="root";
$bd="perros";
$nombreConexion = mysqli_connect($hostname , $nombreUsuario , $contraseña,$bd);


mysqli_select_db ($nombreConexion, $bd);



foreach ($decodefinal as $key => $value) {
    $result = mysqli_query($nombreConexion, "INSERT INTO Perros(nombre_raza,URL) VALUES('$key','$value')");
    var_dump($result);
}
//VAR_DUMP($decodefinal);




?>