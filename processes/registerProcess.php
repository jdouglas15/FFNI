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
    $message = "Registration successful, please login";
    $alertType = "success";
    Set_Message($message, $alertType);
    header('Location: ../login.php'); 
}else{
    $message = "Registration failed, please try again";
    $alertType = "danger";
    Set_Message($message, $alertType);
    header('Location: ../register.php'); 
}

?>