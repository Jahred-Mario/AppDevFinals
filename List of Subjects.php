<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Subjects</title>

    <link rel="stylesheet" href="Extensions/Bootstrap 3.css">
    <script src="Extensions/Bootstrap 3.js"></script>

    <link rel="stylesheet" href="Custom.css">
</head>
<body style="background-image: url('Pictures/AndikWallpaper.jpg'); background-size: 100%;" onload="titleEdit()">
    
<div class="">
    <div class="jumbotron text-center Top3C">
        <h1>Your Scores</h1>

        <a href="LoggedIndex.php"><button class="btn btn-info btn-bigger">Back to Menu</button></a>
    </div>
</div>

<div class="container">
    <div class="jumbotron Content3C">

    <?php
include("Connect.php");

if (isset($_COOKIE["Username"])) {
    $sql = "SELECT * FROM userlogin WHERE Username = '". $_COOKIE["Username"] ."'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $userInfo = mysqli_fetch_assoc($result);

        // Now $userInfo contains all columns associated with the given Username
        $AlgoCompScore = $userInfo["AlgoCompScore"];
        $AvgScore = number_format(($userInfo["AlgoCompScore"] + $userInfo["AppDevScore"] + $userInfo["ArchiOrgScore"] + $userInfo["HCIScore"] + $userInfo["IntelSysScore"] + $userInfo["OSScore"] + $userInfo["SoftEngScore"]) / 7);

        // Algorithm and Complexity
        if ($AlgoCompScore == 10) {
            echo '
                <h2>Algorithm and Complexity</h2>

                <div class="progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:'. $AlgoCompScore .'0%">'. $AlgoCompScore .' out of 10</div>
                </div>

                <br />
            ';
        } else if ($AlgoCompScore >= 7) {
            echo '
                <h2>Algorithm and Complexity</h2>

                <div class="progress">
                    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:'. $AlgoCompScore .'0%">'. $AlgoCompScore .' out of 10</div>
                </div>

                <br />
            ';
        } else if ($AlgoCompScore >= 4) {
            echo '
                <h2>Algorithm and Complexity</h2>

                <div class="progress">
                    <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:'. $AlgoCompScore .'0%">'. $AlgoCompScore .' out of 10</div>
                </div>

                <br />
            ';
        } else if ($AlgoCompScore >= 1) {
            echo '
                <h2>Algorithm and Complexity</h2>

                <div class="progress">
                    <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:'. $AlgoCompScore .'0%">'. $AlgoCompScore .' out of 10</div>
                </div>

                <br />
            ';
        } else {
            echo '
                <h2>Algorithm and Complexity</h2>

                <h3>No Record yet.</h3>
                <br />
            ';
        }
        


        $AppDevScore = $userInfo["AppDevScore"];

        // Application Development
        if ($AppDevScore == 10) {
            echo '
                <h2>Application Development</h2>

                <div class="progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:'. $AppDevScore .'0%">'. $AppDevScore .' out of 10</div>
                </div>

                <br />
            ';
        } else if ($AppDevScore >= 7) {
            echo '
                <h2>Application Development</h2>

                <div class="progress">
                    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:'. $AppDevScore .'0%">'. $AppDevScore .' out of 10</div>
                </div>

                <br />
            ';
        } else if ($AppDevScore >= 4) {
            echo '
                <h2>Application Development</h2>

                <div class="progress">
                    <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:'. $AppDevScore .'0%">'. $AppDevScore .' out of 10</div>
                </div>

                <br />
            ';
        } else if ($AppDevScore >= 1) {
            echo '
                <h2>Application Development</h2>

                <div class="progress">
                    <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:'. $AppDevScore .'0%">'. $AppDevScore .' out of 10</div>
                </div>

                <br />
            ';
        } else {
            echo '
                <h2>Application Development</h2>

                <h3>No Record yet.</h3>
                <br />
            ';
        }



        $ArchiOrgScore = $userInfo["ArchiOrgScore"];

        // Architecture And Organization
        if ($ArchiOrgScore == 10) {
            echo '
                <h2>Architecture And Organization</h2>

                <div class="progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:'. $ArchiOrgScore .'0%">'. $ArchiOrgScore .' out of 10</div>
                </div>

                <br />
            ';
        } else if ($ArchiOrgScore >= 7) {
            echo '
                <h2>Architecture And Organization</h2>

                <div class="progress">
                    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:'. $ArchiOrgScore .'0%">'. $ArchiOrgScore .' out of 10</div>
                </div>

                <br />
            ';
        } else if ($ArchiOrgScore >= 4) {
            echo '
                <h2>Architecture And Organization</h2>

                <div class="progress">
                    <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:'. $ArchiOrgScore .'0%">'. $ArchiOrgScore .' out of 10</div>
                </div>

                <br />
            ';
        } else if ($ArchiOrgScore >= 1) {
            echo '
                <h2>Architecture And Organization</h2>

                <div class="progress">
                    <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:'. $ArchiOrgScore .'0%">'. $ArchiOrgScore .' out of 10</div>
                </div>

                <br />
            ';
        } else {
            echo '
                <h2>Architecture and Organization</h2>

                <h3>No Record yet.</h3>
                <br />
            ';
        }



        $HCIScore = $userInfo["HCIScore"];

        // Human-Computer Interaction
        if ($HCIScore == 10) {
            echo '
                <h2>Human-Computer Interaction</h2>

                <div class="progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:'. $HCIScore .'0%">'. $HCIScore .' out of 10</div>
                </div>

                <br />
            ';
        } else if ($HCIScore >= 7) {
            echo '
                <h2>Human-Computer Interaction</h2>

                <div class="progress">
                    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:'. $HCIScore .'0%">'. $HCIScore .' out of 10</div>
                </div>

                <br />
            ';
        } else if ($HCIScore >= 4) {
            echo '
                <h2>Human-Computer Interaction</h2>

                <div class="progress">
                    <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:'. $HCIScore .'0%">'. $HCIScore .' out of 10</div>
                </div>

                <br />
            ';
        } else if ($HCIScore >= 1) {
            echo '
                <h2>Human-Computer Interaction</h2>

                <div class="progress">
                    <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:'. $HCIScore .'0%">'. $HCIScore .' out of 10</div>
                </div>

                <br />
            ';
        } else {
            echo '
                <h2>Human-Computer Interaction</h2>

                <h3>No Record yet.</h3>
                <br />
            ';
        }



        $IntelSysScore = $userInfo["IntelSysScore"];

        // Intelligent Systems
        if ($IntelSysScore == 10) {
            echo '
                <h2>Intelligent Systems</h2>

                <div class="progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:'. $IntelSysScore .'0%">'. $IntelSysScore .' out of 10</div>
                </div>

                <br />
            ';
        } else if ($IntelSysScore >= 7) {
            echo '
                <h2>Intelligent Systems</h2>

                <div class="progress">
                    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:'. $IntelSysScore .'0%">'. $IntelSysScore .' out of 10</div>
                </div>

                <br />
            ';
        } else if ($IntelSysScore >= 4) {
            echo '
                <h2>Intelligent Systems</h2>

                <div class="progress">
                    <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:'. $IntelSysScore .'0%">'. $IntelSysScore .' out of 10</div>
                </div>

                <br />
            ';
        } else if ($IntelSysScore >= 1) {
            echo '
                <h2>Intelligent Systems</h2>

                <div class="progress">
                    <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:'. $IntelSysScore .'0%">'. $IntelSysScore .' out of 10</div>
                </div>

                <br />
            ';
        } else {
            echo '
                <h2>Intelligent Systems</h2>

                <h3>No Record yet.</h3>
                <br />
            ';
        }



        $OSScore = $userInfo["OSScore"];

        // Operating System
        if ($OSScore == 10) {
            echo '
                <h2>Operating System</h2>

                <div class="progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:'. $OSScore .'0%">'. $OSScore .' out of 10</div>
                </div>

                <br />
            ';
        } else if ($OSScore >= 7) {
            echo '
                <h2>Operating System</h2>

                <div class="progress">
                    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:'. $OSScore .'0%">'. $OSScore .' out of 10</div>
                </div>

                <br />
            ';
        } else if ($OSScore >= 4) {
            echo '
                <h2>Operating System</h2>

                <div class="progress">
                    <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:'. $OSScore .'0%">'. $OSScore .' out of 10</div>
                </div>

                <br />
            ';
        } else if ($OSScore >= 1) {
            echo '
                <h2>Operating System</h2>

                <div class="progress">
                    <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:'. $OSScore .'0%">'. $OSScore .' out of 10</div>
                </div>

                <br />
            ';
        } else {
            echo '
                <h2>Operating System</h2>

                <h3>No Record yet.</h3>
                <br />
            ';
        }



        $SoftEngScore = $userInfo["SoftEngScore"];

        // Software Engineering
        if ($SoftEngScore == 10) {
            echo '
                <h2>Software Engineering</h2>

                <div class="progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:'. $SoftEngScore .'0%">'. $SoftEngScore .' out of 10</div>
                </div>

                <br />
            ';
        } else if ($SoftEngScore >= 7) {
            echo '
                <h2>Software Engineering</h2>

                <div class="progress">
                    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:'. $SoftEngScore .'0%">'. $SoftEngScore .' out of 10</div>
                </div>

                <br />
            ';
        } else if ($SoftEngScore >= 4) {
            echo '
                <h2>Software Engineering</h2>

                <div class="progress">
                    <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:'. $SoftEngScore .'0%">'. $SoftEngScore .' out of 10</div>
                </div>

                <br />
            ';
        } else if ($SoftEngScore >= 1) {
            echo '
                <h2>Software Engineering</h2>

                <div class="progress">
                    <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:'. $SoftEngScore .'0%">'. $SoftEngScore .' out of 10</div>
                </div>

                <br />
            ';
        } else {
            echo '
                <h2>Software Engineering</h2>

                <h3>No Record yet.</h3>
                <br />
            ';
        }



        // Software Engineering
        if ($AvgScore == 10) {
            echo '
                <h1>Your Average Score:</h1>

                <div class="progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="'. $AvgScore .'" aria-valuemin="0" aria-valuemax="100" style="width: '. $AvgScore .'0%">'. $AvgScore .' out of 10</div>
                </div>
            ';
        } else if ($AvgScore >= 7) {
            echo '
                <h1>Your Average Score:</h1>

                <div class="progress">
                    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="'. $AvgScore .'" aria-valuemin="0" aria-valuemax="100" style="width: '. $AvgScore .'0%">'. $AvgScore .' out of 10</div>
                </div>
            ';
        } else if ($AvgScore >= 4) {
            echo '
                <h1>Your Average Score:</h1>

                <div class="progress">
                    <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="'. $AvgScore .'" aria-valuemin="0" aria-valuemax="100" style="width: '. $AvgScore .'0%">'. $AvgScore .' out of 10</div>
                </div>
            ';
        } else if ($AvgScore >= 1) {
            echo '
                <h1>Your Average Score:</h1>

                <div class="progress">
                    <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="'. $AvgScore .'" aria-valuemin="0" aria-valuemax="100" style="width: '. $AvgScore .'0%">'. $AvgScore .' out of 10</div>
                </div>
            ';
        } else {
            echo '
                <h3>No Record yet.</h3>
                <br />
            ';
        }
        
    } else {
        echo "Error executing the query: " . mysqli_error($con);
    }
} else {
    echo "<h1>Err...</h1>";
}

?>

    

    </div>
</div>



</body>
</html>