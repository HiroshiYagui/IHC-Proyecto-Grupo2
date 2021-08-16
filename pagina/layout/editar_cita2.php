<?php include "vistas/parte_superior.php" ?>

<div class="container">
    <h1>Editar Cita</h1>
    <br />

    <div class="box-header">
        <h3 class="box-title"> </h3>

    </div><!-- /.box-header -->


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
                if (isset($_REQUEST['id_cita'])) {
                    $id_cita = $_REQUEST['id_cita'];
                } else {
                    $id_cita = $_POST['id_cita'];
                }
                ?>


                <div class="box-header">

                </div><!-- /.box-header -->

                <a class="btn btn-warning btn-print" href="cita2.php" style="height:25%; width:15%; font-size: 12px " role="button">Regresar</a>

                <br><br>

                <div class="box-body">


                    <?php
                    // $branch=$_SESSION['branch'];
                    $query = mysqli_query($con, "select m.nombre as  medico,p.nombre as  paciente,c.fecha,c.observaciones,c.estado_cita,c.id_cita from cita c inner join usuario m on c.id_medico = m.id inner join usuario p on p.id = c.id_paciente
                    where c.id_cita='$id_cita' ") or die(mysqli_error());
                    $i = 1;
                    while ($row = mysqli_fetch_array($query)) {
                        $id_medico = $row['medico'];

                        // $tipo=$row['tipo'];

                    ?>

                        <form class="form-horizontal" method="post" action="cita_actualizar2.php" enctype='multipart/form-data'>
                            <input type="hidden" class="form-control" id="id_cita" name="id_cita" value="<?php echo $id_cita; ?>" required>

                            <div class="row">
                                <div class="col-md-3 btn-print">
                                    <div class="form-group">
                                        <label for="date">Medico</label>

                                    </div><!-- /.form group -->
                                </div>
                                <div class="col-md-4 btn-print">
                                    <div class="form-group">


                                        <select class="form-control select2" name="id_medico" required>

                                            <?php

                                            $queryc = mysqli_query($con, "select * from usuario  where tipo='medico'") or die(mysqli_error());
                                            while ($rowc = mysqli_fetch_array($queryc)) {
                                            ?>
                                                <option value="<?php echo $rowc['id']; ?>" <?php if ($id_medico == $rowc['id']) {
                                                                                                echo "selected";
                                                                                            } ?>><?php echo $rowc['nombre'] . '  ' . $rowc['apellido']; ?></option>

                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 btn-print">

                                </div>

                            </div>


                            <div class="row">
                                <div class="col-md-3 btn-print">
                                    <div class="form-group">
                                        <label for="date">Observaciones</label>

                                    </div><!-- /.form group -->
                                </div>
                                <div class="col-md-4 btn-print">
                                    <div class="form-group">


                                        <textarea class="form-control" id="observaciones" name="observaciones"><?php echo $row['observaciones']; ?></textarea>

                                    </div>
                                </div>
                                <div class="col-md-4 btn-print">

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3 btn-print">
                                    <div class="form-group">
                                        <label for="date">Fecha </label>

                                    </div><!-- /.form group -->
                                </div>
                                <div class="col-md-4 btn-print">
                                    <div class="form-group">

                                        <input type="date" class="form-control" id="fecha" name="fecha" value="<?php echo $row['fecha']; ?>">
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
            </div><!-- /.col -->

        </div><!-- /.row -->

    </div><!-- /.box-body -->

</div>
<!--FIN del cont principal-->

<?php require_once "vistas/parte_inferior.php" ?>