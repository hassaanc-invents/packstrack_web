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
              <div class="col order-2 order-lg-1">
                <div>
                <i class="fa fa-bar-chart fa-2x mb-3 text-warning"></i>
                </div>
                <div>
                  <p class="text-muted">
                  Packstrack's tracking companies page is a comprehensive directory of the most popular global shipping companies and their tracking services. This page provides a user-friendly interface that allows you to easily locate and track your shipment from the comfort of your own home.
                  </p>
                  <p class="text-muted">
                  The tracking companies page includes a list of shipping companies from all over the world, including UPS, FedEx, DHL, TNT, and many others. You can search for your shipping company by name, and once you find it, you can track your shipment by entering your tracking number.
                  </p>
                  <p class="text-muted">
                  In addition to providing tracking services for individual shipping companies, the tracking companies page also includes a search bar where you can enter your tracking number and find out which shipping company is responsible for delivering your package. This is particularly helpful if you have received a tracking number from a seller but are unsure which shipping company to track your package with.
                  </p>
                  <p class="text-muted">
                  Overall, Packstrack's tracking companies page is a valuable resource for anyone who needs to track their shipments and wants to save time and effort by having all the tracking information they need in one convenient location.
                  </p>
                </div>
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
                          <div class="bg-white rounded shadow-sm py-2 h-100 text-center py-5"><a href="<?php if ($getSingleTrackCategory['have_subdomain'] == 1){ echo $getSingleTrackCategory['tracking_site_link'];} else {echo $finalFileOpen;}  ?>"><img src="<?php echo "./uploaded_files/" . $getSingleTrackCategory['blog_image_path']; ?>" alt="<?php echo $getSingleTrackCategory['image_alt_tag'];?>" width="100" height="50px" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"></a>
                          <h6 class="mb-0"><a href="<?php if ($getSingleTrackCategory['have_subdomain'] == 1){ echo $getSingleTrackCategory['tracking_site_link'];} else {echo $finalFileOpen;}  ?>" class="text-muted"><?php echo $getSingleTrackCategory['tracking_site_name']; ?></a></h6><span class="small text-muted"><a href="<?php if ($getSingleTrackCategory['have_subdomain'] == 1){ echo $getSingleTrackCategory['tracking_site_link'];} else {echo $finalFileOpen;}  ?>" class="text-muted" style="font-size:15px;"><u>Track</u></a></span>
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