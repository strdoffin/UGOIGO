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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="style7.css">
  <link rel="stylesheet" href="stylebook.css">
  <title>Main2</title>
</head>
<body>
  </a>
<div class="round-image">
    <img src="image/kaitod.jpg" alt="รูปภาพ">
</div>
  <div class="PostSlider">
    <div class="CarLocationContainer">
      <div class="Car">
        <div class="CarVan">
          <i class="fas fa-car"></i> <span>Car:</span> <span>Sudan</span>
        </div>
        <div class="Seats5">
          <i class="fas fa-chair"></i> <span>Seats:</span> <span>2</span>
        </div>
      </div>
      <div class="LocationStatusContainer">
        <div class="LocationBangkok">
          <i class="fas fa-map-marker-alt"></i> <span>Location:</span> <span>Bangkok</span>
        </div>
        <div class="Status">
          <i class="fas fa-info-circle"></i> <span>Status</span>
        </div>
      </div>
      <div class="Tel">
        <div class="Tel0123456789">
          <i class="fas fa-phone"></i> <span>Tel:</span> <span>098-765-4321</span>
        </div>
      </div>
    </div>
    <div class="Frame13">
      <div class="Price1Description">
        Price: 100$<br/><br/>Description:<br/>เป็นคนอารมณ์ร้อนมากๆ คุยยาก
      </div>
    </div>

    <div class="BtnGroup">
        <div class="Btn1" id="packageBtn">
          <div class="Text">Package</div>
        </div>
        <div class="Btn2" id="bookBtn">
          <div class="Text">Book</div>
        </div>
        <div class="Btn3">
          <a href="feed.php">
            <div class="Text">Next Driver</div>
          </a>
        </div>
      </div>
      </a>
      </div>
    </div>
  </div>
</div>
<div class="popup" id="popup">
    <div class="popup-content">
        <a href ="feed2.php">
        <button class="close-btn" >X</button>
    </a>
        <div class="PackageGroup">
            <!-- Group 1 -->
            <div class="Group1">
                <div class="Frame15">
                    <div class="desc">description :<br/>No package</div>
                    <div class="Pricce80">-----</div>
                    <div class="Btn SelectButton Package1">Select</div>
                    <div class="Btn PackageButton Package1">Package#1</div>
                </div>
            </div>
            </div>
        </div>
    </div>
   
    <div class="popupbook" id="popupbook">
      <div class="popup-content-book">
        <div class="PopUp" style="width: 381px; height: 383px; position: relative; background: white; border-radius: 10px; overflow: hidden; border: 1px black solid">
            <div class="PackageYouChoose" style="left: 20px; top: 20px; position: absolute; color: black; font-size: 18px; font-family: Montserrat; font-weight: 600; word-wrap: break-word">Package you choose</div>
            <div class="YouDidnTChooseAnyPackage" style="left: 20px; top: 54px; position: absolute; color: black; font-size: 18px; font-family: Montserrat; font-weight: 400; word-wrap: break-word">You didn't choose any package.</div>
            <div class="FillInformationYouNeedToGoBelow" style="left: 20px; top: 92px; position: absolute; color: black; font-size: 18px; font-family: Montserrat; font-weight: 400; word-wrap: break-word">Fill information you need to go below.</div>
            <div class="Btn" style="width: 150px; padding-left: 82px; padding-right: 82px; padding-top: 6px; padding-bottom: 6px; left: 32px; top: 313px; position: absolute; background: #597671; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px; overflow: hidden; border: 1px black solid; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
              <div class="Text" style="color: white; font-size: 18px; font-family: Montserrat; font-weight: 400; word-wrap: break-word" onclick="closePopup()">Confirm</div>
            </div>
            <div class="Btn"  style="width: 150px; padding-left: 82px; padding-right: 82px; padding-top: 6px; padding-bottom: 6px; left: 197px; top: 313px; position: absolute; background: white; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px; overflow: hidden; border: 1px black solid; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
              <div class="Text" style="color: black; font-size: 18px; font-family: Montserrat; font-weight: 400; word-wrap: break-word" onclick="closePopup()">Cancel</div>
                </div>
            <div class="Group1" style="width: 334px; height: 137px; left: 24px; top: 130px; position: absolute">
              <div class="Frame15" style="width: 334px; height: 112px; padding-top: 23px; padding-left: 12px; padding-right: 12px; left: 0px; top: 25px; position: absolute; border-radius: 5px; border: 1px black solid; flex-direction: column; justify-content: flex-end; align-items: flex-start; gap: 15px; display: inline-flex">
                <div class="Pricce500100" style="color: black; font-size: 16px; font-family: Montserrat; font-weight: 400; word-wrap: break-word">Pricce : 500 บาท - 100 บาท (แล้วแต่จะเสนอ)</div>
                <div class="Description" style="width: 310px; height: 142px; color: black; font-size: 16px; font-family: Montserrat; font-weight: 400; word-wrap: break-word">description :<br/>อยากไปที่ ------ แล้วไปที่ ------- บลาๆๆ</div>
              </div>
              <div class="Btn" style="width: 127px; height: 34px; padding-left: 82px; padding-right: 82px; padding-top: 6px; padding-bottom: 6px; left: 0px; top: 0px; position: absolute; background: #D8FDFF; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 20px; overflow: hidden; border: 1px black solid; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                <div class="Text" style="color: black; font-size: 18px; font-family: Montserrat; font-weight: 400; word-wrap: break-word">Information</div>
              </div>
            </div>
            <div class="TheInformationWillBeInTheQueueField" style="left: 24px; top: 274px; position: absolute; color: black; font-size: 16px; font-family: Montserrat; font-weight: 400; word-wrap: break-word">the information will be in the queue field.</div>
          </div>
        </div>
    </div>

    <script>
      function closePopup() {
        document.getElementById('popupbook').style.display = 'none';
      }
    </script>
  </div>
  
<script src="packagepop.js"></script>


  
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

  <script src="feed.js"></script>
  <script src="https://kit.fontawesome.com/f6dc56b1c3.js" crossorigin="anonymous"></script>
</body>
</html>
