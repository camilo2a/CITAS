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
    //public function Listar(){
      //  $rows=null;
        //$stm=$this->pdo->prepare("CALL sp_consultar_usuario()");
        //$stm->execute();
        //while($result=$stm->fetch()){
          //  $rows[]=$result;
        //}
        //return $rows;
   // }
    public function Agregar($correoUsuario, $passwordUsuario, $estadoUsuario, $IdRolFK){
        $stm=$this->pdo->prepare("Insert into usuario (correoUsuario, passwordUsuario, estadoUsuario, IdRolFK) values (:correoUsuario, :passwordUsuario, :estadoUsuario, :IdRolFK)");
        $stm->bindParam(':correoUsuario',$correoUsuario);
        $stm->bindParam(':passwordUsuario',$passwordUsuario);
        $stm->bindParam(':estadoUsuario',$estadoUsuario);
        $stm->bindParam(':IdRolFK',$IdRolFK);
        if($stm->execute()){ 
           
                header('Location:../Vista/Usuarios.php'); 
             }
        else {   
                header('Location:../Vista/registrar_usuario.php');
            }

             
    }

//METODO PARA OBTENER EL ID DE UN USUARIO
public function Obtener($idUsuario){
    $rows=null;
    $stm=$this->pdo->prepare("SELECT * FROM usuario where idUsuario=:idUsuario");
    $stm->bindParam('idUsuario', $idUsuario);
    $stm->execute();
    while($result=$stm->fetch()) { 
        $rows[]=$result;
    }
    return $rows;
}
// MÉTODO PARA ACTUALIZAR USUARIO
public function Actualizar($correoUsuario, $passwordUsuario, $estadoUsuario, $IdRolFK, $idUsuario) {
    $stm=$this->pdo->prepare("UPDATE usuario
        SET correoUsuario=:correoUsuario,
        passwordUsuario=:passwordUsuario,
        estadoUsuario=:estadoUsuario,
        IdRolFK=:IdRolFK
        WHERE idUsuario=:idUsuario");
    $stm->bindParam(':correoUsuario',$correoUsuario);
    $stm->bindParam(':passwordUsuario',$passwordUsuario);
    $stm->bindParam(':estadoUsuario',$estadoUsuario);
    $stm->bindParam(':IdRolFK',$IdRolFK);
    $stm->bindParam(':idUsuario',$idUsuario);
    if($stm->execute()){
        
        header('Location:../Vista/Usuarios.php');
    }else{
        header('Location:../Vista/habilitar_inabilitar_usuario.php');
    }
}
//MÉTODO PARA ELIMINAR UN USUARIO 
public function Eliminar($idUsuario){
    $stm=$this->pdo->prepare("DELETE FROM usuario WHERE idUsuario=:idUsuario");
    $stm->bindParam('idUsuario', $idUsuario);
    if($stm->execute()){
        header('Location:../Vista/Usuarios.php');
    }else{
        header('Location:../Vista/actualizar_usuario.php');
    }
}

}
?>