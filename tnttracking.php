
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
  <meta name="description" content="TNT (formerly Thomas Nationwide Transport) is a worldwide courier and logistics company that specializes in the delivery of goods and freight.">
<meta name="keywords" content="TNT Tracking, Tracking TNT, TNT Express, How to track TNT Tracking Number, TNT Tracking Customer Support, TNT tracking number">
<meta name="author" content="Packstrack">
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
        $blogId = "75";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="TNT Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>TNT Tracking - Track Your Parcel</h1>
TNT (formerly Thomas Nationwide Transport) is a worldwide courier and logistics company that specializes in the delivery of goods and freight. Customers can check the whereabouts of their packages at any moment with their tracking service. On May 26, 2011, the parent company TNT NV, which had acquired the Express activities of TNT Express, completed its Euronext Amsterdam listing, marking the official establishment of the firm. United Parcel Service is the parent company style managing the postal mailing activities, but it was registered with the TNTE code and was a part of it until July 4, 2016. Delivered via UPS on March 19th, 2012. opened talks to acquire T-Anti-Express and made a low offer of US$6.7 billion. I agreed to the American FedEx Corporation's 4.4 billion euro offer in 2015. This transaction closed in the first part of 2016.
<h2>Tracking TNT</h2>
<b><a class="text-primary" href="https://www.tnt.com/express/en_us/site/tracking.html" target="_blank" rel="noopener">TNT Tracking</a></b> is still one of the largest European shipping and logistics providers, with routes covering all of Europe as well as the Americas North, South, and East. Customers who wish to keep their ears open haven't found a good reason to switch to the parcel delivery service's competitors. Separated If you want to send a package tomorrow with TNTexpress, you can do so in just three easy steps on the TNT Tracking website, including selecting the service you like and having it delivered to you overnight without having to leave your house. If the buyer wants to maximize his profit and minimize the time it takes to get his package, he'll need to carefully consider the many shipping alternatives available to him and take the advice of the tracking service's representatives before making his final decision.
<h3>TNT Express</h3>
Users on a tight budget who wish to avoid paying for the cost of a conflict will find that the inexpensive solutions are adequate. They prefer not to go with the less expensive shipping options. Those that are most likely to wish to ship are rewarded with delivery honors, but they still have plenty of time to do so. Problems with customer processing could cause a delay in translation change for TNT Parcel. Over 200 nations can access the services of TNT Express, making it one of the world's most prominent express delivery corporations. TNT is a global logistics company that guarantees the timely and secure delivery of your packages and papers, no matter where they're going. TNT Europe provides shipping services throughout the Asia-Pacific, Americas, Middle East, and Africa via road and air.  You can also track <b><a class="text-primary" href="https://packstrack.com/lineclearexpress" target="_blank" rel="noopener">Line Clear Express</a></b>
<h3>How to track TNT Tracking Number</h3>
If you want to track your package online. Don't worry you are in right place. Here we will tell you how to track TNT Packages without wasting your time. Follow these steps.
<ul>
 	<li aria-level="1">First, you have a valid tracking number For TNT.</li>
 	<li aria-level="1">Enter your tracking number into the search bar.</li>
 	<li aria-level="1">Then press the track button.</li>
 	<li aria-level="1">Wait for a moment while it is processing.</li>
 	<li aria-level="1">In no time you will see the current status of the package.</li>
 	<li aria-level="1">If you face any problem you can contact TNT Customer Support.</li>
</ul>
 
<h3>TNT Tracking Customer Support</h3>
If you want to know their service charges you can contact the TNT Tracking customer support number. Here we will give you their contact number and Email.
<table>
<tbody>
<tr>
<td><b>Courier</b></td>
<td><b>Contact Number</b></td>
<td><b>Email</b></td>
<td><b>Main Office Address</b></td>
</tr>
<tr>
<td>TNT Tracking</td>
<td>1800 208 9999</td>
<td>customersupport@tnt.gmail.com</td>
<td>Papendorpseweg 100 3528 BJ Utrecht The Netherlands</td>
</tr>
</tbody>
</table>
 
<h3>TNT tracking number</h3>
TNT gives each box or shipment a unique number known as a TNT tracking number. Throughout the shipping and delivery process, it can be utilized to monitor where the package is and its current status. The consumer can locate the tracking number, which is a string of letters and numbers, on the package's mailing label or in the delivery confirmation email.   Customers can access details about their shipment, such as its current position, projected delivery date, and history of delivery status updates, by entering their TNT tracking number on the TNT website or through the TNT mobile app. The upgrades will cover the following:
<ul>
 	<li aria-level="1">Shipment picked up</li>
 	<li aria-level="1">Shipment in transit</li>
 	<li aria-level="1">Shipment out for delivery</li>
 	<li aria-level="1">Shipment delivered</li>
