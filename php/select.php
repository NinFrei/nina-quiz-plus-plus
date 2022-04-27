<?php
function getQuestions() {
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
      $subQuery = $dbConnection->prepare("SELECT * From Answerquiz where Answerquiz.QuestionId = ?");
      $subQuery->bindValue(1, $question['ID']);
      $subQuery->execute();
      $answers = $subQuery->fetchAll(PDO::FETCH_ASSOC);
      
      $questions[$q]['Answerquiz'] = $answers;
      }
   return $questions;
   }
   $questions =getQuestions();

$currentQuestionIndex = 0;

   if (isset($_POST['lastQuestionIndex'])) {
      // Get data from last post.
      $lastQuestionIndex = $_POST['lastQuestionIndex'];

   if (isset($_POST['nextQuestionIndex'])) {
      // Define the index number of the next question.
      $currentQuestionIndex = $_POST['nextQuestionIndex'];
   }
   }
// Check if $_SESSION ['question'] exists.
   if(isset($_SESSION['questions'])){
      echo 'questions data EXIST in session.<br>';
      $questions = $_SESSION['questions'];

   }
   else {
      // Get quiz data from database using php/
      echo 'question data does NOT exists in session.<br>';
      $questions = getQuestions();
      $_SESSION['questions'] = $questions;
   }
      
//And put question and answers data into PHP session.
      $_SESSION['questions'] = $questions;

echo '<pre>';
print_r($_SESSION['questions']);
echo '</pre>';
?>


            
 