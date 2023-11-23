<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro_login_db";

// $conn serve para criar conexões, conjunto outros elementos visiveis a baixo ;) 
$conn = new mysqli($servername, $username, $password);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Cria o banco de dados SE NAO existir 
$sql_create_db = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql_create_db) === TRUE) {
    echo "Banco de dados criado com sucesso<br>";
} else {
    echo "Erro ao criar o banco de dados: " . $conn->error;
}

// Conecta ao banco de dados
$conn->select_db($dbname);

// cria a tabela de usuarios dentro do database - o VARCHAR é uma variavel que armazena caracteres e numeros,
// voce define seu tamanho varchar suporta mais de mil caracteres.
$sql_create_table = "CREATE TABLE IF NOT EXISTS `usuarios` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `nome` VARCHAR(50) NOT NULL,
    `email` VARCHAR(50) NOT NULL UNIQUE, 
    `senha` VARCHAR(255) NOT NULL 
)";
// faz a verificação sobre a tabela citada a cima com create table
if ($conn->query($sql_create_table) === TRUE) {
    echo "Tabela de usuários criada com sucesso<br>";
} else {
    echo "Erro ao criar a tabela de usuários: " . $conn->error;
}

// insere um usuario de exemplo
$nome_exemplo = 'Exemplo Usuário';
$email_exemplo = 'exemplo@email.com';
$senha_exemplo = password_hash('senha_de_exemplo', PASSWORD_DEFAULT);
// usa o metodo insert é usado para adicionar novos registros, neste caso usamos para inserir os valores do usuario.
$sql_insert_user = "INSERT INTO `usuarios` (`nome`, `email`, `senha`) VALUES ('$nome_exemplo', '$email_exemplo', '$senha_exemplo')";
if ($conn->query($sql_insert_user) === TRUE) {
    echo "Usuário de exemplo inserido com sucesso<br>";
} else {
    echo "Erro ao inserir usuário de exemplo: " . $conn->error;
}

// Fecha a conexão
$conn->close();
?>
