<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-PERPUS | ESKASABA</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/bower_components/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/bower_components/morris.js/morris.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/bower_components/jvectormap/jquery-jvectormap.css">
     <link rel="stylesheet" href="<?= base_url()?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
     <link rel="stylesheet" href="<?= base_url()?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
     <link rel="stylesheet" href="<?= base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
     <link rel="stylesheet" href="<?= base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <a href="index2.html" class="logo">
        <span class="logo-mini"><b>E</b>-</span>
       <span class="logo-lg"><b>E-perpus</b>ESKASABA</span>
       </a>

    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <!-- <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div> -->
    </nav>
  </header>
  
  <!-- AM -->

    <?php $this->load->view('v_menu');?>

  <!-- Am -->

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      <?= $judul;?>
      </h1>
    </section>

    <section class="content">
    <?php $this->load->view($content);?>
    </section>
  </div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    <strong>Copyright &copy; 2022</a>.</strong> E-Book ESKASABA.
  </footer>

  <div class="control-sidebar-bg"></div>
</div>

    <script src="<?= base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url()?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <script src="<?= base_url()?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>
    <script src="<?= base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url()?>assets/bower_components/raphael/raphael.min.js"></script>
    <script src="<?= base_url()?>assets/bower_components/morris.js/morris.min.js"></script>
    <script src="<?= base_url()?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <script src="<?= base_url()?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?= base_url()?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?= base_url()?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
    <script src="<?= base_url()?>assets/bower_components/moment/min/moment.min.js"></script>
    <script src="<?= base_url()?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="<?= base_url()?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="<?= base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?= base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
    <script src="<?= base_url()?>assets/dist/js/adminlte.min.js"></script>
    <script src="<?= base_url()?>assets/dist/js/pages/dashboard.js"></script>
    <script src="<?= base_url()?>assets/dist/js/demo.js"></script>
    <script src="<?= base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <script>
    $(function () {
      $('.select2').select2()
    });
    </script>

    <script>
    $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
      })
     })
    </script>
  </body>
</html>
