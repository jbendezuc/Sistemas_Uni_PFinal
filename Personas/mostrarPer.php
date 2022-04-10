<?php
include_once ('seguridad.php');
include_once('../Personas/baseMysql.php');

$tempo= new BaseMysql();

$sql="select p.id as idp, concat(p.paterno,'-',p.materno,'-',p.nombre) as persona,d.id as docu_id,p.docu_numero,d.descripcion as docu_nombre,d.sg as docu_sg,p.correo from personas as p inner join documentos as d on d.id=p.docu_id";
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
            <a href="menu.php" class="btn btn-warning" style="font-weight: bold">Regresar a Menu</a>
            <br><br>
            <table class="table table-hover table-bordered" bgcolor="white" >
                <thead bgcolor="#B9B329">
                    <tr>
                        <th>ID</th>
                        <th>PERSONA</th>
                        <th>DOCU_NUM</th>
                        <th>DOCU_NOM</th>
                        <th>DOCU_SG</th>
                        <th>CORREO</th>
                        <th>MATRICULAR</th>

                    </tr>
                </thead>
                <tbody>                    
                    <?php foreach ($info as $k) { ?>
                    <tr>
                        <td><?= $k['idp'] ?></td>
                        <td><?= $k['persona'] ?></td>
                        <td><?= $k['docu_numero'] ?></td>
                        <td><?= $k['docu_nombre'] ?></td>
                        <td><?= $k['docu_sg'] ?></td>
                        <td><?= $k['correo'] ?></td>
                        <td><a href="registrarMa.php?id=<?= $k['idp'] ?> " class="btn btn-info btn-sm btn-block" style="font-weight: bold">Matricular</a></td>
                        </tr>
                     <?php }?>
                        
                </tbody>
            </table>   
        </div>
    </body>
</html>

