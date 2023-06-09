
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
  <meta name="description" content="Yamato Tracking Company, Ltd is Japan's biggest delivery service. It competes with Awami Express for a 41% market share, and Nippon Express">
<meta name="keywords" content="Yamato Tracking, Yamato Transport Tracking Number, How to Track Yamato Tracking?, Yamato Transport Customer Service">
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
        $blogId = "83";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="Yamato Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>Yamato Tracking - Track Shipments</h1>
Yamato Tracking Company, Ltd is Japan's biggest delivery service. It competes with Awami Express for a 41% market share, and Nippon Express, which has its headquarters in Ginza, Tokyo, has been the general term for all express home delivery services in Japan for a while. is used as a trademark, but the company fights to keep it public. People at the company are sold a yellow. Believe in their mouths that the company is a sign of the hope that they will see them in their lives. Ronnie's family business is often called "<b><a class="text-primary" href="http://track.kuronekoyamato.co.jp/english/tracking" target="_blank" rel="noopener">Japanese</a></b>
" in everyday speech.

In the United States, the black cat logo is as well-known as the Coca-Cola logo. Yamato Transport is a leading courier and logistics company in Japan. It performs various services. Yamato Transport is renowned for delivering your consignments be it cash, gifts, or any other form to you at the right time. Like Home offers international and freight shipping and tracking service.
<h2>Yamato Transport Tracking Number</h2>
A Yamato Transport tracking number is a unique code that is issued to every package shipped with Yamato Transport. It is used to track the package and its location during transit. The tracking number usually consists of a combination of letters and numbers and can vary in length depending on the type of service used. If someone has sent a package from Yamato, they will give you a tracking number through which you can know the location of your delivery.

You can use the tracking number to track your package on the Yamato Transport website www.kuronekoyamato.co.jp/en or mobile application. Just enter the tracking number in the designated field and click on the track button to get the current status of your package including its location, and delivery status. See the expected date and time and any updates on its current status during transit. It is important to keep the tracking number as it will be needed to track your package and any inquiries regarding it. Please note that it may take a few days for a packet to be registered in the tracking system so please check back later if you do not see any information about you. You can also track <b><a class="text-primary" href="https://packstrack.com/japanposttracking" target="_blank" rel="noopener">Japan Post Tracking</a>.</b>
<h3>How to Track Yamato Tracking?</h3>
You can track your Yamato transport package by following these steps.
<ul>
 	<li>First, You have a valid tracking number.</li>
 	<li>Enter your tracking number into the search bar.</li>
 	<li>Then Press the track button.</li>
 	<li>Wait for a moment while it is processing.</li>
 	<li>In no time you will see the current status of your package.</li>
 	<li>If you face any problem you can contact Yamato Tracking Customer Support.</li>
</ul>
 
<h3>Yamato Transport Customer Service</h3>
If you want to know their service charges you contact them. Here we will give their customer number and email.
<table>
<tbody>
<tr>
<td><b>Courier</b></td>
<td><b>Contact Number</b></td>
<td><b>Email</b></td>
<td><b>Main Office Address</b></td>
</tr>
<tr>
<td>Yamato Tracking</td>
<td>0120-46-1111</td>
<td>Info@yamato.gmail.com</td>
<td>2-4-1, Minami-hommachi, Chuo-ku, Osaka-shi, Osaka 541-0054, Japan</td>
</tr>
</tbody>
</table>
 
<h4>Yamato tracking FAQs</h4>
 
<ul>
 	<li><strong>How can I track my Yamato shipment?</strong></li>
</ul>
You can track your Yamato shipment by visiting the Yamato website and entering your tracking number. You can also use the Yamato mobile app to track your shipment in real time.
<ul>
 	<li><strong>How long does it take for my shipment to be delivered?</strong></li>
</ul>
The delivery time for your Yamato shipment depends on the shipping method you choose and the destination of your package. Yamato offers a variety of shipping options, including express and standard delivery. You can check the estimated delivery time for your shipment on the Yamato website or through the mobile app.
<ul>
 	<li><strong>Can I change the delivery address for my shipment?</strong></li>
</ul>
Yes, you can change the delivery address for your Yamato shipment through the mobile app or by contacting Yamato customer service. However, please note that changes to the delivery address may affect the estimated delivery time.
<ul>
 	<li><strong>Can I track the status of my international shipment?</strong></li>
</ul>
Yes, Yamato offers international tracking for all of its shipments. You can track your international shipment by entering the tracking number on the Yamato website or through the mobile app.
<ul>
 	<li><strong>What do I do if my shipment is delayed or lost?</strong></li>
</ul>
If your shipment is delayed or lost, please contact Yamato customer service as soon as possible. Yamato's customer service team will work with you to locate your shipment and provide you with an update on its status.
<ul>
 	<li><strong>Can I request a pickup for my Yamato shipment?</strong></li>
</ul>
Yes, Yamato offers a pickup service for customers who need to send packages or parcels. You can request a pickup by visiting the Yamato website or by calling Yamato customer service.    
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