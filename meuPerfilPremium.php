<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/styleJulia.css" />
    <link rel="stylesheet" href="css/styleGiuli.css" />
    <title>PERFIL</title>
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
                    id="mensagens"
                    class="nav-link mensagens"
                    href="meuPerfil.html"
                    target="_blank"
                    >Meu Perfil</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link text-white"
                    href="conexoesPremium.html"
                    >Conexões</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link text-white "
                    href="mensagens.html"
                    target="_blank"
                    >Mensagens</a
                  >
                </li>
              </ul>
            </div>
          </nav>

          <!-- editar perfil-->
          <section class="cardsConexoes">
            <section class="collumn p-3">
              <h5 class="text-color mt-2">Configurações da Conta</h5>
              <form>
                <div class="col">
                  <span>Email</span>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="fulaninho@gmail.com"
                  />
                </div>
                <div class="col">
                  <span>Celular</span>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="011 912345678"
                  />
                </div>
                <h5 class="text-color mt-3">Ajustes de Descoberta</h5>
                <div class="row justify-content-between perfil-padding">
                  <label for="customRange2 ml-3">Distância Máxima</label>
                  <label class="text-color ">25Km</label>
                </div>
                <input
                  type="range"
                  class="custom-range"
                  min="1km"
                  max="10km"
                  id="customRange2"
                />
                <div class="row justify-content-between perfil-padding">
                  <label for="customRange2">Faixa Etária</label>
                  <label class="text-color ">25</label>
                </div>
                <input
                  type="range"
                  class="custom-range"
                  min="18"
                  max="90"
                  id="customRange2"
                />

                <select class="custom-select">
                  <option selected>Procurando por Gênero</option>
                  <option value="1">Feminino</option>
                  <option value="2">Masculino</option>
                  <option value="3">Ambos</option>
                </select>
                <select class="custom-select">
                  <option selected>Procurando por Signo</option>
                  <option value="1">Aries</option>
                  <option value="2">Touro</option>
                  <option value="3">Gêmeos</option>
                  <option value="4">Câncer</option>
                  <option value="5">Leão</option>
                  <option value="6">Virgem</option>
                  <option value="7">Libra</option>
                  <option value="8">Escorpião</option>
                  <option value="9">Sagitário</option>
                  <option value="10">Capricórnio</option>
                  <option value="11">Aquário</option>
                  <option value="12">Peixes</option>
                </select>
              </form>
              <h5 class="text-color mt-2">Quem quer uma conexão com você</h5>
              <button type="button" class="btn btn-outline-secondary btn-block">
                Veja aqui
              </button>
              <h5 class="text-color mt-2">Notificações</h5>
              <div class="custom-control custom-switch">
                <input
                  type="checkbox"
                  class="custom-control-input"
                  id="customSwitch1"
                />
                <label class="custom-control-label" for="customSwitch1"
                  >Email</label
                >
              </div>
              <div class="custom-control custom-switch">
                <input
                  type="checkbox"
                  class="custom-control-input"
                  id="customSwitch1"
                />
                <label class="custom-control-label" for="customSwitch1"
                  >SMS</label
                >
              </div>
            </section>
          </section>
        </aside>
      </div>
      <!-- començando o outro lado -->
      <section class="col-lg-8 col-md-8 row justify-content-center">
        <section
          class="row buttons justify-content-end align-items-center mt-2"
        >
          <a href="#"> <img src="image/botãoesquerda.png" alt=""/></a>
        </section>
        <section class="row fotos mt-3  mr-3 ml-3 ">
          <img src="image/foto-mapa.png" alt="" />
        </section>
        <section
          class="row buttons justify-content-end align-items-center mt-2"
        >
          <a href="#"> <img src="image/botãodireita.png" alt=""/></a>
        </section>
      </section>
    </main>
  </body>
</html>
