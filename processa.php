<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $idade = intval($_POST['idade']);
    $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : '';

    echo "<h2>Resultado:</h2>";
    echo "Nome: " . htmlspecialchars($nome) . "<br>";

    if ($idade > 18) {
        echo "Minha idade é: " . $idade . "<br>";
        echo "Sexo: " . htmlspecialchars($sexo) . "<br>";
        echo "Endereço: " . htmlspecialchars($endereco) . "<br>";
    } else {
        echo "Menor de idade";
    }
} else {
    echo "Formulário não enviado corretamente.";
}
?>
