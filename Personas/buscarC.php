<?php
include_once ('seguridad.php');
include_once('../Personas/baseMysql.php');

$tempo= new BaseMysql();

$datos[]=$_GET['id'];
$sql1="select m.id AS idm,p.id AS idp,concat_ws('-',p.paterno,p.materno,p.nombre) AS persona,c.id AS idc,c.descripcion AS curso,m.n1 AS n1,m.n2 AS n2,m.n3 AS n3,m.n4 AS n4,(m.n1 + m.n2 + m.n3 + m.n4) / 4 AS promedio,if((m.n1 + m.n2 + m.n3 + m.n4) / 4 > 13,'APROBADO','DESAPROBADO') AS condicion,m.enviado AS enviado from ((matricula m join personas p on(m.persona_id = p.id)) join cursos c on(m.curso_id = c.id)) WHERE c.id=?";
$info = $tempo->consultar($sql1,$datos,"1");


$info = json_encode($info);
echo $info;
?>
