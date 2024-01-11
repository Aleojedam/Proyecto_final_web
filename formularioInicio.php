<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
        background-image: url('img/pokemon1.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    } 
    input[type="email"], input[type="password"], .btn {
    width: 500px;
    height: 50px; 
    font-size: 1.2rem;
}

.card {
    margin: 20px; 
}



    </style>
</head>

<body>
    <form action="validar.php" method="POST" >
        <div class="container mt-5">
            <div class="row ">
            <div class="col-lg-12">               
                     <div class="card " style="border-radius:20px;  ">
                        <div class="card-body "
                            style="border-radius:20px; background: #A1FFCE;  /* fallback for old browsers */
                                                    background: -webkit-linear-gradient(to right, #FAFFD1, #A1FFCE);  /* Chrome 10-25, Safari 5.1-6 */
                                                background: linear-gradient(to right, #FAFFD1, #A1FFCE); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */">
                            <h5 class="card-title text-center">Inicio Sesión</h5>
                            <?php
                                if(isset($_GET['error'])){
                            ?>
                                <p class="error">
                                    <?php
                                        echo $_GET['error'];
                                    ?>
                                </p>
                            <?php
                                }
                            ?>
                            <div class="form-group">
                                <label for="email">Usuario</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="Password" name="password" placeholder="password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Iniciar</button>
                            <p class="text-center mt-2">
                                no tienes cuenta ?  <a href="RegUsuario.php">registrar</a>
                                <a href="index.php">volver</a>
                            </p>
                           

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>