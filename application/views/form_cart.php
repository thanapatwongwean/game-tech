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
                      <?php if($product=>num_rows() > 0):?>
                        <?php foreach($product as $item):?>
                        <tr>
                          <td><a href="#"><img src="public/images/AjaxLoader.gif" alt="Product image"></a></td>
                          <td><a href="#"><?= item['name'] ?></a></td>
                          <td>
                            <input type="number" value="2" class="form-control">
                          </td>
                          <td><?= item['price'] ?>฿</td>
                          <td><
                          <td><a href="#"><i class="fa fa-trash-o"></i></a></td>
                        </tr>
                        <tr>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="5">Total</th>
                          <th colspan="2"><?= $total ?>฿</td></th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.table-responsive-->
                  <div class="box-footer d-flex justify-content-between flex-column flex-lg-row">
                    <div class="left"><a href="javascript:history.go(-1)" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i> Continue shopping</a></div>
                    <div class="right">
                      <button class="btn btn-outline-secondary"><a href="<?= base_url('cart/total'); ?>"><i class="fa fa-refresh"></i>Update cart</a></button>
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
