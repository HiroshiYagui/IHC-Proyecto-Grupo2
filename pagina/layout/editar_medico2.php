<?php include "vistas/parte_superior.php" ?>

<!--INICIO del cont principal-->
<div class="container">
    <h1>Editar Datos</h1>

    <div class="box-header">
        <h3 class="box-title"> </h3>

    </div><!-- /.box-header -->
    <a class="btn btn-success btn-print" href="" onclick="window.print()"><i class="glyphicon glyphicon-print"></i> Impresión</a>
   

    <br><br>

    <div class="container body">
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
                <?php
                if (isset($_REQUEST['cid'])) {
                    $cid = $_REQUEST['cid'];
                } else {
                    $cid = $_POST['cid'];
                }


                ?>

                <?php

                //         if ($guardar=="si") {

                ?>

                <?php
                //       }
                ?>

                <!-- Date range -->

                <!--end of modal-->



                <div class="box-header">

                </div><!-- /.box-header -->

                <div class="box-body">
                    <?php
                    // $branch=$_SESSION['branch'];
                    $query = mysqli_query($con, "select * from usuario where id= '$cid' ") or die(mysqli_error());
                    $i = 1;
                    while ($row = mysqli_fetch_array($query)) {
                        $cid = $row['id'];

                        $tipo = $row['tipo'];
                    ?>
                        <form class="form-horizontal" method="post" action="medico2.php" enctype='multipart/form-data'>
                            <input type="hidden" class="form-control" id="id_usuario" name="id_usuario" value="<?php echo $row['id']; ?>" required>

                            <div class="row">
                                <div class="col-md-3 btn-print">
                                    <div class="form-group">
                                        <label for="date">Imagen Antigua</label>

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
                                        <label for="date">Imagen Nueva</label>

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

                                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $row['nombre']; ?>" required>
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

                            <button type="submit" class="btn btn-primary" id="edit">GUARDAR</button>

                            <br><br><br>
                            <hr>
                            <div class="modal-footer">

                            </div>
                        </form>
                        <!--end of modal-->
                    <?php } ?>
                </div><!-- /.box-body -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.box-body -->
    
    <?php require_once "vistas/parte_inferior.php" ?>