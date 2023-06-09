
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
  <meta name="description" content=" Shopee is an online store with its headquarters in Singapore. It is owned by Sea Limited, which used to be called Garena and was started by Forrest Li in 2009">
<meta name="keywords" content="Shopee Express, How Track To Shopee Express Tracking, Shopee Express Customer Service, Cek Resi Shopee Express, ระยะเวลาการส่งสินค้า ของ Shopee Express">
<meta name="author" content="Packstrack">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/shopeeexpress"
  },
  "headline": "Shopee Express Tracking| Track your Parcel",
  "description": "Shopee is an online store with its headquarters in Singapore. It is owned by Sea Limited, which used to be called Garena and was started by Forrest Li in 2009.",
  "image": "https://packstrack.com/uploaded_files/77-771090_logo-shopee-icon-png-transparent-png.png",  
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
  "datePublished": "2022-12-08",
  "dateModified": "2023-02-27"
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "Shopee Express Instant là gì?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "nhanh Shopee express which used to be called Township is the delivery team for the Now Delivery app, which is now called Shopee Food and is Vietnam's most popular fast delivery app.   Because food delivery needs to be done right away and there is a large force, Shopee has used this force to deliver quickly in the inner city of Vietnam for its platform.   This is a long-planned move by Shopee, whose parent company, Sea, owns 82% of Foody Corporation's shares."
    }
  },{
    "@type": "Question",
    "name": "Shopee express là gì?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "\"What is Shopee Express?\" is a natural question. When starting an online store on the Shopee e-commerce channel, many store owners are asked this question. tra mã vận đơn shopee express is a way to get around that is directly run by Shopee, so the delivery and pick-up process is professional and safe. One thing that makes this shipping method different is that it can only be used for orders that are placed and sent to Ho Chi Minh City. Ho Chi Minh and Hanoi."
    }
  }]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "HowTo", 
  "name": "How To Track Shopee Express Tracking",
  "description": "First, you have a valid Shopee Express tracking number.
Enter your tracking number into our tracker.
Then click the "Track" button to track your package.
Soon you will see the complete details about your package.
If you face any problem you should contact Shopee Express Contact Number.",
  "step": {
    "@type": "HowToStep",
    "text": ""
  }    
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
        $blogId = "24";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="Shopee Express Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1 style="text-align: center;">Shopee Express Tracking| Track your Parcel</h1>
 
<iframe class="custom-scroll-bar" src="https://spx.ph/" width="100%" height="400px"><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start">﻿</span></iframe>
 
<h2>Shopee Express</h2>
Shopee is an online store with its headquarters in Singapore. It is owned by Sea Limited, which used to be called Garena and was started by Forrest Li in 2009. Shopee started in Singapore in 2015 and has since spread to Malaysia, Thailand, Taiwan, Indonesia, Vietnam, and the Philippines. Shopee is also active in Brazil as of 2019. This is the first country outside of Asia and South America that Shopee has been to. Chris Feng is in charge of Shopee. He used to work for Rocket Internet and has been in charge of both Zalora and Lazada.
<h3>How Track Shopee Express Tracking</h3>
When you order or ship anything Via Shopee Express Tracking. They will give you a Tracking number at Shopee Express. This tracking number Contains all the Information about your package. Shopee Express Malaysia allows you to track your package Online. Here we will tell you an easy way to track your package online. Many websites don't you the correct result. But our real-time tracker will track your package within a second. To track your Shopee Express Tracking online, Please follow these steps:
<ul>
 	<li aria-level="1">First, you have a valid Shopee Express tracking number.</li>
 	<li aria-level="1">Enter your tracking number into our tracker.</li>
 	<li aria-level="1">Then click the <b><a class="text-primary" href="https://shopeexpress.com.my/" target="_blank" rel="noopener">"Track"</a></b> button to track your package.</li>
 	<li aria-level="1">Soon you will see the complete details about your package.</li>
 	<li aria-level="1">If you face any problem you should contact Shopee Express Contact Number.</li>
</ul>
<h3>Shopee Express Customer Service</h3>
If you face any problems During transit and if want to know their service charges and know any details about their service you can contact Shopee Express Customer Service
<p style="text-align: center;"><a class="mb-button mb-style-flat mb-size-default mb-corners-default mb-text-style-default " href="https://packstrack.com/shopeeexpresscs" target="_blank" rel="noopener"> <i class="fa fa-phone-square"></i>  Customer Support</a></p>

