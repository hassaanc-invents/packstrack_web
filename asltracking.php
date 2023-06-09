
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
  <?php
  include "AdsCodeHead.php";
  ?>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive-table.css">
  <link rel="stylesheet" href="css/custom-scroll-bar.css">
  <link rel="icon" type="image/x-icon" href="./images/trackingLogo.png">
  <meta name="description" content=" ASL Distribution is more than a typical transportation and warehousing company. With a history spanning over 60 years as a third-party logistics provider">
<meta name="keywords" content="ASL Tracking, How To Track ASL Tracking, ASL Tracking Customer Support, ASL Shipping Line Tracking, ASL Container Tracking">
<meta name="author" content="Packstrack">
</head>
<body>
  <div class="wrapper d-flex align-items-stretch" style="overflow-x: hidden;">
    <!-- Page Content  -->
    <div id="content" class="">
      <?php
      include "nav.php"
      ?>
      <div class="d-flex" style="padding:10px;">
        <!-- ...........Warning............ -->
        <!-- .....Dont Touch This Code..... -->
        <div class="p-lg-3 p-sm-5">
        
        
        <?php
        $blogId = "109";
        $getBlogDataQuery = "SELECT * FROM blog_information WHERE blog_id ='$blogId'";
        $getblogDataRun = mysqli_query($conn, $getBlogDataQuery);
        $finalBlogBefore = "";
        $finalBlogAfter = "";
        $trackingSiteDisplayLink = "";
        $trackingSiteDisplayPhone = "";
        $trackingSiteName = "";
        $imageLink = "";
        $blogShowArray =  array();
        if (mysqli_num_rows($getblogDataRun) > 0) {
            while ($getSingleBlog = mysqli_fetch_assoc($getblogDataRun)) {
                $imageLink = $getSingleBlog['blog_image_path'];
                $trackingSiteDisplayLink = $getSingleBlog['tracking_site_display_link'];
                $trackingSiteDisplayPhone = $getSingleBlog['tracking_site_phone'];
                $trackingSiteName = $getSingleBlog['tracking_site_name'];
                array_push($blogShowArray, $getSingleBlog['blog_first_show'], $getSingleBlog['blog_second_show'], $getSingleBlog['blog_third_show']);
            }
        }
        ?>  
<div class="row text-center">
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="ASL Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
<h3 class="text-muted display-5"><?php echo $trackingSiteName;?></h3>
<div class="d-flex justify-content-between">
<span><b>Link: </b><a href="<?php echo $trackingSiteDisplayLink?>" class="text-muted" style="text-transform:lowercase" target="_blank"><?php echo $trackingSiteDisplayLink?></a></span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><b>Phone: </b><?php echo $trackingSiteDisplayPhone?></span>
</div>
</div>
</div>
<?php
        include "trackForm.php";
?>
        <h2>ASL Tracking</h2>
<strong><a href="https://asldistribution.com/" target="_blank" rel="noopener">ASL Distribution</a> </strong>is more than a typical transportation and warehousing company. With a history spanning over 60 years as a third-party logistics provider, we possess the necessary experience to offer our clients knowledgeable and proactive solutions for their logistics, shipping, warehousing, and distribution requirements. Our track record of success in the industry means that we have the expertise to handle a wide range of logistics challenges and tailor our services to meet the unique needs of each client. Whether it's the timely delivery of medical equipment and supplies or customized warehousing solutions, ASL Distribution has the expertise and dedication to exceed our client's expectations.

<iframe style="border: 0px #ffffff none;" src="https://plus.shiptrackapp.com/" name="myiFrame" width="100%" height="500px" frameborder="1" marginwidth="0px" marginheight="0px" scrolling="no" allowfullscreen="allowfullscreen"><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start">﻿</span><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start">﻿</span></iframe>
<h3>How To Track ASL Tracking</h3>
To track a package sent through ASL Distribution, you can follow these steps:
<ul>
 	<li>Visit the ASL Distribution website at <strong><a title="https://plus.shiptrackapp.com/" href="https://plus.shiptrackapp.com/">https://asldistribution.com/</a></strong> and click on the "Tracking" link in the top navigation menu.</li>
 	<li>On the tracking page, enter the waybill number or tracking number for your shipment in the search field.</li>
 	<li>Click the "Track" button to view the status of your shipment.</li>
 	<li>The tracking information displayed will include the current location of your package, any updates on its delivery status, and any delivery exceptions or delays.</li>
