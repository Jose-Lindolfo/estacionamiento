<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
    <a href="<?php echo baseUrl ?>banco/laboratorios/<?php echo $personal->laboratorio_id ?>" style="color: #fff;" class="btn btn-primary fa fa-arrow-left"></a>
    DATOS DE PERSONAL
    </h3>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-lg-4 dl-horizontal">
        <dt>Nombre:</dt>
        <dd><?php echo $personal->nombre_apellido ?></dd>
      </div>
      <div class="col-lg-4 dl-horizontal">
        <dt>Cédula:</dt>
        <dd><?php echo $personal->cedula ?></dd>
      </div>
      <div class="col-lg-4 dl-horizontal">
        <dt>Email:</dt>
        <dd><?php echo $personal->email ?> </dd>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-lg-4 dl-horizontal">
        <dt>Telefono fijo:</dt>
        <dd><?php echo $personal->telefono_fijo ?> </dd>
      </div>
      <div class="col-lg-4 dl-horizontal">
        <dt>Telefono celular:</dt>
        <dd><?php echo $personal->telefono_celular ?> </dd>
      </div>
      <div class="col-lg-4 dl-horizontal">
        <dt>Cargo:</dt>
        <dd><?php echo $personal->cargo ?> </dd>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-lg-4 dl-horizontal">
        <dt>Role:</dt>
        <dd><?php echo $personal->usuario->role ?> </dd>
      </div>
      <div class="col-lg-4 dl-horizontal">
        <dt>Dirección:</dt>
        <dd><?php echo $personal->direccion ?> </dd>
      </div>
    </div>
    <br>
    <hr>
  </div>
</div>