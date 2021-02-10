<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo isset($title) ? $title   :  '' ; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../adminLTE/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="../adminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../adminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../adminLTE/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../adminLTE/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../adminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../adminLTE/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../adminLTE/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<style>
body {
    padding-top: 0px;
}
</style>

<body class="hold-transition sidebar-mini layout-fixed">

    <?php
						$query = "SELECT count(*) as 'Total' FROM `tblpayment` WHERE `STATUS`='Pending'";
						$mydb->setQuery($query);
						$cur = $mydb->loadResultList();  
						foreach ($cur as $result) { 
                            ?>


    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?php echo WEB_ROOT; ?>admin/index.php" class="nav-link">Inicio</a>
                </li>

            </ul>



            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->

                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span
                            class="badge badge-warning navbar-badge"><?php echo  isset($result->Total) ?  $result->Total : '';?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span
                            class="dropdown-item dropdown-header"><?php echo  isset($result->Total) ?  $result->Total : '';?>
                            Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i>
                            <?php echo  isset($result->Total) ?  $result->Total : '';?> Por cofirmar
                            <span class="float-right text-muted text-sm"></span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="<?php echo WEB_ROOT; ?>admin/mod_reservation/index.php"
                            class="dropdown-item dropdown-footer">Ver todas las notificaciones</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-user"></i>
                        <span class="badge badge-warning navbar-badge"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">Administrador</span>
                        <div class="dropdown-divider"></div>

                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                    src="<?php echo WEB_ROOT; ?>admin/adminLTE/dist/img/user4-128x128.jpg"
                                    alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center"> <?php echo $_SESSION['ADMIN_UNAME'];?></h3>
                        </div>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-item dropdown-header">
                            <a class="<?php echo (currentpage() == 'logout.php') ? "active" : false;?>  toggle-modal"
                                href="#logout" class="dropdown-item dropdown-footer">
                                <p><i class="far fa-user"></i> Cerrar Sesion</p>
                            </a>
                        </span>

                    </div>
                </li>


            </ul>
        </nav>
        <?php } ?>

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="" class="brand-link">
                <img src="<?php echo WEB_ROOT; ?>admin/adminLTE/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">HOSPEDAJE PACIFICO</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo WEB_ROOT; ?>admin/adminLTE/dist/img/user2-160x160.jpg"
                            class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"> <?php echo $_SESSION['ADMIN_UNAME'];?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="<?php echo WEB_ROOT; ?>admin/index.php" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <span class="right badge badge-danger">New</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-hotel"></i>
                                <p>
                                    Habitaciones
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo WEB_ROOT; ?>admin/mod_room/index.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ver habitaciones</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo WEB_ROOT; ?>admin/mod_room/index.php?view=add" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Agregar habitaciones</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-bed"></i>
                                <p>
                                    Alojamiento

                                    <i class="right fas fa-angle-left"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo WEB_ROOT; ?>admin/mod_accomodation/index.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ver alojamiento</p>
                                    </a>
                                    <a href="<?php echo WEB_ROOT; ?>admin/mod_accomodation/index.php?view=add"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Agregar tipo de alojamiento</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="far fa-calendar-check"></i>
                                <p>
                                    Reserva
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">
                                        <?php echo  isset($result->Total) ?  $result->Total : '';?> </span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo WEB_ROOT; ?>admin/mod_reservation/index.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>ver reserva</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo WEB_ROOT; ?>admin/mod_booked/index.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Agregar reserva</p>
                                    </a>
                                </li>
                            </ul>

                        </li>
                        <?php if($_SESSION['ADMIN_UROLE']=="Administrator"){ ?>
                        <li class="nav-item has-treeview">
                            <a href="<?php echo WEB_ROOT; ?>admin/mod_users/index.php" class="nav-link">
                                <i class="fas fa-users"></i>
                                <p>
                                    Usuarios
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="<?php echo WEB_ROOT; ?>admin/mod_users/index.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ver usuarios</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo WEB_ROOT; ?>admin/mod_users/index.php?view=add"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Agregar usuarios</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <?php } ?>
                        <li class="nav-item has-treeview">
                            <a href="<?php echo WEB_ROOT; ?>admin/mod_users/index.php" class="nav-link">
                                <i class="fas fa-chart-pie"></i>
                                <p>
                                    Reportes
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="<?php echo WEB_ROOT; ?>admin/mod_reports/index.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ver reportes</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="<?php echo WEB_ROOT; ?>admin/mod_guest1/index.php" class="nav-link">
                                <i class="fas fa-chart-pie"></i>
                                <p>
                                    Huspedes registrados
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="<?php echo WEB_ROOT; ?>admin/mod_guest1/index.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ver Huespedes</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="<?php echo WEB_ROOT; ?>admin/mod_guest1/index.php?view=add" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Regitrar  Huespedes</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="<?php echo WEB_ROOT; ?>admin/mod_users/index.php" class="nav-link">
                                <i class="fas fa-cog"></i>
                                <p>
                                    Configuraciones
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="<?php echo WEB_ROOT; ?>admin/mod_users/index.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Administracion de usuarios</p>
                                    </a>
                                </li>
                            </ul>
                        </li>



                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark"><?php echo isset($title) ? $title  :  '' ; ?></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo WEB_ROOT; ?>admin/index.php">Inicio</a>
                                </li>
                                <li class="breadcrumb-item active"><?php echo isset($title) ? $title  :  '' ; ?></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <?php require_once $content;?>


            <!-- jQuery -->
            <script src="../adminLTE/plugins/jquery/jquery.min.js"></script>
            <!-- jQuery UI 1.11.4 -->
            <script src="../adminLTE/plugins/jquery-ui/jquery-ui.min.js"></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>
            $.widget.bridge('uibutton', $.ui.button)
            </script>
            <!-- Bootstrap 4 -->
            <script src="../adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- ChartJS -->
            <script src="../adminLTE/plugins/chart.js/Chart.min.js"></script>
            <!-- Sparkline -->
            <script src="../adminLTE/plugins/sparklines/sparkline.js"></script>
            <!-- JQVMap -->
            <script src="../adminLTE/plugins/jqvmap/jquery.vmap.min.js"></script>
            <script src="../adminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
            <!-- jQuery Knob Chart -->
            <script src="../adminLTE/plugins/jquery-knob/jquery.knob.min.js"></script>
            <!-- daterangepicker -->
            <script src="../adminLTE/plugins/moment/moment.min.js"></script>
            <script src="../adminLTE/plugins/daterangepicker/daterangepicker.js"></script>
            <!-- Tempusdominus Bootstrap 4 -->
            <script src="../adminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
            <!-- Summernote -->
            <script src="../adminLTE/plugins/summernote/summernote-bs4.min.js"></script>
            <!-- overlayScrollbars -->
            <script src="../adminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
            <!-- AdminLTE App -->
            <script src="../adminLTE/dist/js/adminlte.js"></script>
            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <script src="../adminLTE/dist/js/pages/dashboard.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="../adminLTE/dist/js/demo.js"></script>



















            <script type="text/javascript">
            //execute if all html elemen has been completely loaded
            $(document).ready(function() {

                //specify class name of a specific element. click event listener--
                $('.cls_btn').click(function() {
                    //access the id of the specific element that has been click	
                    var id = $(this).attr('id');
                    //to debug every value of element,variable, object ect...
                    console.log($(this).attr('id'));

                    //execute a php file without reloading the page and manipulate the php responce data
                    $.ajax({

                        type: "POST",
                        //the php file that contain a mysql query
                        url: "some.php",
                        //submit parameter
                        data: {
                            id: id,
                            name: 'kevin'
                        }
                    })
                    //.done means will execute if the php file has done all the processing(ex: query)
                    // .done(function( msg ) {
                    // 	//decode JSON from PHP file response
                    // 	var result = JSON.parse(msg);

                    // 	console.log(this);

                    // 	//apply the value to each element
                    //   $('#display #infoid').html(result[0].member_id);
                    //   $('#display #infoname').html(result[0].fName+" "+result[0].lName);
                    //   $('#display #Email').html(result[0].email);
                    //   $('#display #Gender').html(result[0].gender);
                    //   $('#display #bday').html(result[0].bday);
                    //     });

                });

            });
            </script>
            <script type="text/javascript" charset="utf-8">
            $(document).on("click", ".get-id", function() {
                var p_id = $(this).data('id');
                $(".modal-body #infoid").val(p_id);

            });
            </script>


            <script type="text/javascript">
            $(document).ready(function() {
                $('.toggle-modal').click(function() {
                    $('#logout').modal('toggle');
                });
            });
            </script>
            <script type="text/javascript">
            $(document).ready(function() {
                $('.toggle-modal-reserve').click(function() {
                    $('#reservation').modal('toggle');
                });
            });
            </script>

            <script type="text/javascript">
            $(document).ready(function() {
                $('.roomImg').click(function() {
                    var id = $(this).data('id');
                    // alert(id)

                    $.ajax({ //create an ajax request to load_page.php
                        type: "POST",
                        url: "editpic.php",
                        dataType: "text", //expect html to be returned  
                        data: {
                            ROOMID: id
                        },
                        success: function(data) {
                            $('#myModal').modal('toggle').html(data);
                            // alert(data);

                        }
                    });
                });
            });
            </script>

            <script type="text/javascript" charset="utf-8">
            $(document).ready(function() {
                var t = $('#example').DataTable({
                    "columnDefs": [{
                        "searchable": false,
                        "orderable": false,
                        "targets": 1
                    }],

                    "order": [
                        [1, 'desc']
                    ]
                });

                t.on('order.dt search.dt', function() {
                    t.column(0, {
                        search: 'applied',
                        order: 'applied'
                    }).nodes().each(function(cell, i) {
                        cell.innerHTML = i + 1;
                    });
                }).draw();
            });


            $(document).ready(function() {
                var t = $('#table').DataTable({
                    "columnDefs": [{
                        "searchable": false,
                        "orderable": false,
                        "targets": 0
                    }],

                    "order": [
                        [7, 'desc']
                    ]
                });

                t.on('order.dt search.dt', function() {
                    t.column(0, {
                        search: 'applied',
                        order: 'applied'
                    }).nodes().each(function(cell, i) {
                        cell.innerHTML = i + 1;
                    });
                }).draw();
            });
            </script>
            <link href="<?php echo WEB_ROOT; ?>admin/css/offcanvas.css" rel="stylesheet">
            <?php
 admin_logged_in();
