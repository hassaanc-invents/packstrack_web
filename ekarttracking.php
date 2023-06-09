
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
  <meta name="description" content="Ekart tracking is one of the many private companies in India that offer delivery services">
<meta name="keywords" content="Ekart Tracking, Ekart Logistics Tracking, Ekart Tracking Number, How To Track Ekart Tracking, Ekart Tracking Flipkart with order id
">
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
        $blogId = "93";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="Ekart Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>Ekart Tracking - Tracking Details</h1>

Ekart Tracking is one of the many private companies in India that offer delivery services. India is a big country, so it's not surprising that companies like Ekart are good at what they do and offer. You will learn about companies like Ekart in the article. Ekart Logistics is a private business that delivers packages and mail. The tracking service is similar to Tucker and is based in Bangalore, Karnataka. Like other companies, Account Logistics sells products in-store and delivers items bought through Flipcard. Extremely useful for Justice Courier tracking service is handled by phone calls, where users can get up-to-date information about where their packages or letters are in the shipping process.
<h2>Ekart Logistics Tracking</h2>
Although it was founded in 2019, it was not until 2012 that the company scaled up its operations and devoted all its attention to offering good quality postal delivery services. Handles more than 10 million deliveries in India. The operational facility is available.  There are several options for obtaining Logistic training of record for a Mandro order when you place your order by meter and the vendor ships your package using a Cardiologist. The first is to check the tracking status directly within the Mentor app.

 

Your registration number for the record will be needed for the next two ways. If you don't have it, you can either ask the merchant for it or look in the app. In order to keep tabs on the status of your orders, you may either use Packstrtack tracking or check the homepage of our website. This is the most efficient method, as more than 10,000 countries all over the world.
<h3 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">Ekart Tracking Number</span></h3>
<div></div>
<div>When a package is shipped using <b><a class="text-primary" href="https://ekartlogistics.com/" target="_blank" rel="noopener">Ekart's logistics services</a></b>, it is given a unique number, known as an Ekart tracking number. The package's progress through the delivery system can be monitored with this number. Customers can see their order's current location, expected delivery date, and any updates or delays by entering their unique tracking number provided by Ekart. Tracking information is sent to the customer via email or text message after an order has been placed, and it can also be viewed in the "Order History" section of the Flipkart website or mobile app.</div>
<div></div>
<div>If a customer has an Ekart tracking number, they can enter it on the Ekart website or mobile app to see where their package is and if there are any issues with delivery. Most Ekart tracking numbers are alphanumeric and are specific to a single package. It is also known as a consignment or shipment number, or as the waybill number.</div>
<div></div>
<h3>How To Track Ekart Tracking</h3>
If you want to track your Ekart courier tracking, you are in right place. Here we will tell you how to track Ekart tracking numbers online. Please follow these steps.
<ul>
 	<li>First, you have a valid tracking number.</li>
 	<li>Enter your tracking number into the search bar.</li>
 	<li>then press the track button.</li>
 	<li>Wait for a moment while it is processing.</li>
 	<li>In no time you will see the current status of your package.</li>
 	<li>If you face any problem you can contact Ekart customer support.</li>
</ul>
<h3>Ekart Tracking Customer Support</h3>
If you have any questions and want to know their service charges you can contact them. Here we will give you their contact number and Email.
<h1>Ekart Tracking Contact Information</h1>
<table>
<tbody>
<tr>
<th>Courier</th>
<th>Contact Number</th>
<th>Email</th>
<th>Main Office Address</th>
</tr>
<tr>
<td>Ekart Tracking</td>
<td>+91 18004201111</td>
<td>support@ekartlogistics.com</td>
<td>7R3V+W4V, Dashmesh Ave, Mubarik Mehal Colony, Sangrur, Punjab 148001</td>
</tr>
</tbody>
</table>
 
<h3 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">Ekart Courier Tracking</span></h3>
<div></div>
<div>Ekart is a courier tracking that delivers your package all over India. You can send your package anywhere in India. It is very fast and cheap tracking. Ekart courier tracking delivers your package safely. They had branches and offices in all the cities of India. They have very trend and experienced staff to deliver your package. They will package your package into boxes to deliver your package safely. If unfortunately your package has lost damaged and lost during transit they will give you a complete refund. If your package will be late due to some usual activities they will return your shipping charges. Ekart Logistics has many shipping trucks and cargo. You can also track <b><a class="text-primary" href="https://packstrack.com/safexpresstracking" target="_blank" rel="noopener">Safexpress Tracking</a>.</b></div>
<div></div>
<div>
<h3 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">Ekart Tracking Flipkart with order id</span></h3>
One of the major e-commerce companies in India is called Flipkart, and Ekart is their logistics division. Use the order ID supplied in the confirmation email or on the website to follow the progress of your Flipkart purchase. You may check the status of your order and see when you might expect it to arrive by entering your order ID on the Flipkart website or mobile app. Get in touch with Flipkart's support team if your package doesn't arrive on time or if you have any other questions or issues.

