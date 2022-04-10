<?php
include_once ('seguridad.php');
?>
<html>
    <head>
        <style>
        body {
 background-image: url(../imagenes/fondo_menu.jpg);
  background-position: center center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-color: #464646;
}
    </style>
        <title>Opciones</title> 
        <link href="../libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../libs/bootstrap/css/misestilos.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />
    
    </head>
    <body>
        <div class="container">
            <br>   <h3 class="text-center text-white"> BIEVENIDO <?= strtoupper($_SESSION['usuario']) ?></h3>
            <hr>

            <div class="row">
                <aside class="col-sm-3">
                    <div class="card_menu">
                        <article class="card-body">                         
                            <h4 class="card-title mb-4 mt-1 text-white">USUARIOS</h4>                           
                                <div class="container">                                 
                                    <div class="form-group">
                                    <a href="registrarU.php" class=" btn btn-outline-warning" style="font-weight: bold">Registrar</a>
                                </div> <!-- form-group// -->
                                <div class="form-group">
                                    <a href="mostrarU.php" class=" btn btn-outline-warning" style="font-weight: bold">Reporte</a>
                                </div> <!-- form-group// --> 
                                </div>                                                                                                       
                        </article>
                    </div> <!-- card.// -->

                </aside> <!-- col.// -->
                <aside class="col-sm-3">
                    <div class="card_menu">
                        <article class="card-body">                         
                            <h4 class="card-title mb-4 mt-1 text-white">DOCUMENTOS</h4>                           
                                <div class="container">                                 
                                    <div class="form-group">
                                        <a href="registrarD.php" class=" btn btn-outline-warning" style="font-weight: bold">Registrar</a>
                                </div> <!-- form-group// -->
                                <div class="form-group">
                                    <a href="mostrarD.php" class=" btn btn-outline-warning" style="font-weight: bold">Reporte</a>
                                </div> <!-- form-group// --> 
                                </div>                                                                                                       
                        </article>
                    </div> <!-- card.// -->

                </aside> <!-- col.// -->
                <aside class="col-sm-3">
                    <div class="card_menu">
                        <article class="card-body">                         
                            <h4 class="card-title mb-4 mt-1 text-white">CURSOS</h4>                           
                                <div class="container">                                 
                                    <div class="form-group">
                                    <a href="registrarC.php" class=" btn btn-outline-warning" style="font-weight: bold">Registrar</a>
                                </div> <!-- form-group// -->
                                <div class="form-group">
                                    <a href="mostrarC.php" class=" btn btn-outline-warning" style="font-weight: bold">Reporte</a>
                                </div> <!-- form-group// --> 
                                </div>                                                                                                       
                        </article>
                    </div> <!-- card.// -->

                </aside> <!-- col.// -->
                <aside class="col-sm-3">
                    <div class="card_menu">
                        <article class="card-body">                         
                            <h4 class="card-title mb-4 mt-1 text-white">PERSONAS</h4>                           
                                <div class="container">                                 
                                    <div class="form-group">
                                        <a href="registrarP.php" class=" btn btn-outline-warning" style="font-weight: bold">Registrar</a>
                                </div> <!-- form-group// -->
                                <div class="form-group">
                                    <a href="mostrarP.php" class=" btn btn-outline-warning" style="font-weight: bold">Reporte</a>
                                </div> <!-- form-group// -->
                                <div class="form-group">
                                    <a href="mostrarPer.php" class=" btn btn-outline-warning" style="font-weight: bold">Matricular</a>
                                </div>
                                <div class="form-group">
                                    <a href="selecCurso.php" class=" btn btn-outline-warning" style="font-weight: bold">Cursos</a>
                                </div>
                                </div>                                                                                                       
                        </article>
                    </div> <!-- card.// -->

                </aside> <!-- col.// -->
                
            </div> <!-- row.// -->
            <br>
            <div class="row">
                <aside class="col-sm-3">
                    <div class="card_footer">
                        <article class="card-body">
                            <div class="text-center">
                                <h4 class="card-title mb-4 mt-1 text-white">SALIR</h4>
                            </div>                        
                                <div class="container">                                 
                                    <a href="salir.php" class=" btn  btn-block btn-warning" style="font-weight: bold">Cerrar</a>
                                </div> <!-- form-group// -->
                                                                                                                                      
                        </article>
                    </div> <!-- card.// -->

                </aside> <!-- col.// -->
            </div>
        </div> 
        <!--container end.//-->
        
    </body>
</html>



