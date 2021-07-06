<!--KawtherAqeel-->

<?php
include 'connect-db.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Control Panel</title>
    <link rel="stylesheet" href="CSS/FRstyle.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <h1>Fighter Robot Project</h1>
    <!--Arm Control-->
    <div class="warpper">
        <div class="arm">
            <form class="arm" id="f1" name="robotArm" action="index.php" method="POST">
                <fieldset>
                    <legend>Arm Control Panel</legend>
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
                <button class="state" name="On" value="1" onclick="onBtn();">On</button>
                <button class="state" name="Off" value="0">Off</button><br>
                <button class="btn" name="Center" value="Center" onclick="centerArm();">Center</button>
            </form>
        </div>
        <!--Base Control-->
        <div class="base">
            <form id="f2" name="robotBase" action="index.php" method="POST">
                <fieldset>
                    <legend>Base Control Panel</legend>
                    <button class="map" name="Forward" value="F" onclick="">Forward</button><br>
                    <button class="map" name="btn" value="L" onclick="">Left</button>
                    <button class="map" name="btn" value="S" onclick="">Stop</button>
                    <button class="map" name="btn" value="R" onclick="">Right</button><br>
                    <button class="map" name="btn" value="B" onclick="">Backward</button>
                </fieldset>
            </form>
        </div>

    </div>

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
            alert("All Motors Updated in DB to 90");
            document.getElementsByClassName("motor").setAttribute(value = "90");
        }
    </script>
</body>

</html>