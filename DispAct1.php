<?php

$firstName = $_GET["firstName"]; 
$middleName = $_GET["middleName"]; 
$lastName = $_GET["lastName"];

$prelim = $_GET["prelim"];
$midterm = $_GET["midterm"];
$finals = $_GET["finals"];

$studentName = "$lastName, $firstName $middleName";
$average = ($prelim * .30) + ($midterm * .30) + ($finals * .40)

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Information and Grades</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
  <link rel="stylesheet" href="StyleAct1.css">
</head>

<body>

<div class="container">
  <h1>WELCOME APPRENTICE,</h1>
  <h1><?php echo $studentName; ?></h1>
  <hr />
  <h2>Grades</h2>
  <h3>Prelim: <?php echo $prelim ?></h3>
  <h3>Midterm: <?php echo $midterm ?></h3>
  <h3>Finals: <?php echo $finals ?></h3> 
  <h3>Average: <?php echo $average ?></h3>
  
  <form action="Activity1.php" method="post">
    <button type="submit" id="back" name="back" value="back">Back</button>
  </form>
</div>

</body>
</html>

