<main>
    <div class="col-lg-6">
        <div class="box">
            <h2>Update Product</h2>
            <?php
                            echo '<div style ="color:red;"><strong>'.$this->session->flashdata("error").'</strong></div><br>';
                            echo '<div style ="color:red;"><strong>'.$this->session->flashdata("error_validation").'</strong></div><br>';
            ?>
            <?= form_open_multipart(base_url("product/update/$id"), 'class=""'); ?>
            <div class="form-group">
                <?php
                echo form_label('Name', 'name');
                echo '<br>';
                $data = ['name' => 'name', 'id' => 'name', 'size' => '50' ,'class' => 'form-control','value' => $name];
                echo form_input($data);
                ?>
            </div>
            <div class="form-group">
                <?php
                echo form_label('Price', 'price');
                echo '<br>';
                $data = ['name' => 'price', 'id' => 'price', 'size' => '50' ,'class' => 'form-control','value' => $price,'step' => '0.01'];
                echo form_input($data);
                ?>
            </div>
            <div class="form-group">
                <?php
                echo form_label('Quantity', 'quantity');
                echo '<br>';
                $data = ['name' => 'quantity', 'id' => 'quantity','size' => '50' ,'class' => 'form-control','value' => $quantity];
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
                    'NB' => 'NB',
                    'Mouse' => 'Mouse',
                    'KB' => 'KB',
                    'Headset' => 'Headset'
                );
                $selected = $type;
                $data = ['name' => 'type', 'id' => 'type','options' => $options,'selected' => $selected];
                echo form_dropdown($data);
                ?>
            </div>
            <div class="form-group">
                <?php
                echo form_label('Description', 'description');
                echo '<br>';
                $data = ['name' => 'description', 'id' => 'description','cols' => '50','rows' => '3','class' => 'form-control','value' => $description];
                echo form_textarea($data);
                ?>
            </div>
            <div>
                <?php
                echo form_label('Image', 'image');
                echo '<br>';
                $data = ['name' => 'image', 'id' => 'image', 'size' => '50'];
                echo form_upload($data)
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