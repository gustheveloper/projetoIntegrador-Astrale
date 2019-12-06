<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleGiuli.css">
    <link rel="stylesheet" href="css/styleGus.css">
    <link rel="stylesheet" href="css/styleGus1.css">
    <link rel="stylesheet" href="css/styleJulia.css">
    <link rel="stylesheet" href="css/styleNay.css">
    <link rel="stylesheet" href="css/syleTintino.css">
   
    <title>@yield('titulo')</title>
</head>
<body>
<header class="border-bottom">
            <!-- Logo e Nome -->
        <nav id="header" class="navbar">
            <a id="nomeDoSite" class="navbar-brand text-white" href="index.php">
                <img src="image/imagemLogo.png" width="35" height="35" class="d-inline-block align-top" alt="">
                Astrale
            </a>
            <!-- Navegação -->

                <ul class="nav justify-content-around headerList">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="blog.php" target="_self">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="contato.html" target="_self">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a id="login" class="nav-link" href="login.php" target="_self">Login</a>
                    </li>
                  </ul>
        <a class="nav-link dropdown-toggle headerMenu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu
        </a>
        <div class="dropdown-menu drop" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="blog.php">Blog</a>
          <a class="dropdown-item" href="login.php">Login</a>
        </div>
  </nav>
</header>
  <main class= "container">
  @yield ("conteudo")
  </main>
        <footer id="footer" class="d-flex justify-content-center align-items-center">
            © Copyright Group Astrale
        </footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>


