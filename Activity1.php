<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Information and Grades</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="Style1.css">
  <script>
    function clearForm() {
      document.getElementById("studentForm").reset();
    }
  </script>
</head>
<body>
 
<form id="studentForm" action="DispAct1.php" method="get">

    <h1>Student Information</h1>
  First Name: <input type="text" id="firstName" name="firstName" />
  <br />
  Middle Name: <input type="text" id="middleName" name="middleName" />
  <br />
  Last Name: <input type="text" id="lastName" name="lastName" />
  <br />

  

  <h1>Student Grades</h1>

  Prelim: <input type="text" id="prelim" name="prelim" />
  <br />
  Midterms: <input type="text" id="midterm" name="midterm" />
  <br />
  Finals: <input type="text" id="finals" name="finals" />

  <br></br>

  <button type="submit" id="save" name="save" value="save">Submit</button>
  <button type="button" id="clear" name="clear" onclick="clearForm()">Clear</button>

  

</form>
</body>

</html>
