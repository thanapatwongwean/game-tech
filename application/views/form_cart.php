<!-- CONTENT -->
<main>
      <div id="content">
        <div class="container">
          <div class="row">
     <div id="basket" class="col-lg-9">
              <div class="box">
                <form method="post" action="<?= base_url(''); ?>"> 
				<!-- process to where? -->
                  <h1>Shopping cart</h1>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th colspan="2">Product</th>
                          <th>Quantity</th>
                          <th>Unit price</th>    
                          <th colspan="2">Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href="#"><img src="public/images/AjaxLoader.gif" alt="Product image"></a></td>
                          <td><a href="#">CPU (ซีพียู) INTEL 1151 CELERON G4900 3.10 GHzi</a></td>
                          <td>
                            <input type="number" value="2" class="form-control">
                          </td>
                          <td>1550.00฿</td>
                          <td>3100.00฿</td>
                          <td><a href="#"><i class="fa fa-trash-o"></i></a></td>
                        </tr>
                        <tr>
                          <td><a href="#"><img src="public/images/AjaxLoader.gif" alt="Product image"></a></td>
                          <td><a href="#">CPU (ซีพียู) INTEL 1151 CORE I7-8086K 4.0 GHz</a></td>
                          <td>
                            <input type="number" value="1" class="form-control">
                          </td>
                          <td>1234567.00฿</td>
                          <td>1234567.00฿</td>
                          <td><a href="#"><i class="fa fa-trash-o"></i></a></td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="5">Total</th>
                          <th colspan="2">1237667.00฿</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.table-responsive-->
                  <div class="box-footer d-flex justify-content-between flex-column flex-lg-row">
                    <div class="left"><a href="javascript:history.go(-1)" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i> Continue shopping</a></div>
                    <div class="right">
                      <button class="btn btn-outline-secondary"><a href="<?= base_url('cart'); ?>"><i class="fa fa-refresh"></i>Update cart</a></button>
                      <button type="submit" class="btn btn-primary">Proceed to checkout <i class="fa fa-chevron-right"></i></button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.box-->
            </div>
            <!-- /.col-lg-9-->

        </div>
        </div>
      </div>


</main>
