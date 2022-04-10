<?php
include_once ('seguridad.php');
include_once('../Personas/baseMysql.php');

$datos[]=$_GET['id'];

$tempo= new BaseMysql();

$sql="delete from documentos where id=?";

$exito=$tempo->ejecutar($sql,$datos);

if($exito==1){
    header('location: mostrarD.php');
}else{
    echo "Error en consulta. <br>$sql";
}
?>

