<!--KawtherAqeel-->

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

if (isset($_GET['Save'])) {
    $m1 = $_GET['M1'];
    $m2 = $_GET['M2'];
    $m3 = $_GET['M3'];
    $m4 = $_GET['M4'];
    $m5 = $_GET['M5'];
    $m6 = $_GET['M6'];
    $status = "";

    $query = "Update arm set motor1 = '$m1' , motor2 = '$m2', motor3 = '$m3', motor4 = '$m4' , motor5 = '$m5', motor6 = '$m6'";
    $res = mysqli_query($con, $query);

    if ($res == 1) {
        $status = "Done";
    } else {
        $status = "NotDone";
    }
    header("Location: armControl.php?status=$status");
}
if (isset($_GET["On"])) {
    $query = "Update arm set state=1";
    $res = mysqli_query($con, $query);
}
if (isset($_GET["Off"])) {
    $query = "Update arm set state=0";
    $res = mysqli_query($con, $query);
}
if (isset($_GET["Center"])) {
    $query = "Update arm set motor1 = 90 , motor2 = 90, motor3 = 90, motor4 = 90 , motor5 = 90, motor6 = 90";
    $res = mysqli_query($con, $query);
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>FighterRobot-Control</title>
    <link rel="stylesheet" href="armStyle.css" type="text/css">
</head>

<body>
    <h1>Fighter Robot Project</h1>
    <form id="f1" name="robotArm" action="armControl.php" method="GET">
        <fieldset>
            <legend>Arm Control</legend>
            <table>

                <tr>
                    <!--motor1-->
                    <td><label for="M1">Motor 1</label></td>
                    <td><input type="text" id="text1" value="90"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="range" min="0" max="180" value="90" class="motor" id="M1" name="M1" oninput="updateTextValue();"></td>
                </tr>

                <tr>
                    <!--motor2-->
                    <td><label for="M2">Motor 2</label></td>
                    <td><input type="text" id="text2" value="90"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="range" min="0" max="180" value="90" class="motor" id="M2" name="M2" oninput="updateTextValue();"></td>
                </tr>

                <tr>
                    <!--motor3-->
                    <td><label for="M3">Motor 3</label></td>
                    <td><input type="text" id="text3" value="90"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="range" min="0" max="180" value="90" class="motor" id="M3" name="M3" oninput="updateTextValue();"></td>
                </tr>

                <tr>
                    <!--motor4-->
                    <td><label for="M4">Motor 4</label></td>
                    <td><input type="text" id="text4" value="90"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="range" min="0" max="180" value="90" class="motor" id="M4" name="M4" oninput="updateTextValue();"></td>
                </tr>

                <tr>
                    <!--motor5-->
                    <td><label for="M5">Motor 5</label></td>
                    <td><input type="text" id="text5" value="90"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="range" min="0" max="180" value="90" class="motor" id="M5" name="M5" oninput="updateTextValue();"></td>
                </tr>

                <tr>
                    <!--motor6-->
                    <td><label for="M6">Motor 6</label></td>
                    <td><input type="text" id="text6" value="90"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="range" min="0" max="180" value="90" class="motor" id="M6" name="M6" oninput="updateTextValue();"></td>
                </tr>
            </table>
        </fieldset>
        <button class="btn" name="Save" value="Save" onclick="saveBtn();">Save</button><br>
        <button class="state" name="On" value="1">On</button>
        <button class="state" name="Off" value="0">Off</button><br>
        <button class="btn" name="Center" value="Center" onclick="centerArm();">Center</button>
    </form>

    <script>
        function updateTextValue() {
            var M1 = document.getElementById('M1').value;
            document.getElementById('text1').value = M1;
            var M2 = document.getElementById('M2').value;
            document.getElementById('text2').value = M2;

            var M3 = document.getElementById('M3').value;
            document.getElementById('text3').value = M3;
            var M4 = document.getElementById('M4').value;
            document.getElementById('text4').value = M4;

            var M5 = document.getElementById('M5').value;
            document.getElementById('text5').value = M5;
            var M6 = document.getElementById('M6').value;
            document.getElementById('text6').value = M6;
        }

        function saveBtn() {
            alert("Motor Value Updated successfully");
        }

        function centerArm() {
            alert("All Motor Updated in DB to 90");
            document.getElementsByClassName("motor").setAttribute(value = "90");
        }
    </script>
</body>

</html>