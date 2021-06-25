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
                    <p class="mb-4">This table outlines all rivers in Northern Ireland <a target="_blank"
                            href="add-a-location">Go here to submit a new river or club stretch</a>.</p>

                    <!-- DataTales Example -->
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
                                    Select_All_Rivers($conn);

                                    ?>
                                    </tbody>
                                </table>
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