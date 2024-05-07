<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="Zach Stull, Kyle Jager, Dave Portilla">
    <title> Color Picker </title>
    <meta name="keywords" content="Homepage, CSU, Web, Development">
    <meta name="description" content="Team37's Homepage">
    <title>Homepage</title>
    <link rel="stylesheet" href="style.css">
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
        <img src="images/logo-idea1.png" alt="logo">
    </div>

    <br>
    <br>

    <?php

    $rows_cols = isset($_POST["rows_cols"]) ? intval($_POST["rows_cols"]) : null;
    $hex_values = $_SESSION['hex'];
    $color_names = $_SESSION['names'];
    $colorCoordinates = $_SESSION['coords'];

    echo "<table class='color-table'>";
    for($i = 0; $i < count($color_names); $i++) {
        $color = strtolower($color_names[$i]);
        $coords_array = isset($colorCoordinates[$color]) ? $colorCoordinates[$color] : array();
        $coords = implode(", ", $coords_array);
        echo "<tr><td>" . $color_names[$i] . " - " . $hex_values[$i] . "</td><td style='width: 80%;'>" . $coords . "</td></tr>";
    }
    echo "</table>";

    echo "<br>";
    echo "<div class='coordinate-container'>";
    echo "<table class='coordinate-table'>";
    for ($i = 0; $i <= $rows_cols; $i++) {
        echo "<tr>";
        for ($j = 0; $j <= $rows_cols; $j++) {
            if ($i == 0 && $j == 0) {
                echo "<td></td>";
            } elseif ($i == 0) {
                echo "<td>" . chr(64 + $j) . "</td>";
            } elseif ($j == 0) {
                echo "<td>" . $i . "</td>";
            } else {
                echo "<td>" . chr(64 + $j) . $i . "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
        ?>

</html>