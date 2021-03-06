<?php
@session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../cita/css/styles.css">

  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#key').on('keyup', function() {
        var key = $(this).val();
        var dataString = 'key=' + key;
        $.ajax({
          type: "POST",
          url: "ajax.php",
          data: dataString,
          success: function(data) {
            //Escribimos las sugerencias que nos manda la consulta
            $('#suggestions').fadeIn(1000).html(data);
            //Al hacer click en algua de las sugerencias
            $('.suggest-element').on('click', function() {
              //Obtenemos la id unica de la sugerencia pulsada
              var id = $(this).attr('id');

              var idlcliente = $(this).attr('id').substring(7, 10).match(/\d+/);
              //Editamos el valor del input con data de la sugerencia pulsada
              $('#key').val($('#' + id).attr('data'));
              //Hacemos desaparecer el resto de sugerencias
              $('#suggestions').fadeOut(1000);
              alert('Has seleccionado a ' + ' ' + $('#' + id).attr('data'));
              document.f1.paciente.value = idlcliente;

              document.f1.clientenombre.value = $('#' + id).attr('data');
              return false;
            });
          }
        });
      });
    });



    $(document).ready(function() {
      $('#keymedico').on('keyup', function() {
        var keymedico = $(this).val();
        var dataString = 'keymedico=' + keymedico;
        $.ajax({
          type: "POST",
          url: "ajaxmedico.php",
          data: dataString,
          success: function(data) {
            //Escribimos las sugerencias que nos manda la consulta
            $('#suggestionsingresos').fadeIn(1000).html(data);
            //Al hacer click en algua de las sugerencias
            $('.suggest-element').on('click', function() {
              //Obtenemos la id unica de la sugerencia pulsada
              var id = $(this).attr('id');

              var idmedico = $(this).attr('id').substring(7, 10).match(/\d+/);
              //Editamos el valor del input con data de la sugerencia pulsada
              $('#key').val($('#' + id).attr('data'));
              //Hacemos desaparecer el resto de sugerencias
              $('#suggestionsingresos').fadeOut(1000);
              alert('Has seleccionado a ' + ' ' + $('#' + id).attr('data'));
              document.f1.medico.value = idmedico;


              return false;
            });
          }
        });
      });
    });
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>NUEVA CITA </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style type="text/css">
    #myInput {
      background-image: url('../cita/css/buscador.png');
      /* Add a search icon to input */
      background-position: 10px 12px;
      /* Position the search icon */
      background-repeat: no-repeat;
      /* Do not repeat the icon image */
      width: 100%;
      /* Full-width */
      font-size: 16px;
      /* Increase font-size */
      padding: 12px 20px 12px 40px;
      /* Add some padding */
      border: 1px solid #ddd;
      /* Add a grey border */
      margin-bottom: 12px;
      /* Add some space below the input */
    }

    #myUL {
      /* Remove default list styling */
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    #myUL li a {
      border: 1px solid #ddd;
      /* Add a border to all links */
      margin-top: -1px;
      /* Prevent double borders */
      background-color: #f6f6f6;
      /* Grey background color */
      padding: 12px;
      /* Add some padding */
      text-decoration: none;
      /* Remove default text underline */
      font-size: 18px;
      /* Increase the font-size */
      color: black;
      /* Add a black text color */
      display: block;
      /* Make it into a block element to fill the whole list */
    }

    #myUL li a:hover:not(.header) {
      background-color: #eee;
      /* Add a hover effect to all links, except for headers */
    }
  </style>
</head>

