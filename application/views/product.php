<?php   if($this->session->flashdata("error")):
    echo '<div style ="color:red;"><strong>'.$this->session->flashdata("error").'</strong></div><br>';
elseif($this->session->flashdata("msg")):
    echo '<div style ="color:green;"><strong>'.$this->session->flashdata("msg").'</strong></div><br>';
endif;?>
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>price</th>
        <th>quentity</th>
        <th>type</th>
        <th>description</th>
        <th>update</th>
        <th>delete</th>
    </tr>
    <?php foreach($product as $item):?>
        <tr>
            <td><?php echo $item['id'];?></td>
            <td><?php echo $item['name'];?></td>
            <td><?php echo $item['price'];?></td>
            <td><?php echo $item['quantity'];?></td>
            <td><?php echo $item['type'];?></td>
            <td><?php echo $item['description'];?></td>
            <td><a href="<?= base_url('product/update');?>/<?= $item['id']; ?>">update</a></td>
            <td><a href="<?= base_url('product/delete');?>/<?= $item['id']; ?>">delete</a></td>
        </tr>
    <?php endforeach;?>
</table>
<div class="text-center">
    <td><a href="<?= base_url('product/insert');?>">insert</a></td>
</div>