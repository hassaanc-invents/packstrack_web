
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
  <meta name="description" content="Bluedart Courier Tracking Company was founded in 1983 and it was inaugurated by Indian citizens who are Khushroo Dubash, Clyde Cooper">
<meta name="keywords" content="Bluedart Courier Tracking, Bluedart Tracking, Bluedart tracking India, Blue Dart Email Tracking, How to Track AWB tracking Bluedart">
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
        $blogId = "76";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="Blue Dart Courier Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>Bluedart Courier Tracking - Track Your Parcel</h1>
Bluedart Courier Tracking Company was founded in 1983 and it was inaugurated by Indian citizens who are Khushroo Dubash, Clyde Cooper, and Tushar Jani after the foundation of this company started working on it all over India and all over Asia. Bluedart tracking India is known as a courier company and it helps to move the package from one place to another. It has happened that you are getting the most out of it provides a lot of service for the money so choose this company if you want to get the package at a cheap price and also want good and extra service then choose the blue dart tracking number.

Bluedart Tracking acquired facts from 2001 to 2008 and has done many works in the field of air transportation and has also been honored with many awards for its work. which has made it one of the most popular companies with warehouses in cities across India. If you use Bluedart Tacking in India for delivery then you get to see a lot of services when you check out the Bluedart AWB number tracking you will get the latest features step by step. they Started in 1988. He has done great work and because of this he has been honored with many awards he started his system in last 1988 and started providing his service in India
<h2>Blue Dart Email Tracking</h2>
Bluedart shipment tracking Offer Tracking Through Email. This method is special for those who don't know about bluedart tracking courier Websites and Can not send sms but they have access to email then well and good. If you Have email then you can access your tracking and You can do bluedart order tracking Through Email easily. Blue Dart Updates you from time to time and Sends the latest update to you.
<h3>How to Track AWB tracking Bluedart</h3>
The method of tracking the package is Not Complicated It is very simple and easy. If we use Bluedart tracking details then this is interesting and very easy to use.
<ul>
 	<li aria-level="1">First Of all When you purchase the product the company sends you a number called the tracking number.</li>
 	<li aria-level="1">Put your tracking number in Search Bar and Wait for a moment.</li>
 	<li aria-level="1">After a few moments, you will see your current status.</li>
 	<li aria-level="1">If you don't find your status then you can contact customer support.</li>
 	<li aria-level="1">Enjoy</li>
</ul>
<h3>Bluedart tracking status via SMS</h3>
The main and good feature is you can receive your tracking Staus through SMS This method is special for Those people who don't  Know about Online Tracking. Here is Method
<ul>
 	<li aria-level="1">Fist Of all Type T < space> Reference Number to 56767</li>
 	<li aria-level="1">Also, you can send Your current status Through Sms.</li>
 	<li aria-level="1">After Some time You will receive your status</li>
 	<li aria-level="1">Enjoy the moment.</li>
</ul>
 
<h3>Bluedart AWB tracking Branches and Cutumore Support Number</h3>
Bluedart tracking customer care
<table>
<tbody>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td><b>City</b></td>
<td><b>Contact Numbers</b></td>
<td><b>Emails</b></td>
<td><b>Address</b></td>
</tr>
<tr>
<td>Ahmedabad</td>
<td>1860 233 1234, +91 79 6586195</td>
<td>customerservice@bluedart.com</td>
<td>Shalimar Co-Op Hsg Soc, Near Embassy Market, Off Ashram Road, Ahmedabad, Gujarat, India - 380008</td>
</tr>
<tr>
<td>Bengaluru</td>
<td>1860 233 1234, +91 80 25229856</td>
<td>customerservice@bluedart.com</td>
<td>Ground Floor, Connection Point, Airport Exit Road, Bengaluru, Maharashtra, India - 569999</td>
</tr>
<tr>
<td>Kolkata</td>
<td>1860 233 1234, +91 33 22881894</td>
<td>customerservice@bluedart.com</td>
<td>Kanak Building, 3rd Floor, Jawaharlal Nehru Road, (Old Chowringhee Road), Kolkata, West Bengal, India - 700071</td>
</tr>
<tr>
<td>Chennai</td>
<td>1860 233 1234, +91 44 28252280</td>
<td>customerservice@bluedart.com</td>
<td>11(Old No.38), State of Quo Building, Sterling Road, Nungambakkam, Chennai, Tamil Nadu, India - 600034</td>
</tr>
<tr>
<td>Coimbatore</td>
<td>1860 233 1234, +91 422 2243383, +91 422 2248071, +91 422 2246832, +91 422 2243647</td>
<td>customerservice@bluedart.com</td>
<td>Paga Towers, 8/128 TO 132, Kattoor Street, P.N.Palayam, Coimbatore, Tamil Nadu, India - 641037</td>
</tr>
<tr>
<td>New Delhi</td>
<td>1860 233 1234, +91 11 40575281</td>
<td>customerservice@bluedart.com</td>
<td>Plot 8, 4th Floor, Elegance Tower, Non-Hierarchical Commercial Centre, Jasola District Centre, New Delhi, Delhi, India - 110076</td>
</tr>
<tr>
<td>Hyderabad</td>
<td>1860 233 1234, +91 40 66323030</td>
<td>customerservice@bluedart.com</td>
<td>H.NO.1-8-450/1/a/159 and 160, 1st Floor, Victoria Castle, Prakash Nagar, Begumpet, Hyderabad, Andhra Pradesh, India - 500016</td>
</tr>
<tr>
<td>Mumbai</td>
<td>1860 233 1234, +91 22 28396444, +91 22 28244098, +91 22 28244131</td>
<td>customerservice@bluedart.com</td>
<td></td>
</tr>
</tbody>
</table>
 
<h3>Why my SHIPMENT is not getting tracked by Bluedart tracking no.</h3>
If You book Your Shipment through Bluedart express tracking And your package is late for up to 24 hours. The best solution is First to Contact your supplier maybe your supplier changed the tracking courier or if they can not change the courier then you can Contact customer status. bluedart India tracking Gives a Tracking Number and You can track your package easily.
<h3>Conclusion:</h3>
<b></b>I hope After reading this article You will know all about bluedart air tracking and how to track packages and what the main work is This tracking and the main purpose is Giving Information and share knowledge about Tracking id. You will also know all about Of bluedart passport tracking history and delivery time customer support and other information.    
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