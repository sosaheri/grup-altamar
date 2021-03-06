  <!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistema Altamar</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{!! asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')!!}">
  <!-- Font Awesome 
admin/bower_components/bootstrap/dist/css/bootstrap.min.css
  -->
  <link rel="stylesheet" href="{!! asset('admin/bower_components/font-awesome/css/font-awesome.min.css')!!}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{!! asset('admin/bower_components/Ionicons/css/ionicons.min.css')!!}">


  <!-- Theme style -->
  <link rel="stylesheet" href="{!! asset('admin/css/AdminLTE.min.css')!!}">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="{!! asset('admin/css/skins/skin-blue.min.css')!!}">

  <link rel="stylesheet" href="{!! asset('admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')!!}">

<link rel="stylesheet" href="{!! asset('admin//plugins/timepicker/bootstrap-timepicker.min.css')!!}">

<!-- DataTables -->
  <link rel="stylesheet" href="{!! asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')!!}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="{{ url('/')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img height="45px" src="{{ url('logo.png') }}" alt="Logo altamar">
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            @guest
            @else
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
             
              <!-- hidden-xs hides the username on small devices so only the image appears. <--><span style="margin-right: 40px;"></--><?php 
                    $fecha =getdate();

$dia = $fecha['mday'];
$mes = $fecha['mon'];
$ano = $fecha['year'];

if ($mes < 10){
  $mes = '0'.$mes;
}

echo $dia.'-'.$mes.'-'.$ano;
                   ?></span>
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
             
                <li class="user-header">
                   <p>
                                       {{ Auth::user()->name }}
                    <small>{{ Auth::user()->rol }}</small>
                  </p>
                </li>
              @endguest
              <!-- Menu Body -->

              <li class="user-footer">
                <div class="pull-left">
                 <!--  <a href="#" class="btn btn-default btn-flat">Perfil</a>-->
                </div>
                <div class="pull-right">
                  

                                             <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

       <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
       
        <!-- Optionally, you can add icons to the links -->
        <li><a href="{{ url('dashboard')}}"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
         
        
    @if(Auth::user()->rol == 'administrador')
        <li class="treeview">
      
          <a href="#"><i class="fa fa-users"></i><span>Gestión de Usuarios</span>
            <span class="pull-right-container">   
            <i class="fa fa-angle-right pull-right"></i>           
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('usuarios')}}"><i class="fa fa-users"></i><span>Listado de Usuarios</span></a></li>
         
           
            <li><a href="{{ url('register')}}"><i class="fa fa-users"></i><span>Registro de Usuarios</span></a></li>
           
            

          </ul>
        </li>

@endif

        

        <li><a href="{{ url('encomiendas')}}"><i class="fa fa-cubes"></i> <span>Gestión de Encomiendas</span></a></li>
        <li><a href="{{ url('remesas')}}"><i class="fa fa-money"></i> <span>Gestión de Remesas</span></a></li>
        
        <li class="treeview">
          <a href="#"><i class="fa fa-sort-amount-asc"></i><span>Transacciones</span>
            <span class="pull-right-container">   
            <i class="fa fa-angle-right pull-right"></i>           
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('transaccionesEncomiendas')}}"><i class="fa fa-users"></i>Encomiendas</a></li>
            <li><a href="{{ url('transaccionesRemesas')}}"><i class="fa fa-file-text-o"></i>Remesas</a></li>
          </ul>
        </li>
        @if(Auth::user()->rol == 'administrador')
        

        <li class="treeview">
          <a href="#"><i class="fa fa-file-text-o"></i><span>Reportes</span>
            <span class="pull-right-container">   
            <i class="fa fa-angle-right pull-right"></i>           
              </span>
          </a>
          <ul class="treeview-menu">
                <li><a href="{{ url('reportesEnc')}}"><i class="fa fa-file-text-o"></i>Reportes Encomiendas</a></li>
                <li><a href="{{ url('reportesRem')}}"><i class="fa fa-file-text-o"></i>Reportes Remesas</a></li>
          </ul>
        </li>



        @endif


      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sistema <b>Grupo Altamar</b>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

        @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.awgroupca.com">Arepa Web Group</a>
    </div>
    <!-- Default to the left -->
      </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->

<script src="{!! asset('admin/bower_components/jquery/dist/jquery.min.js')!!}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{!! asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')!!}"></script>
<!-- AdminLTE App -->
<script src="{!! asset('admin/js/adminlte.min.js')!!}"></script>

<script src="{!! asset('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')!!}"></script>
<script src="{!! asset('admin/bower_components/chart.js/Chart.js')!!}"></script>

<script src="{!! asset('admin/plugins/input-mask/jquery.inputmask.js')!!}"></script>
<script src="{!! asset('admin/plugins/input-mask/jquery.inputmask.date.extensions.js')!!}"></script>
<script src="{!! asset('admin/plugins/input-mask/jquery.inputmask.extensions.js')!!}"></script>


<script src="{!! asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')!!}"></script>

<script src="{!! asset('admin/bower_components/fastclick/lib/fastclick.js')!!}"></script>

<script src="{!! asset('admin/plugins/timepicker/bootstrap-timepicker.min.js')!!}"></script>

<!-- DataTables -->
<script src="{!! asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')!!}"></script>
<script src="{!! asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')!!}"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
<script>
//Date picker
    $('#datepicker').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    })


        $('#datepicker2').datepicker({
          format: 'yyyy-mm-dd',
      autoclose: true
    })

        $('#datepicker3').datepicker({
          format: 'yyyy-mm-dd',
      autoclose: true
    })


  //Timepicker
    $('.timepicker').timepicker({
      showMeridian: false,
      showSeconds: true,
      showInputs: false
    })

//datatable
  $(function () {
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })

</script>


</body>
</html>