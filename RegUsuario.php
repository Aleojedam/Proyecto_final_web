<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Cuenta</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
    body {
        background-image: url('img/pokemon1.jpg');
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .form-container {
        background-color: rgba(255, 255, 255, 0.8);
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 500px;
        width: 100%;
    }

    .form-title {
        text-align: center;
        margin-bottom: 15px;
    }
    </style>
</head>

<body>
    <div class="form-container">
        <h2 class="form-title">Registrar Cuenta</h2>
        <form action="procesar.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nombre" class="form-label"><b>Nombre</b></label>
                <input type="text" name="nombre" id="nombre" class="form-control">
            </div>

            <div class="mb-3">
                <label for="apellido_p" class="form-label"><b>Apellido Paterno</b></label>
                <input type="text" name="apellido_p" id="apellido_P" class="form-control">
            </div>

            <div class="mb-3 row">
                <div class="col-md-6">
                    <label for="rut" class="form-label"><b>RUT</b></label>
                    <input type="text" name="rut" id="rut" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="identificador" class="form-label"><b>Número Identificador</b></label>
                    <input type="text" name="identificador" id="identificador" class="form-control">
                </div>
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label"><b>Número de Teléfono</label>
                +56 9</b><input type="number" name="telefono" id="telefono" class="form-control">
            </div>

            <div class="mb-3">
                <label for="foto" class="form-label"><b>Foto de Perfil</b></label>
                <input type="file" name="foto" id="foto" class="form-control">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label"><b>E-mail</b></label>
                <input type="email" name="email" id="email" class="form-control">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label"><b>Contraseña</b></label>
                <input type="password" name="password" id="password" class="form-control">
            </div>


            <button type="submit" class="btn btn-primary">Registrar</button>
            <button type="submit" class="btn btn-primary">volver</button>
            <a href="index.php" class="submit" style="text-decoration: none; color: white; text-align: center; display: inline-block;">Inicio</a>

        </form>
    </div>
</body>

</html>