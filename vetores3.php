<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Convidados</title>
</head>
<body>

    <?php
    session_start();

    if (!isset($_SESSION['convidados'])) {
        $_SESSION['convidados'] = [];
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['nome'])) {
        $nome_convidado = htmlspecialchars($_POST['nome']);
        $_SESSION['convidados'][] = $nome_convidado; 
    }
    ?>

    <h1>Lista de Convidados</h1>

    
    <form method="POST">
        <label for="nome">Nome do Convidado:</label>
        <input type="text" id="nome" name="nome" required>
        <button type="submit">Adicionar</button>
    </form>

    <h2>Convidados:</h2>
    <ul>
        <?php
        
        if (count($_SESSION['convidados']) > 0) {
            foreach ($_SESSION['convidados'] as $convidado) {
                echo "<li>" . htmlspecialchars($convidado) . "</li>";
            }
        } else {
            echo "<li>Não há convidados ainda.</li>";
        }
        ?>
    </ul>

</body>
</html>
