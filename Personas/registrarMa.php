<?php
include_once ('seguridad.php');
include_once('../Personas/baseMysql.php');

$tempo= new BaseMysql();
$datos[]=$_GET['id'];


$sql1="select id as idcu, descripcion as decu, estado from cursos order by id";
$sql3="select * from personas where id=? ";

$date=$tempo->consultar($sql3,$datos);
$datos_cu=$tempo->consultar($sql1);

    $id=$date->id;
    $paterno=$date->paterno;
    $materno=$date->materno;
    $nombre=$date->nombre;

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
        <title>Matricular</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../libs/bootstrap/css/misestilos.css" rel="stylesheet" type="text/css"/>
        <!--Fontawesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />
        
    </head>
    <body>
         
        <div class="container">
            <br>   <h3 class="text-center text-white"> MATRICULAR ALUMNO</h3>
            <hr>

            <div class="row">
                <aside class="col-sm-3">
                </aside> <!-- col.// -->
                <aside class="col-sm-7">
                    <div class="card_matricula">
                        <article class="card-body">                         
                            <h4 class="card-title mb-4 mt-1 text-white">DATOS</h4>                           
                            <form method="POST" action="grabarMa.php">
                                <div class="form-group row h6">
                                    <label class="col-sm-3 col-form-label text-white">ID: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="txtid" readonly placeholder="#######" value="<?= $id?>">
                                    </div>
                                </div>
                                <div class="form-group row h6">
                                    <label class="col-sm-3 col-form-label text-white">Paterno: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="txtpaterno" required pattern="[A-Za-z0-9]+" placeholder="pater.." disabled value="<?= $paterno?>">
                                    </div>
                                </div>
                                 <div class="form-group row h6">
                                    <label class="col-sm-3 col-form-label text-white">Materno: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="txtmaterno" required pattern="[A-Za-z0-9]+" placeholder="mater.." disabled value="<?= $materno?>">
                                    </div>
                                </div>
                                 <div class="form-group row h6">
                                    <label class="col-sm-3 col-form-label text-white">Nombre: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="txtnombre" required pattern="[A-Za-z0-9]+" placeholder="nomb.."  disabled value="<?= $nombre?>">
                                    </div>
                                </div>
                                <div class="form-group row h6">
                                    <label class="col-sm-3 col-form-label text-white">Curso: </label>
                                    <div class="col-sm-9">
                                        <select name="cbodocu" class="form-control" required >
                                            <option class=" form-control" value="" >  -----------------------------------------------------------------</option>
                                            <?php
                                            foreach ($datos_cu as $u) {
                                                if ($u['estado'] == 1) {
                                                    ?>
                                                    <option value="<?= $u['idcu'] ?>"><?= $u['decu'] ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>                                
                                        </select>
                                    </div>
                                </div>                       
                                <br><br>
                                <input type="submit" value="Matricular" class="btn btn-success btn-lg btn-block">
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
