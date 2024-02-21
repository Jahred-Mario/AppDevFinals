<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operating System</title>

    <link rel="stylesheet" href="Extensions/Bootstrap 3.css">
    <script src="Extensions/Bootstrap 3.js"></script>

    <link rel="stylesheet" href="Custom.css">
    <script src="OperatingSystem.js"></script>
</head>
<body style="background-image: url('Pictures/SubBG.jpg'); background-size: 100%;" onload="titleEdit()">

<div class="">
    <div class="jumbotron text-center Top3C">
        <h1>Operating System</h1>

        <a href="LoggedIndex.php"><button class="btn btn-info btn-bigger">Back to Menu</button></a>
        <a href="Subject Choices.html"><button class="btn btn-info btn-bigger">Back to Subjects</button></a>
    </div>
</div>

<div class="container">
    <div class="jumbotron text-center Content3C">
        <form action="OperatingSystem.php" method="post">
            <button name="Begin" type="" class="btn btn-info"  id="" onclick="">Start</button>
        </form>
    </div>
</div>

<form action="OperatingSystem.php" method="post">

<?php
if (isset($_COOKIE["Back"])) {
    include("Connect.php");

    $sql = "UPDATE userlogin SET OSScore = 0 WHERE Username = '" . $_COOKIE["Username"] . "' ";
}


if (isset($_COOKIE["Username"])) {
    if(isset($_POST["Begin"])) {
        include("Connect.php");

        //$sql = "SELECT * FROM userlogin";
        $sql = "UPDATE userlogin SET OSScore = 0 WHERE Username = '" . $_COOKIE["Username"] . "' ";
        
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q1">
                    <div class="jumbotron Content3C">
                        <h2>1. The process being created.</h2>
                        <h3><button name="Correct1" class="btn btn-info">a.) New State</button></h3>
                        <h3><button name="Wrong1" class="btn btn-info">b) Terminated State</button></h3>
                        <h3><button name="Wrong1" class="btn btn-info">c) Ready State</button></h3>
                        <h3><button name="Wrong1" class="btn btn-info">d) Running State</button></h3>
                    </div>
                </div>
            ';
        }
    }
}

if (isset($_COOKIE["Username"])) {
    if (isset($_POST["Correct1"])) {
        include("Connect.php");
    
        $sql = "UPDATE userlogin SET OSScore = OSScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q2">
                    <div class="jumbotron Content3C">
                        <h2>2. The process has finished execution.</h2>
                        <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">a.) New State</button></h3>
                        <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">b.) Close State</button></h3>
                        <h3><button name="Correct2" onclick="Q1" class="btn btn-info">c.) Terminated State</button></h3>
                        <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">d.) Ready State</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong1"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q2">
                <div class="jumbotron Content3C">
                    <h2>2. The process has finished execution.</h2>
                    <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">a.) New State</button></h3>
                    <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">b.) Close State</button></h3>
                    <h3><button name="Correct2" onclick="Q1" class="btn btn-info">c.) Terminated State</button></h3>
                    <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">d.) Ready State</button></h3>
                </div>
            </div>
        ';
    }
} else {
    echo "Who are you?";
    header("Location: index.php");
}



if (isset($_COOKIE["Username"])) {
    if (isset($_POST["Correct2"])) {
        include("Connect.php");
    
        $sql = "UPDATE userlogin SET OSScore = OSScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q3">
                    <div class="jumbotron Content3C">
                        <h2>3. A certain store that allows the operating system to locate key information about a process</h2>
                        <h3><button name="Correct3" onclick="Q2" class="btn btn-info">a) PCB</button></h3>
                        <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">b.) FB</button></h3>
                        <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">c.) FT</button></h3>
                        <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">d.) DBMS</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong2"])) {
        include("Connect.php");

        echo '
        <div class="container" id="Q3">
        <div class="jumbotron Content3C">
            <h2>3. A certain store that allows the operating system to locate key information about a process</h2>
            <h3><button name="Correct3" onclick="Q2" class="btn btn-info">a) PCB</button></h3>
            <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">b.) FB</button></h3>
            <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">c.) FT</button></h3>
            <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">d.) DBMS</button></h3>
        </div>
    </div>
        ';
    }
} else {
    echo "Who are you?";
    header("Location: index.php");
}



