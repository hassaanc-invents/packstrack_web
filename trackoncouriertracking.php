
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
  <meta name="description" content="Trackon Tracking began in 2002 in Delhi and Mumbai. Since then, it has grown to be the best in the world">
<meta name="keywords" content="Trackon Tracking, Trackon Courier Tracking, Trackon Courier Tracking Delhivery, Trackon Tracking Number, How To Track Trackon Courier Tracking Number">
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
        $blogId = "99";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="Trackon Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>Trackon Tracking - Track Your Package</h1>
Trackon Tracking began in 2002 in Delhi and Mumbai. Since then, it has grown to be the best in the world, with more than 240 million businesses using it. Inefficient It handles more than two million packages a day and delivers to more than 5000 pin codes. It started out as a small logistics business. They have enough experience in India to tell you about their services there. Trackon is a very Fast and safe logistics company. They delivered your Parcel safely. They package your parcel into cotton for your package safety. They had a trained staff. They had many branches and offices all over India. We will give you information about branches in this article. If your package was delivered late they will return your delivery charges. If your package is lost during transit we will give you a complete refund.

 

 
<h2>Trackon Courier Tracking</h2>
Trackon Courier Tracking is a courier service that lets customers track their packages online and in real-time. The goal of this service is to give customers peace of mind by always letting them know where their packages are. Trackon Courier is a well-known name in the courier business. It has a large network of offices and delivery partners all over India. The company offers a variety of courier and delivery services, such as domestic and international courier services, express parcel delivery, and logistics solutions. Trackon Courier Tracking Status works by giving each package its own tracking number.

 

With this number, customers can check the Trackon Courier website to see where their package is and how far along it is in the shipping process. The information about tracking is updated in real-time, so customers can always be sure they have the most recent information. One of the best things about Trackon Courier Tracking is that it gives customers full visibility over the whole process of delivery. Customers can see exactly when their package was picked up, when it arrived at the local hub when it was sent out for delivery, and when it was finally delivered.
<h3>Trackon Courier Tracking Delhivery</h3>
Trackon Courier offers its customers more than just tracking. It also has a number of services that add value. There are real-time delivery updates, SMS updates, and email notifications as part of these services. Customers can also decide to have their packages sent to a different address or put on hold for later pickup. Follow the trackon courier tracking India is easy to use because it has a simple interface that is easy to understand. Customers can get tracking information from any device with an internet connection, like laptops, smartphones, and tablets. In conclusion, Trackon Courier Tracking is a reliable, efficient, and easy-to-use service that gives customers full visibility over their shipments. Trackon Courier Tracking makes sure that your packages are delivered on time and in good condition, no matter how big or small they are. You can also track <a class="text-primary" href="https://packstrack.com/spotontracking" target="_blank" rel="noopener">Spoton Tracking</a>
<h2>Trackon Tracking Number</h2>
Each package is given a code made up of digits and numbers that can be used to track it. This tracking number will be sent to you when your package is ready to go. You are given a tracking number that tells you everything about your package. You'll get this number in an email. If you are sending something on a business scale, your invoice will have a Trackon tracking number. If you have ordered something from an online store, this tracking number will be in the order details. With this tracking number, you can check on your package online. Here, we'll show you how to do that.
<h3>How To Track Trackon Courier Tracking Number</h3>
If you want to track your trackon tracking number online, you are in right place. Here we will tell you how to track trackon courier tracking number online. We will tell you some easy steps by following you will track your package without wasting your time.
<ul>
 	<li aria-level="1">First, you have a valid tracking number from <b><a class="text-primary" href="https://trackon.in/Tracking/t2/MultipleTracking" target="_blank" rel="noopener">trackon tracking courier.</a></b></li>
 	<li aria-level="1">Enter your tracking number into our real-time tracker.</li>
 	<li aria-level="1">Then press the Track button.</li>
 	<li aria-level="1">Wait for a moment while it is processing.</li>
 	<li aria-level="1">In no time you will know the current status of your package.</li>
 	<li aria-level="1">If you face any problem you can contact trackon courier tracking customer care.</li>
</ul>
<h3>Trackon Courier Tracking Customer Care</h3>
If you have any questions, want to their service charges, and want to use their services you can contact them. Here we will give you their contact and email.
<table>
<tbody>
<tr>
<td><b>Courier</b></td>
<td><b>Contact Number</b></td>
<td><b>Email</b></td>
<td><b>Main Office Address</b></td>
</tr>
<tr>
<td>Trackon Coruier Tracking</td>
<td>011-4559 3500</td>
<td>customercare@trackon.in</td>
<td>A-64 NARAINA IND.AREA, PHASE-1 NARAINA NEW DELHI, DELHI, 110028,</td>
</tr>
</tbody>
</table>
<h3>Trackon Tracking Location and Branches in India</h3>
 
