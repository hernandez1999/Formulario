<?php

$conexion = mysqli_connect("localhost", "root", "mysql2018", "ud", "3306");

//Para busqueda de datos

$cadena = "SELECT usuario, clave FROM usuario";

//Guardar el registro 

$resultado=mysqli_query($conexion, $cadena);

if(mysqli_num_rows($resultado) >0){
   while($registro = mysqli_fetch_assoc($resultado))  
       echo 'Usuario: '.$registro["usuario"];
}else{
    echo 'Existen 0 registros';
}

if($_REQUEST["usuario"] == $registro["usuario"] && $_REQUEST["clave"] == $registro["clave"]){
        echo 'Ha entrado con exito';
}




