<?php 
require_once 'dbconn.php';

if (isset($_POST['signup'])) {
    $first = $_POST['first'];
    $middle = $_POST['middle'];
    $last = $_POST['last'];
    $gender = $_POST['gender'];
    $birthday = $_POST['birthday'];
    $phone = $_POST['phone'];
    $position = $_POST['position'];

    $sql = "INSERT INTO `signup`(`FirstNameSign`, `MiddleNameSign`, `LastNameSign`, `GenderSign`, `BirthdaySign`, `PhoneSign`, `PositionSign`) 
    VALUES (?,?,?,?,?,?,?)";

    $stmt = $conn->prepare($sql);
    $stmt -> bind_param("sssssss", $first,$middle,$last, $gender,$birthday,$phone,$position);

    if ($stmt->execute()) {
      echo "Record created successfully";
    } else {
      echo "Error creating record: " . $conn->error. "please report the inconvenience";
    }

  }
?>