<?php
    $log = TRUE;
    session_start();
    if (!$_SESSION["login"] || $_SESSION["login"]==FALSE) {
        $log = FALSE;
        header("location: login.php");
        exit();
      }
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "movies";
      $conn = new mysqli($servername, $username, $password,$database);
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
?>