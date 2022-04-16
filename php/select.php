<?php

$currentQuestionIndex = 0;

if (isset($_POST['lastQuestionIndex'])) {
   $lastQuestionIndex = $_POST['lastQuestionIndex'];

if (isset($_POST['nextQuestionIndex'])) {
   $currentQuestionIndex = $_POST['nextQuestionIndex'];
}
}


 //Prerare connection parametrs.
 $dbHost = getenv('DB_HOST');
 $dbName = getenv('DB_NAME');
 $dbUser = getenv('DB_USER');
 $dbPassword = getenv('DB_PASSWORD');
//echo "dbhost=$dbhost";

$dbConnection = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPassword);

$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = $dbConnection->query("SELECT * FROM Questions");
$questions = $query->fetchAll(PDO::FETCH_ASSOC);

for ($q = 0; $q < count($questions); $q++){
   $question = $questions[$q];
   $subQuery = $dbConnection->prepare("SELECT * from Answerquiz where Answerquiz.QuestionId = ?");
   $subQuery->bindValue(1, $question['ID']);
   $subQuery->execute();
   $answers = $subQuery->fetchAll(PDO::FETCH_ASSOC);

   $questions[$q]['Answerquiz'] = $answers;
}

$_SESSION['quizData'] = $questions;

echo '<pre>';
print_r($_SESSION['quizData']);
echo '</pre>';
?>


            
 