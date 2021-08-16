<?php include "vistas/parte_superior.php" ?>

<!--INICIO del cont principal-->
<div class="container">
    <h1>Editar Datos Recepcionista</h1>

    <div class="box-header">
        <h3 class="box-title"> </h3>

    </div><!-- /.box-header -->
   

    <br>

    <?php
    if (isset($_REQUEST['cid'])) {
        $cid = $_REQUEST['cid'];
    } else {
        $cid = $_POST['cid'];
    }
    ?>

    <div class="box-body">


        <?php
        // $branch=$_SESSION['branch'];
        $query = mysqli_query($con, "select * from usuario where id= '$cid' ") or die(mysqli_error());
        $i = 1;
        while ($row = mysqli_fetch_array($query)) {
            $cid = $row['id'];

            $tipo = $row['tipo'];

        ?>

            <form class="form-horizontal" method="post" action="recepcionista_actualizar.php" enctype='multipart/form-data'>
                <input type="hidden" class="form-control" id="id_usuario" name="id_usuario" value="<?php echo $row['id']; ?>" required>

                <div class="row">
                    <div class="col-md-3 btn-print">
                        <div class="form-group">
                            <label for="date">IMAGEN ANTIGUA</label>

                        </div><!-- /.form group -->
                    </div>
                    <div class="col-md-4 btn-print">
                        <div class="form-group">
                            <IMG src="subir_us/<?php echo $row['imagen']; ?>" style="height:50PX" />
                        </div>
                    </div>
                    <div class="col-md-4 btn-print">

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 btn-print">
                        <div class="form-group">
                            <label for="date">IMAGEN NUEVA</label>

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

                            <input type="text" class="form-control" id="name" name="nombre" value="<?php echo $row['nombre']; ?>" required>
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

                            <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $row['apellido']; ?>" required>
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

                            <input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $row['usuario']; ?>" required>
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

                            <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $row['telefono']; ?>">
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

                            <input type="text" class="form-control" id="correo" name="correo" value="<?php echo $row['correo']; ?>" required>
                        </div>
                    </div>
                    <div class="col-md-4 btn-print">

                    </div>
                </div>
                <button type="submit" class="btn btn-primary">GUARDAR</button>

                <br><br><br>
                <hr>
                <div class="modal-footer">


                </div>
            </form>

            <!--end of modal-->

        <?php } ?>

    </div><!-- /.box-body -->



    <?php require_once "vistas/parte_inferior.php" ?>