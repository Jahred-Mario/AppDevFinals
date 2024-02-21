<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intelligent Systems</title>

    <link rel="stylesheet" href="Extensions/Bootstrap 3.css">
    <script src="Extensions/Bootstrap 3.js"></script>

    <link rel="stylesheet" href="Custom.css">
    <script src="IntelligentSystems.js"></script>
</head>
<body style="background-image: url('Pictures/SubBG.jpg'); background-size: 100%;">

<div class="">
    <div class="jumbotron text-center Top3C">
        <h1>Intelligent Systems</h1>

        <a href="LoggedIndex.php"><button class="btn btn-info btn-bigger">Back to Menu</button></a>
        <a href="Subject Choices.html"><button class="btn btn-info btn-bigger">Back to Subjects</button></a>
    </div>
</div>

<div class="container">
    <div class="jumbotron text-center Content3C">
        <form action="IntelligentSystems.php" method="post">
            <button name="Begin" type="" class="btn btn-info"  id="" onclick="">Start</button>
        </form>
        
    </div>
</div>

<form action="IntelligentSystems.php" method="post">

<?php
if (isset($_COOKIE["Back"])) {
    include("Connect.php");

    $sql = "UPDATE userlogin SET IntelSysScore = 0 WHERE Username = '" . $_COOKIE["Username"] . "' ";
}


if (isset($_COOKIE["Username"])) {
    if(isset($_POST["Begin"])) {
        include("Connect.php");

        //$sql = "SELECT * FROM userlogin";
        $sql = "UPDATE userlogin SET IntelSysScore = 0 WHERE Username = '" . $_COOKIE["Username"] . "' ";
        
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q1">
                    <div class="jumbotron Content3C">
                        <h2>1. What is the primary goal of intelligent systems?</h2>
                        <h3><button name="Wrong1" class="btn btn-info">a.) To mimic human behavior exactly</button></h3>
                        <h3><button name="Correct1" class="btn btn-info">b) To automate tasks using AI techniques</button></h3>
                        <h3><button name="Wrong1" class="btn btn-info">c) To replace human decision-making entirely</button></h3>
                        <h3><button name="Wrong1" class="btn btn-info">d) To reduce computational complexity</button></h3>
                    </div>
                </div>
            ';
        }
    }
}

