<?php 
include "ui/header.php";

$select_lake_by_id = filter_input(INPUT_GET,"lakeID",FILTER_SANITIZE_STRING);
$get_lake_info = "SELECT * FROM `lake_main` WHERE `lake_main_id` = '$select_lake_by_id'";
$get_lake_info_result = mysqli_query($conn, $get_lake_info);

if (mysqli_num_rows($get_lake_info_result) > 0) {
    while($row = mysqli_fetch_assoc($get_lake_info_result)) {
        $lake_main_id = $row["lake_main_id"];
        $lake_type = $row["lake_type"];
        $lake_name = $row["lake_name"];
        $lake_opening_time = $row["lake_opening_time"];
        $lake_boat_option = $row["lake_boat_option"];
        $lake_boat_amouunt = $row["lake_boat_amount"];
        $lake_catch_release_price = $row["lake_catch_release_price"];
        $lake_fish_type = $row["lake_fish_type"];
        $lake_location = $row["lake_location"];
        $lake_primary_method = $row["lake_primary_method"];
        $lake_general_description = $row["lake_general_description"];
        $lake_url = $row["lake_url"];
        $lake_facebook_url = $row["lake_facebook_url"];
    }
}
?>
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
                    <?php include "ui/addFavourite.php"?>
                    <h1 class="h3 mb-2 text-gray-800"><?= $page ?></h1><br>
                    <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary"><?= $lake_name ." | ". $lake_location; ?></h6>
                            </div>
                            <div class="card-body">
                                <p class="mb-0"><?php echo $lake_general_description; ?></p><hr>
                                <a href="<?= $lake_url ?>" target="_blank" class="btn btn-info btn-block" ><i></i> View Fishery Website</a>
                                <a href="<?= $lake_facebook_url ?>" target="_blank" class="btn btn-facebook btn-block" ><i class="fab fa-facebook-f fa-fw"></i> View Facebok Page</a>
                            </div>
                    </div>  

                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-35 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Primary Fish Type</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $lake_fish_type; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-fish fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-35 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Type</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $lake_type ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-water fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-35 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Type</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $lake_primary_method ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-tree fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-35 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Starting Price (C+R)</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= "£".$lake_catch_release_price ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-pound-sign fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-dark shadow h-35 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Are Boats Avaialble? </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $lake_boat_option ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-ship fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-35 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Number of Boats </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $lake_boat_amouunt ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-anchor fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h1 class="h3 mb-2 text-gray-800"><?= "Reports | Updates" ?></h1><br>
                    <?php
                    $get_lake_reports = "SELECT * FROM `lake_reports` WHERE `lake_id` = '$lake_main_id'";
                    $get_lake_reports_result = mysqli_query($conn, $get_lake_reports);

                    ?>
                    <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Fishing Reports</h6>
                            </div>
                            <div class="card-body">
                                <p class="mb-0"><?php echo $lake_general_description; ?></p><hr>
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