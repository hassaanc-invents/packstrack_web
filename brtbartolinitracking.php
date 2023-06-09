
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
  <meta name="description" content="BRT Tracking is an Italian company that deals with shipping and logistics. Since 2019, Le Groupe La Poste has owned half of it.">
<meta name="keywords" content="Brt Tracking, Brt Tracking Number, How do I track my BRT Bartolini package?, BRT tracking Customer Support, Tracking BRT">
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
        $blogId = "80";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="BRT Bartolini Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>Brt Tracking- Track Your Package</h1>
 

BRT Tracking is an Italian company that deals with shipping and logistics. Since 2019, Le Groupe La Poste has owned half of it. It is an airline that has connections all over the world. In the year 128, BRT Baqalani was started in Balo Sin. At first, it was called Bal Toon. It provides reliable on-sale services. It offers a door-to-door delivery service with full tracking to Italy and the rest of the world, from delivery to delivery to the collection for couriers and heavy passengers, i.e. a courier network in more than 220 countries. Coverage by country With ISO 9001, ISO 14001, and OHSAS extension, the company offers global distribution services that meet ISO 9001, ISO 14001, and OHSAS.

In this way, the delivery person can let the recipient know that he or she tried to deliver the package by email or SMS. Safe ways to pack glass bottles for transport. DELIVERY TO ABOVE DELIVERY Neighbor Delivery is also an option for delivering larger items. If the delivery fails, you can ask for insurance and have the package stored. Alert the sender via email or SMS that it's done, and he can change the delivery date or address. Pica Point to Loney offers delivery services for large quantities of beans, such as leaving and loading on rooftops. The distribution network is supported by Brt courier tracking's logistics services, which are done through an automated information system.
<h3>Brt Tracking Number</h3>
BRT, which stands for "<b><a class="text-primary" href="https://services.brt.it/en/tracking" target="_blank" rel="noopener">Bartolini Corriere Espresso</a></b>" is an Italian company that ships and delivers packages and freight. Customers can check on the status of their shipments and deliveries in real time using their tracking service. A BRT tracking number is a unique number that BRT gives to a package or shipment so that it can be tracked. It can be used to find out where the package or shipment is and what its status is during the whole process of delivery.

The tracking number is usually a mix of letters and numbers, and it can be found on the package's shipping label or in the email sent to the customer to confirm shipping.  Customers can enter their BRT tracking number on the BRT website or in their mobile app to see information about their shipment, such as where it is now when it is expected to arrive, and a history of updates about the delivery status. These will be part of the updates:
<ul>
 	<li aria-level="1">Shipment was taken in.</li>
 	<li aria-level="1">Shipment in route Shipment on its way</li>
 	<li aria-level="1">Shipment delivered</li>
 	<li aria-level="1">BRT also offers many different services, such as delivery the next day, delivery the same day, and delivery all over Europe.</li>
</ul>
BRT code tracking is a unique number that BRT gives to a package or shipment to track and monitor its movement and delivery status. Customers can use this number to track their package or shipment using the BRT tracking service. With this service, customers will know where their packages are and what's going on with them in real time, so they can make plans accordingly.
<h3>How do I track my BRT Bartolini package?</h3>
If you want to track your package, you are in right place. Here we will tell you how you can track your package online. Please follow these steps to track your parcel without wasting your time.
<ul>
 	<li>First, you have a valid Brt tracking number.</li>
 	<li>Enter your tracking number into the search bar.</li>
 	<li>Then click on the “ Track” button.</li>
 	<li>Wait for a moment while it is processing.</li>
 	<li>In no time you will know the current status of your package.</li>
 	<li>If you face any problem you can contact Brt customer support.</li>
</ul>
 
<h3>BRT tracking Customer Support.</h3>
If you want to know their service charges you can contact them. Here we will give Brt customer support number and Email.
<table>
<tbody>
<tr>
<td><b>Courier</b></td>
<td><b>Contact Number</b></td>
<td><b>Email</b></td>
<td><b>Main Office Address</b></td>
</tr>
<tr>
<td>BRT Tracking</td>
<td>02 50 87 411</td>
<td>info179@ Brt .it</td>
<td>Foro Buonaparte, 67 - 20121 Milan, Italy</td>
</tr>
</tbody>
</table>
 
<h3>Tracking BRT</h3>
BRT offers logistics services through an automated information system that supports the distribution network. This gives the company a single point of distribution, customer service, and customization. BRTT Bar Long-Ring has many warehouses in Italy that handle inbound logistics, such as purchase orders, return home management, quality control, and transit points. BRT is a company that sends packages by courier in Italy, Europe, and all over the world. has become a must-have for those who depend on it Bhi Inti can handle the distribution of packages in different countries by using technical resources to run an integrated system that makes sure each package is delivered on time and with the utmost care.

