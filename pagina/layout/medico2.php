<?php include "vistas/parte_superior.php" ?>

<!--INICIO del cont principal-->
<div class="container">
  <h1>Lista de Médicos</h1>

  <div class="box-header">
    <h3 class="box-title"> </h3>

  </div><!-- /.box-header -->
  <a class="btn btn-success btn-print" href="" onclick="window.print()"><i class="glyphicon glyphicon-print"></i> Impresión</a>
  <a class="btn btn-warning btn-print" href="medico_agregar2.php" style="height:25%; width:15%; font-size: 12px " role="button">REGISTRAR</a>

  <br><br>

  <div class="row">
    <div class="col-lg-12">
      <div class="table-responsive">
        <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
          <thead class="text-center">
            <tr>

              <th>#</th>
              <th>Foto</th>
              <th>Nombre y apellido</th>
              <th>Telefono</th>
              <th>Usuario</th>
              <th>Correo</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

            <?php
            $query = mysqli_query($con, "select * from usuario where tipo='medico' ") or die(mysqli_error());

            $i = 0;
            while ($row = mysqli_fetch_array($query)) {
              $cid = $row['id'];
              $i++;
            ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><IMG src="../usuario/subir_us/<?php echo $row['imagen']; ?>" style="height:50PX" /></td>
                <td><?php echo $row['nombre'] . ' ' . $row['apellido'] ?></td>
                <td><?php echo $row['telefono'] ?></td>
                <td><?php echo $row['usuario'] ?></td>
                <td><?php echo $row['correo'] ?></td>
                <td>
                  <div class='text-center'>
                    <div class='btn-group'>
                      <a class='btn btn-primary btnEditar' href="<?php echo "editar_medico2.php?cid=$cid"; ?>">Editar</a>
                      <a class='btn btn-danger btnBorrar' href="<?php echo "eliminar_medico2.php?cid=$cid"; ?>">Borrar</a>
                    </div>
                  </div>
                </td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>

  <?php require_once "vistas/parte_inferior.php" ?>