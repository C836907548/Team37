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
    <link rel="stylesheet" href="styleIndex.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body style="background-color: white">
    <?php

    echo "<table class='color-table'>";

    $rows_cols = $_SESSION['rows_cols'];
    
    $colors = $_SESSION['colors'];
    $select0 = $_SESSION['select0'];
    echo $select0;
    
    for ($i = 0; $i < $colors; $i++) {
        if ($i == 0) {

            echo "<tr>";
            echo "<td style='width: 20%;'>" . $select0 . "</td>";

            echo "<td style='width: 80%;'>";
            echo "</td>";
            echo "</tr>";

            

        }
        if ($i == 1) {
            echo "<tr>";
            echo "<td style='width: 20%;'>";

            echo "<td>" . $select0 . "</td>";

            echo "</td>";
            echo "<td style='width: 80%;'>";
            echo "</td>";
            echo "</tr>";
        }

        if ($i == 2) {
            echo "<tr>";
            echo "<td style='width: 20%;'>";
            
            echo "</td>";
            echo "<td style='width: 80%;'>";
            echo "</td>";
            echo "</tr>";
        }

        if ($i == 3) {
            echo "<tr>";
            echo "<td style='width: 20%;'>";

            echo "</td>";
            echo "<td style='width: 80%;'>";
            echo "</td>";
            echo "</tr>";
        }

        if ($i == 4) {
            echo "<tr>";
            echo "<td style='width: 20%;'>";

            echo "</td>";
            echo "<td style='width: 80%;'>";
            echo "</td>";
            echo "</tr>";
        }

        if ($i == 5) {
            echo "<tr>";
            echo "<td style='width: 20%;'>";

            echo "</td>";
            echo "<td style='width: 80%;'>";
            echo "</td>";
            echo "</tr>";
        }

        if ($i == 6) {
            echo "<tr>";
            echo "<td style='width: 20%;'>";

            echo "</td>";
            echo "<td style='width: 80%;'>";
            echo "</td>";
            echo "</tr>";
        }

        if ($i == 7) {
            echo "<tr>";
            echo "<td style='width: 20%;'>";

            echo "</td>";
            echo "<td style='width: 80%;'>";
            echo "</td>";
            echo "</tr>";
        }

        if ($i == 8) {
            echo "<tr>";
            echo "<td style='width: 20%;'>";

            echo "</td>";
            echo "<td style='width: 80%;'>";
            echo "</td>";
            echo "</tr>";
        }

        if ($i == 9) {
            echo "<tr>";
            echo "<td style='width: 20%;'>";

            echo "</td>";
            echo "<td style='width: 80%;'>";
            echo "</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
    ?>
</html>