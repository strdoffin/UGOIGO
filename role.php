
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">

    <title>Document</title>
</head>
<body>
    <form>
        <div class="container" id="blur">
            <div class="content">
                <h2 >Choose Your Role</h2>   
                <script src="imgscript.js"></script>
            <a href="#" onclick="toggle()" class = "button">Choose Role</a>
        </div>

        <p>Already have an account? <a href="signin.php">Sign up</a></p>
            </div>
            <div id="popup">
                <h2>Choose Your Role</h2>
                <a href="signup.php" class="buttonrole">User</a>
                <a href="signupdriver.php" class="buttonrole">Driver</a>
            <div id="myDIV">
                <div class="input-bx">
                </div>
              </div>
            </select>
                <a href="#" onclick="toggle()">Close</a>
            </div>
            <script>
                function toggle() {
                    var blur=document.getElementById('blur');
                    blur.classList.toggle('active');
                    var popup = document.getElementById('popup');
                    popup.classList.toggle('active');
                }
            </script>
    
</form>
</div>
</body>
</html>