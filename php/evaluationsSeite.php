<?php include "header.php"?>
<?php include "evaluation_data.php"?>

<?php
echo "<div id='cheat2' style='visibility: hidden; margin-left: 40px; position: absolute'><pre>";
print_r($_SESSION);
echo "</pre></div>";
?>

<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("/images/hintergrund-bild.jpg");
  height: 90%;
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
  padding: 10px 25px;
  color: black;
  background-color: red;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: red;
  color: white;
}
</style>
</head>

<body>

<div class="hero-image">
  <div class="hero-text" class="font-weight-bold">
    <h1 >RESULTAT</h1>

    <p class="h2">Du hast auf dem Schwierigkeitsgrad <?=$difficulty?> <strong class="text-warning"><?=$points?> Punkt(e)</strong> erzielt.</p>
<h2 id="answerText" class="lh-lg"> <?=$text?> </h2>


<form action="/index.php">
      <input type="submit" value="WIEDERHOLEN" class="btn btn-danger btn-lg">
    </form>

</div>
</div>

<?php


$_SESSION = [];
$_GET = [];


?>

<?php include "footer.php"?>