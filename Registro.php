<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="estilosLogin.css" rel="stylesheet">
    <title>Registro</title>
    <!--PWA-->
    <link rel="manifest" href="manifest.json">
    <!---PWA--->
    <script type="text/javascript">
        if ("serviceWorker" in navigator) {
          navigator.serviceWorker.register("sw.js");
        }
      </script>
</head>
<body class="align-content-center">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <form action="login_register.php" method="POST" style="margin: auto; width: 400px;">
        <div class="container-fluid text-center form-signin">
            <div class="d-flex justify-content-center align-items-center">
                <div class="row">
                    <div class="col-12 text-light mb-2">
                        <h1>
                            Registro
                        </h1>
                    </div>
                    <div class="col-12 mb-1">
                        <div class="form-floating">
                            <input name="nombre" type="text" class="form-control rounded-pill ps-4" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Nombre(s)</label>
                        </div>
                    </div>
                    <div class="col-12 mb-1">
                        <div class="form-floating">
                            <input name="apellidos" type="text" class="form-control rounded-pill ps-4" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Apellidos</label>
                        </div>
                    </div>
                    <div class="col-12 mb-1">
                        <div class="form-floating">
                            <input name="user" type="text" class="form-control rounded-pill ps-4" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Nombre de usuario</label>
                        </div>
                    </div>
                    <div class="col-12 mb-1">
                        <div class="form-floating">
                            <input name="correo" type="email" class="form-control rounded-pill ps-4" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Correo electronico</label>
                        </div>
                    </div>
                    <div class="col-12 mb-1">
                        <div class="form-floating">
                            <input  name="contraseña" type="password" class="form-control rounded-pill ps-4" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Contraseña</label>
                        </div>
                    </div>
                    <div class="row form-signin text-light">
                        <div class="col-6">
                            <input class="w-100 btn btn-lg form-button rounded-pill" type="submit" value="Registrar" name="btnregistrar">
                        </div>
                        <div class="col-6">
                            <button class="w-100 btn btn-lg form-button rounded-pill">
                                <a href="index.html" >Cancelar</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    
</body>
</html>