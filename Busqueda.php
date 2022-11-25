<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ab2155e76b.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="estilosLogin.css" rel="stylesheet">
    <title>Busqueda</title>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <div class="container">
        <div class="row">
            <div class="col-12 text-uppercase" >
                <a href="comentario.php" style="float:right">Ir al foro</a>
                <br>
                <br>
            </div>
            <div class="col-12 col-sm-5 p-5">
                <h3 class="text-light">Buscar ruta de destino</h3>
                <div class="input-group mb-1">
                    <input type="text" id="from" class="form-control" placeholder="Punto de parada" aria-label="Recipient's username" aria-describedby="button-addon2">
                </div>
                <div class="input-group mb-1">
                    <input type="text" id="to" class="form-control" placeholder="Punto de destino" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2" onclick="calcRoute();">Buscar</button>
                </div>
                <div id="googleMap"></div>
                <div id="output"></div>
            </div>
            
        </div>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBC2UXFNrTLSTwKDftW9xJPjfUdRx2B_tE&libraries=places"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="apiDirections.js"></script>
</body>
</html>