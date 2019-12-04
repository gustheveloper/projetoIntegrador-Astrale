<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/styleTintino.css" rel="stylesheet">
    <link href="css/styleGus1.css" rel="stylesheet">

    <title> Nova Conta</title>
</head>
        <!-- HEADER -->
        <?php include_once("header.html"); ?>
         <!-- MAIN -->

<main id="novaContaUm-main" class="d-flex justify-content-center align-items-center align-self-center">
<!-- Formulário de continuação da conta  -->

<form id="novaContaUm-form" action="">
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
                            <a id="btn-continuar" class="d-flex justify-content-center align-items-center" href="login.html" role="button">
                                <h3>Continuar</h3>
                            </a>
                        </div>
                    </div>

                </form>
            </main>

        </div>
 <!-- FOOTER -->
            <?php include_once("footer.php"); ?>
