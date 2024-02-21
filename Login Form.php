<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose a Subject</title>

    <link rel="stylesheet" href="Extensions/Bootstrap 3.css">
    <script src="Extensions/Bootstrap 3.js"></script>

    <link rel="stylesheet" href="Custom.css">
</head>
<body style="background-image: url('Pictures/FrontPageBG.jpg'); background-size: 100%;" onload="titleEdit()">
    
<div class="">
    <div class="jumbotron text-center Top3C">
        <h1>ComScieReview</h1>
        <h2>Your Ultimate CS Companion for Beginner-Friendly Coding</h2>

        <a href="index.php"><button class="btn btn-info">Back to Menu</button></a>
    </div>
</div>

<div class="container text-center">
    <div class="jumbotron  Content3C">
        <h1 class="">Log in</h1>

        <form action="Login Form.php" method="post">
            <h2>Username:</h2>
            <input type="text" name="Username" id="" placeholder="JahredMario123" required/> <br/>

            <h2>Password:</h2>
            <input type="password" name="Password" id="" placeholder="Password" required/>
            
            <br /><br />
            <button class="btn btn-info" type="submit" name="LogSub">Log In</button>
        </form>

        <br /><br /><br />
        <h1>Sign up!</h1>
        
        <form action="Login Form.php" method="post">
            <h2>First Name:</h2>
            <input type="text" name="FirstName" id="" placeholder="First Name" required />

            <h2>Last Name:</h2>
            <input type="text" name="LastName" id="" placeholder="Last Name" required />

            <h2>Username:</h2>
            <input type="text" name="Username" id="" placeholder="MarioRed123" required />

            <h2>Password:</h2>
            <input type="password" name="Password" id="" placeholder="Password" required />

            <br /><br />
            <button class="btn btn-info" type="submit" name="RegSub">Sign Up</button>
        </form>
    </div>
</div>
    
</body>
</html>

<?php
// Register Process
if (isset($_POST["RegSub"])) {
    $a = $_POST["FirstName"];
    $b = $_POST["LastName"];
    $c = $_POST["Username"];
    $d = $_POST["Password"];
    
    include("Connect.php"); // Connects to Database

    $verif = "SELECT Username FROM userlogin WHERE Username = '$a'"; // I-verify kung nasa Database ba si Username
    $res = mysqli_query($con, $verif); // Result ng SQL query (Connect sa database, then verify)
    $count = mysqli_num_rows($res); // Bilangin 

    if ($count == 0) {
        $ins = "INSERT INTO userlogin (Firstname, LastName, Username, Password) VALUES ('$a', '$b', '$c', '$d')";
        mysqli_query($con, $ins);
        echo "Successfully Registered!";
    } else
        echo "<h1>$a already exists, try another one.</h1>";
}

// Log in Process
if (isset($_POST["LogSub"])) {
    $a = $_POST["Username"];
    $b = $_POST["Password"];

    include("Connect.php");
    setcookie("Username", $_POST["Username"], time() + 3600);

    $verif = "SELECT Username FROM userlogin WHERE Username = '$a'"; // I-verify kung nasa Database ba si Username
    $res = mysqli_query($con, $verif); // Result ng SQL query (Connect sa database, then verify)
    $count = mysqli_num_rows($res); // Bilangin 

    if ($count == 0)
        echo "<h1>$a doesn't exist</h1>";
    else 
        header("Location: LoggedIndex.php");
}
?>