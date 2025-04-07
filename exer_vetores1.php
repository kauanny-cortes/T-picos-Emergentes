<?php

$v1 = range(0, 12);            
$v2 = range(0, 100, 10);       
$v3 = range('a', 'i');         
$v4 = range('e', 'a');         




echo "Vetor v1: ";
foreach ($v1 as $valor) {
    echo $valor . " ";
}
echo "<br>";


echo "Vetor v2: ";
foreach ($v2 as $valor) {
    echo $valor . " ";
}
echo "<br>";


echo "Vetor v3: ";
foreach ($v3 as $valor) {
    echo $valor . " ";
}
echo "<br>";


echo "Vetor v4: ";
foreach ($v4 as $valor) {
    echo $valor . " ";
}
echo "<br>";
?>
