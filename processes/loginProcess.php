<?php 
$folderChange = "../";

include "../ui/header.php";

$user_email = mysqli_real_escape_string($conn,$_POST["user_email"]);
$user_password_post = mysqli_real_escape_string($conn,$_POST["user_password"]);

echo $user_password_post;


//check if email exists + get ID + hashed password
$check_email_exists = "SELECT * FROM `ffni_user` WHERE `ffni_email` = '$user_email'";
$check_email_exists_result = mysqli_query($conn, $check_email_exists);
if ($check_email_exists_result->num_rows > 0) {
    while($row = mysqli_fetch_assoc($check_email_exists_result)) {
        $user_id = $row["ffni_user_id"];
        $user_password = $row["ffni_password"];
        $user_name = $row["ffni_name"];
    }
}
else {
    $_SESSION["login_email_failed"] = "This email isn't recognised, please check your email";
    header('Location: ../login.php'); 
}

//check if password matches
if (password_verify($user_password_post, $user_password)) {
    //password is valid 
    $_SESSION['user_id'] = $user_id;
    $_SESSION['user_name'] = $user_name;
    header('Location: ../index.php'); 
} else {
    echo 'Invalid password.';
}


?>