<?php
include_once ('seguridad.php');
include_once('../Personas/baseMysql.php');

$tempo= new BaseMysql();

$sql="select p.id as idp, concat(p.paterno,'-',p.materno,'-',p.nombre) as persona,d.id as docu_id,p.docu_numero,d.descripcion as docu_nombre,d.sg as docu_sg,g.id as genero,g.descripcion as genero_nombre,g.sg as gen_sg from personas as p inner join documentos as d on d.id=p.docu_id inner join genero as g on g.id=p.genero";
$info = $tempo->consultar($sql);
?>
<html>
    <head>
        <style>
        body {
 background-image: url(../imagenes/fondo_persona.jpg);
  background-position: center center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-color: #464646;
}
        </style>
        <title>Mostrar Personas</title> 
        <link href="../libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../libs/bootstrap/css/misestilos.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />
        
    </head>
    <body>
        <div class="container"><br>
            <h4 class="text-light" style="text-align: center">LISTA DE PERSONAS</h4>
            <br>
            <a href="registrarP.php" class="btn btn-light" style="font-weight: bold">Registrar Nuevo</a>
            <a href="menu.php" class="btn btn-warning" style="font-weight: bold">Regresar a Menu</a>
            <br><br>
            <table class="table table-hover table-bordered" bgcolor="white" >
                <thead bgcolor="#B9B329">
                    <tr>
                        <th>ID</th>
                        <th>PERSONA</th>
                        <th>DOCU_ID</th>
                        <th>DOCU_NUM</th>
                        <th>DOCU_NOM</th>
                        <th>DOCU_SG</th>
                        <th>GENERO</th>
                        <th>GEN_NOM</th>
                        <th>GEN_SG</th>
                        <th>ELIMINAR</th>
                        <th>EDITAR</th>
                    </tr>
                </thead>
                <tbody>                    
                    <?php foreach ($info as $k) { ?>
                    <tr>
                        <td><?= $k['idp'] ?></td>
                        <td><?= $k['persona'] ?></td>
                        <td><?= $k['docu_id'] ?></td>
                        <td><?= $k['docu_numero'] ?></td>
                        <td><?= $k['docu_nombre'] ?></td>
                        <td><?= $k['docu_sg'] ?></td>
                        <td><?= $k['genero'] ?></td>
                        <td><?= $k['genero_nombre'] ?></td>
                        <td><?= $k['gen_sg'] ?></td>
                        <td><a href="eliminarP.php?id=<?= $k['idp'] ?> " class="btn btn-danger  btn-sm btn-block" onclick="return confirm('Seguro brother?')" style="font-weight: bold">Eliminar</a></td>
                        <td><a href="registrarP.php?id=<?= $k['idp'] ?> " class="btn btn-info btn-sm btn-block" style="font-weight: bold">Editar</a></td>
                        </tr>
                     <?php }?>
                        
                </tbody>
            </table>   
        </div>
    </body>
</html>