</div>
<h3 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">Ekart order tracking</span></h3>
<div>The Indian e-commerce company Flipkart has a logistics division called "Ekart." Tracking your orders is just one of the many shipping and logistics options Ekart provides. Flipkart's website and mobile app both allow customers to monitor the status of their orders. When they go to the Ekart website, all they need is the order number or tracking number to see the status of their shipment. In addition, they can check the status of their order via email or text message. Customers can check on the progress of their order and receive an estimated delivery date with the help of this service.</div>
<h3 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">Ekart Tracking ID</span></h3>
When you use Ekart's logistics services, your package will be given a special tracking ID. The package's progress through the delivery system can be followed thanks to this identifier. Customers can see their order's current location, expected delivery date, and any changes or delays by entering their unique Ekart tracking ID. Customers can find their tracking number in an email or text message sent to them after placing an order, or they can access it in the "Order History" section of the Flipkart website or app. Customers can enter the tracking ID on the Ekart website or mobile app, and it will show the package's current location and status, including whether it has been delivered or if there are any issues with the delivery.
<h3 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">How To Track Ekart Tracking by order id</span></h3>
<div>

To track an Ekart order using the order ID, you can follow these steps:
<ol>
 	<li>Go to the Flipkart website or open the Flipkart mobile app.</li>
 	<li>Log in to your account using your email address or mobile number.</li>
 	<li>Once you're logged in, go to the 'My Orders section.</li>
 	<li>You should see a list of all your recent orders. Find the order you want to track and click on it.</li>
 	<li>On the order details page, you should see the Ekart tracking ID and the status of the order.</li>
 	<li>If the order is shipped, you will also see a 'Track your Order' option, click on it.</li>
 	<li>On the next page, you will be able to see the current location of the package, estimated delivery time, and the status of the delivery.</li>
</ol>
Alternatively, you can track your order by visiting the Ekart Logistics website and entering the order ID on the tracking page, it will show the package's current location and status, including whether it has been delivered or if there are any issues with the delivery. Please note that the order ID can also be found on the invoice or order confirmation email that you received after placing the order.
<h4>FAQs</h4>
</div>
<div>
<div class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak">
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group dark:bg-gray-800">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="relative flex w-[calc(100%-50px)] md:flex-col lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<ul>
 	<li class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap"><strong>Where can I get tracking for my Ekart Logistics Myntra order?</strong></li>
