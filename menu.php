<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Tecnologia Web</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="principal.php">Principal</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Autos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="new_auto.php">Nueva Renta</a></li>
            <li><a class="dropdown-item" href="admin_autos.php">Administracion de autos</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admin_users.php">Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" data-bs-toggle="modal" data-bs-target="#salir">Salir</a>
          <div class="modal fade" tabindex="-1" id="salir" aria-labelledby="ModalFade" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title"><strong>Alerta!</strong></h5>
                  <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"><button>
                </div>
                <div class="modal-body">
                  <p>¿Desea Salir?</p>
                </div>
                <div class="modal-footer">
                  <a class="btn btn-primary" href="php_cerrar.php" type="submit">SI</a>
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">NO</button>
                </div>
              </div>
            </div>
          </div>
        </li>

      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>