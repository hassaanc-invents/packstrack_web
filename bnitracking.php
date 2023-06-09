
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
  <meta name="description" content="BNI Tracking is the most reliable and consistent package delivery service in Canada">
<meta name="keywords" content="BNI Tracking, BNI Tracking Check online, BNI Tracking Canada, BNI Canada Tracking, BNI Tracking Amazon">
<meta name="author" content="Packstrack">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/bnitracking"
  },
  "headline": "BNI Tracking | Track your Parcel Here",
  "description": "BNI Tracking is the most reliable and consistent package delivery service in Canada, whether you're looking for a lifetime distribution hall or just buying something for yourself.",
  "image": "https://packstrack.com/uploaded_files/bni%20(1).webp",  
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
  "datePublished": "2023-01-07",
  "dateModified": "2023-03-01"
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "How do I Track BNI Tracking?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Follow these steps:
Visit the BNI Courier website: Go to the BNI Courier website and find the \"Track & Trace\" section.
Enter your tracking number: Enter the tracking number provided to you when you shipped your package. The tracking number is usually found on your shipping label or in the confirmation email you received from BNI Courier.
Track your shipment: After entering your tracking number, you will be able to see the status of your shipment, including the location and estimated delivery time.
If you encounter any difficulties or have any questions, you can contact BNI Courier's customer service department for assistance."
    }
  },{
    "@type": "Question",
    "name": "How long does BNI tracking take to deliver?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The delivery time for a BNI courier shipment can vary depending on several factors, such as the destination, shipping method, and local delivery services. In general, domestic shipments within Indonesia can take anywhere from one to five business days to be delivered, while international shipments may take longer. It's important to keep in mind that delivery times are estimated and can be affected by unforeseen circumstances such as severe weather, customs delays, or other factors outside."
    }
  },{
    "@type": "Question",
    "name": "Is BNI Tracking shipping Cost expensive?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The cost of shipping with BNI Tracking will depend on several factors, including the destination, weight and size of the shipment, and the shipping method chosen. BNI Courier offers various shipping options, including express and standard delivery, and the cost will vary based on the level of service you choose."
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
        $blogId = "31";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="BNI Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1 style="text-align: center;">BNI Tracking | Track your Parcel Here</h1>
 

 
<iframe src="https://postmediaparcelservices.com/track-your-shipment/" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="600px" width="100%" allowfullscreen></iframe>

 

 

 
<h2>BNI Tracking</h2>
<h2></h2>
BNI Tracking is the most reliable and consistent package delivery service in Canada, whether you're looking for a lifetime distribution hall or just buying something for yourself. They know how important it is to run a high-quality business. More than a century ago, they started as a media supply chain in Atlantic Canada. Since then, they've kept expanding their reach and can now be used for a wide range of things if you send your shipment through an experienced, fast, modern, and secure network. If you need delivery, they are the right people for the job. There are sites for News Business Key all over the province.
<h2></h2>
BNI is the most active media group in Canada. In the digital world, Bonshaw sends newspapers and online news to a growing number of people. offer website development services and make custom software packages based on seven needs. It's not hard to see why this group is growing so quickly.
<h2></h2>
<h3>BNI Tracking Check online</h3>
<h2></h2>
When you send anything via BNI tracking they Give a BNI tracking number. You can track it online. Here we will tell you some simple steps to track your package online.
<h2></h2>
<ul>
 	<li>First, you have a valid tracking number.</li>
 	<li>Enter your tracker into our tracker.</li>
 	<li>Then press the track <a class="text-primary" href="https://postmediaparcelservices.com/" target="_blank" rel="noopener">button to track</a>your package.</li>
 	<li>Soon you will know all about your package.</li>
 	<li>If you face any problem you can contact Customer support number.</li>
</ul>
<h3>BNI Tracking Number</h3>
A tracking number is issued to each package so that it can be identified. You are given a tracking number for your box after it is prepared for shipment and once it has left our facility. Using this tracking number, you will be able to monitor the delivery of your package. You will receive this tracking number in an email that has been sent to you. This tracking number is connected to the GPS system, and when you receive your shipment, it will provide you with an up-to-date location. In this section, we will explain the quickest and most convenient way to examine the package.
<h3>BNI Tracking Canada</h3>
<h2></h2>
BNI Tracking Canada is the most active media and justice company in Attock-Rida. It publishes three newspapers and more than a dozen weekly papers, as well as Canada's most popular online media platform and a job recruiting side called a jam. Part of what they do is an online marketing film and tablet service that focuses on the fast-paced e-commerce industry. No, they only use the most modern tools to ship your package as quickly as possible. You can also track <a class="text-primary" href="https://packstrack.com/intelcomtracking" target="_blank" rel="noopener">Intelcom Tracking</a>
<h2></h2>
<h3>BNI Canada Tracking</h3>
<h2></h2>
BNI Canada Tracking is the most active media and justice company in Attock-Rida. It publishes three newspapers and more than a dozen weekly papers, as well as Canada's most popular online media platform and a job recruiting side called a jam. Part of what they do is an online marketing film and tablet service that focuses on the fast-paced e-commerce industry. No, they only use the most modern tools to ship your package as quickly as possible.
<h2></h2>
<h3>BNI Tracking Amazon</h3>
<h2></h2>
You won't have to worry about where your package is or if it will arrive in this condition because the phone will tell you. BNI Tracking Amazon is happy to offer self-service, which gives you the most up-to-date information for your project. Here, we'll tell you an easy way to find out where your package is. Go to their official website, enter your statement number at the break, and you can find out everything new about your package. If you can't find out where your order is, call BNI Tracking customer service so they can help you.
<h2></h2>
<h3>BNI Tracking Customer Service</h3>
<h2></h2>
<strong> </strong>If you face any problem during transit you can contact BNI Tracking Customer Service. If you want to know about the service charges you can contact them. Here we will give BNI tracking contact Number and Email.
<h2></h2>
<table>
<tbody>
<tr>
<td><strong>Courier</strong></td>
<td><strong>Contact Number</strong></td>
<td><strong>Email</strong></td>
<td><strong>Address</strong></td>
</tr>
<tr>
<td>BNI Tracking</td>
<td>(506) 645 3257</td>
<td>https://bonshawgroup.com/</td>
<td>210 Crown Street Saint John, NB Canada E2L 2X7</td>
</tr>
</tbody>
</table>
<h3>FAQs</h3>
<ul>
 	<li><strong>How do I Track BNI Tracking?</strong></li>
</ul>
Follow these steps:
<ol>
 	<li>Visit the BNI Courier website: Go to the BNI Courier website and find the "Track & Trace" section.</li>
 	<li>Enter your tracking number: Enter the tracking number provided to you when you shipped your package. The tracking number is usually found on your shipping label or in the confirmation email you received from BNI Courier.</li>
 	<li>Track your shipment: After entering your tracking number, you will be able to see the status of your shipment, including the location and estimated delivery time.</li>
</ol>
If you encounter any difficulties or have any questions, you can contact BNI Courier's customer service department for assistance.
<div>
<div>
<div>
<div>
<ul>
 	<li><strong>How long does BNI tracking take to deliver?</strong></li>
</ul>
</div>
<div></div>
</div>
</div>
</div>
<div>
<div>
<div>
<div>
<div>
<div>

The delivery time for a BNI courier shipment can vary depending on several factors, such as the destination, shipping method, and local delivery services. In general, domestic shipments within Indonesia can take anywhere from one to five business days to be delivered, while international shipments may take longer.

It's important to keep in mind that delivery times are estimated and can be affected by unforeseen circumstances such as severe weather, customs delays, or other factors outside.

</div>
<ul>
 	<li><strong>Is BNI Tracking shipping Cost expensive?</strong></li>
</ul>
The cost of shipping with BNI Tracking will depend on several factors, including the destination, weight and size of the shipment, and the shipping method chosen. BNI Courier offers various shipping options, including express and standard delivery, and the cost will vary based on the level of service you choose.

</div>
</div>
</div>
</div>
</div>    
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