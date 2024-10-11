<?php
  
      
  if(isset($_GET["id"])){
    $id = $_GET["id"];
    include "../inc/db.php";

    $sql = "DELETE FROM students WHERE id=$id";
    $conn->query($sql);
    
  }

  header("location: /student/index.php");
  exit;
?>