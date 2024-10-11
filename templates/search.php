<?php

  include "../inc/db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style><?php include "../css/modify.css" ?></style>
  <title>Search Students</title>
</head>
<body>
    <div class="container my-5">
      <form action="search.php" method="POST">
        <input type="text" placeholder="search data"
        name="search">
        <button name="submit">Search</button>
      </form>
      <div class="container my-5">
        <table class="table">
          <?php
          if (isset($_POST['submit'])) {
            $search=$_POST['search'];
            $sql="SELECT * FROM `students` WHERE id = '$search' or firstName = '$search' or lastName = '$search' ";
            $result=mysqli_query($conn,$sql);

            if ($result) {
             if(mysqli_num_rows($result)>0){
              echo '<thead>
              <tr>
              <th>ID</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>birthday</th>
              <th>speciality</th>
              <th>Section</th>
              <th>Group</th>
              </tr>
              </thead>
              ';
              while($row=mysqli_fetch_assoc($result)){
              echo '<tbody>
              <tr>
                <td>'.$row['id'].'</td>
                <td>'.$row['firstName'].'</td>
                <td>'.$row['lastName'].'</td>
                <td>'.$row['birthday'].'</td>
                <td>'.$row['speciality'].'</td>
                <td>'.$row['section'].'</td>
                <td>'.$row['grp'].'</td>
              </tr>
              </tbody>

              ';
            }
             }else {
              echo '<h2>DATA NOT FOUND</h2>';
             }
            }
          }
          ?>
          
        </table>
      </div>
          
    </div>
    

</body>
</html>
