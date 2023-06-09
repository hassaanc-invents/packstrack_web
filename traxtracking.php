
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
  <meta name="description" content=" Trax Tracking was started and is owned by Muhammad Hasan Khan. Muhammad Hasan Khan has worked on a number of business plans.">
<meta name="keywords" content="Trax Tracking, Trax Courier Tracking, Trax, Trax Tracking Customer Support, Trax Tracking Online Check, Trax logistics tracking">
<meta name="author" content="Packstrack">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/traxtracking"
  },
  "headline": "Trax Tracking _ Track your Package",
  "description": "of business plans to set up a supply chain in Pakistan with more than 500 locations by July 2017.",
  "image": "https://packstrack.com/uploaded_files/Add%20a%20heading%20(15)%20(1).webp",  
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
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "What is Trax sonic tracking, and How Do I Use It?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Trax Sonic Tracking is a technology that uses ultrasonic sensors to track the location of a person or an object in real-time. This technology is often used in robots, security systems, and systems that help people find their way around inside. You need a Trax sensor module and software that works with the module to use Trax Sonic Tracking. The sensor module sends out high-frequency sound waves that hit objects and bounce back to the module. The module then figures out how far away the object is and which way it is moving. Install the sensor module in the area you want to track to set up Trax Sonic Tracking. The module should be put somewhere that gives it a clear view of the things or people you want to keep track of. Once the module is set up, the software can be used to track where the objects are in real-time."
    }
  },{
    "@type": "Question",
    "name": "How long does that trax take to deliver packages?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Delivery times for Trax products can vary, depending on things like whether or not the product is in stock, where it is being sent, and what shipping method is chosen at checkout. Trax products are usually shipped within 1–2 business days after an order is placed, and delivery can take anywhere from a few days to a couple of weeks, depending on the shipping method chosen and the country where the product is going."
    }
  },{
    "@type": "Question",
    "name": "What’s the best way to keep track of my Trax order?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Check your email to see if Trax has sent you a confirmation email about your order. This email will have a link to the carrier's site and a tracking number.
You can go to the carrier's website by clicking on the tracking number or the link.
Enter the tracking number on the website of the shipping company to find out where your order is.
Check the status of your order often to find out how it's going and when you can expect it to arrive.
You can also get help from Trax's customer service team if you have any questions or concerns about your order."
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
        $blogId = "49";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="Trax Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">Trax Tracking _ Track your Package</span></h1>
Trax Tracking was started and is owned by Muhammad Hasan Khan. Muhammad Hasan Khan has worked on a number of business plans to set up a supply chain in Pakistan with more than 500 locations by July 2017. He was Vice President of Stallions Delivery in the past. Trax is committed to giving you the most up-to-date legal services so that you can build your online business in the best way possible. So, let's say you're interested in your e-commerce business. With Trax, you can expand your online business from your stores to their doorsteps because Trax makes shipping easier. With more than 650 locations in Pakistan and delivery to 230 locations around the world, Triple X Express offers unique service features that almost no one else does, like alternatives and trial and purchase options. It also tracks businesses to help them make the most of their deliveries.
<h2>Trax Courier Tracking</h2>
Earlier, when people used to send anything anywhere, it used to take them many days which there was a lot of lost time. Then the courier service started due to which the fastest delivery started in Pakistan. Trax is one of the best courier services in Pakistan and the fastest and most agile commerce service. <b>Trax Courier Tracking</b> provides the highest quality delivery experience through its network.  Additionally, <b>Trax</b> is a national last-mile delivery network providing high-speed solutions for commerce logistics. It is a tracking system that helps you track and trace the status and location of your parcel. Trax Express tracking is networked nationally with more than three hundred service centers in the contiguous United States and other provinces. It delivers packages from small packages to large companies. You can also track <b><a href="https://packstrack.com/tcstracking" target="_blank"  class="text-primary">TCS Tracking</a></b>
<h3>Trax Tracking Online Check</h3>
When you deliver or order an item anywhere through Trax Tracking, they will give you a tracking number. Your tracking number is sent to your mobile phone. It is emailed to you. It has complete information about the package, how far it will reach and where it is now. You can track your package using this number. Here we will tell you some simple ways to track your package easily.
<ul>
 	<li aria-level="1">You must have a tracking number provided by <b><a href="https://trax.pk/" target="_blank"  class="text-primary">Trax tracking</a></b>.</li>
 	<li aria-level="1">Enter this tracking number into the tracker.</li>
 	<li aria-level="1">Press the track button and wait for a while.</li>
 	<li aria-level="1">You will be provided with complete details about your package shortly.</li>
 	<li aria-level="1">If your package is lost or damaged, you can contact customer support.</li>
</ul>
<iframe src="https://www.sonic.pk/tracking" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="250px" width="100%" allowfullscreen></iframe>
<h4>Trax Tracking Customer Support</h4>
<table dir="ltr" border="1" cellspacing="0" cellpadding="0"><colgroup> <col width="131" /> <col width="100" /> <col width="100" /></colgroup>
<tbody>
<tr>
<td data-sheets-value="{"><strong>Courier</strong></td>
<td data-sheets-value="{"><strong>Email</strong></td>
<td data-sheets-value="{">
<div>
<div><strong>Contact Number</strong></div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Trax tracking</td>
<td data-sheets-value="{">info@trax.pk</td>
<td data-sheets-value="{">21111118729</td>
</tr>
</tbody>
</table>
<h4>Trax logistics tracking</h4>
Trax Logistics Tracking Status lets you check your real-time package status online. You will use your Trax courier tracking number to track your shipment. This tracking number is sent to you on the invoice or via email. Trax express courier is one of the premium express couriers in Pakistan. You can check your package on this website after entering the tracking number. You have to put this tracking Id and click the track button shortly you will know the status of your package. You can also track <b><a href="https://packstrack.com/leopardtracking" target="_blank"  class="text-primary">Leopards Tracking</a></b>

<h4>Trax tracking</h4>
Here we will provide you with complete information about tax tracking and freight tips. Getting a rate code when deciding on a logistics form is a very regretful decision. Just don't allow it to be polite. There may be plastic bags that contain inspections such as bottles of shampoo until they are placed in your container and Ottmann Logistics to protect end-of-life goods and data at the end of manufacturing. In short, let's find a faster way to track your tracking. Trax promises to move your items faster than ever before.

Trax is trusted by thousands of customers across Pakistan to provide a fast train of orders through a single number on Trax. You can check your Trax Express tracking status by entering the code number in the tracking field. Additionally, press the track button to get the rate-in-location details of your package. Trax to ensure the quality of both products and services. Tries to get internet users with the system.
<h4>Branches of Trax Tracking</h4>
<table dir="ltr" border="1" cellspacing="0" cellpadding="0"><colgroup> <col width="100" /> <col width="221" /> <col width="131" /></colgroup>
<tbody>
<tr>
<td data-sheets-value="{"><strong>City</strong></td>
<td data-sheets-value="{"><strong>Location</strong></td>
<td data-sheets-value="{"><strong>Contact</strong></td>
</tr>
<tr>
<td data-sheets-value="{">Islamabad</td>
<td data-sheets-value="{" data-sheets-hyperlink="https://goo.gl/maps/SK2f5bQLfFqAYEti6">91 Street 7, I-10/3 I 10/3 I-10, Islamabad, Islamabad Capital Territory 44000, Pakistan</td>
<td data-sheets-value="{">21111118729</td>
</tr>
<tr>
<td data-sheets-value="{">Lahore</td>
<td data-sheets-value="{" data-sheets-hyperlink="https://goo.gl/maps/6Ub9ifpQXyrpSLnGA">Wahdat Rd, Rehmanpura Colony, Lahore, Punjab 54000, Pakistan</td>
<td data-sheets-value="{">21111118729</td>
</tr>
<tr>
<td data-sheets-value="{">Karachi</td>
<td data-sheets-value="{" data-sheets-hyperlink="https://goo.gl/maps/ppawY2jv1jr3CJpQ8">Plot # 105, Mehran Town Sector 7 A Korangi, Karachi, Karachi City, Sindh 74900, Pakistan</td>
<td data-sheets-value="{">21111118729</td>
</tr>
<tr>
<td data-sheets-value="{">Faisalabad</td>
<td data-sheets-value="{" data-sheets-hyperlink="https://goo.gl/maps/itVg1RLLTsdPVezH6">C4C3+9JW, Jhumra Rd, Abdullahpur, Faisalabad, Punjab, Pakistan</td>
<td data-sheets-value="{">21111118729</td>
</tr>
<tr>
<td data-sheets-value="{">Abbottabad</td>
<td data-sheets-value="{" data-sheets-hyperlink="https://goo.gl/maps/APGrtyapJSev14cx6">56RJ+V2P, Street 3, Kaghan Colony Abbottabad, Khyber Pakhtunkhwa, Pakistan</td>
<td data-sheets-value="{">21111118729</td>
</tr>
<tr>
<td data-sheets-value="{">Multan</td>
<td data-sheets-value="{" data-sheets-hyperlink="https://goo.gl/maps/KhgnS86uvAeWrCR46">1st Floor, Indus Tower،, Inner City, Multan, Punjab, Pakistan</td>
<td data-sheets-value="{">21111118729</td>
</tr>
</tbody>
</table>
 
<h4><em><strong>FAQs</strong></em></h4>
<ul>
 	<li id="h-d-what-is-trax-sonic-tracking-and-how-do-i-use-it"><em><strong> What is Trax sonic tracking, and How Do I Use It?</strong></em></li>
</ul>
Trax Sonic Tracking is a technology that uses ultrasonic sensors to track the location of a person or an object in real-time. This technology is often used in robots, security systems, and systems that help people find their way around inside. You need a Trax sensor module and software that works with the module to use Trax Sonic Tracking. The sensor module sends out high-frequency sound waves that hit objects and bounce back to the module. The module then figures out how far away the object is and which way it is moving. Install the sensor module in the area you want to track to set up Trax Sonic Tracking. The module should be put somewhere that gives it a clear view of the things or people you want to keep track of. Once the module is set up, the software can be used to track where the objects are in real-time.
<ul>
 	<li><em><strong>How long does that trax take to deliver packages?</strong></em></li>
</ul>
Delivery times for Trax products can vary, depending on things like whether or not the product is in stock, where it is being sent, and what shipping method is chosen at checkout. Trax products are usually shipped within 1–2 business days after an order is placed, and delivery can take anywhere from a few days to a couple of weeks, depending on the shipping method chosen and the country where the product is going.

 
<ul>
 	<li id="h-b-what-s-the-best-way-to-keep-track-of-my-trax-order"><em><strong>What’s the best way to keep track of my Trax order?</strong></em></li>
</ul>
The best way to keep track of your Trax order is to use the tracking information that Trax gives you after your order has shipped. Trax usually sends an email with a tracking number and a link to the carrier's website so you can check on the status of your order.

Here are the steps you can take to keep track of your Trax order:
<ul>
 	<li>Check your email to see if Trax has sent you a confirmation email about your order. This email will have a link to the carrier's site and a tracking number.</li>
 	<li>You can go to the carrier's website by clicking on the tracking number or the link.</li>
 	<li>Enter the tracking number on the website of the shipping company to find out where your order is.</li>
 	<li>Check the status of your order often to find out how it's going and when you can expect it to arrive.</li>
 	<li>You can also get help from Trax's customer service team if you have any questions or concerns about your order.</li>
</ul>    
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