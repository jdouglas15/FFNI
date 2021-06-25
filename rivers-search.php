<?php include "ui/header.php";

$search_by_river_county = mysqli_real_escape_string($conn,$_POST["search_by_river_county"]);
$river_search_result = mysqli_real_escape_string($conn,$_POST["search_by_river_name"]);
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
                    <h1 class="h3 mb-2 text-gray-800"><?php echo $page ?></h1>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Rivers</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>River</th>
                                            <th>County/Counties</th>
                                            <th>River Source</th>
                                            <th>River Mouth</th>
                                            <th>Area</th>
                                            <th>Clubs</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>River</th>
                                            <th>County/Counties</th>
                                            <th>River Source</th>
                                            <th>River Mouth</th>
                                            <th>Area</th>
                                            <th>Clubs</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                    include "sql/select.php";

                                    //display different data based off what is searched
                                    if (isset($river_search_result) && !empty($river_search_result)){
                                        Search_Rivers_By_Name($river_search_result, $conn);
                                        echo "TRUE";
                                    }
                                    if(isset($search_by_river_county) && !empty($search_by_river_county)){
                                        Search_Rivers_By_County($search_by_river_county, $conn);
                                        echo "TRUE";
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