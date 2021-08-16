<?php include "vistas/parte_superior.php" ?>

<!--INICIO del cont principal-->
<div class="container">
    <h1>Editar password</h1>

    <div class="box-header">
        <h3 class="box-title"> </h3>

    </div><!-- /.box-header -->
   
    <br><br>
    <?php
    $cid = $_SESSION['id'];

    ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="box-body">

                <?php
                // $branch=$_SESSION['branch'];
                $query = mysqli_query($con, "select * from usuario where id= '$cid' ") or die(mysqli_error());
                $i = 1;
                while ($row = mysqli_fetch_array($query)) {
                    $cid = $row['id'];
                    $tipo = $row['tipo'];
                ?>

                    <form class="form-horizontal" method="post" action="../otros/actualizar_password.php" enctype='multipart/form-data'>
                        <input type="hidden" class="form-control" id="id_usuario" name="id_usuario" value="<?php echo $row['id']; ?>" required>
                        <div class="row">
                            <div class="col-md-3 btn-print">
                                <div class="form-group">
                                    <label for="date">Contraseña</label>

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
                                    <label for="date">Repita contraseña</label>

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

                        <button type="submit" class="btn btn-primary">GUARDAR</button>


                        <br><br><br>
                        <hr>
                        <div class="modal-footer">


                        </div>
                    </form>

                    <!--end of modal-->

                <?php } ?>

            </div><!-- /.box-body -->
        </div>
    </div>
</div>
<!--FIN del cont principal-->

<?php require_once "vistas/parte_inferior.php" ?>