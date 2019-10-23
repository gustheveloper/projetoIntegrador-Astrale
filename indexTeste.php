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
    <title>Document</title>
</head>
<body id="indexTeste-body" class="container-fluid">
    
    <!-- HEADER --> 
    <div id="indexTeste-header">
        <?php include_once("header.html"); ?>
    </div>

     <!--MAIN -->
    <div id="indexTeste-main" class="d-flex justify-content-center align-items-center border-bottom">
        <main>
        <img id="indexTeste-img" src="image/teste1.jpg" alt="Tela Principal">
        <div class="container d-flex flex-column txt-fixed">
                <h1 class="home-h1">Encontre a pessoa certa com ajuda das estrelas!</h1>
                <p class="home-p">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat amet quidem corporis. Sunt, voluptates. Voluptates assumenda id a magni, vero totam, magnam ea quia tenetur nostrum sed, similique perferendis eius!</p>  
                <a id="home-btn-cadastrar" class="" href="novaConta.php" role="button"><h3>CADASTRE-SE</h3></a>  
        </div>
        </main>
    </div>

    <!-- FOOTER -->
    <div id="indexTeste-footer">
    <?php include_once("footer.php"); ?>
    </div>
</body>
</html>