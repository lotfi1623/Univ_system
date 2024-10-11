<?php
      include "../inc/db.php";

      if(isset($_POST['submit'])){

            $id =        $_POST['id'];
            $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
            $lastName =  mysqli_real_escape_string($conn, $_POST['lastName']);
            $birthday =  mysqli_real_escape_string($conn, $_POST['birthday']);
            $speciality= mysqli_real_escape_string($conn, $_POST['speciality']);
            $section =   mysqli_real_escape_string($conn, $_POST['section']);
            $grp =$_POST['grp'];

            $sql = "INSERT INTO students(id, firstName, lastName, birthday, speciality, section, grp) 
                  VALUES ('$id','$firstName','$lastName','$birthday','$speciality','$section','$grp')";
            
            if(mysqli_query($conn, $sql)){
                  header('Location: addNewStudent.php');
            }else{
                  echo 'Error: ' . mysqli_connect_error($conn);
            }  
            
      }
?>


<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>ADD New Student</title>
      <style><?php include "../css/addNewStudentStyle.css"?></style>
</head>
<body>
      <div class="container">
            <div class="title">Add New Student</div>
            <form action="addNewStudent.php" method="POST">
                  <div class="user-details">
                        <div class="input-box">
                              <span class="details">ID</span>
                              <input type="number" name="id" id="id" placeholder="Enter your ID" required>
                        </div>
                        <div class="input-box">
                              <span class="details">First Name</span>
                              <input type="text" name="firstName" id="firstName" placeholder="Enter your first name" required>
                        </div>
                        <div class="input-box">
                              <span class="details">Last Name</span>
                              <input type="text" name="lastName" id="lastName" placeholder="Enter your last name" required>
                        </div>
                        <div class="input-box">
                              <span class="details">birthday</span>
                              <input type="date" name="birthday" id="birthday" placeholder="Enter your birthday" required>
                        </div>
                        <div class="input-box">
                              <span class="details">Speciality</span>
                              <input type="text" name="speciality" id="speciality" placeholder="Enter your Speciality" required>
                        </div>
                        <div class="input-box">
                              <span class="details">Section</span>
                              <input type="text" name="section" id="section" placeholder="Enter your section" required>
                        </div>
                        <div class="input-box">
                              <span class="details">Group</span>
                              <input type="number" name="grp" id="grp" placeholder="Enter your group" required>
                        </div>
                  </div>
                  <div class="button">
                        <input type="submit" name="submit" value="Register">
                  </div>
            </form>
      </div>
</body>
</html>