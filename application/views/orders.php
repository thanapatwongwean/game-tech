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
    <?php if(!empty($orders)):?>
	<h2 class="h2 card-title">Customer section</h2>
        <?php foreach($orders as $item):?>
            <tr>
                <td><?php echo $item['orderid'];?></td>
                <td><?php echo $item['date'];?></td>
                <td><?php echo $item['username'];?></td>
                <?php $this->session->set_userdata('date',$item['date']); ?>
                <?php $this->session->set_userdata('otheruser',$item['username']); ?>
                <?php
                $id =  $item['orderid'];?>
                <?= form_open(base_url("order/submit/$id"),'class = ""');?>
                <td><?php
                    $options = array(
                        'received' => 'received',
                        'cancelled' => 'cancelled',
                        'preparing' => 'preparing'
                    );
                    $data = ['name' => 'status', 'id' => 'status','options' => $options,'selected' => $item['status']];
                    echo form_dropdown($data);
                    ?></td>
                <td>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </td>
                <?= form_close(); ?>
            </tr>
        <?php endforeach;?>
    <?php endif;?>

</table>


</div>
<!-- end col -->
</div>
<!-- end box -->
</div>
<!-- end table -->
