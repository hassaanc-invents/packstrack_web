<?php
include "connection.php";
session_start();
session_unset();
session_destroy();
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
    <div id="content" class="">
      <?php
      include "nav.php";
      ?>
      <div class="">
        <!-- Global Tracking Form -->
        <?php
        include "globalTracking.php";
        ?>
        <!-- Global Tracking Form -->
        <!-- Artical -->
        <div class="bg-white">
          <div class="container py-5">
            <div class="row align-items-center mb-5">
              <div class="col order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-warning"></i>
                <h3 class="text-muted">All Listed Courier Companies.</h3>
                <div class="row">
                  <?php
                  $trackCategoryQuery = "SELECT * FROM blog_information";
                  $runTrackCategoryQuery = mysqli_query($conn, $trackCategoryQuery);
                  if (mysqli_num_rows($runTrackCategoryQuery) > 0) {
                    while ($getSingleTrackCategory = mysqli_fetch_assoc($runTrackCategoryQuery)) {
                      $fileOpen = $getSingleTrackCategory['tracking_site_name'];
                      $finalFileOpen =  strtolower(str_replace(' ', '', $fileOpen));
                  ?>
                      <div class="col-md-4 col-sm-6 col-lg-3 mt-4 text-center">
                        <div class="bg-white rounded shadow-sm py-2 h-100 text-center py-5"><img src="<?php echo "./uploaded_files/" . $getSingleTrackCategory['blog_image_path']; ?>" alt="" width="100" height="50px" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                          <h6 class="mb-0"><?php echo $getSingleTrackCategory['tracking_site_name']; ?></h6><span class="small text-muted"><a href="<?php echo $finalFileOpen; ?>" class="text-muted" style="font-size:15px;"><u>Track</u></a></span>
                        </div>
                      </div>
                    <?php
                    }
                  } else {
                    ?>
                    <h4 class="text-muted m-auto pt-5">Not Listed Yet. Will be Updated Soon</h4>
                  <?php
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  include "scripts.php";
  ?>
</body>

</html>