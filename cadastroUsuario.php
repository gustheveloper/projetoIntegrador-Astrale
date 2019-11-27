<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
  <link href="css/styleNay.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet"/>
  <title>Cadastro</title>
</head>

<body>
  <header class="border-bottom">
    <!-- Logo e Nome -->
  <?php include_once 'header.html'; ?>
  </header>
  <!-- Cadastro do Usuário -->
  <main class="d-flex justify-content-center align-items-center">
    <div class="login">
      <form id="social" action="" class="d-flex flex-column align-items-center mb-5">
        <h1 class="h2 title-login">Vamos começar!</h1>
        <p id="cadastroUsuario-p" class="more-size">Escolha como quer entrar</p>
        <button class="btn-enter"><a href="novaConta.php" style="text-decoration: none; color:white">Facebook</a></button>
        <button class="btn-enter"><a href="novaConta.php" style="text-decoration: none; color:white">Instagram</a></button>
        <a class="btn-enter text-white mb-5">Problemas para se cadastrar?</a>
      </form>
      <span class="cookies"> Ao clicar na opção, você concorda com nossos termos. Conheça mais sobre nossa politica de privacidade e politica de cookies</span>
    </div>
  </main>
</body>

</html>
