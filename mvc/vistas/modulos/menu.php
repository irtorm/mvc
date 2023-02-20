<script src="https://kit.fontawesome.com/ae1b5f3a79.js" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg navbar-dark" style="padding: 15px; background: #6233B5">
  <a class="navbar-brand" href="#">TIDSM51</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active" style="margin-right: 10px;">
        <a class="nav-link" href="index.php?accion=principal"><i class="fa-solid fa-house"></i><span class="sr-only">(current)</span></a>      
      </li>
      <li class="nav-item dropdown" style="margin-right: 10px;">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          <i class="fa-solid fa-cloud-arrow-up"></i>    ALTAS
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="index.php?accion=alta_persona"><i class="fa-solid fa-person"></i> Alta Personas</a>
          <a class="dropdown-item" href="index.php?accion=alta_puestos">Alta Puestos</a>
          <a class="dropdown-item" data-toggle="modal" data-target="#staticBackdrop"><i class="fa-solid fa-paste" ></i>Agregar puesto</a>
          <!-- Button trigger modal -->

          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
         <i class="fa-solid fa-eye"></i> MOSTRAR
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="index.php?accion=mostrar_persona"><i class="fa-solid fa-person"></i> Mostrar Personas</a>
          <a class="dropdown-item" href="index.php?accion=mostrar_puestos">Mostrar Puestos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<!--  -->