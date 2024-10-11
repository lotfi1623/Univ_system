<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Students</title>
    <style><?php include '../css/modify.css'?></style>
</head>
<body>
    <div class="container">
    <form action="Modify.php" method="post">  <div class="filter">
            <table>
                <thead>
                    <th>id</th>
                    <th>First Name</th>  <th>Last Name</th>
                    <th>Birthday</th>
                    <th>Speciality</th>
                    <th>Section</th>
                    <th>Grp</th>
                    <th colspan="2">Action</th>
                </thead>
                <tbody>
                    <?php
                        include '../inc/db.php'; // Assuming 'db.php' contains your database connection details

                        $sql = 'SELECT * FROM students';
                        $result = mysqli_query($conn, $sql);

                        if (!$result) {
                            die("Invalid query: " . $connection->error);
                        }

                        // Read data of each row and calculate average (assuming numerical grades)
                           while ($row = $result->fetch_assoc()) {
                            echo "
                                <tr>
                                    <td>$row[id]</td>
                                    <td>$row[firstName]</td>
                                    <td>$row[lastName]</td>
                                    <td>$row[birthday]</td>
                                    <td>$row[speciality]</td>
                                    <td>$row[section]</td>
                                    <td>$row[grp]</td>
                                    <td><a class='btn btn-primary btn-sm' href='../templates/edit.php?id=$row[id]'>Edit</a></td>
                                    <td><a class='btn btn-danger btn-sm' href='../templates/Delete.php?id=$row[id]'>Delete</a></td>
                                </tr>
                            ";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </form>
    </div>
</body>
</html>
