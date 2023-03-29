<?php
$arrayassociativo=file_get_contents("listaperrosjson.json");
$decode_array_asociativo=json_decode($arrayassociativo,true);

// echo "<pre>";
// var_dump($decode_array_asociativo);
// echo "</pre>";

$mensaje=$decode_array_asociativo["message"];
$array=[];
foreach ($mensaje as $key => $value) {
    $arrayassociativo2=file_get_contents("https://dog.ceo/api/breed/$key/images/random");
    $decode_array_asociativo2=json_decode($arrayassociativo2,true);
    $url= $decode_array_asociativo2["message"];
    $array [$key] = $url;

}
echo "<pre>";
// var_dump($array);
echo "</pre>";



var_dump(json_encode($array));



?>