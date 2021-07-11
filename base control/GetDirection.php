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


$query = "SELECT direction FROM base ORDER BY id DESC LIMIT 1";
$res = mysqli_query($con, $query);

    if (($row = mysqli_fetch_assoc($res))) {
        echo $row["direction"];
    } else {
        echo "Error";
    }
?>