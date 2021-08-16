<?php include "vistas/parte_superior.php" ?>

<!--INICIO del cont principal-->
<div class="container">
    <h1>Citas de Pacientes</h1>

    <div class="box-header">
        <h3 class="box-title"> </h3>

    </div><!-- /.box-header -->
    <a class="btn btn-success btn-print" href="" onclick="window.print()"><i class="glyphicon glyphicon-print"></i> Impresión</a>
    <a class="btn btn-warning btn-print" href="cita_agregar2.php" style="height:25%; width:15%; font-size: 12px " role="button">AGREGAR CITA</a>

    <br><br>

    <div class="main_container">

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
                <h3 class="box-title"> </h3>

            </div><!-- /.box-header -->


            <div class="box-body">


                <!--end of modal-->


                <div class="box-header">

                </div><!-- /.box-header -->



                <div class="box-body">

                    <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead>
                            <tr class="text-center">
                                <th>Paciente</th>
                                <th>Medico</th>
                                <th>Fecha</th>
                                <th>Observaciones</th>
                                <th>Estado</th>
                                <th class="btn-print"> Accion </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $auto = "";

                            // $branch=$_SESSION['branch'];
                            $query = mysqli_query($con, "select m.nombre as  medico,p.nombre as  paciente,c.fecha,c.observaciones,c.estado_cita,c.id_cita from cita c inner join usuario m on c.id_medico = m.id inner join usuario p on p.id = c.id_paciente ") or die(mysqli_error());
                            $i = 0;

                            while ($row = mysqli_fetch_array($query)) {

                                $id_cita = $row['id_cita'];


                                $i++;
                            ?>
                                <tr>

                                    <td><?php echo $row['paciente']; ?></td>
                                    <td><?php echo $row['medico']; ?></td>
                                    <td><?php echo $row['fecha']; ?></td>
                                    <td><?php echo $row['observaciones']; ?></td>
                                    <td><?php echo $row['estado_cita']; ?></td>
                                    <td>
                                        <div class='text-center'>
                                            <div class='btn-group'>
                                                <a class=" btn btn-primary btn-print" href="<?php echo "editar_cita2.php?id_cita=$id_cita"; ?>" role="button">Editar</a>
                                                <a class="btn btn-danger btn-print" href="<?php echo "../cita/eliminar_cita.php?id_cita=$id_cita"; ?>" onClick="return confirm('¿Está seguro de que quieres eliminar??');" role="button">Eliminar</a>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                <!--end of modal-->
                            <?php } ?>
                        </tbody>

                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.row -->
</div>

<?php require_once "vistas/parte_inferior.php" ?>