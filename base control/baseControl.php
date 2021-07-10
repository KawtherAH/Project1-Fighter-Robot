<!--KawtherAqeel-->

<?php
session_start();
ob_start();
$host = "localhost";
$username = "root";
$pwd = "";
$db = "fighter_robot";

$con = mysqli_connect($host, $username, $pwd, $db);

if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
}
/*else{
     echo 'Runing Successfully:)';
 }*/

if (isset($_GET['Forworad'])) {
    $dir = $_GET['Forworad'];
    $query = "INSERT INTO base (id,direction) VALUES (NULL,'$dir')";
    $res = mysqli_query($con, $query);
    if ($res == 1) {
        $status = "Done";
    } else {
        $status = "NotDone";
    }
    header("Location: baseControl.php?status=$status");
} elseif (isset($_GET['Left'])) {
    $dir = $_GET['Left'];
    $query = "INSERT INTO base (id,direction) VALUES (NULL,'$dir')";
    $res = mysqli_query($con, $query);
    if ($res == 1) {
        $status = "Done";
    } else {
        $status = "NotDone";
    }
    header("Location: baseControl.php?status=$status");
} elseif (isset($_GET['Right'])) {
    $dir = $_GET['Right'];
    $query = "INSERT INTO base (id,direction) VALUES (NULL,'$dir')";
    $res = mysqli_query($con, $query);
    if ($res == 1) {
        $status = "Done";
    } else {
        $status = "NotDone";
    }
    header("Location: baseControl.php?status=$status");
} elseif (isset($_GET['Backward'])) {
    $dir = $_GET['Backward'];
    $query = "INSERT INTO base (id,direction) VALUES (NULL,'$dir')";
    $res = mysqli_query($con, $query);
    if ($res == 1) {
        $status = "Done";
    } else {
        $status = "NotDone";
    }
    header("Location: baseControl.php?status=$status");
} elseif (isset($_GET['Stop'])) {
    $dir = $_GET['Stop'];
    $query = "INSERT INTO base (id,direction) VALUES (NULL,'$dir')";
    $res = mysqli_query($con, $query);
    if ($res == 1) {
        $status = "Done";
    } else {
        $status = "NotDone";
    }
    header("Location: baseControl.php?status=$status");
}


?>
<!DOCTYPE html>
<html>

<head>
    <title>FighterRobot-Control</title>
    <link rel="stylesheet" href="baseStyle.css" type="text/css">
</head>

<body>
    <h1>Fighter Robot Project</h1>
    <div>
        <form id="f2" name="robotBase" action="baseControl.php" method="GET">
            <fieldset>
                <legend>Base Control</legend>
                <button class="map" name="Forworad" value="F">Forward</button><br>
                <button class="map" name="Left" value="L">Left</button>
                <button class="map" name="Stop" value="S">Stop</button>
                <button class="map" name="Right" value="R">Right</button><br>
                <button class="map" name="Backward" value="B">Backward</button>
            </fieldset>
        </form>
    </div>

    <script>


    </script>
</body>

</html>