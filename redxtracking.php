
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
  <meta name="description" content=" Redx tracking is one of the listed companies and after all this, they have got their place in the hearts of the customers">
<meta name="keywords" content="Redx Tracking, Redx Parcel Tracking, Redx Courier Tracking Number, Redx Courier Tracking Bd Contact Number">
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
        $blogId = "101";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="RedX Courier tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h2>Redx Tracking</h2>
<span style="font-weight: 400;">Redx tracking is one of the listed companies and after all this, they have got their place in the hearts of the customers. It is a company from Bangladesh. This is why people prefer to make online goods tracking.</span>

 

<span style="font-weight: 400;">Redx parcel tracking started its journey in commerce on March 1, 2020. It started its journey when the worldwide lockdown was imposed, which did not stop providing its services even after two weeks. It has created a place in the hearts due to which the entrepreneurs have got the opportunity to keep their business alive and they have made huge profits in their business. Its network is spread all over Bangladesh and among people who live in Bangladesh. they order online so they must choose which Redex</span>

 

<span style="font-weight: 400;">And if we consider the last few years, it is seen that due to the pandemic and some other reasons, online business has grown a lot and many people prefer to buy and sell online that's why. Nowadays, instead of going to the shops, people place orders at home and receive the items the next day.</span>

<span style="font-weight: 400;">Have you ever wondered how the place where you are buying your items from the online register will deliver your items to you and is there a guarantee that you will get them on time and not get it? Your order is sent by the tracking courier company now, the courier company delivers your package to you despite the extreme heat and cold.</span>
<h3>Redx Parcel Tracking</h3>
 

<span style="font-weight: 400;">When you place your order from anywhere and online, you are given a Unique Code called a tracking number that lets you know where your package has reached so far. And how long will you receive the package if it is late or if the order is not received or if your package is out of stock you are informed by email or your number You can see where your package is so far and in what condition it is</span>

 
<h3>How To Track Redx Courier Tracking Number</h3>
 

<span style="font-weight: 400;">The Method of tracking is Simple and easy. When anyone places an order online the Company Provides Redx Tracking Id. This is Proof That Your order is on the way and you will get your order soon. Through Tracking You will know your order's current status. Here are Some Steps to Follow and Track your Package.</span>

 
<ul>
 	<li><span style="font-weight: 400;">First Of all, go to packstarck.com</span></li>
 	<li><span style="font-weight: 400;">Then Seach Redx Courier Tracking Bd</span></li>
 	<li><span style="font-weight: 400;">Redx Courier Bd Tracking will show On your Screen </span></li>
 	<li><span style="font-weight: 400;">Put your <b>Tracking ID</b> In the Search Bar </span></li>
 	<li><span style="font-weight: 400;">Click on the Search Button </span></li>
 	<li><span style="font-weight: 400;">You will get your current status</span></li>
 	<li><span style="font-weight: 400;">Enjoy</span></li>
</ul>
 
<h3>Redx Courier Tracking Bd Contact Number</h3>
 
<table>
<tbody>
<tr>
<td><b>Courier</b></td>
<td><b>Contact Number</b></td>
<td><b>Email</b></td>
<td><b>Main Office Address</b></td>
</tr>
<tr>
<td><span style="font-weight: 400;">Redx Tracking</span></td>
<td>
<p class="redx-phone css-8fv8tv">09610007339</p>
</td>
<td><span style="font-weight: 400;">contact@redx.com.bd</span></td>
<td><span style="font-weight: 400;">199, Bir Uttam Mir Shawkat Sarak, Tejgaon Industrial Area, Dhaka 1208, Bangladesh</span></td>
</tr>
</tbody>
</table>
 
<h3>FAQs:</h3>
<ul>
 	<li><b>How should I track my redx tracking?</b></li>
</ul>
 
<ol>
 	<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Visit the RedX website here: Visit the RedX website by going to https://redx.ae/.</span></li>
 	<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Put the tracking number here: You can input your tracking number in the tracking function on the homepage.</span></li>
 	<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">View the status of your shipment: After entering your tracking number, you will be shown the shipment's present location and a thorough history of its travels.</span></li>
</ol>
 
<ul>
 	<li><b>How to book a redx tracking?</b></li>
</ul>
<span style="font-weight: 400;">Go to the RedX website here. Visit the RedX website by going to https://redx.ae/.</span>

 

<span style="font-weight: 400;">Create a RedX account if you don't already have one: You must do this. By selecting the "Sign Up" option and providing the necessary details, you can accomplish this. </span><span style="font-weight: 400;">Select your shipping options from RedX's selection of expedited, economy, and freight shipping services. Pick the option that best suits your requirements. </span><span style="font-weight: 400;">Specify the shipment: The pick-up and delivery addresses, the shipment's dimensions and weight, and any specific instructions should all be included. </span><span style="font-weight: 400;">Find a price on A estimate for your shipment will be given to you by RedX based on the information you supplied.</span>

 

<span style="font-weight: 400;"><strong>Pay</strong>: You may go ahead and make a payment after reading the quote and approving it. RedX accepts payments via its online payment system or via credit card. </span><span style="font-weight: 400;">Booking your shipping: Following payment, your shipment will be scheduled, and a confirmation email with a tracking number will be sent to you.</span>

 
<ul>
 	<li><b>How long does redx tracking take to deliver?</b></li>
</ul>
 

<span style="font-weight: 400;">The shipping provider you select, the origin and destination of your cargo, and any transit time necessary for your shipment to clear customs, if applicable, will all affect how quickly your shipment will arrive after utilizing RedX. </span><span style="font-weight: 400;">RedX has express, economy, and freight shipping options, with express shipping having next-day delivery and economy and freight shipping having delivery dates of a few days or weeks.</span>

 

 
<ul>
 	<li><b>Where can I find the Pincode Locator redx tracking?</b></li>
</ul>
 

<span style="font-weight: 400;">Visit the RedX website here: Visit the RedX website by going to https://redx.ae/.</span>

 

<span style="font-weight: 400;">Locate the Pin Code Locator tool by going to the "Locations" or "Contact Us" parts of the website, or by searching for it on the homepage. </span><span style="font-weight: 400;">Enter the location information: Include the city, state, and country along with the complete address details. </span><span style="font-weight: 400;">Find the Pin Code: Click the "Search" button after entering the address information to find the appropriate Pin Code.</span>    
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