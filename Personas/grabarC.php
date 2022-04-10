<?php
include_once ('seguridad.php');
include_once('../Personas/baseMysql.php');

$id=$_POST['txtid'];
    $dato[]=$_POST['txtdescrip'];
    $dato[]=$_POST['txtsigla'];
    $dato[]="1";


$tempo= new BaseMysql();

if($id>0)
{
    $sql="update cursos set descripcion=?,siglas=?,estado=? where id=?";
    $dato[]=$_POST['txtid'];
    
}
 else {
    $sql="insert into cursos(descripcion,siglas,estado) values(?,?,?)";
    
}
$exito=$tempo->ejecutar($sql, $dato);

if($exito==1){
    header('location: mostrarC.php');
}else{
    echo "Error en consulta.";
}
?>


