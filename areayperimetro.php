<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Área y Perímetro</title>
    <link rel="stylesheet" href="diseño.css">
</head>
<body>
    <div class="container">
        <h1>Calculadora de Círculo</h1>

        <form  action="areayperimetro.php">
            <p>Introduzca el radio de su círculo</p>
            <p>Radio: <input type="number" name="radio" required></p>
            <button type="submit" name="calcular">Calcular</button>
        </form> 

        <hr>

        <?php
        // Solo se ejecuta si se presionó el botón
        if (isset($_REQUEST['calcular'])) {
            $radio = $_REQUEST['radio'];
            $area = pi() * pow($radio, 2);
            $perimetro = 2 * pi() * $radio;

            echo "<div class='resultado'>";
            echo "Radio: $radio <br>";
            echo "Área: " . round($area,2) . "<br>";
            echo "Perímetro: " . round($perimetro,2);
            echo "</div>";
           
        }
        ?>
    </div>
</body>
</html>
