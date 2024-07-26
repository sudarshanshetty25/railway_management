<?php
session_start();
require('firstimport.php');

// Check if train number is provided in the URL
$tbl_name = "interlist";

if (isset($_GET['train_number'])) {
    $train_number = $_GET['train_number'];
    mysqli_select_db($conn, "$db_name") or die("cannot select db");
    $k = 0;

    // Query to fetch intermediate stations for the given train number
    $sql = "SELECT * FROM interlist WHERE Number = '$train_number'";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Intermediate Stations</title>
    <link rel="shortcut icon" href="images/favicon.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/Default.css" rel="stylesheet">
    <link href="css/bootstrap1.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script>
        $(document).ready(function() {
            var x = (($(window).width()) - 1024) / 2;
            $('.wrap').css("left", x + "px");
        });
    </script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/man.js"></script>

</head>

<body>
    
<div class="wrap" style="float:left;height:150%;width:100%;background-image:url(images/desktop-wallpaper-background-midnight-train-dark-blue.jpg);">
        <!-- Header -->
        <div class="header">
            <div style="float:left;width:150px;">
            <img src="images/5c5ebb82714d1567467b95f833f9d014.jpg"/>
            </div>
            <div>
                <div style="float:right; font-size:20px;margin-top:20px;">
                    <?php
                    if (isset($_SESSION['name'])) {
                        echo "Welcome," . $_SESSION['name'] . "&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
                    }
                    ?>

                </div>
                <div id="heading">
                    <a href="index.php"> RAILWAY SYSTEM</a>
                </div>
            </div>
        </div>
        <div class="navbar navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
                    <a class="brand" href="index.php"  style="margin-left:30px;">HOME</a>
                    <a class="brand" href="train.php">FIND TRAIN</a>
                    <a class="brand" href="reservation.php">RESERVATION</a>
                    <a class="brand" href="profile.php">PROFILE</a>
                </div>
            </div>
        </div>
        <?php
        // Display the intermediate stations
        if (mysqli_num_rows($result) > 0) {
            // Display intermediate stations in a table
            echo '<div class="display" style="height:30px;">';
            echo '<table class="table1" border="5px" style="width:auto;">';
            echo '<tr>';
            echo '<th style="width:70px;border-top:0px;">Origin</th>';
            echo '<th style="width:70px;border-top:0px;">Origin Time</th>';
            echo '<th style="width:70px;border-top:0px;">Station 1</th>';
            echo '<th style="width:70px;border-top:0px;">Station 1 Arrival</th>';
            echo '<th style="width:70px;border-top:0px;">Station 2</th>';
            echo '<th style="width:70px;border-top:0px;">Station 2 Arrival</th>';
            echo '<th style="width:70px;border-top:0px;">Station 3</th>';
            echo '<th style="width:70px;border-top:0px;">Station 3 Arrival</th>';
            echo '<th style="width:70px;border-top:0px;">Station 4</th>';
            echo '<th style="width:70px;border-top:0px;">Station 4 Arrival</th>';
            echo '<th style="width:70px;border-top:0px;">Station 5</th>';
            echo '<th style="width:70px;border-top:0px;">Station 5 Arrival</th>';
            echo '<th style="width:70px;border-top:0px;">Destination</th>';
            echo '<th style="width:70px;border-top:0px;">Destination time</th>';
            echo '</tr>';
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row['Ori'] . '</td>';
                echo '<td>' . $row['Oriarri'] . '</td>';
                echo '<td>' . $row['st1'] . '</td>';
                echo '<td>' . $row['st1arri'] . '</td>';
                echo '<td>' . $row['st2'] . '</td>';
                echo '<td>' . $row['st2arri'] . '</td>';
                echo '<td>' . $row['st3'] . '</td>';
                echo '<td>' . $row['st3arri'] . '</td>';
                echo '<td>' . $row['st4'] . '</td>';
                echo '<td>' . $row['st4arri'] . '</td>';
                echo '<td>' . $row['st5'] . '</td>';
                echo '<td>' . $row['st5arri'] . '</td>';
                echo '<td>' . $row['Dest'] . '</td>';
                echo '<td>' . $row['Desarri'] . '</td>';
                echo '</tr>';
            }
            echo '</table>';
            echo '</div>';
            echo '</div>';
        } else {
            echo "No intermediate stations found for this train.";
        }

        mysqli_close($conn);
    } else {
        // If train number is not provided, redirect back to the previous page or handle it accordingly
        echo "Train number not provided.";
    }
    ?>
    </div>
</body>

</html>
