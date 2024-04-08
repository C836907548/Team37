<?php
session_start();
?>

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




    // $rows_cols = isset($_GET["rows_cols"]) ? intval($_GET["rows_cols"]) : null;
    // $colors = isset($_GET["colors"]) ? intval($_GET["colors"]) : null;
    
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

    <?php

    // $rows_cols = isset($_GET["rows_cols"]) ? intval($_GET["rows_cols"]) : null;
    // $colors = isset($_GET["colors"]) ? intval($_GET["colors"]) : null;
    
    // echo " <form action='printable_view.php' method='post'>";
    


    // $rows_cols = isset($_POST["rows_cols"]) ? intval($_POST["rows_cols"]) : null;
    // $colors = isset($_POST["colors"]) ? intval($_POST["colors"]) : null;
    
    // $rows_cols = isset($_GET["rows_cols"]) ? intval($_GET["rows_cols"]) : null;
    // $colors = isset($_GET["colors"]) ? intval($_GET["colors"]) : null;
    
    // echo "<table class='color-table'>";
    // for ($i = 0; $i < $colors; $i++) {
    //     echo "<tr>";
    //     echo "<td style='width: 20%;'>" . $color_names[$i] . "</td>";
    //     echo "<td style='width: 80%;'>";
    //     echo "<select>";
    //     foreach ($color_names as $name) {
    //         echo "<option>" . $name . "</option>";
    //     }
    //     echo "</select>";
    //     echo "</td>";
    //     echo "</tr>";
    // }
    // echo "</table>";
    

    // echo "<table class='color-table'>";
    // for ($i = 0; $i < $colors; $i++) {
    //     if ($i == 0) {
    




    //         echo "<tr>";
    //         echo "<td style='width: 20%;'>";
    // echo "<select name='color_selected[]' id='select0'>";
    
    // echo "<select name='dropdownarray' id='dropdownarray'>";
    // echo "<option value='red'>red</option>";
    // echo "<option value='orange'>orange</option>";
    // echo "<option value='yellow'>yellow</option>";
    // echo "<option value='green'>green</option>";
    // echo "<option value='blue'>blue</option>";
    // echo "<option value='purple'>purple</option>";
    // echo "<option value='grey'>grey</option>";
    // echo "<option value='brown'>brown</option>";
    // echo "<option value='black'>black</option>";
    // echo "<option value='teal'>teal</option>";
    

    // echo "<option value='red'>red</option>";
    // echo "<option value='orange'>orange</option>";
    // echo "<option value='yellow'>yellow</option>";
    // echo "<option value='green'>green</option>";
    // echo "<option value='blue'>blue</option>";
    // echo "<option value='purple'>purple</option>";
    // echo "<option value='grey'>grey</option>";
    // echo "<option value='brown'>brown</option>";
    // echo "<option value='black'>black</option>";
    // echo "<option value='teal'>teal</option>";
    
    //         echo "</select>";
    //         echo "</td>";
    //         echo "<td style='width: 80%;'>";
    //         echo "</td>";
    //         echo "</tr>";
    //     }
    //     if ($i == 1) {
    //         echo "<tr>";
    //         echo "<td style='width: 20%;'>";
    //         echo "<select name='color' id='select1'>";
    
    //         echo "<option value='orange'>orange</option>";
    //         echo "<option value='yellow'>yellow</option>";
    //         echo "<option value='green'>green</option>";
    //         echo "<option value='blue'>blue</option>";
    //         echo "<option value='purple'>purple</option>";
    //         echo "<option value='grey'>grey</option>";
    //         echo "<option value='brown'>brown</option>";
    //         echo "<option value='black'>black</option>";
    //         echo "<option value='teal'>teal</option>";
    //         echo "<option value='red'>red</option>";
    
    //         echo "</select>";
    //         echo "</td>";
    //         echo "<td style='width: 80%;'>";
    //         echo "</td>";
    //         echo "</tr>";
    //     }
    
    //     if ($i == 2) {
    //         echo "<tr>";
    //         echo "<td style='width: 20%;'>";
    //         echo "<select name='color' id='select2'>";
    
    //         echo "<option value='yellow'>yellow</option>";
    //         echo "<option value='green'>green</option>";
    //         echo "<option value='blue'>blue</option>";
    //         echo "<option value='purple'>purple</option>";
    //         echo "<option value='grey'>grey</option>";
    //         echo "<option value='brown'>brown</option>";
    //         echo "<option value='black'>black</option>";
    //         echo "<option value='teal'>teal</option>";
    //         echo "<option value='red'>red</option>";
    //         echo "<option value='orange'>orange</option>";
    
    //         echo "</select>";
    //         echo "</td>";
    //         echo "<td style='width: 80%;'>";
    //         echo "</td>";
    //         echo "</tr>";
    //     }
    
    //     if ($i == 3) {
    //         echo "<tr>";
    //         echo "<td style='width: 20%;'>";
    //         echo "<select name='color' id='select3'>";
    
    //         echo "<option value='green'>green</option>";
    //         echo "<option value='blue'>blue</option>";
    //         echo "<option value='purple'>purple</option>";
    //         echo "<option value='grey'>grey</option>";
    //         echo "<option value='brown'>brown</option>";
    //         echo "<option value='black'>black</option>";
    //         echo "<option value='teal'>teal</option>";
    //         echo "<option value='red'>red</option>";
    //         echo "<option value='orange'>orange</option>";
    //         echo "<option value='yellow'>yellow</option>";
    
    //         echo "</select>";
    //         echo "</td>";
    //         echo "<td style='width: 80%;'>";
    //         echo "</td>";
    //         echo "</tr>";
    //     }
    
    //     if ($i == 4) {
    //         echo "<tr>";
    //         echo "<td style='width: 20%;'>";
    //         echo "<select name='color' id='select4'>";
    
    //         echo "<option value='blue'>blue</option>";
    //         echo "<option value='purple'>purple</option>";
    //         echo "<option value='grey'>grey</option>";
    //         echo "<option value='brown'>brown</option>";
    //         echo "<option value='black'>black</option>";
    //         echo "<option value='teal'>teal</option>";
    //         echo "<option value='red'>red</option>";
    //         echo "<option value='orange'>orange</option>";
    //         echo "<option value='yellow'>yellow</option>";
    //         echo "<option value='green'>green</option>";
    
    //         echo "</select>";
    //         echo "</td>";
    //         echo "<td style='width: 80%;'>";
    //         echo "</td>";
    //         echo "</tr>";
    //     }
    
    //     if ($i == 5) {
    //         echo "<tr>";
    //         echo "<td style='width: 20%;'>";
    //         echo "<select name='color' id='select5'>";
    
    //         echo "<option value='purple'>purple</option>";
    //         echo "<option value='grey'>grey</option>";
    //         echo "<option value='brown'>brown</option>";
    //         echo "<option value='black'>black</option>";
    //         echo "<option value='teal'>teal</option>";
    //         echo "<option value='red'>red</option>";
    //         echo "<option value='orange'>orange</option>";
    //         echo "<option value='yellow'>yellow</option>";
    //         echo "<option value='green'>green</option>";
    //         echo "<option value='blue'>blue</option>";
    
    //         echo "</select>";
    //         echo "</td>";
    //         echo "<td style='width: 80%;'>";
    //         echo "</td>";
    //         echo "</tr>";
    //     }
    
    //     if ($i == 6) {
    //         echo "<tr>";
    //         echo "<td style='width: 20%;'>";
    //         echo "<select name='color' id='select6'>";
    
    //         echo "<option value='grey'>grey</option>";
    //         echo "<option value='brown'>brown</option>";
    //         echo "<option value='black'>black</option>";
    //         echo "<option value='teal'>teal</option>";
    //         echo "<option value='red'>red</option>";
    //         echo "<option value='orange'>orange</option>";
    //         echo "<option value='yellow'>yellow</option>";
    //         echo "<option value='green'>green</option>";
    //         echo "<option value='blue'>blue</option>";
    //         echo "<option value='purple'>purple</option>";
    
    //         echo "</select>";
    //         echo "</td>";
    //         echo "<td style='width: 80%;'>";
    //         echo "</td>";
    //         echo "</tr>";
    //     }
    
    //     if ($i == 7) {
    //         echo "<tr>";
    //         echo "<td style='width: 20%;'>";
    //         echo "<select name='color' id='select7'>";
    
    //         echo "<option value='brown'>brown</option>";
    //         echo "<option value='black'>black</option>";
    //         echo "<option value='teal'>teal</option>";
    //         echo "<option value='red'>red</option>";
    //         echo "<option value='orange'>orange</option>";
    //         echo "<option value='yellow'>yellow</option>";
    //         echo "<option value='green'>green</option>";
    //         echo "<option value='blue'>blue</option>";
    //         echo "<option value='purple'>purple</option>";
    //         echo "<option value='grey'>grey</option>";
    
    //         echo "</select>";
    //         echo "</td>";
    //         echo "<td style='width: 80%;'>";
    //         echo "</td>";
    //         echo "</tr>";
    //     }
    
    //     if ($i == 8) {
    //         echo "<tr>";
    //         echo "<td style='width: 20%;'>";
    //         echo "<select name='color' id='select8'>";
    
    //         echo "<option value='black'>black</option>";
    //         echo "<option value='teal'>teal</option>";
    //         echo "<option value='red'>red</option>";
    //         echo "<option value='orange'>orange</option>";
    //         echo "<option value='yellow'>yellow</option>";
    //         echo "<option value='green'>green</option>";
    //         echo "<option value='blue'>blue</option>";
    //         echo "<option value='purple'>purple</option>";
    //         echo "<option value='grey'>grey</option>";
    //         echo "<option value='brown'>brown</option>";
    
    //         echo "</select>";
    //         echo "</td>";
    //         echo "<td style='width: 80%;'>";
    //         echo "</td>";
    //         echo "</tr>";
    //     }
    
    //     if ($i == 9) {
    //         echo "<tr>";
    //         echo "<td style='width: 20%;'>";
    //         echo "<select name='color' id='select9'>";
    
    //         echo "<option value='red'>red</option>";
    //         echo "<option value='orange'>orange</option>";
    //         echo "<option value='yellow'>yellow</option>";
    //         echo "<option value='green'>green</option>";
    //         echo "<option value='blue'>blue</option>";
    //         echo "<option value='purple'>purple</option>";
    //         echo "<option value='grey'>grey</option>";
    //         echo "<option value='brown'>brown</option>";
    //         echo "<option value='black'>black</option>";
    //         echo "<option value='teal'>teal</option>";
    //         ;
    
    //         echo "</select>";
    //         echo "</td>";
    //         echo "<td style='width: 80%;'>";
    //         echo "</td>";
    //         echo "</tr>";
    //     }
    // }
    // echo "</table>";
    


    // <form action="subscribe.php" method="post">
    //     <div>
    //         <label for="name">Name:</label>
    //         <input type="text" name="name" required="required" placeholder="Enter your name" />
    //     </div>
    
    //     <div>
    //         <label for="name">Email:</label>
    //         <input type="email" name="email" required="required" placeholder="Enter your email" />
    //     </div>
    
    //     <button type="submit">Subscribe</button>
    // </form>
    


    // echo "<br>";
    // echo "<div class='coordinate-container'>";
    // echo "<table class='coordinate-table'>";
    // for ($i = 0; $i <= $rows_cols; $i++) {
    //     echo "<tr>";
    //     for ($j = 0; $j <= $rows_cols; $j++) {
    //         if ($i == 0 && $j == 0) {
    //             echo "<td></td>";
    //         } elseif ($i == 0) {
    //             echo "<td>" . chr(64 + $j) . "</td>";
    //         } elseif ($j == 0) {
    //             echo "<td>" . $i . "</td>";
    //         } else {
    //             echo "<td>" . chr(64 + $j) . $i . "</td>";
    //         }
    //     }
    //     echo "</tr>";
    // }
    // echo "</table>";
    // echo "</div>";
    

    // echo "<button type='submit'><a href='printable_view.php?rows_cols=$rows_cols&colors=$colors&dropdownarray=$dropdownarray&color_selected[]=2' class='btn'>Printable View</a></button>";
    

    // // echo "<button type='submit'>Printable View</button>";
    // echo "</form>";
    




    // <!-- echo "<a href='printable_view.php?rows_cols=$rows_cols&colors=$colors&color[]=1&color[]=2' class='btn'>Printable View</a>";
    

    // <form action="subscribe.php" method="post">
    //     <div>
    //         <label for="name">Name:</label>
    //         <input type="text" name="name" required="required" placeholder="Enter your name" />
    //     </div>
    
    //     <div>
    //         <label for="name">Email:</label>
    //         <input type="email" name="email" required="required" placeholder="Enter your email" />
    //     </div>
    
    //     <button type="submit">Subscribe</button>
    // echo </form>;
    
    ?>





</html>