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
    <script src="ArchitectureAndOrganization.js"></script>
</head>
<body style="background-image: url('Pictures/SubBG.jpg'); background-size: 100%;">

<div class="">
    <div class="jumbotron text-center Top3C">
        <h1>Architecture And Organization</h1>
        <a href="LoggedIndex.php"><button class="btn btn-info btn-bigger">Back to Menu</button></a>
        <a href="Subject Choices.html"><button class="btn btn-info btn-bigger">Back to Subjects</button></a>
    </div>
</div>

<div class="container">
    <div class="jumbotron text-center Content3C">
        <form action="ArchitectureAndOrganization.php" method="post">
            <button name="Begin" type="" class="btn btn-info"  id="" onclick="">Start</button>
        </form>
    </div>
</div>

<form action="ArchitectureAndOrganization.php" method="post">

<?php
if (isset($_COOKIE["Back"])) {
    include("Connect.php");

    $sql = "UPDATE userlogin SET ArchiOrgScore = 0 WHERE Username = '" . $_COOKIE["Username"] . "' ";
}


if (isset($_COOKIE["Username"])) {
    if(isset($_POST["Begin"])) {
        include("Connect.php");

        //$sql = "SELECT * FROM userlogin";
        $sql = "UPDATE userlogin SET ArchiOrgScore = 0 WHERE Username = '" . $_COOKIE["Username"] . "' ";
        
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q1">
                    <div class="jumbotron Content3C">
                        <h2>1.  What does CPU stand for in computer architecture?</h2>
                        <h3><button name="Correct1" class="btn btn-info">a.) Central Processing Unit</button></h3>
                        <h3><button name="Wrong1" class="btn btn-info">b.) Computer Processing Unit</button></h3>
                        <h3><button name="Wrong1" class="btn btn-info">c.) Control Processing Unit</button></h3>
                        <h3><button name="Wrong1" class="btn btn-info">d.) Centralized Processing Unit</button></h3>
                    </div>
                </div>
            ';
        }
    }
}

