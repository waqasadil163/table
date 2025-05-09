<?php

    ob_start();

    // Server
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $localhost = mysqli_connect($server, $username, $password);

    // Database
    $database = "CREATE DATABASE `database`";
    $query = mysqli_query($localhost, $database);

    // Table
    $table = "CREATE TABLE `database` . `table` (`Sno` INT(10) PRIMARY KEY NOT NULL AUTO_INCREMENT, `Name` VARCHAR(50) NOT NULL, `Phone` VARCHAR(11) NOT NULL, `Email` VARCHAR(50) NOT NULL, `CNIC` BIGINT(13) NOT NULL, `Program` VARCHAR(10) NOT NULL, `Semester` INT(10) NOT NULL, `CGPA` FLOAT(5) NOT NULL, `DOB` DATE NOT NULL, `Status` VARCHAR(20))";
    $query = mysqli_query($localhost, $table);

    // Selecting Database
    $sdb = mysqli_select_db($localhost, "database");

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $cnic = $_POST['cnic'];
        $program = $_POST['program'];
        $semester = $_POST['semester'];
        $cgpa = $_POST['cgpa'];
        $dob = $_POST['dob'];
        $status = 'Pending';

        // Values
        $tvl = "INSERT INTO `table` (`Name`, `Phone`, `Email`, `CNIC`, `Program`, `Semester`, `CGPA`, `DOB`, `Status`) VALUES ('$name', '$phone', '$email', '$cnic', '$program', '$semester', '$cgpa', '$dob', '$status')";
        $query = mysqli_query($localhost, $tvl);
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }

    require('index.html');
    ob_end_flush();

?>