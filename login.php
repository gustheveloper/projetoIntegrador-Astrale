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
    <title>Login</title>
</head>

<body>
        <!-- Logo e Nome -->
            <?php include 'header.html'; ?>

    <main class="d-flex justify-content-center align-items-center">
        <div class="login" >
            <form action="" class="d-flex flex-column justify-content-center align-items-center">
                <h1 id="text-shadow" class="h2 title-login">Login</h1>
                <p id="text-shadow">Lorem ipsum dolor sit amet, consetetur adipiscing edit</p>
                <input class="input-1" type="email" name="email" id="email" placeholder="Email"/>
                <input class="input-1" type="password" name="senha" id="senha" placeholder="Senha"/>
                <br>
                <button class="btn-enter"><a href="conexoes.html" style="text-decoration: none; color:white">Login</a></button>
                <br><br>
            <div  class ="forgot d-flex justify-content-center">
                <a id="text-shadow" href="#">Esqueceu seu email? </a><a id="text-shadow" href="#">| Esqueceu sua senha?</a>
            </div>
            <div class="">
                <div id="checkbox-w" class="d-flex justify-content-between align-items-center" id="text-shadow">
                    <input type ="checkbox" class=""/>
                    <span id="text-shadow" class="text-white">Lembrar meu Login</span>
                </div>

            </div>
        </div>
    </form>
    </main>
</body>

</html>
