<?php include "vistas/parte_superior.php" ?>

<!--INICIO del cont principal-->
<div class="container">
    <h1>Citas para hoy </h1>

    <div class="box-header">
        <h3 class="box-title"> </h3>

    </div><!-- /.box-header -->
    <a class="btn btn-success btn-print" href="" onclick="window.print()"><i class="glyphicon glyphicon-print"></i> Impresión</a>
    <a class="btn btn-warning btn-print" href="cita_agregar2.php" style="height:25%; width:15%; font-size: 12px " role="button">AGREGAR CITA</a>

    <br><br>

    <div class="main_container">
        <div class="box-body">
            <div class="col-lg-12">
                <div class="table-responsive">
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

                            $fecha = date('Y-m-d');
                            // $branch=$_SESSION['branch'];
                            $query = mysqli_query($con, "select m.nombre as  medico,p.nombre as  paciente,c.fecha,c.observaciones,c.estado_cita,c.id_cita from cita c inner join usuario m on c.id_medico = m.id inner join usuario p on p.id = c.id_paciente and c.fecha='$fecha' ") or die(mysqli_error());
                            $i = 0;

                            while ($row = mysqli_fetch_array($query)) {

                                $id_cita = $row['id_cita'];


                                $i++;
                            ?>
                                <tr>
                                    <td><?php echo $row['medico']; ?></td>
                                    <td><?php echo $row['paciente']; ?></td>
                                    <td><?php echo $row['fecha']; ?></td>
                                    <td><?php echo $row['observaciones']; ?></td>
                                    <td><?php echo $row['estado_cita']; ?></td>
                                    <td>
                                        <a class="btn btn-danger btn-print" href="<?php echo "../cita/editar_cita.php?id_cita=$id_cita"; ?>" role="button">Editar</a>
                                        <a class="btn btn-primary btn-print" href="<?php echo "../cita/eliminar_cita.php?id_cita=$id_cita"; ?>" onClick="return confirm('¿Está seguro de que quieres eliminar??');" role="button">Eliminar</a>
                                    </td>
                                </tr>
                                <!--end of modal-->
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- /.box-body -->
    </div>
</div>

<?php require_once "vistas/parte_inferior.php" ?>