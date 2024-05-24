<?php
error_reporting(0);
session_start();

require_once("src/php/conn.php");

$email = $_POST['email'];
$senha = $_POST['senha'];
$dominio = "http://localhost:2000";

// redireciona o usuário pra outra página caso o login esteja correto
$url = "$dominio/dash.php";
   
// redireciona o usuário pra outra página caso o login esteja incorreto
$url2 = "$dominio/index.php";


//Verificar se o email e a senha está definido e remove as tags html e escapa as aspas simples.

if (empty($email) && empty($senha)) {


} else {
$email = strip_tags($email);
$email = addslashes($email);

$senha = strip_tags($senha);
$senha = addslashes($senha);

}

    // prepara o comando pro banco de dados
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
    
    // envia o valor que esta no $email 
    $stmt->bindParam(":email", $email);
    
    // Envia o comando pro banco de dados
    $stmt->execute();
   
    // Transforma os dados da consulta sql em objetos
    $dados = $stmt->fetchAll(PDO::FETCH_ASSOC); 
   

    // Verifica o usuario e a senha
    if ($email == $dados['email'] && $senha == $dados['senha']) {
    
    //caso estiver certo redireciona o usuário pra o endereço da $url
     echo "Logado com sucesso!";
     
    } else {
    
    //caso não estiver certo redireciona o usuário pra o endereço da $url2
    header("Location: $url2");
    
   }

?>
