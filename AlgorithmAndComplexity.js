var ScoreCount = 0;
var finalScoreValue = 0;

function Score() {
    document.getElementById("Score").innerHTML = ScoreCount;
}

function ResetScore() {
    ScoreCount = 0;
}

/*
function updateFinalScore() {
    finalScoreValue = ScoreCount;

    // Store the final score in local storage
    localStorage.setItem('finalScoreValue', finalScoreValue);

    // You can uncomment the line below if you want to redirect after storing the score
    // window.location.href = 'AlgorithmAndComplexityScores.html';
}
*/

function loadFinalScore() {
    // Retrieve the stored finalScoreValue
    var storedFinalScore = localStorage.getItem('finalScoreValue');

    // Check if there is a stored value
    if (storedFinalScore !== null) {
        // Update the finalScoreValue variable
        finalScoreValue = parseInt(storedFinalScore);

        // Update the HTML element
        document.getElementById("FinalScore").innerHTML = finalScoreValue;
    }
}



function Wrong1() {
    document.getElementById("btn-changeRed1").disabled = true;
    document.getElementById("btn-changeRed01").disabled = true;
    document.getElementById("btn-changeRed001").disabled = true;

    document.getElementById("btn-changeGreen1").disabled = true;
}

function Correct1() {
    document.getElementById("btn-changeRed1").disabled = true;
    document.getElementById("btn-changeRed01").disabled = true;
    document.getElementById("btn-changeRed001").disabled = true;

    document.getElementById("btn-changeGreen1").disabled = true;

    ScoreCount++;
    Score();
}

function Wrong2() {
    document.getElementById("btn-changeRed2").disabled = true;
    document.getElementById("btn-changeRed02").disabled = true;
    document.getElementById("btn-changeRed002").disabled = true;

    document.getElementById("btn-changeGreen2").disabled = true; 
}

function Correct2() {
    document.getElementById("btn-changeRed2").disabled = true;
    document.getElementById("btn-changeRed02").disabled = true;
    document.getElementById("btn-changeRed002").disabled = true;

    document.getElementById("btn-changeGreen2").disabled = true;

    ScoreCount++;
    Score();
}

function Wrong3() {
    document.getElementById("btn-changeRed3").disabled = true;
    document.getElementById("btn-changeRed03").disabled = true;
    document.getElementById("btn-changeRed003").disabled = true;

    document.getElementById("btn-changeGreen3").disabled = true; 
}

function Correct3() {
    document.getElementById("btn-changeRed3").disabled = true;
    document.getElementById("btn-changeRed03").disabled = true;
    document.getElementById("btn-changeRed003").disabled = true;

    document.getElementById("btn-changeGreen3").disabled = true;

    ScoreCount++;
    Score();
}

function Wrong4() {
    document.getElementById("btn-changeRed4").disabled = true;
    document.getElementById("btn-changeRed04").disabled = true;
    document.getElementById("btn-changeRed004").disabled = true;

    document.getElementById("btn-changeGreen4").disabled = true; 
}

function Correct4() {
    document.getElementById("btn-changeRed4").disabled = true;
    document.getElementById("btn-changeRed04").disabled = true;
    document.getElementById("btn-changeRed004").disabled = true;

    document.getElementById("btn-changeGreen4").disabled = true;
    
    ScoreCount++;
    Score();
}

function Wrong5() {
    document.getElementById("btn-changeRed5").disabled = true;
    document.getElementById("btn-changeRed05").disabled = true;
    document.getElementById("btn-changeRed005").disabled = true;

    document.getElementById("btn-changeGreen5").disabled = true; 
}

function Correct5() {
    document.getElementById("btn-changeRed5").disabled = true;
    document.getElementById("btn-changeRed05").disabled = true;
    document.getElementById("btn-changeRed005").disabled = true;

    document.getElementById("btn-changeGreen5").disabled = true;

    ScoreCount++;
    Score();
}

function Wrong6() {
    document.getElementById("btn-changeRed6").disabled = true;
    document.getElementById("btn-changeRed06").disabled = true;
    document.getElementById("btn-changeRed006").disabled = true;

    document.getElementById("btn-changeGreen6").disabled = true; 
}

