<?php
include_once('../Personas/baseMysql.php');
$usuario=$_POST['txtusuario'];
$contra=$_POST['txtcontra'];

$datos[]=$_POST['txtusuario'];
$datos[]=$_POST['txtcontra'];

session_start();

$tempo= new BaseMysql();
$sql="select * from usuarios where usuario=? and clave=?";
$date=$tempo->consultar($sql,$datos);
//print_r($date->usuario);exit;

    if ($date->usuario == $usuario && $date->clave == $contra) {


        if ($date->estado == 1) {
            $_SESSION['usuario'] = $usuario;
            $_SESSION['clave'] = $clave;
            $_SESSION['acceso']="c0nc3diD0";
            header('location: menu.php');
            die();
        } else {
            header('location: login.html');
            die();
        }
    }

?>
<html>
    <head>
        <style>
        body{
            
      background: url('../imagenes/fondo1.jpg');
    height: 500px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
        }
        
        </style>
        <title>Opciones</title>        
         <link href="../libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../libs/bootstrap/css/misestilos.css" rel="stylesheet" type="text/css"/>       
    </head>

    <body>
            
        <div class="container">
            
               <div class="form-group purple-border">
                <br>
                <textarea class="form-control" readonly text-align="center">DATOS EQUIVOCADOS VUELVA INTENTARLO DENUEVO...</textarea>
                <br>
                <div id="Power-Contenedor">
                    <a href="login.html" id="Anyadir-Rutina-btn">Intentar Nuevamente</a>
                </div>
            </div> 
                
            </div>
       
    </body>
</html>






