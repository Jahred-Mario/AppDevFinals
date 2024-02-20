<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algorithm and Complexity</title>

    <link rel="stylesheet" href="Extensions/Bootstrap 3.css">
    <script src="Extensions/Bootstrap 3.js"></script>

    <link rel="stylesheet" href="Custom.css">
    <script src="AlgorithmAndComplexity.js"></script>
</head>
<body onload="MultiCall()">

<div class="">
    <div class="jumbotron text-center Top3C">
        <h1>Sample Title</h1>
        <h2>Your Reviewer Sample</h2>

        <a href="LoggedIndex.php"><button class="btn btn-info btn-bigger">Back to Menu</button></a>
        <a href="Subject Choices.html"><button class="btn btn-info btn-bigger">Back to Subjects</button></a>
    </div>
</div>

<div class="container">
    <div class="jumbotron text-center Content3C">
        <h1>Algorithm And Complexity</h1>
    </div>
</div>

<?php
include("Connect.php");

if (isset($_COOKIE["Username"])) {
    $sql = "SELECT * FROM userlogin WHERE Username = '". $_COOKIE["Username"] . "'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $userInfo = mysqli_fetch_assoc($result);

        // Now $userInfo contains all columns associated with the given Username
        $SubScore = $userInfo["AlgoCompScore"];

        echo '
            <div class="container">
                <div class="jumbotron Content3C">
                    <h2>You Scored:</h2>
                    <h1>'. $SubScore .'</h1>
                </div>
            </div>
        ';
    } else {
        echo "Error executing the query: " . mysqli_error($con);
    }
} else {
    echo "Err...";
}

?>

<div class="container">
    <div class="jumbotron Content3C">
        <h2>Wanna try again?</h2>

        <a href="AlgorithmAndComplexity.php"><button class="btn btn-info btn-bigger" name="Reset">Yeah!</button></a>
    </div>
</div>

</body>
</html>

<?php



/*
if (isset($_POST["Reset"])) {
    

    // $sql = "UPDATE userlogin SET AlgoCompScore = 0 WHERE Username = '". $_COOKIE["Username"] ."'";
    // header("Location: AlgorithmAndComplexity.php");
}
*/
?>

<script>
/*
function loadFinalScore() {
    // Retrieve the stored finalScoreValue
    var storedFinalScore = localStorage.getItem('finalScoreValue');

    // Check if there is a stored value
    if (storedFinalScore !== null) {
        // Update the HTML element
        document.getElementById("FinalScore").innerHTML = storedFinalScore;
    }
}
*/
</script>