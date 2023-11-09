<?php
session_start();//se incia sesion para el manejo de usuarios 
require_once('Conexion.php');
class Login {
	private $pdo;//variable para conexion 
	//constructor
	public function __construct()
	{
		try 
		{
			$this ->pdo = Conexion::StartUp();//se conecta a la base de datos a traves de la funcion startup
		}
		catch(Exception $e)
		{ echo "HAY PROBLEMAS DE CONEXION";
		die($e ->getMessage()); 
		}

}
//esta funcion consulta en la tabla usuario pasando como parametros el usuario y la contraseña
public function login($Usuario,$Password){
	$stm =$this ->pdo->prepare("SELECT * FROM usuario WHERE correoUsuario=:CorreoU AND passwordUsuario =:PasswordU");
	$stm ->bindParam(':CorreoU',$Usuario);
	$stm ->bindParam(':PasswordU',$Password);
	$stm ->execute();
	if ($stm->rowCount()== 1){
		$result=$stm->fetch();
		// se inicia la variable $_session para tomar los datos de la base en el arreglo result 
		$_SESSION['Nombre ']=$result["Nombre"]." ".$result['Apellido'];
		$_SESSION['idUsuario']=$result['idUsuario'];
		$_SESSION['IdRolFK']=$result['IdRolFK'];
		
		//devuelve el id para saber si encontro al usuario 
		return $result ['idUsuario'];
	}
	//de lo contrario devolver falso
	return false;

}
public function validateSession(){
	if ($_SESSION['idUsuario']== null){
		header('Location: Login.php');
	}
} 

public function validateSessionAdmin(){
	if($_SESSION["IdRolFK"]==3){
		header("Location: ../Vista/MenuA.php");
	}
	else if ($_SESSION["IdRolFK"]==2) {
		header("Location: ../Vista/indexC.php");
	}
	else if($_SESSION["IdRolFK"]==1){
		header("Location: ../Vista/MenuE.php");
	}
	else {
		header("Location: ../Vista/Login.php");
	}
}

//public function validateSessionClie(){
//	if($_SESSION["IdRolFK"]==2){
//		header("Location: ../Vista/indexC.php");
//	}
//	else{
//		header("Location: ../Vista/Login.php");
//	}
//}


public function GetIdUsuario(){
	return $_SESSION["idUsuario"];

}
}

?>