?>





            <script>
            $(function() {
                $(".select2").select2();
            })


            $('input[data-mask]').each(function() {
                var input = $(this);
                input.setMask(input.data('mask'));
            });


            $('#DATETO').inputmask({
                mask: "2/1/y h:s",
                placeholder: "mm/dd/yyyy hh:mm",
                alias: "datetime",
                hourFormat: "24"
            });



            $('#DATEFROM').inputmask({
                mask: "2/1/y h:s",
                placeholder: "mm/dd/yyyy hh:mm",
                alias: "datetime",
                hourFormat: "24"
            });



            function checkall(selector) {
                if (document.getElementById('chkall').checked == true) {
                    var chkelement = document.getElementsByName(selector);
                    for (var i = 0; i < chkelement.length; i++) {
                        chkelement.item(i).checked = true;
                    }
                } else {
                    var chkelement = document.getElementsByName(selector);
                    for (var i = 0; i < chkelement.length; i++) {
                        chkelement.item(i).checked = false;
                    }
                }
            }

            function checkNumber(textBox) {
                while (textBox.value.length > 0 && isNaN(textBox.value)) {
                    textBox.value = textBox.value.substring(0, textBox.value.length - 1)
                }
                textBox.value = trim(textBox.value);
            }
            //
            function checkText(textBox) {
                var alphaExp = /^[a-zA-Z]+$/;
                while (textBox.value.length > 0 && !textBox.value.match(alphaExp)) {
                    textBox.value = textBox.value.substring(0, textBox.value.length - 1)
                }
                textBox.value = trim(textBox.value);
            }
            </script>


            <!--/.container-->

            <script type="text/javascript">
            $('.start').datetimepicker({
                language: 'en',
                weekStart: 1,
                todayBtn: 1,
                autoclose: 1,
                todayHighlight: 1,
                startView: 2,
                minView: 2,
                forceParse: 0
            });
            $('.end').datetimepicker({
                language: 'en',
                weekStart: 1,
                todayBtn: 1,
                autoclose: 1,
                todayHighlight: 1,
                startView: 2,
                minView: 2,
                forceParse: 0
            });
            </script>
</body>

</html>