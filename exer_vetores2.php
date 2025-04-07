<?php

$v1 = array("Ferrari", "McLaren", "Red Bull", "BMW", "BAR");
$v2 = array('a' => 8, 'b' => 9, 'd' => 6, 'c' => 2, 'e' => 5);
$v3 = array("rg" => "00.000.00-X", "cpf" => "000.000.000-00", "cartao de credito" => 12345);
$chamada = array("aluno1" => "alberto", "aluno3" => "bianca", "aluno5" => "carlos", "aluno24" => "maria");


echo "Vetor v1: <br>";
foreach ($v1 as $key => $valor) {
    echo "Chave: $key => Valor: $valor <br>";
}
echo "<br>";

echo "Vetor v2: <br>";
foreach ($v2 as $key => $valor) {
    echo "Chave: $key => Valor: $valor <br>";
}
echo "<br>";


echo "Vetor v3: <br>";
foreach ($v3 as $key => $valor) {
    echo "Chave: $key => Valor: $valor <br>";
}
echo "<br>";


echo "Vetor chamada: <br>";
foreach ($chamada as $key => $valor) {
    echo "Chave: $key => Valor: $valor <br>";
}
?>