<body class="hold-transition login-page">
  <?php
  if (!isset($_SESSION["carrito"])) $_SESSION["carrito"] = [];
  $granTotal = 0;
  $impuTotal = 0;
  ?>
  <div class="col-xs-12">
    <section class="content container body">
      <div class="row">
        <div class="col-md-8 main_container">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">REGISTRAR NUEVA CITA</h3>
            </div><!-- /.box-header -->
            <!-- form start -->

            <div class="box-body">
              <div class="box">
                <div class="box-body no-padding">
                  <div class="row">
                    <div id="content" class="col-lg-12">
                      <form class="form-inline" method="post" action="#">
                      </form>
                      <div id="suggestions"></div>
                    </div>
                  </div>
                  <br> <br>

                  <form class="form-horizontal" name="f1" action="../cita/cita_add.php" method="POST">
                    <label for="date">Seleccione Paciente</label>
                    <div class="input-group input-group-sm">
                      <input class="search_query form-control" type="text" name="key" id="key" placeholder="Buscar..." required>
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-info btn-flat"><i class="fa fa-search"></i></button>
                      </span>
                    </div>
                    <br>

                    <div class="row">
                      <div class="col-md-3 btn-print">
                        <div class="form-group">
                          <label for="date">Especialidad</label>

                        </div><!-- /.form group -->
                      </div>
                      <div class="col-md-4 btn-print">
                        <div class="form-group">
                          <select class="form-control select2" name="especialidad" required>

                            <?php

                            $queryc = mysqli_query($con, "select * from especialidad  ") or die(mysqli_error());
                            while ($rowc = mysqli_fetch_array($queryc)) {
                            ?>
                              <option value="<?php echo $rowc['id_especialidad']; ?>"><?php echo $rowc['nombre_especialidad']; ?></option>
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
                          <label for="date">Medico</label>

                        </div><!-- /.form group -->
                      </div>
                      <div class="col-md-4 btn-print">
                        <div class="form-group">
                          <select class="form-control select2" name="id_medico" required>

                            <?php

                            $queryc = mysqli_query($con, "select * from usuario where tipo='medico'  ") or die(mysqli_error());
                            while ($rowc = mysqli_fetch_array($queryc)) {
                            ?>
                              <option value="<?php echo $rowc['id']; ?>"><?php echo $rowc['nombre']; ?></option>
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
                          <label for="date">Fecha cita</label>

                        </div><!-- /.form group -->
                      </div>
                      <div class="col-md-4 btn-print">
                        <div class="form-group">

                          <input type="date" class="form-control pull-right" id="fecha" name="fecha" required>

                        </div>
                      </div>
                      <div class="col-md-4 btn-print">

                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-3 btn-print">
                        <div class="form-group">
                          <label for="date">Horario</label>

                        </div><!-- /.form group -->
                      </div>
                      <div class="col-md-4 btn-print">
                        <div class="form-group">
                          <select class="form-control select2" name="horario" required>

                            <?php

                            $queryc = mysqli_query($con, "select * from horario  ") or die(mysqli_error());
                            while ($rowc = mysqli_fetch_array($queryc)) {
                            ?>
                              <option value="<?php echo $rowc['id_horario']; ?>"><?php echo $rowc['nombre_horario']; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4 btn-print">

                      </div>
                    </div>

                    <input name="paciente" id="paciente" type="hidden" required>

                    <br>
                    <button type="submit" class="btn btn-success ">Registrar cita</button>
                    <br><br>
                  </form>

                  <div class="row">


                    <div class="box-body">

                    </div>

                  </div>

                </div><!-- ./col -->

                <?php

                ?>

              </div>
              <!--row-->

              <?php

              ?>
            </div><!-- /.box-body -->
          </div><!-- /.box -->


        </div><!-- /.box -->
        <!-- general form elements disabled -->

      </div>
      <!--/.col (right) -->

    </section><!-- /.content -->
  </div> <!-- /.row -->

  <!-- Footer -->
  <footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>UNMSM &copy; Sistema de Seguros 2021 </span>
      </div>
    </div>
  </footer>
  <!-- End of Footer -->

  </div>
  <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">??</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>




  <!-- datatables JS -->
  <script type="text/javascript" src="vendor/datatables/datatables.min.js"></script>
  <!-- c??digo propio JS -->
  <script type="text/javascript" src="main.js"></script>

  <script>
    function myFunction() {
      // Declare variables
      var input, filter, ul, li, a, i, txtValue;
      input = document.getElementById('myInput');
      filter = input.value.toUpperCase();
      ul = document.getElementById("myUL");
      li = ul.getElementsByTagName('li');

      // Loop through all list items, and hide those who don't match the search query
      for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          li[i].style.display = "";
        } else {
          li[i].style.display = "none";
        }
      }
    }
  </script>


  <script type="text/javascript">
    $(document).ready(function() {
      $("#id_ubicacion").change(function() {
        $.get("get_categoria_corte.php", "id_ubicacion=" + $("#id_ubicacion").val(), function(data) {
          $("#id_categoria_corte").html(data);
          console.log(data);
        });
      });

      $("#id_categoria_corte").change(function() {
        $.get("get_corte.php", "id_categoria_corte=" + $("#id_categoria_corte").val(), function(data) {
          $("#id_corte").html(data);
          console.log(data);
        });
      });


    });
  </script>
  <!-- jQuery 2.1.4 -->
  <script src="../cita/public/js/jquery.min.js"></script>
  <!-- Bootstrap 3.3.5 -->
  <script src="../cita/public/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="../cita/public/js/icheck.min.js"></script>


</body>

</html>