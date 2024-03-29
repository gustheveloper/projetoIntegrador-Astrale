<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/styleGiuli.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <title>Mensagens</title>
</head>

<body>
    <header class="border-bottom">
            <!-- Logo e Nome -->
        <?php include_once 'header.html'; ?>
        
    </header>

    <main class="container-fluid">
        <div class="row">
            <!-- menu secundário e cards -->
            <div class="col-lg-4 col-md-4 pl-0 pr-0">
                <aside class="border-right bg-light">
                    <!-- menu aside -->
                    <nav id="menuSecundario" class="navbar navbar-light bg-light">
                        <img src="image/me.jpeg" width="75" height="75" class="d-inline-block align-top rounded-circle" alt="">
                        <div>
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="meuPerfil.html" target="_self">Meu Perfil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="conexoes.html" target="_self">Conexões</a>
                                </li>
                                <li class="nav-item">
                                    <a id="mensagens" class="nav-link mensagens" href="mensagens.html" target="_self">Mensagens</a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                    <!-- cards com os perfis conectados -->
                    <section class="cardsConexoes">
                        <div class="card mb-5" style="max-width: 100vw;">
                            <div class="row no-gutters">
                                <div class="col-lg-7 col-md-7 col-7">
                                    <div class="card-body">
                                        <h5 class="card-title">Nome, idade</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, dolores! </p>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-5 col-5">
                                    <img src="image/exemploFotoPerfil.jpg" width="190" height="190" class="card-img" alt="...">
                                </div>
                            </div>
                        </div>

                        <div class="card mb-5 border border-warning" style="max-width: 100vw;">
                            <div class="row no-gutters">
                                <div class="col-lg-7 col-md-7 col-7">
                                    <div class="card-body">
                                        <h5 class="card-title">Nome, idade</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, dolores! </p>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-5 col-5">
                                    <img src="image/exemploFotoPerfil.jpg" width="190" height="190" class="card-img" alt="...">
                                </div>
                            </div>
                        </div>

                        <div class="card mb-5" style="max-width: 100vw;">
                            <div class="row no-gutters">
                                <div class="col-lg-7 col-md-7 col-7">
                                    <div class="card-body">
                                        <h5 class="card-title">Nome, idade</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, dolores! </p>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-5 col-5">
                                    <img src="image/exemploFotoPerfil.jpg" width="190" height="190" class="card-img" alt="...">
                                </div>
                            </div>
                        </div>

                        <div class="card mb-5" style="max-width: 100vw;">
                            <div class="row no-gutters">
                                <div class="col-lg-7 col-md-7 col-7">
                                    <div class="card-body">
                                        <h5 class="card-title">Nome, idade</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, dolores! </p>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-5 col-5">
                                    <img src="image/exemploFotoPerfil.jpg" width="190" height="190" class="card-img" alt="...">
                                </div>
                            </div>
                        </div>

                    </section>
                </aside>
            </div>


            <!-- chat -->
            <div class="col-lg-8 col-md-8">

                <!-- parte do chat onde as mensagem são mostradas -->
                <div class="chatConversa bg-light border">
                    <section>
                            <div class="media m-3 mb-5">
                                <img src="image/exemploFotoPerfil.jpg" width="75" height="75" class="mr-3 rounded-circle" alt="...">
                                <div class="media-body">
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </div>

                            <div class="media m-3 mb-5">
                                <div class="media-body">
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                                <img src="image/me.jpeg" width="75" height="75" class="mr-3 rounded-circle" alt="...">
                            </div>
                            <div class="media m-3 mb-5">
                                <img src="image/exemploFotoPerfil.jpg" width="75" height="75" class="mr-3 rounded-circle" alt="...">
                                <div class="media-body">
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </div>

                            <div class="media m-3 mb-5">
                                <div class="media-body">
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                                <img src="image/me.jpeg" width="75" height="75" class="mr-3 rounded-circle" alt="...">
                            </div>
                            <div class="media m-3 mb-5">
                                <img src="image/exemploFotoPerfil.jpg" width="75" height="75" class="mr-3 rounded-circle" alt="...">
                                <div class="media-body">
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </div>

                            <div class="media m-3 mb-5">
                                <div class="media-body">
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                                <img src="image/me.jpeg" width="75" height="75" class="mr-3 rounded-circle" alt="...">
                            </div>
                    </section>
                </div>

                <!-- parte do chat onde escreve a mensagem -->
                <div class="chatEscreve border">
                    <form>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" placeholder="Digite uma mensagem"></textarea>
                        </div>
                    </form>
                </div>


            </div>

        </div>
    </main>




</body>
</html>
