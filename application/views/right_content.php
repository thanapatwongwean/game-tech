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
											<th>Product</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Price</th> 
											<th>Cart</th>

                                        </tr>
										<!-- PC -->
                                        <?php
                                        foreach($datas as $data):?>
                                            <tr>
                                                <td>
													<?php $images = $data['image']; ?>
                                                    <img src="<?= base_url("public/images/uploads/$images") ?>" >
                                                </td>

                                                <td>
                                                    <?php $id = $data['id']; ?>
                                                    <a href = "<?= base_url("cart/addSpec/$param/$id");?>">
                                                        <?php echo $data['name'];?></a></td><td>
                                                        <?php echo $data['description'].'</td><td>';?>
                                                        <?php echo $data['price'].'</td><td>';?>
                                                    <div id="paypal-button-container"></div>
                                                    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
                                                    <script>
                                                        paypal.Button.render({
                                                            env: 'sandbox',
                                                            style: {
                                                                layout: 'vertical',
                                                                size:   'medium',
                                                                shape:  'rect',
                                                                color:  'gold'
                                                            },
                                                            funding: {
                                                                allowed: [
                                                                    paypal.FUNDING.CARD,
                                                                    paypal.FUNDING.CREDIT
                                                                ],
                                                                disallowed: []
                                                            },
                                                            commit: true,
                                                            client: {
                                                                sandbox: 'AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R',
                                                                production: '<insert production client id>'
                                                            },

                                                            payment: function (data, actions) {
                                                                return actions.payment.create({
                                                                    payment: {
                                                                        transactions: [
                                                                            {
                                                                                amount: {
                                                                                    total: <?php echo $data['price'];?>,
                                                                                    currency: 'USD'
                                                                                }
                                                                            }
                                                                        ]
                                                                    }
                                                                });
                                                            },

                                                            onAuthorize: function (data, actions) {
                                                                return actions.payment.execute()
                                                                    .then(function () {
                                                                        window.alert('Payment Complete!');
                                                                    });
                                                            }
                                                        }, '#paypal-button-container');
                                                    </script></td></tr>
                                        <?php endforeach;?>
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
                                            <th>Product</th> 
											<th>Name</th>
                                            <th>Description</th>
                                            <th>Price</th> 
											<th>Cart</th>
                                        </tr>
										<!-- PC -->
                                        <?php
                                        foreach($datas as $data):?>
                                            <tr>
                                                <td>
													<?php $images = $data['image']; ?>
                                                    <img src="<?= base_url("public/images/uploads/$images") ?>" >
                                                </td>

                                                <td>
                                                    <?php $id = $data['id']; ?>
                                                    <a href = "<?= base_url("cart/addSpec/$param/$id");?>">
                                                        <?php echo $data['name'];?></a></td><td>
                                                        <?php echo $data['description'].'</td><td>';?>
                                                        <?php echo $data['price'].'</td><td>';?>
                                                    <div id="paypal-button-container"></div>
                                                    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
                                                    <script>
                                                        paypal.Button.render({
                                                            env: 'sandbox',
                                                            style: {
                                                                layout: 'vertical',
                                                                size:   'medium',
                                                                shape:  'rect',
                                                                color:  'gold'
                                                            },
                                                            funding: {
                                                                allowed: [
                                                                    paypal.FUNDING.CARD,
                                                                    paypal.FUNDING.CREDIT
                                                                ],
                                                                disallowed: []
                                                            },
                                                            commit: true,
                                                            client: {
                                                                sandbox: 'AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R',
                                                                production: '<insert production client id>'
                                                            },

                                                            payment: function (data, actions) {
                                                                return actions.payment.create({
                                                                    payment: {
                                                                        transactions: [
                                                                            {
                                                                                amount: {
                                                                                    total: <?php echo $data['price'];?>,
                                                                                    currency: 'USD'
                                                                                }
                                                                            }
                                                                        ]
                                                                    }
                                                                });
                                                            },

                                                            onAuthorize: function (data, actions) {
                                                                return actions.payment.execute()
                                                                    .then(function () {
                                                                        window.alert('Payment Complete!');
                                                                    });
                                                            }
                                                        }, '#paypal-button-container');
                                                    </script></td></tr>
                                        <?php endforeach;?>

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
                                            <th>Product</th> 
											<th>Name</th>
                                            <th>Description</th>
                                            <th>Price</th> 
											<th>Cart</th>
                                        </tr>
										<!-- PC -->
                                        <?php
                                        foreach($datas as $data):?>
                                            <tr>
                                                <td>
													<?php $images = $data['image']; ?>
                                                    <img src="<?= base_url("public/images/uploads/$images") ?>" >
                                                </td>

                                                <td>
                                                    <?php $id = $data['id']; ?>
                                                    <a href = "<?= base_url("cart/addSpec/$param/$id");?>">
                                                        <?php echo $data['name'];?></a></td><td>
                                                        <?php echo $data['description'].'</td><td>';?>
                                                        <?php echo $data['price'].'</td><td>';?>
                                                    <div id="paypal-button-container"></div>
                                                    <div id="paypal-button-container"></div>
                                                    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
                                                    <script>
                                                        paypal.Button.render({
                                                            env: 'sandbox',
                                                            style: {
                                                                layout: 'vertical',
                                                                size:   'medium',
                                                                shape:  'rect',
                                                                color:  'gold'
                                                            },
                                                            funding: {
                                                                allowed: [
                                                                    paypal.FUNDING.CARD,
                                                                    paypal.FUNDING.CREDIT
                                                                ],
                                                                disallowed: []
                                                            },
                                                            commit: true,
                                                            client: {
                                                                sandbox: 'AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R',
                                                                production: '<insert production client id>'
                                                            },

                                                            payment: function (data, actions) {
                                                                return actions.payment.create({
                                                                    payment: {
                                                                        transactions: [
                                                                            {
                                                                                amount: {
                                                                                    total: <?php echo $data['price'];?>,
                                                                                    currency: 'USD'
                                                                                }
                                                                            }
                                                                        ]
                                                                    }
                                                                });
                                                            },

                                                            onAuthorize: function (data, actions) {
                                                                return actions.payment.execute()
                                                                    .then(function () {
                                                                        window.alert('Payment Complete!');
                                                                    });
                                                            }
                                                        }, '#paypal-button-container');
                                                    </script></td></tr>
                                        <?php endforeach;?>

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
                        <th>Product</th> 
						<th>Name</th>
                        <th>Description</th>
                        <th>Price</th> 
						<th>Cart</th>
                            </tr>
                            <?php
                                        foreach($datas as $data):?>
                                            <tr>
                                                <td>
													<?php $images = $data['image']; ?>
                                                    <img src="<?= base_url("public/images/uploads/$images") ?>" >
                                                </td>

                                                <td>
                                                    <?php $id = $data['id']; ?>
                                                    <a href = "<?= base_url("cart/addSpec/$param/$id");?>">
                                                        <?php echo $data['name'];?></a></td><td>
                                                        <?php echo $data['description'].'</td><td>';?>
                                                        <?php echo $data['price'].'</td><td>';?>
                                                    <div id="paypal-button-container"></div>
                                                    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
                                                    <script>
                                                        paypal.Button.render({
                                                            env: 'sandbox',
                                                            style: {
                                                                layout: 'vertical',
                                                                size:   'medium',
                                                                shape:  'rect',
                                                                color:  'gold'
                                                            },
                                                            funding: {
                                                                allowed: [
                                                                    paypal.FUNDING.CARD,
                                                                    paypal.FUNDING.CREDIT
                                                                ],
                                                                disallowed: []
                                                            },
                                                            commit: true,
                                                            client: {
                                                                sandbox: 'AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R',
                                                                production: '<insert production client id>'
                                                            },

                                                            payment: function (data, actions) {
                                                                return actions.payment.create({
                                                                    payment: {
                                                                        transactions: [
                                                                            {
                                                                                amount: {
                                                                                    total: '0.01',
                                                                                    currency: 'USD'
                                                                                }
                                                                            }
                                                                        ]
                                                                    }
                                                                });
                                                            },

                                                            onAuthorize: function (data, actions) {
                                                                return actions.payment.execute()
                                                                    .then(function () {
                                                                        window.alert('Payment Complete!');
                                                                    });
                                                            }
                                                        }, '#paypal-button-container');
                                                    </script></td></tr>
                                        <?php endforeach;?>

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
                        <th>Product</th> 
						<th>Name</th>
                        <th>Description</th>
                        <th>Price</th> 
						<th>Cart</th>
                            </tr>
                            <?php
                                        foreach($datas as $data):?>
                                            <tr>
                                                <td>
													<?php $images = $data['image']; ?>
                                                    <img src="<?= base_url("public/images/uploads/$images") ?>" >
                                                </td>

                                                <td>
                                                    <?php $id = $data['id']; ?>
                                                    <a href = "<?= base_url("cart/addSpec/$param/$id");?>">
                                                        <?php echo $data['name'];?></a></td><td>
                                                        <?php echo $data['description'].'</td><td>';?>
                                                        <?php echo $data['price'].'</td><td>';?>
                                                    <div id="paypal-button-container"></div>
                                                    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
                                                    <script>
                                                        paypal.Button.render({
                                                            env: 'sandbox',
                                                            style: {
                                                                layout: 'vertical',
                                                                size:   'medium',
                                                                shape:  'rect',
                                                                color:  'gold'
                                                            },
                                                            funding: {
                                                                allowed: [
                                                                    paypal.FUNDING.CARD,
                                                                    paypal.FUNDING.CREDIT
                                                                ],
                                                                disallowed: []
                                                            },
                                                            commit: true,
                                                            client: {
                                                                sandbox: 'AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R',
                                                                production: '<insert production client id>'
                                                            },

                                                            payment: function (data, actions) {
                                                                return actions.payment.create({
                                                                    payment: {
                                                                        transactions: [
                                                                            {
                                                                                amount: {
                                                                                    total: <?php echo $data['price'];?>,
                                                                                    currency: 'USD'
                                                                                }
                                                                            }
                                                                        ]
                                                                    }
                                                                });
                                                            },

                                                            onAuthorize: function (data, actions) {
                                                                return actions.payment.execute()
                                                                    .then(function () {
                                                                        window.alert('Payment Complete!');
                                                                    });
                                                            }
                                                        }, '#paypal-button-container');
                                                    </script></td></tr>
                                        <?php endforeach;?>

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
                        <th>Product</th> 
						<th>Name</th>
                        <th>Description</th>
                        <th>Price</th> 
						<th>Cart</th>
                            </tr>
                            <?php
                                        foreach($datas as $data):?>
                                            <tr>
                                                <td>
													<?php $images = $data['image']; ?>
                                                    <img src="<?= base_url("public/images/uploads/$images") ?>" >
                                                </td>

                                                <td>
                                                    <?php $id = $data['id']; ?>
                                                    <a href = "<?= base_url("cart/addSpec/$param/$id");?>">
                                                        <?php echo $data['name'];?></a></td><td>
                                                        <?php echo $data['description'].'</td><td>';?>
                                                        <?php echo $data['price'].'</td><td>';?>
                                                    <div id="paypal-button-container"></div>
                                                    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
                                                    <script>
                                                        paypal.Button.render({
                                                            env: 'sandbox',
                                                            style: {
                                                                layout: 'vertical',
                                                                size:   'medium',
                                                                shape:  'rect',
                                                                color:  'gold'
                                                            },
                                                            funding: {
                                                                allowed: [
                                                                    paypal.FUNDING.CARD,
                                                                    paypal.FUNDING.CREDIT
                                                                ],
                                                                disallowed: []
                                                            },
                                                            commit: true,
                                                            client: {
                                                                sandbox: 'AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R',
                                                                production: '<insert production client id>'
                                                            },

                                                            payment: function (data, actions) {
                                                                return actions.payment.create({
                                                                    payment: {
                                                                        transactions: [
                                                                            {
                                                                                amount: {
                                                                                    total: <?php echo $data['price'];?>,
                                                                                    currency: 'USD'
                                                                                }
                                                                            }
                                                                        ]
                                                                    }
                                                                });
                                                            },

                                                            onAuthorize: function (data, actions) {
                                                                return actions.payment.execute()
                                                                    .then(function () {
                                                                        window.alert('Payment Complete!');
                                                                    });
                                                            }
                                                        }, '#paypal-button-container');
                                                    </script></td></tr>
                                        <?php endforeach;?>

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
                        <th>Product</th> 
						<th>Name</th>
                        <th>Description</th>
                        <th>Price</th> 
						<th>Cart</th>
                            </tr>
                            <?php
                                        foreach($datas as $data):?>
                                            <tr>
                                                <td>
													<?php $images = $data['image']; ?>
                                                    <img src="<?= base_url("public/images/uploads/$images") ?>" >
                                                </td>

                                                <td>
                                                    <?php $id = $data['id']; ?>
                                                    <a href = "<?= base_url("cart/addSpec/$param/$id");?>">
                                                        <?php echo $data['name'].'</a></td><td>';?>
                                                        <?php echo $data['description'].'</td><td>';?>
                                                        <?php echo $data['price'].'</td><td>';?>
                                                        <<div id="paypal-button-container"></div>
                                                        <script src="https://www.paypalobjects.com/api/checkout.js"></script>
                                                        <script>
                                                            paypal.Button.render({
                                                                env: 'sandbox',
                                                                style: {
                                                                    layout: 'vertical',
                                                                    size:   'medium',
                                                                    shape:  'rect',
                                                                    color:  'gold'
                                                                },
                                                                funding: {
                                                                    allowed: [
                                                                        paypal.FUNDING.CARD,
                                                                        paypal.FUNDING.CREDIT
                                                                    ],
                                                                    disallowed: []
                                                                },
                                                                commit: true,
                                                                client: {
                                                                    sandbox: 'AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R',
                                                                    production: '<insert production client id>'
                                                                },

                                                                payment: function (data, actions) {
                                                                    return actions.payment.create({
                                                                        payment: {
                                                                            transactions: [
                                                                                {
                                                                                    amount: {
                                                                                        total: <?php echo $data['price'];?>,
                                                                                        currency: 'USD'
                                                                                    }
                                                                                }
                                                                            ]
                                                                        }
                                                                    });
                                                                },

                                                                onAuthorize: function (data, actions) {
                                                                    return actions.payment.execute()
                                                                        .then(function () {
                                                                            window.alert('Payment Complete!');
                                                                        });
                                                                }
                                                            }, '#paypal-button-container');
                                                        </script></td></tr>
                                        <?php endforeach;?>

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
                        <div class="front"><a href="#"><img src="public/images/uploads/<?php echo $this->session->userdata('CPUIMG')?>" alt="" class="img-fluid"></a></div>
                        <div class="back"><a href="#"><img src="public/images/uploads/<?php echo $this->session->userdata('CPUIMG')?>" alt="" class="img-fluid"></a></div>
                      </div>
                    </div><a href="#" ><img src="public/images/cpu.jpg" alt="" class="img-fluid"></a>
                    <div class="text">
                      
                      <p class="price"> 
                        <del></del><?php echo $this->session->CPU;?>
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
                          <div class="front"><a href="#"><img src="public/images/uploads/<?php echo $this->session->userdata('MBIMG')?>" alt="" class="img-fluid"></a></div>
                          <div class="back"><a href="#"><img src="public/images/uploads/<?php echo $this->session->userdata('MBIMG')?>" alt="" class="img-fluid"></a></div>
                      </div>
                    </div><a href="#" ><img src="public/images/mainboard.jpg" alt="" class="img-fluid"></a>
                    <div class="text">
                      
                      <p class="price"> 
                        <del></del><?php echo $this->session->MB;?>
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
                          <div class="front"><a href="#"><img src="public/images/uploads/<?php echo $this->session->userdata('RAMIMG')?>" alt="" class="img-fluid"></a></div>
                          <div class="back"><a href="#"><img src="public/images/uploads/<?php echo $this->session->userdata('RAMIMG')?>"alt="" class="img-fluid"></a></div>
                      </div>
                    </div><a href="#" ><img src="public/images/ram.jpg" alt="" class="img-fluid"></a>
                    <div class="text">
                      
                      <p class="price"> 
                        <del></del><?php echo $this->session->RAM;?>
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
                          <div class="front"><a href="#"><img src="public/images/uploads/<?php echo $this->session->userdata('VGAIMG')?>" alt="" class="img-fluid"></a></div>
                          <div class="back"><a href="#"><img src="public/images/uploads/<?php echo $this->session->userdata('VGAIMG')?>" alt="" class="img-fluid"></a></div>
                  </div>
                    </div><a href="#" ><img src="public/images/vga.jpg" alt="" class="img-fluid"></a>
                    <div class="text">
                      
                      <p class="price"> 
                        <del></del><?php echo $this->session->VGA;?>
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
                          <div class="front"><a href="#"><img src="public/images/uploads/<?php echo $this->session->userdata('HDDIMG')?>" alt="" class="img-fluid"></a></div>
                          <div class="back"><a href="#"><img src="public/images/uploads/<?php echo $this->session->userdata('HDDIMG')?>" alt="" class="img-fluid"></a></div>
                      </div>
                    </div><a href="#" ><img src="public/images/hdd.jpg" alt="" class="img-fluid"></a>
                    <div class="text">
                      
                      <p class="price"> 
                        <del></del><?php echo $this->session->HDD;?>
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
                          <div class="front"><a href="#"><img src="public/images/uploads/<?php echo $this->session->userdata('SSDIMG')?>" alt="" class="img-fluid"></a></div>
                          <div class="back"><a href="#"><img src="public/images/uploads/<?php echo $this->session->userdata('SSDIMG')?>" alt="" class="img-fluid"></a></div>
                      </div>
                    </div><a href="#" ><img src="public/images/ssd.jpg" alt="" class="img-fluid"></a>
                    <div class="text">
                      
                      <p class="price"> 
                        <del></del><?php echo $this->session->SSD;?>
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
                          <div class="front"><a href="#"><img src="public/images/uploads/<?php echo $this->session->userdata('PSUIMG')?>"alt="" class="img-fluid"></a></div>
                          <div class="back"><a href="#"><img src="public/images/uploads/<?php echo $this->session->userdata('PSUIMG')?>" alt="" class="img-fluid"></a></div>
                      </div>
                    </div><a href="#" ><img src="public/images/cooling.jpg" alt="" class="img-fluid"></a>
                    <div class="text">

                      <p class="price"> 
                        <del></del><?php echo $this->session->PSU;?>
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
                          <div class="front"><a href="#"><img src="public/images/uploads/<?php echo $this->session->userdata('COOLIMG')?>" alt="" class="img-fluid"></a></div>
                          <div class="back"><a href="#"><img src="public/images/uploads/<?php echo $this->session->userdata('COOLIMG')?>" alt="" class="img-fluid"></a></div>
                      </div>
                    </div><a href="#" ><img src="public/images/psu.jpg" alt="" class="img-fluid"></a>
                    <div class="text">
                      
                      <p class="price"> 
                        <del></del><?php echo $this->session->COOL;?>
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
                          <div class="front"><a href="#"><img src="public/images/uploads/<?php echo $this->session->userdata('CASEIMG')?>"alt="" class="img-fluid"></a></div>
                          <div class="back"><a href="#"><img src="public/images/uploads/<?php echo $this->session->userdata('CASEIMG')?>" alt="" class="img-fluid"></a></div>
                      </div>
                    </div><a href="#" ><img src="public/images/case.jpg" alt="" class="img-fluid"></a>
                    <div class="text">
                      
                      <p class="price"> 
                        <del></del><?php echo $this->session->CASE?>
                      </p>
                      
                    </div>
                    <!-- /.text-->
                  </div>
                  <!-- /.product            -->
                </div>
                <!-- /.products-->
              </div>
                  <div id="paypal-button-container"></div>
                  <div id="paypal-button-container"></div>
                  <script src="https://www.paypalobjects.com/api/checkout.js"></script>
                  <script>
                      paypal.Button.render({
                          env: 'sandbox',
                          style: {
                              layout: 'vertical',
                              size:   'medium',
                              shape:  'rect',
                              color:  'gold'
                          },
                          funding: {
                              allowed: [
                                  paypal.FUNDING.CARD,
                                  paypal.FUNDING.CREDIT
                              ],
                              disallowed: []
                          },
                          commit: true,
                          client: {
                              sandbox: 'AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R',
                              production: '<insert production client id>'
                          },

                          payment: function (data, actions) {
                              return actions.payment.create({
                                  payment: {
                                      transactions: [
                                          {
                                              amount: {
                                                  total: '0.01',
                                                  currency: 'USD'
                                              }
                                          }
                                      ]
                                  }
                              });
                          },

                          onAuthorize: function (data, actions) {
                              return actions.payment.execute()
                                  .then(function () {
                                      window.alert('Payment Complete!');
                                  });
                          }
                      }, '#paypal-button-container');
                  </script></td></tr>
            <!-- /.col-lg-9-->
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>