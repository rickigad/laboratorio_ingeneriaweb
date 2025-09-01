<?php
if (empty($_REQUEST['pulgadas'])) {
    echo "introduce pulgadas";
}
else {
$pulgadas= $_REQUEST ['pulgadas'];
$centimetros= $pulgadas * 2.54;

echo "pulgadas: $pulgadas <br>";
echo "centimetros: $centimetros";
}
?>