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
        <h1>Application Development</h1>

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