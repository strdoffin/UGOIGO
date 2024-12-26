<?php
session_start();
include('connection.php');
// Check if the form is submitted
    // Retrieve data from the form
    // Validate user credentials (replace this with your actual validation logic)
    $sql = "SELECT * FROM user_info WHERE userinfo_id='$_SESSION[userinfo_id]'";
    $result = $conn->query($sql);
        // User is authenticated, you can redirect to a dashboard or perform other actions
    $row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Sign In</title>
  <link rel="stylesheet" href="style3.css">
  <link rel="stylesheet" href="style1.css">
</head>
<body>
    <form>
        <div class="container" id="blur">
            <div class="content">
                <h2 >Edit Profile</h2>   
                <label for="imageInput">
                    <img src="img.png" id="previewImage" />
                </label>
                <input type="file" id="imageInput" style="display: none;" />
                <script src="phototest.js"></script>
        </div>
        <div class="input-bx">
            <input type="text" required="required" name="username" id="username" value= "<?php echo $row['username']; ?>"readonly/>
            <span>Username 🖍</span>
        </div>
        <div class="input-bx">
            <input type="text" required="required" name="fname" id="fname" value= "<?php echo $row['fname']; ?>"/>
            <span>Name 🖍</span>
        </div>
        <div class="input-bx">
            <input type="text" required="required" name="surname" id="surname" value= "<?php echo $row['surname']; ?>"/>
            <span>Surname 🖍</span>
        </div>
        <div class="input-bx">
            <input type="text" required="required" name="email" id="email" value= "<?php echo $row['email']; ?>"readonly/>
            <span>Email 🖍</span>
        </div>
        <div class="input-bx">
            <input type="password" name="pass" id="pass" placeholder="Leave blank if no change needed"/>
            <span>New Password 🖍</span>
        </div>
        <div class="input-bx">
            <input type="password" name="confirm_pass" id="confirm_pass" placeholder="Leave blank if no change needed"/>
            <span>Confirm Password 🖍</span>
        </div>
        <div class="input-bx"> 
            <input type="tel" name="tel" id="tel" required="required" value= "<?php echo $row['tel']; ?>"/>
            <span>Tel no. 🖍</span>
        </div>
        <?php
          if ($row['frole'] == "Driver") {
        ?>
        <div class="input-bx"> 
            <input type="text" required="required" name="car" id="car" value= "<?php echo $row['car']; ?>" readonly/>
            <span>Car 🖍</span>
        </div>
        <?php
        }
        ?>
        <input type="hidden" name="userinfo_id" id="userinfo_id" value= "<?php echo $row['userinfo_id']; ?>" readonly/>
        <button type="button" onclick="submitForm()">
        <div class="SignUpBtn" style="width: 336px; height: 37px; padding-top: 7px; padding-bottom: 8px; background: #597671; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 5px; overflow: hidden; border: 1px black solid; justify-content: center; align-items: center; display: inline-flex">
            <div class="SignIn" style="text-align: center; color: white; font-size: 18px; font-family: Montserrat; font-weight: 400; word-wrap: break-word">Save</div>
          </div>
        </button>
    
          <button type="button" onclick="goBack()" style="margin-top: 10px;">
            <div class="SignUpBtn" style="width: 336px; height: 37px; padding-top: 7px; padding-bottom: 8px; background: #597671; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 5px; overflow: hidden; border: 1px black solid; justify-content: center; align-items: center; display: inline-flex">
              <div class="SignIn" style="text-align: center; color: white; font-size: 18px; font-family: Montserrat; font-weight: 400; word-wrap: break-word">Back</div>
            </div>
          </button>
        </div>
      <script>
        function goBack() {
          window.history.back();
        }
      </script>
    </body>
</form>
</div>
<script>
    function submitForm() {
      // Retrieve form data
      var userinfo_id = document.getElementById('userinfo_id').value;
      var pass = document.getElementById('pass').value;
      var confirm_pass = document.getElementById('confirm_pass').value;
      var fname = document.getElementById('fname').value;
      var surname = document.getElementById('surname').value;
      var tel = document.getElementById('tel').value;
      // Create an XMLHttpRequest object
      var xhr = new XMLHttpRequest();
      // Configure it: POST-request for the login.php script
      xhr.open('POST', 'phpedit.php', true);
      xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

      // Define the callback function to handle the response
      xhr.onreadystatechange = function() {
    if (xhr.readyState === 4) {
        if (xhr.status === 200) {
        // Check the response from the server
            if (xhr.responseText.trim() === "Saved") {
          // Redirect to the dashboard page upon successful login
              alert(xhr.responseText);
              window.location.href = 'edit-pro.php'; //Redirect to homepage
            } 
        else {
          // Display an error message
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
      var data = 'pass=' + encodeURIComponent(pass) + '&confirm_pass=' + encodeURIComponent(confirm_pass) + '&fname=' + encodeURIComponent(fname)
      + '&surname=' + encodeURIComponent(surname) + '&tel=' + encodeURIComponent(tel) + '&userinfo_id=' + encodeURIComponent(userinfo_id);
 
      // Send the request with the form data
      xhr.send(data);
    }
</script>
</body>
</html>