<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Development</title>

    <link rel="stylesheet" href="Extensions/Bootstrap 3.css">
    <script src="Extensions/Bootstrap 3.js"></script>

    <link rel="stylesheet" href="Custom.css">
    <script src="AlgorithmAndComplexity.js"></script>
</head>
<body style="background-image: url('Pictures/SubBG.jpg'); background-size: 100%;">

<div class="">
    <div class="jumbotron text-center Top3C">
        <h1>Application Development</h1>

        <a href="LoggedIndex.php"><button class="btn btn-info btn-bigger">Back to Menu</button></a>
        <a href="Subject Choices.html"><button class="btn btn-info btn-bigger">Back to Subjects</button></a>
    </div>
</div>

<div class="container">
    <div class="jumbotron text-center Content3C">
        <form action="ApplicationDevelopment.php" method="post">
            <button name="Begin" type="" class="btn btn-info"  id="" onclick="">Start</button>
        </form>
    </div>
</div>

<form action="ApplicationDevelopment.php" method="post">

<?php
if (isset($_COOKIE["Back"])) {
    include("Connect.php");

    $sql = "UPDATE userlogin SET AppDevScore = 0 WHERE Username = '" . $_COOKIE["Username"] . "' ";
}


if (isset($_COOKIE["Username"])) {
    if(isset($_POST["Begin"])) {
        include("Connect.php");

        //$sql = "SELECT * FROM userlogin";
        $sql = "UPDATE userlogin SET AppDevScore = 0 WHERE Username = '" . $_COOKIE["Username"] . "' ";
        
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q1">
                    <div class="jumbotron Content3C">
                        <h2>1. Which programming language is commonly used for Android app development?</h2>
                        <h3><button name="Wrong1" class="btn btn-info">a.) Output</button></h3>
                        <h3><button name="Wrong1" class="btn btn-info">b.) Algorithm </button></h3>
                        <h3><button name="Wrong1" class="btn btn-info">c.) Unambiguous</button></h3>
                        <h3><button name="Correct1" class="btn btn-info">d.) Pseudocode</button></h3>
                    </div>
                </div>
            ';
        }
    }
}

