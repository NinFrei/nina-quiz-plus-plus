<?php  include 'php/collecting_data.php'; ?>
<?php  include 'php/select.php'; ?>
<?php  include 'php/header.php'; ?>

<div class="row">
<div class="col-sm-8">
  

<h3>Frage<?php echo $currentQuestionIndex; ?></h3>
<p><?php echo $questions[$currentQuestionIndex]['Text'] ?></p>
   <form <?php if ($currentQuestionIndex + 1 == count($questions)) echo 'action="result.php" '; ?>method="post">
   
   
  
        <?php
                $answers = $questions[$currentQuestionIndex]['Answerquiz'];
                $Type = $questions[$currentQuestionIndex]['Type'];              
               
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

                       
                        
                        

                                                
                        echo '<label class="from-check-label" for="i-'. $a . '">';

                        
                        echo $answers[$a]['Text'];

                        echo '</label>';
                        echo '</div>';
                }
                
        ?>        
       <input type="hidden" name="lastQuestionIndex" value="<?php echo $currentQuestionIndex; ?>">
       <input type="hidden" name="nextQuestionIndex" value="<?php echo $currentQuestionIndex +1; ?>">

       <p class="warning"></p>
       <input style="font-size: 20px" type="submit" class="btn btn-warning" value="Vamos!">
</form>
</div>
</div>
</div>

<?php include 'php/footer.php'; ?>





