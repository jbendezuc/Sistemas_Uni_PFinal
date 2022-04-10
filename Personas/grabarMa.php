<?php
include_once ('seguridad.php');
include_once('../Personas/baseMysql.php');

    $dato[]=$_POST['txtid'];

    $dato[]=$_POST['cbodocu'];
    $dato[]=0.0;
    $dato[]=0.0;
    $dato[]=0.0;
    $dato[]=0.0;
    $dato[]=0;
    

$tempo= new BaseMysql();


    $sql="insert into matricula(persona_id,curso_id,n1,n2,n3,n4,enviado) values(?,?,?,?,?,?,?)";
    

$exito=$tempo->ejecutar($sql, $dato);

if($exito==1){
    header('location: mostrarPer.php');
}else{
    echo "Error en consulta.";
}
?>
