<!DOCTYPE html>
<html>
  <head>
    <title>My Website</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  </head>
  <body>
<?php
// Set the birthdate
$birthdate = '2003-04-24';

// Create a DateTime object from the birthdate
$birthdateObj = new DateTime($birthdate);

// Get the current date
$currentDate = new DateTime();

// Calculate the difference between the current date and the birthdate
$diff = $birthdateObj->diff($currentDate);

// Get the age in years
$age = $diff->y;

// Output the age
echo 'Age: ' . $age;

?>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