if (isset($_COOKIE["Username"])) {
    if (isset($_POST["Correct3"])) {
        include("Connect.php");
    
        $sql = "UPDATE userlogin SET OSScore = OSScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q4">
                    <div class="jumbotron Content3C">
                        <h2>4. A process in an operating system is represented by a _____ structure.</h2>
                        <h3><button name="Correct4" onclick="Q3" class="btn btn-info">a.) Data</button></h3>
                        <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">b.) File</button></h3>
                        <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">c.) Control</button></h3>
                        <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">d.) Process</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong3"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q4">
                <div class="jumbotron Content3C">
                    <h2>4. A process in an operating system is represented by a _____ structure.</h2>
                    <h3><button name="Correct4" onclick="Q3" class="btn btn-info">a.) Data</button></h3>
                    <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">b.) File</button></h3>
                    <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">c.) Control</button></h3>
                    <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">d.) Process</button></h3>
                </div>
            </div>
        ';
    }
} else {
    echo "Who are you?";
    header("Location: index.php");
}



if (isset($_COOKIE["Username"])) {
    if (isset($_POST["Correct4"])) {
        include("Connect.php");
    
        $sql = "UPDATE userlogin SET OSScore = OSScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q5">
                    <div class="jumbotron Content3C">
                        <h2>5. ______ to locate memory of processes.</h2>
                        <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">a.) Array</button></h3>
                        <h3><button name="Correct5" onclick="Q4" class="btn btn-info">b.) Pointer</button></h3>
                        <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">c.) File</button></h3>
                        <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">d.) Function</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong4"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q5">
                <div class="jumbotron Content3C">
                    <h2>5. ______ to locate memory of processes.</h2>
                    <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">a.) Array</button></h3>
                    <h3><button name="Correct5" onclick="Q4" class="btn btn-info">b.) Pointer</button></h3>
                    <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">c.) File</button></h3>
                    <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">d.) Function</button></h3>
                </div>
            </div>
        ';
    }
} else {
    echo "Who are you?";
    header("Location: index.php");
}



if (isset($_COOKIE["Username"])) {
    if (isset($_POST["Correct5"])) {
        include("Connect.php");
    
        $sql = "UPDATE userlogin SET OSScore = OSScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q5">
                    <div class="jumbotron Content3C">
                        <h2>6. A process is unable to run until some external event happens.</h2>
                        <h3><button name="Correct6" onclick="Q5" class="btn btn-info">a.) Blocked State</button></h3>
                        <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">b.) New State</button></h3>
                        <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">c.) Terminated State</button></h3>
                        <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">d.) Ready State</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong5"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q5">
                <div class="jumbotron Content3C">
                    <h2>6. A process is unable to run until some external event happens.</h2>
                    <h3><button name="Correct6" onclick="Q5" class="btn btn-info">a.) Blocked State</button></h3>
                    <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">b.) New State</button></h3>
                    <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">c.) Terminated State</button></h3>
                    <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">d.) Ready State</button></h3>
                </div>
            </div>
        ';
    }
} else {
    echo "Who are you?";
    header("Location: index.php");
}



if (isset($_COOKIE["Username"])) {
    if (isset($_POST["Correct6"])) {
        include("Connect.php");
    
        $sql = "UPDATE userlogin SET OSScore = OSScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q7">
                    <div class="jumbotron Content3C">
                        <h2>7. The process has finished execution.</h2>
                        <h3><button name="Correct7" onclick="Q6" class="btn btn-info">a.) Terminated State</button></h3>
                        <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">b.) Blocked State</button></h3>
                        <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">c.) Ready State</button></h3>
                        <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">d.) Running State</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong6"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q7">
                <div class="jumbotron Content3C">
                    <h2>7. The process has finished execution.</h2>
                    <h3><button name="Correct7" onclick="Q6" class="btn btn-info">a.) Terminated State</button></h3>
                    <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">b.) Blocked State</button></h3>
                    <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">c.) Ready State</button></h3>
                    <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">d.) Running State</button></h3>
                </div>
            </div>
        ';
    }
} else {
    echo "Who are you?";
    header("Location: index.php");
}



