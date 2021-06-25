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
                    <p class="mb-4">This table outlines all lakes and reservoirs Northern Ireland <a target="_blank"
                            href="add-a-location">Go here to submit a lake</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">All Lakes | Reservoirs</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Location</th>
                                            <th>Fish Type</th>
                                            <th>C+R Price</th>
                                            <th>Method</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Location</th>
                                            <th>Fish Type</th>
                                            <th>C+R Price</th>
                                            <th>Method</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                    $select_all_lakes = "SELECT * FROM `lake_main`";
                                    $select_all_lakes_result = mysqli_query($conn, $select_all_lakes);

                                    if (mysqli_num_rows($select_all_lakes_result) > 0) {
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($select_all_lakes_result)) {
                                            $lake_main_id = $row["lake_main_id"];
                                            $lake_type = $row["lake_type"];
                                            $lake_name = $row["lake_name"];
                                            $lake_opening_time = $row["lake_opening_time"];
                                            $lake_boat_option = $row["lake_boat_option"];
                                            $lake_catch_release_price = $row["lake_catch_release_price"];
                                            $lake_fish_type = $row["lake_fish_type"];
                                            $lake_location = $row["lake_location"];
                                            $lake_primary_method = $row["lake_primary_method"];
                                        ?>
                                            <td><a href="lake-profile.php?lakeID=<?php echo $lake_main_id;?>"><?php echo $lake_name?></a></td>
                                            <td><?php echo $lake_type?></td>
                                            <td><?php echo $lake_location?></td>
                                            <td><?php echo $lake_fish_type?></td>
                                            <td><?php echo "£".$lake_catch_release_price?></td>
                                            <td><?php echo $lake_primary_method?></td>
                                            

                                        <?php
                                        }
                                    }
                                    ?>
                                    </tbody>
                                </table>
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