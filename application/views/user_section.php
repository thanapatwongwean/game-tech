<!-- CONTENT -->
<main>

      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <!--
              *** CUSTOMER MENU ***
              _________________________________________________________
              -->
              <div class="card sidebar-menu">
                <div class="card-header">
                  <h3 class="h4 card-title">User section</h3>
                </div>
                <div class="card-body">
                  <ul class="nav nav-pills flex-column"><a href="<?= base_url('user'); ?>" class="nav-link active"><i class="fa fa-list"></i> My orders</a><a href="<?= base_url('user_acc'); ?>" class="nav-link"><i class="fa fa-user"></i> My account</a><a href="<?= base_url('logout');?>" class="nav-link"><i class="fa fa-sign-out"></i> Logout</a></ul>
                </div>
              </div>
              <!-- /.col-lg-3-->
              <!-- *** CUSTOMER MENU END ***-->
            </div>
            <div id="customer-orders" class="col-lg-9">
              <div class="box">
                <h1>My orders</h1>
                <hr>
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>OrderID</th>
                        <th>Date</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                      <?php if(!empty($orders)):?>
                      <?php foreach($orders as $item):?>
                    <tbody>
					  <tr>
                        <th><?php echo $item['orderid'];?></th>
                        <td><?php echo $item['date'];?></td>
                        <td>1550.00฿</td>
                        <td>
                            <?php if($item['status'] == 'received'):?>
                                <span class="badge badge-success"><?php echo $item['status'];?></span>
                            <?php elseif($item['status'] == 'preparing'):?>
                                <span class="badge badge-info"><?php echo $item['status'];?></span>
                            <?php else:?>
                                <span class="badge badge-danger"><?php echo $item['status'];?></span>
                        </td>
                            <?php endif;?>
                        <td>
                              <a href="#" class="btn btn-primary btn-sm">View</a>
                        </td>
                      </tr>
                      <?php endforeach;?>
                      <?php endif;?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



</main>
