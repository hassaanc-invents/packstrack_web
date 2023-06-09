
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
  <meta name="description" content="Anteraja Tracking services reach all of Indonesia with full-effort transport. Anteraja is a logistics company that offers">
<meta name="keywords" content="Anteraja Tracking, Tracking Anteraja, Anteraja ID Tracking, Cek Tracking Anteraja, Anteraja Tracking Customer support">
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
        $blogId = "84";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="Anteraja Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>Anteraja Tracking - Cek Resi | Lacak Pengiriman Anda</h1>

Anteraja Tracking services reach all of Indonesia with full-effort transport. Anteraja is a logistics company that offers comprehensive ecosystem support and covers all regions of Indonesia. Our goal is to contribute to the national economy by creating job opportunities. With a strong focus on technology, Anteraja has become a top logistics company in Indonesia since its inception in 2019. We incorporate the latest technological advancements into every aspect of our services.
<iframe style="border: 0px #ffffff none;" src="https://anteraja.id/id/tracking" name="myiFrame" width="100%" height="500px" frameborder="1" marginwidth="0px" marginheight="0px" scrolling="no" allowfullscreen="allowfullscreen"><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start">﻿</span></iframe>
<h2></h2>
<h2>Tracking Anteraja</h2>
When you use Anteraja to share, you'll always know where your delivery package is and when to expect it, thanks to your number, which is usually made up of two letters and your entry number. There are numbers and two letters, but they can change based on what's in the package and where it's going. You need to know where your entry number is because, without it, you can't find your package.
<h2></h2>
You don't want to worry about the status of your shipment all the time, so as a freight forwarder, you need to know if your shipment has arrived at its destination or not. Using a Russian number is one way to find out where your goods are in the delivery process. This number is usually on the paperwork for the purchase, or you can get it from the shipping company if you use tracking anteraja checkout. You probably want to know how to check your Entry Ja receipt number. Don't worry, we'll show you in a clear and easy-to-understand way. Next, we'll explain how to enter details to check a receipt. You may also like <b><a class="text-primary" href="https://packstrack.com/tikitracking" target="_blank" rel="noopener">TIKI Tracking</a>.</b>
<h2></h2>
<h3>Anteraja ID Tracking</h3>
<h2></h2>
When you use Anteraja tracking to send a package, you get a tracking ID. This Tracking lets you know where your package is right now and when it will get to you. With this tracking number, you can find out where your package is right now. You'll get an email with your tracking number, which you can use to check online. Here, we'll show you how to check your package in a few easy steps that won't take much time, To know how to find yourself.
<h2></h2>
<h3>How To track Anteraja Tracking? Cek Tracking Anteraja</h3>
<h2></h2>
Here we will tell you how you can track your parcel online. Please follow these steps.
<h2></h2>
<ul>
 	<li aria-level="1">First, you have a valid tracking number for <b><a class="text-primary" href="https://anteraja.id/id/tracking" target="_blank" rel="noopener">Anteraja tracking.</a></b></li>
 	<li aria-level="1">Enter your tracking number into each bar.</li>
 	<li aria-level="1">Then press the track button.</li>
 	<li aria-level="1">Wait for a moment while it is processing.</li>
 	<li aria-level="1">In no time you will see the current status of your package.</li>
 	<li aria-level="1">If you face any problem you can contact Anteraja Customer Support.</li>
</ul>
<h2></h2>
<h3>Anteraja Tracking Customer support</h3>
<h2></h2>
If you have any questions and you want to know the service charges you can contact them. here we will give their contact number and email.
<h2></h2>
<table>
<tbody>
<tr>
<td><b>Courier</b></td>
<td><b>Contact Number</b></td>
<td><b>Email</b></td>
<td><b>Main Office Address</b></td>
</tr>
<tr>
<td>Anteraja tracking</td>
<td>021 - 5066 - 3333</td>
<td>cs@anteraja.id</td>
<td>Jl. Bendungan Hilir No.96A, RT.13/RW.6, Bend. Hilir, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10210</td>
</tr>
</tbody>
</table>
<h2></h2>
<h4>FAQs</h4>
<h2></h2>
<ul>
 	<li aria-level="1"><b>How long does the Anteraja shipping process take?</b></li>
</ul>
<h2></h2>
Shipping times can be different depending on where the sender and receiver live, how the package is shipped, and other things. The best way to find out how long your shipment will take to arrive is to contact Anteraja directly.
<h2></h2>
<ul>
 	<li aria-level="1"><b>Is tracking anteraja reguler fast?</b></li>
</ul>
<h2></h2>
Yes, the regular Anteraja delivery service is pretty quick. It only takes one to two days to deliver between cities that are close to each other. For example, it takes about 1-2 days to send a package from Central Jakarta to Depok.    
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