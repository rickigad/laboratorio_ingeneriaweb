<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor Pulgadas a Centímetros</title>
    <link rel="stylesheet" href="diseño.css">
</head>
<body>
    <div class="container">
        <h1>Convertidor de Medidas</h1>
    <form action="pulgadasacenti.php">
    <p> introduzca la medida en pulgadas</p>
    <p>pulgadas: <input type="number" name="pulgadas"></p>
    <button type="submit"> calcular </button>
    </from>

    <hr>

    <?php
    if (isset($_REQUEST['pulgadas'])) {
        $pulgadas= $_REQUEST ['pulgadas'];
        $centimetros= $pulgadas * 2.54;

        echo "<div class='resultado'>";
        echo "pulgadas: $pulgadas <br>";
        echo "centimetros: " . round ($centimetros,2) . "<br>";
        echo "</div>";
        }
?>
</body>
</html>