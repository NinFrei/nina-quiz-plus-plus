

function evaluateCheckboxes() {

    // Hole die Liste aller ausgewählten Checkboxen (checked).
    let radioButton = document.querySelectorAll('input[type=radio]:checked'); //CSS3 Selektor!!!!!

    if (radioButton.length === 0) {
        // Die Liste der Checkboxen ist leer - es wurde keine ausgewählt.
        setWarning("Bitte wähle eine Antwort aus!");
        return false; //Submit-Aktion abbrechen 
    }

    // User hat Antworten ausgewählt: Zähle die erreichten Punkte zusammen.
    let achievedPoints = 0; //Summe aller erreichten Punkte pro Frage. 
    let points; //Anzahl der Punkte pro Antwort. 

    for (let c = 0; c < radioButton.length; c++) {
        points = radioButton[c].value; // als 'value' kommt ein String.
        points = parseInt(points); //parseInt() parses a string and returns the first integer

        //richtige Antwort: pts === 1
        //falsche Antwort: pts === 0
        achievedPoints = achievedPoints + points; // oder kurz: achievedPoints += points;
    }

    // Schreibe die erreichte Punktzahl ins Hidden Field 'achievedPoints'.
    let hiddenField = document.getElementById("achievedPoints");
    hiddenField.value = achievedPoints;

}

function setWarning(text) {
    let warningElement = document.getElementById("validate-warning");
    warningElement.innerText = text;
}

/*

function validateQuestion(inputID, radioName) {

    let inputElement = document.getElementById(inputID);

    if (inputElement.type === 'range') {
        if (!sliderHasChanged()) {
            setWarning("Bitte verändere die Position des Sliders.");
            return false;
        }
    }
    else if (inputElement.type === 'radio') {
        let radioButtons = document.getElementsByName(radioName);
        let selectedValue;

        for (let i = 0; i < radioButtons.length; i++) {
            if (radioButtons[i].checked) {
                selectedValue = radioButtons[i].value;
                break;
            }
        }

        if (!selectedValue) {
            setWarning("Bitte wähle eine Option aus.")
            return false;
        }
    }
    else {
        let value = inputElement.value;

        if (!value) {
            setWarning("Bitte gib einen Wert ein.");
            return false;
        }
    }
   
    }} 
    */

function evaluateDIfficulty() {

    if (document.getElementById("select").value == "") {
        document.getElementById("warning").innerText = "Wähle einen Schwierigkeitsgrad"
        return false;
    }
}

