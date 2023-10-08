<?php

$host = "localhost";
$user = "root";
$pass = "";
$bd = "ecommerce";

$conexion = new mysqli($host,$user,$pass,$bd);

if(!$conexion){
    echo "la cagaste";
}


?>