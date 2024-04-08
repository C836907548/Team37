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

    <main>
        <form action="colors2.php" method="post">
            <div>
                <label for="rows_cols">Number of Rows/Columns:</label>
                <input type="number" name="rows_cols" required="required">
                <!-- <input type="number" name="rows_cols" required="required" placeholder="#"> -->
            </div>

            <div>
                <label for="colors">Number of Colors:</label>
                <input type="number" name="colors" required="required">
            </div>

            <button type="submit">Create table</button>

        </form>

        <footer>
            <div class="linkcontainer">
                <!-- place holder buttons and links -->
                <a href="https://www.linkedin.com/" class="fa fa-linkedin"></a>
                <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
                <a href="https://rss.com/" class="fa fa-rss"></a>
            </div>
        </footer>
</html>