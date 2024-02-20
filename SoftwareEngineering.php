<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Engineering</title>

    <link rel="stylesheet" href="Extensions/Bootstrap 3.css">
    <script src="Extensions/Bootstrap 3.js"></script>

    <link rel="stylesheet" href="Custom.css">
    <script src="SoftwareEngineering.js"></script>
</head>
<body>

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
        <h1>Software Engineering</h1>

        <form action="SoftwareEngineering.php" method="post">
            <button name="Begin" type="" class="btn btn-info"  id="" onclick="">Start</button>
        </form>
        
    </div>
</div>

<form action="SoftwareEngineering.php" method="post">

<?php
if (isset($_COOKIE["Back"])) {
    include("Connect.php");

    $sql = "UPDATE userlogin SET SoftEngScore = 0 WHERE Username = '" . $_COOKIE["Username"] . "' ";
}


if (isset($_COOKIE["Username"])) {
    if(isset($_POST["Begin"])) {
        include("Connect.php");

        //$sql = "SELECT * FROM userlogin";
        $sql = "UPDATE userlogin SET SoftEngScore = 0 WHERE Username = '" . $_COOKIE["Username"] . "' ";
        
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q1">
                    <div class="jumbotron Content3C">
                        <h2>1. What is software engineering?</h2>
                        <h3><button name="Wrong1" class="btn btn-info">a.) The process of building physical hardware components</button></h3>
                        <h3><button name="Correct1" class="btn btn-info">b) he systematic approach to the development, operation, and maintenance of software</button></h3>
                        <h3><button name="Wrong1" class="btn btn-info">c) The study of computer science theory</button></h3>
                        <h3><button name="Wrong1" class="btn btn-info">d) The process of designing user interfaces</button></h3>
                    </div>
                </div>
            ';
        }
    }
}