if (isset($_COOKIE["Username"])) {
    if (isset($_POST["Correct7"])) {
        include("Connect.php");
    
        $sql = "UPDATE userlogin SET OSScore = OSScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q8">
                    <div class="jumbotron Content3C">
                        <h2>8. An error caused by process due to bug in program.</h2>
                        <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">a.) Bug</button></h3>
                        <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">b.) Code</button></h3>
                        <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">c.) Data</button></h3>
                        <h3><button name="Correct8" onclick="Q7" class="btn btn-info">d.) Fatal</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong7"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q8">
                <div class="jumbotron Content3C">
                    <h2>8. An error caused by process due to bug in program.</h2>
                    <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">a.) Bug</button></h3>
                    <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">b.) Code</button></h3>
                    <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">c.) Data</button></h3>
                    <h3><button name="Correct8" onclick="Q7" class="btn btn-info">d.) Fatal</button></h3>
                </div>
            </div>
        ';
    }
} else {
    echo "Who are you?";
    header("Location: index.php");
}



if (isset($_COOKIE["Username"])) {
    if (isset($_POST["Correct8"])) {
        include("Connect.php");
    
        $sql = "UPDATE userlogin SET OSScore = OSScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q9">
                    <div class="jumbotron Content3C">
                        <h2>9. Operating Systems creates process to provide _____.</h2>
                        <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">a.) System</button></h3>
                        <h3><button name="Correct9W" onclick="Q8" class="btn btn-info">b.) Service</button></h3>
                        <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">c.) Application</button></h3>
                        <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">d.) File</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong8"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q9">
                <div class="jumbotron Content3C">
                    <h2>9. Operating Systems creates process to provide _____.</h2>
                    <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">a.) System</button></h3>
                    <h3><button name="Correct9W" onclick="Q8" class="btn btn-info">b.) Service</button></h3>
                    <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">c.) Application</button></h3>
                    <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">d.) File</button></h3>
                </div>
            </div>
        ';
    }
} else {
    echo "Who are you?";
    header("Location: index.php");
}



if (isset($_COOKIE["Username"])) {
    if (isset($_POST["Correct9"])) {
        include("Connect.php");

        $sql = "UPDATE userlogin SET OSScore = OSScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";

        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q10">
                    <div class="jumbotron Content3C">
                        <h2>10. Contents of the processors ______.</h2>
                        <h3><button name="Correct10" onclick="Q9" class="btn btn-info">a.) Register</button></h3>
                        <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">b.) Process</button></h3>
                        <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">c.) File System</button></h3>
                        <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">d.) Structure</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong9"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q10">
                <div class="jumbotron Content3C">
                    <h2>10. Contents of the processors ______.</h2>
                    <h3><button name="Correct10" onclick="Q9" class="btn btn-info">a.) Register</button></h3>
                    <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">b.) Process</button></h3>
                    <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">c.) File System</button></h3>
                    <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">d.) Structure</button></h3>
                </div>
            </div>
        ';
    }
} else {
    echo "Who are you?";
    header("Location: index.php");
}

?>
</form>

<?php 

if (isset($_COOKIE["Username"])) {
    if (isset($_POST["Correct10"])) {
        include("Connect.php");
    
        $sql = "UPDATE userlogin SET OSScore = OSScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container">
                    <div class="jumbotron Content3C">
                        <a href="OperatingSystemScore.php"><button class="btn btn-info btn-EvenBigger" type="submit" name="TestDone">Submit</button></a>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong10"])) {
        include("Connect.php");

        echo '
            <div class="container">
                <div class="jumbotron Content3C">
                    <a href="OperatingSystemScore.php"><button class="btn btn-info btn-EvenBigger" type="submit" name="TestDone">Submit</button></a>
                </div>
            </div>
        ';
    }
} else {
    echo "Who are you?";
    header("Location: Loggedindex.php");
}

?>

</body>
</html>

<style>

</style>