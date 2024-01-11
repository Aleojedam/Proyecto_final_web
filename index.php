<?php 
require_once("conexion.php");
function get_qr($fila){
    $infoqr = $fila['enlace'];

    return "https://api.qrserver.com/v1/create-qr-code/?data=" . urlencode($infoqr) . "&size=70x70&ecc=L";
}
?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página Principal</title>
    <link rel="shortcut icon" href="img/logo1.png" type="image/x-icon">

    <!-- Enlace al archivo CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Estilos personalizados -->
    <style>
    @import url('https://fonts.cdnfonts.com/css/pokemon-solid');

    #ribbon {
        background-color: rgb(218, 06, 26);
        background-image: repeating-linear-gradient(45deg, transparent, transparent 25px, rgba(131, 21, 21, 0.5) 25px, rgba(131, 21, 21, 0.5) 40px);
    }

    #ribbon::after {
        content: '';
        background-color: transparent;
        display: block;
        height: 500px;
        width: 50%;
        margin: 0 auto;
        position: relative;
        left: auto;
        margin-top: 40px;
    }

    #separator-ribbon {
        width: 100%;
        overflow: hidden;
        position: relative;
        z-index: 2;
    }

    #separator-ribbon .content {
        width: 150%;
        height: 150px;
        margin-left: -25%;
        border-bottom-left-radius: 50%;
        border-bottom-right-radius: 50%;
    }

    @import url('https://fonts.cdnfonts.com/css/pokemon-solid');

    body {
        padding-top: 60px;
        /* Altura del navbar en dispositivos grandes */
    }

    @media (max-width: 768px) {
        body {
            padding-top: 0;
            /* Sin padding en dispositivos más pequeños */
        }
    }

    header {
        background-color: red;
        color: white;
        padding: 10px;
    }

    .nav-link {
        color: white;
    }

    .news {
        margin-top: 10px;
        border: 2px solid lightgray;
        border-radius: 10px;
        float: left;
        padding-top: 40px;
    }

    .relleno {
        background-color: lightcoral;
        float: left;
        margin-left: 5%;
        border-radius: 10px;

    }

    .news_element {
        text-align: center;
        height: 300px;
        border-right: 1px solid #000;
        border-top: 1px solid #000;
        border-bottom: 1px solid #000;
        border-radius: 10px;
        background-color: lightgray;
        float: left;
        margin-bottom: 30px;
        overflow: hidden;

    }

    .news_element a {
        text-decoration: none;
        color: #000;
    }

    .news_img {
        width: 80%;
    }

    .news_button {
        float: left;
        margin-right: 20px;
    }

    .news_button a {
        text-decoration: none;
        color: #000;

    }

    <?php session_start();
    ?>
    </style>
</head>

