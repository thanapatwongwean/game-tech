<?php
    echo '<div style ="color:red;"><strong>'.$this->session->flashdata("error").'</strong></div><br>';
    echo '<div style ="color:green;"><strong>'.$this->session->flashdata("msg").'</strong></div><br>';
    echo '<div style ="color:red;"><strong>'.$this->session->flashdata("error_validation").'</strong></div><br>';
?>
<div class="col-lg-13">
 <div class="box">
  <div class="table-responsive mb-4">
<table class="table">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Type</th>
        <th>Description</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>

    <?php foreach($product as $item):?>
        <tr>
            <td><?php echo $item['id'];?></td>
            <td><?php echo $item['name'];?></td>
            <td><?php echo $item['price'];?></td>
            <td><?php echo $item['quantity'];?></td>
            <td><?php echo $item['type'];?></td>
            <td><?php echo $item['description'];?></td>
            <td><a href="<?= base_url('product/update');?>/<?= $item['id']; ?>"><i class="fa fa-refresh"></a></td>
            <td><a href="<?= base_url('product/delete');?>/<?= $item['id']; ?>"><i class="fa fa-trash-o"></i></a></td>
        </tr>
    <?php endforeach;?>
		
</table>

<div class="col-md-12 text-right">
    <td><a href="<?= base_url('product/insert');?>"><button type="submit" class="btn btn-primary">Insert<i class="fa fa-plus"></i></button></a></td>
</div>

</div>
<!-- end col -->
</div>
<!-- end box -->
</div>
<!-- end table -->
