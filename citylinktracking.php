
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
  <meta name="description" content=" City Link is a courier company that was founded in Malaysia in 1979 by David Tan. This company is providing courier and Logistic services in Malaysia.">
<meta name="keywords" content="City Link Tracking, City Link Express Tracking, City Link Tracking Check Online, City-link tracking consignment">
<meta name="author" content="Packstrack">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/citylinktracking"
  },
  "headline": "City Link Tracking | Track Your Parcel",
  "description": "City Link is a courier company that was founded in Malaysia in 1979 by David Tan. This company is providing courier and Logistic services in Malaysia.",
  "image": "https://packstrack.com/uploaded_files/city%20(1).webp",  
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
  "datePublished": "2023-01-08",
  "dateModified": "2023-03-01"
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
        $blogId = "33";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="City Link Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1 style="text-align: center;">City Link Tracking | Track Your Parcel</h1>

<iframe src="https://www.citylinkexpress.com/track-your-shipment/" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="650px" width="100%" allowfullscreen></iframe>
 
<h2>City Link Tracking</h2>
City Link is a courier company that was founded in Malaysia in 1979 by David Tan. This company is providing courier and Logistic services in Malaysia. After an experience of 30 Years, City Link becomes a brand. They a spreading their branches into other countries. They are also providing their services in Singapore and Thailand. City link tracking uses modern tools for their customers. They are improving the system of the distribution system. Apart from improving the quality of city-link tracking, it has also integrated advanced technology to improve payment and package distribution processes.
<h3>City Link Express Tracking</h3>
With more than 30 years in the market, Satellite wants to work on a variety of situations, that's why we work on a mobile application developed by system friends like City Link Express Tracking. The City Link has won several awards. In 2019, the company won an award for its service excellence in Malaysia and other countries such as Thailand and Singapore. In 2020, it had certificates for its commitment to its longest tenure of service. Certifies as a living company that offers the best quality services. You can also track <b><a class="text-primary" href="https://packstrack.com/anjanicouriertracking" target="_blank" rel="noopener">Anjani Courier Tracking</a></b>
<h3>City Link Tracking Check Online</h3>
When an item is shipped through City Link Tracking Check Online, they give you a tracking number and this tracking number is emailed or messaged to you. The tracking number contains complete information about your package, where it is at the moment, and when it will reach you. You can track your package online with the help of this tracking number. Here we will tell you some simple steps by which you can Track your package without wasting time. These steps are as follows.
<ul>
 	<li aria-level="1">First You have a valid <b><a class="text-primary" href="https://www.citylinkexpress.com/track-your-shipment/" target="_blank" rel="noopener">city link tracking</a></b> no.</li>
 	<li aria-level="1">Enter your tracking number into our tracker.</li>
 	<li aria-level="1">Wait for a second while is processing.</li>
 	<li aria-level="1">Soon you will know all about your package.</li>
 	<li aria-level="1">If you face any problem and your package is lost during transit you can contact City link tracking customer service.</li>
</ul>
<h3>City Link Tracking Customer Service Number</h3>
If you are facing any difficulty in tracking the package, then you can get customer support, if your package is lost or damaged, then you can reach customer support, if you want to know about courier tracking you can contact city link customer support. Many people don't know their contact numbers but here we will provide you a City link tracking contact number and email so that you can contact them.
<table>
<tbody>
<tr>
<td><b>Courier</b></td>
<td><b>Contact Number</b></td>
<td><b>Email</b></td>
<td><b>Address</b></td>
</tr>
<tr>
<td>City Link Tracking</td>
<td>60 603-5565 8399</td>
<td>customerservice@citylinkexpress.com.my</td>
<td>No. 3A, Jalan Akitek U1/22, Seksyen U1, Hicom Glenmarie Industrial Park, 40150, Shah Alam, Selangor Darul Ehsan, Malaysia.</td>
</tr>
</tbody>
</table>
<h2></h2>
<h3>City-link tracking consignment</h3>
City link tracking number most important market is the Asian market, so Siteng Express is very important to many business users of the China brand. Sailing Thailand has become a reference in countries such as Singapore and China, but its operational infrastructure makes it one of the world's 200 It is allowed to deliver its services to more than 1,000 countries. Setting can reach countries in Europe and Latin America and as far as the United States. city-link tracking can track packages anywhere in the world. You can also track
<b><a class="text-primary" href="https://packstrack.com/vtranstracking" target="_blank" rel="noopener">V Trans Tracking</a></b>
<h2></h2>
<h3>City-link tracking number</h3>
<h2></h2>
The Setting Express tracking number and a combination of 15 characters are embedded in digitally private services to protect customer data as mentioned above. Can be used correctly on any device city link tracking Malaysia is sent when you pay for the service contract which is sent via email and text message for damage. In case it can be retrieved through Setting city-link tracking consignment Malaysia.    
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