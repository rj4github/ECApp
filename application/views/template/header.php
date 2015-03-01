<!DOCTYPE html>
<html ng-app="myapp">
    <head>
        <meta charset="UTF-8">
        <title><?php echo MegaTitle; ?></title>
        <script src="<?php echo URL; ?>assets/angularjs/angular.min.js"></script>
        <link rel="stylesheet" href="<?php echo URL; ?>assets/bootstrap3/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>assets/bootstrap3/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>assets/mystyles/style.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>assets/bootstrap3/css/bootstrap-datetimepicker.min.css" />
        <link rel="stylesheet" href="<?php echo URL; ?>assets/mystyles/print.css" media="print"/>
        <!-- DataTables CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>assets/DataTables-1.10.5/media/css/jquery.dataTables.css">
    <body>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><?php echo MegaTitle; ?></a>
                </div>
                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Products 
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo URL_X . 'Product/'; ?>">List all products</a></li>
                                <li><a href="<?php echo URL_X . 'Product/add_new'; ?>">Add new product</a></li>  
                                <li class="divider"></li>
                                <li><a href="<?php echo URL_X . 'Product_category/'; ?>">Categories</a></li>
                                <li><a href="<?php echo URL_X . 'Product_category/add_new'; ?>">Add new category</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Inventory
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo URL_X . 'Inventory/'; ?>">Inventory List</a></li>
                                <li><a href="<?php echo URL_X . 'Inventory/add_new'; ?>">Add new purchase</a></li>  

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Seller 
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo URL_X . 'Seller/'; ?>">List all sellers</a></li>
                                <li><a href="<?php echo URL_X . 'Seller/add_new'; ?>">Add new</a></li>


                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Shopping Lists 
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo URL_X . 'ShoppingList/'; ?>">All shopping lists</a></li>
                                <li><a href="<?php echo URL_X . 'ShoppingList/add_new_shopping_list'; ?>">Add new</a></li>


                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                StockZero
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo URL_X . 'StockWarning/'; ?>">Dashboard</a></li>



                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Form 49
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo URL_X . 'Form49/'; ?>">Dashboard</a></li>

                                <li><a href="<?php echo URL_X . 'Form49/add_new'; ?>">Add new</a></li>

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Settings
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo URL_X . 'Date/'; ?>">Set date</a></li>
                                <li><a href="<?php echo URL_X . 'Front/password'; ?>">Change password</a></li>
                                <li><a href="<?php echo URL_X . 'Front/logout'; ?>">Logout</a></li>


                            </ul>
                        </li>
                    </ul>
                    <?php if (isset($activation_status)) { ?>
                        <ul class="nav navbar-nav navbar-right">
                            <?php
                            if ($counter < 50) {
                                $counter_class = 'btn-danger';
                            } else {
                                $counter_class = 'btn-success';
                            }

                            if ($activation_status == true) {
                                $activation_class = "btn-success";
                                $activation_label = "Activated";
                            } else {
                                $activation_class = "btn-danger";
                                $activation_label = "Not activated";
                            }

                            $counter_percentage = round((100 * $counter / 3000), 2);
                            ?>
                            <li>
                                <a href="<?php echo site_url('Activation'); ?>" >
                                    <span class="badge <?php echo $activation_class; ?>">
                                        <?php echo $activation_label; ?>
                                    </span>

                                    <span class="badge <?php echo $counter_class; ?>">
                                        Usage battery: <?php echo $counter_percentage; ?>%
                                    </span>

                                </a>
                            </li>

                        </ul>
                    <?php } ?>


                </div>
            </div><!-- End of its container-fluid-->
        </nav>

        <div class="container">