<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/entrar.css">
    <title>Theus - Login</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
  <div class="container">

    <!-- inicio do formulario -->
    <form method="POST" action="vlogin.php">
      <div class="content-form">
        
        <div class="form-title">
          <h3 class='title-entrar'>Entrar</h3>
        </div>
        
        <div class="form-input">
        
        <div class="email-form">
         <input class='email' type="text" name="email" placeholder="Digite o email">
                
        </div>
        
        <div class="senha-form">
        <input class="senha" type="password" name="senha" placeholder="Digite a sua senha">
        <div class="icon-olho">
        <i class="fa-solid fa-eye"></i>
        </div>
        </div>
            
        
</div>
        <div class='links-form'>
        <a href='esqueceu.php'>Esqueceu a senha</a>
        <a href='cadastro.php'>Cadastrar</a>
        </div>
        
        <div class="g-recaptcha" data-sitekey="6Le0ENopAAAAAEBYnqkIUcVfiI-FM8piGJ8ljm1y"></div>


        <div class='lembrar-login'>
          
        <div class='lembrar-content'>
        <input id='btn-lembrar' type="checkbox">

        <label for="btn-lembrar">Lembre-me</label>
        </div>
                <input class="btn-entrar" type="submit" name="acessar" value="Entrar">
        </div>
        
        
       </div> 
       
    </form>
    
    <!-- Fim do formulário -->
    </div>
<script>
</script>
</body>

</html>