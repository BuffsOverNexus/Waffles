<!DOCTYPE html>
<?php
// Edit this ->
define('MQ_SERVER_ADDR', '192.99.201.217');
define('MQ_SERVER_PORT', 25583);
define('MQ_TIMEOUT', 1);
// Edit this <-

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

$timer = Number_Format(MicroTime(true) - $timer, 4, '.', '');
?>
<html>
<head lang="en">
    <meta charset="UTF-8">

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

    <br>

    <div class="row">
        <div class="col-lg-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($players / 60) * 100; ?>%">
                            <span><?php echo $players . "/60"; ?></span>
                        </div>
                    </div>
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