<main>
    <div class="col-lg-6">
        <div class="box">
            <h2>Insert Product</h2>
            <?php   if($this->session->flashdata("error")):
                echo '<div style ="color:red;"><strong>'.$this->session->flashdata("error").'</strong></div><br>';
            endif;?>
            <?= form_open(base_url("product/insert"), 'class=""'); ?>
            <div class="form-group">
                <?php
                echo form_label('Name', 'name');
                echo '<br>';
                $data = ['name' => 'name', 'id' => 'name', 'size' => '50' ,'class' => 'form-control'];
                echo form_input($data);
                ?>
            </div>
            <div class="form-group">
                <?php
                echo form_label('Price', 'price');
                echo '<br>';
                $data = ['name' => 'price', 'id' => 'price', 'size' => '50' ,'class' => 'form-control','step' => '0.01'];
                echo form_input($data);
                ?>
            </div>
            <div class="form-group">
                <?php
                echo form_label('Quantity', 'quantity');
                echo '<br>';
                $data = ['name' => 'quantity', 'id' => 'quantity','size' => '50' ,'class' => 'form-control',];
                echo form_input($data);
                ?>
            </div>
            <div>
                <?php
                echo form_label('Type', 'type');
                echo '<br>';
                $options = array(
                    'CPU' => 'CPU',
                    'MB' => 'MB',
                    'VGA' => 'VGA',
                    'HDD' => 'HDD',
                    'SSD' => 'SSD',
                    'COOL' => 'COOL',
                    'CASE' => 'CASE',
                    'Monitor' => 'Monitor',
                    'Notebook' => 'Notebook',
                    'Mouse' => 'Mouse',
                    'Keyboard' => 'Keyboard',
                    'Headphone' => 'Headphone',
                    'Mousepad' => 'Mousepad',
                    'Webcam' => 'Webcam',
                    'Microphone' => 'Microphone',
                    'Bungee' => 'Bungee',
                    'Speaker' => 'Speaker'
                );
                $data = ['name' => 'type', 'id' => 'type','options' => $options,'selected' => 'CPU'];
                echo form_dropdown($data);
                ?>
            </div>
            <div class="form-group">
                <?php
                echo form_label('Description', 'description');
                echo '<br>';
                $data = ['name' => 'description', 'id' => 'description','cols' => '50','rows' => '3','class' => 'form-control'];
                echo form_textarea($data);
                ?>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i>Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
            </div>

            <?= form_close(); ?>
        </div>
    </div>
</main>