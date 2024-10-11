<?php
    $moyennes = array();
    $sumMoyennes = 0;
    if (isset($_POST['submit1'])) {
        for ($i = 1; $i <= 7; $i++) {
            $note_td = $_POST['note_td' . $i];
            $note_tp = $_POST['note_tp' . $i];
            $exam = $_POST['exam' . $i];

            $moyenne = ($note_td + $note_tp + $exam) / 3;
            $moyennes[$i] = $moyenne;
            $sumMoyennes = $sumMoyennes + $moyennes[$i];
        }
        $global_average = $sumMoyennes / 16;
    }
    if (isset($_POST['submit2'])) {
      for ($i = 8; $i <= 14; $i++) {
          $note_td = $_POST['note_td' . $i];
          $note_tp = $_POST['note_tp' . $i];
          $exam = $_POST['exam' . $i];

          $moyenne = ($note_td + $note_tp + $exam) / 3;
          $moyennes[$i] = $moyenne;
      }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Enter the grades of student</title>
      <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: linear-gradient(135deg, #ff8a02, #2c2c2c);
}

h1 {
    text-align: center;
    color: white;
}

table {
    width: 100%;
    border-collapse: collapse;
    background-color: #f2f2f2;
    margin-bottom: 20px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 8px;
    text-align: center;
}

th {
    background-color: #eee;
    color: #333;
}

input[type="text"] {
    width: 60px;
    text-align: center;
}

.button-container {
    text-align: center;
}

input[type="submit"] {
    margin-top: 10px;
    padding: 20px 20px;
    width: 20%;
    margin-bottom: 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 10px;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

input[type="submit"]:active {
    background-color: #3e8e41;
}

      </style>
</head>
<body>
      <h1>Semestre 1</h1>
      <form method="post">
      <table>
          <thead>
            <tr>
              <th>Modules</th>
              <th>Coef</th>
              <th>Créd</th>
              <th>Note TD</th>
              <th>Note TP</th>
              <th>Exam</th>
              <th>Moyenne</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Architecture Des Ordinateurs</td>
              <td>3</td>
              <td>5</td>
              <td><input type="text" name="note_td1" value="0"></td>
              <td><input type="text" name="note_tp1" value="0"></td>
              <td><input type="text" name="exam1" value="0"></td>
              <td><?php echo isset($moyennes[1]) ? $moyennes[1] : ''; ?></td>
            </tr>
            <tr>
              <td>Algorithmique Et Structure De Donnees 3</td>
              <td>3</td>
              <td>6</td>
              <td><input type="text" name="note_td2" value="0"></td>
              <td><input type="text" name="note_tp2" value="0"></td>
              <td><input type="text" name="exam2" value="0"></td>
              <td><?php echo isset($moyennes[2]) ? $moyennes[2] : ''; ?></td>
            </tr>
            <tr>
              <td>Systemes D'Information</td>
              <td>3</td>
              <td>5</td>
              <td><input type="text" name="note_td3" value="0"></td>
              <td><input type="text" name="note_tp3" value="0"></td>
              <td><input type="text" name="exam3" value="0"></td>
              <td><?php echo isset($moyennes[3]) ? $moyennes[3] : ''; ?></td>
            </tr>
            <tr>
              <td>Theorie Des Graphes</td>
              <td>2</td>
              <td>4</td>
              <td><input type="text" name="note_td4" value="0"></td>
              <td><input type="text" name="note_tp4" value="0"></td>
              <td><input type="text" name="exam4" value="0"></td>
              <td><?php echo isset($moyennes[4]) ? $moyennes[4] : ''; ?></td>
            </tr>
            <tr>
              <td>Methodes Numeriques</td>
              <td>2</td>
              <td>4</td>
              <td><input type="text" name="note_td5" value="0"></td>
              <td><input type="text" name="note_tp5" value="0"></td>
              <td><input type="text" name="exam5" value="0"></td>
              <td><?php echo isset($moyennes[5]) ? $moyennes[5] : ''; ?></td>
            </tr>
            <tr>
              <td>Logique Mathematique</td>
              <td>2</td>
              <td>4</td>
              <td><input type="text" name="note_td6" value="0"></td>
              <td><input type="text" name="note_tp6" value="0"></td>
              <td><input type="text" name="exam6" value="0"></td>
              <td><?php echo isset($moyennes[6]) ? $moyennes[6] : ''; ?></td>
            </tr>
            <tr>
              <td>Anglais 3</td>
              <td>1</td>
              <td>2</td>
              <td><input type="text" name="note_td7" value="0"></td>
              <td><input type="text" name="note_tp7" value="0"></td>
              <td><input type="text" name="exam7" value="0"></td>
              <td><?php echo isset($moyennes[7]) ? $moyennes[7] : ''; ?></td>
            </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="6" style="text-align:center">S1 Average:</td>
                    <td><?php echo number_format($global_average, 2);?></td>
                </tr>
            </tfoot>
      </table>
      
      <div class="button-container">
            <input type="submit" name="submit1" value="Submit">
        </div>
      </form>
      <h1>Semestre 2</h1>
      <form method="post">
      <table>
          <thead>
            <tr>
              <th>Modules</th>
              <th>Coef</th>
              <th>Créd</th>
              <th>Note TD</th>
              <th>Note TP</th>
              <th>Exam</th>
              <th>Moyenne</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Theorie Des Langages</td>
              <td>2</td>
              <td>5</td>
              <td><input type="text" name="note_td8" value="0"></td>
              <td><input type="text" name="note_tp8" value="0"></td>
              <td><input type="text" name="exam8" value="0"></td>
              <td><?php echo isset($moyennes[8]) ? $moyennes[8] : ''; ?></td>
            </tr>
            <tr>
              <td>Systeme d'exploitation 1</td>
              <td>3</td>
              <td>5</td>
              <td><input type="text" name="note_td9" value="0"></td>
              <td><input type="text" name="note_tp9" value="0"></td>
              <td><input type="text" name="exam9" value="0"></td>
              <td><?php echo isset($moyennes[9]) ? $moyennes[9] : ''; ?></td>
            </tr>
            <tr>
              <td>Bases de donnees </td>
              <td>3</td>
              <td>5</td>
              <td><input type="text" name="note_td10" value="0"></td>
              <td><input type="text" name="note_tp10" value="0"></td>
              <td><input type="text" name="exam10" value="0"></td>
              <td><?php echo isset($moyennes[10]) ? $moyennes[10] : ''; ?></td>
            </tr>
            <tr>
              <td>Reseaux</td>
              <td>3</td>
              <td>5</td>
              <td><input type="text" name="note_td11" value="0"></td>
              <td><input type="text" name="note_tp11" value="0"></td>
              <td><input type="text" name="exam11" value="0"></td>
              <td><?php echo isset($moyennes[11]) ? $moyennes[11] : ''; ?></td>
            </tr>
            <tr>
              <td>Programation oriente objet</td>
              <td>2</td>
              <td>4</td>
              <td><input type="text" name="note_td12" value="0"></td>
              <td><input type="text" name="note_tp12" value="0"></td>
              <td><input type="text" name="exam12" value="0"></td>
              <td><?php echo isset($moyennes[12]) ? $moyennes[12] : ''; ?></td>
            </tr>
            <tr>
              <td>Developpement d'applications Web</td>
              <td>2</td>
              <td>4</td>
              <td><input type="text" name="note_td13" value="0"></td>
              <td><input type="text" name="note_tp13" value="0"></td>
              <td><input type="text" name="exam13" value="0"></td>
              <td><?php echo isset($moyennes[13]) ? $moyennes[13] : ''; ?></td>
            </tr>
            <tr>
              <td>Anglais 3</td>
              <td>1</td>
              <td>2</td>
              <td><input type="text" name="note_td14" value="0"></td>
              <td><input type="text" name="note_tp14" value="0"></td>
              <td><input type="text" name="exam14" value="0"></td>
              <td><?php echo isset($moyennes[14]) ? $moyennes[14] : ''; ?></td>
            </tr>
            </tbody>
      </table>
      <div class="button-container">
      <input type="submit" name = "submit2" value="Submit">
      </div>
      </form>
</body>
</html>
