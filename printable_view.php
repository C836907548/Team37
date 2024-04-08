<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="Zach Stull, Kyle Jager, Dave Portilla">
    <title> Color Picker </title>
    <meta name="keywords" content="Homepage, CSU, Web, Development">
    <meta name="description" content="Team37's Homepage">
    <title>Homepage</title>
    <link rel="stylesheet" href="styleIndex.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-color: white">

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="logo-print">
        <img src="images/logo-idea1.png" alt="logo placeholder">
    </div>

    <br>
    <br>

    <?php

    $rows_cols = isset($_POST["rows_cols"]) ? intval($_POST["rows_cols"]) : null;
    $colors = isset($_POST["colors"]) ? intval($_POST["colors"]) : null;

    // this resultings in all data being "0". Im not sure why
    //
    // $select0 = isset($_POST["select0"]) ? intval($_POST["select0"]) : null;
    // $select1 = isset($_POST["select1"]) ? intval($_POST["select1"]) : null;
    // $select2 = isset($_POST["select2"]) ? intval($_POST["select2"]) : null;
    // $select3 = isset($_POST["select3"]) ? intval($_POST["select3"]) : null;
    // $select4 = isset($_POST["select4"]) ? intval($_POST["select4"]) : null;
    // $select5 = isset($_POST["select5"]) ? intval($_POST["select5"]) : null;
    // $select6 = isset($_POST["select6"]) ? intval($_POST["select6"]) : null;
    // $select7 = isset($_POST["select7"]) ? intval($_POST["select7"]) : null;
    // $select8 = isset($_POST["select8"]) ? intval($_POST["select8"]) : null;
    // $select9 = isset($_POST["select9"]) ? intval($_POST["select9"]) : null;  
    
    for ($i = 0; $i < $colors; $i++) {
        if ($i == 0) {
            $select0 = $_POST["select0"];
        }
        if ($i == 1) {
            $select0 = $_POST["select0"];
            $select1 = $_POST["select1"];
        }

        if ($i == 2) {
            $select0 = $_POST["select0"];
            $select1 = $_POST["select1"];
            $select2 = $_POST["select2"];
        }

        if ($i == 3) {
            $select0 = $_POST["select0"];
            $select1 = $_POST["select1"];
            $select2 = $_POST["select2"];
            $select3 = $_POST["select3"];
        }

        if ($i == 4) {
            $select0 = $_POST["select0"];
            $select1 = $_POST["select1"];
            $select2 = $_POST["select2"];
            $select3 = $_POST["select3"];
            $select4 = $_POST["select4"];
        }

        if ($i == 5) {
            $select0 = $_POST["select0"];
            $select1 = $_POST["select1"];
            $select2 = $_POST["select2"];
            $select3 = $_POST["select3"];
            $select4 = $_POST["select4"];
            $select5 = $_POST["select5"];
        }

        if ($i == 6) {
            $select0 = $_POST["select0"];
            $select1 = $_POST["select1"];
            $select2 = $_POST["select2"];
            $select3 = $_POST["select3"];
            $select4 = $_POST["select4"];
            $select5 = $_POST["select5"];
            $select6 = $_POST["select6"];
        }

        if ($i == 7) {
            $select0 = $_POST["select0"];
            $select1 = $_POST["select1"];
            $select2 = $_POST["select2"];
            $select3 = $_POST["select3"];
            $select4 = $_POST["select4"];
            $select5 = $_POST["select5"];
            $select6 = $_POST["select6"];
            $select7 = $_POST["select7"];
        }

        if ($i == 8) {
            $select0 = $_POST["select0"];
            $select1 = $_POST["select1"];
            $select2 = $_POST["select2"];
            $select3 = $_POST["select3"];
            $select4 = $_POST["select4"];
            $select5 = $_POST["select5"];
            $select6 = $_POST["select6"];
            $select7 = $_POST["select7"];
            $select8 = $_POST["select8"];
        }

        if ($i == 9) {
            $select0 = $_POST["select0"];
            $select1 = $_POST["select1"];
            $select2 = $_POST["select2"];
            $select3 = $_POST["select3"];
            $select4 = $_POST["select4"];
            $select5 = $_POST["select5"];
            $select6 = $_POST["select6"];
            $select7 = $_POST["select7"];
            $select8 = $_POST["select8"];
            $select9 = $_POST["select9"];
        }
    }

    echo "<table class='color-table'>";
    for ($i = 0; $i < $colors; $i++) {
        if ($i == 0) {
            echo "<tr>";
            echo "<td>" . $select0 . "</td>";
            // echo "<td><p>" . $select0 . "<p></td>";
            echo "<td style='width: 80%;'>";
            echo "</td>";
            echo "</tr>";
        }
        if ($i == 1) {
            echo "<tr>";
            echo "<td>" . $select1 . "</td>";
            echo "<td style='width: 80%;'>";
            echo "</td>";
            echo "</tr>";
        }

        if ($i == 2) {
            echo "<tr>";
            echo "<td>" . $select2 . "</td>";
            echo "<td style='width: 80%;'>";
            echo "</td>";
            echo "</tr>";
        }

        if ($i == 3) {
            echo "<tr>";
            echo "<td>" . $select3 . "</td>";
            echo "<td style='width: 80%;'>";
            echo "</td>";
            echo "</tr>";
        }

        if ($i == 4) {
            echo "<tr>";
            echo "<td>" . $select4 . "</td>";
            echo "<td style='width: 80%;'>";
            echo "</td>";
            echo "</tr>";
        }

        if ($i == 5) {
            echo "<tr>";
            echo "<td>" . $select5 . "</td>";
            echo "<td style='width: 80%;'>";
            echo "</td>";
            echo "</tr>";
        }

        if ($i == 6) {
            echo "<tr>";
            echo "<td>" . $select6 . "</td>";
            echo "<td style='width: 80%;'>";
            echo "</td>";
            echo "</tr>";
        }

        if ($i == 7) {
            echo "<tr>";
            echo "<td>" . $select7 . "</td>";
            echo "<td style='width: 80%;'>";
            echo "</td>";
            echo "</tr>";
        }

        if ($i == 8) {
            echo "<tr>";
            echo "<td>" . $select8 . "</td>";
            echo "<td style='width: 80%;'>";
            echo "</td>";
            echo "</tr>";
        }

        if ($i == 9) {
            echo "<tr>";
            echo "<td>" . $select9 . "</td>";
            echo "<td style='width: 80%;'>";
            echo "</td>";
            echo "</tr>";
        }
    }
    echo "</table>"
        ?>

</html>