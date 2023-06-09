
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
  <meta name="description" content="Welcome to M&P tracking. Here you can track your packages. M&P Courier is a service that helps people send packages quickly and safely">
<meta name="keywords" content="M&P Tracking, How do I track my M&P Tracking?, M&P Tracking courier Head offices in Pakistan, M & P Tracking Check via SMS, Contact number For M&P courier service.">
<meta name="author" content="Packstrack">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/m&ptracking"
  },
  "headline": "M&P Tracking - Track your Package",
  "description": "Welcome to M&P tracking. Here you can track your packages. M&P Courier is a service that helps people send packages quickly and safely.",
  "image": "https://packstrack.com/uploaded_files/mp%20(1).webp",  
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
  "dateModified": "2023-03-01"
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
        $blogId = "41";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="M&P Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>M&P Tracking - Track your Package</h1>
Welcome to M&P tracking. Here you can track your packages. M&P Courier is a service that helps people send packages quickly and safely. Here, you can use M&P's fast and hard-working team to send your package to different places. M&P gives you a global track line so you can look for your package. You can follow the current status of a package of area coverage or you can contact the area customer service. M&P Tracking sends packages to thousands of locations in Pakistan via airplanes and other travel vehicles.
<h2></h2>
<b>M&P courier service</b> is the fastest, cheapest, and most trusted courier service in Pakistan. M&P also owns a courier company called M&P Logistics, which delivers packages both locally and internationally. All over Pakistan, the company has more than 750 courier centers and more than 1600 delivery points. It has more than 100 delivery vehicles that can take your package anywhere in Pakistan.
<h2 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">m&p courier tracking</span></h2>
M&P Tracking is a courier company based in Pakistan.M&P Tracking, also known as M&P Express Logistics, is a leading courier and logistics company in Pakistan that offers a wide range of services to businesses and individuals. The company was founded in 2005 and has since grown to become one of the largest courier companies in Pakistan, with a network of over 500 destinations across the country and a team of more than 3,500 employees.
<h3>How do I track my <span class="">m and p tracking</span>?</h3>
We can completely guide you on how to track your package via order number. Here are a few simple steps to follow to track your package. These steps are as follows:
<h2></h2>
<ul>
 	<li style="list-style-type: none;">
<ul>
 	<li aria-level="1">Open our website Packstrack.</li>
</ul>
</li>
</ul>
<ul>
 	<li aria-level="1">Please put your tracking number.</li>
 	<li aria-level="1">That is given to you when you order a package.</li>
 	<li aria-level="1">That is given to you when you order a package.</li>
 	<li aria-level="1">Press the track button.</li>
 	<li aria-level="1">You will get the complete information about your order within a second</li>
 	<li aria-level="1">In a second, you'll be able to see where your package has arrived.</li>
</ul>
<h3>M&P Service charges calculter</h3>
Please fill out this form to know the service charges for your package. Please click on Tariff Calculator to know shipping charges.


<iframe src="https://mulphilog.com/cost-calculator" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="1000px" width="100%" allowfullscreen></iframe>


 

 

 
<h3>M&P Tracking Helpline</h3>
If you are facing any problems or want to use their services you can contact them. Here we will give you their contact number and email.
<ul>
 	<li><strong>Contact Number: </strong>(021) 111-202-202</li>
 	<li><strong>Email: </strong>contact@mulphilog.com</li>
 	<li><strong>Main Office: </strong>C-17, Korangi Road D.H.A Phase II – Ext, Karachi – Pakistan</li>
</ul>
<h3>M & P Tracking Services:</h3>
M&P Tracking offers a range of services, including:
<ul>
 	<li>Domestic and International Courier Services: The company offers both domestic and international courier services, including both standard and express services.</li>
 	<li>E-commerce Delivery Services: M&P Tracking offers specialized delivery services for e-commerce, such as cash on delivery (COD) and reverses logistics.</li>
 	<li>Warehousing and Fulfillment: The company helps businesses with warehousing and fulfillment, like keeping track of inventory and taking orders.</li>
 	<li>Customized Logistics Solutions: M&P Tracking offers customized logistics solutions, such as transportation and distribution solutions, for businesses with unique needs.</li>
 	<li>Value-Added Services: The company offers a variety of value-added services, such as insurance, gift wrapping, and packaging solutions.</li>
