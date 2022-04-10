<?php
include_once ('seguridad.php');
include_once('../Personas/baseMysql.php');

$id=$_POST['txtid'];
    $dato[]=$_POST['txtdescrip'];
    $dato[]=$_POST['txtsigla'];


$tempo= new BaseMysql();

if($id>0)
{
    $sql="update documentos set descripcion=?,sg=? where id=?";
    $dato[]=$_POST['txtid'];
    
}
 else {
    $sql="insert into documentos(descripcion,sg) values(?,?)";
    
}
$exito=$tempo->ejecutar($sql, $dato);

if($exito==1){
    header('location: mostrarD.php');
}else{
    echo "Error en consulta.";
}
?>