if (isset($_COOKIE["Username"])) {
    if (isset($_POST["Correct1"])) {
        include("Connect.php");
    
        $sql = "UPDATE userlogin SET SoftEngScore = SoftEngScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q2">
                    <div class="jumbotron Content3C">
                        <h2>2. What is the purpose of requirements engineering in software development?</h2>
                        <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">a.) To design the user interface</button></h3>
                        <h3><button name="Correct2" onclick="Q1" class="btn btn-info">b.) To gather and analyze user needs and system requirements</button></h3>
                        <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">c.) To write code for the application</button></h3>
                        <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">d.) To test the software for bugs</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong1"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q2">
                <div class="jumbotron Content3C">
                    <h2>2. What is the purpose of requirements engineering in software development?</h2>
                    <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">a.) To design the user interface</button></h3>
                    <h3><button name="Correct2" onclick="Q1" class="btn btn-info">b.) To gather and analyze user needs and system requirements</button></h3>
                    <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">c.) To write code for the application</button></h3>
                    <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">d.) To test the software for bugs</button></h3>
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
    
        $sql = "UPDATE userlogin SET SoftEngScore = SoftEngScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q3">
                    <div class="jumbotron Content3C">
                        <h2>3. Which software development methodology emphasizes incremental, iterative development?</h2>
                        <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">a) Waterfall</button></h3>
                        <h3><button name="Correct3" onclick="Q2" class="btn btn-info">b.) Agile</button></h3>
                        <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">c.) Spiral</button></h3>
                        <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">d.) RAD (Rapid Application Development)</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong2"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q3">
                <div class="jumbotron Content3C">
                    <h2>3. Which software development methodology emphasizes incremental, iterative development?</h2>
                    <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">a) Waterfall</button></h3>
                    <h3><button name="Correct3" onclick="Q2" class="btn btn-info">b.) Agile</button></h3>
                    <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">c.) Spiral</button></h3>
                    <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">d.) RAD (Rapid Application Development)</button></h3>
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
    
        $sql = "UPDATE userlogin SET SoftEngScore = SoftEngScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q4">
                    <div class="jumbotron Content3C">
                        <h2>4. What is the term used to describe the process of finding and fixing defects or problems in software?</h2>
                        <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">a.) Debugging</button></h3>
                        <h3><button name="Correct4" onclick="Q3" class="btn btn-info">b.) Documentation</button></h3>
                        <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">c.) Deployment</button></h3>
                        <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">d.) Design</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong3"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q4">
                <div class="jumbotron Content3C">
                    <h2>4. What is the term used to describe the process of finding and fixing defects or problems in software?</h2>
                    <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">a.) Debugging</button></h3>
                    <h3><button name="Correct4" onclick="Q3" class="btn btn-info">b.) Documentation</button></h3>
                    <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">c.) Deployment</button></h3>
                    <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">d.) Design</button></h3>
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
    
        $sql = "UPDATE userlogin SET SoftEngScore = SoftEngScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q5">
                    <div class="jumbotron Content3C">
                        <h2>5. Which phase of the software development life cycle typically involves creating a detailed plan for how the software will be built?</h2>
                        <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">a.) Analysis</button></h3>
                        <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">b.) Design</button></h3>
                        <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">c.) Implementation</button></h3>
                        <h3><button name="Correct5" onclick="Q4" class="btn btn-info">d.) Planning</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong4"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q5">
                <div class="jumbotron Content3C">
                    <h2>5. Which phase of the software development life cycle typically involves creating a detailed plan for how the software will be built?</h2>
                    <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">a.) Analysis</button></h3>
                    <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">b.) Design</button></h3>
                    <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">c.) Implementation</button></h3>
                    <h3><button name="Correct5" onclick="Q4" class="btn btn-info">d.) Planning</button></h3>
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
    
        $sql = "UPDATE userlogin SET SoftEngScore = SoftEngScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q5">
                    <div class="jumbotron Content3C">
                        <h2>6. What is the purpose of software testing in the software development process?</h2>
                        <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">a.) To write code for the application</button></h3>
                        <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">b.) To gather user requirements</button></h3>
                        <h3><button name="Correct6" onclick="Q5" class="btn btn-info">c.) To identify defects and ensure quality</button></h3>
                        <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">d.) To create user documentation</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong5"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q5">
                <div class="jumbotron Content3C">
                    <h2>6. What is the purpose of software testing in the software development process?</h2>
                    <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">a.) To write code for the application</button></h3>
                    <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">b.) To gather user requirements</button></h3>
                    <h3><button name="Correct6" onclick="Q5" class="btn btn-info">c.) To identify defects and ensure quality</button></h3>
                    <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">d.) To create user documentation</button></h3>
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
    
        $sql = "UPDATE userlogin SET SoftEngScore = SoftEngScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q7">
                    <div class="jumbotron Content3C">
                        <h2>7. Which of the following is NOT a common software development model?</h2>
                        <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">a.) Waterfall</button></h3>
                        <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">b.) Agile</button></h3>
                        <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">c.) Spiral</button></h3>
                        <h3><button name="Correct7" onclick="Q6" class="btn btn-info">d.) Parallel</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong6"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q7">
                <div class="jumbotron Content3C">
                    <h2>7. Which of the following is NOT a common software development model?</h2>
                    <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">a.) Waterfall</button></h3>
                    <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">b.) Agile</button></h3>
                    <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">c.) Spiral</button></h3>
                    <h3><button name="Correct7" onclick="Q6" class="btn btn-info">d.) Parallel</button></h3>
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
    
        $sql = "UPDATE userlogin SET SoftEngScore = SoftEngScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q8">
                    <div class="jumbotron Content3C">
                        <h2>8. What is the term used to describe the process of converting a software design into code?</h2>
                        <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">a.) Requirements engineering</button></h3>
                        <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">b.) Analysis</button></h3>
                        <h3><button name="Correct8" onclick="Q7" class="btn btn-info">c.) Implementation</button></h3>
                        <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">d.) Testing</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong7"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q8">
                <div class="jumbotron Content3C">
                    <h2>8. What is the term used to describe the process of converting a software design into code?</h2>
                    <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">a.) Requirements engineering</button></h3>
                    <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">b.) Analysis</button></h3>
                    <h3><button name="Correct8" onclick="Q7" class="btn btn-info">c.) Implementation</button></h3>
                    <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">d.) Testing</button></h3>
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
    
        $sql = "UPDATE userlogin SET SoftEngScore = SoftEngScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q9">
                    <div class="jumbotron Content3C">
                        <h2>9. Which of the following is NOT a software development tool?</h2>
                        <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">a.) Version control system</button></h3>
                        <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">b.) Integrated Development Environment (IDE)</button></h3>
                        <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">c.) Compiler</button></h3>
                        <h3><button name="Correct9" onclick="Q8" class="btn btn-info">d.) Spreadsheet</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong8"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q9">
                <div class="jumbotron Content3C">
                    <h2>9. Which of the following is NOT a software development tool?</h2>
                    <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">a.) Version control system</button></h3>
                    <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">b.) Integrated Development Environment (IDE)</button></h3>
                    <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">c.) Compiler</button></h3>
                    <h3><button name="Correct9" onclick="Q8" class="btn btn-info">d.) Spreadsheet</button></h3>
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

        $sql = "UPDATE userlogin SET SoftEngScore = SoftEngScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";

        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q10">
                    <div class="jumbotron Content3C">
                        <h2>10. Which of the following is a characteristic of the Waterfall model?</h2>
                        <h3><button name="Correct10" onclick="Q9" class="btn btn-info">a.) Iterative development</button></h3>
                        <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">b.) Requirements can change throughout the project</button></h3>
                        <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">c.) Phases are completed sequentially</button></h3>
                        <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">d.) Emphasizes customer collaboration</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong9"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q10">
                <div class="jumbotron Content3C">
                    <h2>10. Which of the following is a characteristic of the Waterfall model?</h2>
                    <h3><button name="Correct10" onclick="Q9" class="btn btn-info">a.) Iterative development</button></h3>
                    <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">b.) Requirements can change throughout the project</button></h3>
                    <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">c.) Phases are completed sequentially</button></h3>
                    <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">d.) Emphasizes customer collaboration</button></h3>
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
    
        $sql = "UPDATE userlogin SET SoftEngScore = SoftEngScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container">
                    <div class="jumbotron Content3C">
                        <a href="SoftwareEngineeringScore.php"><button class="btn btn-info btn-EvenBigger" type="submit" name="TestDone">Submit</button></a>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong10"])) {
        include("Connect.php");

        echo '
            <div class="container">
                <div class="jumbotron Content3C">
                    <a href="SoftwareEngineeringScore.php"><button class="btn btn-info btn-EvenBigger" type="submit" name="TestDone">Submit</button></a>
                </div>
            </div>
        ';
    }
} else {
    echo "Who are you?";
    header("Location: index.php");
}

?>

</body>
</html>

