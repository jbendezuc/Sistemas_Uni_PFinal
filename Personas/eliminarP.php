<?php
include_once ('seguridad.php');
include_once('../Personas/baseMysql.php');

$datos[]=$_GET['id'];

$tempo= new BaseMysql();

$sql="delete from personas where id=?";

$exito=$tempo->ejecutar($sql,$datos);

if($exito==1){
    header('location: mostrarP.php');
}else{
    echo "Error en consulta. <br>$sql";
}
?>

