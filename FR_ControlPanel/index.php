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
    <style>
        /* Extra small devices (phones, 400px and down) */
        @media only screen and (max-width: 400px) {
            h1 {
                font-size: 30px;
                padding-bottom: 2px;
            }

            div.arm {
                margin: 1% 2% 1% 1%;
                height: max-content;
            }

            form.arm {
                min-width: 90%;
                padding: 15px 6px 10px 6px;
                position: relative;
            }

            legend {
                font-size: 100%;
                border-bottom: 1px solid #B0C4DE;
                padding: 2px 0px;
                width: 100%;
            }

            fieldset {
                border: none;
            }

            label {
                font-size: 18px;
            }

            input[type="range"] {
                width: 100%;
            }

            div.base {
                margin: 5% 2% 1% 2%;
                height: max-content;
                min-width: 90%;
                padding: 15px 5px 10px 5px;
                position: sticky;
            }

            button.state {
                width: 26.5%;
            }

            button.btn {
                width: 55%;
            }

            button.map {
                font-size: 100%;
                width: 60%;
                margin: 20px 10px 20px;
            }

        }

        /* Extra small devices (phones, 401px -> 600px) */
        @media only screen and (max-width: 600px) {
            h1 {
                font-size: 35px;
                padding-bottom: 2px;
            }

            div.arm {
                margin: 1% 2% 1% 1%;
                height: max-content;
            }

            form.arm {
                min-width: 90%;
                padding: 15px 6px 10px 6px;
                position: relative;

            }

            table {
                padding: 5px 24% 5px;
            }

            legend {
                font-size: 100%;
                border-bottom: 1px solid #B0C4DE;
                padding: 2px 0px;
                width: 100%;
            }

            fieldset {
                border: none;
            }

            label {
                font-size: 18px;
            }

            input[type="range"] {
                width: 100%;
            }

            div.base {
                margin: 5% 1% 1% 3%;
                height: max-content;
                min-width: 90%;
                padding: 15px 5px 10px 5px;
                position: sticky;
            }

            button.state {
                width: 26.5%;
            }

            button.btn {
                width: 55%;
            }
        }

        /* Small devices (portrait tablets and large phones, 601px -> 767px) */
        @media only screen and (min-width: 601px) and (max-width: 768px) {
            h1 {
                padding-bottom: 2px;
            }

            div.arm {
                margin: 1% 2% 1% 3%;
            }

            form.arm {
                padding: 15px 6px 12px 6px;
                height: max-content;
                min-width: 80%;
                position: relative;

            }

            table {
                padding: 4px 27% 4px;
            }

            legend {
                border-bottom: 1px solid #B0C4DE;
                padding: 2px 0px;
                width: 100%;
            }

            fieldset {
                border: none;
            }

            input[type="range"] {
                width: 95%;
            }

            div.base {
                min-width: 80%;
                margin: 4% 1% 3% 10%;
                padding: 2px;
                height: max-content;
                position: sticky;

            }

            button.map {
                font-size: 115%;
                margin: 28px 12px 15px;
            }

        }

        /* Medium devices (landscape tablets, 768px -> 992px) */
        @media only screen and (min-width: 769px) and (max-width: 992px) {
            h1 {
                padding-bottom: 2px;
            }

            div.arm {
                margin-left: 1.25%;
            }

            form.arm {
                padding: 12px 6px 12px 6px;
                margin: auto;
                height: max-content;
                min-width: 45%;
            }

            table {
                padding: 2px 14% 2px;
            }

            legend {
                border-bottom: 1px solid #B0C4DE;
                padding: 2px 0px;
                width: 100%;
            }

            fieldset {
                border: none;
            }

            label {
                font-size: 100%;
            }

            input[type="text"] {
                width: 58%;
            }

            div.base {
                min-width: 45%;
                margin-left: 51%;
                padding: 12px 2px 2px 2px;
                height: max-content;
            }

            button.map {
                font-size: 115%;
                margin: 30px 12px 10px;
            }
            button.state {
                width: 26.5%;
            }

            button.btn {
                width: 55%;
            }
        }
    </style>
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
                            <td><label for="M1">Motor 1:</label>
                                <input type="text" id="text1" value="90">
                            </td>
                        </tr>
                        <tr>
                            <td><input type="range" min="0" max="180" value="90" class="motor" id="M1" name="M1" oninput="updateTextValue();"></td>
                        </tr>

                        <tr>
                            <!--motor2-->
                            <td><label for="M2">Motor 2:</label>
                                <input type="text" id="text2" value="90">
                            </td>
                        </tr>
                        <tr>
                            <td><input type="range" min="0" max="180" value="90" class="motor" id="M2" name="M2" oninput="updateTextValue();"></td>
                        </tr>

                        <tr>
                            <!--motor3-->
                            <td><label for="M3">Motor 3:</label>
                                <input type="text" id="text3" value="90">
                            </td>
                        </tr>
                        <tr>
                            <td><input type="range" min="0" max="180" value="90" class="motor" id="M3" name="M3" oninput="updateTextValue();"></td>
                        </tr>

                        <tr>
                            <!--motor4-->
                            <td><label for="M4">Motor 4:</label>
                                <input type="text" id="text4" value="90">
                            </td>
                        </tr>
                        <tr>
                            <td><input type="range" min="0" max="180" value="90" class="motor" id="M4" name="M4" oninput="updateTextValue();"></td>
                        </tr>

                        <tr>
                            <!--motor5-->
                            <td><label for="M5">Motor 5:</label>
                                <input type="text" id="text5" value="90">
                            </td>
                        </tr>
                        <tr>
                            <td><input type="range" min="0" max="180" value="90" class="motor" id="M5" name="M5" oninput="updateTextValue();"></td>
                        </tr>

                        <tr>
                            <!--motor6-->
                            <td><label for="M6">Motor 6:</label>
                                <input type="text" id="text6" value="90">
                            </td>
                        </tr>
                        <tr>
                            <td><input type="range" min="0" max="180" value="90" class="motor" id="M6" name="M6" oninput="updateTextValue();"></td>
                        </tr>
                    </table>
                </fieldset>
                <button class="btn" name="Save" value="Save" onclick="saveBtn();">Save</button><br>
                <button class="state" name="On" value="1" onclick="onBtn();">On</button>
                <button class="state" name="Off" value="0" onclick="offBtn();">Off</button><br>
                <button class="btn" name="Center" value="Center" onclick="centerArm();">Center</button>
            </form>
        </div>
        <!--Base Control-->
        <div class="base">
            <form id="f2" name="robotBase" action="index.php" method="POST">
                <fieldset>
                    <legend>Base Control Panel</legend>
                    <button class="map" name="Forward" value="F">Forward</button><br>
                    <button class="map" name="Left" value="L">Left</button>
                    <button class="map" name="Stop" value="S">Stop</button>
                    <button class="map" name="Right" value="R">Right</button><br>
                    <button class="map" name="Backward" value="B">Backward</button>
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

        function onBtn() {
            alert("Arm is on");
        }

        function offBtn() {
            alert("Arm is off");
        }
    </script>
</body>

</html>
