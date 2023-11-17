<?php
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ../login/");
}

// Include config file
require_once "../config.php";
// Get data
if (isset(($_SESSION["id"]))) {
    $id = $_SESSION['id'];

    $dbinfo =  "SELECT * FROM users WHERE id = '$id'";
    $dbresult = mysqli_query($link, $dbinfo);
    $res = mysqli_fetch_array($dbresult);
    $image = $res['image'];
    $folder = '../assets/img/uploads/profile/';
    date_default_timezone_set('Asia/Kolkata');
    $currentTime = date('YmdHis', time());
}
if (isset($_POST["image"])) {
    $data = $_POST["image"];
    $img_array_1 = explode(";", $data);
    $img_array_2 = explode(",", $img_array_1[1]);
    $basedecode = base64_decode($img_array_2[1]);
    $filename =  'avatar_' . $id . '_' . $currentTime . ".jpg";
    $stmt = mysqli_query($link, "SELECT image FROM users WHERE id = '$id'");
    $row = mysqli_fetch_array($stmt);
    $deleteimage = $row['image'];
    unlink($folder . $deleteimage);
    move_uploaded_file($file, $folder . $filename);
    file_put_contents("$folder/$filename", $basedecode);
    mysqli_query($link, "UPDATE users SET image = '$filename' WHERE id = '$id'");
}