if (isset($_COOKIE["Username"])) {
    if (isset($_POST["Correct1"])) {
        include("Connect.php");
    
        $sql = "UPDATE userlogin SET ArchiOrgScore = ArchiOrgScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q2">
                    <div class="jumbotron Content3C">
                        <h2>2.  Which of the following is NOT a type of memory commonly found in computer systems?</h2>
                        <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">a.) RAM</button></h3>
                        <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">b.) ROM</button></h3>
                        <h3><button name="Correct2" onclick="Q1" class="btn btn-info">c.) CPU</button></h3>
                        <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">d.) Cache</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong1"])) {
        include("Connect.php");

        echo '
        <div class="container" id="Q2">
        <div class="jumbotron Content3C">
            <h2>2.  Which of the following is NOT a type of memory commonly found in computer systems?</h2>
            <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">a.) RAM</button></h3>
            <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">b.) ROM</button></h3>
            <h3><button name="Correct2" onclick="Q1" class="btn btn-info">c.) CPU</button></h3>
            <h3><button name="Wrong2" onclick="Q1" class="btn btn-info">d.) Cache</button></h3>
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
    
        $sql = "UPDATE userlogin SET AArchiOrgScore = ArchiOrgScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q3">
                    <div class="jumbotron Content3C">
                        <h2>3.What is the primary function of the cache memory in a computer system?</h2>
                        <h3><button name="Correct3" onclick="Q2" class="btn btn-info">a.) Store frequently accessed data for quick retrieval </button></h3>
                        <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">b.) Execute program instructions </button></h3>
                        <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">c.) Store the operating system</button></h3>
                        <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">d.) Manage peripheral devices</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong2"])) {
        include("Connect.php");

        echo '
        <div class="container" id="Q3">
        <div class="jumbotron Content3C">
            <h2>3.What is the primary function of the cache memory in a computer system?</h2>
            <h3><button name="Correct3" onclick="Q2" class="btn btn-info">a.) Store frequently accessed data for quick retrieval </button></h3>
            <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">b.) Execute program instructions </button></h3>
            <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">c.) Store the operating system</button></h3>
            <h3><button name="Wrong3" onclick="Q2" class="btn btn-info">d.) Manage peripheral devices</button></h3>
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
    
        $sql = "UPDATE userlogin SET ArchiOrgScore = ArchiOrgScore+ 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q4">
                    <div class="jumbotron Content3C">
                        <h2>4. Which component of a computer system is responsible for managing data transfer between the CPU, memory, and other peripheral devices?</h2>
                        <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">a.) ALU (Arithmetic Logic Unit)</button></h3>
                        <h3><button name="Correct4" onclick="Q3" class="btn btn-info">b.) Control Unit</button></h3>
                        <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">c.) Cache</button></h3>
                        <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">d.) RAM (Random Access Memory)</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong3"])) {
        include("Connect.php");

        echo '
            <div class="container" id="Q4">
            <div class="container" id="Q4">
            <div class="jumbotron Content3C">
                <h2>4. Which component of a computer system is responsible for managing data transfer between the CPU, memory, and other peripheral devices?</h2>
                <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">a.) ALU (Arithmetic Logic Unit)</button></h3>
                <h3><button name="Correct4" onclick="Q3" class="btn btn-info">b.) Control Unit</button></h3>
                <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">c.) Cache</button></h3>
                <h3><button name="Wrong4" onclick="Q3" class="btn btn-info">d.) RAM (Random Access Memory)</button></h3>
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
    
        $sql = "UPDATE userlogin SET ArchiOrgScore = ArchiOrgScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q5">
                    <div class="jumbotron Content3C">
                        <h2>5. What is the purpose of the motherboard in a computer system?</h2>
                        <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">a.) Manage power distribution</button></h3>
                        <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">b.) Provide storage for data</button></h3>
                        <h3><button name="Correct5" onclick="Q4" class="btn btn-info">c.) Serve as a platform for connecting all components</button></h3>
                        <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">d.) Execute program instructions</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong4"])) {
        include("Connect.php");

        echo '
        <div class="container" id="Q5">
        <div class="jumbotron Content3C">
            <h2>5. What is the purpose of the motherboard in a computer system?</h2>
            <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">a.) Manage power distribution</button></h3>
            <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">b.) Provide storage for data</button></h3>
            <h3><button name="Correct5" onclick="Q4" class="btn btn-info">c.) Serve as a platform for connecting all components</button></h3>
            <h3><button name="Wrong5" onclick="Q4" class="btn btn-info">d.) Execute program instructions</button></h3>
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
    
        $sql = "UPDATE userlogin SET ArchiOrgScore = ArchiOrgScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q6">
                    <div class="jumbotron Content3C">
                        <h2>6. Which of the following is NOT a common input device used in computer systems?</h2>
                        <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">a.) Keyboard </button></h3>
                        <h3><button name="Correct6" onclick="Q5" class="btn btn-info">b.) Monitor</button></h3>
                        <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">c.) Mouse</button></h3>
                        <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">d.) Touchpad</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong5"])) {
        include("Connect.php");

        echo '
        <div class="container" id="Q6">
        <div class="jumbotron Content3C">
            <h2>6. Which of the following is NOT a common input device used in computer systems?</h2>
            <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">a.) Keyboard </button></h3>
            <h3><button name="Correct6" onclick="Q5" class="btn btn-info">b.) Monitor</button></h3>
            <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">c.) Mouse</button></h3>
            <h3><button name="Wrong6" onclick="Q5" class="btn btn-info">d.) Touchpad</button></h3>
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
    
        $sql = "UPDATE userlogin SET ArchiOrgScore = ArchiOrgScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q7">
                    <div class="jumbotron Content3C">
                        <h2>7. What does RAID stand for in the context of computer storage?</h2>
                        <h3><button name="Correct7" onclick="Q6" class="btn btn-info">a.)Redundant Array of Independent Disks</button></h3>
                        <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">b.)Random Access Integrated Drive</button></h3>
                        <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">c.) Rapid Access Information Device</button></h3>
                        <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">d.) Readily Available Indexed Data</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong6"])) {
        include("Connect.php");

        echo '
        <div class="container" id="Q7">
                    <div class="jumbotron Content3C">
                        <h2>7. What does RAID stand for in the context of computer storage?</h2>
                        <h3><button name="Correct7" onclick="Q6" class="btn btn-info">a.)Redundant Array of Independent Disks</button></h3>
                        <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">b.)Random Access Integrated Drive</button></h3>
                        <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">c.) Rapid Access Information Device</button></h3>
                        <h3><button name="Wrong7" onclick="Q6" class="btn btn-info">d.) Readily Available Indexed Data</button></h3>
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
    
        $sql = "UPDATE userlogin SET ArchiOrgScore = ArchiOrgScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
            <div class="container" id="Q8">
            <div class="jumbotron Content3C">
                <h2>8. Which of the following is NOT a characteristic of a microcontroller?</h2>
                <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">a.) Contains a CPU, memory, and I/O ports on a single chip</button></h3>
                <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">b.)  Typically used in embedded systems</button></h3>
                <h3><button name="Correct8" onclick="Q7" class="btn btn-info">c.) Often used in high-performance computing</button></h3>
                <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">d.) Executes pre-defined tasks</button></h3>
            </div>
        </div>
            ';
        }
    } else if (isset($_POST["Wrong7"])) {
        include("Connect.php");

        echo '
        <div class="container" id="Q8">
        <div class="jumbotron Content3C">
            <h2>8. Which of the following is NOT a characteristic of a microcontroller?</h2>
            <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">a.) Contains a CPU, memory, and I/O ports on a single chip</button></h3>
            <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">b.)  Typically used in embedded systems</button></h3>
            <h3><button name="Correct8" onclick="Q7" class="btn btn-info">c.) Often used in high-performance computing</button></h3>
            <h3><button name="Wrong8" onclick="Q7" class="btn btn-info">d.) Executes pre-defined tasks</button></h3>
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
    
        $sql = "UPDATE userlogin SET ArchiOrgScore = ArchiOrgScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container" id="Q9">
                    <div class="jumbotron Content3C">
                        <h2>9. What is the purpose of the BIOS (Basic Input/Output System) in a computer system?</h2>
                        <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">a.) Manage network connections</button></h3>
                        <h3><button name="Correct9" onclick="Q8" class="btn btn-info">b.) Load the operating system into memory during startup</button></h3>
                        <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">c.) Execute user applications</button></h3>
                        <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">d.) Provide storage for user data</button></h3>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong8"])) {
        include("Connect.php");

        echo '
        <div class="container" id="Q9">
                    <div class="jumbotron Content3C">
                        <h2>9. What is the purpose of the BIOS (Basic Input/Output System) in a computer system?</h2>
                        <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">a.) Manage network connections</button></h3>
                        <h3><button name="Correct9" onclick="Q8" class="btn btn-info">b.) Load the operating system into memory during startup</button></h3>
                        <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">c.) Execute user applications</button></h3>
                        <h3><button name="Wrong9" onclick="Q8" class="btn btn-info">d.) Provide storage for user data</button></h3>
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

        $sql = "UPDATE userlogin SET ArchiOrgScore = ArchiOrgScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";

        if (mysqli_query($con, $sql)) {
            echo '
            <div class="container" id="Q10">
            <div class="jumbotron Content3C">
                <h2>10.  Which of the following is NOT a common bus type used in computer architecture?</h2>
                <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">a.) USB (Universal Serial Bus)</button></h3>
                <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">b.)PCI (Peripheral Component Interconnect)</button></h3>
                <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">c.) SATA (Serial ATA)</button></h3>
                <h3><button name="Correct10" onclick="Q9" class="btn btn-info">d.) TCP/IP (Transmission Control Protocol/Internet Protocol)</button></h3>
            </div>
        </div>
            ';
        }
    } else if (isset($_POST["Wrong9"])) {
        include("Connect.php");

        echo '
        <div class="container" id="Q10">
                    <div class="jumbotron Content3C">
                        <h2>10.  Which of the following is NOT a common bus type used in computer architecture?</h2>
                        <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">a.) USB (Universal Serial Bus)</button></h3>
                        <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">b.)PCI (Peripheral Component Interconnect)</button></h3>
                        <h3><button name="Wrong10" onclick="Q9" class="btn btn-info">c.) SATA (Serial ATA)</button></h3>
                        <h3><button name="Correct10" onclick="Q9" class="btn btn-info">d.) TCP/IP (Transmission Control Protocol/Internet Protocol)</button></h3>
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
    
        $sql = "UPDATE userlogin SET ArchiOrgScore = ArchiOrgScore + 1 WHERE Username = '" . $_COOKIE["Username"] . "' ";
    
        if (mysqli_query($con, $sql)) {
            echo '
                <div class="container">
                    <div class="jumbotron Content3C">
                        <a href="ArchitectureAndOrganizationScore.php"><button class="btn btn-info btn-EvenBigger" type="submit" name="TestDone">Submit</button></a>
                    </div>
                </div>
            ';
        }
    } else if (isset($_POST["Wrong10"])) {
        include("Connect.php");

        echo '
            <div class="container">
                <div class="jumbotron Content3C">
                    <a href="ArchitectureAndOrganizationScore.php"><button class="btn btn-info btn-EvenBigger" type="submit" name="TestDone">Submit</button></a>
                </div>
            </div>
        ';
    }
} else {
    echo "Who are you?";
    header("Location: index.php");
}