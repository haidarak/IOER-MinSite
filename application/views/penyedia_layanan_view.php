<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Penyedia Layanan | Indonesia Open Educational Resource</title>
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
  <body class="skin-blue layout-top-nav">
    <div class="wrapper">
      
      <header class="main-header">               
        <nav class="navbar navbar-static-top">
          <div class="container-fluid">
          <div class="navbar-header">
            <a href="index2.html" class="navbar-brand">IOER</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-collapse">
           <ul class="nav navbar-nav">
              <li><a href="<?php echo base_url("course");?>">Course</a></li>
              <li><a href="<?php echo base_url("layanan");?>">Layanan</a></li>
              <li class="active"><a href="<?php echo base_url("penyedia_layanan");?>">Penyedia Layanan</a><span class="sr-only">(current)</span></li>
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
                  <img src="<?php echo asset_url();?>dist/img/user1-128x128.jpg" class="user-image" alt="User Image"/>
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">Nama tutor</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="<?php echo asset_url();?>dist/img/user1-128x128.jpg" class="img-circle" alt="User Image" />
                    <p>
                      Nama tutor
                      <small>Tutor</small>
                    </p>
                  </li>
                  <!-- User Body -->
                  <li class="user-body">
                    <a href="#">Layanan-ku</a>     
                  </li>
                  <li class="user-body">
                    <a href="#">Course-ku</a>     
                  </li>
                  <li class="user-body">
                    <a href="#">Nilai-ku</a>     
                  </li>
                  <li class="user-body">
                    <a href="#">Sertifikat-ku</a>     
                  </li>
                  <!-- Menu Footer-->
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
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container-fluid">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h2 class="text-center">Meet our Partners</h2>  
            <ol class="breadcrumb">
              <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
            </ol>
          </section>
  
          <!-- Main content -->
          <section class="content">
            <div class="row">
                <div class="box">
                  <div class="box-header with-border text-center">
                      <h4>
                      <a href="">Jakarta</a>
                      <a href="">Bandung</a>
                      <a href="">Surabaya</a>
                      </h4>
                  </div>
                  <div class="box-body">
                    <div class="text-center">
                      <img class="btn bg-gray" style="height:100px" src="http://www.ui.ac.id/wp-content/uploads/2014/07/xmakara-web.png.pagespeed.ic.oD-vJapvKg.png"> 
                      <img class="btn bg-gray" style="height:100px" src="http://www.itb.ac.id/img/logo-itb.png">   
                      <img class="btn bg-gray" style="height:100px" src="https://www.its.ac.id/images/v2/its_logo-white.png">
                      <img class="btn bg-gray" style="height:100px" src="http://binus.ac.id/wp-content/themes/binus-2014-58-core/assets/university/site-logo/site-logo-lg.png">
                
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
