
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
  <meta name="description" content="Ecom Express Tracking is an Indian courier company created in 2012 for e-commerce site delivery due to its foundation of the online parcel with its 10 employees">
<meta name="keywords" content="Ecom Express Tracking, Ecom Express Courier Tracking,Ecom express tracking order number, ecom express tracking number">
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
        $blogId = "97";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="Ecom Express Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>Ecom Express Tracking - Track Your Package</h1>
Ecom Express Tracking is an Indian courier company created in 2012 for e-commerce site delivery due to its foundation of the online parcel with its 10 employees. Now they have more than 1000 employees who transfer all the parcels to small groups. This is an Indian courier company providing its services in more than 25000 codes in India. This company provides weekend as well as year-round delivery services which is the reason why people like to order from this and this company then the courier company has also provided cash on delivery facilities and apart from that you can get from them Online payment services you can also be availed.

<iframe style="border: 0px #ffffff none;" src="https://ecomexpress.in/tracking/" name="myiFrame" width="100%" height="500px" frameborder="1" marginwidth="0px" marginheight="0px" scrolling="no" allowfullscreen="allowfullscreen"><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start">﻿</span></iframe>
<h2 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">Ecom Express Courier Tracking</span></h2>
Apart from this, this company also provides facilities like Reverse Logistics if you do not receive a package or your package is late, it also provides you with return and refund facilities. If you have not received your package or received the package late or received a Damage package Then You can Get a Refund it takes some time and there are some things and by following them you can avail of its service.  Ecom Express covers the whole country of India. Badshah Mall North, South, East, Central, West, and North East is Centered in New Delhi Far Hyderabad China Bangalore Kolkata, and Mumbai They offer many different services to meet their e-commerce needs.

 

Allows them to go to the most remote parts of India to deliver packages. They also offer convenience. For example, if you want them to pick up goods from our house and move them from this group to the city, they will do that. Also, if you want 3PL service, they can give you that as well. Speaking of that, I think they offer good quality at a very fair price, which is why it is. It became well-known very quickly.
<h3 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">Ecom express tracking order number</span></h3>
Each package is given a unique code or Unicode, that can be used to track it. When you use a tracking number to track your package anywhere, they give you a tracking number. The order number is linked to the Ecom EXPRESS tracking order number. The customer gets this tracking number so he can keep track of his package. It is directly connected to the company. Find out where your package is and when it will get to you by tracking it. You'll get an email with your Ecom Express tracking number. You can reorder it from the customer support program if you don't get it. This tracking number will be on your invoice if you are shipping something for business. Find out how to track a package online here.

 

<b>Auto Track</b>: If you don't have time to track your package, you don't have time to find out where your package has arrived, American has made the process very simple, called AutoTrack, and you can download the application. You can log into it and On notifications. It will auto-track your package and let you know where your package has reached, is late, or is about to be delivered. Also, you can order items from major companies like eBay, Ali Express, and Negotiable through this Ecom Express Surface Tracking system. Ecom Express Tracking Order also supports multi-language tracking to facilitate communication during delivery in different countries. You can also track <a class="text-primary" href="https://packstrack.com/safexpresstracking" target="_blank" rel="noopener">Safexpress Tracking.</a>
<h3>How to Track Package Through Ecom Express Courier Tracking</h3>
When you order anything online, you are given a unique number by the courier company that is delivered to you, also known as a tracking number, through which you can track your product through tracking. Tracking your product is simple and easy.
<ul>
 	<li>First of all Go To <b><a href="https://ecomexpress.in/tracking/">packstrack.com.</a></b></li>
 	<li>Then Select Ecom Tracking Courier</li>
 	<li>Put Your Ecom Express Tracking Order Number In Search Bar</li>
 	<li>After Some Time Your Tracking Status appears</li>
 	<li>Enjoy.</li>
 	<li>If you have any problem Then You can Contact Customer Support</li>
</ul>
 
