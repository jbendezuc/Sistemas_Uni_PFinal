<?php
include_once ('seguridad.php');
include_once('../Personas/baseMysql.php');

    
    $dato[]=$_POST['txtidp'];
    $dato[]=$_POST['txtidc'];
    $dato[]=$_POST['txtnota1'];
    $dato[]=$_POST['txtnota2'];
    $dato[]=$_POST['txtnota3'];
    $dato[]=$_POST['txtnota4'];
    $dato[]=0;
    $dato[]=$_POST['txtidm'];

$tempo= new BaseMysql();


   $sql="update matricula set persona_id=?,curso_id=?,n1=?,n2=?,n3=?,n4=?,enviado=? where id=?";
    

$exito=$tempo->ejecutar($sql, $dato);

if($exito==1){
    header('location: selecCurso.php');
}else{
    echo "Error en consulta.";
}
?>