<h3>Shopee Express Tracking</h3>
Shopee Express offers delivery services across a number of platforms, as well as collection services, goods return services, and insurance services for goods. Shopee Express also has a lot of different ways to look up an order. For example, you can call the switchboard, send an email, fill out a contact form, or call customer service. Service points and delivery points can also be looked up by users. row.   ติดตามพัสดุ Shopee Express was first released in Singapore in 2015. Shopee started out as a marketplace where people could buy and sell directly with each other. But since the launch of Shopee Mall, an online shopping platform for well-known brands, they have switched to a model that is a mix of C2C and B2C.   In 2017, the platform had more than four million sellers and more than 180 million active products. Shopee Express tracking Malaysia was downloaded 80 million times. Shopee reported a gross trade value (GMV) of US$1.6 billion in the fourth quarter of 2017, up 206 percent from the year before. In 2018, Shopee had a GMV of US$2.7 billion, which was 153% more than in 2017.
<h3>Shopee Express Tracking Number</h3>
How to Get in Touch with Shopee Express and Their Customer Service (DDR Dorting Center Shopee Express Drop Off Point). The Shopee Express Tracking Number (DDR Dorting Center Shopee Express Drop-Off Point). Shopee Xpress is a shipping and fulfillment option available to Shopee Seller vendors. Sellers on Shopee can take advantage of this feature.   Online shopping in Malaysia is becoming increasingly popular, as evidenced by a rise in the total number of transactions, leading Shopee to decide they needed their own in-house courier service. You can also track <b><a class="text-primary" href="https://packstrack.com/poslajutracking" target="_blank" rel="noopener">Poslaju Tracking</a></b>
<h3>Cek Resi Shopee Express</h3>
There are two ways to Cek Resi  Shopee Express. Both are very simple.   <b>Method 1</b>
<ul>
 	<li aria-level="1">The first method, please open the browser on your phone or computer.</li>
</ul>
<ul>
 	<li aria-level="1">Type website ceresi.com and press enter.</li>
 	<li aria-level="1">Enter the Shopee Express coupon number correctly in the checkout column.</li>
</ul>
<ul>
 	<li aria-level="1">Click the RESI Confirm button.</li>
 	<li aria-level="1">The campaign option appears, then select the Shopee Express tab.</li>
 	<li aria-level="1">Finally, the delivery status of goods as per the Shopee Express Standard delivery ticket number is published accurately and clearly.</li>
