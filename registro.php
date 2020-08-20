<?php

require_once "clases/conexion.php";
$obj = new conectar();
$conexion = $obj->conexion();

$sql = "SELECT * from usuarios where email= 'admin' ";
$result = mysqli_query($conexion, $sql);
$validar = 0;
if (mysqli_num_rows($result) > 0)
    header("location:index.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap-4.5.2-dist/css/bootstrap.css">
    <script src="librerias/jquery-3.5.1.min.js"></script>
    <script src="js/funciones.js"></script>
</head>

<body style="background-color: gray;">
    <br><br><br>
    <div class="container justify-content-center">
        <div class="row justify-content-center align-items-center">
            <div class="col-sm-6">
                <div class="card shadow p-3 mb-5 bg-white rounded text-white text-center" style="width: 25r">
                    <div class="card-header bg-dark">Registrar administrador</div>
                    <div class="card-body bg-white text-left text-dark"><img src="" height="">
                        <form id="frmRegistro">
                            <div class="form-group ">
                                <label>Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre">
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
                                <input type="text" class="form-control" name="password" id="password">
                            </div>
                            <a href="index.php" class="btn btn-primary">Regresar</a>
                            <button type="" class="btn btn-danger" id="registro">Registrar</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
</body>

</html>

<script type="text/javascript">
    $(document).ready(function() {
        $('#registro').click(function() {
            vacios = validarFormVacio('frmRegistro');
            if (vacios > 0){
                alert("Debes llenar todos los campos!!");
                return false;
            }
            datos = $('#frmRegistro').serialize();
            $.ajax({
                type: "POST",
                data: datos,
                url: "procesos/regLogin/registrarUsuario.php",
                success: function(r) {
                    alert(r);
                    if (r==1){
                        alert("Agregado con exito");
                    }else{
                        alert("Fallo al agregar :(")
                    }
                }
            });
        });
    });
</script>