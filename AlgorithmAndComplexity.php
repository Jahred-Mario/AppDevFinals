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
        <h1>Algorithm And Complexity</h1>

        <form action="AlgorithmAndComplexity.php" method="post">
            <button name="Begin" type="" class="btn btn-info"  id="" onclick="">Start</button>
        </form>
        
    </div>
</div>

<form action="AlgorithmAndComplexity.php" method="post">

<?php
if (isset($_COOKIE["Back"])) {
    include("Connect.php");

    $sql = "UPDATE userlogin SET AlgoCompScore = 0 WHERE Username = '" . $_COOKIE["Username"] . "' ";
}


if (isset($_COOKIE["Username"])) {
    if(isset($_POST["Begin"])) {
        include("Connect.php");

        //$sql = "SELECT * FROM userlogin";
        $sql = "UPDATE userlogin SET AlgoCompScore = 0 WHERE Username = '" . $_COOKIE["Username"] . "' ";
        
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q1">
                    <div class="jumbotron Content3C">
                        <h2>1. ____ gives a high-level description of an algorithm without the ambiguity associated with plain text but also without the need to know the syntax of a particular programming language.</h2>
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
    
        $sql = "UPDATE userlogin SET AlgoCompScore = AlgoCompScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
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
    
        $sql = "UPDATE userlogin SET AlgoCompScore = AlgoCompScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
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
    
        $sql = "UPDATE userlogin SET AlgoCompScore = AlgoCompScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
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
                    <h2>4. An algorithm should have 0 or more well-defined inputs.</h2>
                    <h3><button name="Correct4" onclick="Q3" class="btn btn-info">a.) Input</button></h3>
                    <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">b.) Unambiguous</button></h3>
                    <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">c.) Output</button></h3>
                    <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">d.) Independent</button></h3>
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
    
        $sql = "UPDATE userlogin SET AlgoCompScore = AlgoCompScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q5">
                    <div class="jumbotron Content3C">
                        <h2>5. ____ is defined as the number of times a particular instruction set is executed rather than the total time taken.</h2>
                        <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">a.) Average Time Complexity</button></h3>
                        <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">b.) Worst Time Complexity</button></h3>
                        <h3><button name="Correct5" onclick="Q4" class="btn btn-info">c.) Time Complexity</button></h3>
                        <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">d.) Space Complexity</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong4"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q5">
                <div class="jumbotron Content3C">
                    <h2>5. ____ is defined as the number of times a particular instruction set is executed rather than the total time taken.</h2>
                    <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">a.) Average Time Complexity</button></h3>
                    <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">b.) Worst Time Complexity</button></h3>
                    <h3><button name="Correct5" onclick="Q4" class="btn btn-info">c.) Time Complexity</button></h3>
                    <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">d.) Space Complexity</button></h3>
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
    
        $sql = "UPDATE userlogin SET AlgoCompScore = AlgoCompScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q6">
                    <div class="jumbotron Content3C">
                        <h2>6. Which of the following is not the same standard algorithm that follow Divide and Conquer algorithm?</h2>
                        <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">a.) Quick Sort</button></h3>
                        <h3><button name="Correct6" onclick="Q5" class="btn btn-info">b.) Bubble Sort</button></h3>
                        <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">c.) Merge Sort</button></h3>
                        <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">d.) Closest Pair of Points</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong5"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q6">
                <div class="jumbotron Content3C">
                    <h2>6. Which of the following is not the same standard algorithm that follow Divide and Conquer algorithm?</h2>
                    <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">a.) Quick Sort</button></h3>
                    <h3><button name="Correct6" onclick="Q5" class="btn btn-info">b.) Bubble Sort</button></h3>
                    <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">c.) Merge Sort</button></h3>
                    <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">d.) Closest Pair of Points</button></h3>
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
    
        $sql = "UPDATE userlogin SET AlgoCompScore = AlgoCompScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q7">
                    <div class="jumbotron Content3C">
                        <h2>7. What is the Time Complexity: Worst case of Binary Search?</h2>
                        <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">a.) O(N log N)</button></h3>
                        <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">b.) O(N²)</button></h3>
                        <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">c.) O(1)</button></h3>
                        <h3><button name="Correct7" onclick="Q6" class="btn btn-info">d.) O(log N)</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong6"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q7">
                <div class="jumbotron Content3C">
                    <h2>7. What is the Time Complexity: Worst case of Binary Search?</h2>
                    <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">a.) O(N log N)</button></h3>
                    <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">b.) O(N²)</button></h3>
                    <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">c.) O(1)</button></h3>
                    <h3><button name="Correct7" onclick="Q6" class="btn btn-info">d.) O(log N)</button></h3>
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
    
        $sql = "UPDATE userlogin SET AlgoCompScore = AlgoCompScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q8">
                    <div class="jumbotron Content3C">
                        <h2>8. Which of the following is the advantages of Divided and Conquer?</h2>
                        <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">a.) Complexity </button></h3>
                        <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">b.) Overhead</button></h3>
                        <h3><button name="Correct8" onclick="Q7" class="btn btn-info">c.) Round off Control</button></h3>
                        <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">d.) Memory Limitation</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong7"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q8">
                <div class="jumbotron Content3C">
                    <h2>8. Which of the following is the advantages of Divided and Conquer?</h2>
                    <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">a.) Complexity </button></h3>
                    <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">b.) Overhead</button></h3>
                    <h3><button name="Correct8" onclick="Q7" class="btn btn-info">c.) Round off Control</button></h3>
                    <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">d.) Memory Limitation</button></h3>
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
    
        $sql = "UPDATE userlogin SET AlgoCompScore = AlgoCompScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q9">
                    <div class="jumbotron Content3C">
                        <h2>9. One of the signs of Dynamic Programming Suitability</h2>
                        <h3><button name="Correct9" onclick="Q8" class="btn btn-info">a.) Overlapping Subproblems</button></h3>
                        <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">b.) Bottom-up Approach</button></h3>
                        <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">c.) Difficulty in Parallelization</button></h3>
                        <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">d.) Top-down Approach</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong8"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q9">
                <div class="jumbotron Content3C">
                    <h2>9. One of the signs of Dynamic Programming Suitability</h2>
                    <h3><button name="Correct9" onclick="Q8" class="btn btn-info">a.) Overlapping Subproblems</button></h3>
                    <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">b.) Bottom-up Approach</button></h3>
                    <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">c.) Difficulty in Parallelization</button></h3>
                    <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">d.) Top-down Approach</button></h3>
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

        $sql = "UPDATE userlogin SET AlgoCompScore = AlgoCompScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";

        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q10">
                    <div class="jumbotron Content3C">
                        <h2>10. Which of the following is the disadvantages of Divided and Conquer?</h2>
                        <h3><button name="Correct10" onclick="Q9" class="btn btn-info">a.) Suboptimal Solution</button></h3>
                        <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">b.) Parallelism</button></h3>
                        <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">c.) Algorithm Efficiency</button></h3>
                        <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">d.) Memory Access</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong9"])) {
        include("Connect.php");

        echo '
        
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
    
        $sql = "UPDATE userlogin SET AlgoCompScore = AlgoCompScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container">
                    <div class="jumbotron Content3C">
                        <a href="AlgorithmAndComplexityScore.php"><button class="btn btn-info btn-EvenBigger" type="submit" name="TestDone">Submit</button></a>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong10"])) {
        include("Connect.php");

        echo '
            <div class="container">
                <div class="jumbotron Content3C">
                    <a href="AlgorithmAndComplexityScore.php"><button class="btn btn-info btn-EvenBigger" type="submit" name="TestDone">Submit</button></a>
                </div>
            </div>
        ';
    }
} else {
    echo "Who are you?";
    header("Location: index.php");
}



