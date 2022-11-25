<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"> </script>
    <title>Comentarios</title>
    <!--PWA-->
    <link rel="manifest" href="manifest.json">
    <!---PWA--->
    <script type="text/javascript">
        if ("serviceWorker" in navigator) {
          navigator.serviceWorker.register("sw.js");
        }
      </script>
</head>
<body>
    <form method="POST" action="enviarcomentario.php">
        <header class="header">
            <div class="container logo-nav-container">
                <a href="#" class="logo">BUSEBLA</a>
                <span class="menu-icon">Menu</span>
                <nav class="navigation">
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="Busqueda.html">Busqueda</a></li>
                        <li><a href="comentario.php">Comentarios</a></li>
                        <li><a href="index.html">Salida</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <section id="app">
            <div class="container px-4">
            <h3>¡Participa de forma activa con los usuarios del transporte público!</h3>
            <br>
            <div class="row">
                
                <div class="col-6">
                <div class="col-12">
                    <div class="form-group">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input class="form-control" name="nombre" type="text" id="nombre" placeholder="Escribe tu nombre" required >
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="comentario" class="form-label">Comentario:</label>
                    <textarea class="form-control" name="comentario" cols="30" rows="5" type="text" id="comentario" placeholder="Escribe tu comentario......"></textarea>
                </div>
                <br>
                </div>
                <br>
                <input class="btn btn-primary" type="submit"  value="Enviar Comentario">
            </div>
            </div>
            <!--End Container -->
        </section><!-- end App -->
        
               
    </form>


<?php

include("conexion.php");
$resultado= mysqli_query($conn, 'SELECT * FROM comentarios');

while($comentario = mysqli_fetch_object($resultado)){

?>
<div class="container">
    <b><?php echo($comentario->nombre);  ?></b>(<?php echo ($comentario->fecha); ?>): 
    <br />
    <?php echo ($comentario->comentario);?>
    <br />
    <hr />
</div>


<?php
}

?>
                      
<script src="https://code.jquery.com/jquery-3.3.1.min.js"> </script>
<script src="scripts.js"> </script>            
</body>
</html>