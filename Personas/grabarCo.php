<?php
include_once ('seguridad.php');
include_once('../Personas/baseMysql.php');

$datos[]=$_GET['id'];

$tempo= new BaseMysql();
$sql="SELECT m.id AS idm, p.id AS idp, CONCAT_WS('-',p.paterno,p.materno,p.nombre) AS persona,p.correo,m.n1,m.n2,m.n3,m.n4, c.id AS idc, c.descripcion AS decu,(m.n1 + m.n2 + m.n3 + m.n4) / 4 AS promedio,if((m.n1 + m.n2 + m.n3 + m.n4) / 4 > 13,'APROBADO','DESAPROBADO') AS condicion FROM matricula AS m INNER JOIN personas AS p on p.id=m.persona_id INNER JOIN cursos AS c on c.id=m.curso_id WHERE m.id=?";
$date=$tempo->consultar($sql, $datos);



    $idp=$date->idp;
    $persona=$date->persona;
    $correo=$date->correo;
    $n1=$date->n1;
    $n2=$date->n2;
    $n3=$date->n3;
    $n4=$date->n4;
    $idc=$date->idc;
    $decu=$date->decu;    
    $promedio=$date->promedio;
    $condicion=$date->condicion;
    
    $datosma[]=$idp;
    $datosma[]=$idc;
    $datosma[]=$n1;
    $datosma[]=$n2;
    $datosma[]=$n3;
    $datosma[]=$n4;
    $datosma[]="1";
    $datosma[]=$_GET['id'];
    
    $sql2="update matricula set persona_id=?,curso_id=?,n1=?,n2=?,n3=?,n4=?,enviado=? where id=?";
    

$exit=$tempo->ejecutar($sql2, $datosma);


    
     $cabecera="Content-Type: text/html; charset=\"utf8\"\n";
   $mensaje="Bievenido $persona \n El reporte del curso $decu de codigo $idc.\n nota1: $n1 \n nota2: $n2 \n nota3: $n3 \n nota4: $n4 \n promedio: $promedio \n condicion: $condicion \n   Que tengas buen dia.";
   $destino=$correo;
   $titulo="Reporte de Notas";
   $contenido=<<<marcador
	<html>
	<body>
	<div style="background:yellow; height: 350px; width:500px;  border:solid 1px;">
	<font face="Arial" size="6">$mensaje</font>
	</div>
	</body>
	</html>
marcador;
   $exito=mail($destino,$titulo,$contenido,$cabecera);
   
    $exito=($exito or $exito==1 or $exito==true)?'Envio Satisfactorio':'ERROR...!!';



if($exit==1){
    header('location: selecCurso.php');
}else{
    echo "Error en consulta.";
}
?>