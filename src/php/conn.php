<?php
// Hospedagem
$host = "localhost";
// Usuario
$user = "root";
// Senha
$passwod = "";
// sua db
$db = "nome da sua db";

try {
    // Conexão com o banco de dados
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $passwod);
    echo "Conexão ao banco de dados feita com sucesso!";

} catch (Exception $e) {
    echo "Erro ao conectar ao banco de dados!";
}
?>