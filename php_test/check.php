<?php
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$region = $_POST['region'];
$style = $_POST['style'];
$distance = $_POST['distance'];
$bike = $_POST['bike'];
$strava = $_POST['strava'];

if (mb_strlen($name) < 2 || mb_strlen($name) > 15) {
    echo "Недопустимая длина имени(2-15)";
    exit();
} else if (mb_strlen($distance) < 2 || mb_strlen($distance) > 15) {
    echo "Недопустимая длина поля(2-15)";
    exit();
} else if (mb_strlen($bike) < 2 || mb_strlen($bike) > 15) {
    echo "Недопустимая длина поля(2-15)";
    exit();
}else if (mb_strlen($strava) < 2 || mb_strlen($strava) > 100) {
    $strava = "strava.com";
    
}

include 'php_db_connections.php';
$conn = OpenCon();

$conn->query("INSERT INTO `cyclists` (`name`,`region`,`bike`,`distance`,`style`,`strava`) VALUES('$name', '$region','$bike','$distance','$style','$strava')");
$conn->close();
header('Location: test.php');





