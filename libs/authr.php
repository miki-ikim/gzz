<?php 

session_start();
if(!isset($_SESSION["user_id"] )&& $_SESSION["loggedIn"] = true){
header("Location: ../../index.html?msg=qLogin First");
exit(); }

?>