if (isset($_COOKIE["Username"])) {
    if (isset($_POST["Correct1"])) {
        include("Connect.php");
    
        $sql = "UPDATE userlogin SET AppDevScore = AAppDevScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q2">
                    <div class="jumbotron Content3C">
                        <h2>2. Algorithms must terminate after a finite number of steps.</h2>
                        <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">a.) Input</button></h3>
                        <h3><button name="Correct2" onclick="Q1" class="btn btn-info">b.) Finiteness</button></h3>
                        <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">c.) Feasibility</button></h3>
                        <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">d.) Independent</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong1"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q2">
                <div class="jumbotron Content3C">
                    <h2>2. Algorithms must terminate after a finite number of steps.</h2>
                    <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">a.) Input</button></h3>
                    <h3><button name="Correct2" onclick="Q1" class="btn btn-info">b.) Finiteness</button></h3>
                    <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">c.) Feasibility</button></h3>
                    <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">d.) Independent</button></h3>
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
    
        $sql = "UPDATE userlogin SET AppDevScore = AppDevScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q3">
                    <div class="jumbotron Content3C">
                        <h2>3.____ is the total memory space required by the program for its execution.</h2>
                        <h3><button name="Correct3" onclick="Q2" class="btn btn-info">a.) Space Complexity</button></h3>
                        <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">b.) Average Time Complexity</button></h3>
                        <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">c.) Best Time Complexity</button></h3>
                        <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">d.) Time Complexity</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong2"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q3">
                <div class="jumbotron Content3C">
                    <h2>3.____ is the total memory space required by the program for its execution.</h2>
                    <h3><button name="Correct3" onclick="Q2" class="btn btn-info">a.) Space Complexity</button></h3>
                    <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">b.) Average Time Complexity</button></h3>
                    <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">c.) Best Time Complexity</button></h3>
                    <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">d.) Time Complexity</button></h3>
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
    
        $sql = "UPDATE userlogin SET AppDevScore = AppDevScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q4">
                    <div class="jumbotron Content3C">
                        <h2>4. An algorithm should have 0 or more well-defined inputs.</h2>
                        <h3><button name="Correct4" onclick="Q3" class="btn btn-info">a.) Input</button></h3>
                        <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">b.) Unambiguous</button></h3>
                        <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">c.) Output</button></h3>
                        <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">d.) Independent</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong3"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q4">
                <div class="jumbotron Content3C">
                    <h2>4. What does API stand for in the context of software development?</h2>
                    <h3><button name="Correct4" onclick="Q3" class="btn btn-info">a.) Application Programming Interface</button></h3>
                    <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">b.) Automated Programming Instruction</button></h3>
                    <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">c.) Advanced Program Interaction</button></h3>
                    <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">d.) Algorithmic Program Integration</button></h3>
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
    
        $sql = "UPDATE userlogin SET AppDevScore = AppDevScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q5">
                    <div class="jumbotron Content3C">
                        <h2>5. What is the purpose of unit testing in software development?</h2>
                        <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">a.) Testing the entire application</button></h3>
                        <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">b.) Testing the user interface</button></h3>
                        <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">c.) Testing individual components or functions</button></h3>
                        <h3><button name="Correct5" onclick="Q4" class="btn btn-info">d.) Testing server performance</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong4"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q5">
                <div class="jumbotron Content3C">
                    <h2>5. What is the purpose of unit testing in software development?</h2>
                    <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">a.) Testing the entire application</button></h3>
                    <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">b.) Testing the user interface</button></h3>
                    <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">c.) Testing individual components or functions</button></h3>
                    <h3><button name="Correct5" onclick="Q4" class="btn btn-info">d.) Testing server performance</button></h3>
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
    
        $sql = "UPDATE userlogin SET AppDevScore = AppDevScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q6">
                    <div class="jumbotron Content3C">
                        <h2>6. Which of the following is NOT a commonly used database management system in application development?</h2>
                        <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">a.) MySQL </button></h3>
                        <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">b.) SQLite</button></h3>
                        <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">c.) MongoDB</button></h3>
                        <h3><button name="Correct6" onclick="Q5" class="btn btn-info">d.) PHP</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong5"])) {
        include("Connect.php");

        echo '
        <div class="container" id="Q6">
        <div class="jumbotron Content3C">
            <h2>6. Which of the following is NOT a commonly used database management system in application development?</h2>
            <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">a.) MySQL </button></h3>
            <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">b.) SQLite</button></h3>
            <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">c.) MongoDB</button></h3>
            <h3><button name="Correct6" onclick="Q5" class="btn btn-info">d.) PHP</button></h3>
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
    
        $sql = "UPDATE userlogin SET AppDevScore = AppDevScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q7">
                    <div class="jumbotron Content3C">
                        <h2>7. What is the term used for the process of converting source code into machine code?</h2>
                        <h3><button name="Correct7" onclick="Q6" class="btn btn-info">a.) Compilation</button></h3>
                        <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">b.)Interpretation</button></h3>
                        <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">c.) Debugging </button></h3>
                        <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">d.) Documentation</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong6"])) {
        include("Connect.php");

        echo '
        <div class="container" id="Q7">
        <div class="jumbotron Content3C">
            <h2>7. What is the term used for the process of converting source code into machine code?</h2>
            <h3><button name="Correct7" onclick="Q6" class="btn btn-info">a.) Compilation</button></h3>
            <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">b.)Interpretation</button></h3>
            <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">c.) Debugging </button></h3>
            <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">d.) Documentation</button></h3>
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
    
        $sql = "UPDATE userlogin SET AppDevScore = AppDevScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
            <div class="container" id="Q8">
            <div class="jumbotron Content3C">
                <h2>8. Which of the following is a popular framework for building web applications using JavaScript?</h2>
                <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">a.) Django </button></h3>
                <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">b.)  Ruby on Rails</button></h3>
                <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">c.) Laravel</button></h3>
                <h3><button name="Correct8" onclick="Q7" class="btn btn-info">d.) React</button></h3>
            </div>
        </div>
            ';
        }
    } else if (isset($_POST["Wrong7"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q8">
                <div class="jumbotron Content3C">
                    <h2>8. Which of the following is a popular framework for building web applications using JavaScript?</h2>
                    <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">a.) Django </button></h3>
                    <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">b.)  Ruby on Rails</button></h3>
                    <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">c.) Laravel</button></h3>
                    <h3><button name="Correct8" onclick="Q7" class="btn btn-info">d.) React</button></h3>
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
    
        $sql = "UPDATE userlogin SET AppDevScore = AppDevScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q9">
                    <div class="jumbotron Content3C">
                        <h2>9. Which software development methodology emphasizes continuous integration and delivery?</h2>
                        <h3><button name="Correct9" onclick="Q8" class="btn btn-info">a.) Waterfall</button></h3>
                        <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">b.) Agile</button></h3>
                        <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">c.) Scrum</button></h3>
                        <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">d.) DevOps</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong8"])) {
        include("Connect.php");

        echo '
        <div class="container" id="Q9">
        <div class="jumbotron Content3C">
            <h2>9. Which software development methodology emphasizes continuous integration and delivery?</h2>
            <h3><button name="Correct9" onclick="Q8" class="btn btn-info">a.) Waterfall</button></h3>
            <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">b.) Agile</button></h3>
            <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">c.) Scrum</button></h3>
            <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">d.) DevOps</button></h3>
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

        $sql = "UPDATE userlogin SET AppDevScore = AppDevScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";

        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q10">
                    <div class="jumbotron Content3C">
                        <h2>10. What is the purpose of MVC architecture in software development?</h2>
                        <h3><button name="Correct10" onclick="Q9" class="btn btn-info">a.) Managing version control</button></h3>
                        <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">b.)Organizing code into separate layers</button></h3>
                        <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">c.) Creating user interfaces</button></h3>
                        <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">d.) Testing application compatibility</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong9"])) {
        include("Connect.php");

        echo '
        <div class="container" id="Q10">
                    <div class="jumbotron Content3C">
                        <h2>10. What is the purpose of MVC architecture in software development?</h2>
                        <h3><button name="Correct10" onclick="Q9" class="btn btn-info">a.) Managing version control</button></h3>
                        <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">b.)Organizing code into separate layers</button></h3>
                        <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">c.) Creating user interfaces</button></h3>
                        <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">d.) Testing application compatibility</button></h3>
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
    
        $sql = "UPDATE userlogin SET AppDevScore = AppDevScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container">
                    <div class="jumbotron Content3C">
                        <a href="ApplicationDevelopmentScore.php"><button class="btn btn-info btn-EvenBigger" type="submit" name="TestDone">Submit</button></a>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong10"])) {
        include("Connect.php");

        echo '
            <div class="container">
                <div class="jumbotron Content3C">
                    <a href="ApplicationDevelopmentScore.php"><button class="btn btn-info btn-EvenBigger" type="submit" name="TestDone">Submit</button></a>
                </div>
            </div>
        ';
    }
} else {
    echo "Who are you?";
    header("Location: index.php");
}