function Correct6() {
    document.getElementById("btn-changeRed6").disabled = true;
    document.getElementById("btn-changeRed06").disabled = true;
    document.getElementById("btn-changeRed006").disabled = true;

    document.getElementById("btn-changeGreen6").disabled = true;

    ScoreCount++;
    Score();
}

function Wrong7() {
    document.getElementById("btn-changeRed7").disabled = true;
    document.getElementById("btn-changeRed07").disabled = true;
    document.getElementById("btn-changeRed007").disabled = true;

    document.getElementById("btn-changeGreen7").disabled = true; 
}

function Correct7() {
    document.getElementById("btn-changeRed7").disabled = true;
    document.getElementById("btn-changeRed07").disabled = true;
    document.getElementById("btn-changeRed007").disabled = true;

    document.getElementById("btn-changeGreen7").disabled = true;

    ScoreCount++;
    Score();
}

function Wrong8() {
    document.getElementById("btn-changeRed8").disabled = true;
    document.getElementById("btn-changeRed08").disabled = true;
    document.getElementById("btn-changeRed008").disabled = true;

    document.getElementById("btn-changeGreen8").disabled = true; 
}

function Correct8() {
    document.getElementById("btn-changeRed8").disabled = true;
    document.getElementById("btn-changeRed08").disabled = true;
    document.getElementById("btn-changeRed008").disabled = true;

    document.getElementById("btn-changeGreen8").disabled = true;

    ScoreCount++;
    Score();
}

function Wrong9() {
    document.getElementById("btn-changeRed9").disabled = true;
    document.getElementById("btn-changeRed09").disabled = true;
    document.getElementById("btn-changeRed009").disabled = true;

    document.getElementById("btn-changeGreen9").disabled = true; 
}

function Correct9() {
    document.getElementById("btn-changeRed9").disabled = true;
    document.getElementById("btn-changeRed09").disabled = true;
    document.getElementById("btn-changeRed009").disabled = true;

    document.getElementById("btn-changeGreen9").disabled = true;

    ScoreCount++;
    Score();
}

function Wrong10() {
    document.getElementById("btn-changeRed10").disabled = true;
    document.getElementById("btn-changeRed010").disabled = true;
    document.getElementById("btn-changeRed0010").disabled = true;

    document.getElementById("btn-changeGreen10").disabled = true; 
}

function Correct10() {
    document.getElementById("btn-changeRed10").disabled = true;
    document.getElementById("btn-changeRed010").disabled = true;
    document.getElementById("btn-changeRed0010").disabled = true;

    document.getElementById("btn-changeGreen10").disabled = true;

    ScoreCount++;
    Score();
}


function Q1() {
    document.getElementById("Q1").innerHTML = "";
}

function Q2() {
    document.getElementById("Q2").innerHTML = "";
}

function Q3() {
    document.getElementById("Q3").innerHTML = "";
}

function Q4() {
    document.getElementById("Q4").innerHTML = "";
}

function Q5() {
    document.getElementById("Q5").innerHTML = "";
}

function Q6() {
    document.getElementById("Q6").innerHTML = "";
}

function Q7() {
    document.getElementById("Q7").innerHTML = "";
}

function Q8() {
    document.getElementById("Q8").innerHTML = "";
}

function Q9() {
    document.getElementById("Q9").innerHTML = "";
}

function Q10() {
    document.getElementById("Q10").innerHTML = "";
}

/* Pina-cancel yung fill in the blanks eh hahaha.
function FillBlanks() {
    // Number 6
    if (document.getElementById("No6").value === "") {
        document.getElementById("No6").style.color = "green";
    } else {
        document.getElementById("No6").style.color = "red";
    }

    // Number 7
    if (document.getElementById("No7").value === "") {
        document.getElementById("No7").style.color = "green";
    } else {
        document.getElementById("No7").style.color = "red";
    }

    // Number 8
    if (document.getElementById("No8").value === "") {
        document.getElementById("No8").style.color = "green";
    } else {
        document.getElementById("No8").style.color = "red";
    }

    // Number 9
    if (document.getElementById("No9").value === "") {
        document.getElementById("No9").style.color = "green";
    } else {
        document.getElementById("No9").style.color = "red";
    }

    // Number 10
    if (document.getElementById("No10").value === "") {
        document.getElementById("No10").style.color = "green";
    } else {
        document.getElementById("No10").style.color = "red";
    }
        
}
*/