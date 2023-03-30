<?php

$hostname="localhost";
$nombreUsuario="root";
$contraseña=                                                                                                                                                     "Abielero12@";
$bd="perros";
$nombreConexion = mysqli_connect($hostname , $nombreUsuario , $contraseña,$bd);


mysqli_select_db ($nombreConexion, $bd);

$result = mysqli_query($nombreConexion, "SELECT * FROM perros");

$extraido = mysqli_fetch_all($result, MYSQLI_ASSOC);

//var_dump($extraido);
//var_dump($result);

$found_key = array_search('boxer', array_column($extraido, 'nombre_raza'));
$url = $extraido[$found_key] ["URL"];
$perrito = $extraido[$found_key] ['nombre_raza'];
echo "<h1>$perrito</h1>";
echo "<img src='$url'>";


mysqli_close($nombreConexion);
?>