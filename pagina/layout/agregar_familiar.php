<?php include "vistas/parte_superior.php" ?>

<!--INICIO del cont principal-->
<?php
if (isset($_REQUEST['cid'])) {
  $cid = $_REQUEST['cid'];
} else {
  $cid = $_POST['cid'];
}
?>

<div class="container">
  <h1>Registrar Familiar</h1>

  <div class="box-header">
    <h3 class="box-title"> </h3>

  </div><!-- /.box-header -->

  <br>

  <div class="main_container">

    <!-- page content -->
    <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x-panel">

          </div>

        </div>
        <!--end of modal-dialog-->
      </div>


      <div class="panel-heading">


      </div>

      <!--end of modal-->


      <div class="box-header">

      </div><!-- /.box-header -->
      <div class="box-body">
        <form class="form-horizontal" method="post" action="<?php echo "familiar_add.php?cid=$cid"; ?>" enctype='multipart/form-data'>

          <input type="hidden" class="form-control" id="tipo" name="tipo" value="farmaceutico" required>
          <input type="hidden" class="form-control" id="Id_paciente" name="Id_paciente" value="<?php $cid?>" required>

          <div class="row">
            <div class="col-md-3 btn-print">
              <div class="form-group">
                <label for="date">Foto</label>

              </div><!-- /.form group -->
            </div>
            <div class="col-md-4 btn-print">
              <div class="form-group">
                <input type="file" class="form-control" id="imagen" name="imagen">
              </div>
            </div>
            <div class="col-md-4 btn-print">

            </div>
          </div>

          <div class="row">
            <div class="col-md-3 btn-print">
              <div class="form-group">
                <label for="date">Nombre</label>

              </div><!-- /.form group -->
            </div>
            <div class="col-md-4 btn-print">
              <div class="form-group">

                <input type="text" class="form-control pull-right" id="nombre" name="nombre" required>
              </div>
            </div>
            <div class="col-md-4 btn-print">

            </div>
          </div>

          <div class="row">
            <div class="col-md-3 btn-print">
              <div class="form-group">
                <label for="date">Apellido</label>

              </div><!-- /.form group -->
            </div>
            <div class="col-md-4 btn-print">
              <div class="form-group">
                <input type="text" class="form-control pull-right" id="apellido" name="apellido" required>
              </div>
            </div>
            <div class="col-md-4 btn-print">

            </div>
          </div>


          <div class="row">

            <div class="col-md-3 btn-print">
              <div class="form-group">
                <label for="date">Usuario</label>

              </div><!-- /.form group -->
            </div>
            <div class="col-md-4 btn-print">
              <div class="form-group">
                <input type="text" class="form-control pull-right" id="usuario" name="usuario" placeholder="usuario" required>
              </div>
            </div>
            <div class="col-md-4 btn-print">

            </div>
          </div>

          <div class="row">
            <div class="col-md-3 btn-print">
              <div class="form-group">
                <label for="date">Contrase??a</label>

              </div><!-- /.form group -->
            </div>
            <div class="col-md-4 btn-print">
              <div class="form-group">
                <input type="password" class="form-control pull-right" id="date" name="password" placeholder="password " required>
              </div>
            </div>
            <div class="col-md-4 btn-print">

            </div>
          </div>

          <div class="row">
            <div class="col-md-3 btn-print">
              <div class="form-group">
                <label for="date">Repita contrase??a</label>

              </div><!-- /.form group -->
            </div>
            <div class="col-md-4 btn-print">
              <div class="form-group">
                <input type="password" class="form-control pull-right" id="password2" name="password2" placeholder="password " required>
              </div>
            </div>
            <div class="col-md-4 btn-print">

            </div>
          </div>

          <div class="row">
            <div class="col-md-3 btn-print">
              <div class="form-group">
                <label for="date">Telefono</label>

              </div><!-- /.form group -->
            </div>
            <div class="col-md-4 btn-print">
              <div class="form-group">
                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" required>
              </div>
            </div>
            <div class="col-md-4 btn-print">

            </div>
          </div>

          <div class="row">
            <div class="col-md-3 btn-print">
              <div class="form-group">
                <label for="date">Correo</label>

              </div><!-- /.form group -->
            </div>
            <div class="col-md-4 btn-print">
              <div class="form-group">
                <input type="text" class="form-control" id="correo" name="correo" placeholder="correo" required>
              </div>
            </div>
            <div class="col-md-4 btn-print">
            </div>
          </div>

          <div class="row">
            <div class="col-md-3 btn-print">
              <div class="form-group">
                <label for="date">Parentesco</label>

              </div><!-- /.form group -->
            </div>
            <div class="col-md-4 btn-print">
              <div class="form-group">
                <select class="form-control select2" name="parentesco" required>
                    <option value="padre">Padre</option>
                    <option value="madre">Madre</option>
                    <option value="hijo">Hijo</option>
                    <option value="hermano">Hermano</option>
                    <option value="coyugue">Conyugue</option>
                    <option value="otro">Otro</option>
                </select>
              </div>
            </div>
            <div class="col-md-4 btn-print">
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Guardar cambios</button>

          <div class="modal-footer">

          </div>
        </form>

      </div><!-- /.box-body -->


    </div><!-- /.col -->


  </div><!-- /.row -->

  <?php require_once "vistas/parte_inferior.php" ?>