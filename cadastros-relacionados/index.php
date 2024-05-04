<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecionar Cidade por Estado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Selecione um Estado</h2>
    <form action="processar.php" method="post">
        <label for="estado">Estado:</label>
        <select name="estado" id="estado">
        <option value="">Selecione...</option>
        <?php
        //Conectar ao banco de dados
        $conexao = mysqli_connect("localhost", "root", "", "banco");

        //Verificar se a conexão foi bem sucedida
        if (!$conexao) {
            die ("Erro ao conectar ao banco de dados: " .mysqli_connect_error());
        }

        // Consultar os estados no banco de dados
        $query = "SELECT id, nome FROM estados";
        $result = mysqli_query($conexao, $query);

        //Exibir as opções de estado no select
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='" . $row['id'] . "'>" . $row['nome'] . "</option>";
        }

        //Fechar a conexão com o banco de dados
        mysqli_close($conexao);
        ?>
        </select>
        <br>
        <input type="submit" value="Selecionar">
    </form>
    
</body>
</html>