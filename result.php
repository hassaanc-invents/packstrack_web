<?php
include "connection.php";
session_start();
session_unset();
session_destroy();
$currentDate = date("d,m,20y");
if (isset($_POST['submit'])) {
  $contact_detail = $_POST['trackingid'];
  $blogId = $_POST['blogId'];
}
?>
<!doctype html>
<html lang="en">
<head>
  <title>Packstrack</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/x-icon" href="./images/trackingLogo.png">
</head>

<body>
  <div class="wrapper d-flex align-items-stretch">
    <!-- Page Content  -->
    <div id="content" class="contentTwo">
      <?php
      include "nav.php";
      ?>
      <div class="" style="margin-top: 14vh; margin-bottom:14vh; padding: 0 10vw;">
        <div class="card">
          <div class="card-header" style="font-size: 20px;">
            Your Tracking Details
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-center">
              <div class="spinner-grow text-dark" role="status" id="loader-content" style="margin: 12vh 0;">
                <span class="sr-only">We are Tracking for You</span>
              </div>
            </div>
            <div id="result-content">
              <?php
              if(isset($_POST['submit'])){
                $getResultQuery = "SELECT * FROM blog_information WHERE blog_id ='$blogId'";
              $getResultQueryRun = mysqli_query($conn, $getResultQuery);
              if (mysqli_num_rows($getResultQueryRun) > 0) {
                while ($getSingleResult = mysqli_fetch_assoc($getResultQueryRun)) {
              ?>
                  <p class="card-text"><span><b>Courier Name : </b></span> <span> <?php echo $getSingleResult['tracking_site_name'] ?></span></p>
                  <p class="card-text"><span><b>Your Tracking Number : </b></span> <span> <?php echo $contact_detail ?></span></p>
                  <p class="card-text"><span><b>Today Date : </b></span><span class="todaydate"><?php echo $currentDate ?></span></p>
                  <p><b>Note: </b> Click Delievery Status to view your current delievery status for your tracking no <span><b><?php echo $contact_detail ?></b></span></p>
                  <a href="<?php
                            if ($getSingleResult['linked_tracking'] == "true") {
                              echo $getSingleResult['tracking_site_link'] . $contact_detail;
                            } else {
                              echo $getSingleResult['tracking_site_link'];
                            }
                            ?>" class="btn btn-primary px-5 align-right" target="_blank">Current Delievery Status</a>
                <?php
                }
              }
              }
              else {
                ?>
                <p class="card-text"><span><b>Courier Name : </b></span> <span> Not Found</span></p>
                <p class="card-text"><span><b>Your Tracking Number : </b></span> <span> Not Found</span></p>
                <p class="card-text"><span><b>Today Date : </b></span><span class="todaydate"><?php echo $currentDate ?></span></p>
                <p><b>Note: </b> Click Delievery Status to view your current delievery status for your tracking no <span><b>Not Found</b></span></p>
                <a href="" target="_blank" class="btn btn-primary px-5 align-right disabled">Current Delievery Status</a>
              <?php
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  include "scripts.php";
  ?>
  <script>
    document.onreadystatechange = function() {
      var state = document.readyState
      if (state == 'interactive') {
        document.getElementById('result-content').style.display = "none";
      } else if (state == 'complete') {
        setTimeout(function() {
          //  document.getElementById('interactive');
          document.getElementById('loader-content').style.display = "none";
          document.getElementById('result-content').style.display = "block";
        }, 3000);
      }
    }
  </script>
</body>

</html>