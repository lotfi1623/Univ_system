
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
      <title>Student System Mangement</title>
      <style><?php include "css/style.css" ?></style>
</head>
<body>
      <?php include "header.php" ?>
      <section class="main">
            <div>
                  <h2>Student Space<br><span>Student System Mangement</span></h2>
                  <h3>Add,Search,Delete,Modify,Enter,Display,Ranking,Top 3</h3>
                  <h4>Univ Contact </h4>
                  <div class="socialMedia">
                        <a href="https://www.facebook.com/uhbc.dz/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.facebook.com/fsei.uhbc/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.univ-chlef.dz/ar/" target="_blank"><i class="fa-solid fa-globe"></i></a>
                        <a href="https://www.univ-chlef.dz/fsei" target="_blank"><i class="fa-solid fa-globe"></i></a>
                  </div>
            </div>
      </section>

      <section class="cards" id="services">
            <h2 class="title">services</h2>
            <div class="content">
                  <div class="card">
                        <div class="icon">
                              <a href="templates/addNewStudent.php"><i class="fa-solid fa-user-plus"></i></a>
                        </div>
                        <div class="info">
                              <h3>Add a New Student</h3>
                              <p>add a new student by his id and firstname and lastname, birthday, speciality, Section,Group </p>
                        </div>
                  </div>
                  <div class="card">
                        <div class="icon">
                              <a href="templates/search.php"><i class="fa-solid fa-magnifying-glass"></i></a>
                        </div>
                        <div class="info">
                              <h3>Search</h3>
                              <p>Search for student by his firstname and lastname and ID</p>
                        </div>
                  </div>
                  <div class="card">
                        <div class="icon">
                              <a href=""><i class="fa-solid fa-trash"></i></a>
                        </div>
                        <div class="info">
                              <h3>Delete</h3>
                              <p>Delete student by his firstname and lastname and ID </p>
                        </div>
                  </div>
                  <div class="card">
                        <div class="icon">
                              <a href="templates/Modify.php"><i class="fa-solid fa-pen"></i></a>
                        </div>
                        <div class="info">
                              <h3>Modify</h3>
                              <p>modify the firstname and lastname, birthday, speciality, Section,Group, his exame grade and tutorials grade and practical work and the average of student </p>
                        </div>
                  </div>
                  <div class="card">
                        <div class="icon">
                              <a href="templates/enter.php"><i class="fa-solid fa-person-arrow-down-to-line"></i></a>
                        </div>
                        <div class="info">
                              <h3>Enter</h3>
                              <p>insert his exame grade and tutorials grade and practical work and the average of student </p>
                        </div>
                  </div>
                  <div class="card">
                        <div class="icon">
                              <a href="templates/Display.php"><i class="fa-solid fa-eye"></i></a>
                        </div>
                        <div class="info">
                              <h3>Display</h3>
                              <p>Display all the students and their information </p>
                        </div>
                  </div>
                  <div class="card">
                        <div class="icon">
                              <a href=""><i class="fa-solid fa-sort"></i></a>
                        </div>
                        <div class="info">
                              <h3>Ranking</h3>
                              <p>sort all the students by theirs global average </p>
                        </div>
                  </div>
                  <div class="card">
                        <div class="icon">
                              <a href=""><i class="fa-solid fa-sort-up"></i></a>
                        </div>
                        <div class="info">
                              <h3>Top 3</h3>
                              <p>Display the first three students by global average </p>
                        </div>
                  </div>
            </div>
      </section>
      <?php include "footer.php"?>
</body>
</html>