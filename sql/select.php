<?php

//get variables 
function Get_Search_Variables($row){
    $river_main_id = $row["river_main_id"];
    $river_name = $row["river_name"];
    $rivers_counties = $row["rivers_counties"];
    $river_source = $row["river_source"];
    $river_mouth = $row["river_mouth"];
    $river_towns = $row["river_towns"];

?>
    <tr>
        <td><a href="river-profile.php?riverID=<?php echo $river_main_id;?>"><?php echo $river_name?></a></td>
        <td><?php echo $rivers_counties?></td>
        <td><?php echo $river_source?></td>
        <td><?php echo $river_mouth?></td>
        <td><?php echo $river_towns?></td>
        <td>1</td>
    </tr>
<?php
}

function Select_All_Rivers($conn){
    $select_all_rivers = "SELECT * FROM `river_main`";
    $select_all_rivers_result = mysqli_query($conn, $select_all_rivers);

    if (mysqli_num_rows($select_all_rivers_result) > 0){
        while($row = mysqli_fetch_assoc($select_all_rivers_result)){
            Get_Search_Variables($row);
        }
    }
}

function Search_Rivers_By_Name($river_search_result, $conn){
    $search_rivers_by_name = "SELECT * FROM `river_main` WHERE `river_name` LIKE '%$river_search_result%'";
    $search_rivers_by_name_result = mysqli_query($conn, $search_rivers_by_name);

    if (mysqli_num_rows($search_rivers_by_name_result) > 0){
        while($row = mysqli_fetch_assoc($search_rivers_by_name_result)){
            Get_Search_Variables($row);
        }
    }else{
        echo mysqli_error($conn);
        echo $search_rivers_by_name;

    }
}

function Search_Rivers_By_County($search_by_river_county, $conn){
    $search_rivers_by_county = "SELECT * FROM `river_main` WHERE `rivers_counties` LIKE '%$search_by_river_county%'";
    $search_rivers_by_county_result = mysqli_query($conn, $search_rivers_by_county);

    if (mysqli_num_rows($search_rivers_by_county_result) > 0){
        while($row = mysqli_fetch_assoc($search_rivers_by_county_result)){
            Get_Search_Variables($row);
        }
    }else{
        echo mysqli_error($conn);
        echo $search_rivers_by_county;

    }
}

function Get_River_Club_Count($conn, $select_river_by_id){
    $get_river_club = "SELECT COUNT(*) FROM `river_club` WHERE `river_main_fk` = '$select_river_by_id'";
    $get_river_club_result = mysqli_query($conn, $get_river_club);
    $row = $get_river_club_result->fetch_row();
    echo $row[0];

    

}

function Select_River_By_ID($select_river_by_id, $conn){
    $river_id_select = "SELECT * FROM `river_main` WHERE `river_main_id` = '$select_river_by_id'";
    $river_id_select_result = mysqli_query($conn, $river_id_select);

    if (mysqli_num_rows($river_id_select_result) > 0){
        while($row = mysqli_fetch_assoc($river_id_select_result)){
            $river_main_id = $row["river_main_id"];
            $river_name = $row["river_name"];
            $rivers_counties = $row["rivers_counties"];
            $river_source = $row["river_source"];
            $river_mouth = $row["river_mouth"];
            $river_towns = $row["river_towns"];
            $river_description = $row["river_description"];
        }?>
            <h1 class="h3 mb-2 text-gray-800"><?php echo $river_name ?></h1><hr>

            <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><?php echo $river_name ." | ". $rivers_counties; ?></h6>
                    </div>
                    <div class="card-body">
                        <?= $river_description; ?>
                    </div>
            </div>

            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        SOURCE</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $river_source; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-search-location fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        MOUTH</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $river_mouth ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-water fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">TOWNS
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $river_towns ?></div>
                                        </div>
                                        <div class="col-auto">
                                    <ii class="fas fa-dollar-thumbtack fa-2x text-gray-300"></ii>
                                </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        CLUBS REGISTERED</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php Get_River_Club_Count($conn,$select_river_by_id);?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        <?php
        // return Get_Search_Variables($row);
    }else{
        echo mysqli_error($conn);
        echo $river_id_select_result;

    }
}


function Get_River_Clubs($conn, $select_river_by_id){
    $get_river_club = "SELECT * FROM `river_club` WHERE `river_main_fk` = '$select_river_by_id'";
    $get_river_club_result = mysqli_query($conn, $get_river_club);

    if (mysqli_num_rows($get_river_club_result) > 0){
        while($row = mysqli_fetch_assoc($get_river_club_result)){
            $river_club_name = $row["river_club_name"];
            $river_club_main_town = $row["river_club_main_town"];
            $river_club_start = $row["river_club_start"];
            $river_club_end = $row["river_club_end"];
            $river_club_id = $row["river_club_id"];
            ?>
            <tr>
                <td><a href="river-club.php?riverID=<?php echo $river_club_id;?>"><?php echo $river_club_name?></a></td>
                <td><?php echo $river_club_start?></td>
                <td><?php echo $river_club_end?></td>
                <td><?php echo $river_club_main_town?></td>
            </tr>
            <?php
        }



    }
}


?>

