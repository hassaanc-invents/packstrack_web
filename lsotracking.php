
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
  <meta name="description" content="Lone Star Overnight LSO is a Texas-based courier serving the South since 1991. Lone Star provides overnight ground delivery.">
<meta name="keywords" content="LSO Tracking, LSO Tracking Number, Lone Star Overnight Tracking, LSO Shipping Tracking, Lone Star Overnight Customer Support">
<meta name="author" content="Packstrack">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/nsdtracking"
  },
  "headline": "NSD Tracking - Non-Stop Delivery",
  "description": "NSD Tracking was founded in 2000 as a home delivery service with company headquarters in Northern Virginia.",
  "image": "https://packstrack.com/uploaded_files/NSD%20(1).webp",  
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
  "datePublished": "2023-01-23",
  "dateModified": "2023-03-10"
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "How do I track my LSO package?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Follow these steps to find out where your LSO package is:
Visit www.lso.com to find out more about the LSO.
Click on \"Track\" in the main menu.
In the \"Enter tracking number\" field, type in your tracking number.
Click where it says \"Track.\"
The website will show you where your package is and what its current status is."
    }
  },{
    "@type": "Question",
    "name": "How long does LSO shipping take?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "LSO (Lone Star Overnight) offers different shipping services with different delivery times depending on the level of service chosen. Here are the estimated delivery times for LSO's standard shipping services within the US:
LSO Ground: One to three business days, depending on the distance and where the package is going.
LSO Priority Overnight: Delivered by 10:30 am or 12 pm on the next business day, depending on the destination.
Standard Overnight LSO: Delivered by 5 p.m. on the next business day.
LSO Economy: Delivery takes between 2 and 5 business days, depending on the distance and where the package is going.
  Please keep in mind that these delivery times are estimates that can be changed by things like weather, traffic, and other unplanned events. Also, LSO offers same-day delivery and expedited delivery for shipments that need to arrive quickly."
    }
  }]
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
        $blogId = "56";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="LSO Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>LSO Tracking - Track Your Package</h1>
Lone Star Overnight LSO is a Texas-based courier serving the South since 1991. Lone Star provides overnight ground delivery and is a leading regional package courier in the southern United States. They offer reliable overnight couriers with both ground and ground transportation. On-time delivery charges are refunded Shipping costs are refunded. Monday through Thursday service is also provided. They offer a variety of options for guaranteed delivery times. They offer different options for guaranteed delivery times so customers can choose what time flight they want to have the package ready. LSO tracking also prefers next-day delivery. LSO delivers the package by 8:30 AM after drop-off.


<iframe src="https://tracking.lso.com/" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="400px" width="100%" allowfullscreen></iframe>

<h2>LSO Tracking Number</h2>
A tracking number is a unique code that is given to every package to recognize them. When a package is ready to ship the courier company gives you a tracking number. Which is connected to the GPS system that is applied in every vehicle so that the package tracking number shows the package's current location. When your package is shipped from LSO Tracking they give you a tracking number.  The LSO Tracking number contains all the details about your package where is your package now and when will it reach you. You can track your package by using the tracking number. Here we will teach you how to track packages online without wasting your time. You can also track <b><a class="text-primary" href="https://www.shipnsd.com/" target="_blank" rel="noopener">NSD courier tracking</a></b>.
<h2>Lone Star Overnight Tracking</h2>
LSO tracking offers delivery services in Texas, Oklahoma, Louisiana, Kansas City, Missouri, Louisiana, and southeastern New Mexico. Delivery in Mexico is available however on a very limited basis Delivery may contain documents only Work from two feet to any city in Mexico Delivery of documents is guaranteed in two to three business days.
<h3>LSO Shipping Tracking</h3>
When you ship something via LSO shipping tracking, They give a tracking number. This keyword contains all the details about your package. This tracking number was sent to you by Email. You can track it online. Here we will tell you how to track your package without wasting your time. Please follow these steps.
<ul>
 	<li aria-level="1">First, you have a valid tracking number given by <b><a class="text-primary" href="https://tracking.lso.com/" target="_blank" rel="noopener">Lone star overnight tracking</a></b>.</li>
 	<li aria-level="1">Enter your tracking into the real-time tracker.</li>
 	<li aria-level="1">Then press the track button to track your package.</li>
 	<li aria-level="1">Wait for a moment while it is processing.</li>
 	<li aria-level="1">In no time you will see the current status of your package.</li>
 	<li aria-level="1">If you face any problem you can contact the LSO tracking customer support number.</li>
</ul>
 
<h3>Lone Star Overnight Customer Support</h3>
If you face any problem you can contact them. If you want to know their service charges or want to know the services you can contact them. Here will give their Email contact number and LSO tracking Headquarter address.
<table>
<tbody>
<tr>
<th>Courier</th>
<th>Contact Number</th>
<th>Email</th>
<th>Main Office Address</th>
</tr>
<tr>
<td>LSO Tracking</td>
<td>800-800-8984</td>
<td>customerservice@lso.com</td>
<td>252 Fallbrook Dr, Houston, TX 77038, United States</td>
</tr>
</tbody>
</table>
<h4>How to Calculate LSO Shipping Fee</h4>

<iframe src="https://www.lso.com/calculate-rates" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="900px" width="100%" allowfullscreen></iframe>


<h4><em>FAQs</em></h4>
<ul>
 	<li><strong><em>How do I track my LSO package?</em></strong></li>
</ul>
Follow these steps to find out where your LSO package is:
<ol>
 	<li>Visit www.lso.com to find out more about the LSO.</li>
 	<li>Click on "Track" in the main menu.</li>
 	<li>In the "Enter tracking number" field, type in your tracking number.</li>
 	<li>Click where it says "Track."</li>
 	<li>The website will show you where your package is and what its current status is.</li>
</ol>
<ul>
 	<li><em><strong>How long does LSO shipping take?</strong></em></li>
</ul>
LSO (Lone Star Overnight) offers different shipping services with different delivery times depending on the level of service chosen. Here are the estimated delivery times for LSO's standard shipping services within the US:
<ol>
 	<li>LSO Ground: One to three business days, depending on the distance and where the package is going.</li>
 	<li>LSO Priority Overnight: Delivered by 10:30 am or 12 pm on the next business day, depending on the destination.</li>
 	<li>Standard Overnight LSO: Delivered by 5 p.m. on the next business day.</li>
 	<li>LSO Economy: Delivery takes between 2 and 5 business days, depending on the distance and where the package is going.</li>
</ol>
 

Please keep in mind that these delivery times are estimates that can be changed by things like weather, traffic, and other unplanned events. Also, LSO offers same-day delivery and expedited delivery for shipments that need to arrive quickly.

     
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