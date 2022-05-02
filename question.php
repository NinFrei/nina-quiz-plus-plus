<?php  include 'php/collecting_data.php'; ?>
<?php  include 'php/select.php'; ?>
<?php  include 'php/header.php'; ?>



<div class="container mt-5">
        <div class="row">
        <div class="col-1"></div>
        <div class="col-10"> 

        <h3>Frage<?php echo $currentQuestionIndex; ?></h3>
        <br>
        <br>
        <h6><?php echo $questions[$currentQuestionIndex]['Text'] ?></h6>
   <form <?php if ($currentQuestionIndex + 1 >= count($questions)) echo 'action="result.php" '; ?>method="post">
        <br>
   
  
        <?php
                $answers = $questions[$currentQuestionIndex]['Answerquiz'];
                $Type = $questions[$currentQuestionIndex]['Type'];              
                $maxPoints = 0;

                
                for ($a = 0; $a < count($answers); $a++) {
                        echo '<div class="form-check">';
                        $IsCorrectAnswer = $answers[$a]['IsCorrectAnswer'];

                        if ($Type == "MultiChoice") {
                                //Multiple Choice (Chekbox)       
                                echo '<input class="form-check-input" type="checkbox"  id="i-' . $a . '" name="a-' . $a . '"value="' .  $IsCorrectAnswer . '">';  
                        }
                        else {
                                // Single Choice (radio)
                                echo '<input class="form-check-input" type="radio"  id="i-' . $a . '" name="a-0" value="' .  $IsCorrectAnswer . '">';  
                        }

                       $maxPoints += $IsCorrectAnswer;
                        
                        

                                                
                        echo '<label class="from-check-label" for="i-'. $a . '">';

                        
                        echo $answers[$a]['Text'];

                        echo '</label>';
                        echo '</div>';
                }
                
        ?>        
       <input type="hidden" name="lastQuestionIndex" value="<?php echo $currentQuestionIndex; ?>">
       <input type="hidden" name="nextQuestionIndex" value="<?php echo $currentQuestionIndex +1; ?>">
       <input type="hidden" name="maxPoints" value="<?php echo $maxPoints; ?>"> 
       <br>
       <p class="warning"></p>
       <input style="font-size: 20px" type="submit" class="btn btn-warning" value="Weiter!">
       <input type="button" value="Zurück" onClick="javascript:history.back()">
       <!--<input style="font-size: 20px" type="submit" class="btn btn-success" value="Zurück!">
       <button id="go-back">Go back!</button>-->
</form>
</div>
</div>
<div class="col-1"><div>
</div>
</div>
</div>

<?php include 'php/footer.php'; ?>