<h3>Ecom Express Tracking Contact Number</h3>
If you want to know their service charges you can contact them. here we will give you their contact number and email.
<table>
<tbody>
<tr>
<td><b>Courier</b></td>
<td><b>Contact Number</b></td>
<td><b>Email</b></td>
<td><b>Main Office Address</b></td>
</tr>
<tr>
<td>Ecom Express Tracking</td>
<td>+91-8376888888</td>
<td>customercare@ecomexpress.in</td>
<td>Ground Floor, 13/16 min, 17 min, Samalka, Old Delhi-Gurugram Road, Kapashera, New Delhi – 110037, India</td>
</tr>
</tbody>
</table>
<h3>Ecom Express Tracking</h3>
Here we will tell you the main Branches of Ecom tracking Tracking in India
<table dir="ltr" border="1" cellspacing="0" cellpadding="0"><colgroup> <col width="117" /> <col width="147" /> <col width="320" /></colgroup>
<tbody>
<tr>
<td data-sheets-value="{"><strong>City</strong></td>
<td data-sheets-value="{"><strong>Contact number</strong></td>
<td data-sheets-value="{">Address</td>
</tr>
<tr>
<td data-sheets-value="{">Anantnag</td>
<td data-sheets-value="{" data-sheets-formula="=+918376888888">918376888888</td>
<td data-sheets-value="{">
<div>
<div>Diamond Complex, Near, Jammu and Kashmir, General Bus Stand Rd, Anantnag, 192101</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Agartala</td>
<td></td>
<td data-sheets-value="{">79 Tilla, Agartala, Tripura 799010, India</td>
</tr>
<tr>
<td data-sheets-value="{">Aizawl</td>
<td data-sheets-value="{" data-sheets-formula="=+918131824735">918131824735</td>
<td data-sheets-value="{">
<div>
<div>NH306, Chaltlang, Aizawl, Mizoram 796012, India</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Amritsar</td>
<td data-sheets-value="{" data-sheets-formula="=+919316436940">919316436940</td>
<td data-sheets-value="{">
<div>
<div>Ground Floor, Scf-4, Ranjeet Avenue, D Block Market, Amritsar 143601 – 143601</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Bangalore</td>
<td data-sheets-value="{" data-sheets-formula="=+911130212000">911130212000</td>
<td data-sheets-value="{">
<div>
<div>Ground Floor, 6, Katha No – 144, M.M. Garden, Patel Narayan Ready Layout, 6th Block, Bengaluru, Karnataka 560095, India</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Bhopal</td>
<td data-sheets-value="{" data-sheets-formula="=+917554001020">917554001020</td>
<td axis="" data-sheets-value="{">
<div>
<div>near axis bank, A Sector, Awadhpuri, Bhopal, Madhya Pradesh 462022, India</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Bhubaneswar</td>
<td></td>
<td data-sheets-value="{">
<div>
<div>lot No. -716, Satya Bihar, Bhubaneswar, Odisha 751007, India</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Dimapur</td>
<td data-sheets-value="{" data-sheets-formula="=+919205892755">919205892755</td>
<td data-sheets-value="{">
<div>
<div>Stepping Stones School, NH 36, Duncan Basti Opp, Dimapur, Nagaland 797112, India</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Dehradun</td>
<td></td>
<td data-sheets-value="{">
<div>
<div>EC Road, Irigation Colony, Chironwali, Dehradun, Uttarakhand 248001, India</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Darbhanga</td>
<td data-sheets-value="{" data-sheets-formula="=+918499818512">918499818512</td>
<td data-sheets-value="{">
<div>
<div>Daru Bhatti Chowk, Laheriasarai, Darbhanga – 846001</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Erode</td>
<td data-sheets-value="{" data-sheets-formula="=+917010278704">917010278704</td>
<td data-sheets-value="{">
<div>
<div>No 86/1174, Edayankattu Valasu Main Road, Erode Collectorate, Erode – 638011, Below Store, Municipal Colony</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Guwahati</td>
<td data-sheets-value="{" data-sheets-formula="=+918360005426">918360005426</td>
<td data-sheets-value="{">
<div>
<div>Rukmini Gaon, Guwahati, Assam 781036, India</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Gurgaon</td>
<td data-sheets-value="{" data-sheets-formula="=+918376888888">918376888888</td>
<td data-sheets-value="{">
<div>
<div>10th Floor Ambience Corporate Tower II, Ambience Island, Gurugram, 122001, India</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Gangtok</td>
<td data-sheets-value="{" data-sheets-formula="=+917980269602">917980269602</td>
<td data-sheets-value="{">
<div>
<div>Sichey Barpipul, Sungava, Gangtok 737101, Sikkim, East Sikkim, India</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Goa</td>
<td data-sheets-value="{" data-sheets-formula="=+919793620227">919793620227</td>
<td data-sheets-value="{">
<div>
<div>Unnamed Road, Virnoda – Nagzor, Goa 403512, India</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Hubli</td>
<td></td>
<td data-sheets-value="{">
<div>
<div>Munneshwar Nagar, Hubli, Karnataka 580032, India</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Indore</td>
<td></td>
<td data-sheets-value="{">
<div>
<div>55 Anaj Mandi, nearby ML Tower, Malwa Mill, Indore, Madhya Pradesh 452003, India</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Jodhpur</td>
<td data-sheets-value="{" data-sheets-formula="=+919352894059">919352894059</td>
<td data-sheets-value="{">
<div>
<div>A 76 Akhaliya Vistaar Yojna Jodhpur, Rajisthan</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Jaipur</td>
<td data-sheets-value="{" data-sheets-formula="=+911414038437">911414038437</td>
<td data-sheets-value="{">
<div>
<div>C1-C2, Shopping Centre Rd, Subash Nagar, Shastri Nagar, Jaipur, Rajasthan 302016, India</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Jammu</td>
<td></td>
<td data-sheets-value="{">
<div>
<div>Ground Floor, Shop No. 3/5, Sudan Nagar, Miran Sahib, Miran Sahib, Jammu, Jammu and Kashmir 181101</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Jamshedpur</td>
<td></td>
<td data-sheets-value="{">
<div>
<div>Kailash Tower, Kumar Chowk, Jugsalai, Jamshedpur, Jharkhand 831006, India</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Jorhat</td>
<td data-sheets-value="{" data-sheets-formula="=+918724026994">918724026994</td>
<td data-sheets-value="{">
<div>
<div>A.T Road, A.T Roadchirotia Gaon Road, Jorhat – 785006</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Jalgaon</td>
<td data-sheets-value="{" data-sheets-formula="=+918369890794">918369890794</td>
<td data-sheets-value="{">
<div>
<div>Vastu Plaza Building, Visawa Park, Satara – 415001, Near Bombay Restaurant</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Kakinada</td>
<td data-sheets-value="{" data-sheets-formula="=+9195530900">9195530900</td>
<td data-sheets-value="{">
<div>
<div>First Floor, Door No 2-4-23, Perraju Peta, Anand Theater Back Side, Bhanugudi Junction, Kakinada 533003, Andhra Pradesh – 533003</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Kannur</td>
<td data-sheets-value="{" data-sheets-formula="=+918071107928">918071107928</td>
<td data-sheets-value="{">
<div>
<div>Bus Stop, Ambala Road, Chalad, Kannur, Kerala 670014, India</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Mumbai</td>
<td data-sheets-value="{" data-sheets-formula="=+911130212000">911130212000</td>
<td data-sheets-value="{">
<div>
<div>JMD Plot, Mohili Village Pipeline, Khairani Rd, Sakinaka, Andheri East, Mumbai, Maharashtra 400072, India</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Madurai</td>
<td data-sheets-value="{" data-sheets-formula="=+919976931999">919976931999</td>
<td data-sheets-value="{">
<div>
<div>Plot No 102 Women Park, Kappalur, Madurai – 625008, Industrial Estate, K Pudur</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Mysore</td>
<td data-sheets-value="{" data-sheets-formula="=+918214253377">918214253377</td>
<td data-sheets-value="{">
<div>
<div>No 729/2, Ground Floor, Thyagaraja Road, Kr Mohalla, Mysore – 570004, 3rd Cross,Opposite to SAI Baba Temple</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Nellore</td>
<td></td>
<td data-sheets-value="{">
<div>
<div>Mini Bypass Road, Jyothi Nagar, Nellore, Andhra Pradesh 524004, India</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Pune</td>
<td></td>
<td data-sheets-value="{">
<div>
<div>shop 2, D09, Popular Nagar Rd, Popular Nagar, Giridhar Nagar, Warje, Pune, Maharashtra 411058, India</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Patna</td>
<td data-sheets-value="{" data-sheets-formula="=+918083645324">918083645324</td>
<td data-sheets-value="{">
<div>
<div>Korhar, Maner, Patna, Bihar 801103, India</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Panipat</td>
<td data-sheets-value="{" data-sheets-formula="=+918826398220">918826398220</td>
<td data-sheets-value="{">
<div>
<div>Plot No 84, Huda, Panipat – 132104, Near Sector 25, Phase 2</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Raipur</td>
<td data-sheets-value="{" data-sheets-formula="=+911130212000">911130212000</td>
<td data-sheets-value="{">
<div>
<div>Amanaka, Raipur, Chhattisgarh 492010, India</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Rajkot</td>
<td data-sheets-value="{" data-sheets-formula="=+912812454518">912812454518</td>
<td data-sheets-value="{">
<div>
<div>1 Rajhans Society, Azad Chowk, Nr Sojitra Nagar Raiya Road, Rajkot – 360007 Gujrat</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Ranchi</td>
<td data-sheets-value="{" data-sheets-formula="=+918210520924">918210520924</td>
<td data-sheets-value="{">
<div>
<div>C116, C116, Delatoli, Kadru, Ranchi – 834002</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Srinagar</td>
<td></td>
<td data-sheets-value="{">
<div>
<div>Ground Floor, Shop Number 5, Hajra Complex, Corner Side Madina Market, Baramulla, Srinagar, Jammu and Kashmir 193101</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Surat</td>
<td data-sheets-value="{" data-sheets-formula="=+918866062003">918866062003</td>
<td data-sheets-value="{">
<div>
<div>Surat,, Tirupati Society, Dindoli, Surat, Gujarat 394305, India</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Silchar</td>
<td></td>
<td data-sheets-value="{">
<div>
<div>Panchayat Rd, Das Colony, Tarapur, Silchar, Assam 788005, India</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Tirupur</td>
<td data-sheets-value="{" data-sheets-formula="=+924214333136">924214333136</td>
<td data-sheets-value="{">
<div>
<div>Ground Floor, No.33, Tejas Inc, Police Line, 1 St Street, Court Road, Tirupur – 641 601 – 641601</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Tirupati</td>
<td data-sheets-value="{" data-sheets-formula="=+911130212000">911130212000</td>
<td data-sheets-value="{">
<div>
<div>Ground Floor, 1/40/12, Rc Road, Tirupati Ho, Tirupati – 517501, Majjikalava</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Vijayawada</td>
<td data-sheets-value="{" data-sheets-formula="=+919542665785">919542665785</td>
<td data-sheets-value="{">
<div>
<div>Door No 54-8-80, 1st Floor, Above Ratnam Oils, Beside Sai Hotel, 100 Feet Road, Auto Nagar, Vijayawada – 522002</div>
</div></td>
</tr>
<tr>
<td data-sheets-value="{">Vadodara</td>
<td data-sheets-value="{" data-sheets-formula="=+912656002006">912656002006</td>
<td data-sheets-value="{">
<div>
<div>A – 33/34, Sanket Park Society, Makrand Desai Road, Gotri, Vadodara – 390021, Opposite Iskon Temple</div>
</div></td>
</tr>
</tbody>
</table>
 
