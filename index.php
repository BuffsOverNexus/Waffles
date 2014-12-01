
<!DOCTYPE html>
<?php
// Edit this ->
define('MQ_SERVER_ADDR', '198.100.146.49');
define('MQ_SERVER_PORT', 25565);
define('MQ_TIMEOUT', 1);
// Edit this <-
$host = "127.0.0.1";
$username = "bukkit";
$password = "ufWjP7SPLU7DwQj3";

$connection = mysqli_connect($host, $username, $password) or die("Unable to find database.");
//$selectDB = @mysql_select_db($username, $connection) or die("Error: Unable to Find Database");


// Display everything in browser, because some people can't look in logs for errors
Error_Reporting(E_ALL | E_STRICT);
Ini_Set('display_errors', true);

require __DIR__ . '/libraries/MinecraftQuery.class.php';

$timer = MicroTime(true);

$query = new MinecraftQuery();

try {
    $query->Connect(MQ_SERVER_ADDR, MQ_SERVER_PORT, MQ_TIMEOUT);
} catch (MinecraftQueryException $e) {
    $Exception = $e;
}

if (($playersArray = $query->GetPlayers()) !== false) {
    $players = sizeof($playersArray);
} else {
    $players = 0;
}

//$timer = Number_Format(MicroTime(true) - $timer, 4, '.', '');
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

    <!--<div class="jumbotron">
        <h2 class="text-center">Welcome to BreakfastCraft</h2>
    </div>-->

    <img class="center-block" src="dist/img/Logo.png">

    <br>

    <div class="row">
        <div class="col-lg-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <span class="label label-default center-block"><h5>JOIN NOW: <b><?php echo MQ_SERVER_ADDR ?></b></h5></span>
                    <span class="label label-success center-block"><h5>Currently Online:</h5></span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($players / 60) * 100; ?>%">
                            <span><?php echo $players . "/60"; ?></span>
                        </div>
                    </div>
                    <?php if ($players > 0) :
                    foreach ((array) $playersArray as $player): ?>
                        <img src="https://minotar.net/avatar/<?php echo $player; ?>/32">
                    <?php endforeach; endif; ?>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <?php include 'includes/footer.phtml';?>
    </footer>

    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>


</body>
</html>