
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
  <meta name="description" content=" Get your Gati courier tracking status in seconds Tracking has the fastest and most secure tracking service Decorate Tracking helps you get the latest updates on your parcel">
<meta name="keywords" content="Gati Tracking, How to Track Gati Tracking Online, Gati Tracking Customer Support number, Gati KWE Tracking, Gati courier tracking">
<meta name="author" content="Packstrack">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/gatitracking"
  },
  "headline": "Gati Courier Tracking | Track your Parcel",
  "description": "Get your Gati courier tracking status in seconds Tracking has the fastest and most secure tracking service",
  "image": "https://packstrack.com/uploaded_files/gati%20(1).webp",  
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
  "datePublished": ""
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
        $blogId = "35";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="Gati Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1 style="text-align: center;">Gati Courier Tracking | Track your Parcel</h1>
 
<h2 style="text-align: left;">Gati Tracking</h2>
Get your Gati courier tracking status in seconds Tracking has the fastest and most secure tracking service Decorate Tracking helps you get the latest updates on your parcel. Gati Tracking helps you track your Gati courier easily with an online tracking system powered by Gati KWE Tracking. You can track the current status of the consignment instead of visiting the courier's location or calling the customer service center. You can also call Gati Tracking customer support to track your Gati Courier Package.
<h2></h2>
Addresses of supporting cars Consignments sent by Gati Courier Articles Courier Parcel Packages Online tracking inquiry system to track the status of all you need is your consignment tracking number to check the current delivery location status of your consignments. You can also track <b><a href="https://packstrack.com/cctlcontainertracking">CCTL Container Tracking</a></b>
<h2></h2>
<h3>How to Track Gati Tracking Online</h3>
<h2></h2>
You can track your package online by some follow some simple steps. these steps are as follows:
<h2></h2>
<ul>
 	<li aria-level="1">First, you have a valid <b><a class="text-primary" href="https://www.gati.com/track-by-docket/" target="_blank" rel="noopener">Gati Courier tracking</a></b> number.</li>
 	<li aria-level="1">Enter your tracking number into our real-time tracker.</li>
 	<li aria-level="1">Then click the track button for your package status.</li>
 	<li aria-level="1">In a few seconds, you will to your package location.</li>
 	<li aria-level="1">If you face any problem you can contact Gati customer support.</li>
</ul>
<h2></h2>
<h3>Gati Tracking Customer Support number</h3>
<h2></h2>
Here we will also give you the Gati tracking Customer support number. You can contact them free of cost.
<h2></h2>
<table>
<tbody>
<tr>
<td>Courier</td>
<td>Contact Number</td>
<td>Email</td>
<td>Address</td>
</tr>
<tr>
<td>Gati Tracking</td>
<td>91860123204284</td>
<td>customerservice@gatikwe.com</td>
<td>Shree Nivas, Palasuni Road, Palasuni, Bhubaneshwar – 751010, Near Shiv Mandir</td>
</tr>
</tbody>
</table>
<h2></h2>
<h3>Gati KWE Tracking</h3>
<h2></h2>
Gati launched an express distribution service in India in 1989 and was one of the first companies to print its delivery date on file and offer a money-back guarantee, accepting payment on presentation of proof of delivery. Gati-kwe tracking pioneered the POD practice that is now considered a standard in the industry. Gati initially operated between Madras. After completing planning Gati started work on four stations Hyderabad, Bangalore, Madras, and Hoser.
<h2></h2>
<h3>Gati courier tracking</h3>
You can use our Gati docket tracking service to work and track your career in Ghati Express Distribution and Supply Chain Solutions. Gati Track Courier can easily access the online tracking system supported by Gati express tracking and you can also fix the current status of each by calling their location's customer center. You can check and track your order with Gati tracking number instead of track. you can also track
<b><a class="text-primary" href="https://packstrack.com/rivigotracking" target="_blank" rel="noopener">Rivigo Tracking</a></b>
<h2></h2>
<h3>Gati tracking check Online</h3>
<h2></h2>
When you send anything via Gati Express Tracking, they give a Gati tracking number. The tracking number contains all details of your package. This tracking number tells you where is your package and when will it reach you. Gati kwe courier tracking sends this tracking number to your Gmail. You can track your package online. We will guide you on how you can check the status of your Gati surface tracking.
<h2></h2>
<h3>Gati Network In India</h3>
<h2></h2>
<ul>
 	<li>Gati tracking Pin codes: 19000</li>
 	<li>Total districts in India: 676</li>
 	<li>Districts having Gati network: 672</li>
</ul>
<h2></h2>    
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