</ul>
<h4 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">M&P Tracking Pakistan </span>Technology:</h4>
M&P Tracking uses advanced technology to track and monitor shipments in real-time, as well as to find the best delivery routes and make things run more smoothly. The company also has a number of digital services, such as an online booking platform, a mobile app, and a platform for integrating e-commerce.
<h4 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">M&P Tracking Online Pakistan </span>Quality and Customer Service:</h4>
M&P Tracking is dedicated to giving its customers high-quality services and great customer service. The company has a customer service team that works around the clock to answer questions and fix problems. The company also has a strong quality control system to make sure that shipments arrive on time and in good condition.
<h4><span class="">M and P courier tracking </span>Partnerships:</h4>
M&P Tracking has established partnerships with several major international courier and logistics companies, including DHL, FedEx, and UPS. These partnerships enable the company to provide customers with global delivery solutions and access to a wider network of destinations.

M&P Tracking is a leading courier and logistics company in Pakistan, providing a range of domestic and international courier services, e-commerce delivery solutions, warehousing, and fulfillment services, customized logistics solutions, and value-added services. The company uses advanced technology to optimize delivery routes and improve efficiency and is committed to providing high-quality services and exceptional customer service.
<h4>M&P Tracking courier Head offices in Pakistan</h4>
<h2></h2>
Here we can tell you the head offices of m&p tracking in Pakistan.
<h2></h2>
<b>Head Branch </b>is located at C-17, Korangi Road, D.H.A Phase II-Extension, Karachi, Pakistan. Here are some other offices in Pakistan. You can also Track <b><a class="text-primary" href="https://packstrack.com/leopardtracking" target="_blank" rel="noopener">Leopard Tracking</a></b>
<h2></h2>
<ul>
 	<li aria-level="1">Lahore Head Office</li>
 	<li aria-level="1">Multan</li>
 	<li aria-level="1">Peshawar</li>
 	<li aria-level="1">Gujranwala</li>
 	<li aria-level="1">Islamabad</li>
 	<li aria-level="1">Faisalabad</li>
 	<li aria-level="1">Hyderabad</li>
 	<li aria-level="1">Quetta</li>
 	<li aria-level="1">Karachi</li>
</ul>
<h2></h2>
<h4>M & P Tracking Check via SMS</h4>
<h2></h2>
You can also track your package via SMS. Here we can learn you how to check M&P Tracking via SMS.
<h2></h2>
<ul>
 	<li aria-level="1">Send your tracking to the customer service number.</li>
 	<li aria-level="1">Send your tracking number to ( 021) 111-202-202  to get information about your parcel.</li>
 	<li aria-level="1">You can send an SMS at any time.</li>
 	<li aria-level="1">If you don't get a reply at the same time, you should wait for a while, it takes 30 minutes to an hour.</li>
</ul>
<h2></h2>
<h4>M&P Delivery Check via Email</h4>
You can also check your tracking number via Email. Here we will tell you how you can track your order via Email.
<ul>
 	<li aria-level="1">First, you have a valid tracking of m&p.</li>
 	<li aria-level="1">Send your tracking to <a href="mailto:contact@mulphilog.com">contact@mulphilog.com</a>.</li>
 	<li aria-level="1">You will be replied to after checking your order.</li>
 	<li aria-level="1"></li>
