<?php
if (empty($_REQUEST['radio'])) {
    echo "introduce el radio";
}
else {
    $radio = $_REQUEST['radio'];
    $Area = pi() * pow($radio,2);
    $perimetro = 2 * pi() * $radio;

    echo "Radio: $radio <br>";
    echo "Area: $Area <br>";
    echo "Perimetros: $perimetro";
}
?>