</ul>
If you encounter any issues or have questions about the tracking process, you can contact ASL Distribution's customer service team for assistance. You can also track <strong><a href="https://packstrack.com/landmarktracking" target="_blank" rel="noopener">Landmark Tracking.</a></strong>
<h3>ASL Tracking Customer Support</h3>
Here we will give you their Contact number email and head office address.
<table>
<tbody>
<tr>
<th style="text-align: left;">Contact Number</th>
<td>1-833-275-3478</td>
</tr>
<tr>
<th style="text-align: left;">Email</th>
<td><a href="mailto:csr@precisiondeliveries.com">csr@precisiondeliveries.com</a></td>
</tr>
<tr>
<th style="text-align: left;">Head Office Address</th>
<td>2160 Buckingham Road Oakville, Ontario L6H 6M7</td>
</tr>
</tbody>
</table>
<h3>ASL Shipping Line Tracking</h3>
ASL Distribution offers a range of courier services, including same-day delivery, next-day delivery, and scheduled delivery. They have a team of experienced drivers who are trained in handling medical equipment and supplies, ensuring that deliveries are made safely and securely. Their fleet of vehicles is also equipped with specialized equipment, such as climate-controlled compartments, to maintain the integrity of medical supplies during transport.

What sets ASL Distribution apart from other courier companies is their focus on the medical industry. They understand the importance of time-sensitive deliveries in the medical field and have tailored their services to meet the unique needs of medical facilities and organizations. Their same-day and next-day delivery options can help ensure that medical facilities have the supplies they need when they need them.
<h3>ASL Container Tracking</h3>
In addition to its courier services, ASL Distribution also offers logistics and warehousing services. They can provide customized solutions to meet the specific needs of medical facilities, such as temperature-controlled storage for vaccines or specialized handling for fragile equipment. This ensures that medical supplies are stored and transported safely and securely.

ASL Distribution's courier services can benefit a wide range of medical facilities and organizations. Hospitals, clinics, laboratories, and pharmacies can all benefit from their reliable and timely delivery of medical equipment and supplies. They can also serve pharmaceutical companies, medical device manufacturers, and distributors who require secure and efficient transportation of their products.    
</div>  
      </div>
      </div>
</div>

<!-- Tracking Sites -->
 <h3 class=" text-muted text-center mt-4">You Can Also Track</h3>
      <div class="container text-center pt-3">
        <!-- Team item-->
        <div class="row">
          <?php
          $getDiscriptionBlogQuery = "SELECT * FROM blog_information";
          $discriptionBlogQueryRun = mysqli_query($conn, $getDiscriptionBlogQuery);
          $referenceController = 0;
          if (mysqli_num_rows($discriptionBlogQueryRun) > 0) {
            while ($getSingleDisc = mysqli_fetch_assoc($discriptionBlogQueryRun)) {
              if($blogShowArray[0]===$getSingleDisc['blog_id'] || $blogShowArray[1]===$getSingleDisc['blog_id'] || $blogShowArray[2]===$getSingleDisc['blog_id']){
              $fileOpen = $getSingleDisc['tracking_site_name'];
              $finalFileOpen =  strtolower(str_replace(" ", "", $fileOpen));
          ?>
              <div class="col-lg-4 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 h-100"><a href="<?php echo $finalFileOpen; ?>" class="text-muted"><img src="<?php echo "./uploaded_files/" . $getSingleDisc['blog_image_path']; ?>" alt="" width="100" height="100px" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"></a>
                  <h6 class="mb-0"><a href="<?php echo $finalFileOpen; ?>" class="text-muted"><?php echo $getSingleDisc['tracking_site_name']; ?></a></h6><span class="small text-muted"><a href="<?php echo $finalFileOpen; ?>" class="text-muted"><u>Track</u></a></span>
                </div>
              </div>
          <?php
          $referenceController++;
          }
            }
          }
          if($referenceController ==0){
            ?>
            <div class="w-100">
            <h5 class="text-center text-warning mb-4">No References Available</h5>
            </div>
            <?php
          }
          ?>
        </div>
      </div>

<?php
include "scripts.php";
?>
</body>
</html>