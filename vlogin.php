<?php
error_reporting(0);
session_start();

require_once("src/php/conn.php");

$host = "localhost";
$user = "root";
$passwod = "";
$db = "seu nome";
$email = $_POST['email'];
$dominio = "http://localhost:2000";

// redireciona o usuário pra outra página caso o login esteja correto
$url = "$dominio/entrada.php?email=$email";
   
// redireciona o usuário pra outra página caso o login esteja incorreto
$url2 = "$dominio/login.php";


//Verificar se o email e a senha está definido e remove as tags html e escapa as aspas simples.

if (!empty($email) && !empty($senha)) {

$email = strip_tags($email);
$email = addslashes($email);

$senha = strip_tags($senha);
$senha = addslashes($senha);
} else {
  
}

    // prepara o comando pro banco de dados
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
    
    // envia o valor que esta no $email 
    $stmt->bindParam(":email", $email);
    
    // Enbia o comando pro banco de dados
    $stmt->execute();
    
    // Transforma os dados da consulta sql em objetos
    $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    
////////////////////////////////////////////////////// 
   
    $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($ch,CURLOPT_POSTFIELDS, http_build_query(array(
  "secret" => "6Le0ENopAAAAAPqsU0wVA85r4c-Sjh0yHZjySOg6",
  "response" => $_POST["g-recaptcha-response"],
  "remoteip" => $_SERVER['REMOTE_ADDR']
  )));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$recaptcha = json_decode(curl_exec($ch), true);

curl_close($ch);

if ($recaptcha["success"] === true) {

    // Verifica o usuario e a senha
    if ($dados['email'] === $email && $dados['senha'] == $senha) {
     echo "Logado com sucesso!";
    } else {
    echo "email ou senha invalidos!";
    }

} else {
header("Location: $url2");
}


?>
