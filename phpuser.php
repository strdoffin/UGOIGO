<?php
include('connection.php');
session_start();
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $fname = $_POST['fname'];
    $surname = $_POST['surname'];
    $phone = $_POST['phone'];
    $car = "0";
    $frole = "Passenger";
    $sqlusername = "SELECT * FROM user_info WHERE username='$username'";
    $resultusername = $conn->query($sqlusername);
    $sqlemail = "SELECT * FROM user_info WHERE email='$email' and frole='Passenger'";
    $resultemail = $conn->query($sqlemail);
    $sqlname = "SELECT * FROM user_info WHERE fname='$fname' and surname='$surname' and frole='Passenger'";
    $resultname = $conn->query($sqlname);
    // Perform some basic validation (you might want to add more)
    if($email == "" || $username == "" || $password == "" || $confirm_password == "" || $fname == "" || $surname == "" || $phone == "" || $car == "" || $frole == "") {
        echo "Please type all the information";
    }
    else if ($password != $confirm_password) {
        echo "Passwords do not match";
    } 
    else if($resultusername->num_rows > 0) {
        echo "This username has already been used";
    }
    else if($resultemail->num_rows > 0) {
        echo "This email has already been use to register as passenger";
    }
    else if($resultname->num_rows > 0) {
        echo "This name and surname has already been use to register as passenger";
    } 
    else {
        // Hash the password before storing it in the database
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // SQL query to insert data into the database
        $sql = "INSERT INTO user_info (email, username, pass, fname, surname, tel, frole, car) VALUES ('$email', '$username', '$hashed_password', '$fname', '$surname', '$phone', '$frole', '$car')";

        // Execute the query
        if ($conn->query($sql) === TRUE) {
            echo "Registration successful";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Close the database connection
$conn->close();
?>