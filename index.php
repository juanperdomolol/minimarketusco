<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Usuario</title>
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap-4.5.2-dist/css/bootstrap.css">
    <script src="librerias/jquery-3.5.1.min.js"></script>
</head>
<body style="background-color: gray;">
    <br><br><br>
    <div class="container justify-content-center">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="card shadow p-3 mb-5 bg-white rounded text-white" style="max-width:">
                    <div class="card-header bg-dark text-center">Sistema de ventas</div>
                    <div class="card-body bg-white text-dark"><img class="mx-auto d-block" src="img/Usco.png" height="170px">
                        <form>
                            <div class="form-group ">
                                <label>Usuario</label>
                                <input type="text" class="form-control" name="usuario" id="usuario">
                            </div>
                            <div class="form-group ">
                                <label>Contraseña</label>
                                <input type="text" class="form-control" name="contraseña" id="contraseña">
                            </div>
                            <button class="btn btn-primary">Entrar</button>
                            <a href="registro.php" class="btn btn-danger">Registrarse</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>