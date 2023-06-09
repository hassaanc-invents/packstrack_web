
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
  <meta name="description" content="  The Lorry tracking is a technology-driven logistics platform in the South East Asia region. We connect individuals and corporations with professionals.">
<meta name="keywords" content="The Lorry tracking, How To Check The Lorry Tracking Online, The Lorry Tracking Customer Support, The Lorry tracking Check Online">
<meta name="author" content="Packstrack">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/thelorrytracking"
  },
  "headline": "The Lorry tracking - Track your Package",
  "description": "Lorry tracking, also called vehicle tracking or fleet management, is the use of technology to track the location and movement of lorries or trucks.",
  "image": "https://packstrack.com/uploaded_files/The%20Lorry%20Courier%20Tracking%20(1).webp",  
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

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "What does The Lorry tracking number look like?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The lorry tracking number is usually between 8 and 15 characters long. The number of digits can be the service you use or your location. These include numbers and letters."
    }
  },{
    "@type": "Question",
    "name": "Where do I find The Lorry tracking number?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "If you've ordered something online, the lorry tracking number may be in the shipping confirmation email or online shop order review. If you have delivered the package yourself to their warehouse, you get a receipt."
    }
  },{
    "@type": "Question",
    "name": "The tracking says my package was delivered, but I didn’t receive anything.",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The delivery courier may have left a note in your mailbox or on your door with instructions. If not, they will often deliver it to one of the two closest locations, namely a post office or a locker box. For more information or complaint contact The Lorry Customer Support."
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
        $blogId = "43";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="The Lorry tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>The Lorry tracking - Track your Package</h1>
Lorry tracking, also called vehicle tracking or fleet management, is the use of technology to track the location and movement of lorries or trucks. Usually, GPS or cellular networks are used to do this. Businesses that run a fleet of vehicles often use lorry tracking systems to improve efficiency, cut costs, and make the roads safer. By keeping track of where lorries are, how fast they are going, and where they are going, fleet managers can improve delivery routes, cut down on idle time, and watch how drivers act to make sure they follow company rules and policies. It is usually done with a GPS tracking device that is put in the lorry and software that lets fleet managers see where the vehicle is and what its status is in real time.
<h2 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">The lorry my Tracking</span></h2>
The Lorry tracking is a technology-driven logistics platform in the South East Asia region. We connect individuals and corporations with professional and home motors and drivers. They provide a wide range of logistics services such as home moving, furniture disposal, lorry rental, office moving, tracking line, bulk distribution, and heavy goods delivery.
<iframe src="https://bookings.thelorry.com/my/web/tracking?_ga=2.164638527.1808838966.1677841418-1651803156.1677841418" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="500px" width="100%" allowfullscreen></iframe>
 
<h3 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">The Lorry Tracking Number</span></h3>
By tracking the location and status of lorries in real-time, businesses can optimise delivery routes, reduce fuel costs, and speed up delivery times. Lorry tracking can help businesses make sure their drivers are safe on the road by doing things like driving the speed limit and stopping at the right times. If there is an accident, the tracking system can give important information that can be used to figure out what went wrong. Businesses can make customers happier and more loyal by keeping them up to date on the status of their deliveries in real-time. You can also Track <b><a href="https://packstrack.com/vrltracking" target="_blank"  class="text-primary">VRL Tracking.</a></b>

Lorry tracking can help businesses keep track of how their vehicles are used and when they need maintenance. This cuts down on maintenance costs and makes the fleet last longer. Overall, The lorry my tracking is a useful tool for businesses that run a fleet of lorries or trucks. By giving real-time information about where vehicles are and what their status is, businesses can improve customer satisfaction and safety while lowering costs.
<h3>How To Check The Lorry Tracking Online</h3>
When you send or order any item through The Lorry Tracking, The Lorry Tracking gives you a tracking number. This tracking number tells where your package is now and when it will reach you. Most people don't know how to track the tracking Package number online. Here we will also tell you the complete way to track your package and also track your package. To track a package online there are some simple steps that you can follow to track your package.
<ul>
 	<li aria-level="1">First, you need to have a valid tracking number from <b><a href="https://thelorry.com/my/tracking/" target="_blank"  class="text-primary">"The Lorry Tracking"</a></b>.</li>
 	<li aria-level="1">Enter the tracking number into the tracker box.</li>
 	<li aria-level="1">Press the track button.</li>
 	<li aria-level="1">You will receive your package information shortly.</li>
 	<li aria-level="1">In case of any complaint, you can contact customer support.</li>
</ul>
<h4>The Lorry Tracking Customer Support</h4>
<table>
  <thead>
    <tr>
      <th>Courier</th>
      <th>Contact Number</th>
      <th>Email</th>
      <th>Main Office Address</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>The Lorry Tracking</td>
      <td>603-8051 8108</td>
      <td>hello@thelorry.com</td>
      <td>The Lorry Online Sdn. Bhd, Lot 8, Jalan Astaka U8/81, Bukit Jelutong Business And Technology Centre, 40150, Shah Alam, Selangor, Malaysia & Thailand.</td>
    </tr>
  </tbody>
</table>

<div></div>
<div class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">The lorry my tracking</span> is specially designed to meet the demanding SMS needs of small and medium enterprises. This is required to give your business flexibility and efficiency. A number of multinational corporations and of them are listed as fortune companies. The Lorry tracking provides the following services.</div>
<ol>
 	<li aria-level="1">They take actions based on their needs to improve efficiency and optimize costs.</li>
 	<li aria-level="1"> It provides technology-enabled justice solutions.</li>
 	<li aria-level="1">Their main focus is the distribution of fast-moving consumer goods lines or long holders and large e-commerce deliveries.</li>
 	<li aria-level="1"> The lorry has a large and growing fleet of Peshawar drivers numbering up to 10,000 and is ready to cater to all types of logistics needs.</li>
 	<li aria-level="1"> They provide you 24 hours service and perform their services in an excellent manner.</li>
</ol>
 
<h4>The Lorry tracking Check Online</h4>
Our technology-enabled logistics solutions allow our customers to get a stress-free, professional, secure and affordable house movie service. The Lorry tracking Check Online includes car rental, wrapping, disassembly, furniture reassembly, insurance coverage and housekeeping services in Malaysia. Visit the mobile app to avail of our services. Our driver-partner is The Lorry's life. We believe that creating a thriving ecosystem of complimentary services and amenities will empower our driver partners and thereby improve their revenue. We are providing access to financing and insurance products to reduce their operational costs. You can also track <b><a href="https://packstrack.com/bestexpresstracking" target="_blank"  class="text-primary">Best Express Tracking</a></b>


<h4>The Lorry Tracking FAQ</h4>
<ul>
 	<li><b>What does The Lorry tracking number look like?</b></li>
</ul>
<div class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">The lorry tracking number</span> is usually between 8 and 15 characters long. The number of digits can be the service you use or your location. These include numbers and letters.</div>
<ul>
 	<li><b>Where do I find The Lorry tracking number?</b></li>
</ul>
If you've ordered something online, the lorry tracking number may be in the shipping confirmation email or online shop order review. If you have delivered the package yourself to their warehouse, you get a receipt.
<ul>
 	<li><b>The tracking says my package was delivered, but I didn’t receive anything.</b></li>
</ul>
The delivery courier may have left a note in your mailbox or on your door with instructions. If not, they will often deliver it to one of the two closest locations, namely a post office or a locker box. For more information or complaint contact The Lorry Customer Support.    
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