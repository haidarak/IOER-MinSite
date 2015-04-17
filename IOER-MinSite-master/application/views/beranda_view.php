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
  <body class="skin-blue layout-top-nav">
    <div class="wrapper">
      
      <header class="main-header">               
        <nav class="navbar navbar-static-top">
          <div class="container-fluid">
          <div class="navbar-header">
            <a href="home.html" class="navbar-brand">IOER</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-collapse">
           <ul class="nav navbar-nav">
              <li><a href="<?php echo base_url('courses')?>">Course</a></li>
              <li><a href="<?php echo base_url('layanan')?>">Layanan</a></li>
              <li><a href="<?php echo base_url('penyedia_layanan')?>">Penyedia Layanan</a></li>
              <li><a href="<?php echo base_url('tentang_kami')?>">Tentang Kami</a></li>
            </ul>

            <!-- navbar right profile-->
             <!-- Navbar Right Menu -->
          <?php 
          if (isset($notif)){
            echo '
            <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="enrollModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">'.$notif.'</h4>
                              </div>
                              <div class="modal-body">
                                <p>'.$notifmsg.'</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                        </div>
                    </div>
            ';
          };

          if ($this->session->userdata('email') !== FALSE) {
            echo '
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">'.$this->session->userdata('nama').'</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <p>
                      '.$this->session->userdata('nama').'
                      <!-- <small>Member</small> -->
                    </p>
                  </li>
                  <!-- User Body -->
                  <li class="user-body">
                    <a href="'.base_url('layananku').'">Layanan-ku</a>     
                  </li>
                  <li class="user-body">
                    <a href="'.base_url('course_ku').'">Course-ku</a>     
                  </li>
                  <li class="user-body">
                    <a href="'.base_url('nilaiku').'">Nilai-ku</a>     
                  </li>
                  <li class="user-body">
                    <a href="'.base_url('sertifikatku').'">Sertifikat-ku</a>      
                  </li>
                  <!-- User Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="'.base_url('profile').'" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="'.base_url('users/logout').'" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          ';
          } else {
            echo '
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li><a href="'.base_url('register').'">Daftar</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Login</a>
                <ul class="dropdown-menu">
                  <form role="form" action="'.base_url().'users/login'.'" method="post">
                      <div class="box-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan e-mail" name="l_email">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="l_pass">
                        </div>
                      </div><!-- /.box-body -->

                      <div class="box-footer pull-right">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="true">Cancel</button>
                        <button id="submit" name="login" type="submit" class="btn btn-primary">Login</button>
                      </div>
                    </form>
                  </ul>
              </li>
            </ul>
          </div>
          ';
          } ?>
          </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container-fluid">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <br>
            <ol class="breadcrumb">
              <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
            </ol>
          </section>
  
          <!-- Main content -->
          <section class="content">
            <div class="row">
                <div class="jumbotron bg-navy">
                    <div class="container">
                        <h1>Take the Indonesia's best courses. <br> Online and free.</h1>
                        <a href=""><h3>Learn more <i class="fa fa-arrow-circle-o-right"></i></h3></a>
                    </div>
                </div>
            </div>
            <h1 class="page-header text-center">Most Popular</h1>
            <div class="box box-default">
                <div class="row">
                    <div class="box-body col-md-8 col-md-offset-2">
                       <div class="col-md-3">
                        <img style="height:100px" src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://d15cw65ipctsrr.cloudfront.net/24/5b8bd0352c11e49acdcfd9c2fca6c5/Course-Image3200x1800.png?auto=format&dpr=1&w=220&h=">
                        <p class="lead text-light-blue text-no-margin">Judul Course</p>
                        <p>Penyedia Layanan</p>
                       </div>
                        <div class="col-md-3">
                            <img style="height:100px" src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://d15cw65ipctsrr.cloudfront.net/29/753da0352c11e494bcf927fb09cbc9/MOOCMap-highres.png?auto=format&dpr=1&w=220&h="> 
                            <p class="lead text-light-blue text-no-margin">Judul Course</p>
                            <p>Penyedia Layanan</p>
                        </div>
                        <div class="col-md-3">
                            <img style="height:100px" src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://d15cw65ipctsrr.cloudfront.net/ce/4a3380352c11e48239673584835daa/Course-Logo.png?auto=format&dpr=1&w=220&h=">
                            <p class="lead text-light-blue text-no-margin">Judul Course</p>
                            <p>Penyedia Layanan</p>
                        </div>
                        <div class="col-md-3">
                            <img style="height:100px" src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://d15cw65ipctsrr.cloudfront.net/fa/b623100b2a11e491808b11e17df7d4/S-ent-pic.jpg?auto=format&dpr=1&w=220&h=">
                            <p class="lead text-light-blue text-no-margin">Judul Course</p>
                            <p>Penyedia Layanan</p>
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
    <script src="<?php echo asset_url();?>plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo asset_url();?>dist/js/app.min.js" type="text/javascript"></script>
                <script type="text/javascript">
            $(window).load(function(){
                $("#errorModal").modal("show");
            });
            </script>
  </body>
</html>
