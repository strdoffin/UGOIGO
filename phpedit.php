<?php
include('connection.php');
session_start();
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $userinfo_id = $_POST['userinfo_id'];
    $pass = $_POST['pass'];
    $confirm_pass = $_POST['confirm_pass'];
    $fname = $_POST['fname'];
    $surname = $_POST['surname'];
    $tel = $_POST['tel'];
    // Validate user credentials (replace this with your actual validation logic)
    if($pass != "" || $confirm_pass != "") {
        if($pass != $confirm_pass) {
            echo "Passwords do not match";
        }
        else {
            if($fname != "" && $surname != "" && $tel != "") {
                $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
                $sql = "UPDATE user_info SET pass = '$hashed_password', fname = '$fname', surname = '$surname', tel = '$tel' WHERE userinfo_id='$userinfo_id'";

                if ($conn->query($sql) === TRUE) {
                    echo "Saved";
                } 
                else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            else {
                echo "Please type all the information";
            }
        }
    }
    else {
        if($fname != "" && $surname != "" && $tel != "") {
            $sql = "UPDATE user_info SET fname = '$fname', surname = '$surname', tel = '$tel' WHERE userinfo_id='$userinfo_id'";

            if ($conn->query($sql) === TRUE) {
                echo "Saved";
            } 
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        else {
            echo "Please type all the information";
        }
    }
}
$conn->close();
?>