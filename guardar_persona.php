<?php

//Datos de conexion
$host="localhost";//ip, maquina
$user="root";
$password="";
$base="personas";
//Puerto por defecto el, 3306;

//crear Conexion
$con= new mysqli($host,$user,$password,$base);

//Prueba de conexion
if($con->connect_error){
    // ->, accede a connect-error
    echo "| Error de conexion |";
}else{
    echo "| Conectado a la BSD |<br>";
}
//Tomar, recuperar datos
$nombre=$_POST["nombre"];
$email=$_POST["email"];

//echo "Informacion enviada:<br>Nombre:$nombre <br>Email:$email ";
$query="insert into personas(nombre,email) values('$nombre','$email')";
$con->query($query);
/*if($con->query($query)){//$con->query($query)==true
    echo "Persona Guardada";
}else{
    echo "No se ha podido guardar:<br>".$con->error;
}
*/
$con->close();
header('location: crear.php');
?>
