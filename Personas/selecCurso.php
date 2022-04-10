<?php
include_once ('seguridad.php');
include_once('../Personas/baseMysql.php');

 
$tempo = new BaseMysql();
$sql = "select * from cursos order by id";
$datos = $tempo->consultar($sql);

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
        
        <title>Seleccion Cursos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../libs/bootstrap/css/misestilos.css" rel="stylesheet" type="text/css"/>
        <!--Fontawesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />
        <script src="../libs/jquery/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="../js/BuscarCurso.js" type="text/javascript"></script>
        
    </head>
    <body>
        <div class="container">
            <br>   <h3 class="text-center text-white"> ELEJIR CURSO</h3>
            <hr>

            <div class="row">
                
                
                <aside class="col-sm-4">
                    <div class="form-group row h6">
                                    <label class="col-sm-2 col-form-label text-white">Curso: </label>
                                    <div class="col-sm-10">
                                       <select name="cbcu" id="cbcu" class="form-control" required >
                                            <option class=" form-control" value="" >  --------------------------------------</option>
                                            <?php
                                            foreach ($datos as $u) {
                                                if ($u['estado'] == 1) {
                                                    ?>
                                                    <option value="<?= $u['id'] ?>"><?= $u['descripcion'] ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>                                
                                       </select>
                                    </div>
                    </div>
                </aside> <!-- col.// -->
                <aside class="col-sm-4">
                    <div class="form-group row h6">
                        <input type="button" value="Seleccionar" class="btn btn-success" onClick="javascript:buscar_curso();">
                        <a href="menu.php" class="btn btn-danger ">Regresar</a>
                    </div>
                </aside> <!-- col.// -->
               <!-- col.// -->
                <aside class="col-sm-4">
                    <div id="imprimir"></div>
                </aside>
            </div> <!-- row.// -->
            <br>
            <div class="row">               
                <aside class="col-sm-12">
                    <div class="form-group row h6">
                        <table class="table table-hover table-bordered" bgcolor="white" >
                            <thead bgcolor="#B9B329">
                                <tr>
                                    <th>IDm</th>
                                    <th>IDpe</th>
                                    <th>PERSONA</th>
                                    <th>IDc</th>
                                    <th>CURSO</th>
                                    <th>N1</th>
                                    <th>N2</th>
                                    <th>N3</th>
                                    <th>N4</th>
                                    <th>PROME</th>
                                    <th>CONDIC</th>
                                    <th>ENVI</th>
                                    <th>REGIST</th>
                                    <th>CORREO</th>
                                </tr>
                            </thead>
                            <tbody class="tabla">
                                
                            </tbody>
                        </table>                
                    </div>
                </aside> <!-- col.// -->
                
            </div>
        </div> 
        <!--container end.//-->

    </body>
</html>