A GPS system is built into the fleet of vehicles to make sure packages get to the right place and to track the items all over. Most of the time, tracking makes it easy for the customer to get the information they need to track the shipment. The company makes it easy to pay. Visit the company's website to apply for or use the package. All of these services are easy to get to, which is convenient for customers. A managed facility that can hold lakhs of packages in a couple o days and deliver them the same day to different places. You can also track <a class="text-muted" href="https://packstrack.com/tnttracking">TNT Tracking</a>.
<h3>BRT Tracking Amazon</h3>
Amazon is one of the biggest e-commerce sites in the world. To get its products to customers, it uses a number of logistics providers, including BRT. When a customer orders something from Amazon, the package is sent to the customer's address from one of Amazon's fulfillment centers. During this process, BRT could be used to handle the delivery of the package as the logistics provider. Customers can check on the status of their Amazon orders on the Amazon website or mobile app. They can see the expected delivery date and a history of updates to the delivery status. If BRT is delivering the package, the tracking number will be available on the Amazon website or mobile app.

Customers can also enter the tracking number on the BRT website or mobile app to see information about their shipment, such as where it is now when it is expected to arrive, and a history of updates about the delivery status. This will give the customer a clearer picture of where and how the package is doing during the delivery process. In the end, Amazon can use BRT as its logistics provider to take care of sending packages to customers. Customers can check on the status of their Amazon orders on the Amazon website or mobile app. They can see the expected delivery date and a history of updates to the delivery status. If BRT is delivering the package, the tracking number can be found on the Amazon website or mobile app and can also be used on the BRT website or mobile app to track the package.
<h3>Tracking Spedizione BRT</h3>
Shipment or delivery is what "Spedizione" means in Italian. When you track a "Spedizione BRT," you are tracking a shipment or delivery that was handled by BRT, an Italian courier, and logistics company. With the BRT tracking service, customers can find out where their shipments are. The service lets customers see where their package is now and when it is expected to arrive, as well as a history of status updates. Customers can also use the BRT mobile app, which works on both iOS and Android devices, to track their packages. Customers can use the app to track their packages and take care of their deliveries on the go.

In the end, tracking a "Spedizione BRT" means tracking a shipment or delivery that was handled by BRT, an Italian courier, and logistics company. Customers can track their brt tracking ritiro packages by using the brt tracking Internazionale on the BRT website or mobile app and entering the tracking number that BRT gives them. They can then see where their package is, what its status is, when it's expected to arrive, and a history of delivery status updates.
<h3>Brt Bartolini Tracking</h3>
BRT Bartolini is an Italian logistics company that delivers packages, sends express couriers, and transports freight, among other things. They also offer shipment tracking, which lets customers keep track of where their packages are in real time. Customers can use the BRT Bartolini website or mobile app to access this service. There, they can enter their tracking number and see information like where the package is right now, how long it is expected to take to get there, and what has happened in the past with deliveries.
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group bg-gray-50 dark:bg-[#444654]">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="relative flex w-[calc(100%-50px)] md:flex-col lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<div class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap">
<div class="markdown prose w-full break-words dark:prose-invert light">package, estimated delivery time, and past delivery events.</div>
</div>
</div>
<div class="text-gray-400 flex self-end lg:self-center justify-center mt-2 gap-4 lg:gap-1 lg:absolute lg:top-0 lg:translate-x-full lg:right-0 lg:mt-0 lg:pl-2 visible"></div>
</div>
</div>
</div>
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group dark:bg-gray-800">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="w-[30px] flex flex-col relative items-end">
<div class="relative flex"></div>
</div>
<div class="relative flex w-[calc(100%-50px)] md:flex-col lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<h3 class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap">How long does it take to deliver BRT Bartolini?</h3>
</div>
<div class="text-gray-400 flex self-end lg:self-center justify-center mt-2 gap-4 lg:gap-1 lg:absolute lg:top-0 lg:translate-x-full lg:right-0 lg:mt-0 lg:pl-2 visible"></div>
</div>
</div>
</div>
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group bg-gray-50 dark:bg-[#444654]">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="relative flex w-[calc(100%-50px)] md:flex-col lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<div class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap">
<div class="markdown prose w-full break-words dark:prose-invert light">The delivery time for BRT Bartolini depends on the type of service selected and the destination of the package. For standard parcel delivery, the estimated transit time is usually within 1-3 business days for domestic destinations and 2-5 business days for international destinations. For express courier service, the estimated transit time is usually within 24-48 hours for domestic destinations and 2-4 business days for international destinations. It's important to note that these are estimated transit times and actual delivery times may vary depending on various factors such as weather conditions, customs clearance, and the location of the destination. It is always recommended to check with the company's customer service or track the package using the tracking number to get a more accurate delivery time</div>
    
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