// Wrong Answers
/*
if (isset($_COOKIE["Username"])) {
    
}
*/

?>

<!--


    </div>
</div>

<div class="container">
    <div class="jumbotron Content3C">
        
    </div>
</div>

<div class="container">
    <div class="jumbotron Content3C">
        <h2>6. </h2>
        <h3><button class="btn btn-info" id="btn-changeGreen6" onclick="Correct6()">a.) </button></h3>
        <h3><button class="btn btn-info" id="btn-changeRed6" onclick="Wrong6()">b.) </button></h3>
        <h3><button class="btn btn-info" id="btn-changeRed06" onclick="Wrong6()">c.) </button></h3>
        <h3><button class="btn btn-info" id="btn-changeRed006" onclick="Wrong6()">d.) </button></h3>
    </div>
</div>

<div class="container">
    <div class="jumbotron Content3C">
        <h2>7. </h2>
        <h3><button class="btn btn-info" id="btn-changeGreen7" onclick="Correct7()">a.) </button></h3>
        <h3><button class="btn btn-info" id="btn-changeRed7" onclick="Wrong7()">b.) </button></h3>
        <h3><button class="btn btn-info" id="btn-changeRed07" onclick="Wrong7()">c.) </button></h3>
        <h3><button class="btn btn-info" id="btn-changeRed007" onclick="Wrong7()">d.) </button></h3>
    </div>
</div>

<div class="container">
    <div class="jumbotron Content3C">
        <h2>8. </h2>
        <h3><button class="btn btn-info" id="btn-changeGreen8" onclick="Correct8()">a.) </button></h3>
        <h3><button class="btn btn-info" id="btn-changeRed8" onclick="Wrong8()">b.) </button></h3>
        <h3><button class="btn btn-info" id="btn-changeRed08" onclick="Wrong8()">c.) </button></h3>
        <h3><button class="btn btn-info" id="btn-changeRed008" onclick="Wrong8()">d.) </button></h3>
    </div>
</div>

<div class="container">
    <div class="jumbotron Content3C">
        <h2>9. </h2>
        <h3><button class="btn btn-info" id="btn-changeGreen9" onclick="Correct9()">a.) </button></h3>
        <h3><button class="btn btn-info" id="btn-changeRed9" onclick="Wrong9()">b.) </button></h3>
        <h3><button class="btn btn-info" id="btn-changeRed09" onclick="Wrong9()">c.) </button></h3>
        <h3><button class="btn btn-info" id="btn-changeRed009" onclick="Wrong9()">d.) </button></h3>
    </div>