</ul>
<h2></h2>
<h4>Contact number For M&P courier service.</h4>
<h2></h2>
Here we provide you with different cities' <b>m&p customer service numbers</b>
<h2></h2>
<table>
<tbody>
<tr>
<td><b>City Name</b></td>
<td><b>Contact Numbers</b></td>
<td><b>Address</b></td>
</tr>
<tr>
<td>Karachi</td>
<td>(021) 111-202-202</td>
<td>C-17, Korangi Road،, D.H.A Phase II – Extension, Karachi, Pakistan</td>
</tr>
<tr>
<td>Lahore</td>
<td>(042) 111 202 202</td>
<td>Maulana Shaukat Ali Rd, Quaid-e-Azam Industrial Estate Kot Lakhpat, Lahore, Punjab</td>
</tr>
<tr>
<td>Islamabad</td>
<td>(051) 111 202 202</td>
<td>Potohar Rd, near Beaconehouse school, I-9/2 I 9/2 I-9, Islamabad</td>
</tr>
<tr>
<td>Peshawar</td>
<td>(021) 111 202 202</td>
<td>Salateen shadi Hall, Saddique Mension Near, Grand Trunk Rd, Zaryab Colony, Peshawar, Khyber Pakhtunkhwa</td>
</tr>
<tr>
<td>Queta</td>
<td>(081) 2863104</td>
<td>6242+XRQ, near saigon cafe, Shehbaz Town Model Town, Quetta, Balochistan</td>
</tr>
<tr>
<td>Multan</td>
<td>(061) 111 202 202</td>
<td>City Plaza, Khanewal Rd, Shamsabad Colony, Multan, Punjab</td>
</tr>
<tr>
<td>Faisalabad</td>
<td>0316 0020518</td>
<td>Saeed Colony Faisalabad, Punjab</td>
</tr>
<tr>
<td>Sargodha</td>
<td>0316 0020209</td>
<td>15 Peer Muhhamad Colony, University Road, Sargodha</td>
</tr>
<tr>
<td>Attock</td>
<td>0316 0020324</td>
<td>VC8M+WP6, MRF Colony, Kamra Kalan, Attock, Punjab</td>
</tr>
<tr>
<td>Nowshera</td>
<td>0316 0020350</td>
<td>3252+5C5, Liaquat Rd, Risalpur, Nowshera, Khyber Pakhtunkhwa</td>
</tr>
<tr>
<td>Haripur</td>
<td>0316 0020312</td>
<td>XWVP+F7F, Pandak, Harīpur, Haripur, Khyber Pakhtunkhwa</td>
</tr>
<tr>
<td>Narowal</td>
<td>0316 0020245</td>
<td>4V5C+QJP, Circular Road, Bypass, near HBL Bank, Abbas Nagar, Zafarwal, Narowal, Punjab</td>
</tr>
<tr>
<td>Bannu</td>
<td>0316 0020348</td>
<td>11,12 Cantt Market Rd, Bannu, Khyber Pakhtunkhwa</td>
</tr>
<tr>
<td>Vehari</td>
<td>0316 0020259</td>
<td>29R2+XHG, Allama Iqbal Road, B Block Vehari, Punjab</td>
</tr>
<tr>
<td>Sahiwal</td>
<td>0316 0020282</td>
<td>J4X4+WWR, Shadab Town, Sahiwal, Sahiwal District, Punjab 57000</td>
</tr>
<tr>
<td>Gilgit</td>
<td>0355 5243244</td>
<td>W8C6+PHH, M&P office, Qalandar Plaza near first women bank, Col Hassan Rd, Gilgit, Gilgit-Baltistan</td>
</tr>
<tr>
<td>Jhelum</td>
<td>0316 0020306</td>
<td>Main Grand Trunk Rd, near Masjid Noor، Jada, Jhelum, Punjab 49600</td>
</tr>
<tr>
<td>Daska</td>
<td>0302 5555008</td>
<td>21 Circular Rd, Habibpura, Daska, Sialkot, Punjab 51010</td>
</tr>
<tr>
<td>Jaranwala</td>
<td>0308 2936216</td>
<td>8CP9+CF4, Mandarwali Gali, Jaranwala, Faisalabad, Punjab</td>
</tr>
<tr>
<td>Jauharabad</td>
<td>0316 0020231</td>
<td>77PM+M46, Dak Khana Rd, Purana Dak Khana, Jauharabad, Khushab, Punjab 41000</td>
</tr>
<tr>
<td>Sialkot</td>
<td>021-111-202-202</td>
<td>Opposite ELC Kids Club School, Capital Road, Rehmatpura, Sialkot</td>
</tr>
<tr>
<td>Lalamusa</td>
<td>0316 0020248</td>
<td>Choudry Plaza, Railway Rd, Karimpura, Lalamusa, Gujrat, Punjab</td>
</tr>
<tr>
<td>Mianwali</td>
<td>0316 0020211</td>
<td>HGMJ+4GQ, Ballo Khel Road, Mianwali, Punjab</td>
</tr>
<tr>
<td>Mandi Bahauddin</td>
<td>(021) 111-202-202</td>
<td>Moza Kandhanwal, Al Rehman Plazza, Mandi Bahauddin Phalia Rd, Kachehri Rd, Shafqat Abad Mandi Bahauddin, Punjab</td>
</tr>
<tr>
<td>Raiwind</td>
<td>0316 0020280</td>
<td>66X6+JGC, Raiwind, Lahore, Punjab</td>
</tr>
<tr>
<td>Sheikhupura</td>
<td>0316 0020279</td>
<td>Service Rd, near Punjab Super Shop, Rehmanpura, Sheikhupura, Punjab 39350</td>
</tr>
<tr>
<td>Gujranwala</td>
<td>0316 0020418</td>
<td>55MM+4HP, Jinnah Road, Civil Lines, Gujranwala, Punjab</td>
</tr>
</tbody>
</table>
<h3>M&P Services Provided</h3>
<ul>
 	<li>➤ M&P Courier</li>
 	<li>➤ M&P Logistics</li>
 	<li>➤ M&P COD</li>
 	<li>➤ M&P Gift Delivery</li>
 	<li>➤ M&P Print & Distribution</li>
