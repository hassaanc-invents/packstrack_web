
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
  <meta name="description" content="The Jakarta International Container Terminal (JICT) is a port in Jakarta, Indonesia that facilitates the tracking and monitoring of container shipments">
<meta name="keywords" content="JICT Tracking, How to Track JICT Tracking Number, JICT tracking Customer Support, JICT Container Tracking, Tracking JICT">
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
        $blogId = "77";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="JICT Terminal Container Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>JICT Tracking - JICT Container Tracking</h1>
The Jakarta International Container Terminal (JICT) is a port in Jakarta, Indonesia that facilitates the tracking and monitoring of container shipments. Among the busiest container terminals in Southeast Asia, JICT processes about 3.5 million TEUs (twenty-foot equivalent units) annually. JICT's container freight tracking process has multiple phases: gate-in, yard, and gate-out. When a truck or other vehicle carrying a container arrives at JICT to be loaded onto a ship, the loading process enters the gate-in phase. The inspection includes noting the container number, shipping company, and final destination port.

 

When the container is finally allowed in, it is taken to the yard to wait for its turn to be loaded onto a ship. In the yard, the container's whereabouts are recorded and monitored so that it may be placed in the appropriate spot in preparation for loading into the ship. Once the container has been put aboard the ship and it is ready to go, the gate-out phase can begin. The details of the container are double-checked to make sure it is the right one and is heading in the right direction. After the cargo is packed inside, the container is sealed and the ship sets sail.
<h2>How to Track JICT Tracking Number</h2>
Here we will tell you how to track your package online without wasting your time. Please follow these steps.
<ul>
 	<li aria-level="1">First, you have a valid tracking number from JICT Container.</li>
 	<li aria-level="1">Enter your tracking number into the search bar.</li>
 	<li aria-level="1">Then press the track button.</li>
 	<li aria-level="1">Wait for a moment while it is processing.</li>
 	<li aria-level="1">In no time you will see the current status of your package.</li>
 	<li aria-level="1">If you face any problem you can contact JICT tracking Customer Support.</li>
</ul>
 
<h3>JICT tracking Customer Support</h3>
If you want to know their service charges you can contact them. Here we will give you their contact number and Gmail.
<table>
<tbody>
<tr>
<td><b>Courier</b></td>
<td><b>Contact Number</b></td>
<td><b>Email</b></td>
<td><b>Main Office Address</b></td>
</tr>
<tr>
<td>JICT tracking</td>
<td>62-21-80678100</td>
<td>customer.care@jict.co.id</td>
<td>Jl. Sulawesi Ujung No. 1, Tanjung Priok – Jakarta 14310, Republic of Indonesia</td>
</tr>
</tbody>
</table>
 
<h3>JICT Container Tracking</h3>
JICT employs several different technologies, such as radio-frequency identification tags, barcode scanning, and global positioning system tracking, to keep tabs on the containers' contents. An RFID tag is attached to each container so its whereabouts and transits through the port may be monitored. At both the gate-in and gate-out stages, barcode scanning is employed to efficiently and correctly log the container's details. The container's position on the ship and its progress toward the final port is tracked using GPS.

 

To keep track of all the containers in the terminal and make sure they are stored and loaded properly, JICT Container additionally employs a computerized container management system. In addition to enabling constant, real-time monitoring of the terminal's functions, the technology also facilitates the prompt diagnosis of any problems that may emerge. Overall, JICT is able to effectively track and monitor container cargo thanks to the employment of cutting-edge technologies and a complete container management system. Facilitating the timely and orderly transport of commodities all around Southeast Asia and the world is facilitated by this.
<h3>JICT Tracking Container Check Online</h3>
The following are the procedures you can take to view the current location of your container at the Jakarta International Container Terminal (JICT) online: Find the "Online Services" or "Track & Trace" tab on JICT's main page or menu. Type in the corresponding box number: You'll need to provide the container number, which can be located on the Bill of Lading or other shipping paperwork. Locate your container and see when it arrived at JICT, was loaded onto a ship, and is scheduled to leave the port by entering the container number.

 

See where your container is in the shipping process at any given time.A delay in changing the container's status may be reflected in the data provided by the JICT online tracking system, so please keep that in mind. It should be noted that the data given by JICT's online tracking system is not real-time but instead reflects the most recent data provided by the system. It is also necessary to have the Bill of Lading number and the container number in order to trace the container.
<h3>Tracking JICT</h3>
There are a few different ways that container freight can be tracked at the Jakarta International Container Terminal (JICT): Follow your shipment's progress on JICT's website: Your container's current position and status can be viewed by entering the container number into the online tracking system that JICT typically provides on their website. If you are experiencing problems tracking your container on JICT's website or if you require more specific information, please contact the shipping company responsible for your container. If you ask, they should be able to tell you where your container is and how it's doing.

 

In the event that you are still unable to locate your container, you can get in touch with JICT for assistance. You can get more specifics from them regarding the location and condition of your container. Use a third-party cargo tracking service: This option allows you to keep tabs on your container in real time as it travels through JICT and other ports across the world. It should be noted that the data provided by JICT and the shipping company is not live but rather based on the most recent data provided by the system. It is also necessary to have the Bill of Lading number and the container number in order to trace the container.
<h3>JICT Tracking Customer service detail</h3>
JICT Tracking customer service is dedicated to providing a high level of support and assistance to our customers. We offer a variety of services to ensure that our customers are satisfied with the tracking and delivery of their shipments.
<ul>
 	<li aria-level="1">Online Tracking: Our customers can easily track their shipments online by entering their tracking numbers on our website. This allows them to stay updated on the status of their shipment and estimated delivery time.</li>
 	<li aria-level="1">Customer Support: Our customer support team is available to answer any questions or concerns that our customers may have. They can be reached by phone, email, or live chat.</li>
 	<li aria-level="1">Delivery Updates: We provide regular updates on the status of a shipment to our customers, including any delays or issues that may arise during transit.</li>
 	<li aria-level="1">Claims: In the event of any damage or loss of a shipment, our customers can submit a claim to our customer service team. We will investigate the issue and work to resolve it as quickly as possible.</li>
 	<li aria-level="1">Customized Services: We offer customized services to meet the specific needs of our customers, such as expedited delivery or special handling for fragile items.</li>
</ul>
Overall, JICT Tracking customer service is committed to providing a high level of support and assistance to ensure that our customers are satisfied with the tracking and delivery of their shipments.
<h3>JICT vessel tracking</h3>
JICT (Jakarta International Container Terminal) vessel tracking is a service that allows customers to track the location and status of their cargo on a specific vessel. This service provides real-time information on the vessel's voyage, including its current location, estimated time of arrival, and any delays or issues that may arise during transit. To track a JICT vessel, customers can visit the JICT website and enter the vessel name, voyage number, or bill of lading number. This will provide them with detailed information on the vessel's current location, voyage schedule, and expected arrival time. Customers can also receive updates via email or SMS notifications to stay informed about the status of their cargo.

 

In addition to tracking a specific vessel, JICT also provides a Vessel Schedule Search service which allows customers to view the scheduled arrival and departure times of all vessels at the terminal. This service can be used to plan the delivery of cargo and coordinate the loading and unloading of containers. Overall, JICT vessel tracking is a useful service for customers who need to stay informed about the location and status of their cargo during transit. It provides real-time information and updates to help customers plan and coordinate their logistics needs.    
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