
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
  <meta name="description" content=" Shiprocket Tracking, Shiprocket Courier Tracking, Shiprocket xpressbees tracking, Shiprocket tracking number, Shiprocket tracking customer care number">
<meta name="keywords" content="">
<meta name="author" content="Packstrack">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/shiprockettracking"
  },
  "headline": "Shiprocket Tracking | Track your Parcel",
  "description": "Shiprocket is one of India's major logistics and shipping solution providers with the most advanced courier aggregator platform on the Wicket platform",
  "image": "https://packstrack.com/uploaded_files/shiprocket%20(1).webp",  
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
    "name": "How do I track my Shiprocket parcel?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "To track your Shiprocket parcel, you can follow these steps:
Visit the Shiprocket website: Go to the Shiprocket website (https://www.shiprocket.in/) and click on the \"Track\" button on the top right corner of the page.
Enter your tracking number: On the next page, enter your Shiprocket tracking number in the designated field. Your tracking number is a unique identifier that was provided to you when your parcel was shipped.
Track your parcel: Once you have entered your tracking number, click on the \"Track\" button. The website will display the current status of your parcel, including its location and expected delivery date.
Update notifications: You can also sign up for update notifications from Shiprocket, which will notify you by email or SMS whenever the status of your parcel changes."
    }
  },{
    "@type": "Question",
    "name": "How much shipping Fee Cost shiprocket Tracking?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The shipping fee cost for Shiprocket tracking can vary depending on several factors, including the size and weight of your parcel, the distance it needs to travel, and the shipping method you choose. Shiprocket offers several shipping options, including standard delivery, express delivery, and international delivery. The cost of each option will vary, and you can find more information on the Shiprocket website"
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
        $blogId = "32";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="Shiprocket Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>Shiprocket Tracking | Track your Parcel</h1>
 

 
<h2>Shiprocket Tracking</h2>
 

 

Shiprocket is one of India's major logistics and shipping solution providers with the most advanced courier aggregator platform on the Wicket platform, allowing individual and enterprise users to select from more gold companies. specializes in offering relief to direct sellers within a specified price range. It was released on January 26, 2017. The company's headquarters are located in New Delhi, and it provides services to over two hundred and twenty nations worldwide.   However, Shiprocket Tracking has placed a special emphasis on the APAC region, with its global ambitions bolstered by a series of funding deals in the early 2020s and late 2020s from leading investment films including March Capital and Multinational Man India.

 

 
<h3>Shiprocket Courier Tracking</h3>
Using its mastery of modern logistics technology and its past success, Shiprocket Courier Tracking intends to expand and add more countries and details to its warehousing objectives. A significant portion of the funds generated by the investment will be used to expand engineering operations and increase capacity.   And includes more than 27,000 Pin Codes throughout India and More than 100,000 sales with satisfied heads It offers seamless access to even the most underserved regions. For details, the Large Indian market and international Moqim provide its services at extremely low prices in both locations. You can also track <b><a class="text-primary" href="https://packstrack.com/anjanicouriertracking" target="_blank" rel="noopener">Anjani Courier Tracking</a></b>

 

 
<h3>Shiprocket xpressbees tracking</h3>
 

 

The company provides both carriers and channels. When you connect a LineRocket SpineP, they gain access to the company's tracking system, which provides real-time data on multiple dashboards. Shiprocket xpressbees tracking has made it exceptionally easy for individual users to use the platform. The process starts with selecting the one that needs to be delivered. For this purpose, automated channel-based distribution on the platform is very beneficial as it helps in importing the order easily. Once the shipment is selected, a line can then choose the courier partner that offers the best value for money among other requirements.

 

 
<h3>Shiprocket tracking number</h3>
 

 

When you send an item with Shiprocket Tracking, they give you a tracking number. This tracking number is emailed or texted to you. Charges Service charges are written on this tracking number. You can track Shiprocket tracking Numbers online. You can also track <b><a class="text-primary" href="https://packstrack.com/vtranstracking" target="_blank" rel="noopener">V Trans Tracking</a></b>

 
<h3>Shiprocket order tracking Check Online</h3>
 

There are some simple steps to follow to Check online Shiprocket order tracking online.
<ul>
 	<li aria-level="1">First, you have a valid <b><a class="text-primary" href="https://www.shiprocket.in/shipment-tracking/" target="_blank" rel="noopener">"shiprocket tracking number"</a></b>
.</li>
 	<li aria-level="1">Enter your tracking number into our real-time tracker.</li>
 	<li aria-level="1">Then press the track button for processing.</li>
 	<li aria-level="1">Soon you will know all about your package.</li>
 	<li aria-level="1">If you face any problem you can contact shiprocket tracking customer care.</li>
</ul>
 
<h3>Shiprocket tracking customer care number</h3>
 

If you face any problem while tracking your package you can contact shiprocket tracking contact number. If you want to know about shiprocket tracking id you can contact shiprocket tracking customer care number. Here we will tell you Shiprocket tracking customer support number and Email.
<table>
<tbody>
<tr>
<td><b>Courier</b></td>
<td><b>Contact Number</b></td>
<td><b>Email</b></td>
<td><b>Address</b></td>
</tr>
<tr>
<td>Shiprocket tracking</td>
<td>011-30018133</td>
<td>support@shiprocket.in</td>
<td>Plot No.- B, Khasra-,M.G. Sultanpur, 360  Road, New Delhi, New Delhi, India - 110030</td>
</tr>
</tbody>
</table>
<h3></h3>
<h3></h3>
<h3 class=" text-muted text-center mt-4">FAQs</h3>
 
<ul>
 	<li><strong>How do I track my Shiprocket parcel?</strong></li>
</ul>
To track your Shiprocket parcel, you can follow these steps:
<ol>
 	<li>Visit the Shiprocket website: Go to the Shiprocket website (https://www.shiprocket.in/) and click on the "Track" button on the top right corner of the page.</li>
 	<li>Enter your tracking number: On the next page, enter your Shiprocket tracking number in the designated field. Your tracking number is a unique identifier that was provided to you when your parcel was shipped.</li>
 	<li>Track your parcel: Once you have entered your tracking number, click on the "Track" button. The website will display the current status of your parcel, including its location and expected delivery date.</li>
 	<li>Update notifications: You can also sign up for update notifications from Shiprocket, which will notify you by email or SMS whenever the status of your parcel changes.</li>
</ol>
<ul>
 	<li><strong>How much shipping Fee Cost shiprocket Tracking?</strong></li>
</ul>
The shipping fee cost for Shiprocket tracking can vary depending on several factors, including the size and weight of your parcel, the distance it needs to travel, and the shipping method you choose. Shiprocket offers several shipping options, including standard delivery, express delivery, and international delivery. The cost of each option will vary, and you can find more information on the <a class="text-primary" href="https://www.shiprocket.in/pricing/" target="_blank" rel="noopener">Shiprocket website</a>    
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