</ul>
<b>Cek Resi Shopee Express Standard</b>   Easy steps can be taken to check the standard and economical 2022 Shopee express receipts. You only have to do a few things. Customers who use the SPX Shopee Express service can also track their packages by going to the website https://spx.co.id/. It's easy—just go to https://spx.co.id/, enter the receipt number or AWB number, and click the track with the waybill number. Look on the proof sheet for the Shopee Express SPX package delivery for the receipt number (airwaybill number, barcode number, or e-connote number).   How to Check Shopee Express Receipts Standard and Save 2022. (PHOTO: MNC Media)   In the shipping tracking box on the left, enter the waybill/receipt number or the Order Number.   Then, on the right, click the "Track" button.   The package/goods sent status will show up under the search box.   Please repeat the steps above to track another package.
<h3>เช็คพัสดุ Shopee express</h3>
เช็คพัสดุ Shopee Express is another online service. that everyone can use the free service where Shopee XPress parcel delivery service, in addition to providing services on the buyer's side There are also services for the seller's side. with an appointment to pick up products from the store to deliver to customers in a short time Increase flexibility for online trading business people. Initially Covering pick-up service areas in Bangkok and its vicinity (Nonthaburi, Pathum Thani, Samut Prakan, and Samut Sakhon) and delivery service areas in Bangkok and its vicinity including some provinces in which Shopee Express is expanding its delivery areas. products to cover more and more areas in the provinces   The Shopee XPress parcel check service will be updated in real-time (Real-Time Update), now and then. เช็คเลขพัสดุ Shopee Express is intended to facilitate both the sender and receiver sides to be able to assess when and how the parcel or letter will be delivered to the recipient.
<h3>Precondition</h3>
Shopee Express track reserves the right to change shipping rates with not less than 7 days' notice. The rates above do not include VAT (if any).   Office hours are from 08:00 – 19:00 Monday – Sunday (except holidays). Package dimensions (width+length+height) must not exceed 180 cm. on each side does not exceed 100 cm. and its weight should not exceed 20 kg. baht per kg.) How to calculate shipping costs:   Shipping rates are calculated based on volumetric weight. (Width × Length × Height) divided by 5000 and rounded to decimal places. Transportation costs will be charged according to the calculated amount. Calculation Example   If Package A actually weighs 1 kg and its dimensions are 20 cm wide, 50 cm long, and 10 cm high, the shipping fee will be calculated based on the volumetric weight. (20x50x10)/5000 = 2kg. In this case, the package has a volumetric weight of 2 kg. Therefore, this package will incur a fee of 26 baht for delivery in and around Bangkok.   If the package size or weight does not meet the conditions of this offer. Users will be charged an additional service fee according to the criteria determined by the form of transportation. Package List and Time of Acceptance Applicants must make their first transaction before 11:00. m. and the courier will pick up the package on the same day, no later than 19:00. m., and there is no minimum to receive.   delivery time For deliveries in and around Bangkok, it will be delivered within 1-2 days. for delivery to the province will be sent in 2-3 days.
<h3>ระยะเวลาการส่งสินค้า ของ Shopee Express</h3>
Depending on how long it takes the seller to process the order, most Shopee orders take between 2 and 30 business days. that your order is from the United States or another country (pre-order products take longer to ship than usual)   For normal products, it takes about two to three days to put a package together. Products you can order ahead of time The time it takes to put together a package is between 7 and 20 days (minimum).   เช็คเลข Shopee express also answers the question of how long it will take to get the product. and delivery times of each transport company. National holidays and holidays of the transport companies are not taken into account when figuring out this time. On the Shopee page, you can find out how long it takes to prepare and deliver an item. using the following information about travel time:   Around Bangkok, delivery takes about 1-2 business days. In other provinces, delivery takes about 2–4 business days. It takes about 3–5 business days to deliver to remote areas. You can also track <b><a class="text-primary" href="https://packstrack.com/dpdtracking" target="_blank" rel="noopener">DPD Tracking</a></b>
<h3>Shopee express là gì?</h3>
"What is Shopee Express?" is a natural question. When starting an online store on the Shopee e-commerce channel, many store owners are asked this question. tra mã vận đơn shopee express is a way to get around that is directly run by Shopee, so the delivery and pick-up process is professional and safe. One thing that makes this shipping method different is that it can only be used for orders that are placed and sent to Ho Chi Minh City. Ho Chi Minh and Hanoi.
<h3>Shopee Express Instant là gì?</h3>
nhanh Shopee express which used to be called Township is the delivery team for the Now Delivery app, which is now called Shopee Food and is Vietnam's most popular fast delivery app.   Because food delivery needs to be done right away and there is a large force, Shopee has used this force to deliver quickly in the inner city of Vietnam for its platform.   This is a long-planned move by Shopee, whose parent company, Sea, owns 82% of Foody Corporation's shares.
<h3>Tracking Shopee Express</h3>
Tracking Shopee Express is a service that allows users to track deliveries by entering their Shopee Express Tracking number in the space provided. This allows users to learn the status of their packages wherever they may be, including El Salto, the SPX service center, and the classification center, before they are delivered to the recipient's address.   Shopee Express sometimes referred to as SPXMY, is an integrated logistics solution for Malaysia's largest online retailer, which serves millions of distinct customers.   Additionally, SPX offers delivery, collection, cash delivery (COD), and marine transportation throughout the Malaysian Peninsula, including Sabah, Sarawak, and Labuan.   In fact, under the terms that have been established utilizing the SPX special service for clients in Malaysia, Chinese sellers can also offer any manner of obscene goods using the Shopee platform.
<h3>Shopee Express near me</h3>
You can use the column below to search for specific Sshopee express hub points, and the map below includes deposit places close to this residential neighborhood. Use the filter provided to quickly and precisely discover the desired address.   You can contact the direct customer support line directly with any questions you have regarding the service or anything pertaining to the Shopee Express delivery service as follows:    
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