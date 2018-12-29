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
                  <ul class="nav nav-pills flex-column"><a href="#" class="nav-link active"><i class="fa fa-list"></i> My orders</a><a href="<?= base_url('user_acc'); ?>" class="nav-link"><i class="fa fa-user"></i> My account</a><a href="<?= base_url(); ?>" class="nav-link"><i class="fa fa-sign-out"></i> Logout</a></ul>
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
                        <th>Order</th>
                        <th>Date</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
					  <tr>
                        <th>#0002</th>
                        <td>29/12/2018</td>
                        <td>1550.00฿</td>
                        <td><span class="badge badge-success">Received</span></td>
                        <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                      </tr>
                      <tr>
                        <th>#0001</th>
                        <td>29/12/2018</td>
                        <td>1234567.00฿</td>
                        <td><span class="badge badge-info">Preparing</span></td>
                        <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                      </tr>
                      <tr>
                        <th>#0000</th>
                        <td>28/12/2018</td>
                        <td>1234567.00฿</td>
                        <td><span class="badge badge-danger">Cancelled</span></td>
                        <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



</main>
