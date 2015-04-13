<?php 
          if (isset($errorLogin)){
            echo '
            <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="enrollModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Gagal Login</h4>
                              </div>
                              <div class="modal-body">
                                <p>Username atau password Salah!</p>
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