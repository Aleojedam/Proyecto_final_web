<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problemas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body{
            padding-top:50px ;
        }
        .col-12{
            background-color: lightcyan;
            border: 1px solid lightgray;
            margin-bottom: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        
        <div class="col-12">
            <h3>Problema 1:</h3>
            <p>Un jet aterriza con una velocidad de 100 m/seg y puede acelerar a una tasas maxima de -5m/seg² cuando se va a detener</p><br>
            <p>a) A partir del instante en que toca la pista de aterrizaje. ¿Cual es el tiempo minimo necesario antes de que se detenga? </p><br>
        </div>
        <?php

        //Formula a utilizar t = vf-vi/a.
        $vf = 0;
        $vi = 100;
        $a = -5;
        $t = ($vf-$vi)/$a;
        echo "<b style='margin-left: 30px;'>R:</b> El tiempo minimo necesario para que el jet se detenga es de $t segundos.<br><br><br>";

        ?>
        <div class="col-12">
            <h3>Problema 2:</h3>
            <p>Una piloto de arrancones inicia la marcha de su vehículo desde el reposo y acelera a 10 m /seg2 durante una distancia total de 400 m (1⁄4 de milla).</p><br>
            <p>a) ¿Cuánto tiempo tarda el carro en recorrer esta distancia? </p><br>
            <p>b) ¿Cuál es su velocidad al final del recorrido? </p><br>
        </div>
        <?php 
        //b) formula a utilizar vf² = vi² + 2*a*x
        $vi = 0;
        $a = 10;
        $x = 400;
        $vf = sqrt($vi**2 + 2*$a*$x);
        echo "<b style='margin-left: 30px;'>B) R:</b> La velocidad final del vehiculo al final del recorrido es de ".round($vf,2)." m/seg².";

        //a) formula a utilizar t = vf-vi/a.
        $t = ($vf-$vi)/$a;
        echo "<b style='margin-left: 30px;'>A) R:</b> En recorrer $x m se demora ". round($t,2) ." segundos.<br><br><br>";

        ?>
        <div class="col-12">
            <h3>Problema 3:</h3>
            <p>Una pelota de golf se suelta desde el reposo del techo de un edificio muy alto. Despreciando la resistencia del aire, calcule (a) la posición y (b) la velocidad de la pelota después de 1 seg, 2 seg. y 3 seg.</p><br>
            
            
        </div>
        <?php
        //Formulas a utilizar vf = vi + a*t  y  x = ((vi+vf)/2)*t
        $vi = 0;
        $a = 9.8;
        $t1 = 1;
        $t2 = 2;
        $t3 = 3;
        $vf1 = $vi + $a*$t1;
        $vf2 = $vi + $a*$t2;
        $vf3 = $vi + $a*$t3;
        $x1 = (($vi+$vf1)/2)*$t1;
        $x2 = (($vi+$vf2)/2)*$t2;
        $x3 = (($vi+$vf3)/2)*$t3;
        
        echo "<b style='margin-left: 30px;'>R:<br></b>
        <b style='margin-left: 50px;'> segundo 1: A)</b> velocidad final: $vf1 m/seg <b>B)</b> distancia: $x1 metros 
        <br><br><b style='margin-left: 50px;'>segundo 2: A)</b> velocidad final: $vf2 m/seg  <b>B)</b> distancia: $x2 metros 
        <br><br><b style='margin-left: 50px;'>segundo 3: A)</b> velocidad final: $vf3 m/seg  <b>B)</b> distancia: $x3 metros<br><br><br>";
        ?>
        <div class="col-12">
            <h3>Problema 4:</h3>
            <p>Una estudiante lanza un llavero verticalmente hacia arriba a su hermana del club femenino de estudiantes, que esta en una ventana 4 m arriba. Las llaves son atrapadas 1.5 seg. después por el brazo extendido de la hermana. (a) Con que velocidad inicial fueron lanzadas las llaves? (b) Cual era la velocidad de las llaves justo antes que fueran atrapadas?</p><br>
            
            
        </div>
        <?php
            // formulas a utilizar x = vi*t + 1/2*a*t²  y  vf = vi + a*t
            // formula manipulada algebraicamente vi = x/t-1/2*a*t
            $x = 4;
            $t = 1.5;
            $a = -9.8;
            $vi = ($x/$t)-($a*$t)/2;
            $vf = $vi + $a*$t;
            echo "<b style='margin-left: 30px;'>R:</b> su velocidad inicial es fue de". round($vi,2)." m/seg y su velocidad justo antes de ser atrapada fue de ". round($vf,2)."m/seg, lo cual quiere decir que las llaves subieron a su punto mas alto y fueron atrapadas al ir bajando.<br><br><br>"
        ?>
        <div class="col-12">
            <h3>Problema 5:</h3>
            <p>Se informó que una mujer cayó 144 pies desde el piso 17 de un edificio, aterrizando sobre una caja de ventilador metálica, la cual sumió hasta una profundidad de 18 pulg. Sólo sufrió lesiones menores. Ignore la resistencia del aire y calcule a) la velocidad de la mujer exactamente antes de chocar con el ventilador, b) su aceleración promedio mientras está en contacto con la caja, y c) el tiempo que tarda en sumir la caja.</p><br>
            
        </div>
        <?php
            
                //formulas a utilizar m = ft * 0.3048  ,  m = inch * 0.0254 , vf² = vi² + 2*a*x   y   d = 1/2*g*t^2
                $x = 144* 0.3048;
                $x1 = 18 * 0.0254;
                $vi = 0;
                $a = 9.8;

                $vf = sqrt($vi**2 + 2*$a*$x);
                //aceleracion es constante asi que a=g
                $t = sqrt($x1/($a/2));
                echo "<b style='margin-left: 30px;'>R:</b> su velocidad antes de chocar con el ventilador fue de". round($vf,2)."m/s, su aceleracion promedio es igual a la gravedad ya que es constante osea 9.8 m/s² y el tiempo que se tardo en sumir la caja fue de ".round($t,2)."s <br><br><br>"



            ?>
        
    </div>
</body>
</html>