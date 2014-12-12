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
    <?php include '../includes/header.phtml'; ?>
</header>

<div class="row">

    <div class="col-xs-6 col-md-4 col-md-offset-4">
        <p class="text-center">

            <!-- Post by <Player> -->
        <div class="panel panel-default">
            <div class="panel-heading">
                An Introduction
            </div>
            <div class="panel-body text-justify">
                <b>Welcome!</b>
                <br />
                We, the founders of BreakfastCraft, came together with a single goal: Provide a great overall server for Minecraft players to enjoy. In order to provide a great server, we will need to focus on
                community involvement, patching/updates, and fair in-game play.
            </div>
            <div class="panel-footer text-right">
                Posted by [Founder] Un1ted4rmy on <code>@Date</code>
            </div>
        </div>

        <!-- Post by <Player> -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Update: 12/11
            </div>
            <div class="panel-body text-justify">
                This is just some stupid stuff to try...
            </div>
            <div class="panel-footer text-right">
                Posted by [Founder] Un1ted4rmy on <code>@Date</code>
            </div>
        </div>

        </p>
    </div>
    <div class="col-xs-6 col-md-3 col-md-offset-1">
        <p class="text-right">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Login or Register</h3>
                </div>
                <div class="panel-body" style="padding: 10px 25px 10px 25px;">
                    <form role="form" class="form-horizontal" method="post">
                        <div class="form-group text-center">
                            <input type="password" name="website_username" class="form-control" id="website_password" placeholder="Username">
                            <input type="password" name="website_password" class="form-control" id="website_password" placeholder="Password">
                        </div>
                    </form>
                    <div class="text-center">
                        <button type="button" class="btn btn-success">Login</button>
                        <button type="button" class="btn btn-primary" style="margin-left: 10px;">Register</button>
                    </div>
                </div>
            </div>
        </p>
    </div>
</div>

<div class="row">

</div>

<footer>
    <?php include '../includes/footer.phtml'; ?>
</footer>

<script src="http://breakfastcraft.rocks/dist/js/jquery.min.js"></script>
<script src="http://breakfastcraft.rocks/dist/js/bootstrap.min.js"></script>


</body>
</html>