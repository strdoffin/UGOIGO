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
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="stylesp.css">
    <title>Ugolgo Create Package</title>
</head>

<body>
    <!-- close btn -->
    

    <div class="container" id="blur">
        <div class="content">
            <div class="CreatePostButton">
                <div class="CreatePackage">Create Package</div>
            </div>
            <div class="Form">
                <div class="PackageContainer">
                    <div class="PriceXx">Price: xx$</div>
                    <div
                        class="DescriptionLoremIpsumDolorSitAmetConsecteturAdipisicingElitRecusandaeExcepturiAbEsseRepellendusIsteQuisSuntConsecteturTotamDoloresDolors">
                        Description:<br />Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae excepturi
                        ab esse repellendus iste quis, sunt consectetur totam? Dolores, dolors.
                    </div>
                </div>

                <div class="PackageName">
                    <div class="Text">Package Name</div>
                </div>
                <a href="#" onclick="toggle1()">
                    <div class="ButtonContainer">
                        <button class="DoneButton">
                            <div class="Text">Done</div>
                        </button>
                    </div>
                </a>
                <a href="feed-driver.php">
                    <button class="CloseButton">
                        <div class="Text">Close</div>
                    </button>
                </a>
            </div>
            <a href="#">
                <div class="AddPackage">
                    <div class="Text">Add Package</div>
                </div>
            </a>
        </div>
    </div>

    <div class="footer">
        <a href="signin.php">
        <i class="fa-solid fa-right-from-bracket"></i>
        </a>
        <a href="edit-pro.php">
            <img src="image/profile.png" class="footer-img">
        </a>
        <?php
            if($row['frole'] == "Driver") {
            ?>
            <a href="feed-driver.php">
            <img src="image/carlogo.png" class="footer-img">
            </a>
            <?php
            }
            else {
            ?>
            <a href="feed.php">
            <img src="image/carlogo.png" class="footer-img">
            </a>
            <?php
            }
            ?>
        <?php
            if($row['frole'] == "Driver") {
            ?>
            <a href="queuedriver.php">
            <img src="image/paper.png" class="footer-img">
            </a>
            <?php
            }
            else {
            ?>
            <a href="queue.php">
            <img src="image/paper.png" class="footer-img">
            </a>
            <?php
            }
            ?>
    </div>

    <script src="https://kit.fontawesome.com/f6dc56b1c3.js" crossorigin="anonymous"></script>
    <div id="popup">
        <div class="Confirm">
            <div class="Success">Success</div>
            <a href="#" onclick="toggle1()">
                <div class="Btn">
                    Close
                </div>
                <!-- <div class="Frame7"></div> -->
                <div class="CreatePackageSuccess">Create Package success.</div>
                <img src="image/correct.png" alt=" correct" class="Check">
        </div>
    </div>
</body>

<script>
        function toggle1() {
            var blur = document.getElementById('blur');
            blur.classList.toggle('active');
            var popup = document.getElementById('popup');
            popup.classList.toggle('active');
        }
    </script>
</html>