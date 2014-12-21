<?php
/**
 * Created by PhpStorm.
 * User: Ryan
 * Date: 12/20/2014
 * Time: 7:01 PM
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
                Website Registration - Confirmation
            </div>
            <div class="panel-body text-justify">
                <p>Welcome, <code>@Username</code>!</p>
                <p>
                    Before you may continue, please ensure you have completed the following tasks:
                <ul>
                    <li>Successfully joined our Minecraft server with your Minecraft account.</li>
                    <li>Verify a pending registration is under the account you plan to register.</li>
                    <li>Ensure the account you are registering under is YOUR account.</li>
                </ul>
        </p>

        <p class="text-center">
            <a href="two.php">
                <button type="button" class="btn btn-primary">Continue</button>
            </a>
        </p>
    </div>

</div>

</p>
</div>
<div class="col-xs-6 col-md-3 ">

</div>
</div>

<footer>
    <?php include '../includes/footer.phtml'; ?>
</footer>

<script src="http://breakfastcraft.rocks/dist/js/jquery.min.js"></script>
<script src="http://breakfastcraft.rocks/dist/js/bootstrap.min.js"></script>


</body>
</html>