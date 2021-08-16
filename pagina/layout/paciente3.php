<?php include "vistas/parte_superior.php" ?>

<!--INICIO del cont principal-->
<div class="container">
    <h1>Lista de Pacientes</h1>

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
                            <th>Nombre y apellidos</th>
                            <th>Telefono</th>
                            <th>Usuario</th>
                            <th>Correo</th>
                            <th class="btn-print"> Accion </th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        // $branch=$_SESSION['branch'];
                        $query = mysqli_query($con, "select * from usuario where tipo='paciente' ") or die(mysqli_error());
                        $i = 0;
                        while ($row = mysqli_fetch_array($query)) {
                            $cid = $row['id'];
                            $i++;
                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><IMG src="../usuario/subir_us/<?php echo $row['imagen']; ?>" style="height:50PX" /></td>
                                <td><?php echo $row['nombre'] . '  ' . $row['apellido']; ?></td>
                                <td><?php echo $row['telefono']; ?></td>
                                <td><?php echo $row['usuario']; ?></td>

                                <td><?php echo $row['correo']; ?></td>
                                <td>
                                    <div class='text-center'>
                                        <div class='btn-group'>
                                            
                                            <a class="btn btn-primary btn-print" href="<?php echo "historial_paciente2.php?cid=$cid"; ?>" role="button">Historia</a>
                                            <a class="btn btn-success btn-print" href="<?php echo "familiares2.php?cid=$cid"; ?>" role="button">Familiares</a>
                                            
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