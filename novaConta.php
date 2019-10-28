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
    <link href="css/styleTintino.css" rel="stylesheet">
    <title>Nova Conta</title>
</head>
<body id="novaConta-body" class="">
        <!-- HEADER -->
        <?php include_once("header.html"); ?>

        <!-- MAIN -->
        <main id="novaConta-main" class="d-flex justify-content-center align-items-center">

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
                <div class="form-group col-lg-6">
                    <label>Senha</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Digite sua senha">
                    <small id="passwordHelpInline" class="text-muted">
                        Deve ter entre 8 e 20 caracteres.
                    </small>
                </div>
                <div class="form-group col-lg-6">
                  <label>Confirme a Senha</label>
                  <input type="password" class="form-control" id="inputPassword" placeholder="Digite sua senha novamente">
                  <small id="passwordHelpInline" class="text-muted">
                    Deve ter entre 8 e 20 caracteres.
                  </small>
                </div>
                <div class="form-group col-lg-6">
                    <label for="">Signo</label>
                    <select class="form-control" name="signo">
                        <option value="">Selecione...</option>
                        <option value="aquario">Aquário</option>
                        <option value="peixes">Peixes</option>
                        <option value="aries">Áries</option>
                        <option value="touro">Touro</option>
                        <option value="gemeos">Gêmeos</option>
                        <option value="cancer">Câncer</option>
                        <option value="leao">Leão</option>
                        <option value="virgem">Virgem</option>
                        <option value="libra">Libra</option>
                        <option value="escorpiao">Escorpião</option>
                        <option value="sagitario">Sagitário</option>
                        <option value="capricornio">Capricórnio</option>
                    </select>
                </div>
                <div class="form-group col-lg-6">
                    <label for="">Ascendente</label>
                        <select class="form-control" name="ascendente">
                        <option value="" hidden>Selecione...</option>
                        <option value="aquario">Aquário</option>
                        <option value="peixes">Peixes</option>
                        <option value="aries">Áries</option>
                        <option value="touro">Touro</option>
                        <option value="gemeos">Gêmeos</option>
                        <option value="cancer">Câncer</option>
                        <option value="leao">Leão</option>
                        <option value="virgem">Virgem</option>
                        <option value="libra">Libra</option>
                        <option value="escorpiao">Escorpião</option>
                        <option value="sagitario">Sagitário</option>
                        <option value="capricornio">Capricórnio</option>
                    </select>
                </div>
                <div class="form-group col-lg-6">
                    <label>Foto</label>
                    <div class="input-group lg-3">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01"></label>
                    </div>
                    </div>
                </div>
                <div class="form-group col-lg-6 d-flex justify-content-center align-items-center">
                    <a id="btn-continuar" class="d-flex justify-content-center align-items-center" href="login.html" role="button"><h3>Continuar</h3></a>
                </div>
            </div>

        </form>
        </main>
        <!-- FOOTER -->

</body>
</html>
