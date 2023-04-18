<?php 
require_once 'dbconn.php';

if (isset($_POST['survey'])) {
    $firstsur = $_POST['firstsur'];
    $middlesur = $_POST['middlesur'];
    $lastsur = $_POST['lastsur'];
    $gendersur = $_POST['gendersur'];
    $birthdaysur = $_POST['birthdaysur'];
    $phonesur = $_POST['phonesur'];
    $puroksur = $_POST['puroksur'];

    $sql = "INSERT INTO `residents`(`FirstName`, `MiddleName`, `LastName`, `Gender`, `Birthday`, `Phone`, `Purok`) 
    VALUES (?,?,?,?,?,?,?)";

    $stmt = $conn->prepare($sql);
    $stmt -> bind_param("sssssss", $firstsur,$middlesur,$lastsur, $gendersur,$birthdaysur,$phonesur,$puroksur);

    // if ($stmt->execute()) {
    //   echo "Record created successfully";
    // } else {
    //   echo "Error creating record: " . $conn->error. "please report the inconvenience";
    // }

  }
?>