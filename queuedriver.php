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
    <link rel="stylesheet" href="style5.css">
    <link rel="stylesheet" href="styleqd.css">
    <link rel="stylesheet" href="stylesp.css">
    <title>qdriver</title>
</head>
<body>
    <div class="CreatePostButton" style="width: 381px; height: 50px; padding-top: 13px; padding-bottom: 13px; background: rgba(0, 0, 0, 0.30); box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px; overflow: hidden; justify-content: center; align-items: center; display: inline-flex">
        <div class="Queue" style="color: white; font-size: 20px; font-family: Montserrat; font-weight: 600; word-wrap: break-word">Queue</div>
      </div>
      <div class="PostSlider" style="width: 381px; height: 700px; padding-top: 54px; padding-bottom: 283px; padding-left: 24px; padding-right: 23px; border-radius: 10px; overflow: hidden; border: 1px rgba(0, 0, 0, 0.50) solid; flex-direction: column; justify-content: flex-start; align-items: center; display: inline-flex">
         <div class="WaitingForYourReply" style="color: black; font-size: 18px; font-family: Montserrat; font-weight: 600; word-wrap: break-word">Waiting for your reply</div>
         <div class="Req" style="width: 334px; height: 363px; position: relative">
          <div class="Queue" style="width: 334px; height: 314px; left: 0px; top: 0px; position: absolute">
            <div class="Package" style="width: 334px; height: 239px; left: 0px; top: 75px; position: absolute">

              <div class="Frame15" style="width: 334px; height: 214px; padding-top: 23px; padding-bottom: 14px; padding-left: 12px; padding-right: 12px; left: 0px; top: 25px; position: absolute; border-radius: 5px; border: 1px black solid; flex-direction: column; justify-content: flex-end; align-items: flex-start; gap: 15px; display: inline-flex">
                <div class="Price80" style="color: black; font-size: 16px; font-family: Montserrat; font-weight: 400; word-wrap: break-word">Price : 80$</div>
                <div class="DescriptionLoremIpsumDolorSitAmetConsecteturAdipisicingElitRecusandaeExcepturiAbEsseRepellendusIsteQuisSuntConsecteturTotamDoloresDolor" style="width: 310px; height: 142px; color: black; font-size: 16px; font-family: Montserrat; font-weight: 400; word-wrap: break-word">description :<br/>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae excepturi ab esse repellendus iste quis, sunt consectetur totam? Dolores, dolor.</div>
              </div>
              <div class="Btn" style="width: 127px; height: 34px; padding-left: 82px; padding-right: 82px; padding-top: 6px; padding-bottom: 6px; left: 207px; top: 0px; position: absolute; background: #D8FDFF; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 20px; overflow: hidden; border: 1px black solid; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                <div class="Text" style="color: black; font-size: 18px; font-family: Montserrat; font-weight: 400; word-wrap: break-word">Package#1</div>
              </div>
            </div>
            <div class="Profile" style="width: 289px; height: 80px; left: 0px; top: 0px; position: absolute">
              <div class="Rectangle3" style="width: 80px; height: 80px; left: 0px; top: 0px; position: absolute; background: white; border-radius: 50px; border: 1px black solid"></div>
              <div class="UsernamePassenger" style="left: 87px; top: 18px; position: absolute; color: black; font-size: 18px; font-family: Montserrat; font-weight: 400; word-wrap: break-word">username (passenger)</div>
              <div class="Group6" style="width: 163px; height: 20px; left: 87px; top: 45px; position: absolute">
                <div class="CarbonCircleFilled" style="width: 16px; height: 16px; left: 0px; top: 2px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                </div>
              </div>
            </div>
          </div>
          <a href="queueworking.php">
            <div class="Btn" style="width: 150px; height: 34px; padding-left: 82px; padding-right: 82px; padding-top: 6px; padding-bottom: 6px; left: 8px; top: 329px; position: absolute; background: #597671; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px; overflow: hidden; border: 1px black solid; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
              <div class="Text" style="color: white; font-size: 18px; font-family: Montserrat; font-weight: 400; word-wrap: break-word">Accept</div>
            </div>
          </a>
          
          <a href="feed-driver.php">
          <div class="Btn" style="width: 150px; height: 34px; padding-left: 82px; padding-right: 82px; padding-top: 6px; padding-bottom: 6px; left: 173px; top: 329px; position: absolute; background: white; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px; overflow: hidden; border: 1px black solid; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
            <div class="Text" style="color: black; font-size: 18px; font-family: Montserrat; font-weight: 400; word-wrap: break-word">Deny</div>
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
</body>
</html>