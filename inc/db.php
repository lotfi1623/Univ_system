<?php 

$conn = mysqli_connect("localhost", "root", "root", "student");
if (!$conn) { 
      echo 'Error: ' . mysqli_connect_error(); 
}
