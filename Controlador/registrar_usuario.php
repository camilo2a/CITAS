<?php
require_once('../Modelo/Usuarios.php');
if($_POST){
    $ModeloUsuario=new Usuario();
    $correoUsuario=$_POST["correoUsuario"]; 
    $passwordUsuario=$_POST["passwordUsuario"];
    $estadoUsuario=$_POST["estadoUsuario"];
    $IdRolFK=$_POST["IdRolFK"];
    $ModeloUsuario->Agregar($correoUsuario, $passwordUsuario, $estadoUsuario, $IdRolFK); 
    }
    else{ 
        header('Location:../Vista/Usuarios.php');
    }
?>