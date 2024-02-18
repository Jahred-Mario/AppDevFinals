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

    <link rel="stylesheet" href="Custom.css">
</head>
<body>

<?php
include("Connect.php");

// Cookies (Meaning: If you're already signed in, naglo-load pa rin yung data mo)
if (isset($_POST["UserName"])) {
    $view = "SELECT Username, Password FROM userlogin WHERE Username = ". $_COOKIE["Username"] . " ";
    $viewGO = mysqli_query($con, $view) or die(mysqli_error($con));

    if (mysqli_num_rows($viewGO) > 0) {
        echo '
            <div class="">
                <div class="jumbotron text-center Top3C">
                    <h1>Sample Title</h1>
                    <h2>Your Reviewer Sample</h2>
            
                    <div class="row">
                        <div class="col-sm-4">
                            <h2>Welcome, '. $_COOKIE["Username"] .'</h2>
                        </div>
            
                        <div class="col-sm-4">
                            <a href="Login Form.php"><button class="btn btn-info">Sign Up / Log In</button></a>
                        </div>
            
                        <div class="col-sm-4">
                            <h2>Logo ata here?</h2>
                        </div>
                    </div>
                </div>
            </div> ';
    } else {
        echo '
        
        ';
    }
}
?>

<!--
<div class="">
    <div class="jumbotron text-center Top3C">
        <h1>Sample Title</h1>
        <h2>Your Reviewer Sample</h2>

        <div class="row">
            <div class="col-sm-4">
                <h2>Welcome, User!</h2>
            </div>

            <div class="col-sm-4">
                <a href="Login Form.php"><button class="btn btn-info">Sign Up / Log In</button></a>
            </div>

            <div class="col-sm-4">
                <h2>Logo ata here?</h2>
            </div>
        </div>
    </div>
</div>
-->

<div class="container">
    <div class="jumbotron text-center Content3C">
        <a href="Subject Choices.html"><button class="btn btn-info bigBtns">Start Quiz</button></a> <br><br>
        <a href="List of Subjects.html"><button class="btn btn-info bigBtns">Score Records</button></a> <br><br>
        <a href="Credits.html"><button class="btn btn-info bigBtns">Credits</button></a>
    </div>
</div>
    
</body>
</html>