</ul>
In conclusion, TNT tracking numbers are provided to packages and shipments so that clients may monitor their whereabouts and delivery status using the TNT monitoring service. Customers can better prepare for the arrival of their packages thanks to this service, which provides continuous updates on their whereabouts and progress. You may also like <b><a class="text-primary" href="https://www.best-inc.my/track" target="_blank" rel="noopener">Best Express tracking.</a></b>
<h3>TNT Tracking Italia</h3>
TNT Tracking Italia was founded in Italy. It is a courier and logistics company. It is very famous in Italy. If you live in Italy definitely you will choice TNT Italy Tracking. It is very safe tracking. It will deliver your package on time. TNT staff has will educate and experienced. Therefore you would not worry about the package. If you want to send the package to your relatives in other countries Like UK TNT Tracking you must choose this. Because it is very safe and cheap.
<h3>What are the maximum weight and size of a TNT parcel?</h3>
The heaviest and largest packages TNT can handle are restricted by the service and location you've chosen. The typical limit for ordinary parcel services is 70 kg. However, the maximum allowable weight may be different in other nations. If you're shipping internationally, be sure you know the weight restrictions for the country you're sending to. The maximum allowed package size varies with the shipping method and final destination. The standard maximum dimensions for a package are 120 cm by 80 cm by 80 cm (length x width x height).

 

Again, though, make sure you know the country-specific size limit you'll be shipping to. Please note that if your package is too heavy or too large, it will be classified as freight and must be transported through a freight carrier. In conclusion, TNT's service and destination requirements determine the heaviest and largest packages it will accept for shipment. If you want to make sure your package is accepted and delivered without any problems, you should research the precise weight and size requirements for the nation you are sending it to.
<h3>How long should I expect a TNT parcel delivery to take?</h3>
The time it takes for TNT to deliver a package depends on the service and the location you choose. TNT has multiple delivery options, with varying estimated times of arrival, including normal delivery, expedited delivery, and same-day delivery. For instance, the time it takes to get an item to its final location while using regular shipping might be anywhere from two to five days, while express shipping typically only takes one or two days. When you use a service that guarantees same-day delivery, you can be assured that your shipment will arrive on the day it was picked up.

 

 

In addition, the recipient's location is a factor in how long it takes to deliver the package. Packages sent within the same country often arrive sooner than those sent across borders. Additionally, weekends and public holidays may result in longer delivery times than other days of the week. In conclusion, TNT's estimated delivery time for your package will change based on the service and final delivery address. Express shipping typically takes only one or two days, while standard shipping might take up to five days. There's also the possibility of same-day shipping. The delivery time may be extended by weekends and holidays, so please plan accordingly.
<h3>What does a TNT tracking number look like?</h3>
TNT gives each box or shipment a unique number known as a TNT tracking number. Throughout the delivery process, it may be used to monitor where your parcel is and its current status. TNT tracking numbers have both letters and numbers and are always 12 digits in length. The tracking number's format may change based on the service's availability in the recipient's country. However, in a general sense, it may be laid down like follows: A string of characters that includes both letters and numbers (e.g., "1234567890AB"), or that begins with a letter, continues with nine digits, and then finishes with two letters (e.g., "T123456789AB"), or that begins with two letters and nine digits (e.g., "CN123456789"). Keep in mind that the sender's reference number—which serves as a unique identifier for the shipment—may not always be the same as the tracking number.
<h3>What is the best way to track a TNT parcel?</h3>
Using TNT's own tracking service is the most reliable method for keeping tabs on your package. By using this service, you can monitor its whereabouts and progress in real time.   Instructions for following the progress of your TNT shipment:
<ul>
 	<li aria-level="1">If you want to know where your package is, you can use the "Track & Trace" feature on TNT's website.\</li>
 	<li aria-level="1">To monitor a package, just enter the tracking number or reference number and hit the "Track" button.</li>
 	<li aria-level="1">In addition to seeing when your package is scheduled to arrive and where it is right now, you'll also get access to a complete delivery history.</li>
 	<li aria-level="1">You can get updates and sign up for delivery alerts through email or text messages.</li>
 	<li aria-level="1">If you're having difficulties locating your tracking number, check your shipping confirmation email or your order history in the Lazada app.</li>
</ul>
You can also use the TNT mobile app, which is compatible with both Apple and Google smartphones, to monitor the status of your shipment. In addition to letting you know where your packages are, you can use the app to plan and organize your deliveries whenever you're out and about.   In conclusion, the TNT tracking service on the TNT website or mobile app is the best approach to tracking a TNT parcel. You can sign up for delivery notifications to receive updates through email or text message, and the service will let you know exactly where your package is and what its current status is in real time.    
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