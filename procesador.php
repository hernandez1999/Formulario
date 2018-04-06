<?php

$conexion = mysqli_connect("localhost", "root", "mysql2018", "ud", "3306");

//Para busqueda de datos

$cadena = "SELECT usuario, clave FROM usuario";

//Guardar el registro 
 if(mysqli_num_rows($resultado)>0)
{
    $registro= mysqli_fetch_assoc($resultado);      
        if($_REQUEST["usuario"]==$registro["nombre"] && $_REQUEST["clave"]==$registro["clave"])
        {
            echo "Bienvenido a Universidad";
            echo "Le recordamos sus datos: "
            echo "<br>usuario: ".$registro["nombre"];
            echo "<br>clave: ".$registro["clave"];
        }else{
            echo"Usuario o contraseña incorrecta";
            echo"<br>Intente de nuevo";
        }
}else{
    echo"Existen 0 registros";
}

