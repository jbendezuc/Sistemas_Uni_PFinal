<?php
include_once ('seguridad.php');
include_once('../Personas/baseMysql.php');

$tempo= new BaseMysql();
if($_GET)
{
$datos[]=$_GET['id'];
    
    $sql1="select id as iddoc, descripcion as dedoc from documentos order by id";
    $sql2="select id as idge, descripcion as dege from genero order by id";
    $datos_docu=$tempo->consultar($sql1);
    $datos_gen=$tempo->consultar($sql2);
    
$sql3="select * from personas where id=? ";
$date=$tempo->consultar($sql3,$datos);

    $id=$date->id;
    $paterno=$date->paterno;
    $materno=$date->materno;
    $nombre=$date->nombre;
    $docu_id=$date->docu_id;
    $docu_numero=$date->docu_numero;
    $genero=$date->genero;
    $correo=$date->correo;
   
    
}
else
{
    $sql1="select id as iddoc, descripcion as dedoc from documentos order by id";
    $sql2="select id as idge, descripcion as dege from genero order by id";
$datos_docu=$tempo->consultar($sql1);
$datos_gen=$tempo->consultar($sql2);
    $id='';
    $paterno='';
    $materno='';
    $nombre='';
    $docu_id='';
    $docu_numero='';
    $genero='';
    $correo='';
}
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
        <title>Registrar Personas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../libs/bootstrap/css/misestilos.css" rel="stylesheet" type="text/css"/>
        <!--Fontawesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />
        
    </head>
    <body>
         
        <div class="container">
            <br>   <h3 class="text-center text-white"> REGISTRAR PERSONAS</h3>
            <hr>

            <div class="row">
                <aside class="col-sm-3">
                </aside> <!-- col.// -->
                <aside class="col-sm-7">
                    <div class="card_persona">
                        <article class="card-body">                         
                            <h4 class="card-title mb-4 mt-1 text-white">DATOS</h4>                           
                            <form method="POST" action="grabarP.php">
                                <div class="form-group row h6">
                                    <label class="col-sm-3 col-form-label text-white">ID: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="txtid" readonly placeholder="#######" value="<?= $id?>">
                                    </div>
                                </div>
                                <div class="form-group row h6">
                                    <label class="col-sm-3 col-form-label text-white">Paterno: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="txtpaterno" required pattern="[A-Za-z0-9]+" placeholder="pater.." value="<?= $paterno?>">
                                    </div>
                                </div>
                                 <div class="form-group row h6">
                                    <label class="col-sm-3 col-form-label text-white">Materno: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="txtmaterno" required pattern="[A-Za-z0-9]+" placeholder="mater.." value="<?= $materno?>">
                                    </div>
                                </div>
                                 <div class="form-group row h6">
                                    <label class="col-sm-3 col-form-label text-white">Nombre: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="txtnombre" required pattern="[A-Za-z0-9]+" placeholder="nomb.." value="<?= $nombre?>">
                                    </div>
                                </div>
                                <div class="form-group row h6">
                                    <label class="col-sm-3 col-form-label text-white">Documento: </label>
                                    <div class="col-sm-9">
                                        <select name="cbodocu" class="form-control" required >
                                            <option class=" form-control" value="" >  -----------------------------------------------------------------</option>
                                            <?php foreach ($datos_docu as $u) { ?>	
                                        <option value="<?= $u['iddoc'] ?>" <?= ($u['iddoc'] == $docu_id ? 'selected' : '') ?> ><?= $u['dedoc'] ?></option>
                                    <?php } ?>                                
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row h6">
                                    <label class="col-sm-3 col-form-label text-white">Docu_Numero: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="txtnumero" required pattern="[0-9]+" placeholder="N°.." value="<?= $docu_numero?>">
                                    </div>
                                </div>
                                <div class="form-group row h6">
                                    <label class="col-sm-3 col-form-label text-white">Genero: </label>
                                    <div class="col-sm-9">
                                        <select name="cbogen" class="form-control" required >
                                            <option class=" form-control" value="" >   -----------------------------------------------------------------</option>
                                            <?php foreach ($datos_gen as $g) { ?>	
                                        <option value="<?= $g['idge'] ?>" <?= ($g['idge'] == $genero ? 'selected' : '') ?> ><?= $g['dege'] ?></option>
                                    <?php } ?>                                
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row h6">
                                    <label class="col-sm-3 col-form-label text-white">Correo: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="txtcorreo" type="email" placeholder="ejemplo@hotmail.com" required pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" value="<?= $correo?>">
                                    </div>
                                </div>
                                
            
                                <br><br>
                                <input type="submit" value="Registrar" class="btn btn-success btn-lg btn-block">
                                <a href="menu.php" class="btn btn-danger btn-lg btn-block">Regresar</a>

                            </form>                                                                                                       
                        </article>
                    </div> <!-- card.// -->
                    

                </aside> <!-- col.// -->
                <aside class="col-sm-2">
                </aside> <!-- col.// -->

            </div> <!-- row.// -->
            <br>
        </div> 
       
        <!--container end.//-->

    </body>
</html>