</div>

<div class="container">
    <div class="jumbotron Content3C">
        <h2>10. </h2>
        <h3><button class="btn btn-info" id="btn-changeGreen10" onclick="Correct10()">a.) </button></h3>
        <h3><button class="btn btn-info" id="btn-changeRed10" onclick="Wrong10()">b.) </button></h3>
        <h3><button class="btn btn-info" id="btn-changeRed010" onclick="Wrong10()">c.) </button></h3>
        <h3><button class="btn btn-info" id="btn-changeRed0010" onclick="Wrong10()">d.) </button></h3>
    </div>
</div>

<div class="container">
    <div class="jumbotron Content3C">
        <a href="AlgorithmAndComplexityScore.php"><button class="btn btn-info btn-EvenBigger" onclick="updateFinalScore()" type="submit" name="TestDone">Submit</button></a>
    </div>
</div>


<div class="container">
    <div class="jumbotron Content3C">
        <h2>You Scored:</h2>

        <h1 id="Score"> <?php echo $ScoreCount; ?></h1>
    </div>
</div>

-->


<?php
/*
if (isset($_COOKIE["Username"])) {
    if (isset($_POST["Correct1"])) {
        include("Connect.php");
    
        $sql = "UPDATE userlogin SET AlgoCompScore = AlgoCompScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container Q2">
                    <div class="jumbotron Content3C">
                        <h2>2. Algorithms must terminate after a finite number of steps.</h2>
                        <h3><button class="btn btn-info" id="btn-changeRed2" onclick="Wrong2()">a.) Input </button></h3>
                        <h3><button class="btn btn-info" id="btn-changeGreen2" onclick="Correct2()">b.) Finiteness </button></h3>
                        <h3><button class="btn btn-info" id="btn-changeRed02" onclick="Wrong2()">c.) Feasibility </button></h3>
                        <h3><button class="btn btn-info" id="btn-changeRed002" onclick="Wrong2()">d.) Independent </button></h3>

                        <h3><button name="Correct2">a</button></h3>
                    </div>
                </div>
            ';
        }
    }
} else {
    echo "Who are you?";
    header("Location: index.php");
}



if (isset($_COOKIE["Username"])) {
    if (isset($_POST["Correct2"])) {
        include("Connect.php");
    
        $sql = "UPDATE userlogin SET AlgoCompScore = AlgoCompScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container Q3">
                    <div class="jumbotron Content3C">
                        <h2>3.____ is the total memory space required by the program for its execution.</h2>
                        <h3><button class="btn btn-info" id="btn-changeGreen3" onclick="Correct3()">a.) Space Complexity </button></h3>
                        <h3><button class="btn btn-info" id="btn-changeRed3" onclick="Wrong3()">b.) Average Time Complexity </button></h3>
                        <h3><button class="btn btn-info" id="btn-changeRed03" onclick="Wrong3()">c.) Best Time Complexity </button></h3>
                        <h3><button class="btn btn-info" id="btn-changeRed003" onclick="Wrong3()">d.) Time Complexity </button></h3>

                        <button name="Correct3" onclick="Q1">a</button>
                    </div>
                </div>
            ';
        }
    }
} else {
    echo "Who are you?";
    header("Location: index.php");
}



if (isset($_COOKIE["Username"])) {
    if (isset($_POST["Correct3"])) {
        include("Connect.php");
    
        $sql = "UPDATE userlogin SET AlgoCompScore = AlgoCompScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container Q3">
                    <div class="jumbotron Content3C">
                        <h2>3.____ is the total memory space required by the program for its execution.</h2>
                        <h3><button class="btn btn-info" id="btn-changeGreen3" onclick="Correct3()">a.) Space Complexity </button></h3>
                        <h3><button class="btn btn-info" id="btn-changeRed3" onclick="Wrong3()">b.) Average Time Complexity </button></h3>
                        <h3><button class="btn btn-info" id="btn-changeRed03" onclick="Wrong3()">c.) Best Time Complexity </button></h3>
                        <h3><button class="btn btn-info" id="btn-changeRed003" onclick="Wrong3()">d.) Time Complexity </button></h3>

                        <button name="Correct4" onclick="Q1">a</button>
                    </div>
                </div>
            ';
        }
    }
} else {
    echo "Who are you?";
    header("Location: index.php");
}
*/


if (isset($_POST["TestDone"])) {

}

/*
if (isset($_POST["Correct1"])) {
    $ScoreCount++;
    echo "<h1>Test</h1>";
}
*/

/*
function Correct1() {
    global $ScoreCount;
    $ScoreCount++;
}
*/

/*
$ScoreCount = 0;

function Correct1() {
    global $ScoreCount;
    $ScoreCount++;
    echo $ScoreCount;
}

if (isset($_GET["Correct1"])) {
    Correct1();
}
*/
?>

</body>
</html>

