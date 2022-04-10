<?php
include_once ('seguridad.php');

?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../libs/bootstrap/css/misestilos.css" rel="stylesheet" type="text/css"/>
        <!--Fontawesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />
        <style>
            body{
            
          background: url('../imagenes/fondo_usuarios.png');
          height: 500px;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
            }
        </style> 
    </head>
    <body>
        <div class="container">
            <br>   <h3 class="text-center text-white"> REGISTRAR USUARIO</h3>
            <hr>

            <div class="row">
                <aside class="col-sm-2">
                </aside> <!-- col.// -->
                <aside class="col-sm-8">
                    <div class="card_registrar">
                        <article class="card-body">                         
                            <h4 class="card-title mb-4 mt-1 text-white">DATOS</h4>                           
                            <form method="POST" action="grabarU.php">
                                <div class="form-group row h6">
                                    <label class="col-sm-3 col-form-label text-white">ID: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="txtid" readonly placeholder="...">
                                    </div>
                                </div>
                                <div class="form-group row h6">
                                    <label class="col-sm-3 col-form-label text-white">Cuenta: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="txtnombre" required pattern="[A-Za-z0-9]+" placeholder="usuario">
                                    </div>
                                </div>
                                <div class="form-group row h6">
                                    <label class="col-sm-3 col-form-label text-white">Clave: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="txtcontra" required pattern="[A-Za-z0-9]+" placeholder="xxxxxxxxxxx">
                                    </div>
                                </div>
                                <div class="form-group row h6">
                                    <label class="col-sm-3 col-form-label text-white">Foto: </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="file" name="txtfile">
                                    </div>
                                </div> 
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

                        

