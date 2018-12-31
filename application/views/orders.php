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
        <th>OrderID</th>
        <th>Date</th>
        <th>Username</th>
        <th>Status</th>
		<th></th>
    </tr>

    <?php foreach($orders as $item):?>
        <tr>
            <td><?php echo $item['orderid'];?></td>
            <td><?php echo $item['date'];?></td>
            <td><?php echo $item['username'];?></td>
            <td><?php
                $options = array(
					'received' => 'received',
                    'cancelled' => 'cancelled',
                    'preparing' => 'preparing'
                );
                $data = ['username' => 'status', 'orderid' => 'status','options' => $options,'selected' => 'CPU'];
                echo form_dropdown($data);
                ?></td>  
			<td><a href="<?= base_url('order/submit');?>"><button type="submit" class="btn btn-primary">Submit</button></td>
        </tr>
    <?php endforeach;?>


</table>


</div>
<!-- end col -->
</div>
<!-- end box -->
</div>
<!-- end table -->
