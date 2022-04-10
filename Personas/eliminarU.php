<?php
include_once ('seguridad.php');
include_once('../Personas/baseMysql.php');

$id=$_GET['id'];
$tempo= new BaseMysql();

$sql="delete from usuarios where id='?'";

$exito=$tempo->ejecutar($sql,$id);

if($exito==1){
    header('location: mostrarU.php');
}else{
    echo "Error en consulta. <br>$sql";
}
?>
