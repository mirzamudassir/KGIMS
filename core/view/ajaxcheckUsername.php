<?php
require_once('../controller/UserController.php');

$link= database_conn();

if(isset($_POST['username'])){
    $username = $_POST['username'];
 
    // Check username
    $stmt = "SELECT * FROM `user_accounts` WHERE username='" . $_POST["username"] . "'";
    $result  = mysqli_query($link, $stmt);
    $count = mysqli_num_rows($result);
 
    $response = "<span style='color: green;'>Username is Available.</span>";
    if($count > 0){
       $response = "<span style='color: red;'>Username is Not Available.</span>";
    }
 
    echo $response;
    exit;
 }

?>