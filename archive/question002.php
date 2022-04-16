<?php include 'php/collecting_data.php'; ?>
<?php include 'php/select.php'; ?>
<?php include 'php/header.php'; ?>


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
<input tape="hidden" name="lastQuectionIndex" value="0">
<input tape="hidden" name="lastQuectionIndex" value="1">

<p class="warning"></p>
<input type="submit">
</form>
</div>
</div>
</div>









<!--Im Zuge welcher Revolution wurde Ludwig XVI. zum Tode verurteilt und hingerichtet?</h2>


<form action="question003.php" method="post" onsubmit="return evaluateCheckboxes()
('single-choice-0', 'single-choice');">

    <div class="form-check">
        <input class="from-check-input" type="checkbox" id="flexCheckDefaut" value="1">
        <label class="form-check-label" for="flexCheckDefault">
        Amerikanische Revolution       
        </label>

    <div class="form-check">
        <input type="radio" id="single-choice-0" name="single-choice" value="1">
        <label class="form-check-label" for="single-choice-0">
        Japanische Revolution  
        </label>

    <div class="form-check">
        <input type="radio" id="single-choice-0" name="single-choice" value="1">
        <label class="form-check-label" for="single-choice-0">
        Japanische Revolution  
        </label>





        <label >
            <input type="radio" id="2-2" name="q2" value="0" class="schnellstesTier">
            <img src="/images/gazelle.jpg" width="200" class="me-3 mb-3">
        </label>

        <label>
            <input type="radio" id="2-3" name="q2" value="0" class="schnellstesTier">
            <img src="/images/feldhase.jpg" width="200" class="me-3 mb-3">
        </label>

        <label>
            <input type="radio" id="2-4" name="q2" value="0" class="schnellstesTier">
        <img src="/images/strauss.jpg" width="200" class="mb-3">
        </label>

    </div>

    <div class="row">

        <p id="validate-warning" style="color:red" class="warning"></p>

    </div>




