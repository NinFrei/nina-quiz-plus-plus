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