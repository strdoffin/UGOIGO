
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Sign In</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style1.css">
</head>
<body>
    <form name="signupform1">
        <div class="container" id="blur">
            <div class="content">
                <h2 >Sign Up</h2>   
                <label for="imageInput">
                    <img src="https://img5.pic.in.th/file/secure-sv1/Pngtreevector-pen-icon_3785500.png" id="previewImage" />
                <input type="file" id="imageInput" style="display: none;" />
                <script src="phototest.js"></script>
        </div>
        </div>
        <label>Choose Your Car Type</label>
        <div class="dropdown-container">
            <select id="car" name="car">
              <option value="Sudan">Sedan</option>
              <option value="Suv">Suv</option>
              <option value="Minivan">Minivan</option>
              <option value="Van">Van</option>
              <option value="Minibus">Minibus</option>
            </select>
          </div>
        </div>
          <div class="input-group">
            <div class="input-bx2">
                <input type="text" name="fname" required="required" id="fname" />
                <span>name</span>
            </div>
            <div class="input-bx2">
                <input type="text" name="surname" required="required" id="surname" />
                <span>surname</span>
            </div>
        </div>
        <div class="input-bx">
            <input type="text" name="email" required="required" id="email" />
            <span>Email</span>
        </div>
        <div class="input-bx">
            <input type="text" name="username" required="required" id="username" />
            <span>Username</span>
        </div>
        <div class="input-bx">
            <input type="password" name="password" required="required" id="password" />
            <span>Password</span>
        </div>
        <div class="input-bx">
            <input type="password" name="confirm_password" required="required" id="confirm_password" />
            <span>Confirm Password</span>
        </div>
        <div class="input-bx" type="tel" id="phone" name="phone" pattern="[+]{1}[0-9]{11,14}" required> 
            <input type="tel" name="phone" id="phone" required="required" />
            <span>tel no.</span>
        </div>
       <button type="button" onclick="submitForm()">
        <div class="SignUpBtn" style="width: 336px; height: 37px; padding-top: 7px; padding-bottom: 8px; background: #597671; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 5px; overflow: hidden; border: 1px black solid; justify-content: center; align-items: center; display: inline-flex">
            <div class="SignIn" style="text-align: center; color: white; font-size: 18px; font-family: Montserrat; font-weight: 400; word-wrap: break-word">Sign Up</div>
          </div>
        </button>
        <p>Already have an account? <a href="signin.php">Sign in</a></p>
            </div>
</form>
</div>
<script defer>
    function toggle() {
                    var blur=document.getElementById('blur');
                    blur.classList.toggle('active');
                    var popup = document.getElementById('popup');
                    popup.classList.toggle('active');
                }

    function submitForm() {
      // Retrieve form data
      var username = document.getElementById('username').value;
      var password = document.getElementById('password').value;
      var email = document.getElementById('email').value;
      var confirm_password = document.getElementById('confirm_password').value;
      var fname = document.getElementById('fname').value;
      var surname = document.getElementById('surname').value;
      var phone = document.getElementById('phone').value;
      var car = document.getElementById('car').value;
      // Create an XMLHttpRequest object
      var xhr = new XMLHttpRequest();
      // Configure it: POST-request for the login.php script
      xhr.open('POST', 'phpdriver.php', true);
      xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

      // Define the callback function to handle the response
      xhr.onreadystatechange = function() {
    if (xhr.readyState === 4) {
        if (xhr.status === 200) {
        // Check the response from the server
            if (xhr.responseText.trim() === "Registration successful") {
          // Redirect to the dashboard page upon successful login
              alert(xhr.responseText);
              window.location.href = 'signin.php'; //Redirect to homepage
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
      var data = 'username=' + encodeURIComponent(username) + '&password=' + encodeURIComponent(password)
      + '&email=' + encodeURIComponent(email) + '&confirm_password=' + encodeURIComponent(confirm_password) + '&fname=' + encodeURIComponent(fname)
      + '&surname=' + encodeURIComponent(surname) + '&phone=' + encodeURIComponent(phone) + '&car=' + encodeURIComponent(car);
 
      // Send the request with the form data
      xhr.send(data);
    }
  </script>
</body>
</html>
