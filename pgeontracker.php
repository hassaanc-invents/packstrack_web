
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
  <meta name="description" content="Pgeon is a delivery and courier service that provides customers in Malaysia with the ability to send and receive packages, documents, and other types of products">
<meta name="keywords" content="Pgeon Tracking, Pgeon Delivery Tracking, Pgeon tracking number, How to track Pgeon Tracking">
<meta name="author" content="Packstrack">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/pgeontracker"
  },
  "headline": "Pgeon Tracking - Tracl Your Parcel",
  "description": "Pgeon is a delivery and courier service that provides customers in Malaysia with the ability to send and receive packages, documents, and other types of products.",
  "image": "https://packstrack.com/uploaded_files/Add%20a%20heading%20(26).png",  
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
  "datePublished": "2023-01-21",
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
        $blogId = "53";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="Pgeon Tracker" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>Pgeon Tracking - Tracl Your Parcel</h1>
 

Pgeon is a delivery and courier service that provides customers in Malaysia with the ability to send and receive packages, documents, and other types of products. It offers its customers the ability to monitor their shipments so that they are always aware of the location of their packages. Customers are able to check on the progress of the arrival of their packages by using the Pgeon monitoring tool, which can be accessed through the mobile app or the company's website. By entering the tracking number that was given by Pgeon, a customer's delivery can be tracked at any time. When a tracking number is input into the tracking tool provided by Pgeon, information regarding the shipment, including the time it was picked up, the expected delivery date, and its current location, is displayed.

If there is a problem with the shipment, such as a delay or a problem with delivery, the Pgeon shipment tracking tool will let you know about it and what has been done to fix it. If there is a problem with the shipment, for example, a delay or a problem with delivery. During the booking process, Pgeon gives customers the option to sign up to receive shipment information via text message (SMS) and email (email). Because pgeon monitoring gives updates in real-time, customers can have peace of mind knowing the current status of their shipments at all times.
<h2 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">Pgeon Delivery Tracking</span></h2>
Pgeon tracking is the best way in the world to find out when an order will arrive. This is the first time the country has checked on the largest parcel delivery in Malaysia. It has more than 3,000 places where you can get help from customer service. The services of this company are available all over Malaysia. TrackCourier gives you full access to the online tracking system by Pigeon Courier India, you can track your package location instead of visiting the courier location or calling the customer service center. You put the tracking number for the courier in the box and click the "Search" button. In a few minutes, Pigeon Courier will tell you everything about your order. You can also track <b><a class="text-primary" href="https://packstrack.com/gdextracking" target="_blank" rel="noopener">GDEX Tracking.</a></b>
<h3>Pgeon tracking number</h3>
A Pgeon tracking number is a one-of-a-kind identifier that is given to a shipment by Pgeon. This number allows the package to be followed as it is transported from one step in the transportation process to the next. When a client books a shipment with Pgeon, they will be provided with a tracking number that they can use to monitor the progress of their shipment at any time. The Pgeon tracking number is comprised of both letters and digits, and it is typically between ten and twelve characters in length. After the shipment has been booked, the tracking number can be located on the <b><a class="text-primary" href="https://www.pgeon.delivery/" target="_blank" rel="noopener">Pgeon website</a></b> or through the mobile app. It is also written on the label that is attached to the package.
<h3 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">Tracking Pgeon</span></h3>
The main office of Pigeon Express Courier Service is in New Delhi. This company provides all things which we need. You can contact the Pgeon tracking customer service and ask questions about your order. pgeon tracking number gives you complete detail about your order without visiting the company. This company has many offices in his country like Chennai, Bangalore, Egmore, Gurgaon, Hyderabad, Indore, Hyderabad, Faridabad, Delhi, Ludhiana, Chandigarh, Rajkot, Lucknow, Rohini, Patna, Vadodara, Udaipur, Noida, Kolkata, Vide Airway, Mayapuri, Mumbai, Jaipur, Bhubaneswar, India, Agra, Church Street, etc. You can also track <b><a class="text-primary" href="https://packstrack.com/glstracking" target="_blank" rel="noopener">GLS tracking</a></b>
<h3>How to track Pgeon Tracking</h3>
<ul>
 	<li aria-level="1">First, you put the order number given to you when you place your order.</li>
 	<li aria-level="1">Then you click the track button.</li>
 	<li aria-level="1">Pgeon tracking company gives you all information about your order.</li>
 	<li aria-level="1">You can contact the Pgeon tracking services.</li>
 	<li aria-level="1">They track your order and show you complete detail about your order.</li>
 	<li aria-level="1">If your order goes to wrong way or lost doing transit then you can call Pgeon tracking services.</li>
</ul>
<h4>pgeon tracking Customer Service Contact Number</h4>
<table>
<tbody>
<tr>
<td><strong>Courier</strong></td>
<td><strong>Contact Number</strong></td>
<td><strong>Email</strong></td>
<td><strong>Address</strong></td>
</tr>
<tr>
<td>Pgeon tracking</td>
<td>011 30742600</td>
<td>cs@pigeonexpress.com</td>
<td>1-10-05, Suntech @ Penang Cybercity, Lintang Mayang Pasir 3, 11950 Bayan Baru, Penang, Malaysia.</td>
</tr>
</tbody>
</table>
<h4>Tracking Pgeon General Line</h4>
<b>                                  </b> General Customer Careline: E: customerservice.pmy@pigeon.com Whatsapp: +6012 321 1871 Fax: +603 5878 5740 Monday to Friday: 9:30 am – 4:30 pm (Closed 12 pm – 1 pm for lunch) Saturday and Sunday: Closed Public Holiday: Closed E-Shop Careline E-Shop Customer Careline: E: pigeoncs@trans-cosmos.com.my Whatsapp: https://wa.link/qi8nr6
    
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