<div class="mainright">
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div style="display: block;visibility: hidden; height: 0px;" class="ng-binding">

                        <!-- ngRepeat: p in [] | page_rang:pages -->
                    </div></dir-pagination-controls><!-- end ngIf: ViewMode.getViewMode() == 'grid' -->

                    <?php if($param == 'CPU' || $param == 'MB' || $param == 'VGA' || $param == 'HDD' || $param == 'SSD' || $param == 'COOL' || $param == 'PSU' || $param == 'CASE' || $param == 'RAM'):?>
                        <div class="col-lg-13">
                            <div class="box">
                                <div class="table-responsive mb-4">
                                    <table class="table">
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Price</th> 
											<th>Cart</th>

                                        </tr>
										<!-- PC -->
                                        <?php
                                        foreach($datas as $data){
                                            echo'<tr><td>';
											echo '<a href="#">'; 
                                            echo $data['name'].'</a></td><td>';
                                            echo $data['description'].'</td><td>';
                                            echo $data['price'].'</td><td>';
											echo '<a href="#"><i class="fa fa-shopping-cart"></i></a></td></tr>';
                                        }?>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end ngIf: !isLoading && ViewMode.getCurrentComp() == 'cpu' -->
                        <!-- end ngRepeat: componentType in selectableComponents --><!-- ngInclude: ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html' --><div ng-repeat="componentType in selectableComponents" ng-show="componentType == ViewMode.getCurrentComp()" ng-include="ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html'" class="ng-scope ng-hide"><div ng-controller="MBSelectorCtrl" class="ng-scope">
                                <!-- ngIf: isLoading -->

                                <!-- ngIf: !isLoading  && ViewMode.getCurrentComp() == 'mb' -->
                            </div>
                        </div><!-- end ngRepeat: componentType in selectableComponents --><!-- ngInclude: ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html' --><div ng-repeat="componentType in selectableComponents" ng-show="componentType == ViewMode.getCurrentComp()" ng-include="ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html'" class="ng-scope ng-hide"><div ng-controller="VGASelectorCtrl" class="ng-scope">
                                <!-- ngIf: isLoading -->

                                <!-- ngIf: !isLoading && ViewMode.getCurrentComp() == 'vga' -->
                            </div>
                        </div><!-- end ngRepeat: componentType in selectableComponents --><!-- ngInclude: ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html' --><div ng-repeat="componentType in selectableComponents" ng-show="componentType == ViewMode.getCurrentComp()" ng-include="ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html'" class="ng-scope ng-hide"><div ng-controller="RAMSelectorCtrl" class="ng-scope">
                                <!-- ngIf: isLoading -->

                                <!-- ngIf: !isLoading && ViewMode.getCurrentComp() == 'ram' -->
                            </div>
                        </div><!-- end ngRepeat: componentType in selectableComponents --><!-- ngInclude: ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html' --><div ng-repeat="componentType in selectableComponents" ng-show="componentType == ViewMode.getCurrentComp()" ng-include="ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html'" class="ng-scope ng-hide"><div ng-controller="HDDSelectorCtrl" class="ng-scope">
                                <!-- ngIf: isLoading -->

                                <!-- ngIf: !isLoading  && ViewMode.getCurrentComp() == 'hdd' -->
                            </div>
                        </div><!-- end ngRepeat: componentType in selectableComponents --><!-- ngInclude: ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html' --><div ng-repeat="componentType in selectableComponents" ng-show="componentType == ViewMode.getCurrentComp()" ng-include="ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html'" class="ng-scope ng-hide"><div ng-controller="SSDSelectorCtrl" class="ng-scope">
                                <!-- ngIf: isLoading -->

                                <!-- ngIf: !isLoading && ViewMode.getCurrentComp() == 'ssd' -->
                            </div>
                        </div><!-- end ngRepeat: componentType in selectableComponents --><!-- ngInclude: ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html' --><div ng-repeat="componentType in selectableComponents" ng-show="componentType == ViewMode.getCurrentComp()" ng-include="ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html'" class="ng-scope ng-hide"><div ng-controller="SSD2SelectorCtrl" class="ng-scope">
                                <!-- ngIf: isLoading -->

                                <!-- ngIf: !isLoading && ViewMode.getCurrentComp() == 'ssd2' -->
                            </div>
                        </div><!-- end ngRepeat: componentType in selectableComponents --><!-- ngInclude: ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html' --><div ng-repeat="componentType in selectableComponents" ng-show="componentType == ViewMode.getCurrentComp()" ng-include="ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html'" class="ng-scope ng-hide"><div ng-controller="PSUSelectorCtrl" class="ng-scope">
                                <!-- ngIf: isLoading -->

                                <!-- ngIf: !isLoading && ViewMode.getCurrentComp() == 'psu' -->
                            </div>
                        </div><!-- end ngRepeat: componentType in selectableComponents --><!-- ngInclude: ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html' --><div ng-repeat="componentType in selectableComponents" ng-show="componentType == ViewMode.getCurrentComp()" ng-include="ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html'" class="ng-scope ng-hide"><div ng-controller="CaseSelectorCtrl" class="ng-scope">
                                <!-- ngIf: isLoading -->

                                <!-- ngIf: !isLoading && ViewMode.getCurrentComp() == 'case' -->
                            </div>
                        </div><!-- end ngRepeat: componentType in selectableComponents --><!-- ngInclude: ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html' --><div ng-repeat="componentType in selectableComponents" ng-show="componentType == ViewMode.getCurrentComp()" ng-include="ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html'" class="ng-scope ng-hide"><div ng-controller="CoolingSelectorCtrl" class="ng-scope">
                                <!-- ngIf: isLoading -->

                                <!-- ngIf: !isLoading && ViewMode.getCurrentComp() == 'cooling' -->
                            </div>
                        </div><!-- end ngRepeat: componentType in selectableComponents --><!-- ngInclude: ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html' --><div ng-repeat="componentType in selectableComponents" ng-show="componentType == ViewMode.getCurrentComp()" ng-include="ViewMode.getBasePath() + 'component/pc-custom-spec/view/'+componentType+'_view.html'" class="ng-scope ng-hide"><div ng-controller="MonitorSelectorCtrl" class="ng-scope">
                                <!-- ngIf: isLoading -->

                                <!-- ngIf: !isLoading && ViewMode.getCurrentComp() == 'monitor' -->
                            </div>
                        </div><!-- end ngRepeat: componentType in selectableComponents -->

                        <!-- ngInclude: ViewMode.getBasePath() + 'component/pc-custom-spec/view/mode_build.html' -->
                    <?php elseif($param == 'INTEL' || $param == 'AMD' ):?>
                        <div class="col-lg-13">
                            <div class="box">
                                <div class="table-responsive mb-4">
                                    <table class="table">
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Price</th> 
											<th>Cart</th>
                                        </tr>
										<!-- PC -->
                                        <?php
                                        foreach($datas as $data){
                                            echo'<tr><td>';
                                            echo '<a href="#">';
                                            echo $data['name'].'</a></td><td>';
                                            echo $data['description'].'</td><td>';
                                            echo $data['price'].'</td><td>'; 
											echo '<a href="#"><i class="fa fa-shopping-cart"></i></a></td></tr>';
                                        }?>

                                    </table>
                                </div>
                            </div>
                        </div>

                    <?php elseif($param == 'AMD_V' || $param == 'NVIDIA' ):?>
                        <div class="col-lg-13">
                            <div class="box">
                                <div class="table-responsive mb-4">
                                    <table class="table">
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Price</th> 
											<th>Cart</th>
                                        </tr>
										<!-- PC -->
                                        <?php
                                        foreach($datas as $data){
                                            echo'<tr><td>';
                                            echo '<a href="#">';
                                            echo $data['name'].'</a></td><td>';
                                            echo $data['description'].'</td><td>';
                                            echo $data['price'].'</td><td>'; 
											echo '<a href="#"><i class="fa fa-shopping-cart"></i></a></td></tr>';
                                        }?>

                                    </table>
                                </div>
                            </div>
                        </div>

                    </div><!-- end ngRepeat: componentType in selectableComponents -->

                    <!-- ngInclude: ViewMode.getBasePath() + 'component/pc-custom-spec/view/mode_build.html' -->

					
					<?php elseif($param == 'ASUS' || $param == 'ACER'  || $param == 'DELL' || $param == 'HP'|| $param == 'NOTEBOOK' ):?>
					<div class="col-lg-13">
					<div class="box">
						<div class="table-responsive mb-4">
                        <table class="table">
                            <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th> 
						<th>Cart</th>
                            </tr>
                            <?php
                            foreach($datas as $data){
                                echo'<tr><td>';
                                echo $data['name'].'</td><td>';
                                echo $data['description'].'</td><td>';
                                echo $data['price'].'</td><td>'; 
								echo '<a href="#"><i class="fa fa-shopping-cart"></i></a></td></tr>';
                            }?>

                        </table>
						</div>
					</div>
					</div>
					
					<?php elseif($param == '15000' || $param == '20000'  || $param == '25000' || $param == '1000000'):?>
					<div class="col-lg-13">
					<div class="box">
						<div class="table-responsive mb-4">
                        <table class="table">
                            <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th> 
						<th>Cart</th>
                            </tr>
                            <?php
                            foreach($datas as $data){
                                echo'<tr><td>';
                                echo $data['name'].'</td><td>';
                                echo $data['description'].'</td><td>';
                                echo $data['price'].'</td><td>'; 
								echo '<a href="#"><i class="fa fa-shopping-cart"></i></a></td></tr>';
                            }?>

                        </table>
						</div>
					</div>
					</div>
					
					<?php elseif($param == 'CORSAIR_M' || $param == 'SIGNO_M' || $param == 'STEELSERIES_M' || $param == 'CORSAIR_K' || $param == 'SIGNO_K' || $param == 'STEELSERIES_K'):?>
					<div class="col-lg-13">
					<div class="box">
						<div class="table-responsive mb-4">
                        <table class="table">
                            <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th> 
						<th>Cart</th>
                            </tr>
                            <?php
                            foreach($datas as $data){
                                echo'<tr><td>';
                                echo $data['name'].'</td><td>';
                                echo $data['description'].'</td><td>';
                                echo $data['price'].'</td><td>'; 
								echo '<a href="#"><i class="fa fa-shopping-cart"></i></a></td></tr>';
                            }?>

                        </table>
						</div>
					</div>
					</div>
					
					<?php elseif($param == 'STEELSERIES' || $param == 'SENNHEISER' || $param == 'HYPERX' || $param == 'MOUSE' || $param == 'KEYBOARD' || $param == 'HEADSET' ):?>
					<div class="col-lg-13">
					<div class="box">
						<div class="table-responsive mb-4">
                        <table class="table">
                            <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th> 
						<th>Cart</th>
                            </tr>
                            <?php
                            foreach($datas as $data){
                                echo'<tr><td>';
                                echo $data['name'].'</td><td>';
                                echo $data['description'].'</td><td>';
                                echo $data['price'].'</td><td>'; 
								echo '<a href="#"><i class="fa fa-shopping-cart"></i></a></td></tr>';
                            }?>

                        </table>
						</div>
					</div>
					</div>
					
                    <?php else: ?>
              <div class="col-lg-12">
              <div class="box">
                <h1>Spec Building</h1>   
              </div>
              <div class="row products">
				<div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="flip-container">
                      <div class="flipper">
                        <div class="front"><a href="#"><img src="public/images/product.jpg" alt="" class="img-fluid"></a></div>
                        <div class="back"><a href="#"><img src="ipublic/images/product.jpg" alt="" class="img-fluid"></a></div>
                      </div>
                    </div><a href="#" class="invisible"><img src="public/images/product.jpg" alt="" class="img-fluid"></a>
                    <div class="text">
                      <h3><a href="#">CPU (ซีพียู) AMD AM4 RYZEN7 2700 3.2 GHz</a></h3>
                      <p class="price"> 
                        <del></del>10500฿
                      </p>
                      
                    </div>
                    <!-- /.text-->
                  </div>
                  <!-- /.product            -->
                </div>
                <!-- /.products-->
				<div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="flip-container">
                      <div class="flipper">
                        <div class="front"><a href="#"><img src="public/images/product.jpg" alt="" class="img-fluid"></a></div>
                        <div class="back"><a href="#"><img src="ipublic/images/product.jpg" alt="" class="img-fluid"></a></div>
                      </div>
                    </div><a href="#" class="invisible"><img src="public/images/product.jpg" alt="" class="img-fluid"></a>
                    <div class="text">
                      <h3><a href="#">CPU (ซีพียู) AMD AM4 RYZEN7 2700 3.2 GHz</a></h3>
                      <p class="price"> 
                        <del></del>10500฿
                      </p>
                      
                    </div>
                    <!-- /.text-->
                  </div>
                  <!-- /.product            -->
                </div>
                <!-- /.products-->
				<div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="flip-container">
                      <div class="flipper">
                        <div class="front"><a href="#"><img src="public/images/product.jpg" alt="" class="img-fluid"></a></div>
                        <div class="back"><a href="#"><img src="ipublic/images/product.jpg" alt="" class="img-fluid"></a></div>
                      </div>
                    </div><a href="#" class="invisible"><img src="public/images/product.jpg" alt="" class="img-fluid"></a>
                    <div class="text">
                      <h3><a href="#">CPU (ซีพียู) AMD AM4 RYZEN7 2700 3.2 GHz</a></h3>
                      <p class="price"> 
                        <del></del>10500฿
                      </p>
                      
                    </div>
                    <!-- /.text-->
                  </div>
                  <!-- /.product            -->
                </div>
                <!-- /.products-->
				<div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="flip-container">
                      <div class="flipper">
                        <div class="front"><a href="#"><img src="public/images/product.jpg" alt="" class="img-fluid"></a></div>
                        <div class="back"><a href="#"><img src="ipublic/images/product.jpg" alt="" class="img-fluid"></a></div>
                      </div>
                    </div><a href="#" class="invisible"><img src="public/images/product.jpg" alt="" class="img-fluid"></a>
                    <div class="text">
                      <h3><a href="#">CPU (ซีพียู) AMD AM4 RYZEN7 2700 3.2 GHz</a></h3>
                      <p class="price"> 
                        <del></del>10500฿
                      </p>
                      
                    </div>
                    <!-- /.text-->
                  </div>
                  <!-- /.product            -->
                </div>
                <!-- /.products-->
				<div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="flip-container">
                      <div class="flipper">
                        <div class="front"><a href="#"><img src="public/images/product.jpg" alt="" class="img-fluid"></a></div>
                        <div class="back"><a href="#"><img src="ipublic/images/product.jpg" alt="" class="img-fluid"></a></div>
                      </div>
                    </div><a href="#" class="invisible"><img src="public/images/product.jpg" alt="" class="img-fluid"></a>
                    <div class="text">
                      <h3><a href="#">CPU (ซีพียู) AMD AM4 RYZEN7 2700 3.2 GHz</a></h3>
                      <p class="price"> 
                        <del></del>10500฿
                      </p>
                      
                    </div>
                    <!-- /.text-->
                  </div>
                  <!-- /.product            -->
                </div>
                <!-- /.products-->
				<div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="flip-container">
                      <div class="flipper">
                        <div class="front"><a href="#"><img src="public/images/product.jpg" alt="" class="img-fluid"></a></div>
                        <div class="back"><a href="#"><img src="ipublic/images/product.jpg" alt="" class="img-fluid"></a></div>
                      </div>
                    </div><a href="#" class="invisible"><img src="public/images/product.jpg" alt="" class="img-fluid"></a>
                    <div class="text">
                      <h3><a href="#">CPU (ซีพียู) AMD AM4 RYZEN7 2700 3.2 GHz</a></h3>
                      <p class="price"> 
                        <del></del>10500฿
                      </p>
                      
                    </div>
                    <!-- /.text-->
                  </div>
                  <!-- /.product            -->
                </div>
                <!-- /.products-->
				<div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="flip-container">
                      <div class="flipper">
                        <div class="front"><a href="#"><img src="public/images/product.jpg" alt="" class="img-fluid"></a></div>
                        <div class="back"><a href="#"><img src="ipublic/images/product.jpg" alt="" class="img-fluid"></a></div>
                      </div>
                    </div><a href="#" class="invisible"><img src="public/images/product.jpg" alt="" class="img-fluid"></a>
                    <div class="text">
                      <h3><a href="#">CPU (ซีพียู) AMD AM4 RYZEN7 2700 3.2 GHz</a></h3>
                      <p class="price"> 
                        <del></del>10500฿
                      </p>
                      
                    </div>
                    <!-- /.text-->
                  </div>
                  <!-- /.product            -->
                </div>
                <!-- /.products-->
				<div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="flip-container">
                      <div class="flipper">
                        <div class="front"><a href="#"><img src="public/images/product.jpg" alt="" class="img-fluid"></a></div>
                        <div class="back"><a href="#"><img src="ipublic/images/product.jpg" alt="" class="img-fluid"></a></div>
                      </div>
                    </div><a href="#" class="invisible"><img src="public/images/product.jpg" alt="" class="img-fluid"></a>
                    <div class="text">
                      <h3><a href="#">CPU (ซีพียู) AMD AM4 RYZEN7 2700 3.2 GHz</a></h3>
                      <p class="price"> 
                        <del></del>10500฿
                      </p>
                      
                    </div>
                    <!-- /.text-->
                  </div>
                  <!-- /.product            -->
                </div>
                <!-- /.products-->
				<div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="flip-container">
                      <div class="flipper">
                        <div class="front"><a href="#"><img src="public/images/product.jpg" width="450" height="600" alt="" class="img-fluid"></a></div>
                        <div class="back"><a href="#"><img src="ipublic/images/product.jpg" alt="" class="img-fluid"></a></div>
                      </div>
                    </div><a href="#" class="invisible"><img src="public/images/product.jpg" alt="" class="img-fluid"></a>
                    <div class="text">
                      <h3><a href="#">CPU (ซีพียู) AMD AM4 RYZEN7 2700 3.2 GHz</a></h3>
                      <p class="price"> 
                        <del></del>10500฿
                      </p>
                      
                    </div>
                    <!-- /.text-->
                  </div>
                  <!-- /.product            -->
                </div>
                <!-- /.products-->
              </div>
			  <div class="col-md-12 text-center">
                      <button type="submit" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add all to Cart</button>
               </div>
			   <br>
            </div>
            <!-- /.col-lg-9-->
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>