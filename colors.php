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

<body>
    <div id="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="colors.php">Colors</a></li>
            <li style="float:right"><a href="about.php">About</a></li>
        </ul>
    </div>

    <div class="signHome">
        <h1>Color Picker</h1>
    </div>
<?php
$min_rows_cols = 1;
$max_rows_cols = 26;
$min_colors = 1;
$max_colors = 10;

$rows_cols = isset($_GET["rows_cols"]) ? intval($_GET["rows_cols"]) : null;
$colors = isset($_GET["colors"]) ? intval($_GET["colors"]) : null;

$errors = [];
if (
    $rows_cols === null ||
    $rows_cols < $min_rows_cols ||
    $rows_cols > $max_rows_cols
) {
    $errors[
        "rows_cols"
    ] = "Invalid number of rows/columns. Please enter a value between $min_rows_cols and $max_rows_cols.";
}
if ($colors === null || $colors < $min_colors || $colors > $max_colors) {
    $errors[
        "colors"
    ] = "Invalid number of colors. Please enter a value between $min_colors and $max_colors.";
}

if (empty($errors)) {
    $color_names = [
        "red",
        "orange",
        "yellow",
        "green",
        "blue",
        "purple",
        "grey",
        "brown",
        "black",
        "teal",
    ];

    echo "<table class='color-table'>";
    for ($i = 0; $i < $colors; $i++) {
        echo "<tr>";
        echo "<td style='width: 20%;'>" . $color_names[$i] . "</td>";
        echo "<td style='width: 80%;'>";
        echo "<select>";
        foreach ($color_names as $name) {
            echo "<option>" . $name . "</option>";
        }
        echo "</select>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";

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

    echo "<a href='printable_view.php?rows_cols=$rows_cols&colors=$colors' class='btn'>Printable View</a>";
} else {
    foreach ($errors as $error) {
        echo "<p class='error'>$error</p>";
    }
}
?>
    <footer>
    <div class="linkcontainer">
        <!-- place holder buttons and links -->
        <a href="https://www.linkedin.com/" class="fa fa-linkedin"></a>
        <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
        <a href="https://rss.com/" class="fa fa-rss"></a>
    </div>
    </footer>

</html>

