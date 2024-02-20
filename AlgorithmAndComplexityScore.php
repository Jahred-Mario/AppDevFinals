<?php
ob_start();

include("AlgorithmAndComplexityScoreProcess.php");
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

<div class="container">
    <div class="jumbotron Content3C">
        <h2>You Scored:</h2>

        <h1 id="FinalScore"> <?php echo $ScoreCount; ?></h1>
    </div>
</div>

<div class="container">
    <div class="jumbotron Content3C">
        <h2>Wanna try again?</h2>

        <a href="AlgorithmAndComplexity.php"><button class="btn btn-info btn-bigger" onclick="ResetScore()">Yeah!</button></a>
        <a href="AlgorithmAndComplexityScore.php?Reset=true">ResetScore</a>
    </div>
</div>

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

</body>
</html>

<?php
function ResetScore() {
    $ScoreCount = 0;
}

if (isset($_GET["Reset"])) {
    ResetScore();
    header("Location: AlgorithmAndComplexity.php");
}

?>