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



    $select0 = $_POST['select0'];
    echo $select0;
    $select1 = $_POST['select1'];
    echo $select1;

    // $min_rows_cols = 1;
// $max_rows_cols = 26;
// $min_colors = 1;
// $max_colors = 10;
    

    $rows_cols = isset($_POST["rows_cols"]) ? intval($_POST["rows_cols"]) : null;
    $colors = isset($_POST["colors"]) ? intval($_POST["colors"]) : null;
    echo $rows_cols;
    echo $colors;

    $select0 = $_POST['select0'];
    echo $select0;
    $select1 = $_POST['select1'];
    echo $select1;
    $select2 = $_POST['select2'];
    echo $select2;
    $select3 = $_POST['select3'];
    echo $select3;
    $select4 = $_POST['select4'];
    echo $select4;
    $select5 = $_POST['select5'];
    echo $select5;
    $select6 = $_POST['select6'];
    echo $select6;
    $select7 = $_POST['select7'];
    echo $select7;
    $select8 = $_POST['select8'];
    echo $select8;
    $select9 = $_POST['select9'];
    echo $select9;

    // $color1 = isset($_GET["color_selected"]) ? intval($_GET["color_selected"]) : null;
    // $color2 = isset($_GET["color_selected[]"]);
    // $color3 = isset($_GET["rows_cols"]);
    
    // $rows_cols = isset($_POST["rows_cols"]) ? intval($_POST["rows_cols"]) : null;
