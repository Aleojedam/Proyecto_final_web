<?php
require_once("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registar cuenta</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-5" style="margin-left: -200px">
                <form action="modificarNoticia.php" method="post" enctype="multipart/form-data">

                    <label for="titulo" class="form-label">Titulo de la noticia a modificar</label><br>
                    <input type="text" name="titulo" id="titulo" class="form-control"><br>
                           
                    
                    <input type="submit" value="Enviar" class="btn btn-primary" name="action" >
                
            </div> 
            </form>
        </div>
        </div>   

    
</body>
</html>