</ul>
</div>
<div class="text-gray-400 flex self-end lg:self-center justify-center mt-2 gap-4 lg:gap-1 lg:absolute lg:top-0 lg:translate-x-full lg:right-0 lg:mt-0 lg:pl-2 visible"></div>
</div>
</div>
</div>
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group bg-gray-50 dark:bg-[#444654]">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="w-[30px] flex flex-col relative items-end">
<div class="relative h-[30px] w-[30px] p-1 rounded-sm text-white flex items-center justify-center"></div>
</div>
<div class="relative flex w-[calc(100%-50px)] md:flex-col lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<div class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap">
<div class="markdown prose w-full break-words dark:prose-invert light">

You can track your Ekart Logistics Myntra order by following these steps:
<ol>
 	<li>Go to the Myntra website or open the Myntra mobile app.</li>
 	<li>Log in to your account using your email address or mobile number.</li>
 	<li>Once you're logged in, go to the 'My Orders section.</li>
 	<li>You should see a list of all your recent orders. Find the order you want to track and click on it.</li>
 	<li>On the order details page, you should see the Ekart tracking number and the status of the order.</li>
 	<li>If the order is shipped, you will also see a 'Track your Order' option, click on it.</li>
 	<li>On the next page, you will be able to see the current location of the package, estimated delivery time, and the status of the delivery.</li>
</ol>
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group dark:bg-gray-800">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="relative flex w-[calc(100%-50px)] md:flex-col lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<ul>
 	<li class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap"><strong>Where can Ekart Logistics deliver?</strong></li>
</ul>
</div>
</div>
</div>
</div>
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group bg-gray-50 dark:bg-[#444654]">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="relative flex w-[calc(100%-50px)] md:flex-col lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<div class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap">
<div class="markdown prose w-full break-words dark:prose-invert light">

Ekart Logistics, which is the logistics arm of Flipkart, is one of the largest e-commerce logistics providers in India. They have a wide reach and can deliver to most parts of the country. They currently provide delivery services to over 38,000 pin codes across India. This includes major cities and towns, as well as remote and rural areas. Ekart Logistics also have capabilities to deliver to international locations, but the service is limited to certain countries and regions, and also it would depend on the merchant's shipping policies and international shipping options available for their product. It is best to check the availability of delivery to a specific location by visiting the website of the merchant or marketplace that you are ordering from, or by contacting their customer service.
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group dark:bg-gray-800">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="relative flex w-[calc(100%-50px)] md:flex-col lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<ul>
 	<li class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap"><strong>How long does it take for Ekart Logistics to deliver?</strong></li>
</ul>
</div>
</div>
</div>
</div>
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group bg-gray-50 dark:bg-[#444654]">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="w-[30px] flex flex-col relative items-end">
<div class="relative h-[30px] w-[30px] p-1 rounded-sm text-white flex items-center justify-center"></div>
</div>
<div class="relative flex w-[calc(100%-50px)] md:flex-col lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<div class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap">
<div class="result-streaming markdown prose w-full break-words dark:prose-invert light">

The delivery time for an order shipped through Ekart Logistics can vary depending on a number of factors, such as the location of the recipient, the availability of the product, and the shipping method chosen at the time of purchase. Typically, Ekart Logistics aims to deliver most products within 2-7 business days for major cities and towns and within 7-12 business days for other locations. However, it's not uncommon for some deliveries to take longer, especially during peak periods such as holidays or if the package is being shipped to a remote or hard-to-reach location. It's important to note that the delivery time also depends on the merchant or the seller's policies, and some merchants may offer faster or slower delivery options. You can check the estimated delivery time for a specific product by visiting the merchant's website or by contacting their customer service.
<div class="flex-1 overflow-hidden">
<div class="react-scroll-to-bottom--css-iksdw-79elbk h-full dark:bg-gray-800">
<div class="react-scroll-to-bottom--css-iksdw-1n7m0yu">
<div class="flex flex-col items-center text-sm h-full dark:bg-gray-800">
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group dark:bg-gray-800">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="relative flex w-[calc(100%-50px)] md:flex-col lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<ul>
 	<li class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap"><strong>Is Ekart Logistics shipping expensive?</strong></li>
</ul>
</div>
</div>
</div>
</div>
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group bg-gray-50 dark:bg-[#444654]">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="relative flex w-[calc(100%-50px)] md:flex-col lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<div class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap">
<div class="markdown prose w-full break-words dark:prose-invert light">The cost of shipping through Ekart Logistics can vary depending on a number of factors, such as the location of the recipient, the weight and size of the package, and the shipping method chosen at the time of purchase. In general, Ekart Logistics offers competitive shipping rates and they also offer discounted rates for bulk orders and for regular customers. They also have tie-ups with several merchants and e-commerce platforms, which results in discounted shipping rates for their customers.</div>
<div></div>
<div class="markdown prose w-full break-words dark:prose-invert light">That being said, the cost of shipping through Ekart Logistics can still be more expensive than other shipping options, especially for remote or hard-to-reach locations, or for larger or heavier packages. It's important to compare the cost of shipping through Ekart Logistics with other shipping options before placing an order, in order to find the most cost-effective option for you. Keep in mind that some merchants or e-commerce platforms may also offer free shipping for certain products or orders, or have tie-ups with other shipping companies that may offer cheaper rates.</div>
</div>
</div>
<div class="text-gray-400 flex self-end lg:self-center justify-center mt-2 gap-4 lg:gap-1 lg:absolute lg:top-0 lg:translate-x-full lg:right-0 lg:mt-0 lg:pl-2 visible"></div>
</div>
</div>
</div>
<div class="w-full h-48 flex-shrink-0"></div>
</div>
<ul>
 	<li><strong>What is Ekart Logistics Shipping Fee?</strong></li>
</ul>
</div>
</div>
</div>
<div class="absolute bottom-0 left-0 w-full border-t md:border-t-0 dark:border-white/20 md:border-transparent md:dark:border-transparent md:bg-vert-light-gradient bg-white dark:bg-gray-800 md:!bg-transparent dark:md:bg-vert-dark-gradient"><form class="stretch mx-2 flex flex-row gap-3 pt-2 last:mb-2 md:last:mb-6 lg:mx-auto lg:max-w-3xl lg:pt-6">
<div class="relative flex h-full flex-1 md:flex-col">
<div class="ml-1 mt-1.5 md:w-full md:m-auto md:flex md:mb-2 gap-2 justify-center">The cost of shipping with Ekart Logistics varies depending on the weight of the package and the level of service requested. For standard service, packages under one kilogram typically cost around $2.00. For packages over one kilogram, the cost increases to approximately $5.00. If you require express delivery, the cost for packages under one kilogram is approximately $4.00, and for packages over one kilogram, the cost is approximately $6.00. For further assistance, you can contact Ekart Logistics customer service.</div>
    
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