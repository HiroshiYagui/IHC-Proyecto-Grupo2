<?php include "vistas/parte_superior.php" ?>

<!--INICIO del cont principal-->
<div class="container">
    <h1>Datos de la emrpresa</h1>

    <div class="box-header">
        <h3 class="box-title"> </h3>

    </div><!-- /.box-header -->
    <a class="btn btn-success btn-print" href="" onclick="window.print()"><i class="glyphicon glyphicon-print"></i> Impresión</a>
    
    <br><br>

    <div class="row">
        <div class="col-lg-12">

            <?php
            // $branch=$_SESSION['branch'];
            $query = mysqli_query($con, "select * from empresa ") or die(mysqli_error());
            $i = 1;
            while ($row = mysqli_fetch_array($query)) {
              $id_empresa = $row['id_empresa'];
            ?>

              <form class="form-horizontal" method="post" action="../configuracion/empresa_actualizar.php" enctype='multipart/form-data'>

                <div class="form-group">
                  <label class="control-label col-lg-3" for="name">Empresa</label>
                  <div class="col-lg-9">
                    <input type="hidden" class="form-control" id="id" name="id_empresa" value="<?php echo $row['id_empresa']; ?>" required>
                    <input type="text" class="form-control" id="name" name="empresa" value="<?php echo $row['empresa']; ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-3" for="price">Nit/Ruc</label><br>
                  <div class="col-lg-9">
                    <input type="text" class="form-control" id="price" name="ruc" value="<?php echo $row['ruc']; ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-3" for="price">Direccion</label><br>
                  <div class="col-lg-9">
                    <input type="text" class="form-control" id="name" name="direccion" value="<?php echo $row['direccion']; ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-3" for="price">Correo</label><br>
                  <div class="col-lg-9">
                    <input type="text" class="form-control" id="name" name="correo" value="<?php echo $row['correo']; ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-3" for="file">Telefono</label>
                  <div class="col-lg-9">
                    <input type="text" class="form-control" id="nametele" name="telefono" value="<?php echo $row['telefono']; ?>" required>

                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-3" for="name">Descripcion </label>
                  <div class="col-lg-9">

                    <textarea class="form-control" id="name" name="descripcion" required><?php echo $row['descripcion']; ?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-3" for="name">Simbolo moneda </label>
                  <div class="col-lg-9">

                    <textarea class="form-control" id="name" name="simbolo_moneda" required><?php echo $row['simbolo_moneda']; ?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-3" for="name">Nombre de moneda </label>
                  <div class="col-lg-9">

                    <textarea class="form-control" id="tipo_moneda" name="tipo_moneda" required><?php echo $row['tipo_moneda']; ?></textarea>
                  </div>
                </div>


                <div class="form-group">
                  <label class="control-label col-lg-3" for="name">Imagen antigua</label>
                  <div class="col-lg-9">

                    <IMG src="images/<?php echo $row['imagen']; ?>" style="height:200PX" />
                  </div>
                </div>


                <div class="form-group">
                  <label class="control-label col-lg-3" for="name">Imagen nueva</label>
                  <div class="col-lg-9">

                    <input type="file" class="form-control" id="imagen" name="imagen">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-3" for="name"></label>
                  <div class="col-lg-9">
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                  </div>
                </div>
              </form>

              <?php
            } ?>

        </div>
    </div>
</div>



<?php require_once "vistas/parte_inferior.php" ?>