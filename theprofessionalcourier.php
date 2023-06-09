
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
  <meta name="description" content="The Professional Courier Tracking is stocked to the gills with over 2400 offices, 5,000 collecting centers, and over 25,000 possible delivery addresses.">
<meta name="keywords" content="The Professional Courier, Professional Courier Tracking, The Professional Courier Tracking, Professional Courier Tracking India, Professional Courier Tracking Branches">
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
        $blogId = "90";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="The Professional Courier" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">Professional Courier Tracking - Track Your Package</span></h1>
<div>The Professional Courier Tracking is stocked to the gills with over 2400 offices, 5,000 collecting centers, and over 25,000 possible delivery addresses. Since it has been in business for 27 years, delivering domestic services to customers, it must maintain precise and high-quality service tracking around the clock. Rangers now Because of their huge staff, complete infrastructure support, and worldwide network of offices, they have earned a reputation as a reliable courier service and are now the go-to distribution partner for plants on a national and international scale. Just what is it, exactly With our cutting-edge hub and spoke system, which includes storage and warehousing, Professional Courier Services is able to offer complete logistical solutions while maintaining our high standards. This capability ensures prompt delivery by providing us with cutting-edge connectivity and a vast fleet of vehicles. Is</div>
<div>
<iframe style="border: 0px #ffffff none;" src="https://www.tpcindia.com/Default.aspx" name="myiFrame" width="100%" height="500px" frameborder="1" marginwidth="0px" marginheight="0px" scrolling="no" allowfullscreen="allowfullscreen"><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start">﻿</span></iframe>
<h2 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">The Professional Courier Tracking</span></h2>
</div>
TPCIndia gives its customers a number of delivery options so it can meet their needs. The Express Service is for sending important documents quickly. In major cities, documents can be sent the next day, and documents can be sent faster in other areas. TPCIndia gives customers a tool to track their packages, which they can use for both domestic and international deliveries.

TPCIndia offers two types of shipping for bigger packages: Air Cargo and Surface Cargo. These can be sent by plane or by truck or train, respectively. On the TPCIndia website, you can find a pin code locator and information about rates and charges. TPCIndia offers logistics solutions like warehousing, mass mail services, pick and pack, and global express in addition to delivery services. All customers, no matter how big or small can use these services.
<h3 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">The Professional Courier Tracking Status</span></h3
Customers can check on the delivery progress of their packages with the Professional Courier (TPC) tracking status. Customers can see not only where their product is at the moment, but also its history and when it is expected to arrive, all thanks to TPC monitoring. Customers can utilize the tracking facility on TPCIndia's website to monitor the delivery status of their packages with the use of their tracking numbers.

Professional courier tracking status also has a mobile app for iOS and Android smartphones, so customers can track their packages from their phones. The app does more than just track packages; it also lets users arrange pickups, check rates and fees, and locate the nearest TPCIndia location. Both domestic and international delivery services are supported by the tracking function. Customers can also contact TPCIndia by phone at the number listed on the website or via email at the address given to them in order to inquire about the delivery of their packages. 
<h3 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">Professional Courier Tracking Number</span></h3>
When you ship something with Professional Courier Tracking, They give you a tracking number. The tracking number is a unique code for your package. Only with the tracking number, you can find your parcel. This tracking will be on your invoice and it will be given to you in your email. This tracking number contains all the details about your package. Professional Courier Tracking Number will tell you where is your package now and when will come to you. This will also tell you whether it is coming to you or not. You can track your package online.
<h4>How to track Professional Courier <span class="">Tracking status</span></h4>
You can track Professional Courier Tracking Online with your tracking number without wasting your time. Here we guide you on how to track packages online. Please follow these steps.
<ul>
 	<li>First, you Have a <b><a href="https://www.tpcindia.com/Default.aspx" target="_blank"  class="text-primary">Tracking number.</a></b></li>
 	<li>Enter your tracking number into the search bar. Then press the track button.</li>
 	<li>Wait for a moment while it is processing.</li>
 	<li>In no time you will see the current status of your package.</li>
 	<li>If you face any problem you can contact Professional Courier Tracking Customer Support.</li>
