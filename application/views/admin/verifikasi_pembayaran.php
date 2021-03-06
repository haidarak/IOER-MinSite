<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Indonesia Open Educational Resource</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo asset_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="<?php echo asset_url();?>dist/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme style -->
    <link href="<?php echo asset_url();?>dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- Custom style -->
    <link href="<?php echo asset_url();?>dist/css/custom.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo asset_url();?>dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="skin-blue">
    <div class="wrapper">
      <header class="main-header"> 
        <a href="<?php echo asset_url();?><?php echo asset_url();?>index2.html" class="logo">IOER</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="container-fluid">
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-collapse">
           <ul class="nav navbar-nav">
              <li><a href="course.html">Course</a></li>
              <li><a href="#">Layanan</a></li>
              <li><a href="penyedia-layanan.html">Penyedia Layanan</a></li>
              <li><a href="#">Tentang Kami</a></li>
            </ul>
            <!-- navbar right profile-->
            <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="<?php echo asset_url();?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">Nama tutor</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="<?php echo asset_url();?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                      Nama tutor
                      <small>Tutor</small>
                    </p>
                  </li>
                  <!-- User Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
        
      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview active">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Manajer Pembayaran</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="verifikasi-pembayaran.html"><i class="fa fa-circle-o"></i> Verifikasi Pembayaran</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Manajer Layanan</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="kelola-layanan.html"><i class="fa fa-circle-o"></i> Kelola Layanan</a></li>
                <li><a href="kelola-term.html"><i class="fa fa-circle-o"></i> Kelola Term</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Kelola Penyedia Layanan</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Aktivasi Layanan</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Manajer Course</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Kelola Course</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Manajer User</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> View Registrasi</a></li>
                <li><a href="kelola-member.html"><i class="fa fa-circle-o"></i> Kelola Member</a></li>
                <li><a href="ubah-member-layanan.html"><i class="fa fa-circle-o"></i> Deaktivasi User dari Layanan</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- =============================================== -->
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container-fluid">
          <!-- Content Header (Page header) -->
          <section class="content-header">
              <h1>Verifikasi Pembayaran</h1>
            <ol class="breadcrumb">
              <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
            </ol>
          </section>
          <!-- Main content -->
          <section class="content">
            <div class="col-md-8 col-md-offset-2">
              <div class="row">
                <div class="box">
                  <div class="box-body">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Nama</th>
                            <th>Layanan</th>
                            <th>Bukti</th>
                            <th>Verifikasi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Dahru</td>
                            <td>Cisco Summer Camp</td>
                            <td>-</td>
                            <td><div role="form">
                                    <input type="checkbox"></div>  
                            </td>
                          </tr>
                          <tr>
                            <td>Aji</td>
                            <td>Cisco Summer Camp</td>
                            <td>-</td>
                            <td><div role="form">
                                    <input type="checkbox"></div>  
                            </td>
                          </tr>
                          <tr>
                            <td>Azka</td>
                            <td>Cisco Summer Camp</td>
                            <td>-</td>
                            <td><div role="form">
                                    <input type="checkbox"></div>  
                            </td>
                          </tr>
                          <tr>
                            <td>Rizda</td>
                            <td>Cisco Summer Camp</td>
                            <td>-</td>
                            <td><div role="form">
                                    <input type="checkbox"></div>  
                            </td>
                          </tr>
                        </tbody>
                    </table>
                  </div>
                </div>    
              </div>
            </div>
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          Versi 1.0
        </div>
        <!-- Default to the left --> 
        <strong>Copyright &copy; 2015 <a href="#">Indonesia Open Educational Resources</a>.</strong> All rights reserved.
      </footer>

    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="<?php echo asset_url();?>plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo asset_url();?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?php echo asset_url();?>plugins/slimScroll/jquery.slimScroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo asset_url();?>plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?php echo asset_url();?>dist/js/app.min.js" type="text/javascript"></script> 
  </body>
</html>
