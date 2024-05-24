<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta name="viewport" content="width=device-width, initial-sacale=1.0">
        <link rel="x-icon" href="fotos/logo.ico">
        <link rel="stylesheet" href="src/css/login.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <title>Nome do seu site</title>
        <meta charset="utf-8">
    </head>
    
    <body class="d-flex">
        <div class="container-login">
          <div class="wrapper-login">
           <div class="title">
             <span>Área Restrita</span>
           </div>  
           
           <form action="vlogin.php" class="form-login" method="POST">
               <div class="row">
                   <i class="fa-solid fa-user"></i>
                   <input type="text" placeholder="Insira seu e-mail" name="email" required>
               </div>
               
               <div class="row">
                   <i class="fa-solid fa-lock"></i>
                   <input type="password" placeholder="Insira sua senha" name="senha" required>
               </div>
               
               <div class="row button">
                   <input type="submit" value="Entrar">
               </div>
               
               <div class="signup-link">
                   <a href="#">Cadastrar</a> - <a href="#">Esqueceu a Senha</a>
               </div>
               
           </form>
           
          </div>
        </div>
        </div>
    </body>
</html>