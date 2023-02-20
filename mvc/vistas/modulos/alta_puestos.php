<div class="jumbotron jumbotron-fluid" style="background: #7E3ADE; color:white; box-shadow: 5px 5px 40px -19px;">
  <div class="container">
    <h1 class="display-4">Alta Puestos</h1>
    <p class="lead">Pon el puesto</p>
  </div>
</div>
<div class="container-sm" style="box-shadow: 5px 5px 40px -19px; border-radius:11px;  margin-block-end: 10px;">
  <form action="" method="POST" autocomplete="off" accept-charset="utf-8" style="padding:6%;">
    <label for="" class="form-label">
      <b> Nombre del Puesto: </b>
    </label>
    <input type="text" class="form-control" name="nombre_puesto" required onkeypress="return soloLetras(event)"  minlength="3" maxlength="35"> 
    <br> 

    <label for="" class="form-label">
      <b> Salario Mensual: </b>
    </label>
    <input type="text" class="form-control outline-succes" name="salario" required onkeypress="return filterFloat(event,this);" > 
    <br> 


    <center>
      <button type="submit" class="btn text-white btn-lg " style="background: #7E3ADE;"><i class="fa-regular fa-floppy-disk"></i> Guardar</button>
    </center>
  </form>

  <?php
  $registro = new Controlador();
  $registro-> registroPuestosControlador();
  ?>
</div>