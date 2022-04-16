<?php session_start();
      session_destroy();

      include "php/header.php";
?>



<style>
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
</style>
 
<body>


<!--<div class="container-fluid p-5 my-5 text-while text-center">-->

<div class="hero-image">  
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
</div>
</body>
<?php include 'php/footer.php'; ?>