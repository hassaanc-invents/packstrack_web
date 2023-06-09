
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
  <meta name="description" content=" Anjani Courier Tracking is one of the largest Courier companies in India. It was founded in 2006. ">
<meta name="keywords" content=" Anjani Courier Tracking, shree anjani courier tracking, Anjani courier tracking customer care number, www shree anjani courier com tracking, Anjani courier service tracking">
<meta name="author" content="Packstrack">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/anjanicouriertracking"
  },
  "headline": "Shree Anjani Courier Tracking",
  "description": "In India, Shree Anjani Courier is the industry leader when it comes to providing courier services. They have an extensive branch and agency network all over the country.",
  "image": "https://packstrack.com/uploaded_files/Untitled%20design%20(5)%20(1).webp",  
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
  "datePublished": "2023-01-10",
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
        $blogId = "38";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">Shree Anjani Courier Tracking</span></h1>
 

In India, Shree Anjani Courier is the industry leader when it comes to providing courier services. They have an extensive branch and agency network all over the country. Customers are able to effortlessly monitor the current standing of their goods in real-time with the assistance of the Shree Anjani Courier tracking system. In this blog post, we will go through the steps necessary to use the Shree Anjani Courier monitoring feature, as well as the many advantages of utilizing this particular service.
<h2>Anjani Courier Tracking</h2>
Anjani Courier Tracking is one of the largest Courier companies in India. It was founded in 2006. It has a wide network of branches all over Anjani courier and has clients like TATA, IDEA, HDFC Bank, Unilever, Reliance, and many more that are worth mentioning. Apart from this, he has worked with many clients of which he has compiled a very long list. Anjani courier service tracking carries inventory for large e-commerce businesses.
<h2></h2>
Shree Anjani Courier Tracking It is very fast-tracking. <b>Shree Anjani Courier's tracking</b> promise to deliver your package the next day. Its premium includes free pickup and a monthly bulk order package. It keeps your package very safe. They pack your item into shoppers and containers. They give you more advantages. Anjani tracking has many air cargos and checks to deliver your package. It has branches all over the country. You can also track <b><a href="https://packstrack.com/vrltracking" target="_blank"  class="text-primary">VRL Tracking</a></b>
<h3></h3>
<h3 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">Anjani Courier Tracking Customer Care Number</span></h3>
<h2></h2>
If you face any problems during track your package you can Contact Anjani Courier tracking Customer care Number. If you want to Their delivery charges you can also contact them. We will provide you with their contact number, Gmail, and Main Office Address.
<h3></h3>
<table>
<tbody>
<tr>
<td>Contact Number</td>
<td><b>Gmail</b></td>
<td><b>Address</b></td>
</tr>
<tr>
<td>+91  079 25450506</td>
<td>http://www.shreeanjanicourier.com/</td>
<td>34, Old Lati Bazar, Near ST Bus Stand, Raipur, Ahmedabad – 380 022, India</td>
</tr>
</tbody>
</table>
<h2></h2>
<h3>How To Track Anjani Courier Tracking Online</h3>
<h2></h2>
When you send anything Through Anjani courier tracking shipway They Give you a tracking number. They send this tracking number to Gmail. Anjani courier tracking number keeps all Information about your package. You can Track your track Online. We will give you Complete Details. Just do these easy things.
<h2></h2>
<ul>
 	<li aria-level="1">First, you have a tracking number that is given by <b><a href="http://www.shreeanjanicourier.com/" target="_blank"  class="text-primary">"Shree Anjani courier service tracking"</a></b>.</li>
 	<li aria-level="1">Enter your Tracking ID into real-time tracking.</li>
 	<li aria-level="1">Wait a while for getting your package detail.</li>
 	<li aria-level="1">Soon you will know about your package detail.</li>
 	<li aria-level="1">If you face any problem please contact Customer support Number.</li>
</ul>
<h3 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">www Shree Anjani courier com tracking </span></h3>
Customers may follow the progress of their shipments at any moment with the help of the real-time tracking feature offered by Shree Anjani Courier. This feature also enables customers to track their shipments in real-time. Customers no longer have to contact customer care or go to a branch in order to track their shipments because Shree Anjani Courier tracking makes it possible for them to do so from the convenience of their own homes or offices.

 
<h3 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">Anjani Courier Service Tracking</span></h3>
Accuracy: The tracking system is designed to provide accurate and up-to-current information on the status of the cargo, including the anticipated arrival date as well as any delays that may have occurred. Customers are able to monitor the progress of their shipments through Shree Anjani Courier's tracking system, which offers complete transparency from the point of origin all the way to the destination of ultimate delivery. Customers are able to follow the progress of their shipments using the Shree Anjani Courier tracking system, ensuring that their packages are delivered to the intended recipients and providing an additional layer of protection against theft. You can also track <b><a href="https://packstrack.com/marutiaircourier" target="_blank"  class="text-primary">Maruti Air Courier</a></b>

<h3 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">Anjani Courier Tracking Number</span></h3>
 

Each package is given a special number known as an Anjani Courier tracking number that may be used to track its whereabouts. Customers can check the whereabouts of their package at any moment with this Anjani Courier tracking number. There are normally 9-10 digits in the tracking number (a mix of letters and numbers). The receipt supplied to the customer at the time of shipment will include the tracking number. When a customer books a shipment, they will receive an email or text message with the tracking number. The tracking number must be kept secure so that the shipment's progress may be monitored.

 

     
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