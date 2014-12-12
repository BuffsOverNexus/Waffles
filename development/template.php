<?php
/**
 * Created by PhpStorm.
 * User: Ryan
 * Date: 12/11/2014
 * Time: 7:19 PM
 */
?>
<!DOCTYPE html>
<?php
$ip = "breakfastcraft.rocks";
$host = "127.0.0.1";
$username = "bukkit";
$password = "ufWjP7SPLU7DwQj3";

$connection = mysqli_connect($host, $username, $password) or die("Unable to find database.");
?>
<html>
<head lang="en">
    <meta charset="UTF-8">

    <link rel="shortcut icon" href="http://breakfastcraft.rocks/dist/img/Logo.png">
    <link rel="stylesheet" href="http://breakfastcraft.rocks/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://breakfastcraft.rocks/dist/css/style.css">

    <title>BreakfastCraft | Home</title>
</head>
<body>
<header>
    <?php include 'http://breakfastcraft.rocks/includes/header.phtml'; ?>
</header>

<footer>
    <?php include 'http://breakfastcraft.rocks/includes/footer.phtml'; ?>
</footer>

<script src="http://breakfastcraft.rocks/dist/js/jquery.min.js"></script>
<script src="http://breakfastcraft.rocks/dist/js/bootstrap.min.js"></script>


</body>
</html>