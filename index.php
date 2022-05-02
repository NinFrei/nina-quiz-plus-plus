<?php session_start();
      session_destroy();

      include "php/header.php";
?>

<div class="container mt-5">
  <div class="row">
  <div class="col-1"></div>
  <div class="col-10">
    <h2>Wie gut ist Ihr Allgemeinwissen?</h2>
    <br>
    <br>
    <h6>Ihr interessiert euch für Tieren und Pflanzen? Dann seid ihr hier richtig! Testet euer Wissen über die Welt der Tiere und die Natur!</h6>
    <form action="question.php" method="post">
      <br>
      <br>
      <input type="submit" class="btn btn-warning btn-lg dropdown-toggle" data-bs-toggle  value="Los geht's!">
    </form>
  </div>
  <div class="col-1"></div>

    </div>
  </div>
</div>

<!--<div class="container-fluid p-5 my-5 text-while text-center">-->

<!--<div class="hero-image">  
    <div class="hero-text">
    <h1 style="font-size:50px display-3 text-center">"Wie gut ist Ihr Allgemeinwissen im Bereich Geschichte?"</h1>
<div>  
  <form class="ps-5 fs-4" action="question.php" method="post" id="difficulty" onsubmit="return evaluateCheckboxes()">

  <p id="warning" style="background: white; color: red"></p>

   
    <p id="validation-warning" class="warning" style="background: white; color: red"></p>

    <button style="font-size: 20px" type="submit" class="btn btn-outline btn-lg">Los geht's!</button>

</div>
    </form>
</div>  
</div>-->

<?php include 'php/footer.php'; ?>