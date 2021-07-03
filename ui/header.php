<!DOCTYPE html>
<html lang="en">
    
<?php 
session_start();
//db connection
if (isset($folderChange)){
    include "../dbConn/conn.php";
}else{
    include "dbConn/conn.php";
}

//hide profile dropdown based off if user is logged in or not
if (isset($_SESSION['ffni_email'])){
    $hide_divs = "";
    $show_divs = "hidden";
}else{
    $hide_divs = "hidden";
    $show_divs = "";
}

$user_name = $_SESSION['user_name'];
$ffni_email = $_SESSION['ffni_email'];

//adjust page title based dynamically
$page = basename($_SERVER['PHP_SELF']);
$river_search_result = "";
switch ($page) {
    case "rivers.php":
        $page = "NI Rivers";
        break;
    case "lakes-reservoirs.php":
        $page = "NI Lakes | Reservoirs";
        break;
    case "index.php":
        $page = "Dashboard";
        break;
    case "register.php":
        $page = "Register";
    case "rivers-all.php":
        $page = "All Rivers";
        break;
    case "rivers-search.php":
        $page = "River Search |" . $river_search_result;
        break;
    case "river-profile.php":
        $page = "River Profile";
        break;
    case "login.php":
        $page = "Login";
        break;
    case "register.php":
        $page = "Register";
        break;
    case "lakes-reservoirs-all.php":
        $page = "All Lakes | Reservoirs";
        break;
    case "lake-profile.php":
        $page = "Lake Profile";
        break;
    case "user-profile.php":
        $page = "User Profile";
        break;
    default;
        $page = "Fish Finder NI";
}

?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FFNI | <?php echo $page; ?></title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>