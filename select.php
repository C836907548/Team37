<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="Zach Stull, Kyle Jager, Dave Portilla">
    <title> Color Picker </title>
    <meta name="keywords" content="Homepage, CSU, Web, Development">
    <meta name="description" content="Pixelate Select">
    <title>Select</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="script.js"></script>
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
        <h1>Select</h1>
    </div>

    <script>

        function two_step_delete() {
            return confirm("Confirm color deletion");
        }

        $(document).ready(function () {
            var previousSelections = {};

            $("select").each(function () {
                var selectName = $(this).attr('name');
                previousSelections[selectName] = $(this).val();
            });

            $("select").change(function () {
                var currentSelectName = $(this).attr('name');
                var currentValue = $(this).val();
                var isDuplicate = false;

                $("select").not(this).each(function () {
                    if ($(this).val() === currentValue) {
                        isDuplicate = true;
                    }
                });

                if (isDuplicate) {
                    $("#message").text('Duplicate color selected. Please choose a different color.');
                    $(this).val(previousSelections[currentSelectName]);
                } else {
                    $("#message").text('');
                    previousSelections[currentSelectName] = currentValue;
                }
            });
        });

    </script>

    <main>

        <!-- To force correct hex_value input format
        https://www.w3schools.com/TAGS/att_input_pattern.asp -->

        <form action="select.php" method="post">
            <input type="hidden" name="insert_form" value="true">

            <div>
                <label for="name">Color name:</label>
                <input type="text" name="name" required="required">
            </div>
            <br>

            <div>
                <label for="hex_value">Hex Value:</label>
                <input type="text" name="hex_value" required="required" pattern="#[0-9A-Fa-f]{6}" placeholder="#FF79F3">
            </div>
            <br>
            <button type="submit">Add new Color</button>
        </form>

        <form action="select.php" method="post">
            <input type="hidden" name="edit_form" value="true">

            <div>
                <label for="name">Old Color Name:</label>
                <input type="text" name="name" required="required">
            </div>
            <div>
                <label for="hex_value">Old Hex Value:</label>
                <input type="text" name="hex_value" required="required" pattern="#[0-9A-Fa-f]{6}" placeholder="#FF79F3">
            </div>
            <br>
            <div>
                <label for="name">New Color Name:</label>
                <input type="text" name="new_name" required="required">
            </div>
            <div>
                <label for="hex_value">New Hex Value:</label>
                <input type="text" name="hex_value" required="required" pattern="#[0-9A-Fa-f]{6}" placeholder="#FF79F3">
            </div>

            <br>
            <button type="submit">Edit</button>
        </form>

        <form action="select.php" method="post" onsubmit="return two_step_delete();">
            <input type="hidden" name="delete_form" value="true">

            <div>
                <label for="name">Color name:</label>
                <input type="text" name="name">
            </div>
            <br>

            <div>
                <label for="hex_value">Hex Value:</label>
                <input type="text" name="hex_value" pattern="#[0-9A-Fa-f]{6}" placeholder="#FF79F3">
            </div>
            <br>
            <button type="submit">Delete existing color</button>
        </form>

        <?php

        $servername = "faure";
        $username = "c836907548";
        $password = "836907548"; // Is there a more secure way to do this? lol
        
        $conn = new mysqli($servername, $username, $password, "c836907548");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Creates new user with default colors
        if (!isset($_SESSION['user_id'])) {
            $_SESSION['user_id'] = uniqid("pixelate_id_", false);
            $user_id = $_SESSION['user_id'];

            // // debug
            // echo $user_id;
        
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
        } else {
            $user_id = $_SESSION['user_id'];
        }

        // I dont think the user needs to see the ID right?
        // $sql = "SELECT id, name, hex_value FROM colors";
        // $result = $conn->query($sql);
        // echo "<table border='1', class='color-select'>";
        // echo "<tr><th>Name</th><th>Hex Value</th><th>ID</th></tr>";
        
        // Form processing
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (isset($_POST['insert_form'])) {

                $name = $conn->real_escape_string($_POST['name']);
                $hex_value = $conn->real_escape_string($_POST['hex_value']);

                $sql_duplicate = "SELECT * FROM colors WHERE user_id = '$user_id' AND (name = '$name' OR hex_value = '$hex_value')";
                $result = $conn->query($sql_duplicate);

                if ($result->num_rows > 0) {
                    echo "Oops! The color '$name' or '$hex_value' has already been entered.";
                } else {
                    $insert = " INSERT INTO colors (name, hex_value, user_id) VALUES ('$name', '$hex_value', '$user_id')";

                    if ($conn->query($insert) === TRUE) {
                        // debug
                        // echo "New record created successfully";
                    } else {
                        echo "Error: " . $sql_duplicate . "<br>" . $conn->error;
                    }
                }

            } else if (isset($_POST['edit_form'])) {
                $name = $conn->real_escape_string($_POST['name']);
                $hex_value = $conn->real_escape_string($_POST['hex_value']);
                $new_name = $conn->real_escape_string($_POST['new_name']);
                $new_hex_value = $conn->real_escape_string($_POST['new_hex_value']);

                $change = "UPDATE colors SET name = '$new_name', hex_value = '$new_hex_value' WHERE name= '$name' AND hex_value = '$hex_value' AND user_id = '$user_id'";

                if ($conn->query($change) === TRUE) {
                    // debug
                    // echo "New record created successfully";
                } else {
                    echo "Error: " . $sql_duplicate . "<br>" . $conn->error;
                }


            } else if (isset($_POST['delete_form'])) {

                // Bug, if a user enters a name and hex of two different colors, this deletes both.
        
                $name = $conn->real_escape_string($_POST['name']);
                $hex_value = $conn->real_escape_string($_POST['hex_value']);

                $colors_rows_num = "SELECT * FROM colors WHERE user_id = '$user_id'";
                $result = $conn->query($colors_rows_num);

                if ($result->num_rows <= 2) {
                    echo "Oops! Unable to delete one of the last 2 colors.";
                } else {
                    $name = $conn->real_escape_string($_POST['name']);
                    $hex_value = $conn->real_escape_string($_POST['hex_value']);

                    $sql_remove = "DELETE FROM colors WHERE user_id = '$user_id' AND (name = '$name' OR hex_value = '$hex_value')";

                    if ($conn->query($sql_remove) === TRUE) {
                        // debug
                        // echo "New record created successfully";
                    } else {
                        echo "Error: " . $sql_duplicate . "<br>" . $conn->error;
                    }
                }
            }
        }

        $sql = "SELECT * FROM colors WHERE user_id = '$user_id'";

        $result = $conn->query($sql);

        echo "<table border='1', class='color-select'>";
        echo "<tr><th>Name</th><th>Hex Value</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['name']) . "</td>";
            echo "<td>" . htmlspecialchars($row['hex_value']) . "</td>";
            // echo "<td>" . htmlspecialchars($row['id']) . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        $conn->close();

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

<?php

// //////////////////////////////////////////////////////////

// I used these for the default colors
// https://www.rapidtables.com/web/color/html-color-codes.html


?>