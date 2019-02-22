<?php
function connectDB(){
    $server = "http://ec2-52-35-30-87.us-west-2.compute.amazonaws.com:8889/";
    $user = "root";
    $pass = "root";
    $bd = "ladelmario";
    $conexion = mysqli_connect($server, $user, $pass,$bd) 
        or die("No se puede conectar a base de datos");

    return $conexion;
} 

$insert = "INSERT INTO usuarios ('', 'nombre', 'correo', 'descripcion')
VALUES ('$nombre', '$correo', '$des')";

if ($connectDB->query($insert) === TRUE) {
    echo "Ya eres MRJENKINS";
} else {
    echo "Error: " . $insert . "<br>" . $connectDB->error;
}
