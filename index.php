<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Menu</title>

    <link rel="stylesheet" href="Extensions/Bootstrap 3.css">
    <script src="Extensions/Bootstrap 3.js"></script>
    <script src="FinalProjectTitle.js"></script>

    <link rel="stylesheet" href="Custom.css">
</head>
<body style="background-image: url('Pictures/AndikWallpaper.jpg'); background-size: 100%;" onload="titleEdit()">

<?php
include("Connect.php");

// Cookies (Meaning: If you're already signed in, naglo-load pa rin yung data mo)
if (isset($_COOKIE["UserName"])) {
    $view = "SELECT Username, Password FROM userlogin WHERE Username='". $_COOKIE["Username"] . "' ";
    $viewGO = mysqli_query($con, $view) or die(mysqli_error($con));

    if (mysqli_num_rows($viewGO) > 0) {
        echo '';
    } else {
        // header("");
    }
}
?>

<div class="">
    <div class="jumbotron text-center Top3C">
        <h1 id="Pamagat">Sample Title</h1>
        <h2 id="SubPamagat">Your Reviewer Sample</h2>

        <div class="row">
            <div class="col-sm-4">
                <br>
                <h2>Welcome User!</h2>
            </div>

            <div class="col-sm-4">
                <br><br>
                <a href="Login Form.php"><button class="btn btn-info btn-bigger">Sign Up / Log In</button></a>
            </div>

            <div class="col-sm-4">
                <img src="Pictures/Logo.png" alt="" height="128">
            </div>
        </div>
    </div>
</div> 

<a href="Subject Choices.html"><button class="btn btn-info bigBtns">Start Quiz</button></a> &nbsp;&nbsp;&nbsp;&nbsp;
<a href="List of Subjects.php"><button class="btn btn-info bigBtns">Score Records</button></a> &nbsp;&nbsp;&nbsp;&nbsp;
<a href="Credits.html"><button class="btn btn-info bigBtns">???</button></a>

</body>
</html>

