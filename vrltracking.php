
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
  <meta name="description" content=" The largest logistics and transportation company in India is VRL Tracking. It offers superior service with excellent vehicles.">
<meta name="keywords" content="VRL Tracking, VRL Tracking Check Olin, VRL Logistics Customer Care Number, VRL Logistic Tracking, VRL Bus Tracking, VRL Group Media, VRL parcel tracking">
<meta name="author" content="Packstrack">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/vrltracking"
  },
  "headline": "VRL Tracking - Track your Package",
  "description": "The largest logistics and transportation company in India is VRL Tracking. It offers superior service with excellent vehicles.",
  "image": "https://packstrack.com/uploaded_files/Add%20a%20heading%20(18)%20(1).webp",  
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
  "datePublished": "2023-01-14",
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
        $blogId = "45";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="VRL Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>VRL Tracking - Track your Package</h1>
<h2></h2>
The largest logistics and transportation company in India is<b> VRL Tracking. </b>It offers superior service with excellent vehicles. VRL Logistic Tracking offers the best passenger transportation in 30 states of India with its fleet of modern vehicles. In the beginning, it only provided transport within its area. VRL Groups is now a channel spread across India with air cargo and state-of-the-art vehicles. VRL Bus Tracking makes people's journeys modern and comfortable.
<h2></h2>
It was established in 1976 by Mr. Vijay Sankeshwar. VRL tacking groups involve the transportation of people, goods, and roads. Its headquarters is at Hubballi. It has a wide network with more than 931 branches and forty vehicles. It is famous for having the highest number of commercial vehicles in the <b>“<b><a class="text-primary" href="https://www.vrlgroup.in/" target="_blank" rel="noopener">"Limca Book of Records."</a></b>
”.</b>
<h2 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">VRL Logistics Tracking</span></h2>
 

VRL Logistics is a frontrunner in the Indian logistics industry, offering comprehensive freight forwarding and other related services nationwide. Customers can check on the whereabouts of their packages at any moment with the help of VRL Logistics' tracking system. Customers can check the status of their cargo with VRL Logistics by visiting the company's website and entering the consignment or reference number associated with their shipment. A shipment's current status, including its location, projected delivery date, and any delivery exceptions, will be shown on the tracking system's screen.
Freight forwarding, storage, and supply chain management are just some of the supplementary offerings from VRL Logistics. The company's extensive network of offices and agents across India allows it to provide high-quality logistics services to clients wherever in the country.

 
<h3 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">VRL Transport Tracking</span></h3>
The VRL Transport department of VRL Logistics is responsible for providing road transportation services throughout India. VRL Transport's tracking system is identical to that of VRL Logistics, allowing clients to monitor the delivery of their packages in real-time. Customers can access shipment tracking information online through VRL Transport by visiting the company's website and entering the consignment or reference number associated with the package. After then, the shipment's location, projected delivery date, and any delivery exceptions will all be shown in the tracking system.

At VRL Transport, all of their trucks and trailers are fitted with GPS devices so that they can be tracked at all times. By using these monitoring technologies, the company is able to keep tabs on the whereabouts of its cars and cargo in real-time, providing clients with the most precise and up-to-date information possible. You can also track <b><a class="text-primary" href="https://packstrack.com/gmscouriertracking" target="_blank" rel="noopener">GMS Courier Tracking.</a></b>
<h3>VRL Tracking Check Oline</h3>
You can check your tracking online. We can tell you how you can track your VRl tracking check online. Please Follow these steps.
<h2></h2>
<ul>
 	<li aria-level="1">You must have a valid tracking number.</li>
 	<li aria-level="1">Put the tracking number tracking area.</li>
 	<li aria-level="1">Press the track button.</li>
 	<li aria-level="1">You will know about your package.</li>
</ul>
<iframe src="https://www.vrlgroup.in/track_consignment.aspx" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="500px" width="100%" allowfullscreen></iframe>
<h2></h2>
<h3>VRL Logistics Customer Care Number</h3>
You can also message or call the VRL logistics number for any complaint. Here we can give you <b>VRL logistic customer care number</b> and Gmail.
<table>
<tbody>
<tr>
<th>Courier</th>
<th>Contact Number</th>
<th>Email</th>
<th>Main Office Address</th>
</tr>
<tr>
<td>VRL Tracking</td>
<td>1800 599 7800</td>
<td>customercare@vrllogistics.com</td>
<td>RS NO.353/1, VARUR, POST CHEBBI, TALUK HUBBALLI, DIST. DHARWAD KARNATAKA INDIA - 581207</td>
</tr>
</tbody>
</table>
<h3>VRL Logistic Tracking</h3>
<ul>
 	<li><em><strong>Logistics</strong></em></li>
</ul>
The company provides courier services in addition to people transport. All over India parcels are delivered by LTL trucks Live track and parcel tracking is accomplished through this service. Courier delivery is limited to Karnataka state at the time of writing You can find the list on official sites and Cash on delivery refunds and parcel returns are also supported.
<h2></h2>
<ul>
 	<li><em><strong>VRL Travels</strong></em></li>
