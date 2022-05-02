position<?php include "php/header.php"?>





<?php 

    include "php/collecting_data.php";

    /*echo "<div id='cheat2' style='visibility: hidden; margin-left: 40px; position: absolute'><pre>";
    print_r($_SESSION);
    echo "</pre></div>";*/

    $seconds = $_SESSION["s"];

    echo "<div id='seconds' value='6' style='visibility: hidden'>$seconds</div>";

?>

    <!-- Ab hier beginnt Bootstrap/HTML/PHP -->

    <!-- Container (Bereich alles zwischen Header und Footer) -->

    <div class="container-fluid quizArea">

     <!-- Alles, was das Quiz betritt -->

        <div class="row">

            <div class="col"></div>

            <!-- Quiz-Hauptbereich mit den 3 Boxen -->

            <div class="col-8">

            <!-- Bootstrap Box 1 - Frage1-10 -->

            <div class="row">
            
                <div class="col"><h2>Nature Quiz <br>Frage <span id="questionNumber" value="ok" ><?=$title?></span></h2></div>

                <!-- </div> -->

                <!-- Bootstrap Box 2 - Antwortform -->

                <div class="row mt-2 d-flex index">
            
                    

                    <div class="position-absolute top-50 start-100 translate-middle"><img class="imgDeco imgDeco4" src="images/happybird.gif"></div>
                    <div class="position-absolute top-0 start-50 translate-middle-y"><img class="imgDecoA imgDeco1" src="images/deco8-4.png"></div>
                    <div class="position-absolute top-50 start-100 translate-middle"><img class="imgDeco imgDeco2" src="images/deco8-5.png"></div>
                    <div class="position-absolute top-100 start-0 translate-middle"><img class="imgDecoA imgDeco3" src="images/deco8-3.png"></div>
                    <div class=""><img class="timerImage" src="images/timer3.png"><p class="timerText text-center" id="timer"></p><div>
             </div>
                <!-- Form Start -->        

                <?php include "$nextQuestionPHP"?> 

            </div>
        </div>       

            <!-- Bootstrap Boxen 3-5 - Info/Button -->

            <div class="row 2 mt-3">
                
                <div class="col ms-5"><p class="m-0 fs-5"><?=$info?></p></div>
                <div class="col-auto"><button type="button" onclick="goBackQuestion()" id="back" name="b" value="b" class="btn btn-back btn-lg mb-2" <?php if ($backDisabled == '1') echo 'disabled'; ?>>Vorherige Frage</button></div>
                <div class="col-auto"><button type="button" onclick="restartQuiz()" id="new" name="n" value="n" class="btn btn-new btn-lg mb-2">Quiz neu starten</button></div>
                <div class="col-auto"><button type="submit" class="btn btn-next btn-lg">Nächste Frage</button></div>

                

                <!-- Form Ende -->  

                <!--</div>-->
            </div>
    
        <div class="col"></div>

    </div>

<?php include "php/footer.php"?>

