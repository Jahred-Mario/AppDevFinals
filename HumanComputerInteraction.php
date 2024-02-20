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
    <script src="HumanComputerInteraction.js"></script>
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
        <h1>HumanComputerInteraction</h1>

        <form action="HumanComputerInteraction.php" method="post">
            <button name="Begin" type="" class="btn btn-info"  id="" onclick="">Start</button>
        </form>
        
    </div>
</div>

<form action="HumanComputerInteraction.php" method="post">

<?php
if (isset($_COOKIE["Back"])) {
    include("Connect.php");

    $sql = "UPDATE userlogin SET HCIScore = 0 WHERE Username = '" . $_COOKIE["Username"] . "' ";
}


if (isset($_COOKIE["Username"])) {
    if(isset($_POST["Begin"])) {
        include("Connect.php");

        //$sql = "SELECT * FROM userlogin";
        $sql = "UPDATE userlogin SET HCIScore = 0 WHERE Username = '" . $_COOKIE["Username"] . "' ";
        
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q1">
                    <div class="jumbotron Content3C">
                        <h2>1. What is the primary goal of Human-Computer Interaction (HCI)?</h2>
                        <h3><button name="Wrong1" class="btn btn-info">a.) Increasing computer processing speed</button></h3>
                        <h3><button name="Correct1" class="btn btn-info">b.) Enhancing the user experience</button></h3>
                        <h3><button name="Wrong1" class="btn btn-info">c.) Reducing hardware costs</button></h3>
                        <h3><button name="Wrong1" class="btn btn-info">d.) Improving network connectivity</button></h3>
                    </div>
                </div>
            ';
        }
    }
}

