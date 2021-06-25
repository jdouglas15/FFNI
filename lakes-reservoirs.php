<?php include "ui/header.php" ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "ui/sideNavBar.php" ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include "ui/topNavBar.php" ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><?php echo $page ?></h1>
                    <div class="row">            
                    <div class="col">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            View All Lakes | Reservoirs</div><hr>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <a href="lakes-reservoirs-all.php" class="btn btn-primary btn-lg btn-block">
                                                <span class="icon text-white-50">
                                                </span>
                                                <span class="text">Press here to view all lakes | reservoirs</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-fish fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Search by River Name</div><hr>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <form action="rivers-search.php" method="POST">
                                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search a river name..." aria-label="Search" aria-describedby="basic-addon2" name="search_by_river_name"><hr>
                                                <button type="submit" class="btn btn-danger btn-circle btn-sm">
                                                <i class="fas fa-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-fish fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-100"></div>
                        <div class="col">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                View All Lakes | Loughs</div><hr>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <a href="rivers-all.php" class="btn btn-info btn-lg btn-block">
                                                    <span class="icon text-white-50">
                                                    </span>
                                                    <span class="text">Press here to view all lakes | loughs</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-fish fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="col">
                        <div class="card border-left-warning shadow h-100 py-2">
                              <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                View all Reservoirs | Damns</div><hr>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <a href="rivers-all.php" class="btn btn-warning btn-lg btn-block">
                                                    <span class="icon text-white-50">
                                                    </span>
                                                    <span class="text">Press here to view all reservoirs</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-fish fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

                    

                </div>

            <!-- End of Main Content -->

        <?php include "ui/footer.php" ?>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    <?php include "ui/logOutModal.php" ?>
    <?php include "ui/js.php" ?>
</body>

</html>