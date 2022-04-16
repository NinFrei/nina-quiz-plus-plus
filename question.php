<?php  include 'php/collecting_data.php'; ?>
<?php  include 'php/select.php'; ?>

<?php include 'php/header.php'; ?>

<div class="row">
<div class="col-sm-8">
  

<h3>Frage <?php  echo $currentQuestionIndex; ?></h3>
<p><?php echo $questions[$currentQuestionIndex]['Text'] ?></p>
<from method="post">
        <?php
                $answers = $questions[$currentQuestionIndex]['Answerquiz'];

                for ($a = 0; $a < count($answers); $a++) {
                        echo '<div class="form-check">';

                        $IsCorrectAnswer = $answers[$a]['IsCorrectAnswer'];
                        echo '<input class="form-check-input" type="checkbox" value"' .  $IsCorrectAnswer . '">'; 
                        echo '<label class="from-check-label" for="flexCheckDefault">';

                        $answers = $questions[$currentQuestionIndex]['Answerquiz'];
                        echo $answers[$a]['Text'];

                        echo '</label>';
                        echo '</div>';
                }
        ?>

        








   
       <input type="hidden" name="lastQuectionIndex" value="<?php echo $currentQuestionIndex; ?>">
       <input type="hidden" name="lastQuectionIndex" value="<?php echo $currentQuestionIndex +1; ?>">

       <p class="warning"></p>
       <button style="font-size: 20px" type="submit" class="btn btn-outline btn-lg">Los geht's!</button>
</form>
</div>
</div>
</div>

<?php include 'php/footer.php'; ?>





