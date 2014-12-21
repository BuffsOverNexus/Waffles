<?php
/**
 * Created by PhpStorm.
 * User: Ryan
 * Date: 12/20/2014
 * Time: 7:26 PM
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
    <?php include '../includes/header.phtml'; ?>
</header>
<div class="row">

    <div class="col-xs-6 col-md-6 col-md-offset-3">
        <p class="text-center">

            <!-- Post by <Player> -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Website Registration - Part 2
            </div>
            <div class="panel-body text-justify">
                <p>Verification Code</p>
                <p>
                    As part of our registration process, the code below will need to be entered <b>by joining our server</b> and typing in:

                    <p>
                        <kbd>/verify <code>code</code></kbd>
                    </p>
                </p>

        </p>

        <p class="text-center">
            <a href="two.php">
                <button type="button" class="btn btn-primary">Continue</button>
            </a>
        </p>
    </div>

</div>
<footer>
    <?php include '../includes/footer.phtml'; ?>
</footer>

<script src="http://breakfastcraft.rocks/dist/js/jquery.min.js"></script>
<script src="http://breakfastcraft.rocks/dist/js/bootstrap.min.js"></script>


</body>
</html>