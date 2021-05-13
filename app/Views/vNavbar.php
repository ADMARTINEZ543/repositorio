<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Taller de Programación</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>/Home/bienvenida">Home</a>
        </li>
        <li class="nav-item">
          <!--href="<?php echo base_url(); ?>/Home/registro"-->
          <a class="nav-link" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Registrarse</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Acciones
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo base_url(); ?>/Home/mostrarRegistros">Ver registros</a></li>
            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#Modal">Ingresar</a></li>
            <!--li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li-->
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form method="POST" action="<?php echo base_url(); ?>/Home/buscarRegistro" class="d-flex">
        <label>ID del usuario</label>
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="id_usuario" name="id_usuario">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro de Usuario Nuevo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php echo view('vRegistro'); ?>        
      </div>
    </div>
  </div>
</div>


  <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ingreso</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">

    <form method="POST" action="<?php echo base_url(); ?>/Home/ingresarForm">
      <div class="mb-3 row">
          <label for="email" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
              <input type="email" class="form-control" id="email" name="email"  placeholder="email@example.com">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="password" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
              <input type="password" class="form-control" id="password" name="password">
          </div>
        </div>
        <div class="mb-3 row">
          <button type="submit" class="btn btn-primary mb-3">Ingresar</button>
        </div>
      </form>
  </div>
      </div>
    </div>
  </div>
</div>