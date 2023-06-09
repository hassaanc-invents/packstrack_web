
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
  <meta name="description" content=" Sundarban Courier Tracking is one of the biggest courier companies in Bangladesh. It was founded in 1983 and has been providing services in Bangladesh">
<meta name="keywords" content="Sundarban Courier Tracking, Sundarban Courier Service Tracking, Sundarban Courier Service Tracking By Phone Number, Sundarban Tracking Number">
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
        $blogId = "100";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="Sundarban Courier Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>Sundarban Courier Tracking - Track Your Package</h1>
<h3></h3>
Sundarban Courier Tracking is one of the biggest courier companies in Bangladesh. It was founded in 1983 and has been providing services in Bangladesh ever since, thanks to the hard work of the company's founder, Imamul Kabir Shanto. Get well-known and useful. It has set up its offices in Bangladesh All of its major broadcasting organizations have branches where you can get help from people with a lot of experience. Sundarbans I just started delivering packages in Bangladesh. offer, but now it also does your work for you. If any of your ministers don't work in Pakistan, you can help them get the tools they need with the help of the Sundarbans and also get your work done there. It is very popular among the public because of its low price.

<iframe style="border: 0px #ffffff none;" src="https://tracking.sundarbancourierltd.com/" name="myiFrame" width="100%" height="500px" frameborder="1" marginwidth="0px" marginheight="0px" scrolling="no" allowfullscreen="allowfullscreen"><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start">﻿</span></iframe>
<h2>Sundarban Courier Service Tracking</h2>
<h3></h3>
As far as their services are concerned, they give highly secure services, they offer you very fast service at a reasonable cost, and they provide you with a COD service, which stands for cash on delivery. They also offer a pick-up service, during which they will come to your location, retrieve your items, and then bring them back to you. They preserve your package by wrapping it in cotton before shipping it. They will issue a refund for you in the event that your package arrives late or does not arrive at all during the delivery window.

<strong>You can also Track <b><a class="text-primary" href="https://packstrack.com/redxtracking" target="_blank" rel="noopener">Redx Tracking.</a></b></strong>
<h3>Sundarban Courier Service Tracking By Phone Number</h3>
If you want to check on your package, you've come to the right place. Here, we'll show you how to do it from home using your cell phone. We'll also show you how to do it by phone number. Here, we'll tell you some simple steps that will make it easy for you to track your package with your phone.
<ul>
 	<li aria-level="1">First, you have a valid tracking number from <b><a class="text-primary" href="https://tracking.sundarbancourierltd.com/" target="_blank" rel="noopener">Sundarban tracking.</a></b></li>
 	<li aria-level="1">Open your mobile messaging App.</li>
 	<li aria-level="1">Enter a new message on Sundarbans tracking contact number.</li>
 	<li aria-level="1">Enter your tracking number and send it.</li>
 	<li aria-level="1">In no time they will reply to you.</li>
 	<li aria-level="1">And tell you the current location of your package.</li>
</ul>
<h3>Sundarban Courier Parcel racking</h3>
In addition to this, it has increased its network of nominated agents all over the country to more than five hundred. As a direct result of this, Sunderban has been able to plan strategically according to the requirements of the market while simultaneously ensuring that everyone receives service. Sundarban began its entry into international politics with the intention of serving the country, and the company today offers secure delivery support to over two hundred twenty nations across the world, together with online tracking, at a price that is incredibly affordable. In terms of air and sea freight clearing and forwarding exports and imports, Sundarbans represents the largest and most known worldwide express courier to ensure delivery, and reliable service for moving business and personal items and provides.
<h3>Sundarban Tracking Number</h3>
They give you a tracking number when your package is ready to go. Each package is given a unique code called a "track number" so that it can be found and followed. The GPS system is linked to the tracking number, so you can find out where your package is right now. If you order something from an online store, you will get this tracking number in an email. This number will be in your order history, and if you're ordering for a business, it will be on your invoice. You can find out where the package is and when it will get to you by tracking it online. Here, we'll tell you how to check the package in a quick and easy way.
<h3>How To track Sundarban Tracking number</h3>
If you want to Track your package online, you are in the right place. Here we will you How to track online. We will tell you some easy steps. By following them you will be able to track your package without wasting your time.
<ul>
 	<li aria-level="1">Enter your tracking number into the search bar.</li>
 	<li aria-level="1">Then press the <b>Track button</b> to track your package.</li>
 	<li aria-level="1">Wait for a moment while it is processing.</li>
 	<li aria-level="1">In no time you will see the current status of your package.</li>
 	<li aria-level="1">If you face any issues you can contact Sundarban's customer support number.</li>