</ul>
<h3>Professional Courier Tracking Customer Support</h3>
If you want to know their service charges and if you want to ask a question them. you can contact them. here we will give their contact number and email.
<table dir="ltr" border="1" cellspacing="0" cellpadding="0"><colgroup><col width="106" /><col width="147" /><col width="212" /><col width="346" /></colgroup>
<tbody>
<tr>
<td data-sheets-value="{"1":2,"2":"Courier"}">Courier</td>
<td data-sheets-value="{"1":2,"2":"Contact Number"}">Contact Number</td>
<td data-sheets-value="{"1":2,"2":"Email"}">Email</td>
<td data-sheets-value="{"1":2,"2":"Main Office Address"}">Main Office Address</td>
</tr>
<tr>
<td data-sheets-value="{"1":2,"2":"Professional Courier Tracking"}">Professional Courier Tracking</td>
<td data-sheets-value="{"1":2,"2":"91-22-278 13309"}">91-22-278 13309</td>
<td data-sheets-value="{"1":2,"2":"ho@tpcglobe.com"}">ho@tpcglobe.com</td>
<td data-sheets-value="{"1":2,"2":" 1203/A, Bhumiraj Costarica, Plot #1 and #2, Sector 18, Sanpada, Mumbai – 400 705"}">
<div>
<div>1203/A, Bhumiraj Costarica, Plot #1 and #2, Sector 18, Sanpada, Mumbai – 400 705</div>
</div></td>
</tr>
</tbody>
</table>
 
<h3 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">Professional Courier Tracking India</span></h3>
In India, The Professional Courier (TPC) is a go-to for customers in need of courier or logistics services, complete with a tracking system. Customers can check on the whereabouts and expected arrival time of their package with TPC tracking. Customers can utilize the tracking facility on TPCIndia's website to monitor the delivery status of their packages with the use of their tracking numbers.

TPCIndia also has a mobile app for iOS and Android smartphones, so customers can track their packages from their phones. Pickups can be scheduled, prices and fees viewed, and local TPCIndia locations located with the use of this handy app.TPCIndia provides a tracking service for both domestic and international couriers. If you have any trouble tracking your cargo through TPCIndia, you can contact them by phone or email. TPCIndia's tracking service is quick, simple, and accurate, so clients never have to worry about their packages.
<h4 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">Professional Courier Consignment Tracking Delivery Status</span></h4>
The courier services provided by Professional Couriers include shipment monitoring. Through the company's website, customers can view the current location of their shipments by inputting their respective consignment numbers or reference numbers. Here you may find out when you can expect to receive your shipment, where it is right now, and whether there have been any changes to its status. In addition, customers can opt to get shipment progress updates through text messages or electronic mail. They can also get in touch with the company's customer support department for guidance in tracking their shipment.

<h3 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">Professional Courier Tracking After Shipment</span></h3>
Whenever a customer has a package in transit with Professional Couriers, they are able to monitor its whereabouts by going to the company's website and inputting the consignment number or reference number associated with the shipment. Here you may find out when you can expect to receive your shipment, where it is right now, and whether there have been any changes to its status. Customers can opt to receive parcel tracking updates by text message or email. Professional Couriers offers a mobile app for both iOS and Android devices so customers can keep tabs on their packages on the go. The program gives users real-time updates on the whereabouts of their packages and allows them to track several shipments at once.

