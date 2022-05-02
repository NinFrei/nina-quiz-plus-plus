<?php
    include "php/collecting_data.php";
    include "php/header.php";
  
       

    // Get the lists the achived and maximum points (listed per question).
    if (isset($_SESSION['achievedPointsList'])) {
        $achievedPointsList = $_SESSION['achievedPointsList'];

    }
    else {
        //LAnds here if result.php is opened in the browser before visiting any question before.
        $achievedPointsList = array();
    }

    if (isset($_SESSION['maxPointsList'])) {
        $maxPointsList = $_SESSION['maxPointsList'];
    }
    else {
        // Lands here if result.php is opened in the browser before visiting any question before.
        $maxPointsList = array();
    }

    // Get total of achieved points.
    $total = 0;

    foreach ($achievedPointsList as $key => $value) {
        $total += $value; // same as: $total + $value;
    }

    // Get total of maximum points.
    $maxTotal = 0;

    foreach ($maxPointsList as $key => $value) {
        $maxTotal += $value; // same as: $maxtotal + $value;
    }

    // Depending on the achieved points, set a feedback exclamation.
    if ($total / $maxTotal >= 0.8) {
        $exclamation = "Great";
    }
    else if ($total / $maxTotal >= 0.4) {
        $exclamation = "Good";
    }
    else {
        $exclamation = "Autsch";
    }
?>

<div class="container mt-5">
<div class="row">
<div class="col-1"></div>
<div class="col-10"> 
<h3><?php echo $exclamation; ?>, you got <?php echo $total; ?> of <?php echo $maxTotal; ?> points! </h3>
<p class="warning"></p>
<form action="index.php" method="post">
    <br>
    <br>
    <input type="submit" class="btn btn-danger btn-lg" value="Again">
    <p slass="warning"></p>
</form>
</div>
</div>
<div class="col-1"></div>

<?php include 'php/footer.php';?>













 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 