<?php
session_start();
ob_start();
$host = "localhost";
$username = "root";
$pwd = "";
$db = "fighter_robot";

$con = mysqli_connect($host, $username, $pwd, $db);

 if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();
 }
 /*else{
     echo 'Runing Successfully:)';
 }*/


if (isset($_POST['Save'])) {
    $m1 = $_POST['M1'];
    $m2 = $_POST['M2'];
    $m3 = $_POST['M3'];
    $m4 = $_POST['M4'];
    $m5 = $_POST['M5'];
    $m6 = $_POST['M6'];
    $status = "";

    $query = "Update arm set motor1 = '$m1' , motor2 = '$m2', motor3 = '$m3', motor4 = '$m4' , motor5 = '$m5', motor6 = '$m6'";
    $res = mysqli_query($con, $query);

    if ($res == 1) {
        $status = "Done";
    } else {
        $status = "NotDone";
    }
    header("Location: index.php?status=$status");
}
if (isset($_POST["On"])) {
    $on = $_POST["On"];
    $query = "Update arm set state = '$on'";
    $res = mysqli_query($con, $query);
    if ($res == 1) {
        $status = "On";
    } else {
        $status = "Off";
    }
    header("Location: index.php?status=$status");
}
if (isset($_POST["Off"])) {
    $off = $_POST["Off"];
    $query = "Update arm set state = '$off'";
    $res = mysqli_query($con, $query);
    if ($res == 1) {
        $status = "Off";
    } else {
        $status = "On";
    }
    header("Location: index.php?status=$status");
}
if (isset($_POST["Center"])) {
    $query = "Update arm set motor1 = 90 , motor2 = 90, motor3 = 90, motor4 = 90 , motor5 = 90, motor6 = 90";
    $res = mysqli_query($con, $query);
    if ($res == 1) {
        $status = "Done";
    } else {
        $status = "NotDone";
    }
    header("Location: index.php?center=$status");
}
if (isset($_POST['Forward'])) {
    $dir=$_POST['Forward'];
    $query = "INSERT INTO base (id,direction) VALUES (NULL,'$dir')";
    $res = mysqli_query($con, $query);
    if ($res == 1) {
        $status = "Done";
    } else {
        $status = "NotDone";
    }
    header("Location: index.php?status=$status");
}
elseif(isset($_POST['Left'])){
    $dir=$_POST['Left'];
    $query = "INSERT INTO base (id,direction) VALUES (NULL,'$dir')";
    $res = mysqli_query($con, $query);
    if ($res == 1) {
        $status = "Done";
    } else {
        $status = "NotDone";
    }
    header("Location: index.php?status=$status");
}
elseif(isset($_POST['Stop'])){
    $dir=$_POST['Stop'];
    $query = "INSERT INTO base (id,direction) VALUES (NULL,'$dir')";
    $res = mysqli_query($con, $query);
    if ($res == 1) {
        $status = "Done";
    } else {
        $status = "NotDone";
    }
    header("Location: index.php?status=$status");
}
elseif(isset($_POST['Right'])){
    $dir=$_POST['Right'];
    $query = "INSERT INTO base (id,direction) VALUES (NULL,'$dir')";
    $res = mysqli_query($con, $query);
    if ($res == 1) {
        $status = "Done";
    } else {
        $status = "NotDone";
    }
    header("Location: index.php?status=$status");
}
elseif(isset($_POST['Backward'])){
    $dir=$_POST['Backward'];
    $query = "INSERT INTO base (id,direction) VALUES (NULL,'$dir')";
    $res = mysqli_query($con, $query);
    if ($res == 1) {
        $status = "Done";
    } else {
        $status = "NotDone";
    }
    header("Location: index.php?status=$status");
}
?>


