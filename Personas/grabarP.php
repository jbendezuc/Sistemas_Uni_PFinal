<?php
include_once ('seguridad.php');
include_once('../Personas/baseMysql.php');

$id=$_POST['txtid'];
    $dato[]=$_POST['txtpaterno'];
    $dato[]=$_POST['txtmaterno'];
    $dato[]=$_POST['txtnombre'];
    $dato[]=$_POST['cbodocu'];
    $dato[]=$_POST['txtnumero'];
    $dato[]=$_POST['cbogen'];
    $dato[]=$_POST['txtcorreo'];
    
    $paterno=$_POST['txtpaterno'];
    $materno=$_POST['txtmaterno'];
    $nombre=$_POST['txtnombre'];
    $correo=$_POST['txtcorreo'];
$tempo= new BaseMysql();

if($id>0)
{
    $sql="update personas set paterno=?,materno=?,nombre=?,docu_id=?,docu_numero=?,genero=?,correo=? where id=?";
    $dato[]=$_POST['txtid'];
    
}
 else {
     $cabecera="Content-Type: text/html; charset=\"utf8\"\n";
   $mensaje="Bievenido $paterno $materno $nombre gracias por Registrarte en nuestro formulario. Que tengas buen dia.";
   $destino=$correo;
   $titulo="Registrado";
   $contenido=<<<marcador
	<html>
	<body>
	<div style="background:yellow; height: 200px; width:500px;  border:solid 1px;">
	<font face="Arial" size="6">$mensaje</font>
	</div>
	</body>
	</html>
marcador;
   $exito=mail($destino,$titulo,$contenido,$cabecera);
   
    $sql="insert into personas(paterno,materno,nombre,docu_id,docu_numero,genero,correo) values(?,?,?,?,?,?,?)";
    $exito=($exito or $exito==1 or $exito==true)?'Se ha registrado Satisfactoriamente':'ERROR...!!';
}
$exito=$tempo->ejecutar($sql, $dato);

if($exito==1){
    header('location: mostrarP.php');
}else{
    echo "Error en consulta.";
}
?>