<table>
<tbody>
<tr>
<td><b>Branch</b></td>
<td><b>Address</b></td>
<td><b>Contact Number(s)</b></td>
</tr>
<tr>
<td>AHMEDABAD</td>
<td>G-1.2,3 ASHIRWAD COMPLEX NEAR ADITAYA BUILDING, OPP SARDAR PATEL SEVA SAMAJ HALL, AHMEDABAD, 380006</td>
<td>7940242100</td>
</tr>
<tr>
<td>BANGALORE</td>
<td>NO 212/34/9, KOGILU MAIN ROAD, NEXT TO, THE CANOPY CREST APARTMENT. YELAHANKA, BANGALORE, 560064</td>
<td>8028567030, 8028567040</td>
</tr>
<tr>
<td>BHOPAL</td>
<td>PLOT NO 156, MP NAGAR ZONE 1, NEAR FORTUNE BUILDER, BHOPAL, 462011</td>
<td>7554011777, 7554949909</td>
</tr>
<tr>
<td>BHUBANESWAR</td>
<td>PLOT NO-73, GROUND FLOOR, BHASKAR TOWER, KHARVELA NAGAR BBSR, OPP DURGA MANDAV, BHUBANESWAR, 751001</td>
<td>18008913773, 9692201014</td>
</tr>
<tr>
<td>CHANDIGARH</td>
<td>PLOT NO.25, PHASE 1, INDUSTRIAL AREA, CHANDIGARH, CHANDIGARH, 160002</td>
<td>1722657627, 9914213359</td>
</tr>
<tr>
<td>CHENNAI</td>
<td>C14 TIRUVIKA INDL ESTATE GUINDY, GUINDY, CHENNAI, 600032</td>
<td>4446617710, 4446617712</td>
</tr>
<tr>
<td>COCHIN</td>
<td>71/993A, A1, A2 THANIKKAL-KEERTHI NAGAR, KEERTHI NAGAR, ELAMAKKARA, COCHIN, COCHIN, 682026</td>
<td>7025280000</td>
</tr>
<tr>
<td>DEHRADUN</td>
<td>36 ARAGHAR RACECOURSE, OPP GAREEBDASS KOUTHI NEAR BHURA CHICKEN DEHRADUN, DEHRADUN, 248001</td>
<td>1354067658, 8448085064</td>
</tr>
<tr>
<td>DELHI</td>
<td>A-64 NARAINA IND.AREA, PHASE-1 NARAINA NEW DELHI, DELHI, 110028</td>
<td>1145593500, 8448011011</td>
</tr>
<tr>
<td>GHAZIABAD</td>
<td>B-3, LOHIA NAGAR MARKET, GHAZIABAD, GHAZIABAD, 201001</td>
<td>1202700031, 8448085067</td>
</tr>
<tr>
<td>GUWAHATI</td>
<td>HOUSE NO.19, JANA PATH LANE,G.S ROAD, ULUBARI,NEAR HOTEL PRIYA PLACE, GUWAHATI, 781007</td>
<td>7099276312</td>
</tr>
<tr>
<td>HYDERABAD</td>
<td>DOOR NO-06/629/5 SURVEY NO-216 VIMANPURI COLONY, JEEDIMETLA VILLAGE QUTBULLAPUR CIRCLE HYDERABAD, HYDERABAD, 500039</td>
<td>4069315555, 6309333503</td>
</tr>
<tr>
<td>JAIPUR(RAJ)</td>
<td>D-96, TULSI MARG, MADHO SINGH CIRCLE, BANI PARK, JAIPUR, JAIPUR(RAJ), 302006</td>
<td>1414622300</td>
</tr>
<tr>
<td>JAMMU</td>
<td>SHOP NO-109 SEC-4 SHIVAJI</td>
<td></td>
</tr>
</tbody>
</table>
<h3>FAQs</h3>
<ul>
 	<li aria-level="1"><b>How should I track my consignment?</b></li>
</ul>
To track a consignment, you can take the following steps:
<ol>
 	<li aria-level="1">Check for a tracking number: Most consignment arrangements provide a tracking number for the items. This number can be used to track the consignment online.</li>
 	<li aria-level="1">Visit the carrier's website: If you have a tracking number, you can visit the carrier's website, such as Trackon FedEx, UPS, or the US Postal Service, and enter the tracking number to see the status of your consignment.</li>
</ol>
<ul>
 	<li aria-level="1"><b>How to book a consignment?</b></li>
</ul>
To book a consignment, follow these steps:
<ol>
 	<li aria-level="1">Identify a consignment store or seller: Look for a consignment store that specializes in the type of items you want to consign. You can also search for consignment sellers online.</li>
 	<li aria-level="1">Contact the store or seller: Call or email the store or seller to schedule an appointment to bring in your items. Some stores may have specific hours for consignment drop-off or may require an appointment.</li>
 	<li aria-level="1">Prepare your items: Clean and organize your items before bringing them in. Make sure they are in good condition, free from damages and stains.</li>
 	<li aria-level="1">Gather your item information: Have information about your items ready, including the brand, model, size, color, and any other relevant details.</li>
 	<li aria-level="1">Drop off your items: Bring your items to the consignment store or seller at your scheduled appointment time. Be sure to bring any relevant paperwork or documents, such as receipts or warranties.</li>
 	<li aria-level="1">Sign a consignment agreement: Read and sign a consignment agreement that outlines the terms of the consignment, such as the length of time the items will be on consignment, the consignment fee, and the payment process.</li>
 	<li aria-level="1">Track your consignment: Most consignment stores or sellers will provide a way for you to track the status of your consignment. This can be through an online portal or by contacting the store or seller directly.</li>
 	<li aria-level="1">Receive payment: When your items are sold, you will receive payment for your consigned items, minus any consignment fees agreed upon in the consignment agreement.</li>
</ol>
<ul>
 	<li aria-level="1"><b>How long does trackon awb tracking take to deliver?</b></li>
</ul>
The delivery time for an order shipped through Trackon AWB Tracking will vary depending on the shipping destination and the shipping method selected. The delivery time can range from a few days to a couple of weeks. To get an accurate delivery estimate, it is recommended to check the shipping information provided by Trackon, including the estimated delivery date and the tracking information. Additionally, you can also contact the Trackon customer support team for more information on the delivery time of your order.
<ul>
 	<li aria-level="1"><b>Where can I find the Pincode Locator?</b></li>
</ul>
You can find a pin code locator on the website of the Indian postal department, also known as India Post. You can also find pin code locators on various other websites such as Google Maps, Just Dial, etc. These tools allow you to search for a specific pincode based on your location or the location you are searching for.    
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