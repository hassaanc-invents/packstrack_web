
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
  <meta name="description" content="You can use EasyParcel to send your things back to where you bought them. These Udramesh, SPS Tracking, FedEx Express Tracking, SP Tracking">
<meta name="keywords" content="Easy parcel tracking, Tracking Easy Parcel, How To Track  Easy Parcel Tracking Number, Easy Parcel Tracking ">
<meta name="author" content="Packstrack">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/easyparceltracking"
  },
  "headline": "Easy parcel tracking",
  "description": "You can use EasyParcel to send your things back to where you bought them. T",
  "image": "https://packstrack.com/uploaded_files/Add%20a%20heading%20(22)%20(1).webp",  
  "author": {
    "@type": "Person",
    "name": "Packstrack",
    "url": "https://packstrack.com/"
  },  
  "publisher": {
    "@type": "Organization",
    "name": "Usman",
    "logo": {
      "@type": "ImageObject",
      "url": "https://packstrack.com/images/aboutLogo.png"
    }
  },
  "datePublished": "2023-01-15",
  "dateModified": "2023-03-03"
}
</script>
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
        $blogId = "48";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="Easy Parcel Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>Easy parcel tracking</h1>
You can use EasyParcel to send your things back to where you bought them. These Udramesh, SPS Tracking, FedEx Express Tracking, SP Tracking, and Dhal Tracking are all well-known shipping companies. Your express package is given a number that can be used to find it. On the website or app where you bought the item, you should be able to find the tracking number.  First, you go to your order and click on the order that was sent by that parcel. There, you can find out everything you need to know about your order. Next, you'll get a number or a button that makes it easy to track your package. Just click it. Once you have the tracking number, you can type it into the box at the top of this page, click "Submit," and then use the online tracker to find out where your package is. Then, you'll be able to see your order on the online tracker.
<h2>Tracking Easy Parcel</h2>
When you send an item to Key with EasyParcel, they give you a check number. This tracking number is sent to you via email. You can track this tracking online here we will tell you some simple and easy ways to check numbers online by following which you will be able to track your package easily without wasting time. You can also track 
<b><a href="https://packstrack.com/gdextracking" target="_blank"  class="text-primary">GDEX Tracking</a></b>
<h3>How To Track  Easy Parcel Tracking Number</h3>
<h3></h3>
<ul>
 	<li aria-level="1">In less than two minutes, you can track the status of your package and learn where it is.</li>
 	<li aria-level="1">The next thing you know, you'll be able to monitor your package with EasyParcel using your smartphone, laptop, and internet connection.</li>
 	<li aria-level="1">Put in the tracking number for the package you were provided.</li>
 	<li aria-level="1">To view the current location of your package, please enter the tracking information provided by EasyParcel.</li>
 	<li aria-level="1">Make a note of your <b><a href="https://easyparcel.com/my/easytrack/" target="_blank"  class="text-primary">EasyParcel tracking number</a></b> on the receipt you received and paste it into the corresponding area at the top of this page.</li>
 	<li aria-level="1">You can easily fake a tracking number if you don't have a ticket.</li>
 	<li aria-level="1">As a result, you can check in on the whereabouts of your internationally shipped product at any time.</li>
 	<li aria-level="1">Your package's location can be determined if you have the proper tracking number.</li>
 	<li aria-level="1">In the event that this is not the case, or if there is an issue with the tracking, you can view the current location of your package on EasyParcel's main website.</li>
</ul>
<table>
<tbody>
<tr>
<td>Top Up Package</td>
<td>Tracking SMS</td>
<td>Tracking Email</td>
</tr>
<tr>
<td>EP20 – EP1000</td>
<td>RM0.20/ SMS (Normal Price)</td>
<td>RM0.05/ Email (Normal Price)</td>
</tr>
<tr>
<td>EP2000</td>
<td>RM0.15/ SMS 1 month</td>
<td>FREE 1 month</td>
</tr>
<tr>
<td>EP5000</td>
<td>RM0.15/ SMS 3 months</td>
<td>FREE 3 months</td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>EP10,000</td>
<td>RM0.10/ SMS 3 months</td>
<td>FREE 3 months</td>
</tr>
<tr>
<td>EP20,000</td>
<td>RM0.10/ SMS 3 months</td>
<td>FREE 3 months</td>
</tr>
<tr>
<td>EP50,000</td>
<td>RM0.10/ SMS 3 months</td>
<td>FREE 3 months</td>
</tr>
</tbody>
</table>
My package with Easy Parcel is late, what should I do?

You need to do a few steps to find out what's going on with your EasyParcel package. Here are a few of those steps.
<ul>
 	<li aria-level="1">To track an easy parcel tracking j&t, copy this link and paste it into the address bar of your browser.</li>
 	<li aria-level="1">The time it takes for an EasyParcel package to arrive varies from class to class.</li>
 	<li aria-level="1">If the package hasn't been lost or slowed down in transit, it is possible to find out which class it is used for and how long it takes to get there.</li>
 	<li aria-level="1">So the first step is to go to track a package and see where your order is.</li>
 	<li aria-level="1">Gives full information about your order.</li>
 	<li aria-level="1">If you think your order is too far away or you can't get to it, contact Easy Parcel's customer service right away.</li>
</ul>
<h4 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">Easy Parcel Tracking </span></h4>
Nationwide tracking easy parcel Sdn Bhd, Lintang Mayang Pasir 3, Bandar Bayan Baru, 11900 Bayan Lepas, Pulau Pinang, Malaysia <b>Email</b><b>:</b> support@easyparcel.my
<table>
<tbody>
<tr>
<td>Courier</td>
<td>Contact Number</td>
<td>Email</td>
<td>Official Website</td>
</tr>
<tr>
<td>Easy parcel tracking</td>
<td>No information</td>
<td>support@easyparcel.my</td>
<td>https://easyparcel.com/my/tracking-sms-email-new-update-2022/</td>
</tr>
</tbody>
</table>
     
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