</ul>
 
<h3><span id="MP_Courier_rates">M&P Courier rates</span></h3>
<strong><span id="Overnight">Overnight</span></strong>

Next-day delivery service for document and non-document shipments
<figure class="wp-block-table is-style-regular">
<table>
<tbody>
<tr>
<td></td>
<td>Upto 500gms</td>
<td>Upto 1kg</td>
<td>Each additional
1 kg</td>
</tr>
<tr>
<td>Within City</td>
<td>Rs. 100</td>
<td>Rs. 150</td>
<td>Rs. 150</td>
</tr>
<tr>
<td>Same Zone</td>
<td>Rs. 200</td>
<td>Rs. 250</td>
<td>Rs. 250</td>
</tr>
<tr>
<td>Different Zone</td>
<td>Rs. 290</td>
<td>Rs. 340</td>
<td>Rs. 340</td>
</tr>
</tbody>
</table>
</figure>
<strong><span id="Same_Day">Same Day</span></strong>
<figure class="wp-block-table is-style-regular">
<table>
<tbody>
<tr>
<td>Area</td>
<td>Upto 1kg</td>
<td>Each additional
1 kg</td>
</tr>
<tr>
<td>Within City</td>
<td>Rs. 300</td>
<td>Rs. 150</td>
</tr>
<tr>
<td>City to City</td>
<td>Rs. 600</td>
<td>Rs. 200</td>
</tr>
</tbody>
</table>
 </figure>
<h4>COD – Cash on Delivery Service</h4>
COD stands for "Cash on Delivery," which is a payment method used in business and online business where the customer pays for the goods or services when they are delivered instead of before. In a COD transaction, the customer orders a product or service, and the seller sends the product or gives the service to the customer. The customer then gives the person making the delivery the full amount due in cash, a check, or some other way that was agreed upon.

COD is a common way to pay in many countries, especially in emerging markets and online shopping, where customers might not want to pay for something they haven't seen yet. COD can help build trust between the customer and the seller, and it can also be helpful for customers who don't have other ways to pay. You can also track <b><a class="text-primary" href="https://packstrack.com/tcstracking" target="_blank" rel="noopener">TCS Tracking</a></b>

 
<h4><span id="MP_International_Promotional_Rates">M&P International Promotional Rates</span></h4>
 
