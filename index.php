<?php

require_once "clases/conexion.php";
$obj = new conectar();
$conexion = $obj->conexion();

$sql = "SELECT * from usuarios where email= 'admin' ";
$result = mysqli_query($conexion, $sql);
$validar = 0;
if (mysqli_num_rows($result) > 0)
    $validar = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Usuario</title>
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap-4.5.2-dist/css/bootstrap.css">
    <script src="librerias/jquery-3.5.1.min.js"></script>
    <script src="js/funciones.js"></script>s
</head>

<body style="background-color: gray;">
    <br><br><br>
    <div class="container justify-content-center">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="card shadow p-3 mb-5 bg-white rounded text-white">
                    <div class="card-header bg-dark text-center">Sistema de ventas</div>
                    <div class="card-body bg-white text-dark"><img class="mx-auto d-block" src="img/Usco.png" height="170px">
                        <form id="frmLogin">
                            <div class="form-group ">
                                <label>Usuario</label>
                                <input type="text" class="form-control" name="usuario" id="usuario">
                            </div>
                            <div class="form-group ">
                                <label>Contraseña</label>
                                <input type="text" class="form-control" name="password" id="password">
                            </div>
                            <button class="btn btn-primary" id="EntrarSistema">Entrar</button>
                            <?php
                            if (!$validar) : ?>
                                <a href="registro.php" class="btn btn-danger">Registrarse</a>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

<script type="text/javascript">
    $(document).ready(function() {
        $('#EntrarSistema').click(function() {

            vacios = validarFormVacio('frmLogin');
            if (vacios > 0) {
                alert("Debes llenar todos los campos!!");
                return false;
            }
            datos = $('#frmLogin').serialize();
            $.ajax({
                type: "POST",
                data: datos,
                url: "procesos/regLogin/login.php",
                success: function(r) {
                    if (r == 1) {
                        window.location = "vistas/inicio.php";
                    } else {
                        alert("No se pudo acceder :( ");
                    }

                }
            });
        });
    })
</script>