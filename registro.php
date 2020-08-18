<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap-4.5.2-dist/css/bootstrap.css">
    <script src="librerias/jquery-3.5.1.min.js"></script>
</head>
<body style="background-color: gray;">
    <br><br><br>
    <div class="container justify-content-center">
        <div class="row justify-content-center align-items-center">
            <div class="col-sm-6">
            <div class="card shadow p-3 mb-5 bg-white rounded text-white text-center" style="width: 25r">
                    <div class="card-header bg-dark">Registrar administrador</div>
                    <div class="card-body bg-white text-left text-dark"><img src="" height="">
                        <form>
                            <div class="form-group ">
                                <label>Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" >
                            </div>
                            <div class="form-group ">
                                <label for="exampleInputPassword1">Apellido</label>
                                <input type="text" class="form-control" name="apellido" id="apellido">
                            </div>
                            <div class="form-group ">
                                <label for="exampleInputPassword1">Usuario</label>
                                <input type="text" class="form-control" name="usuario" id="usuario">
                            </div>
                            <div class="form-group ">
                                <label for="exampleInputPassword1">Contraseña</label>
                                <input type="text" class="form-control" name="contraseña" id="contraseña">
                            </div>
                            <a href="index.php" class="btn btn-primary">Regresar</a>
                            <button type="" class="btn btn-danger">Registrar</button>
                        </form>
                    </div>
            </div>

        </div>
    </div>    
</body>
</html>