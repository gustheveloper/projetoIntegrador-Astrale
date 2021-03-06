<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="css/styleTintino.css" rel="stylesheet">
    <link href="css/StyleGus1.css" rel="stylesheet">
    <title>Document</title>
</head>

<body id="index-body" class="container-fluid">

    <!-- HEADER -->

        <?php include_once("header.html"); ?>


    <!--MAIN -->

                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div id="img-1" class="d-flex align-items-center border-bottom">
                                <div id="home-texto" class="d-flex flex-column">
                                    <h1 class="home-h1">Encontre a pessoa certa com ajuda das estrelas!</h1>
                                    <p class="home-p">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat amet quidem corporis.</p>
                                    <a id="btn-cadastro" class="d-flex justify-content-center align-items-center" href="cadastroUsuario.php" role="button">
                                        <h3>APAIXONE-SE</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div id="img-2" class="d-flex align-items-center border-bottom">
                                <div id="home-texto" class="d-flex flex-column">
                                    <h1 class="home-h1">Você já conhece todas as funções do Premium?</h1>
                                    <p class="home-p">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat amet quidem corporis.</p>
                                    <a id="btn-cadastro" class="d-flex justify-content-center align-items-center" href="cadastroUsuario.html" role="button">
                                        <h3>SAIBA MAIS</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div id="img-3" class="d-flex align-items-center border-bottom">
                                <div id="home-texto" class="d-flex flex-column">
                                    <h1 class="home-h1">Confira o horóscopo da semana!</h1>
                                    <p class="home-p">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat amet quidem corporis.</p>
                                    <a id="btn-cadastro" class="d-flex justify-content-center align-items-center" href="blog.php" role="button">
                                        <h3>SAIBA MAIS</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    <!-- <div id="teste">
      <p>Diretoria Bananas de Pijama</p>
    </div> -->

    <?php include_once 'footer.php'; ?>
</html>