</ul>
The company's travel system operates under the name  ‘Vijayanand Travels’. It is the largest transport company in Karnataka. It consists of hundreds of buses and luxury coaches that transport to many cities in India. You can visit the original website for ticket booking and transport tracking.
<h2></h2>
<h3>VRL Bus Tracking</h3>
<h2></h2>
More than 900 buses in India through which BRL provides bus tracking services. Passengers enjoy traveling in VRL bus Tracking as it is very modern and comfortable. Due to the traffic congestion, the bus timetable has been disrupted due to which the arrival and departure time of the bus will be affected. Passengers book their tickets online so that they reach their destination on time. Passengers can also track VRL tracking through the VRL  Bus App.
<h3>How to book a VRL Bus Tracking</h3>
<iframe style="border: 0px #ffffff none;" src="https://www.vtbus.in/#/" name="myiFrame" width="100%" height="700px" frameborder="1" marginwidth="0px" marginheight="0px" scrolling="no" allowfullscreen="allowfullscreen"><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start">﻿</span></iframe>
<h2></h2>
<h3>VRL Group Media</h3>
<h2></h2>
VRL Group Media is a media company of VRL. VRL Group India has been operating since 2000 when its main branch Vijayani Vijayani was established. More than Ten million people read the newspaper every day and it is distributed on nine different sites.  V Sankeshwar (of VRL) started Vijaya Karnataka in 2000–2001. On June 16, 2006, The Times Group bought it from him.  VRL Media Ltd in April 2017, opened Digvijaya News 247, a Kannada TV news station.
<h2></h2>
<h3>VRL parcel tracking</h3>
VRL Parcel Tracking gives your parcel a tracking number through a receipt and wraps it for easy tracking. Your parcel is carefully packed and put into its carrier so that it reaches your home safely. If your package is damaged in transit, VRL offers you a refund or a replacement package. You can also track <b><a class="text-primary" href="https://packstrack.com/vtranstracking" target="_blank" rel="noopener">V Trans Tracking</a></b>
<h3 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-18j1nfb-display">VRL Tracking bus</span></h3>
The VRL Group, a frontrunner in India's transportation and logistics industry, offers a service called VRL Tracking Bus. The program provides real-time bus tracking, so riders can plan their trips and guarantee they'll make it to their destinations on time. Visit the VRL Group website or use the VRL Tracking Bus app on your mobile device to utilize VRL Tracking Bus as a passenger. To see where their bus is right now, they need to use the tracking feature and enter their ticket number or booking ID. The tracking system not only shows the location of the bus but also its projected arrival time and its present state.
<h3 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">VRL Bus Tracking</span></h3>
With GPS technology, <span class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-18j1nfb-display">vrlbus tracking </span>is able to monitor the bus's whereabouts in real time. When a bus is going to leave, is delayed, or has arrived, passengers can receive alerts regarding the status of their ride. The VRL Group, of which VRL Tracking Bus is a part, has a stellar reputation in the transportation industry. Passengers who have any inquiries or concerns can reach out to VRL Group's customer care team, and using the service is a breeze. Anybody taking a bus with VRL Group may rest assured knowing that VRL Tracking Bus will get them where they need to go quickly and accurately.
<h3>VRL Branches List</h3>
<table>
<tbody>
<tr>
<td>Kolkata</td>
<td>913322266186</td>
<td>cltro@vrllogistics.com</td>
<td>Flat No. 101 Parvati Kunj, 413/A-153, Daulatram Mandir Road, Mukund Nagar, Gultekadi, Kolkata, West Bengal, India – 70 0071</td>
</tr>
<tr>
<td>Hubli</td>
<td>918362237511</td>
<td>headoffice@vrllogistics.com</td>
<td>Giriraj Annexe, Circuit House Road, Hubballi, Karnataka, India – 580029</td>
</tr>
<tr>
<td>Bangalore</td>
<td>918026992525</td>
<td>sbcmo@vrllogistics.com</td>
<td>Sri Sai Ram Towers, No.24, 4th Floor, 5th Main Road Chamarajpet, Bengaluru, Karnataka, India – 560018</td>
</tr>
<tr>
<td>Chennai</td>
<td>914428262645</td>
<td>cnivpoffice@vrllogistics.com</td>
<td>Parsn Manere Complex, Plot No: 10, C Wing, 4th Floor, No: 602, Mount Road, Chennai, Tamil Nadu, India – 600006</td>
</tr>
<tr>
<td>Hyderabad</td>
<td>919346538108</td>
<td>hydmo@vrllogistics.com</td>
<td>Plot No. 18, Phase-I, Paigah Colony, Behind Anaand Threatre, S.P.Road, Secunderabad, Hyderabad, Andhra Pradesh, India – 500003</td>
</tr>
<tr>
<td>Mumbai</td>
<td>912227832754</td>
<td>mbimo@vrllogistics.com</td>
<td>Unit No.7 & 8, 1st Floor, Banaking Commercial Complex – II, Near APMC Market, Vashi, Mumbai, Maharashtra,</td>
</tr>
<tr>
<td>Delhi</td>
<td>911123634032</td>
<td>dlimo@vrllogistics.com</td>
<td>No 40, Rani Jhansi Road, Ground Floor, Opposite Mata Mandir Jhendewalan, New Delhi, Delhi, India – 110055</td>
</tr>
<tr>
<td>Goa</td>
<td>917798039130</td>
<td>bicholium@vrllogistics.com</td>
<td>SHOP NO.1, HUSSAIN AGAA MANZIL MUSLIUM WADA GOA PIN-403 504 Goa Goa</td>
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