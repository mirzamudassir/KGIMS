<?php 
define("PRIVATE", TRUE);
require_once 'header.php';
?>

<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard">
                    <h1> <?php echo $app_heading; ?> </h1>
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                   <?php echo $dropDownMenu; ?>
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->
            
        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="../assets/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div><h4><?php echo $arr['full_name']; ?></h4></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section-->
                    </li>
                   <?php echo $mainMenu; ?>                    
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Kitab Ghar Inventory Management System</h1>
                </div>

                <div class="col-lg-4">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body blue">
                            <i class="fa fa-bar-chart-o fa-3x"></i>
                            <?php getTotalItems(); ?>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Total Items
                            </span>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-4">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body green">
                            <i class="fa fa-pencil-square-o fa-3x"></i>
                            <?php getStockStatus(); ?>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Pending for Stock Level
                            </span>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-4">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body blue">
                            <i class="fa fa-pencil-square-o fa-3x"></i>
                            <?php getPriceListStatus(); ?>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Pending for Price List
                            </span>
                        </div>
                    </div>
                    </div>
                    </div>

                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Low Stock Items
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTablesss-state-example">
                                    <thead>
                                        <tr>
                                            <th>Barcode</th>
                                            <th>Item Name</th>
                                            <th> Quantity </th>
                                            <th> Available </th>
                                            <th>Status</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php getStockForDashboard(); ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
               
              
                <!--End Page Header -->
            </div>
            
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <?php require_once 'footer.php' ?>

</body>

</html>