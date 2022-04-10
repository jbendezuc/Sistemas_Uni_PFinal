<?php
include_once ('seguridad.php');
include_once('../Personas/baseMysql.php');

if($_GET)
{
$datos[]=$_GET['id'];
    
   
    
    
    $tempo= new BaseMysql();
$sql="select * from cursos where id=? ";
$date=$tempo->consultar($sql,$datos);

    $id=$date->id;
    $descrip=$date->descripcion;
    $sigla=$date->siglas;
   
    
}
else
{
    $id='';
    $descrip='';
    $sigla='';
}
?>
<html>
    <head>
        <style>
            body {
 background-image: url(../imagenes/fondo_cursos.jpg);
  background-position: center center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-color: #464646;
}
        </style>
        
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../libs/bootstrap/css/misestilos.css" rel="stylesheet" type="text/css"/>
        <!--Fontawesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />
    </head>
    <body>
        <div class="container">
            <br>   <h3 class="text-center text-white"> REGISTRAR CURSOS</h3>
            <hr>

            <div class="row">
                <aside class="col-sm-2">
                </aside> <!-- col.// -->
                <aside class="col-sm-8">
                    <div class="card_registrar">
                        <article class="card-body">                         
                            <h4 class="card-title mb-4 mt-1 text-white">DATOS</h4>                           
                            <form method="POST" action="grabarC.php">
                                <div class="form-group row h6">
                                    <label class="col-sm-3 col-form-label text-white">ID: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="txtid" readonly placeholder="#######" value="<?= $id?>">
                                    </div>
                                </div>
                                <div class="form-group row h6">
                                    <label class="col-sm-3 col-form-label text-white">Descripcion: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="txtdescrip" required pattern="[A-Za-z0-9]+" placeholder="descrip.." value="<?=$descrip?>">
                                    </div>
                                </div>
                                <div class="form-group row h6">
                                    <label class="col-sm-3 col-form-label text-white">Siglas: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="txtsigla" required pattern="[A-Za-z0-9]+" placeholder="siglas" value="<?=$sigla?>">
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

