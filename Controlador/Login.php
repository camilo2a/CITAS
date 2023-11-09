<?php
session_start();
require_once('../Modelo/Login.php');
if($_POST){
    $Usuario = $_POST['correo'];
    $Password = $_POST['password'];
    
    $model = new Login();
    $entrada= $model->login($Usuario, $Password);
    if ($entrada !=false){

      $model->validateSessionAdmin();
      
      $model->validateSessionClie();


        //header ('Location: ../Vista/Menu.php');

    }
    else {
      header('Location: ../Vista/Login.php');
    }
}
?>