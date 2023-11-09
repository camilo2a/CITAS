<?php
require_once('../Modelo/Usuarios.php');
if($_POST){
    $ModeloUsuario=new Usuario();
    $correoUsuario=$_POST["correoUsuario"]; 
    $passwordUsuario=$_POST["passwordUsuario"];
    $estadoUsuario=$_POST["estadoUsuario"];
    $IdRolFK=$_POST["IdRolFK"];
    $idUsuario=$_POST["idUsuario"];
    $ModeloUsuario->Actualizar($correoUsuario, $passwordUsuario, $estadoUsuario, $IdRolFK, $idUsuario); 
    }else{
        header('Location:../Vista/Usuarios.php');
    }
?>