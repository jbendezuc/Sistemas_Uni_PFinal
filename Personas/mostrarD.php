<?php
include_once ('seguridad.php');
include_once('../Personas/baseMysql.php');

$tempo= new BaseMysql();

$sql="select * from documentos";
$info = $tempo->consultar($sql);

?>
<html>
    <head>
        <style>       
        body {
 background-image: url(../imagenes/fondo_docu.jpg);
  background-position: center center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-color: #464646;
}
        </style>
        <title>Mostrar Documentos</title> 
        <link href="../libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../libs/bootstrap/css/misestilos.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />
        
    </head>
    <body>
        <div class="container"><br>
            <h4 class="text-light" style="text-align: center">LISTA DE DOCUMENTOS</h4>
            <br>
            <a href="registrarD.php" class="btn btn-light" style="font-weight: bold">Registrar Nuevo</a>
            <a href="menu.php" class="btn btn-warning" style="font-weight: bold">Regresar a Menu</a>
            <br><br>
            <table class="table table-hover table-bordered" bgcolor="white" >
                <thead bgcolor="#B9B329">
                    <tr>
                        <th>ID</th>
                        <th>DESCRIPCION</th>
                        <th>SIGLAS</th>
                        <th>EDITAR</th>
                        <th>ELIMINAR</th>
                    </tr>
                </thead>
                <tbody>                    
                    <?php foreach ($info as $k) { ?>
                    <tr>
                        <td><?= $k['id'] ?></td>
                        <td><?= $k['descripcion'] ?></td>
                        <td><?= $k['sg'] ?></td>
                        <td><a href="eliminarD.php?id=<?= $k['id'] ?> " class="btn btn-danger  btn-sm btn-block" onclick="return confirm('Seguro brother?')" style="font-weight: bold">Eliminar</a></td>
                        <td><a href="registrarD.php?id=<?= $k['id'] ?> " class="btn btn-info btn-sm btn-block" style="font-weight: bold">Editar</a></td>
                        </tr>
                     <?php }?>
                        
                </tbody>
            </table>   
        </div>
    </body>
</html>