<h3>FAQ:</h3>
 
<ul>
 	<li><b>Where can I get tracking for my Ecom Express Tracking order?</b></li>
</ul>
You can find out where your Ecom Express order is by going to https://www.ecomexpress.in/ and clicking on "Track Your Shipment" on the home page. To track your order, you'll need the tracking number, which Ecom Express or the store where you made the purchase should have given you. Enter the tracking number in the space provided and click the "Track" button. Then you'll be able to see where your shipment is right now. If you have more questions or concerns, you can get help from Ecom Express's customer service.
<ul>
 	<li><b>Where can Ecom Express Tracking deliver?</b></li>
</ul>
All over India, Ecom Express delivers packages. They have many places where they can deliver, both in cities and in rural areas. Ecom Express offers delivery services for both domestic and international packages, so people and businesses can get packages from many different places. If you want to know if Ecom Express delivers to a certain place, the best way to find out is to contact the company directly.
<ul>
 	<li><b>How long does it take for Ecom Express Tracking to deliver?</b></li>
</ul>
The time it takes for Ecom Express to deliver depends on a number of things, like where the shipment came from, where it's going, which shipping method was chosen, and if there are any problems with customs or logistics. Most domestic shipments will arrive within 2–7 days, according to Ecom Express. But it's always best to check their website or call Ecom Express customer service to find out how long your shipment is expected to take to arrive. Depending on where the package is going and if there are any problems with customs or logistics, international shipments may take longer. Keep in mind that delivery times are only estimates and could change due to things like bad weather, holidays, or a lot of packages being sent at once.
<ul>
 	<li><b>Is Ecom Express Tracking shipping expensive?</b></li>
</ul>
The cost of shipping with Ecom Express can vary, depending on things like the size and weight of the package, where the shipment is coming from and going, and which shipping method is chosen. Ecom Express offers a variety of shipping options, such as standard and express delivery. Customers can choose the option that best fits their needs and budget. In general, Ecom Express has competitive shipping rates that are made to be both affordable and reliable. You can use the shipping calculator on the Ecom Express website or call customer service for more information on how to get a quote for your shipment.
<ul>
 	<li><b>What is Ecom Express Tracking Shipping Fee?</b></li>
</ul>
The shipping fee for Ecom Express depends on a number of things, like the size and weight of the package, where the shipment is coming from and going, and which shipping method is chosen. You can use the shipping calculator on the Ecom Express website or call customer service to get an accurate quote for your shipment. They can give you a quote that is complete and includes all shipping fees and taxes based on the details of your shipment. Keep in mind that shipping fees can change, so it's best to check with Ecom Express for the most up-to-date pricing information.    
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