<!-- CONTENT -->
<main>

      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <!--
              *** CUSTOMER MENU ***
              _________________________________________________________
              -->
              <div class="card sidebar-menu">
                <div class="card-header">
                  <h3 class="h4 card-title">User section</h3>
                </div>
                <div class="card-body">
                  <ul class="nav nav-pills flex-column"><a href="<?= base_url('user'); ?>" class="nav-link"><i class="fa fa-list"></i> My orders</a><a href="<?= base_url('user_acc'); ?>" class="nav-link active"><i class="fa fa-user"></i> My account</a><a href="<?= base_url('logout'); ?>" class="nav-link"><i class="fa fa-sign-out"></i> Logout</a></ul>
                </div>
              </div>
              <!-- /.col-lg-3-->
              <!-- *** CUSTOMER MENU END ***-->
            </div>
			<div class="col-lg-9">
              <div class="box">
                <h1>My account</h1>
                  <?php   if($this->session->flashdata("error_msg")):
                      echo '<div style ="color:red;"><strong>'.$this->session->flashdata("error_msg").'</strong></div><br>';
                  elseif($this->session->flashdata("msg")):
                      echo '<div style ="color:green;"><strong>'.$this->session->flashdata("msg").'</strong></div><br>';
                  elseif($this->session->flashdata('error_validation')):
                      echo '<div style ="color:red;"><strong>'.$this->session->flashdata("error_validation").'</strong></div><br>';
                  endif;?>
                <p class="lead">Your account setting and personal details.</p> 
                <h3>Change password</h3>
                  <?= form_open(base_url('user_acc/set_password'),'class = ""');?>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <?php
                              echo form_label('Old password', 'oldpassword');
                              $data = ['name' => 'oldpassword', 'id' => 'oldpassword' ,'class' => 'form-control'];
                              echo form_password($data);
                              ?>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                          <?php
                          echo form_label('New password', 'password');
                          $data = ['name' => 'password', 'id' => 'password' ,'class' => 'form-control'];
                          echo form_password($data);
                          ?>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <?php
                          echo form_label('Retype password', 'passwordConf');
                          $data = ['name' => 'passwordConf', 'id' => 'passwordConf' ,'class' => 'form-control'];
                          echo form_password($data);
                          ?>
                      </div>
                    </div>
                  </div>
                  <!-- /.row-->
                  <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save new password</button>
                  </div>
                <?= form_close();?>
                <h3 class="mt-5">Personal details</h3>
                  <?= form_open(base_url('user_acc/updateInfo'),'class = ""');?>
                  <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <?php
                            echo form_label('Fullname', 'fullname');
                            $data = ['name' => 'fullname', 'id' => 'fullname' ,'class' => 'form-control', 'value' => $fullname];
                            echo form_input($data);
                            ?>
                        </div>
                    </div>
                  </div>
                  <!-- /.row-->
                  <div class="row">
                    <div class="col-lg-12 col">
                      <div class="form-group">
                          <?php
                          echo form_label('Adress', 'address');
                          $data = ['name' => 'address', 'id' => 'address' ,'class' => 'form-control','value' => $address];
                          echo form_textarea($data);
                          ?>
                      </div>
                    </div>
                    <div class="col-md-6 col">
                      <div class="form-group">
                          <?php
                          echo form_label('Phone', 'phone');
                          $data = ['name' => 'phone', 'id' => 'phone' ,'class' => 'form-control','value' => $phone];
                          echo form_input($data);
                          ?>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <?php
                            echo form_label('Email', 'email');
                            $data = ['name' => 'email', 'id' => 'email' ,'class' => 'form-control','value' => $email];
                            echo form_input($data);
                            ?>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save changes</button>
                    </div>
                  </div>
                <?= form_close();?>
              </div>
            </div>
          </div>
        </div>
      </div>



</main>
