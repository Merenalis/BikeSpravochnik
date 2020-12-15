<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="styles/result.css">
</head>

<div id="name_result">
    <h1 href="index.html">BikeSpravochnik</h1>
</div>


<div id="php_global">

<?php
include "php_db_connections.php";
$conn = OpenCon();

$result = $conn->query("SELECT * FROM `cyclists`");

while ($users = mysqli_fetch_assoc($result)) {
    ?>
<div id="php_main">
<div id="php_name">
    <?php

    echo 'Имя: ',$users['name'],' ', "<a href = 'http://".$users['strava']."'>Strava</a>",'<br>';
    echo 'Откуда: ',$users['region'];

    ?>
</div>

   <div id="php_bike">
       <?php
       echo "Проехал на велосипеде ";

       echo $users['bike'],' ',$users['distance'],' за этот год.';
       ?>
   </div>


<div id="php_style">
    <?php
    echo "Стиль катания: ";
    echo $users['style'];

    echo "<br>";

    ?>
</div>
</div>
<?php
}
?>
</div>

<body></body>
</html>