<table>
<tbody>
<tr>
<td><strong>Weight</strong></td>
<td><strong>UAE</strong></td>
<td><strong>UK</strong></td>
<td><strong>USA</strong></td>
<td><strong>CANADA</strong></td>
<td><strong>JAPAN</strong></td>
<td><strong>CHINA</strong></td>
<td><strong>KUWAIT</strong></td>
<td><strong>QATAR</strong></td>
<td><strong>AUSTRALIA</strong></td>
<td><strong>GERMANY</strong></td>
<td><strong>ITALY</strong></td>
<td><strong>FRANCE</strong></td>
<td><strong>SPAIN</strong></td>
<td><strong>BELGIUM</strong></td>
<td><strong>NETHERLAND</strong></td>
</tr>
<tr>
<td><strong>1 KG</strong></td>
<td>2,250</td>
<td>4,350</td>
<td>7,200</td>
<td>7,200</td>
<td>15,000</td>
<td>9,000</td>
<td>3,800</td>
<td>3,200</td>
<td>8,700</td>
<td>7,300</td>
<td>6,900</td>
<td>7,400</td>
<td>7,400</td>
<td>7,400</td>
<td>7,400</td>
</tr>
<tr>
<td><strong>2 KG</strong></td>
<td>2,900</td>
<td>5,700</td>
<td>8,400</td>
<td>8,400</td>
<td>18,500</td>
<td>9,900</td>
<td>5,340</td>
<td>4,200</td>
<td>11,400</td>
<td>8,400</td>
<td>9,300</td>
<td>10,000</td>
<td>10,000</td>
<td>10,000</td>
<td>10,000</td>
</tr>
<tr>
<td><strong>2-5 KG</strong></td>
<td>4,900</td>
<td>9,800</td>
<td>15,700</td>
<td>15,700</td>
<td>20,000</td>
<td>18,000</td>
<td>9,900</td>
<td>10,000</td>
<td>19,000</td>
<td>10,500</td>
<td>15,900</td>
<td>16,500</td>
<td>16,500</td>
<td>16,500</td>
<td>16,500</td>
</tr>
<tr>
<td><strong>6-10 KG</strong></td>
<td>8,300</td>
<td>16,700</td>
<td>26,400</td>
<td>26,400</td>
<td>30,500</td>
<td>27,800</td>
<td>19,000</td>
<td>17,000</td>
<td>31,000</td>
<td>19,200</td>
<td>24,000</td>
<td>25,200</td>
<td>23,800</td>
<td>23,800</td>
<td>23,800</td>
</tr>
<tr>
<td><strong>11-15 KG</strong></td>
<td>11,800</td>
<td>23,500</td>
<td>36,800</td>
<td>36,800</td>
<td>39,000</td>
<td>38,100</td>
<td>25,200</td>
<td>24,500</td>
<td>44,200</td>
<td>26,800</td>
<td>32,000</td>
<td>33,200</td>
<td>33,200</td>
<td>33,200</td>
<td>33,200</td>
</tr>
<tr>
<td><strong>16-20 KG</strong></td>
<td>15,000</td>
<td>31,900</td>
<td>48,800</td>
<td>48,800</td>
<td>46,500</td>
<td>47,500</td>
<td>32,800</td>
<td>30,000</td>
<td>57,200</td>
<td>32,900</td>
<td>38,000</td>
<td>39,800</td>
<td>39,800</td>
<td>39,800</td>
<td>39,800</td>
</tr>
<tr>
<td><strong>21-25 KG</strong></td>
<td>18,100</td>
<td>36,900</td>
<td>60,500</td>
<td>60,500</td>
<td>48,000</td>
<td>55,100</td>
<td>40,000</td>
<td>35,000</td>
<td>70,200</td>
<td>42,000</td>
<td>48,500</td>
<td>50,500</td>
<td>50,500</td>
<td>50,500</td>
<td>50,500</td>
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