</ul>
<h3>Sundarban Tracking Customer support number</h3>
If you have any questions or want to know their service charges, you can contact with them. Here we will give you their contact number email and address.
<table>
<tbody>
<tr>
<td><b>Courier</b></td>
<td><b>Contact Number</b></td>
<td><b>Email</b></td>
<td><b>Main Office Address</b></td>
</tr>
<tr>
<td>Sundarban Tracking</td>
<td>889612003003</td>
<td>mail@sundarbancourier.com.bd</td>
<td>24/25 Dilkusha C/A, Dhaka-1000, Bangladesh</td>
</tr>
</tbody>
</table>
 
<h3>List Of Sundarban Courier Service Branches In Bangladesh</h3>
<figure class="wp-block-table">
<table>
<tbody>
<tr>
<td><strong>Branch</strong></td>
<td><strong>Contact Number</strong></td>
<td><strong>Address</strong></td>
</tr>
<tr>
<td><b>Head office</b></td>
<td><strong>+</strong>889612003003</td>
<td>24/25 Dilkusha C/A, Dhaka-1000, Bangladesh</td>
</tr>
<tr>
<td>Chittagong</td>
<td>+88031633576</td>
<td>Jubilee Rd, Chattogram, Bangladesh</td>
</tr>
<tr>
<td>Dhaka</td>
<td>+88029564218</td>
<td>7 Dilkusha, Dhaka 1215</td>
</tr>
<tr>
<td>Shyamoli (Dhaka)</td>
<td>+8801936003185</td>
<td>29, 30 Khilji Road, Dhaka</td>
</tr>
<tr>
<td>Banana (Dhaka)</td>
<td>+8801936003304</td>
<td>Dhaka 1212</td>
</tr>
<tr>
<td>Uttara (Dhaka)</td>
<td>+880258956610</td>
<td>Dhaka 1230, Bangladesh</td>
</tr>
<tr>
<td>Rajshahi</td>
<td>+881914292690</td>
<td>Under Dhaka Bank, Jhawtola, Bogra</td>
</tr>
<tr>
<td>Sylhet</td>
<td>+8801917230660</td>
<td>Main Road Hazrat Shahjalal Rd Sylhet 3100 Hazrat Shahjalal Rd, Sylhet 3100</td>
</tr>
<tr>
<td>Satkhira</td>
<td>+8801996003047</td>
<td>Kaliganj Hwy, Debhata, Bangladesh</td>
</tr>
<tr>
<td>Tangail</td>
<td>+8801712695599</td>
<td>1900, 52 Tangail Road, Tangail</td>
</tr>
</tbody>
</table>
</figure>
<h3>FAQs</h3>
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group dark:bg-gray-800">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="relative flex w-[calc(100%-50px)] flex-col gap-1 md:gap-3 lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<ul>
 	<li class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap"><strong>Where can Sundarban Courier deliver?</strong></li>
</ul>
</div>
<div class="flex justify-between"></div>
</div>
</div>
</div>
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group bg-gray-50 dark:bg-[#444654]">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="relative flex w-[calc(100%-50px)] flex-col gap-1 md:gap-3 lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<div class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap">
<div class="markdown prose w-full break-words dark:prose-invert light">The delivery area for Sundarban Courier Service would depend on their specific business and the services they offer. It's best to check their official website or contact them directly to find out their delivery coverage and services.</div>
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group dark:bg-gray-800">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="relative flex w-[calc(100%-50px)] flex-col gap-1 md:gap-3 lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<ul>
 	<li class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap"><strong>How long does it take for Sundarban Tracking to deliver?</strong></li>
</ul>
</div>
</div>
</div>
</div>
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group bg-gray-50 dark:bg-[#444654]">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="relative flex w-[calc(100%-50px)] flex-col gap-1 md:gap-3 lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<div class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap">
<div class="markdown prose w-full break-words dark:prose-invert light">The delivery time for Sundarban Courier Service would depend on several factors such as the location of the sender and recipient, the type of service chosen, and any potential delays or disruptions in the shipping process. It's best to check with Sundarban Courier Service directly for an estimated delivery time for your specific shipment. They should be able to provide you with more accurate and up-to-date information.</div>
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group dark:bg-gray-800">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="relative flex w-[calc(100%-50px)] flex-col gap-1 md:gap-3 lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<ul>
 	<li class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap"><strong>Is Sundarban Courier shipping expensive?</strong></li>
</ul>
</div>
<div class="flex justify-between"></div>
</div>
</div>
</div>
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group bg-gray-50 dark:bg-[#444654]">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="relative flex w-[calc(100%-50px)] flex-col gap-1 md:gap-3 lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<div class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap">
<div class="markdown prose w-full break-words dark:prose-invert light">The cost of shipping with Sundarban Courier Service would depend on various factors such as the size and weight of the shipment, the distance between the sender and recipient, and the type of service chosen (e.g. standard, express, etc.). To get an accurate estimate of the shipping cost for your specific shipment, it's best to contact Sundarban Courier Service directly or get a quote through their website. Keep in mind that some courier companies also offer discounts or special promotions, so it's a good idea to compare prices and services before making a decision.</div>
    
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