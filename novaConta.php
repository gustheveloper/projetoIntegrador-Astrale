<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/styleTintino.css" rel="stylesheet">
    <link href="css/styleGus1.css" rel="stylesheet">

    <title>Nova Conta</title>
</head>


        <!-- HEADER --
            <!-- Logo e Nome -->
                <?php include 'header.html'; ?>

        <!-- MAIN -->
        <body id="novaConta-body">
            <main id="novaConta-main" class="d-flex justify-content-center align-items-center align-self-center">

                <!-- FORMULÁRIO DE CADASTRO DE NOVA CONTA -->
                <form id="novaConta-form" action="">
                    <div class="form-row">
                        <div class="d-flex justify-content-center col-lg-12">
                            <h2 id="novaConta-h2">CRIE SUA CONTA</h2>
                        </div>
                        <div class="form-group col-lg-6">
                            <label>Nome</label>
                            <input type="text" class="form-control " name="" id="inputName" placeholder="Digite seu nome">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="">Gênero</label>
                            <select class="form-control" name="genero">
                                <option value="" hidden>Me identifico como...</option>
                                <option value="masculino">Masculino</option>
                                <option value="feminino">Feminino</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Digite seu e-mail">
                        </div>
                        <div class="form-group col-lg-6">
                            <label>Data de Nascimento</label>
                            <input type="date" class="form-control" id="inputDate" placeholder="Digite sua data de nascimento">
                        </div>
                        <div class="form-group col-lg-6 d-flex justify-content-center align-items-center">
                            <a id="btn-continuar" class="d-flex justify-content-center align-items-center" href="novaContaUm.php" role="button">
                                <h3>Próximo →</h3>
                                </a>
         </form>
            </main>
 <!-- </div> -->


        <!-- FOOTER -->
        <?php include_once("footer.php"); ?>
