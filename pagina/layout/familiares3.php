<?php include "vistas/parte_superior.php" ?>


<div class="container">
    <h1>Familiares de Paciente</h1>

    <div class="box-header">
        <h3 class="box-title"> </h3>

    </div><!-- /.box-header -->
    
    <br><br>

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
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                            <thead>
                                <tr class="text-center">
                                    
                                    <th>Codigo </th>
                                    <th>Paciente</th>
                                    <th>Familiar</th>
                                    <th>Parentesco</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $auto = "";

                                // $branch=$_SESSION['branch'];
                                $query = mysqli_query($con, "
                                select 
                                p.nombre as paciente,
                                f.nombre as farmaceutico,
                                fa.parentesco,
                                fa.Id_familiares, 
                                f.codigo
                                from familiares fa 
                                inner join usuario f on fa.Id_farmaceutico=f.Id 
                                inner join usuario p on p.Id=fa.Id_paciente 
                                where p.Id='$cid' ") or die(mysqli_error());

                                $i = 0;

                                while ($row = mysqli_fetch_array($query)) {
                                    $id_familiares = $row['Id_familiares'];
                                    $i++;
                                ?>
                                    <tr>
                                        <td><?php echo $row['codigo']; ?></td>
                                        <td><?php echo $row['paciente']; ?></td>
                                        <td><?php echo $row['farmaceutico']; ?></td>
                                        <td><?php echo $row['parentesco']; ?></td>
                                        
                                    </tr>
                                    <!--end of modal-->
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- /.box-body -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div>
<!--FIN del cont principal-->

<?php require_once "vistas/parte_inferior.php" ?>