<?php
include("../php/config.php");

$msg_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if ID is set and not empty
    if (isset($_POST["id"]) && !empty($_POST["id"])) {
        $id = $_POST["id"];
        
        // Prepare and execute SQL query
        $query = $con->prepare("SELECT id, firstName, lastName, birthday, speciality, grp FROM students WHERE id = ?");
        $query->bind_param("i", $id); // assuming 'id' is an integer, adjust the type accordingly if not
        
        $query->execute();
        
        // Store the result for subsequent fetching
        $query->store_result();
        
        // Check if any rows were returned
        if ($query->num_rows > 0) {
            echo "<!DOCTYPE html>
                  <html lang='en'>
                  <head>
                      <meta charset='UTF-8'>
                      <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                      <link rel='stylesheet' href='../css/display.css'>
                      <title>Student Information</title>
                  </head>
                  <body>
                      <div class='container'>
                          <div class='box form-box'>
                              <header>Student Information</header>
                              <table>
                                  <tr>
                                      <th>ID</th>
                                      <th>First Name</th>
                                      <th>Last Name</th>
                                      <th>Birthday</th>
                                      <th>Speciality</th>
                                      <th>Group</th>
                                  </tr>";
            // Bind result variables
            $query->bind_result($id, $firstName, $lastName, $birthday, $speciality, $grp);
            while ($query->fetch()) {
                echo "<tr>
                        <td>$id</td>
                        <td>$firstName</td>
                        <td>$lastName</td>
                        <td>$birthday</td>
                        <td>$speciality</td>
                        <td>$grp</td>
                      </tr>";
            }
            echo "</table>
                </div>
            </div>
            </body>
            </html>";
            
        } else {
            header("location: ../index.php");
            echo "Invaid ID";
            $msg_error = "No user found with ID: $id";
        }
    } else {
        $msg_error = "Please enter an ID";
    }
}
?>
