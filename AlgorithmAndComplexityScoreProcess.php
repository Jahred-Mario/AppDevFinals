<?php
$ScoreCount = 0;
$FinalScore = 0;

/*
function Correct1() {
    global $ScoreCount;
    $ScoreCount++;
}
*/

if (isset($_GET["Correct1"])) {
    $ScoreCount++;
}

// Kung walang laman yung Score
if (isset($_GET[""])) {
    $a = $_POST["FirstName"];
    $b = $_POST["LastName"];
    $c = $_POST["Username"];
    $d = $_POST["Password"];

    $e = $_POST[""];

    include("Connect.php");
}

// Kung may laman yung Score
?>
