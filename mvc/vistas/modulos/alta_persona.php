<div class="jumbotron jumbotron-fluid text-white shadow-lg" style="background: #7E3ADE;">
  <div class="container">
    <h1 class="display-4">Alta personas</h1>
    <p class="lead">XD</p>
  </div>
</div>
<div class="container-sm shadow-lg" style=" border-radius:11px;  margin-block-end: 10px;">
<div class="" style="padding:2%;" >
  <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
    <div class="row g-3">
      <div class="col">



       <label for="" class="form-label">
        <b> Nombre de Empleado: </b>
      </label>
      <input type="text" class="form-control" name="nombres" required onkeypress="return soloLetras(event)">
      <br> 

      <label for="" class="form-label">
        <b> Primer Apellido: </b>
      </label>
      <input type="text" class="form-control" name="primer_apellido" required onkeypress="return soloLetras(event)"> 
      <br> 

      <label for="" class="form-label">
        <b> Segundo Apellido: </b>
      </label>
      <input type="text" class="form-control" name="segundo_apellido" required onkeypress="return soloLetras(event)"> 
      <br> 

      <label for="" class="form-label">
        <b> Edad: </b>
      </label>
      <input type="text" class="form-control" name="edad" min=18 max=100 required onkeypress="ValidaSoloNumeros()"> 
      <br> 

    </div>
    <div class="col">


      <label for="" class="form-label">
        <b> Fecha de Nacimiento: </b>
      </label>
      <input type="date" class="form-control" name="fecha_nac" required> 
      <br> 
      <label for="" class="form-label">
        <b> Telefono: </b>
      </label>
      <input type="text" class="form-control" name="telefono" maxlength=10 required onkeypress="ValidaSoloNumeros()"> 
      <br> 

      <label for="" class="form-label">
        <b> Correo Electronico: </b>
      </label>
      <input type="email" class="form-control" name="correo" required> 
      <br> 

      <label for="" class="form-label">
        <b> Clave: </b>
      </label>
      <input type="text" class="form-control" name="clave" required> 
      <br> 

    </div>
    <div class="col">



      <label for="" class="form-label">
        <b> latitud: </b>
      </label>
      <input type="text" class="form-control" name="latitud" required> 
      <br> 
      <label for="" class="form-label">
        <b> longitud: </b>
      </label>
      <input type="text" class="form-control" name="altitud" required> 
      <br> 

      <label for="" class="form-label"><b>Puesto</b></label>
      <?php
      $puesto = new Controlador();
      $puesto->ListaPuestos();
      ?>
      <br>
      <label for="" class="form-label"><b>Foto del Empleado</b></label>
      <div class="input-group mb-3">
        <div class="custom-file">
          <input type="file" class="custom-file-input" name="foto" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
          <label class="custom-file-label" for="inputGroupFile01">Elije un archivo</label>
        </div>
      </div>

      <br> 
    </div>
  </div>
  <center>
    <button type="submit" class="btn btn-lg text-white" style="background:#6830B8;"><i class="fa-regular fa-floppy-disk"></i> Guardar</button>
  </center>
</form>
</div>
</div>
<?php
$registro = new Controlador();
$registro-> registroPersonasControlador();
//cf88136b-8b2e-4c29-ac76-70b306bdd573
//IGKIRFMYPSQYOYAK3QD5
?>

