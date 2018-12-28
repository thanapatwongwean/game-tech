<!-- CONTENT -->
<main>
<div class="col-lg-6">
	<div class="box">
    <h2>Register</h2>
	<p class="lead">Not our customer yet?</p>
    <p>Let's join us to try or get some cool gaming gadget or IT stuff!</p>
    <?php echo validation_errors('<div style ="color:red;"><strong>', '</strong></div><br>'); ?>
    <?= form_open('register', 'class=""'); ?>
        <div class="form-group">
            <?php
            echo form_label('Username', 'username');
            echo '<span style="color: red;">*</span><br>';
            $data = ['name' => 'username', 'id' => 'username', 'size' => '50' ,'class' => 'form-control'];
            echo form_input($data);
            ?>
         </div>
        <div class="form-group">
            <?php
            echo form_label('Password', 'password');
            echo '<span style="color: red;">*</span><br>';
            $data = ['name' => 'password', 'id' => 'password', 'size' => '50' ,'class' => 'form-control'];
            echo form_password($data);
            ?>
        </div>
        <div class="form-group">
            <?php
            echo form_label('Confirm Password', 'password');
            echo '<span style="color: red;">*</span><br>';
            $data = ['name' => 'passwordConf', 'id' => 'passwordConf','size' => '50' ,'class' => 'form-control'];
            echo form_password($data);
            ?>
            </div>
        <div>
            <?php
            echo form_label('Fullname', 'fullname');
            echo '<span style="color: red;">*</span><br>';
            $data = ['name' => 'fullname', 'id' => 'fullname','size' => '50' ,'class' => 'form-control'];
            echo form_input($data);
            ?>
        </div>
        <div class="form-group">
            <?php
            echo form_label('Address', 'address');
            echo '<span style="color: red;">*</span><br>';
            $data = ['name' => 'address', 'id' => 'address','cols' => '50','rows' => '3','class' => 'form-control'];
            echo form_textarea($data);
            ?>
        </div>
        <div class="form-group">
            <?php
            echo form_label('Phone', 'phone');
            echo '<br>';
            $data = ['name' => 'phone', 'id' => 'phone','size' => '50' ,'class' => 'form-control'];
            echo form_input($data);
            ?>
        </div>
        <div class="form-group">
            <?php
            echo form_label('Email','email');
            echo '<span style="color: red;">*</span><br>';
            $data = ['name' => 'email', 'id' => 'email','size' => '50','class' => 'form-control'];
            echo form_input($data);
            ?>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary" name="submit"><i class="fa fa-user-md"></i>Submit</button>
            <button type="reset" class="btn btn-primary" name="reset">Reset</button>
        </div>

    <?= form_close(); ?>
</div>
</div>
</main>
<!-- /CONTENT -->

<!--<div class="col-lg-6">
	<div class="box">
test css
	<div class="form-group">
     <label for="name">Username</label>
      <input id="name" type="text" class="form-control">
     </div>
	<div class="text-center">
        <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i>Submit</button>
    </div>
</div>
</div>--!>