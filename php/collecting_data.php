<?php session_start();



if (isset($_POST["lastPageID"])) {
    $lastPageID = $_POST["lastPageID"];
    $_SESSION[$lastPageID] = $_POST;
}

?>



