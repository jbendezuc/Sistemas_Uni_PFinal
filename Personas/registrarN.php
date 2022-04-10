<?php
include_once ('seguridad.php');
include_once('../Personas/baseMysql.php');

$tempo= new BaseMysql();
$datos[]=$_GET['id'];


$sql="SELECT m.id AS idm, p.id AS idp, CONCAT_WS(' ',p.paterno,p.materno,p.nombre) AS persona,m.n1,m.n2,m.n3,m.n4, c.id AS idc, c.descripcion AS decu FROM matricula AS m INNER JOIN personas AS p on p.id=m.persona_id INNER JOIN cursos AS c on c.id=m.curso_id WHERE m.id=?";

$date=$tempo->consultar($sql,$datos);

    $idm=$date->idm;
    $idp=$date->idp;
    $persona=$date->persona;
    $idc=$date->idc;
    $decu=$date->decu;
    
    if($date->n1==0.0)
    {
        $n1='';
    }else{
        $n1=$date->n1;
    }
    
    if($date->n2==0.0)
    {
        $n2='';
    }else{
        $n2=$date->n2;
    }
    
    if($date->n3==0.0)
    {
        $n3='';
    }else{
        $n3=$date->n3;
    }
    
    if($date->n4==0.0)
    {
        $n4='';
    }else{
        $n4=$date->n4;
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
        <title>Notas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../libs/bootstrap/css/misestilos.css" rel="stylesheet" type="text/css"/>
        <!--Fontawesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />
        
    </head>
    <body>
         
        <div class="container">
            <br>   <h3 class="text-center text-white"> REGISTRO DE NOTAS</h3>
            <hr>

            <div class="row">
                <aside class="col-sm-3">
                </aside> <!-- col.// -->
                <aside class="col-sm-7">
                    <div class="card_notas">
                        <article class="card-body">                         
                            <h4 class="card-title mb-4 mt-1 text-white">DATOS</h4>                           
                            <form method="POST" action="grabarN.php">
                                <div class="form-group row h6">
                                    <label class="col-sm-3 col-form-label text-white">ID Matricula: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="txtidm" readonly placeholder="#######" value="<?= $idm?>">
                                    </div>
                                </div>
                                <div class="form-group row h6">
                                    <label class="col-sm-3 col-form-label text-white">ID Persona: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="txtidp" readonly placeholder="#######" value="<?= $idp?>">
                                    </div>
                                </div>
                                <div class="form-group row h6">
                                    <label class="col-sm-3 col-form-label text-white">Nombre: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="txtpaterno"  required pattern="[A-Za-z0-9]+" placeholder="pater.." disabled value="<?= $persona?>">
                                    </div>
                                </div>
                                <div class="form-group row h6">
                                    <label class="col-sm-3 col-form-label text-white">ID Curso: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="txtidc" readonly placeholder="#######" value="<?= $idc?>">
                                    </div>
                                </div>
                                <div class="form-group row h6">
                                    <label class="col-sm-3 col-form-label text-white">Curso: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="txtid" readonly placeholder="#######" value="<?= $decu?>">
                                    </div>
                                </div>
                                    <div class="form-group row h6">
                                    <label class="col-sm-3 col-form-label text-white">Nota 1: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="number" name="txtnota1"  required pattern="^[0-9]+(.[0-9]+)?$"  max="20" min="0" placeholder="Ingrese nota.." value="<?= $n1?>" >
                                    </div>
                                </div> 
                                <div class="form-group row h6">
                                    <label class="col-sm-3 col-form-label text-white">Nota 2: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="number" name="txtnota2"  required pattern="^[0-9]+(.[0-9]+)?$"  max="20" min="0" placeholder="Ingrese nota.." value="<?= $n2?>">
                                    </div>
                                </div> 
                                <div class="form-group row h6">
                                    <label class="col-sm-3 col-form-label text-white">Nota 3: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="number" name="txtnota3"  required pattern="^[0-9]+(.[0-9]+)?$"  max="20" min="0" placeholder="Ingrese nota.." value="<?= $n3?>">
                                    </div>
                                </div> 
                                <div class="form-group row h6">
                                    <label class="col-sm-3 col-form-label text-white">Nota 4: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="number" name="txtnota4"  required pattern="^[0-9]+(.[0-9]+)?$"  max="20" min="0" placeholder="Ingrese nota.." value="<?= $n4?>">
                                    </div>
                                </div>
                                <br><br>
                                <input type="submit" value="Registrar" class="btn btn-success btn-lg btn-block">
                                <a href="selecCurso.php" class="btn btn-danger btn-lg btn-block">Regresar</a>

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
