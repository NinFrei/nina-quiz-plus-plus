// author: rico

// cheat 1: show $_SESSION

let checkCheat = 0;

document.addEventListener('keydown', function (event) {
    if (event.ctrlKey && event.altKey && event.key == 'y' && checkCheat === 0) {
        document.getElementById("cheat2").style.visibility = "visible"
        checkCheat = 1;
    } else if (event.ctrlKey && event.altKey && event.key == 'y' && checkCheat === 1) { document.getElementById("cheat2").style.visibility = "hidden"; checkCheat = 0; }
});


// restart quiz

function restartQuiz() {
    window.open("quiz.php?n=n", "_self");
}

// go back to previous question

function goBackQuestion() {
    window.open("quiz.php?b=b", "_self");
}