<body>

    <div id="ribbon">
        <!-- Navbar de Bootstrap -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top " style="background: #ED213A;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #93291E, #ED213A);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #93291E, #ED213A); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
            <div class="container" style="background: #ED213A;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #93291E, #ED213A);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #93291E, #ED213A); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
                <a class="navbar-brand" href="#"
                    style="font-family: 'Pokemon Solid', sans-serif; color: yellow; text-shadow: 2px 2px 5px #000;">PokeNews</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Inicio</a>
                        </li>
                        <!-- inicio / cerrar  -->

                        <?php if (isset($_SESSION['email'])): ?>
                        <li class="nav-item">
                            <!-- Mostrar botón de perfil solo si el usuario ha iniciado sesión -->
                            <a class="nav-link" href="perfil.php">Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cerrar_sesion.php">Cerrar Sesión</a>
                            <?php else: ?>
                        </li>
                        <!-- Mostrar botones de inicio de sesión o registro si no hay sesión activa -->
                        <li class="nav-item">
                            <a class="nav-link" href="iniciosesion.php">Iniciar Sesión</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Regusuario.php">Registrarse</a>
                        </li>
                        
                        <?php endif; ?>
                        <li class="nav-item">
                            <a class="nav-link" href="Parte2/problemas.php">Parte 2</a>
                        </li>



                    </ul>
                </div>
            </div>
        </nav>

        <!-- Contenido principal -->
        <header class="container " style="background: #fffbd5;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #b20a2c, #fffbd5);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #b20a2c, #fffbd5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
            <h1 style="font-family: 'Pokemon Solid', sans-serif; color: yellow; text-shadow: 2px 2px 5px #000;">PokeNews
            </h1>
            <p>Noticias de pokemon al dia</p>
        </header>
        <div class="container" style="background: #EF3B36;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #FFFFFF, #EF3B36);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #FFFFFF, #EF3B36); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
            <div class="row">
                <div class="news col-xs-8 col-md-7 col-lg-7">
                    <?php
                       $email =  $_SESSION ['email'];
                       $sql = "SELECT * FROM formulario WHERE email = '$email';";
                       $resultado = $conexion->query($sql);
                       $resultado = $resultado->fetch_assoc();
 
                            // Verificar si el usuario tiene el rol de administrador
                            if ($resultado['rol'] === 'admin'){
                                echo '<button type="button" class="news_button"><a href="agregar.php">Agregar</a></button>
                                <button type="button" class="news_button"><a href="eliminar.php">Eliminar</a></button>
                                <button type="button" class="news_button"><a href="modificar.php">modificar</a></button>
                                <br><br>';
                            }
                        

                    ?>

                    <?php
                        require_once("conexion.php");
                        $sql = "SELECT * FROM noticias ORDER BY id DESC;";
                        $resultado = $conexion->query($sql);
                        while($noticia = $resultado->fetch_assoc()) {
                            echo '<div class="news_element col-xs-6 col-md-4 col-lg-4 ">';
                            echo '  <a href="'.$noticia["enlace"].'">';
                            echo '      <img class="news_img" src="'.$noticia["foto"].'">';
                            echo  '<img src="'. get_qr($noticia).'"';
                            echo '      <h5>'.$noticia["titulo"].'</h5>';
                            echo '  </a>';
                            echo '</div>';
                        }

                    ?>
                </div>
                <div class="relleno col-xs-3 col-md-4 col-lg-4">
                    <h2>¿Que es pokemon?</h2>
                    <h5>Pokémon es una franquicia, que originalmente comenzó como un videojuego RPG, pero debido a su
                        popularidad ha logrado expandirse a otros medios de entretenimiento como series de televisión,
                        juegos de cartas, ropa, entre otros, convirtiéndose en una marca que es reconocida en el mercado
                        mundial.</h5>
                    <h2>Pokemon favorito de la pagina</h2>
                    <?php
                $apiUrl = "https://pokeapi.co/api/v2/pokemon/905";
                $jsonResponse = file_get_contents($apiUrl);
                $data = json_decode($jsonResponse, true);
                $imageUrl = $data["sprites"]["front_default"];
        
                ?>
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="
                            <?php 
                            echo "$imageUrl";
                            ?>" class="d-block w-100" alt='
                            <?php 
                            echo $data ["name"];
                            ?>'>
                                <h5> Nombre:
                                    <?php
                            echo $data ["name"];
                            echo "</h5>";
                            echo "<h5> Tipos: ";
                            foreach($data["types"] as $valor){
                                echo $valor["type"]["name"]." ";
                            }
                            echo "</h5>";
                            $apiUrl = "https://pokeapi.co/api/v2/pokemon/445";
                            $jsonResponse = file_get_contents($apiUrl);
                            $data = json_decode($jsonResponse, true);
                            $imageUrl = $data["sprites"]["front_default"]; 
                            ?>
                            </div>
                            <div class="carousel-item">
                                <img src="
                            <?php 
                            echo "$imageUrl";
                            ?>" class="d-block w-100" alt='
                            <?php 
                            echo $data ["name"];
                            ?>'>
                                <h5> Nombre:
                                    <?php
                            echo $data ["name"];
                            
                            echo "</h5>";
                            echo "<h5> Tipos: ";
                            foreach($data["types"] as $valor){
                                echo $valor["type"]["name"]." ";
                            }
                            echo "</h5>";
                            $apiUrl = "https://pokeapi.co/api/v2/pokemon/635";
                            $jsonResponse = file_get_contents($apiUrl);
                            $data = json_decode($jsonResponse, true);
                            $imageUrl = $data["sprites"]["front_default"]; 
                            ?>
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo "$imageUrl";?>" class="d-block w-100"
                                    alt="<?php echo $data ["name"]; ?>">
                                <h5> Nombre: <?php echo $data ["name"];
                                echo "<h5> Tipos: ";
                                foreach($data["types"] as $valor){
                                    echo $valor["type"]["name"]." ";
                                }
                                echo "</h5>";
                            ?></h5>
                            </div>

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">siguiente</span>
                        </button>
                    </div>


                    <br>



                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php mysqli_close($conexion);  ?>