if (isset($_COOKIE["Username"])) {
    if (isset($_POST["Correct1"])) {
        include("Connect.php");
    
        $sql = "UPDATE userlogin SET IntelSysScore = IntelSysScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q2">
                    <div class="jumbotron Content3C">
                        <h2>2. Which branch of AI focuses on developing algorithms that enable computers to learn from and make predictions or decisions based on data?</h2>
                        <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">a.) Natural Language Processing</button></h3>
                        <h3><button name="Correct2" onclick="Q1" class="btn btn-info">b.) Machine Learning</button></h3>
                        <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">c.) Robotics</button></h3>
                        <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">d.) Expert Systems</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong1"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q2">
                <div class="jumbotron Content3C">
                    <h2>2. Which branch of AI focuses on developing algorithms that enable computers to learn from and make predictions or decisions based on data?</h2>
                    <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">a.) Natural Language Processing</button></h3>
                    <h3><button name="Correct2" onclick="Q1" class="btn btn-info">b.) Machine Learning</button></h3>
                    <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">c.) Robotics</button></h3>
                    <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">d.) Expert Systems</button></h3>
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
    
        $sql = "UPDATE userlogin SET IntelSysScore = IntelSysScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q3">
                    <div class="jumbotron Content3C">
                        <h2>3. What is the term used to describe the ability of an AI system to understand, interpret, and generate human-like language?</h2>
                        <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">a.) Sentiment Analysis  </button></h3>
                        <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">b.) Speech Recognition</button></h3>
                        <h3><button name="Correct3" onclick="Q2" class="btn btn-info">c.) Natural Language Processing</button></h3>
                        <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">d.) Machine Translation</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong2"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q3">
                <div class="jumbotron Content3C">
                    <h2>3. What is the term used to describe the ability of an AI system to understand, interpret, and generate human-like language?</h2>
                    <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">a.) Sentiment Analysis  </button></h3>
                    <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">b.) Speech Recognition</button></h3>
                    <h3><button name="Correct3" onclick="Q2" class="btn btn-info">c.) Natural Language Processing</button></h3>
                    <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">d.) Machine Translation</button></h3>
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
    
        $sql = "UPDATE userlogin SET IntelSysScore = IntelSysScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q4">
                    <div class="jumbotron Content3C">
                        <h2>4. Which of the following is NOT a type of machine learning algorithm?</h2>
                        <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">a.) Supervised Learning</button></h3>
                        <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">b.) Unsupervised Learning</button></h3>
                        <h3><button name="Correct4" onclick="Q3" class="btn btn-info">c.) Predefined Learning</button></h3>
                        <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">d.) Reinforcement Learning</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong3"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q4">
                <div class="jumbotron Content3C">
                    <h2>4. Which of the following is NOT a type of machine learning algorithm?</h2>
                    <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">a.) Supervised Learning</button></h3>
                    <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">b.) Unsupervised Learning</button></h3>
                    <h3><button name="Correct4" onclick="Q3" class="btn btn-info">c.) Predefined Learning</button></h3>
                    <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">d.) Reinforcement Learning</button></h3>
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
    
        $sql = "UPDATE userlogin SET IntelSysScore = IntelSysScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q5">
                    <div class="jumbotron Content3C">
                        <h2>5. What is the purpose of a neural network in artificial intelligence?</h2>
                        <h3><button name="Correct5" onclick="Q4" class="btn btn-info">a.) To simulate the human brain\'s structure and function</button></h3>
                        <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">b.) To analyze natural language text</button></h3>
                        <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">c.) To navigate physical environments</button></h3>
                        <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">d.) To generate random numbers</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong4"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q5">
                <div class="jumbotron Content3C">
                    <h2>5. What is the purpose of a neural network in artificial intelligence?</h2>
                    <h3><button name="Correct5" onclick="Q4" class="btn btn-info">a.) To simulate the human brain\'s structure and function</button></h3>
                    <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">b.) To analyze natural language text</button></h3>
                    <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">c.) To navigate physical environments</button></h3>
                    <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">d.) To generate random numbers</button></h3>
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
    
        $sql = "UPDATE userlogin SET IntelSysScore = IntelSysScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q6">
                    <div class="jumbotron Content3C">
                        <h2>6. Which of the following is NOT a characteristic of expert systems?</h2>
                        <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">a.) They rely on a knowledge baset</button></h3>
                        <h3><button name="Correct6" onclick="Q5" class="btn btn-info">b.) They can learn from data</button></h3>
                        <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">c.) They emulate human expertise in a specific domain</button></h3>
                        <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">d.) They use inference engines to draw conclusions</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong5"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q6">
                <div class="jumbotron Content3C">
                    <h2>6. Which of the following is NOT a characteristic of expert systems?</h2>
                    <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">a.) They rely on a knowledge baset</button></h3>
                    <h3><button name="Correct6" onclick="Q5" class="btn btn-info">b.) They can learn from data</button></h3>
                    <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">c.) They emulate human expertise in a specific domain</button></h3>
                    <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">d.) They use inference engines to draw conclusions</button></h3>
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
    
        $sql = "UPDATE userlogin SET IntelSysScore = IntelSysScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q7">
                    <div class="jumbotron Content3C">
                        <h2>7. What is the term used to describe the ability of AI systems to perceive and understand their environment?</h2>
                        <h3><button name="Correct7" onclick="Q6" class="btn btn-info">a.) Machine Perception</button></h3>
                        <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">b.) Expert Perception</button></h3>
                        <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">c.) Cognitive Comprehension</button></h3>
                        <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">d.) Sensory Analysis</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong6"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q7">
                <div class="jumbotron Content3C">
                    <h2>7. What is the term used to describe the ability of AI systems to perceive and understand their environment?</h2>
                    <h3><button name="Correct7" onclick="Q6" class="btn btn-info">a.) Machine Perception</button></h3>
                    <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">b.) Expert Perception</button></h3>
                    <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">c.) Cognitive Comprehension</button></h3>
                    <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">d.) Sensory Analysis</button></h3>
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
    
        $sql = "UPDATE userlogin SET IntelSysScore = IntelSysScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q8">
                    <div class="jumbotron Content3C">
                        <h2>8. Which type of AI system is capable of reasoning and making decisions based on predefined rules and logical reasoning?</h2>
                        <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">a.) Machine Learning</button></h3>
                        <h3><button name="Correct8" onclick="Q7" class="btn btn-info">b.) Expert Systems</button></h3>
                        <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">c.) Natural Language Processing</button></h3>
                        <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">d.) Robotics</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong7"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q8">
                <div class="jumbotron Content3C">
                    <h2>8. Which type of AI system is capable of reasoning and making decisions based on predefined rules and logical reasoning?</h2>
                    <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">a.) Machine Learning</button></h3>
                    <h3><button name="Correct8" onclick="Q7" class="btn btn-info">b.) Expert Systems</button></h3>
                    <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">c.) Natural Language Processing</button></h3>
                    <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">d.) Robotics</button></h3>
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
    
        $sql = "UPDATE userlogin SET IntelSysScore = IntelSysScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q9">
                    <div class="jumbotron Content3C">
                        <h2>9. What is reinforcement learning in the context of AI?</h2>
                        <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">a.) Learning from labeled data</button></h3>
                        <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">b.) Learning from a teacher or supervisor</button></h3>
                        <h3><button name="Correct9" onclick="Q8" class="btn btn-info">c.) Learning from rewards and punishments</button></h3>
                        <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">d.) Learning from pre-existing knowledge</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong8"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q9">
                <div class="jumbotron Content3C">
                    <h2>9. What is reinforcement learning in the context of AI?</h2>
                    <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">a.) Learning from labeled data</button></h3>
                    <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">b.) Learning from a teacher or supervisor</button></h3>
                    <h3><button name="Correct9" onclick="Q8" class="btn btn-info">c.) Learning from rewards and punishments</button></h3>
                    <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">d.) Learning from pre-existing knowledge</button></h3>
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

        $sql = "UPDATE userlogin SET IntelSysScore = IntelSysScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";

        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q10">
                    <div class="jumbotron Content3C">
                        <h2>10. Which of the following is an example of a real-world application of intelligent systems?</h2>
                        <h3><button name="Correct10" onclick="Q9" class="btn btn-info">a.) Online shopping recommendation systems</button></h3>
                        <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">b.) Spreadsheet software</button></h3>
                        <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">c.) Email client</button></h3>
                        <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">d.) Web browser</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong9"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q10">
                <div class="jumbotron Content3C">
                    <h2>10. Which of the following is an example of a real-world application of intelligent systems?</h2>
                    <h3><button name="Correct10" onclick="Q9" class="btn btn-info">a.) Online shopping recommendation systems</button></h3>
                    <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">b.) Spreadsheet software</button></h3>
                    <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">c.) Email client</button></h3>
                    <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">d.) Web browser</button></h3>
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
    
        $sql = "UPDATE userlogin SET IntelSysScore = IntelSysScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container">
                    <div class="jumbotron Content3C">
                        <a href="IntelligentSystemsScore.php"><button class="btn btn-info btn-EvenBigger" type="submit" name="TestDone">Submit</button></a>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong10"])) {
        include("Connect.php");

        echo '
            <div class="container">
                <div class="jumbotron Content3C">
                    <a href="IntelligentSystemsScore.php"><button class="btn btn-info btn-EvenBigger" type="submit" name="TestDone">Submit</button></a>
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