if (isset($_COOKIE["Username"])) {
    if (isset($_POST["Correct1"])) {
        include("Connect.php");
    
        $sql = "UPDATE userlogin SET HCIScore = HCIScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q2">
                    <div class="jumbotron Content3C">
                        <h2>2. Which of the following is NOT a principle of user interface design?</h2>
                        <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">a.) Consistency</button></h3>
                        <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">b.) Feedback</button></h3>
                        <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">c.) Complexity</button></h3>
                        <h3><button name="Correct2" onclick="Q1" class="btn btn-info">d.) IVisibility</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong1"])) {
        include("Connect.php");

        echo '
        <div class="container" id="Q2">
        <div class="jumbotron Content3C">
            <h2>2. Which of the following is NOT a principle of user interface design?</h2>
            <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">a.) Consistency</button></h3>
            <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">b.) Feedback</button></h3>
            <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">c.) Complexity</button></h3>
            <h3><button name="Correct2" onclick="Q1" class="btn btn-info">d.) IVisibility</button></h3>
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
    
        $sql = "UPDATE userlogin SET HCIScore = HCIScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q3">
                    <div class="jumbotron Content3C">
                        <h2>3.What does UX stand for in the context of Human-Computer Interaction?</h2>
                        <h3><button name="Correct3" onclick="Q2" class="btn btn-info">a.) User Experience</button></h3>
                        <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">b.)Universal Experience</button></h3>
                        <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">c.)User Execution</button></h3>
                        <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">d.) Unique Experiment</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong2"])) {
        include("Connect.php");

        echo '
        <div class="container" id="Q3">
        <div class="jumbotron Content3C">
            <h2>3.What does UX stand for in the context of Human-Computer Interaction?</h2>
            <h3><button name="Correct3" onclick="Q2" class="btn btn-info">a.) User Experience</button></h3>
            <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">b.)Universal Experience</button></h3>
            <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">c.)User Execution</button></h3>
            <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">d.) Unique Experiment</button></h3>
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
    
        $sql = "UPDATE userlogin SET HCIScore = HCIScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q4">
                    <div class="jumbotron Content3C">
                        <h2>4. Which term refers to the study of how people interact with computers and to the design of systems that address human needs?</h2>
                        <h3><button name="Correct4" onclick="Q3" class="btn btn-info">a.) Human-Centered Computing</button></h3>
                        <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">b.) Software Engineering</button></h3>
                        <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">c.) Data Science</button></h3>
                        <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">d.) Cryptography</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong3"])) {
        include("Connect.php");

        echo '
        <div class="container" id="Q4">
        <div class="jumbotron Content3C">
            <h2>4. Which term refers to the study of how people interact with computers and to the design of systems that address human needs?</h2>
            <h3><button name="Correct4" onclick="Q3" class="btn btn-info">a.) Human-Centered Computing</button></h3>
            <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">b.) Software Engineering</button></h3>
            <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">c.) Data Science</button></h3>
            <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">d.) Cryptography</button></h3>
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
    
        $sql = "UPDATE userlogin SET HCIScore = HCIScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q5">
                    <div class="jumbotron Content3C">
                        <h2>5. What is the purpose of usability testing in the context of HCI?</h2>
                        <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">a.) Testing hardware components</button></h3>
                        <h3><button name="Correct5" onclick="Q4" class="btn btn-info">b.) Evaluating the user-friendliness of a system</button></h3>
                        <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">c.) Assessing network security</button></h3>
                        <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">d.) Analyzing data patterns</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong4"])) {
        include("Connect.php");

        echo '
        <div class="container" id="Q5">
        <div class="jumbotron Content3C">
            <h2>5. What is the purpose of usability testing in the context of HCI?</h2>
            <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">a.) Testing hardware components</button></h3>
            <h3><button name="Correct5" onclick="Q4" class="btn btn-info">b.) Evaluating the user-friendliness of a system</button></h3>
            <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">c.) Assessing network security</button></h3>
            <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">d.) Analyzing data patterns</button></h3>
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
    
        $sql = "UPDATE userlogin SET HCIScore = HCIScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q6">
                    <div class="jumbotron Content3C">
                        <h2>6. Which of the following is NOT a common usability heuristic proposed by Jakob Nielsen?</h2>
                        <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">a.) Visibility of system status</button></h3>
                        <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">b.) Recognition rather than recall</button></h3>
                        <h3><button name="Correct6" onclick="Q5" class="btn btn-info">c.) Error prevention</button></h3>
                        <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">d.) Multi-tasking capabilities</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong5"])) {
        include("Connect.php");

        echo '
        <div class="container" id="Q6">
                    <div class="jumbotron Content3C">
                        <h2>6. Which of the following is NOT a common usability heuristic proposed by Jakob Nielsen?</h2>
                        <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">a.) Visibility of system status</button></h3>
                        <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">b.) Recognition rather than recall</button></h3>
                        <h3><button name="Correct6" onclick="Q5" class="btn btn-info">c.) Error prevention</button></h3>
                        <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">d.) Multi-tasking capabilities</button></h3>
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
    
        $sql = "UPDATE userlogin SET HCIScore = HCIScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q7">
                    <div class="jumbotron Content3C">
                        <h2>7. What is the term used to describe the process of designing the layout and functionality of user interfaces?</h2>
                        <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">a.) Interface Architecture</button></h3>
                        <h3><button name="Correct7" onclick="Q6" class="btn btn-info">b.)Interaction Design</button></h3>
                        <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">c.) System Engineering </button></h3>
                        <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">d.) Network Protocols</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong6"])) {
        include("Connect.php");

        echo '
        <div class="container" id="Q7">
                    <div class="jumbotron Content3C">
                        <h2>7. What is the term used to describe the process of designing the layout and functionality of user interfaces?</h2>
                        <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">a.) Interface Architecture</button></h3>
                        <h3><button name="Correct7" onclick="Q6" class="btn btn-info">b.)Interaction Design</button></h3>
                        <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">c.) System Engineering </button></h3>
                        <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">d.) Network Protocols</button></h3>
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
    
        $sql = "UPDATE userlogin SET HCIScore = HCIScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
            <div class="container" id="Q8">
            <div class="jumbotron Content3C">
                <h2>8.  Which of the following is an example of an assistive technology designed to enhance accessibility for individuals with disabilities?</h2>
                <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">a.) Virtual Reality headset</button></h3>
                <h3><button name="Correct8" onclick="Q7" class="btn btn-info">b.)  Screen reader software</button></h3>
                <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">c.) Gaming controller</button></h3>
                <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">d.) Smartwatch</button></h3>
            </div>
        </div>
            ';
        }
    } else if (isset($_POST["Wrong7"])) {
        include("Connect.php");

        echo '
        <div class="container" id="Q8">
        <div class="jumbotron Content3C">
            <h2>8.  Which of the following is an example of an assistive technology designed to enhance accessibility for individuals with disabilities?</h2>
            <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">a.) Virtual Reality headset</button></h3>
            <h3><button name="Correct8" onclick="Q7" class="btn btn-info">b.)  Screen reader software</button></h3>
            <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">c.) Gaming controller</button></h3>
            <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">d.) Smartwatch</button></h3>
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
    
        $sql = "UPDATE userlogin SET HCIScore = HCIScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q9">
                    <div class="jumbotron Content3C">
                        <h2>9. What is the term used to describe the process of adapting a system to meet the needs of individuals with disabilities?</h2>
                        <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">a.) Universal design</button></h3>
                        <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">b.) Accessible design</button></h3>
                        <h3><button name="Correct9" onclick="Q8" class="btn btn-info">c.) Inclusive design </button></h3>
                        <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">d.) Adaptive design</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong8"])) {
        include("Connect.php");

        echo '
        <div class="container" id="Q9">
                    <div class="jumbotron Content3C">
                        <h2>9. What is the term used to describe the process of adapting a system to meet the needs of individuals with disabilities?</h2>
                        <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">a.) Universal design</button></h3>
                        <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">b.) Accessible design</button></h3>
                        <h3><button name="Correct9" onclick="Q8" class="btn btn-info">c.) Inclusive design </button></h3>
                        <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">d.) Adaptive design</button></h3>
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

        $sql = "UPDATE userlogin SET HCIScore = HCIScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";

        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q10">
                    <div class="jumbotron Content3C">
                        <h2>10. Which discipline focuses on the design and evaluation of interactive computing systems for human use and the study of major phenomena surrounding them?</h2>
                        <h3><button name="Correct10" onclick="Q9" class="btn btn-info">a.) Human-Computer Interaction</button></h3>
                        <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">b.)Computer Graphics</button></h3>
                        <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">c.)  Artificial Intelligence</button></h3>
                        <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">d.) Computer Networks</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong9"])) {
        include("Connect.php");

        echo '
        <div class="container" id="Q10">
                    <div class="jumbotron Content3C">
                        <h2>10. Which discipline focuses on the design and evaluation of interactive computing systems for human use and the study of major phenomena surrounding them?</h2>
                        <h3><button name="Correct10" onclick="Q9" class="btn btn-info">a.) Human-Computer Interaction</button></h3>
                        <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">b.)Computer Graphics</button></h3>
                        <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">c.)  Artificial Intelligence</button></h3>
                        <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">d.) Computer Networks</button></h3>
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
    
        $sql = "UPDATE userlogin SET HCIScore = HCIScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container">
                    <div class="jumbotron Content3C">
                        <a href="HumanComputerInteractionScore.php"><button class="btn btn-info btn-EvenBigger" type="submit" name="TestDone">Submit</button></a>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong10"])) {
        include("Connect.php");

        echo '
            <div class="container">
                <div class="jumbotron Content3C">
                    <a href="HumanComputerInteractionScore.php"><button class="btn btn-info btn-EvenBigger" type="submit" name="TestDone">Submit</button></a>
                </div>
            </div>
        ';
    }
} else {
    echo "Who are you?";
    header("Location: index.php");
}