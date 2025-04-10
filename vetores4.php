<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Dívida</title>
</head>
<body>

    <h1>Calculadora de Dívida</h1>

    
    <form method="POST">
        <label for="divida">Valor da Dívida (R$):</label>
        <input type="number" id="divida" name="divida" required><br><br>

        <label for="juros">Taxa de Juros (%):</label>
        <input type="number" id="juros" name="juros" required><br><br>

        <label for="parcelas">Número de Parcelas:</label>
        <input type="number" id="parcelas" name="parcelas" required><br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $divida = $_POST['divida'];
        $juros = $_POST['juros'];
        $parcelas = $_POST['parcelas'];

        
        $montante_total = $divida * (1 + $juros / 100);

        
        $valor_parcela = $montante_total / $parcelas;

        
        $media_parcelas = $valor_parcela;

        
        echo "<h2>Resultado:</h2>";
        echo "<p><strong>Valor da Dívida:</strong> R$ " . number_format($divida, 2, ',', '.') . "</p>";
        echo "<p><strong>Taxa de Juros:</strong> " . number_format($juros, 2, ',', '.') . "%</p>";
        echo "<p><strong>Número de Parcelas:</strong> " . $parcelas . "</p>";
        echo "<p><strong>Montante Total (com juros):</strong> R$ " . number_format($montante_total, 2, ',', '.') . "</p>";
        echo "<p><strong>Valor de Cada Parcela:</strong> R$ " . number_format($valor_parcela, 2, ',', '.') . "</p>";
        echo "<p><strong>Média das Parcelas:</strong> R$ " . number_format($media_parcelas, 2, ',', '.') . "</p>";
    }
    ?>

</body>
</html>
