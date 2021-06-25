<?
$folderChange = "../";

include "../ui/header.php";

$user_full_name = mysqli_real_escape_string($conn,$_POST["user_full_name"]);
$user_email = mysqli_real_escape_string($conn,$_POST["user_email"]);
$user_password = mysqli_real_escape_string($conn,$_POST["user_password"]);

// var_dump($_POST);

$options = [
    'cost' => 12,
];
$user_password_hashed = password_hash($user_password, PASSWORD_BCRYPT, $options);

//add functionality to check if the email already exists

//insert user data into database
$insert_user = "INSERT INTO `ffni_user`(`ffni_name`, `ffni_email`, `ffni_password`) VALUES ('$user_full_name','$user_email','$user_password_hashed')";
$insert_user_result = mysqli_query($conn, $insert_user);

if($insert_user_result){
    $_SESSION["register_success"] = "Successful registered, please login";
    //redirect 
    header('Location: ../login.php'); 
}else{
    $_SESSION["register_failed"] = "Registered failed, please try again or contact <email>";
    header('Location: ../register.php'); 
}

?>