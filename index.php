<?php
include "connection.php";
session_start();
session_unset();
session_destroy();
?>
<!doctype html>
<html lang="en">
<head>
  <meta name="google-site-verification" content="-Sbp2kb0u3gmLGhTEmk-Xx3q1pg5zg8AhEMfb7TmUUg" />
  <title>Packstrack</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/x-icon" href="./images/trackingLogo.png">
  <meta name="msvalidate.01" content="E72E064DE948FE1027C2C02ED1AC31D8"/>
</head>

<body>
  <div class="wrapper d-flex align-items-stretch">
    <!-- Page Content  -->
    <div id="content" class="">
      <?php
      include "nav.php"
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
                <h2 class="font-weight-light">Packstrack is leading courier tracking system.</h2>
                <p class=" text-muted mb-4">
                  Thank you for visiting <b>Packstrack</b>. Here you will be able to track your package without any difficulty. All original data is provided through our website. Here you will be able to track your package and see its real-time status. We will provide you the tracking data all over the world. We have a direct link with all the courier companies. We have produced all the things that a user needs. We have uploaded all the courier company data on our <b>Packstrack</b> so that everyone can get the original full data.
                </p>
                <p class=" text-muted mb-4">
                  On our website, you will be able to track your package immediately without wasting time, and here it is very simple and easy for you to track your package. You must have the tracking number of your package with which you can track your package. You have to enter your tracking number in our Search Bar and select your carrier then press the track button. In no time you will receive your package's current location. If you have any problem or your package gets lost or goes to the wrong one, we will give you the contact number and email of the courier so that you can contact them.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Tracking Sites -->
      <h3 class=" text-muted text-center mt-4">Courier Companies</h3>
      <div class="container  text-center pt-3">
        <!-- Team item-->
        <div class="row">
          <?php
          $trackCategoryQuery = "SELECT * FROM blog_information ORDER BY blog_id DESC Limit 8";
          $runTrackCategoryQuery = mysqli_query($conn, $trackCategoryQuery);
          $totalRecords = 0;
          if (mysqli_num_rows($runTrackCategoryQuery) > 0) {
            while ($getSingleTrackCategory = mysqli_fetch_assoc($runTrackCategoryQuery)) {
              $totalRecords = $totalRecords + 1;
              $fileOpen = $getSingleTrackCategory['tracking_site_name'];
              $finalFileOpen =  strtolower(str_replace(' ', '', $fileOpen));
          ?>
              <div class="col-lg-3 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 h-100"><a href="<?php if ($getSingleTrackCategory['have_subdomain'] == 1){ echo $getSingleTrackCategory['tracking_site_link'];} else {echo $finalFileOpen;} echo $finalFileOpen; ?>" class="text-muted"><img src="<?php echo "./uploaded_files/" . $getSingleTrackCategory['blog_image_path']; ?>" alt="<?php echo  $getSingleTrackCategory['image_alt_tag']?>" width="100" height="100px" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"></a>
                  <h6 class="mb-0"><a href="<?php if ($getSingleTrackCategory['have_subdomain'] == 1){ echo $getSingleTrackCategory['tracking_site_link'];} else {echo $finalFileOpen;}  ?>" class="text-muted"><?php echo $getSingleTrackCategory['tracking_site_name']; ?></a></h6><span class="small text-muted"><a href="<?php if ($getSingleTrackCategory['have_subdomain'] == 1){ echo $getSingleTrackCategory['tracking_site_link'];} else {echo $finalFileOpen;} ?>" class="text-muted"><u>Track</u></a></span>
                </div>
              </div>
          <?php
            }
          }
          ?>
        </div>
        <?php
        if (!$totalRecords < 8) {
        ?>
          <a href="trackingcompanies" class="btn btn-warning px-5 rounded-pill shadow-sm mb-5">Track More</a>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
  <?php
  include "scripts.php";
  ?>
  <script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "fh784jn49l");
</script>
</body>
</html>