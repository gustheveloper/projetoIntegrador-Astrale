<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Astrale - Conexões</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/styleJose.css" />
    <link rel="stylesheet" href="css/styleGiuli.css" />
  </head>
  <body>
    <header class="border-bottom">
      <!-- Logo e Nome -->
      <?php include_once 'header.html'; ?>

    </header>
    <main class="d-flex">
      <div class="col-lg-4 col-md-4 pl-0 pr-0">
        <aside class="border-right bg-light">
          <!-- menu aside -->
          <nav id="menuSecundario" class="navbar navbar-light bg-light">
            <img
              src="image/me.jpeg"
              width="75"
              height="75"
              class="d-inline-block align-top rounded-circle"
              alt=""
            />
            <div>
              <ul class="nav">
                <li class="nav-item">
                  <a
                    class="nav-link text-white"
                    href="meuPerfil.html"
                    target="_self"
                    >Meu Perfil</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    id="mensagens"
                    class="nav-link mensagens"
                    href="conexoes.html"
                    target="_self"
                    >Conexões</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link text-white"
                    href="mensagens.html"
                    target="_self"
                    >Mensagens</a
                  >
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
                    <p class="card-text">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Illo, dolores!
                    </p>
                  </div>
                </div>

                <div class="col-lg-5 col-md-5 col-5">
                  <img
                    src="image/exemploFotoPerfil.jpg"
                    width="190"
                    height="190"
                    class="card-img"
                    alt="..."
                  />
                </div>
              </div>
            </div>

            <div
              class="card mb-5 border border-warning"
              style="max-width: 100vw;"
            >
              <div class="row no-gutters">
                <div class="col-lg-7 col-md-7 col-7">
                  <div class="card-body">
                    <h5 class="card-title">Nome, idade</h5>
                    <p class="card-text">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Illo, dolores!
                    </p>
                  </div>
                </div>

                <div class="col-lg-5 col-md-5 col-5">
                  <img
                    src="image/exemploFotoPerfil.jpg"
                    width="190"
                    height="190"
                    class="card-img"
                    alt="..."
                  />
                </div>
              </div>
            </div>

            <div class="card mb-5" style="max-width: 100vw;">
              <div class="row no-gutters">
                <div class="col-lg-7 col-md-7 col-7">
                  <div class="card-body">
                    <h5 class="card-title">Nome, idade</h5>
                    <p class="card-text">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Illo, dolores!
                    </p>
                  </div>
                </div>

                <div class="col-lg-5 col-md-5 col-5">
                  <img
                    src="image/exemploFotoPerfil.jpg"
                    width="190"
                    height="190"
                    class="card-img"
                    alt="..."
                  />
                </div>
              </div>
            </div>

            <div class="card mb-5" style="max-width: 100vw;">
              <div class="row no-gutters">
                <div class="col-lg-7 col-md-7 col-7">
                  <div class="card-body">
                    <h5 class="card-title">Nome, idade</h5>
                    <p class="card-text">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Illo, dolores!
                    </p>
                  </div>
                </div>

                <div class="col-lg-5 col-md-5 col-5">
                  <img
                    src="image/exemploFotoPerfil.jpg"
                    width="190"
                    height="190"
                    class="card-img"
                    alt="..."
                  />
                </div>
              </div>
            </div>
          </section>
        </aside>
      </div>

      <!-- inicio do dashboard -->
      <section class="col-lg-8 col-md-8 ">
        <section class="row about-dash justify-content-around mt-3">
          <i class="mr-5"></i>
          <i class="mr-5"></i>
          <div
            class="col-md-8 col-lg-8 align-items-center d-flex flex-column justify-content-center ml-5"
          >
            <h3>Nome, Idade</h3>
            <p class="text-secondary text-center">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis
              temporibus voluptates aperiam ab ea incidunt cumqu
            </p>
          </div>
          <img src="image/photo.PNG" class="rounded-circle" alt="" />
        </section>
        <section class="row photos mr-3 ml-3 mt-3 "></section>
        <section class="row buttons justify-content-center align-items-center">
          <i
            class="box mr-3 rounded-circle d-flex justify-content-center align-items-center"
          >
            <img src="image/run_man.png" alt="" />
          </i>
          <i
            class="box ml-3 mr-3 rounded-circle d-flex justify-content-center align-items-center"
          >
            <img src="image/heart_icon.png" alt="" class="mt-3" />
          </i>
          <i
            class="box ml-3 rounded-circle d-flex justify-content-center align-items-center"
          >
            <img src="image/replay_icon.png" alt="" />
          </i>
        </section>
      </section>
      <!-- fim do dashboard  -->
    </main>
  </body>
</html>
<!-- https://via.placeholder.com/180-->
