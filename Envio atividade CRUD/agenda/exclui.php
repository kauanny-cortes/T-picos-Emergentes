<?php
include('conexao.php');

$id = $_GET['id'];

$sql = "DELETE FROM contatos WHERE id = $id";

$resultado = mysqli_query($conexao, $sql);

if ($resultado) {
    echo "Contato excluído com sucesso!";
    echo "<br><a href='index.php'>Voltar</a>";
} else {
    echo "Erro ao excluir: " . mysqli_error($conexao);
}

?>