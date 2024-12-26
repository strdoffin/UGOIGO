<?php
include('connection.php');
session_start();
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Validate user credentials (replace this with your actual validation logic)
    $sql = "SELECT * FROM user_info WHERE username='$username'";
    $result = $conn->query($sql);
    if($username == "" || $password == "") {
        echo "Please type your username and password";
    }
    else if ($result->num_rows > 0) {
        // User is authenticated, you can redirect to a dashboard or perform other actions
        $row = $result->fetch_assoc();
        $hashed_password = $row['pass'];

        // Verify the hashed input password against the stored hashed password
        if (password_verify($password, $hashed_password)) {
            // User is authenticated
            $_SESSION['userinfo_id'] = $row['userinfo_id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['frole'] = $row['frole'];
            if($row['frole'] == "Driver") {
                echo "Successfully login as driver";
            }
            else if ($row['frole'] == "Passenger"){
                echo "Successfully login as passenger";
            }
        } else {
            echo "Invalid password";
        }
    } 
    else {
        echo "Invalid username";
    }
}
$conn->close();
?>