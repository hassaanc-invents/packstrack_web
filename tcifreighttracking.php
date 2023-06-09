
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
  <meta name="description" content=" TCI  Express Tracking is India's largest courier company founded in 1996. It became TCI Express Limited which is now listed on the Stock Exchange of India.">
<meta name="keywords" content="TCI Express Tracking, TCI Express Courier Tracking, TCI Express Tracking Status Check Online, TCI Express Customer Care Numbers">
<meta name="author" content="Packstrack">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/tcifreighttracking"
  },
  "headline": "TCI Freight Tracking - Track Your Package",
  "description": "TCI freight transport consignment tracking is the largest company in India. It is thought to be the most important online tracking.",
  "image": "https://packstrack.com/uploaded_files/N%20O%20N%20S%20T%20O%20P%20DELIVERY%20(5)%20(1).webp",  
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
      "url": "https://packstrack.com/"
    }
  },
  "datePublished": "2023-01-20",
  "dateModified": "2023-03-10"
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
        $blogId = "52";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="TCI Freight Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>TCI Freight Tracking - Track Your Package</h1>
 

TCI freight transport consignment tracking is the largest company in India. It is thought to be the most important online tracking. Then there are all the levels, like the largest level, which has different buildings to handle workers of any size or weight. This company is considered the biggest in India because it has more than 1,400 computerized offices, more than 5,000 employees, and more than 9,500 trucks that it owns. It also has four cargo ships, works at the highest level in India, and is becoming increasingly important as time progresses.
<iframe src="https://www.tcifreight.in/track-consignment.html" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="450px" width="100%" allowfullscreen></iframe>
<h2>TCI Freight Tracking Online:</h2>
After carefully reading the instructions below, it will be easy for you to check your TCI Freight Tracking.
<ul>
 	<li aria-level="1">First, you'll have the order number, which the company gives you when you place the order. In the box below, type that number.</li>
 	<li aria-level="1">Then, click on the track button.</li>
 	<li aria-level="1">After a few minutes, you'll find out everything about your order.</li>
 	<li aria-level="1">So, you can keep track of where your order is and how long it will take to get to you.</li>
</ul>
If you have trouble placing your order, you can also talk to customer service. They will answer all of your questions about your order. They will help you place your order and show you how to do it.
<h3>TCI Freight Transport Consignment Tracking</h3>
When you ship anything or consignment via tci freight transport consignment tracking, They Give you a tracking or Consignment number. This tracking Number Contains all the details about Consignment. You can track it online. Here we will tell you some easy steps to track your tracking. By following these steps you can track your package without wasting your time. You can also Track <b><a class="text-primary" href="https://packstrack.com/vtranstracking" target="_blank" rel="noopener">V Trans Tracking</a></b>
<h3>Customer Services Of TCI Freight Tracking:</h3>
 
<table>
<tbody>
<tr>
<td><b>Courier</b></td>
<td><b>Contact Number</b></td>
<td><b>Email</b></td>
<td><b>Address</b></td>
</tr>
<tr>
<td>TCI Freight Tracking</td>
<td>1800 1800 824</td>
<td>care@tcifreight.in</td>
<td>TCI House, Institutional Area Sector-32, Gurgaon-122001, Haryana, India Transport Corporation of India</td>
</tr>
</tbody>
</table>
<h3></h3>
<h3>TCI Freight Courier Tracking</h3>
This company is not only in India but also has offices in four other countries. It is one of the best companies in India and has ISO certification. The good thing about this business is that it gives you a lot of good things. This company helps get the things you buy to the address you give. This business is similar to FedEx, USP, Aramex, and Express Tracking. When you place an order, they give you a tracking number so they can keep track of it.

Branches Of TCI Freight Tracking

If you want to know their Branches, Here we will provide you with the branch's address and their contact number.
<table>
<tbody>
<tr>
<td><b>City</b></td>
<td><b>Number</b></td>
<td><b>Head Office</b></td>
</tr>
<tr>
<td>TCI Freight Kolkata</td>
<td>91 94332 68841</td>
<td>56 ALLIED ROAD, Kolkata, West Bengal 700016, India.</td>
</tr>
<tr>
<td>TCI Freight Delhi</td>
<td>91 84688 41992</td>
<td>New Delhi, Delhi 110064, India, A-30, Mayapuri Industrial Area Phase II</td>
</tr>
<tr>
<td>TCI Freight Ahmedabad:</td>
<td>91 84483 93524</td>
<td>Sarangpur Bridge, Ahmedabad, Gujarat, India; Kalidas Mill Compound</td>
</tr>
</tbody>
</table>
<h4><em>FAQs</em></h4>
<ul>
 	<li><strong>How do I track my <span class="">TCI freight transport consignment tracking?</span></strong></li>
</ul>
Follow these steps to find out where your TCI freight transport package is:
<ol>
 	<li>Go to <b><a class="text-primary" href="https://www.tcil.com/CnsTrack/TCI_CNS_Trac.aspx" target="_blank" rel="noopener">tcifreight.in </a></b>and choose "Track Your Consignment" from the list of options. In the tracking field, put your consignment or reference number and click "Track."</li>
 	<li>You will be taken to a page where you can see where your shipment is right now. This page will show you where your shipment came from and where it is now, as well as when it is expected to arrive.</li>
 	<li>You can get the TCI tracking app from the Google Play Store or the Apple App Store if you need to keep track of a lot of shipments. This app lets you track more than one shipment at once and get push notifications when there are changes.</li>
 	<li>If you can't find your shipment on the website or app, you can contact TCI's customer service through their website or by phone to find out where your shipment is.</li>
</ol>
 
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group dark:bg-gray-800">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="relative flex w-[calc(100%-50px)] flex-col gap-1 md:gap-3 lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<ul>
 	<li><strong>Where can TCI Freight Tracking deliver?</strong></li>
</ul>
 

</div>
<div class="text-gray-400 flex self-end lg:self-center justify-center mt-2 gap-3 md:gap-4 lg:gap-1 lg:absolute lg:top-0 lg:translate-x-full lg:right-0 lg:mt-0 lg:pl-2 visible">

TCI Freight is one of the most important logistics and transportation companies in India. They offer delivery services to many places in India and around the world. TCI Freight has a large network that reaches almost all of India's major cities, towns, and industrial hubs. They offer their services to more than 2000 locations.

TCI Freight delivers to more than 160 countries around the world, including Asia, Europe, North America, South America, Africa, and Australia. They have partnerships and agreements with many of the world's best carriers and agents, which lets them offer fast and reliable international shipping services.
    
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