<?php>session_start(); ?>
<?php include 'php/select.php'; ?>
<?php include 'php/header.php'; ?>
<?php // include 'php/collecting_data.php'; ?>

<div class="row">
<div class="col-sm-8">
  

<h3>Frage <?php echo $currentQuestionIndex; ?></h3>
<p><?php echo $question[$currentQuestionIndex]['text'] ?></p>
<from method="post">
    <div class="from check">
        <input class="from-check-input" type="checkbox" value="0" id="flexCheckDefault">
        <label class="from-check-label" for="flexCheckDefault">
            <?php
            $answers = $questions[$currentQuestionIndex]['answers'];
            echo $answers[0]['answer'];
            ?>
            </label>
</div>
<div>
    <div class="forn-check">
        <input class="from-check-input" type="checkbox" value="0" id="flexCheckDefault">
        <label class="from-check-label" for="flexCheckDefault">
            <?php
            $answers = $questions[$currentQuestionIndex]['answers'];
            echo $answers[1]['answer'];//[1] richtige Antwort
            ?>
            </label>
</div>
       <input type="hidden" name="lastQuectionIndex" value="<?php echo $currentQuestionIndex; ?>">
       <input type="hidden" name="lastQuectionIndex" value="<?php echo $currentQuestionIndex +1; ?>">

       <p class="warning"></p>
       <input type="submit">
</form>
</div>
</div>
</div>

<?php include 'php/footer.php'; ?>





