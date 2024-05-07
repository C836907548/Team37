<!-- used for generate user_id for new users, or getting user_id of returning users -->
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="Zach Stull, Kyle Jager, Dave Portilla">
    <title>Color Picker</title>
    <meta name="keywords" content="Homepage, CSU, Web, Development">
    <meta name="description" content="Team37's Homepage">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <div id="navbar">
        <ul>
            <li><a href="index.php"><img src="images/logo-idea1.png" alt="Logo" class="navLogo"></a></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="colors.php">Colors</a></li>
            <li><a href="select.php">Select</a></li>
            <li style="float:right"><a href="about.php">About</a></li>
        </ul>
    </div>

    <div class="color-picker">
        <h1>Color Picker</h1>
    </div>

    <script>
        $(document).ready(function () {
            var selectedColor = 'red'; // Default color
            var colorCoordinates = {};
            var colorNames = ['red', 'orange', 'yellow', 'green', 'blue', 'purple', 'grey', 'brown', 'black', 'teal'];

            // Initialize colorCoordinates dictionary
            colorNames.forEach(function (color) {
                colorCoordinates[color] = [];
            });

            // Radio button event to set selectedColor
            $("input[type='radio']").change(function () {
                selectedColor = $(this).val();
            });

            console.log(colorCoordinates);

            // Click event for cells in the coordinate table
            $(".coordinate-table td").click(function () {
                if ($(this).text()) { // Checks if the cell is not the header
                    $(this).css('background-color', selectedColor);
                    colorCoordinates[selectedColor].push($(this).text());
                    colorCoordinates[selectedColor].sort(); // Sorting coordinates lexicographically
                    updateColorDisplay(selectedColor);
                    fetch('colors2.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify(colorCoordinates),
                    })
                    .then(response => response.json())
                    .then(colorCoordinates => console.log(colorCoordinates))
                    .catch((error) => {
                        console.error('Error:', error);
                    });
                }
            });

            // Function to update the display of coordinates for a specific color
            function updateColorDisplay(color) {
                var coordsText = colorCoordinates[color].join(', ');
                $("input[value='" + color + "']").closest('tr').find('td').last().text(coordsText);
            }

            // Change event for select elements
            $("select[name^='select']").change(function () {
                var oldColor = $(this).data('oldColor');
                var newColor = $(this).val();
                var oldCoords = colorCoordinates[oldColor].slice(); // Copy the old coordinates

                // Update the background color of cells and move coordinates to the new color
                oldCoords.forEach(function (coord) {
                    $(".coordinate-table td").filter(function () {
                        return $(this).text() === coord;
                    }).css('background-color', newColor);
                });
                colorCoordinates[newColor] = colorCoordinates[newColor].concat(oldCoords);
                colorCoordinates[newColor].sort();
                colorCoordinates[oldColor] = [];

                updateColorDisplay(newColor);
                updateColorDisplay(oldColor);
                $(this).data('oldColor', newColor); // Update the old color data
            });

            // Initialize the oldColor data and the radio buttons
            $("select[name^='select']").each(function (index) {
                $(this).data('oldColor', $(this).val());
                if (index === 0) {
                    $(this).closest('tr').prepend("<input type='radio' name='colorSelect' value='" + $(this).val() + "' checked>");
                } else {
                    $(this).closest('tr').prepend("<input type='radio' name='colorSelect' value='" + $(this).val() + "'>");
                }
                updateColorDisplay($(this).val());
            });
        });
    </script>

    <main>
        <form action="colors2.php" method="post">
            <div>
                <label for="rows_cols">Number of Rows/Columns:</label>
                <input type="number" name="rows_cols" required="required">
            </div>
            <br>

            <div>
                <label for="colors">Number of Colors:</label>
                <input type="number" name="colors" required="required">
            </div>
            <br>

            <button type="submit">Create table</button>
        </form>

        <?php
        $servername = "faure";
        $username = "c836907548";
        $password = "836907548"; // Is there a more secure way to do this? lol
        
        $conn = new mysqli($servername, $username, $password, "c836907548");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // If user is new, creates user_id. 
        if (!isset($_SESSION['user_id'])) {
            $_SESSION['user_id'] = uniqid("pixelate_id_", false);
            $user_id = $_SESSION['user_id'];

            $default_color_names =
                [
                    ['red'],
                    ['orange'],
                    ['yellow'],
                    ['green'],
                    ['blue'],
                    ['purple'],
                    ['grey'],
                    ['brown'],
                    ['black'],
                    ['teal']
                ];
            $default_color_hexs =
                [
                    ['#FF0000'],
                    ['#FFA500'],
                    ['#FFFF00'],
                    ['#008000'],
                    ['#0000FF'],
                    ['#800080'],
                    ['#808080'],
                    ['#A52A2A'],
                    ['#000000'],
                    ['#008080']
                ];

            for ($i = 0; $i < 10; $i++) {

                $name = $default_color_names[$i][0];
                $hex_value = $default_color_hexs[$i][0];

                $insert = " INSERT INTO colors (name, hex_value, user_id) VALUES ('$name', '$hex_value', '$user_id')";

                if ($conn->query($insert) === TRUE) {
                    // debug
                    // echo "New record created successfully";
                } else {
                    echo "Error: " . $insert . "<br>" . $conn->error;
                }
            }
            // If user isnt new, this gets their user_id from the session    
        
            // Gets users color names from colors table
            $sql = "SELECT name FROM colors WHERE user_id = '$user_id'";
            $result = $conn->query($sql);

            // Converts result to array
            $color_names = [];
            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    $color_names[] = $row['name'];
                }
            }

            $sql = "SELECT hex_value FROM colors WHERE user_id = '$user_id'";
            $result = $conn->query($sql);

            $hex_values = [];
            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    $hex_values[] = $row['hex_value'];
                }
            }

            $min_rows_cols = 1;
            $max_rows_cols = 26;
            $min_colors = 1;
            $max_colors = 10;

        } else {

            $user_id = $_SESSION['user_id'];

            // Gets users color names from colors table
            $sql = "SELECT name FROM colors WHERE user_id = '$user_id'";
            $result = $conn->query($sql);

            // Converts result to array
            $color_names = [];
            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    $color_names[] = $row['name'];
                }
            }

            $sql = "SELECT hex_value FROM colors WHERE user_id = '$user_id'";
            $result = $conn->query($sql);

            $hex_values = [];
            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    $hex_values[] = $row['hex_value'];
                }
            }
            

            // // debug
            // echo "debug";
            // foreach ($color_names as $name) {
            //     echo $name;
            // }
        
            $min_rows_cols = 1;
            $max_rows_cols = 26;
            $min_colors = 1;

            if (sizeof($color_names) <= 10){
                $max_colors = sizeof($color_names);
            }
            else{
                $max_colors = 10;
            }
        }

        echo " <form action='printable_view.php' method='post'>";

        $rows_cols = isset($_POST["rows_cols"]) ? intval($_POST["rows_cols"]) : null;
        $colors = isset($_POST["colors"]) ? intval($_POST["colors"]) : null;
        $_SESSION['hex'] = $hex_values;
        $_SESSION['names'] = $color_names;
        $colorCoordinates = json_decode(file_get_contents('php://input'), true);
        $_SESSION['coords'] = $colorCoordinates;
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

            // Switching colors2 to use values from the database
            // $color_names = [
            //     "red",
            //     "orange",
            //     "yellow",
            //     "green",
            //     "blue",
            //     "purple",
            //     "grey",
            //     "brown",
            //     "black",
            //     "teal"
            // ];
        
            echo "<table class='color-table'>";

            for ($i = 0; $i < $colors; $i++) {
                echo "<tr>";
                echo "<td style='width: 20%;'>";
                echo "<input type='radio' name='colorSelect' value='{$color_names[$i]}' " . ($i == 0 ? "checked" : "") . ">";
                echo "<select name='select{$i}'>";
                foreach ($color_names as $name) {
                    echo "<option value='{$name}'" . ($name === $color_names[$i] ? " selected" : "") . ">{$name}</option>";
                }
                echo "</select>";
                echo "</td>";
                echo "<td style='width: 80%;' id='coords{$i}'></td>";
                echo "</tr>";
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
            echo "<br>";

            echo "<button type='submit'>Printable View</button>";
            echo "<br>";

            echo "</form>";
        } else {
            foreach ($errors as $error) {
                echo "<p class='error'>$error</p>";
            }
        }
        ?>

        <footer>
            <div class="linkcontainer">
                <a href="https://www.linkedin.com/" class="fa fa-linkedin"></a>
                <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
                <a href="https://rss.com/" class="fa fa-rss"></a>
            </div>
        </footer>
    </main>
</body>

</html>