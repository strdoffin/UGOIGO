
<?php
session_start();
include('connection.php');
// Check if the form is submitted
    // Retrieve data from the form
    // Validate user credentials (replace this with your actual validation logic)
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Sign In</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h2 >Sign In</h2>
  <form id ='loginform'>
    <div class="input-bx">
        <input type="text" required="required" name="username" id="username"/>
        <span>Username</span>
    </div>
    <div class="input-bx">
        <input type="password" required="required" name="password" id="password"/>
        <span>Password</span>
    </div>
   <button type="button" onclick="submitForm()">
    <div class="SignUpBtn" style="width: 336px; height: 37px; padding-top: 7px; padding-bottom: 8px; background: #597671; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 5px; overflow: hidden; border: 1px black solid; justify-content: center; align-items: center; display: inline-flex">
        <div class="SignIn" style="text-align: center; color: white; font-size: 18px; font-family: Montserrat; font-weight: 400; word-wrap: break-word">Sign in</div>
      </div>
    </button>
    <p>Don't have an account? <a href="role.php">Sign up</a></p>
</form>
</div>
<script>
    function submitForm() {
      // Retrieve form data
      var username = document.getElementById('username').value;
      var password = document.getElementById('password').value;
      // Create an XMLHttpRequest object
      var xhr = new XMLHttpRequest();
      // Configure it: POST-request for the login.php script
      xhr.open('POST', 'phpsignin.php', true);
      xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

      // Define the callback function to handle the response
      xhr.onreadystatechange = function() {
      if (xhr.readyState === 4) {
        if (xhr.status === 200) {
        // Check the response from the server
            if (xhr.responseText.trim() === "Successfully login as driver") {
          // Redirect to the dashboard page upon successful login
              alert(xhr.responseText);
              window.location.href = 'feed-driver.php';
            }
            else if (xhr.responseText.trim() === "Successfully login as passenger"){
              alert(xhr.responseText);
              window.location.href = 'feed.php';
            }
            else {
              alert(xhr.responseText);
            }
        } 
      else {
        // Display an error message if there's an issue with the request
        alert('Error: ' + xhr.status);
      }
      }
    };

      // Prepare the data to be sent
      var data = 'username=' + encodeURIComponent(username) + '&password=' + encodeURIComponent(password);

      // Send the request with the form data
      xhr.send(data);
    }
</script>
</body>
</html>
