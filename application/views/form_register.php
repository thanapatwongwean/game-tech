<!-- CONTENT -->
<main>
<div class="col-lg-6">
	<div class="box">
    <h2>Register</h2>
	<p class="lead">Not our customer yet?</p>
    <p>Let's join us to try or get some cool gaming gadget or IT stuff!</p>
    <?php echo validation_errors('<div>', '</div>'); ?>
    <?= form_open('register', 'class=""'); ?>
    <div>
        <?php
        echo form_label('Username:', 'username');
        $data = ['name' => 'username', 'id' => 'username','cols' => '50','rows' => '1'];
        echo form_textarea($data);
        ?>
    </div>
    <div>
        <?php
        echo form_label('Password:', 'password');
        $data = ['name' => 'password', 'id' => 'password','cols' => '50','rows' => '1'];
        echo form_password($data);
        ?>
    </div>
    <div>
        <?php
        echo form_label('Confirm Password:', 'password');
        $data = ['name' => 'passwordConf', 'id' => 'passwordConf','cols' => '50','rows' => '1'];
        echo form_password($data);
        ?>
    </div>
    <div>
        <?php
        echo form_label('Fullname:', 'fullname');
        $data = ['name' => 'fullname', 'id' => 'fullname','cols' => '50','rows' => '1'];
        echo form_textarea($data);
        ?>
    </div>
    <div>
        <?php
        echo form_label('Address:', 'address');
        $data = ['name' => 'address', 'id' => 'address','cols' => '50','rows' => '3'];
        echo form_textarea($data);
        ?>
    </div>
    <div>
        <?php
        echo form_label('Phone:', 'phone');
        $data = ['name' => 'phone', 'id' => 'phone','cols' => '50','rows' => '1'];
        echo form_textarea($data);
        ?>
    </div>
    <div>
        <?php
        echo form_label('Email:', 'email');
        $data = ['name' => 'email', 'id' => 'email','cols' => '50','rows' => '1'];
        echo form_textarea($data);
        ?>
    </div>
    <div>
        <?= form_submit('submit', 'Submit'); ?>
        <?= form_reset('reset', 'Reset'); ?>
    </div>

    <?= form_close(); ?>
</div>
</div>
</main>
<!-- /CONTENT -->

<div class="col-lg-6">
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
</div>