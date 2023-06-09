
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
    "@id": "https://packstrack.com/tciexpresstracking"
  },
  "headline": "TCI Express Tracking - Track your Package",
  "description": "TCI Express is an Indian courier company that delivers packages both in India and around the world.",
  "image": "https://packstrack.com/uploaded_files/TCI%20Express%20Tracking%20(1).webp",  
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
  "datePublished": "2023-01-12",
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
        $blogId = "42";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="TCI Express Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">TCI Express Tracking - Track your Package</span></h1>
TCI Express is an Indian courier company that delivers packages both in India and around the world. The company has an online tracking service that lets customers see how their packages are doing. Here's some information about how to track TCI Express. TCI Express gives its customers more than one way to track their packages. Your consignment number, reference number, or order ID can be used to track your package. Your shipment has a unique number called a consignment number. This number can be found on your receipt or shipping label. On the TCI Express website, you can track your shipment by entering the consignment number in the tracking field. You can use a reference number to track your shipment if you don't have a consignment number. A reference number could be a customer ID or an order number. On the TCI Express website, you can track your package by putting the reference number into the tracking field.
<h2 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">TCI Express Courier Tracking</span></h2>
If you ordered something from a store that ships with TCI Express and the store gave you an order ID, you can track your shipment. When you track your shipment on the TCI Express website, you can see where it is, when it is expected to arrive, and if there have been any delays or other problems. When your package is delivered, TCI Express will send you a delivery confirmation with the date, time, name, and signature of the person who received it. TCI Express also has a mobile app you can download to track your shipment on the go.

TCI Express has a reliable tracking service that lets customers check the status of their shipments online using a consignment number, reference number, or order ID. The company gives real-time updates on where the shipment is and how close it is to being delivered, as well as delivery confirmation when the shipment arrives. You can also track <b><a href="https://packstrack.com/umacexpresscargo" target="_blank"  class="text-primary">UMAC Express Cargo</a></b>
<h3>TCI Freight Tracking</h3>
TCI freight transport consignment tracking is the largest company in India. It is thought to be the most important online tracking. Then there are all the levels, like the largest level, which has different buildings to handle workers of any size or weight. This company is considered the biggest in India because it has more than 1,400 computerized offices, more than 5,000 employees, and more than 9,500 trucks that it owns. It also has four cargo ships, works at the highest level in India, and is becoming increasingly important as time progresses.
<iframe src="https://www.tciexpress.in/trackingdocket.aspx" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="650px" width="100%" allowfullscreen></iframe>
<h4>TCI Freight Tracking Online:</h4>
After carefully reading the instructions below, it will be easy for you to check your TCI Freight Tracking.
<ul>
 	<li aria-level="1">First, you'll have the order number, which the company gives you when you place the order. In the box below, type that number.</li>
 	<li aria-level="1">Enter your tracking number.</li>
 	<li aria-level="1">Then, click on the <b><a href="https://www.tciexpress.in/trackingdocket.aspx" target="_blank"  class="text-primary">"track button"</a></b>
.</li>
 	<li aria-level="1">After a few minutes, you'll find out everything about your order.</li>
 	<li aria-level="1">So, you can keep track of where your order is and how long it will take to get to you.</li>
</ul>
If you have trouble placing your order, you can also talk to customer service. They will answer all of your questions about your order. They will help you place your order and show you how to do it.
<h4>TCI Freight Transport Consignment Tracking</h4>
When you ship anything or consignment via tci freight transport consignment tracking, They Give you a tracking or Consignment number. This tracking Number Contains all the details about Consignment. You can track it online. Here we will tell you some easy steps to track your tracking. By following these steps you can track your package without wasting your time. You can also Track <b><a href="https://packstrack.com/ciptlcontainertracking" target="_blank"  class="text-primary">CIPTL Container Tracking</a></b>



<h4 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">TCI Express Tacking Contact Number</span></h4>
 
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
<td><a href="mailto:care@tcifreight.in">care@tcifreight.in</a></td>
<td>TCI House, Institutional Area Sector-32, Gurgaon-122001, Haryana, India Transport Corporation of India</td>
</tr>
</tbody>
</table>
<h3></h3>
<h4>TCI Freight Courier Tracking</h4>
This company is not only in India but also has offices in four other countries. It is one of the best companies in India and has ISO certification. The good thing about this business is that it gives you a lot of good things. This company helps get the things you buy to the address you give. This business is similar to FedEx, USP, Aramex, and Express Tracking. When you place an order, they give you a tracking number so they can keep track of it.
<h4>Branches Of TCI Freight Tracking</h4>
If you want to know their Branches, Here we will provide you with the branch's address and their contact number.
<table>
<tbody>
<tr>
<td>City</td>
<td>Number</td>
<td>Head Office</td>
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