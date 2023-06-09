
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
  <meta name="description" content="PICT Container Tracking has successfully executed numerous projects and operations and remains committed to becoming Pakistan's leading">
<meta name="keywords" content="PICT Container Tracking, PICT Tracking, PICT Container Tracking Number, How to track PICT Tracking, Helpline Number">
<meta name="author" content="Packstrack"
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
        $blogId = "110";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="PICT Container Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        
<h1>PICT Container Tracking - Track Your Container</h1>
PICT Container Tracking has successfully executed numerous projects and operations and remains committed to becoming Pakistan's leading company. The company has received numerous awards and accolades for its outstanding performance across various sectors and is continuously striving to grow and improve in all aspects. In 2017, despite the challenging and competitive business environment, PICT maintained its reputable position and was recognized with the Best HRM Practices award, the 5th Employer of the Year Award by the Employers' Federation of Pakistan (EFP), and the Fire & Safety Award by the Fire Protection Association of Pakistan.
<img src="http://crackworlds.com/wp-content/uploads/2023/04/pict-tracking.webp" alt="pict tracking" width="100%" height="auto" />
 
<p class="pt-1"></p>

The company also proudly won the Corporate Excellence Award from the Management Association of Pakistan. In addition, PICT was ranked 6th in the Top 25 Companies by the Pakistan Stock Exchange, 2nd in Work Place Environment, and 2nd in the Services Sector for Best Practices in OHSE by the Employers' Federation of Pakistan. PICT's commitment to excellence and dedication to its customers has earned the company its well-deserved reputation as a leader in the industry.
<h2>PICT Tracking</h2>
The logistics industry is a complex and fast-moving sector that is responsible for the movement of goods across the globe. In today's world, where businesses operate in a highly competitive environment, timely delivery of goods has become a crucial factor in determining the success of a business. In order to meet the ever-growing demands of the logistics industry, many technological solutions have been developed to improve the efficiency and transparency of the supply chain. One such solution is PICT container tracking.

 <p class="pt-1"></p>

PICT stands for Port Qasim International Container Terminal, which is one of the largest container terminals in Pakistan. PICT container tracking is a web-based platform that enables shippers, consignees, and freight forwarders to track the movement of their containers in real-time. This article will delve into the workings of PICT Container Tracking Online and its benefits for the logistics industry.   The vessel schedules feature provides you with information on the arrival and departure schedules of vessels at the PICT terminal.

 
<p class="pt-1"></p>
 

You can obtain information on the estimated time of arrival (ETA) and departure (ETD) of vessels, as well as the vessel's name and voyage number. The vessel tracking feature allows users to track the movement of vessels in real-time, providing information on the vessel's current location, speed, and direction. You can also track <b><a class="text-primary" href="https://packstrack.com/traxtracking" target="_blank" rel="noopener">Trax Tracking</a>.</b>
<h3>PICT Container Tracking Number</h3>
When you send anything with Pict, they give you a tracking number. This container tracking contains all the details about your shipment. They Container tracking send to you in your email. And you can also find this tracking on your receipts. This tracking number tells you where is your shipment now and when will it reach you. This tracking number contains 11 characters including letters and digits. You can track your tracking online. Here we will tell you how you can track your container. We will tell you some easy steps by following you will easily track your shipment.
<h3>How to track PICT Tracking</h3>
Follow these steps:
<ul>
 	<li aria-level="1">First, you have a valid <b><a class="text-primary" href="https://pict.com.pk/en/online-tracking" target="_blank" rel="noopener">CONTAINER, BL, CRN, and SHIPPING BILL.</a></b><b>  </b></li>
 	<li aria-level="1">Enter your container tracking into the search bar.</li>
 	<li aria-level="1">Then press the track button.</li>
 	<li aria-level="1">Wait for a moment while it is processing.</li>
 	<li aria-level="1">In no time you will see the current status of your container.</li>
 	<li aria-level="1">If you face any problem you can contact them.</li>
</ul>
 
<h3>Helpline Number</h3>
If you have any problem or want to contact them, we will give you their contact number and email.
<ul>
 	<li aria-level="1"><b>Registered & Terminal office:</b></li>
</ul>
Pakistan International Container Terminal Limited Berths No: 6 to 9, East Wharf, Keamari, Karachi Port Karachi - 75620 Pakistan. UAN: (92-21) 111 117 428 Fax: (92-21) 32854815
<ul>
 	<li aria-level="1"><b>Customer Care Centre</b></li>
</ul>
UAN: 111-117-428 Ext. 2821,2822,2823 Email: helpdesk@pict.com.pk
<ul>
 	<li aria-level="1"><b>Investors Relations:</b></li>
</ul>
UAN: 111-117-428 Ext. 2602 Email: investor-relations@pict.com.pk    
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