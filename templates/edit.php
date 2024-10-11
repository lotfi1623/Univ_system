<?php
      include "../inc/db.php";
      
      $id = "";
      $firstName = "";
      $lastName = "";
      $birthday = "";
      $speciality = "";
      $section = "";
      $grp = "";
      
      if ($_SERVER['REQUEST_METHOD'] == 'GET') {
          if (!isset($_GET["id"])) {
              header("location: /student/index.php");
              exit;
          }
      
          $id = $_GET['id'];
      
          $sql = "SELECT * FROM students WHERE id=$id";
          $result = mysqli_query($conn, $sql);
          $row = $result->fetch_assoc();
      
          if (!$row) {
              header("location: /student/index.php");
              exit;
          }
      
          $firstName = $row["firstName"];
          $lastName = $row["lastName"];
          $birthday = $row["birthday"];
          $speciality = $row["speciality"];
          $section = $row["section"];
          $grp = $row["grp"];
      } else {
          $id = $_POST["id"];
          $firstName = $_POST["firstName"];
          $lastName = $_POST["lastName"];
          $birthday = $_POST["birthday"];
          $speciality = $_POST["speciality"];
          $section = $_POST["section"];
          $grp = $_POST["grp"];
      
          if (empty($id) || empty($firstName) || empty($lastName) || empty($birthday) || empty($speciality) || empty($section) || empty($grp)) {
              $errorMessage = "All the fields are required";
          } else {
              $sql = "UPDATE students SET firstName = '$firstName', lastName = '$lastName', birthday='$birthday', speciality='$speciality', section='$section', grp='$grp' WHERE id = $id";
              $result = $conn->query($sql);
      
              if (!$result) {
                  $errorMessage = "Invalid query: " . $conn->error;
              }
          }
      }
      ?>
      <!DOCTYPE html>
      <html lang="en">
      <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Edit Student</title>
            <style><?php include "../css/addNewStudentStyle.css"; ?></style>
      </head>
      <body>
            <div class="container">
                  <div class="title">Edit Student Information</div>
                  <?php if (isset($errorMessage)) : ?>
                  <div class="error"><?php echo $errorMessage; ?></div>
                  <?php endif; ?>
                  <form action="edit.php" method="POST">
                        <div class="user-details">
                              <div class="input-box">
                                    <span class="details">ID</span>
                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                              </div>
                              <div class="input-box">
                                    <span class="details">First Name</span>
                                    <input type="text" name="firstName" id="firstName" value="<?php echo $firstName; ?>">
                              </div>
                              <div class="input-box">
                                    <span class="details">Last Name</span>
                                    <input type="text" name="lastName" id="lastName" value="<?php echo $lastName; ?>">
                              </div>
                              <div class="input-box">
                                    <span class="details">Birthday</span>
                                    <input type="date" name="birthday" id="birthday" value="<?php echo $birthday; ?>">
                              </div>
                              <div class="input-box">
                                    <span class="details">Speciality</span>
                                    <input type="text" name="speciality" id="speciality" value="<?php echo $speciality; ?>">
                              </div>
                              <div class="input-box">
                                    <span class="details">Section</span>
                                    <input type="text" name="section" id="section" value="<?php echo $section; ?>">
                              </div>
                              <div class="input-box">
                                    <span class="details">Group</span>
                                    <input type="number" name="grp" id="grp" value="<?php echo $grp; ?>">
                              </div>
                        </div>
                        <div class="button">
                              <input type="submit" name="submit" value="Update">
                        </div>
                  </form>
            </div>
      </body>
      </html>
      