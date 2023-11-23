<?php

// Abre a conexão com o banco de dados
$conexao = mysqli_connect("localhost", "root", "");

// Seleciona o banco de dados
mysqli_select_db($conexao, "formulario_contato");

// Cria a tabela
$consulta = "CREATE TABLE contatos (
  email VARCHAR(255) NOT NULL,
  descricao TEXT
);";

if (mysqli_query($conexao, $consulta) === TRUE) {
    echo "Tabela criada com sucesso!";
} else {
    echo "Erro ao criar tabela: " . mysqli_error($conexao);
}

// Verifica se a tabela existe
$consulta = "SHOW TABLES;";
$resultado = mysqli_query($conexao, $consulta);

if (mysqli_num_rows($resultado) > 0) {
    // A tabela existe
    echo "A tabela existe!";
} else {
    // A tabela não existe
    echo "A tabela não existe!";
}

// Fecha a conexão
mysqli_close($conexao);

?>