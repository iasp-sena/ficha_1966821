<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="subMenuUsuario" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Usuarios
        </a>
        <div class="dropdown-menu" aria-labelledby="subMenuUsuario">
          <a class="dropdown-item" href="<?= getUrlControllerMethod("Usuarios","listar") ?>">Listar</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?= getUrlControllerMethod("Usuarios","registro") ?>">Registro</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Productos</a>
      </li>
    </ul>
    <ul class="navbar-nav ">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="subMenuPerfil" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?= Session::getUser()->getNombreCompleto() ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="subMenuPerfil">
          <a class="dropdown-item" href="<?= getUrlControllerMethod("Login","salir") ?>">Cerrar sesión</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<h2><?= $data["titulo"] ?></h2>