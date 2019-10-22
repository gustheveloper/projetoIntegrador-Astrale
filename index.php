<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="css/styleGiuli.css" rel="stylesheet">
    <link href="css/styleAtila.css" rel="stylesheet">
    <title>Astrale</title>
</head>
<body>
    <main id="home-main" class="">
    <?php include_once("header.html"); ?>
    <div class="border-bottom">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img id="banner-images" class="d-block w-100" src="image/teste1.jpg" alt="Primeiro Slide">
            <div class="container d-flex flex-column txt-fixed">
                <h1 class="home-h1">Encontre a pessoa certa com ajuda das estrelas!</h1>
                <p class="home-p">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat amet quidem corporis. Sunt, voluptates. Voluptates assumenda id a magni, vero totam, magnam ea quia tenetur nostrum sed, similique perferendis eius!</p>    
            </div>
            <a id="home-btn-cadastrar" class="" href="#" role="button"><h3>CADASTRE-SE</h3></a>
          </div>
          <div class="carousel-item">
            <img id="banner-images" class="d-block w-100" src="image/teste2.jpg" alt="Segundo Slide">
            <div class="container d-flex flex-column txt-fixed">
                <h1 class="home-h1">Encontre a pessoa certa com ajuda das estrelas!</h1>
                <p class="home-p">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat amet quidem corporis. Sunt, voluptates. Voluptates assumenda id a magni, vero totam, magnam ea quia tenetur nostrum sed, similique perferendis eius!</p>
            </div>
            <a id="home-btn-cadastrar" class="" href="#" role="button"><h3>CADASTRE-SE</h3></a>
          </div>
          <div class="carousel-item">
            <img id="banner-images" class="d-block w-100" src="image/bannerHome.png" alt="Terceiro Slide">
            <div class="container d-flex flex-column txt-fixed">
                <h1 class="home-h1">Encontre a pessoa certa com ajuda das estrelas!</h1>
                <p class="home-p">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat amet quidem corporis. Sunt, voluptates. Voluptates assumenda id a magni, vero totam, magnam ea quia tenetur nostrum sed, similique perferendis eius!</p>
            </div>
            <a id="home-btn-cadastrar" class="" href="#" role="button"><h3>CADASTRE-SE</h3></a>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>
      </div>
    </div>
    <footer class="d-flex justify-content-center align-items-center">
    © Coryright Group Astrale
    </footer>
</main>
</body>
</html>
