<?php include "vistas/parte_superior.php" ?>

<div class="container">
    <h1>Histotial de Pacientes</h1>
    <br />

    <div class="box-header">
        <h3 class="box-title"> </h3>
    </div><!-- /.box-header -->


    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                    <thead class="text-center">
                        <tr>
                            <th>Medico</th>
                            <th>Paciente</th>
                            <th>Fecha</th>
                            <th>Observaciones</th>
                            <th>Estado</th>
                            <th class="btn-print"> Accion </th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        // $branch=$_SESSION['branch'];
                        $query = mysqli_query($con, "select m.nombre as  medico,p.nombre as  paciente,c.fecha,c.observaciones,c.estado_cita,c.id_cita from cita c inner join usuario m on c.id_medico = m.id inner join usuario p on p.id = c.id_paciente ") or die(mysqli_error());
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
                                    <div class='text-center'>
                                        <div class='btn-group'>
                                            <a class="btn btn-primary btn-print" href="<?php echo "editar_cita2.php?id_cita=$id_cita"; ?>" role="button">Editar</a>
                                            <a class="btn  btn-danger btn-print" href="<?php echo "eliminar_cita2.php?id_cita=$id_cita"; ?>" onClick="return confirm('¿Está seguro de que quieres eliminar??');" role="button">Eliminar</a>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>




</div>
<!--FIN del cont principal-->

<?php require_once "vistas/parte_inferior.php" ?>