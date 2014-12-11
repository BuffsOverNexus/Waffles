<?php
session_start();


?>
<!DOCTYPE html>
<?php
$ip = "breakfastcraft.rocks";
$host = "127.0.0.1";
$username = "bukkit";
$password = "ufWjP7SPLU7DwQj3";

$connection = mysqli_connect($host, $username, $password) or die("Unable to find database.");

Error_Reporting(E_ALL | E_STRICT);
Ini_Set('display_errors', true);

require_once('libraries/query.php');

$server = new Query($ip);
$info = null;
$playerCount = 0;
$maxPlayerCount = 0;
$players = null;

if ($server->connect()) {
    $info = $server->get_info();
    $playerCount = $info['numplayers'];
    $maxPlayerCount = $info['maxplayers'];
    $players = $info['players'];
}
?>
<html>
<head lang="en">
    <meta charset="UTF-8">

    <link rel="shortcut icon" href="dist/img/Logo.png">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/style.css">

    <title>BreakfastCraft | Home</title>
</head>
<body>
<header>
    <?php include 'includes/header.phtml'; ?>
</header>

<img class="center-block" src="dist/img/Logo.png">

<br>
<div class="row">
    <div class="col-md-4">
    TEST
    </div>
    <div class="col-md-4">
    Test
    </div>
    <div class="col-md-4">
    Test
    </div>
</div>
<div class="row">
    <div class="col-lg-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php if ($info) : ?>
                    <span class="label label-default center-block"><h5>JOIN NOW: <b><?php echo $ip; ?></b></h5></span>
                    <span class="label label-success center-block"><h5>Currently Online:</h5></span>

                    <div class="progress">
                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45"
                             aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($playerCount / $maxPlayerCount) * 100; ?>%">
                            <span><?php echo $playerCount . "/" . $maxPlayerCount; ?></span>
                        </div>
                    </div>

                    <?php foreach ($players as $player): ?>
                        <img src="http://cravatar.eu/avatar/<?php echo $player; ?>">
                    <?php endforeach; ?>
                <?php else: ?>
                    <span class="label label-danger center-block"><h5><b>OFFLINE</b></h5></span>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<footer>
    <?php include 'includes/footer.phtml'; ?>
</footer>

<script src="dist/js/jquery.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>


</body>
</html>