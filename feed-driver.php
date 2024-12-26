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
  <link rel="stylesheet" href="style6.css">
  <title>Main</title>
</head>
<body>
  <a href="Package.php">
    <div class="CreatePostButton">
      <div class="CreatePackage">Create Package</div>
    </div>
  </a>
<div class="round-image">
    <img src="https://media.discordapp.net/attachments/813294731635327006/1179420662306197625/dFQROr7oWzulq5Fa4MvAZOQmFYm5g8Akcteb0xDPiuoNHv2rLoCibLWV6bwymaw2TAQ.png?ex=6579b816&is=65674316&hm=3546c05bb0ab54cc0e73a2a444dafffbfb729fa310098dc7b17646395973671b&=&format=webp&quality=lossless&width=988&height=556" alt="รูปภาพ">
</div>
  <div class="PostSlider">
    <div class="CarLocationContainer">
      <div class="Car">
        <div class="CarVan">
          <i class="fas fa-car"></i> <span>Car:</span> <span>Van</span>
        </div>
        <div class="Seats5">
          <i class="fas fa-chair"></i> <span>Seats:</span> <span>5</span>
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
          <i class="fas fa-phone"></i> <span>Tel:</span> <span>012-3456789</span>
        </div>
      </div>
    </div>
  
    <div class="Frame13">
      <div class="Price1Description">
        Price: 1$<br/><br/>Description:<br/>เป็นคนอารมณ์ดีมากๆ คุยง่าย
      </div>
    </div>
  
      <div class="Btn2">
        <div class="Text">Book</div>
      </div>
    </div>
  </div>
  
  <div class="footer">
    <a href="edit-pro.php">
      <img src="image/profile.png" class="footer-img">
    </a>
    <img src="image/carlogo.png" class="footer-img">
    <img src="image/paper.png" class="footer-img">
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

  <script src="feed.js"></script>
  <script src="https://kit.fontawesome.com/f6dc56b1c3.js" crossorigin="anonymous"></script>
</body>
</html>
