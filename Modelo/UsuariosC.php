<?php
require_once('Conexion.php');
require_once('Login.php');
class Usuario{
    private $pdo;//VARIABLE PARA CONEXION
    public $idUsuario;
    public $correoUsuario;
    public $passwordUsuario;
    public $estadoUsuario;
    public $IdRolFK;
    

    public function __CONSTRUCT()
    {
    try 
        {
            $this->pdo = Conexion::StartUp(); //SE CONECTA A LA BASE DE DATOS A TRAVES DE LA FUNCION STARTUP
        } 
    catch (Exception $e) 
        {   echo "HAY PROBLEMAS DE CONEXION";
            die($e->getMessage());
        }
    }
    public function Listar(){
        $rows=null;
        $stm=$this->pdo->prepare("select * from usuario");
        $stm->execute();
        while($result=$stm->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }
    public function Agregar($correoUsuario, $passwordUsuario, $estadoUsuario, $IdRolFK){
        $stm=$this->pdo->prepare("Insert into usuario (correoUsuario, passwordUsuario, estadoUsuario, IdRolFK) values (:correoUsuario, :passwordUsuario, :estadoUsuario, :IdRolFK)");
        $stm->bindParam(':correoUsuario',$correoUsuario);
        $stm->bindParam(':passwordUsuario',$passwordUsuario);
        $stm->bindParam(':estadoUsuario',$estadoUsuario);
        $stm->bindParam(':IdRolFK',$IdRolFK);
        if($stm->execute()){ 
                header('Location:../../index.php'); 
             }
        else {   
                header('Location:../Vista/registrar_usuarioC.php');
            }

             
    }

 }
?>