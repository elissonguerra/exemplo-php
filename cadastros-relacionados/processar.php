<?php
//Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Obter o estado selecionado
    $estado_id = $_POST['estado'];

    //Conectar ao banco de dados
    $conexao = mysqli_connect("localhost", "root", "", "banco");

    //Verificar se a conexão foi bem sucedida
    if (!$conexao) {
        die("Erro ao conectar ao banco de dados " .mysqli_connect_error());
    }

    //Consultar as cidades do estado selecionado
    $query = "SELECT nome FROM cidades WHERE estado_id = $estado_id";
    $result = mysqli_query($conexao, $query);

    //Exibir as cidades encontradas
    echo "<h2>Cidades do Estado Selecionado</h2>";
    if ($result -> num_rows == 0){
        echo "Não há cidades para este Estado";
    }
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>" . $row['nome'] . "</li>";
    }
    echo "</ul>";

    //Fechar a conexão com o banco de dados
    mysqli_close($conexao);
}
?>