// $colors = isset($_POST["colors"]) ? intval($_POST["colors"]) : null;
    

    $color1 = isset($_GET["resultColorValue"]) ? intval($_GET["resultColorValue"]) : null;

    ?>
    <?php


    echo "<table class='color-table'>";
    for ($i = 0; $i < $colors; $i++) {
        if ($i == 0) {
            echo "<tr>";
            echo "<td>" . $color1 . "</td>";
            echo "<td style='width: 80%;'>";
            echo "</td>";
            echo "</tr>";
        }
        if ($i == 1) {
            echo "<tr>";
            echo "<td style='width: 20%;'>";
            echo "<select name='color' id='select1'>";

            echo "<option value='orange'>orange</option>";
            echo "<option value='yellow'>yellow</option>";
            echo "<option value='green'>green</option>";
            echo "<option value='blue'>blue</option>";
            echo "<option value='purple'>purple</option>";
            echo "<option value='grey'>grey</option>";
            echo "<option value='brown'>brown</option>";
            echo "<option value='black'>black</option>";
            echo "<option value='teal'>teal</option>";
            echo "<option value='red'>red</option>";

            echo "</select>";
            echo "</td>";
            echo "<td style='width: 80%;'>";
            echo "</td>";
            echo "</tr>";
        }

        if ($i == 2) {
            echo "<tr>";
            echo "<td style='width: 20%;'>";
            echo "<select name='color' id='select2'>";

            echo "<option value='yellow'>yellow</option>";
            echo "<option value='green'>green</option>";
            echo "<option value='blue'>blue</option>";
            echo "<option value='purple'>purple</option>";
            echo "<option value='grey'>grey</option>";
            echo "<option value='brown'>brown</option>";
            echo "<option value='black'>black</option>";
            echo "<option value='teal'>teal</option>";
            echo "<option value='red'>red</option>";
            echo "<option value='orange'>orange</option>";

            echo "</select>";
            echo "</td>";
            echo "<td style='width: 80%;'>";
            echo "</td>";
            echo "</tr>";
        }

        if ($i == 3) {
            echo "<tr>";
            echo "<td style='width: 20%;'>";
            echo "<select name='color' id='select3'>";

            echo "<option value='green'>green</option>";
            echo "<option value='blue'>blue</option>";
            echo "<option value='purple'>purple</option>";
            echo "<option value='grey'>grey</option>";
            echo "<option value='brown'>brown</option>";
            echo "<option value='black'>black</option>";
            echo "<option value='teal'>teal</option>";
            echo "<option value='red'>red</option>";
            echo "<option value='orange'>orange</option>";
            echo "<option value='yellow'>yellow</option>";

            echo "</select>";
            echo "</td>";
            echo "<td style='width: 80%;'>";
            echo "</td>";
            echo "</tr>";
        }

        if ($i == 4) {
            echo "<tr>";
            echo "<td style='width: 20%;'>";
            echo "<select name='color' id='select4'>";

            echo "<option value='blue'>blue</option>";
            echo "<option value='purple'>purple</option>";
            echo "<option value='grey'>grey</option>";
            echo "<option value='brown'>brown</option>";
            echo "<option value='black'>black</option>";
            echo "<option value='teal'>teal</option>";
            echo "<option value='red'>red</option>";
            echo "<option value='orange'>orange</option>";
            echo "<option value='yellow'>yellow</option>";
            echo "<option value='green'>green</option>";

            echo "</select>";
            echo "</td>";
            echo "<td style='width: 80%;'>";
            echo "</td>";
            echo "</tr>";
        }

        if ($i == 5) {
            echo "<tr>";
            echo "<td style='width: 20%;'>";
            echo "<select name='color' id='select5'>";

            echo "<option value='purple'>purple</option>";
            echo "<option value='grey'>grey</option>";
            echo "<option value='brown'>brown</option>";
            echo "<option value='black'>black</option>";
            echo "<option value='teal'>teal</option>";
            echo "<option value='red'>red</option>";
            echo "<option value='orange'>orange</option>";
            echo "<option value='yellow'>yellow</option>";
            echo "<option value='green'>green</option>";
            echo "<option value='blue'>blue</option>";

            echo "</select>";
            echo "</td>";
            echo "<td style='width: 80%;'>";
            echo "</td>";
            echo "</tr>";
        }

        if ($i == 6) {
            echo "<tr>";
            echo "<td style='width: 20%;'>";
            echo "<select name='color' id='select6'>";

            echo "<option value='grey'>grey</option>";
            echo "<option value='brown'>brown</option>";
            echo "<option value='black'>black</option>";
            echo "<option value='teal'>teal</option>";
            echo "<option value='red'>red</option>";
            echo "<option value='orange'>orange</option>";
            echo "<option value='yellow'>yellow</option>";
            echo "<option value='green'>green</option>";
            echo "<option value='blue'>blue</option>";
            echo "<option value='purple'>purple</option>";

            echo "</select>";
            echo "</td>";
            echo "<td style='width: 80%;'>";
            echo "</td>";
            echo "</tr>";
        }

        if ($i == 7) {
            echo "<tr>";
            echo "<td style='width: 20%;'>";
            echo "<select name='color' id='select7'>";

            echo "<option value='brown'>brown</option>";
            echo "<option value='black'>black</option>";
            echo "<option value='teal'>teal</option>";
            echo "<option value='red'>red</option>";
            echo "<option value='orange'>orange</option>";
            echo "<option value='yellow'>yellow</option>";
            echo "<option value='green'>green</option>";
            echo "<option value='blue'>blue</option>";
            echo "<option value='purple'>purple</option>";
            echo "<option value='grey'>grey</option>";

            echo "</select>";
            echo "</td>";
            echo "<td style='width: 80%;'>";
            echo "</td>";
            echo "</tr>";
        }

        if ($i == 8) {
            echo "<tr>";
            echo "<td style='width: 20%;'>";
            echo "<select name='color' id='select8'>";

            echo "<option value='black'>black</option>";
            echo "<option value='teal'>teal</option>";
            echo "<option value='red'>red</option>";
            echo "<option value='orange'>orange</option>";
            echo "<option value='yellow'>yellow</option>";
            echo "<option value='green'>green</option>";
            echo "<option value='blue'>blue</option>";
            echo "<option value='purple'>purple</option>";
            echo "<option value='grey'>grey</option>";
            echo "<option value='brown'>brown</option>";

            echo "</select>";
            echo "</td>";
            echo "<td style='width: 80%;'>";
            echo "</td>";
            echo "</tr>";
        }

        if ($i == 9) {
            echo "<tr>";
            echo "<td style='width: 20%;'>";
            echo "<select name='color' id='select9'>";

            echo "<option value='red'>red</option>";
            echo "<option value='orange'>orange</option>";
            echo "<option value='yellow'>yellow</option>";
            echo "<option value='green'>green</option>";
            echo "<option value='blue'>blue</option>";
            echo "<option value='purple'>purple</option>";
            echo "<option value='grey'>grey</option>";
            echo "<option value='brown'>brown</option>";
            echo "<option value='black'>black</option>";
            echo "<option value='teal'>teal</option>";
            ;

            echo "</select>";
            echo "</td>";
            echo "<td style='width: 80%;'>";
            echo "</td>";
            echo "</tr>";
        }
    }
    echo "</table>";

    // echo "<table class='color-table'>";
    // for ($i = 0; $i < $colors; $i++) {
    //     echo "<tr>";
    //     echo "<td style='width: 20%;'>" . $color_names[$i] . "</td>";
    //     echo "<td style='width: 80%;'>";
    //     echo "</td>";
    //     echo "</tr>";
    // }
    // echo "</table>";
    
    // echo "<a href='printable_view.php?rows_cols=$rows_cols&colors=$colors' class='btn'>Printable View</a>";
    
    ?>

</html>