Customers with questions regarding their packages' whereabouts should get in touch with the company's customer support. The service rep can provide you with specifics on where your shipment is and when it will arrive, as well as help you with any problems that may arise. Note that there may be a lag in the updating of your package's status if you're using consignment tracking, as this information is not always updated in real time.
<h3>Professional Courier Tracking Branches</h3>
<table class="table table-striped table-hover" border="1">
<thead>
<tr>
<th>City</th>
<th class="col-xs-3">Contact Numbers</th>
<th>Emails</th>
<th>Address</th>
</tr>
</thead>
<tbody>
<tr>
<td>Ahmedabad</td>
<td>
<div>+91 9099969801</div></td>
<td>
<div>amdro@tpcglobe.co.in</div></td>
<td>16/17, Advance Business Park, Opposite Sawinarayan Temple, Shahibaugh, Ahmedabad, Karnataka, India – 380004</td>
</tr>
<tr>
<td>Bangalore</td>
<td>
<div></div>
<div>+91 80 22110649</div></td>
<td>
<div>blrro-crm@tpcglobe.co.in</div></td>
<td># 195 (Old No. 49), Professional House, Margosa Road, Between 16th & 17th Cross, Malleswaram, Bangalore, Karnataka, India – 560055</td>
</tr>
<tr>
<td>Bhubaneshwar</td>
<td>
<div>+91 7504994446</div></td>
<td>
<div>bbiro@tpcglobe.co.in</div></td>
<td>7-A, Station Square, Kharvel Nagar, Bhubaneshwar, Bhubaneshwar, Odisha, India – 751001</td>
</tr>
<tr>
<td>Bhopal</td>
<td>
<div>+91 8889994635</div></td>
<td>
<div>bhoro@tpcglobe.co.in</div></td>
<td>Plot No.39D, Mangalam Tower, Behind Hotel GK Palace, M.P.Nagar, Zone – II, Bhopal, Madhya Pradesh, India – 462011</td>
</tr>
<tr>
<td>Chandigarh</td>
<td>
<div>+91 9815716628</div></td>
<td>
<div>crm@tpcglobe.co.in</div></td>
<td>Sco No.57, Sector 47-d, Chandigarh, Chandigarh, India – 160047</td>
</tr>
<tr>
<td>Chennai</td>
<td>
<div>+91 44 66202100</div></td>
<td>
<div>crm@tpcglobe.co.in</div></td>
<td>#17, Cathedral Garden Road, Nungambakkam, Chennai, Tamil Nadu, India – 600034</td>
</tr>
<tr>
<td>Guwahati</td>
<td>
<div>+91 8254840077</div></td>
<td>
<div>gauro@tpcglobe.co.in</div></td>
<td>Lehajan Lane, Opposite Preronaa’s volvo point, Opposite Hotel East India, Ulubari, Guwahati, Assam, India – 781007</td>
</tr>
<tr>
<td>Ghaziabad</td>
<td>
<div>+91 8745017398</div></td>
<td>
<div>gzb@tpcglobe.co.in</div></td>
<td>251, Mukund Nagar, Building No-113 Shop No.3, Hapur Road, Near by Sathe Mukund Lal College, Ghaziabad, Uttar Pradesh, India – 201001</td>
</tr>
<tr>
<td>Gurgaon</td>
<td>
<div>+91 124 6465205</div></td>
<td>
<div>ggnro@tpcglobe.co.in</div></td>
<td>Mata Road, Near Utsav Garden, Gurgaon, Haryana, India – 122001</td>
</tr>
<tr>
<td>Hyderabad</td>
<td>
<div>+91 40 27813353</div></td>
<td>
<div>hydro@tpcglobe.co.in</div></td>
<td>501, 5th Foor Jade Arcade, Opposite Hotel Paradise M.G.Road, Secunderabad, Hyderabad, Andhra Pradesh, India – 500003</td>
</tr>
<tr>
<td>Indore</td>
<td>
<div>+91 8889995764</div></td>
<td>
<div>idrro@tpcglobe.co.in</div></td>
<td>LG Floor, Aditya Enclave, C-1, HIG Square, Near LIG Square, Opposite Andhra Bank, Indore, Maharashtra, India – 452001</td>
</tr>
<tr>
<td>Jaipur</td>
<td>
<div>+91 141 4917894</div></td>
<td>
<div>jprro-crm@tpcglobe.co.in</div></td>
<td>G-1, Roshan Tower, Gopinath Marg, Purohit Ji Ka Bagh, Jaipur, Rajasthan, India – 302001</td>
</tr>
<tr>
<td>Kochi</td>
<td>
<div>+91 9020632525</div></td>
<td>
<div>coks@tpcglobe.co.in</div></td>
<td>33/1695D, Vivekananda Road, Vennala, Kochi, Tamil Nadu, India – 682028</td>
</tr>
<tr>
<td>Kolkata</td>
<td>
<div>+91 33 22840059</div></td>
<td>
<div>ccuzo@tpcglobe.co.in</div></td>
<td>5th Floor, RTC House, No:4, Dr.Suresh Sarkar Road, Kolkata, West Bengal, India – 700014</td>
</tr>
<tr>
<td>Lucknow</td>
<td>
<div>+91 9307023993</div></td>
<td>
<div>lkoro@tpcglobe.co.in</div></td>
<td>#33, Cantonment Road, M.No. 118/89/2/5 Behind, Bank of Baroda, Near Odeon Cinema, Lucknow, Uttar Pradesh, India – 226001</td>
</tr>
<tr>
<td>Mumbai</td>
<td>
<div>+91 22 26348402</div></td>
<td>
<div>vplro@tpcglobe.co.in</div></td>
<td>Western region, Ground floor, Diamond Apartments, New link road, Oshiwara, Jogeshwari (W), Mumbai, Maharashtra, India – 400102</td>
</tr>
<tr>
<td>Mumbai</td>
<td>
<div>+91 22 27566243</div></td>
<td>
<div>kurro@tpcglobe.co.in</div></td>
<td>301, Monarch Plaza Plot No.56, IIIrd Floor Sector – 11, CBD Belapur, Mumbai, Maharashtra, India – 400614</td>
</tr>
<tr>
<td>Navi Mumbai</td>
<td>
<div>+91 22 27813309</div></td>
<td>
<div>ho@tpcglobe.co.in</div></td>
<td>No.1203/A, Bhumiraj Costarica, Plot No. 1 & 2, Sector 18, Sanpada, Navi Mumbai, Maharashtra, India – 400705</td>
</tr>
<tr>
<td>New Delhi</td>
<td>
<div>+91 11 45723344</div>
<div></div></td>
<td>
<div>delzo-csc.o@tpcglobe.co.in</div></td>
<td>C-143, Naraina Industrial Area, Phase – I, New Delhi, Delhi, India – 110028</td>
</tr>
<tr>
<td>Patna</td>
<td>
<div>+91 7061386653</div></td>
<td>
<div>crm@tpcglobe.co.in</div></td>
<td>Krishna Building, Shahi Lane, S.P.Verma Road, Patna, Bihar, India – 800001</td>
</tr>
<tr>
<td>Raipur</td>
<td>
<div></div>
<div>+91 7509333396</div></td>
<td>
<div>rprro@tpcglobe.co.in</div></td>
<td>Opposite City Blood Bank, Vivekananda Ashram, 1st Floor, Amapara G.E.Road, Raipur, Chhattisgarh, India – 492001</td>
</tr>
<tr>
<td>Ranchi</td>
<td>
<div>+91 9204481685</div></td>
<td>
<div>ixrro@tpcglobe.co.in</div></td>
<td>Sen Villa, 445 PP Compound, Opposite Roy Color Lab, Ranchi, Jharkhand, India – 492001</td>
</tr>
</tbody>
</table>
<h4>FAQs</h4>
<ul>
 	<li class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><strong><span class="">Professional Courier Tracking number digits</span></strong></li>
</ul>
Each product that is shipped by Professional Couriers is given a special tracking number. Ordinarily, a tracking number will have 13 digits: two letters denoting the service type (for example, "PC" for parcel consignment) and 11 numbers reflecting the package's unique identification number.

Common Professional Couriers tracking numbers may look like this: "PC12345678901," where "PC" denotes Professional Couriers as the service provider and the remaining numbers are the package's unique identifier.

 
<ul>
 	<li class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><strong><span class="">Professional Courier Tracking number example</span></strong></li>
</ul>
.

An example of a Professional Couriers tracking number is: "PC12345678901"

 

     
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