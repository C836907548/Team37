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

    <script>

        // $(document).ready(function () {
        // 	var previousSelections = {};

        // 	$("select").each(function () {
        //     	var selectName = $(this).attr('name');
        //     	previousSelections[selectName] = $(this).val();
        // 	});

        // 	$("select").change(function () {
        //     	var currentSelectName = $(this).attr('name');
        //     	var currentValue = $(this).val();
        //     	var isDuplicate = false;

        //     	$("select").not(this).each(function () {
        //         	if ($(this).val() === currentValue) {
        //             	isDuplicate = true;
        //         	}
        //     	});

        //     	if (isDuplicate) {
        //         	$("#message").text('Duplicate color selected. Please choose a different color.');
        //         	$(this).val(previousSelections[currentSelectName]);
        //     	} else {
        //         	$("#message").text('');
        //         	previousSelections[currentSelectName] = currentValue;
        //     	}
        // 	});
        // });

        $(document).ready(function () {
            $("select").change(function () {
                $("select").not(this).find("option[value=" + $(this).val() + "]").attr('disabled', true);
            });
        });

        function run() {
            document.getElementById("resultColorValue").innerHTML = document.getElementById("Color").value;
        }
    </script>

    <main>
        <form action="colors2.php" method="post">
            <div>
                <label for="rows_cols">Number of Rows/Columns:</label>
                <input type="number" name="rows_cols" required="required">
            </div>

            <div>
                <label for="colors">Number of Colors:</label>
                <input type="number" name="colors" required="required">
            </div>

            <button type="submit">Create table</button>

        </form>

        <?php
        $min_rows_cols = 1;
        $max_rows_cols = 26;
        $min_colors = 1;
        $max_colors = 10;

        echo " <form action='printable_view.php' method='post'>";

        $rows_cols = isset($_POST["rows_cols"]) ? intval($_POST["rows_cols"]) : null;
        $colors = isset($_POST["colors"]) ? intval($_POST["colors"]) : null;
        echo "<input type='hidden' name='rows_cols' value=$rows_cols>";
        echo "<input type='hidden' name='colors' value=$colors>";

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
        

            echo "<table class='color-table'>";
            for ($i = 0; $i < $colors; $i++) {
                if ($i == 0) {
                    echo "<tr>";
                    echo "<td style='width: 20%;'>";
                    echo "<select name='select0'>";

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

                    echo "</select>";
                    echo "</td>";
                    echo "<td style='width: 80%;'>";
                    echo "</td>";
                    echo "</tr>";
                }
                if ($i == 1) {
                    echo "<tr>";
                    echo "<td style='width: 20%;'>";
                    echo "<select name='select1'>";

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
                    echo "<select name='select2'>";

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
                    echo "<select name='select3'>";

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
                    echo "<select name='select4'>";

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
                    echo "<select name='select5'>";

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
                    echo "<select name='select6'>";

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
                    echo "<select name='select7'>";

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
                    echo "<select name='select8'>";

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
                    echo "<select name='select9'>";

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

                    echo "</select>";
                    echo "</td>";
                    echo "<td style='width: 80%;'>";
                    echo "</td>";
                    echo "</tr>";
                }
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
            echo "</div>";

            echo "<button type='submit'>Printable View</button>";
            echo "</form>";

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