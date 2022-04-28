<div class="from check">
        <input class="from-check-input" type="checkbox" value="0" id="flexCheckDefault">
        <label class="from-check-label" for="flexCheckDefault">Frage 1: Welcher dieser Affen zählt nicht zu den Menschenaffen?</label>
            

</div>
<div>
    <div class="form-check">
        <input class="from-check-input" type="checkbox" value="0" id="flexCheckDefault">
        <label class="from-check-label" for="flexCheckDefault">Frage 2: Welches der folgenden Tiere kann am schnellsten rennen?</label>
            
            
</div>

<div class="form-check">
        <input class="from-check-input" type="checkbox" value="0" id="flexCheckDefault">
        <label class="from-check-label" for="flexCheckDefault">Frage 3: Wie nennt man ein männliches Schaf?</label>
            
            
</div>
<div class="form-check">
        <input class="from-check-input" type="checkbox" value="0" id="flexCheckDefault">
        <label class="from-check-label" for="flexCheckDefault">Frage 4: Aus welcher Pflanze wird Vanille gewonnen?</label>                    
</div>

<div class="form-check">
        <input class="from-check-input" type="checkbox" value="0" id="flexCheckDefault">
        <label class="from-check-label" for="flexCheckDefault">Frage 5: Was speichern Kamele in ihren Höckern?</label>
</div>

<div class="form-check">
        <input class="from-check-input" type="checkbox" value="0" id="flexCheckDefault">
        <label class="from-check-label" for="flexCheckDefault">Frage 6: Welches dieser Tiere ist so intelligent,<br> dass es sich in einem Spiegel wiedererkennen kann?</label>
</div>

        <div class="form-check">
        <input class="from-check-input" type="checkbox" value="0" id="flexCheckDefault">
        <label class="from-check-label" for="flexCheckDefault">Frage 7: Welches dieser Nahrungsmittel ist im botanischen Sinn eine Nuss?</label>
</div>

        <div class="form-check">
        <input class="from-check-input" type="checkbox" value="0" id="flexCheckDefault">
        <label class="from-check-label" for="flexCheckDefault">Frage 8: Welches Tier kann sein Geschlecht wechseln?</label>
</div>


        <div class="form-check">
        <input class="from-check-input" type="checkbox" value="0" id="flexCheckDefault">
        <label class="from-check-label" for="flexCheckDefault">Frage 9: Die älteste Baumart und vermutlich <br> das älteste lebende Fossil in der Pflanzenwelt ist ...</label>
</div>

        <div class="form-check">
        <input class="from-check-input" type="checkbox" value="0" id="flexCheckDefault">
        <label class="from-check-label" for="flexCheckDefault">Frage 10: Wer oder was ist eine Mimose?</label>
</div>
<?php
            /*
            $answers = $questions[$currentQuestionIndex]['answers'];
            echo $answers[0]['answer'];
            */
            ?>

<?php/*
            $answers = $questions[$currentQuestionIndex]['answers'];
            echo $answers[1]['answer'];//[1] richtige Antwort
           */ ?>


/*
 if (isset($_POST['lastQuestionIndex'])) {

    $lastQuestionIndex = $_POST['lastQuestionIndex'];

    if (isset($_POST['nexQuestionIndex'])); {

    }
 }*/

 aus collecting_data 

 $_SESSION += $_GET;

$backDisabled=0;

$myLastElement = end($_SESSION);

    // news: restart quiz
    if(array_key_exists("n",$_SESSION)) {
        $_SESSION = [];
        $_GET = [];
        session_destroy();
        header("Location: /index.php");
    }

    // back: go to last question

    elseif (array_key_last($_SESSION) == "b") {
        echo "ok";
        unset($_SESSION["b"]);
        array_pop($_SESSION);
        $_GET = [];
        $_SESSION["d"]="1";
        header("Location: /quiz.php");      
    }

    <!--<style>
body, html {
    height: 100%;
    margin: 0;
    font-family:'Fredoka';
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("fotos/History.jpg");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 0.5px 10px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: green;
  color: white; 
}

#select {
  width: 200px;
 
}
//Ruslan "Result"
<?php include "php/header.php";?>
<main>
    <div>
        <div class="container-fluid bg-warning text-dark mt-3">
            <div class="container">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <h1 id="questionTitle">Dein Ergebnis:</h1>
                    <?php
                   
                        printResult();
                    
                    ?>  
                   
                    <h3>Vielen Dahk fürs Mitmachen!</h3>
                </div>

                
                    
                        <p id="questionWording"><p>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <form action="result.php" method="post" onsubmit="return validateQuestion();">       
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10" id="answerPanel">
                        
                        </div> 
                        <div class="col-1"></div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-10">
                                <div>
                                <input type="hidden" name="lastPageID" value="result">
                                <p id="validation-warning" class="warning"></p>
                                
                               
                                <a class="btn btn-outline-primary" href="index.php" role="button">Restart</a>
                                
                                </div>
                            </div>
                            <div class="col-1"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>