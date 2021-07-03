<?php 
include "ui/header.php";
$select_river_by_id = filter_input(INPUT_GET,"riverID",FILTER_SANITIZE_STRING);


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
                    <?php 
                    include "sql/select.php";
                    Select_River_By_ID($select_river_by_id, $conn);
                    ?>               
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Clubs</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Club Name</th>
                                            <th>Start Point</th>
                                            <th>End Point</th>
                                            <th>Main Town</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Club Name</th>
                                            <th>Start Point</th>
                                            <th>End Point</th>
                                            <th>Main Town</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                    Get_River_Clubs($conn, $select_river_by_id);
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