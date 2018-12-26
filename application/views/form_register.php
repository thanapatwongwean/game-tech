<!-- CONTENT -->
<main>
    <h2>Register</h2>
    <?= form_open('form', 'class=""'); ?>
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
        echo form_textarea($data);
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
</main>
<!-- /CONTENT -->
