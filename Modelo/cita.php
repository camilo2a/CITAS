<?php
require_once('Conexion.php');
class Cita{
    private $pdo;//VARIABLE PARA CONEXION
    public $idCita;
    public $fechaCita;
    public $horaCita;
    public $estadoCita;
    public $idEmpleadoFK;
    public $idClienteFK;
    public $idServicioFK;
    

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
        $stm=$this->pdo->prepare("select * from cita");
        $stm->execute();
        while($result=$stm->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }
    public function Agregar($fechaCita, $horaCita, $estadoCita, $idEmpleadoFK, $idClienteFK, $idServicioFK){
        $stm=$this->pdo->prepare("Insert into usuario (fechaCita, horaCita, estadoCita, idEmpleadoFK, idClienteFK, idServicioFK) values (:fechaCita, :horaCita, :estadoCita, :idEmpleadoFK, :idClienteFK, :idServicioFK)");
        $stm->bindParam(':fechaCita',$fechaCita);
        $stm->bindParam(':horaCita',$horaCita);
        $stm->bindParam(':estadoCita',$estadoCita);
        $stm->bindParam(':idEmpleadoFK',$idEmpleadoFK);
        $stm->bindParam(':idClienteFK',$idClienteFK);
        $stm->bindParam(':idServicioFK',$idServicioFK);
        if($stm->execute()){ 
                header('Location:../Vista/Citas.php'); 
            }
        else
            {   
                header('Location:../Vista/registrar_Citas.php');
            }
    }

//METODO PARA OBTENER EL ID DE UN USUARIO
public function Obtener($idCita){
    $rows=null;
    $stm=$this->pdo->prepare("SELECT * FROM cita where idCita=:idCita");
    $stm->bindParam('idCita', $idCita);
    $stm->execute();
    while($result=$stm->fetch()) { 
        $rows[]=$result;
    }
    return $rows;
}
// MÉTODO PARA ACTUALIZAR USUARIO
public function Actualizar($fechaCita, $horaCita, $estadoCita, $idEmpleadoFK, $idClienteFK, $idServicioFK, $idCita) {
    $stm=$this->pdo->prepare("UPDATE cita
        SET fechaCita=:fechaCita,
        horaCita=:horaCita,
        estadoCita=:estadoCita,
        idEmpleadoFK=:idEmpleadoFK,
        idClienteFK=:idClienteFK,
        idServicioFK=:idServicioFK
        WHERE idCita=:idCita");
    $stm->bindParam(':fechaCita',$fechaCita);
    $stm->bindParam(':horaCita',$horaCita);
    $stm->bindParam(':estadoCita',$estadoCita);
    $stm->bindParam(':idEmpleadoFK',$idEmpleadoFK);
    $stm->bindParam(':idClienteFK',$idClienteFK);
    $stm->bindParam(':idServicioFK',$idServicioFK);
    $stm->bindParam(':idCita"',$idCita);
    if($stm->execute()){
        header('Location:../Vista/cita".php');
    }else{
        header('Location:../Vista/habilitar_inabilitar_cita".php');
    }
}
//MÉTODO PARA ELIMINAR UN USUARIO 
public function Eliminar($idUsuario){
    $stm=$this->pdo->prepare("DELETE FROM cita WHERE idCita=:idCita");
    $stm->bindParam('idCita', $idCita);
    if($stm->execute()){
        header('Location:../Vista/cita.php');
    }else{
        header('Location:../Vista/actualizar_cita.php');
    }
}

}
?>