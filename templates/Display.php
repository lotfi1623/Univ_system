<?php
  include '../inc/db.php'; // Assuming 'db.php' contains your database connection details

  $sql = 'SELECT * FROM students';
  $result = mysqli_query($conn, $sql);

  if (!$result) {
    echo "Error: Unable to execute query. " . mysqli_error($conn);
    exit;
  }

  $students = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // Use mysqli_num_rows here within the loop
  $num_students = mysqli_num_rows($result);

  mysqli_free_result($result);
  mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students List</title>
  <style><?php include "../css/display.css" ?></style>
</head>
<body>
  <h1>Students List</h1>
  <table>
    <thead>
      <tr>
        <?php
          // Get column names from the first row of $students
          $columns = array_keys($students[0]);
          foreach ($columns as $column) {
            echo "<th>" . ucfirst($column) . "</th>"; // Capitalize the first letter
          }
        ?>
      </tr>
    </thead>
    <tbody>
      <?php
        if ($num_students > 0) {
          // Loop through each student row
          foreach ($students as $student) {
            echo "<tr>";
            foreach ($student as $value) {
              echo "<td>" . $value . "</td>";
            }
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='" . count($columns) . "'>No students found.</td></tr>";
        }
      ?>
    </tbody>
  </table>
</body>
</html>
