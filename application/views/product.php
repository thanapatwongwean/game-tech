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
    <?php if(!empty($data)):?>
        <tr>
            <td><?php echo $product['id'];?></td>
            <td><?php echo $product['name'];?></td>
            <td><?php echo $product['price'];?></td>
            <td><?php echo $product['quantity'];?></td>
            <td><?php echo $product['type'];?></td>
            <td><?php echo $product['decription'];?></td>
            <td><a href="#">update</a></td>
            <td><a href="#">delete</a></td>
        </tr>
    <?php endif;?>
</table>
<div class="text-center">
    insert
</div>