<?php
function connectDB(){
    $server = "http://ec2-52-35-30-87.us-west-2.compute.amazonaws.com:8889/";
    $user = "";
    $pass = "";
    $bd = "ladelmario";
    $conexion = mysql_connect($server, $user, $pass,$bd) 
        or die("No se puede conectar a base de datos");

    return $conexion;
} 
?>
<?php
$lafuncion = connectDB();
if ($lafuncion == true) 
{ 
   echo "conectado"; 
} 
else 
{ 
  echo "desconectado"; 
}  

/*if($submit == "Registrar"){
    connectDB();
$insert = "INSERT INTO usuarios ('id', 'nombre', 'correo', 'descripcion')
VALUES ('$id','$nombre', '$correo', '$des')";
if ($insert == TRUE) {
    echo "Ya eres MRJENKINS";
} else {
    echo "Error: " . $insert . "<br>" . $connectDB->error;
}
}*/
