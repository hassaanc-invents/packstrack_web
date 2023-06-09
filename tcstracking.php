
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
  <meta name="description" content="TCS tracking is a Pakistan-based courier company. Its services are available in almost every part of Pakistan.">
<meta name="keywords" content="tcs tracking, tcs tracking number, tcs tracking id, tcs tracking pakistan, tcs tracking pk, tcs tracking by mobile number">
<meta name="author" content="Packstrack">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/tcstracking"
  },
  "headline": "TCS Tracking - Track Your Package",
  "description": "TCS tracking is a Pakistan-based courier company. Its services are available in almost every part of Pakistan.",
  "image": "https://packstrack.com/uploaded_files/TCS%20Express%20Tracking%20(1).webp",  
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
  "datePublished": "2023-01-25",
  "dateModified": "2023-03-10"
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "What is the tracking number of TCS?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "TCS (Tranzum Courier Services), which is based in Pakistan, is a courier and logistics company that gives tracking numbers for its shipments. If you sent or are expecting to get a package through TCS, you can find the tracking number on the receipt you got when you sent the package. If you are getting the package, the person who sent it should give you the tracking number. Once you have the tracking number, you can go to the TCS website and put it in the \"Track Shipments\" section to find out where and how your package is doing."
    }
  },{
    "@type": "Question",
    "name": "How long does TCS take to deliver?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "TCS offers a variety of delivery services, such as same-day delivery, next-day delivery, and economy delivery. The distance and other factors can change the estimated delivery times for these services. TCS can deliver local packages within Pakistan the same day to some places and the next day to others. TCS offers both express and economy delivery options for international shipments. Delivery times vary depending on the service chosen and the country where the package is going."
    }
  }]
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
        $blogId = "60";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="TCS Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>TCS Tracking - Track Your Package</h1>
TCS tracking is a Pakistan-based courier company. Its services are available in almost every part of Pakistan. Its services are also available in the southern parts of Pakistan. It has been in business since 1983 and is Pakistan's largest courier service. Tracking a TCS courier is fast and safe. If you live in Pakistan and want to send something to Key, you will definitely use TCS because it is cheap and easy to track.   TCS's Global Positioning Framework is available online for the following Courier details: You don't have to go to TCS locations or call the TCS office to find out where a courier is. TCS Pakistan maintains over a thousand territories around the world, as do its aircraft activities, messages, and convention vehicles.


<h2>How can I track my TCS? | TCS Tracking ID Check Online Pakistan</h2>
<h3></h3>
TCS tracking gives you a tracking number when you send something somewhere. This tracking number tells you everything you need to know about your package. This number can be tracked online. Here are some easy and simple steps. It will tell you simple signs you can use to track your package quickly and easily.
<ul>
 	<li aria-level="1">First, you have a valid tracking number given by <b><a class="text-primary" href="https://www.tcsexpress.com/tracking" target="_blank" rel="noopener">TCS online tracking.</a></b></li>
 	<li aria-level="1">Enter your tracking number into our real-time tracker.</li>
 	<li aria-level="1">Then press the track button.</li>
 	<li aria-level="1">Wait for a second while it is processing.</li>
 	<li aria-level="1">In no time you will see the current status of your package.</li>
 	<li aria-level="1">If you face any problem during tracking your package you can contact the TCS customer support number.</li>
</ul>
 
<h3>TCS tracking by mobile number</h3>
You can also check TCS tracking through a mobile number, you send your tracking number to the TCS contact number, and after a while, they will message you to tell you that your package will reach you if there is any problem. If it comes, you can talk to them on the call.
<h3>TCS Tracking Helpline</h3>
If you have trouble tracking your TCS package, you can call the TCS tracking helpline. If you want to find out how much the cost of their services is or file a complaint, you can call the TCS tracking number. Here, we'll give you the line number so that you can use it.
<table>
<tbody>
<tr>
<td><b>Courier</b></td>
<td><b>Contact Number</b></td>
<td><b>Head office Location</b></td>
</tr>
<tr>
<td>TCS Courier Tracking</td>
<td>92 21 111 123 456</td>
<td>Near Hijaz Hospital, Opp. Eden Towers, Sir Syed Road, Block D1, Gulberg III, Lahore</td>
</tr>
</tbody>
</table>
 
<h3>TCS Tracking Number</h3>
When you ship or send anything via TCS courier tracking, They give a TCS tracking number. This tracking number tells you everything you need to know about your package. This number lets you know where your package is and when it will arrive. You can use the Internet to track this tracking number. Now, we'll tell you how to track your package and find out where it is without wasting your time. You can also track <b><a class="text-primary" href="https://packstrack.com/m&ptracking" target="_blank" rel="noopener">M&P Tracking.</a></b>
<h3>TCS Tracking ID</h3>
TCS delivers Millions of packages every day, so it will give you a TCS Tracking ID so you can find your package. This ID tells you where the box came from. This ID has your service charges and other information written on it, and it also says that you have finished the package. This tracking number is given to you on your receipt or in the email you checked. You can get this tracking number back from the PCS Kia King Customer Support Program if you lose it.
<h3>TCS Tracking Pakistan</h3>
The people of Pakistan gave the TCL tracking Pakistan upgrade as their most valuable asset as a sign of their care and trust. They offer similar services to businesses and are dedicated to making their services more valuable by combining passion and new technology and making their customers' daily lives easier so they can get more done. TCS will improve our ground and air logistics services even more, which will help Pakistan.
<h3>TCS Tracking pk</h3>
TCS Tracking PK offers high quality at a meager price, and they deliver your package with a lot of respect. If your package gets lost or broken, they'll give you your money back. If your package gets to you late for some reason, they will give you the shipping fee back.   TCS was founded in 1983 by Khalid Awan, who is a flight engineer for Pakistan International Airlines PIA, jointly with German courier company DHL.
<h3>TCS Tracking Pakistan Online</h3>
TCS Courier Tracking is one of the most advanced credit ratings in Pakistan. It has improved its system by using the latest technology, so you can send any of your products from home or anywhere else. If your family member lives in another city, you can order anything you need from them. If your family member lives abroad or works in Dubai, you can use their online service. You can use their service. TCS Tracking Pakistan Online will pick up your things in Dubai and safely deliver them to you. You can check online to see if they have done this. It is open to everyone who lives in it. You can also track
<b><a class="text-primary" href="https://packstrack.com/leopardtracking" target="_blank" rel="noopener">leopard Tracking</a>.</b>
<h3>TCS Courier Tracking</h3>
There are many courier companies in Pakistan that can safely move your goods from one place to another. They charge different prices for different distances, but TCS Courier tracking is very popular in Pakistan because it was the first in Pakistan. A Pakistani courier company has been around for a long time and is known for its work. It gets your package to you safely and at the fastest speed. It has different prices for different things. Here, we'll tell you what those prices are so you can use them.
<h3>TCS Courier Price List</h3>
The charges offered by TCS Cargo are really affordable. For instance, the starting pricing for TCS Parcel Rapid is Rs. 250 for a delivery of 1 kg. For a 500 kilogram consignment, TCS logistics company costs begin at Rs. 1000.
<h3>Send Some Day Express Rate List</h3>
<table>
<tbody>
<tr>
<td><b>Weight</b></td>
<td><b>Price</b></td>
<td><b>Each Addl.0.5 KG</b></td>
<td><b>Destination</b></td>
</tr>
<tr>
<td>Up to 1 KG</td>
<td>Rs. 90 to 150</td>
<td>Rs. 35</td>
<td>Within City</td>
</tr>
<tr>
<td>Up to 1 KG</td>
<td>Rs. 350 to 400</td>
<td>Rs. 7</td>
<td>City to City</td>
</tr>
</tbody>
</table>
<h4>Send Extra Special Express Rate List</h4>
<table>
<tbody>
<tr>
<td><b>Weight</b></td>
<td><b>Price</b></td>
<td><b>Each Addl.0.5 KG</b></td>
<td><b>Destination</b></td>
</tr>
<tr>
<td>Up to 1 KG</td>
<td>Rs. 150  to 200</td>
<td>Rs. 45</td>
<td>Within City</td>
</tr>
<tr>
<td>Up to 1 KG</td>
<td>Rs. 400  to 450</td>
<td>Rs. 80</td>
<td>City to City</td>
</tr>
</tbody>
</table>
<h4>Send Over Night Express Rate List</h4>
<table>
<tbody>
<tr>
<td><b>Weight</b></td>
<td><b>Price</b></td>
<td><b>Each Addl.0.5 KG</b></td>
<td><b>Destination</b></td>
</tr>
<tr>
<td>Up to 0.5 KG</td>
<td>Rs. 50  to 60</td>
<td>Rs. 40</td>
<td>Within City</td>
</tr>
<tr>
<td>0.6-1 KG</td>
<td>Rs. 70  to 80</td>
<td>Rs. 40</td>
<td>Within City</td>
</tr>
<tr>
<td>Up to 0.5 KG</td>
<td>Rs. 55</td>
<td>Rs. 50</td>
<td>Same Zone</td>
</tr>
<tr>
<td>0.6-1 KG</td>
<td>Rs. 80</td>
<td>Rs. 50</td>
<td>Same Zone</td>
</tr>
<tr>
<td>Up to 0.5 KG</td>
<td>Rs. 100</td>
<td>Rs. 60</td>
<td>Different  Zone</td>
</tr>
<tr>
<td>0.6-1 KG</td>
<td>Rs. 14</td>
<td>Rs. 60</td>
<td>Different  Zone</td>
</tr>
</tbody>
</table>
<h4>In City TCS Red Box Courier Price List</h4>
<table>
<tbody>
<tr>
<td><b>Weight</b></td>
<td><b>Price</b></td>
</tr>
<tr>
<td>2 KG</td>
<td>RS. 87</td>
</tr>
<tr>
<td>5 KG</td>
<td>RS. 161</td>
</tr>
<tr>
<td>Add KG for 2KG & 5KG</td>
<td>RS. 30</td>
</tr>
<tr>
<td>10 KG</td>
<td>RS. 204</td>
</tr>
<tr>
<td>25 KG</td>
<td>RS. 300</td>
</tr>
<tr>
<td>Addl KG for 10KG & 25KG</td>
<td>RS. 20</td>
</tr>
</tbody>
</table>
<h4>In City Same Zone TCS Red Box Courier Price List</h4>
<table>
<tbody>
<tr>
<td><b>Weight</b></td>
<td><b>Price</b></td>
</tr>
<tr>
<td>2 KG</td>
<td>RS. 126</td>
</tr>
<tr>
<td>5 KG</td>
<td>RS. 213</td>
</tr>
<tr>
<td>Add KG for 2KG & 5KG</td>
<td>RS. 50</td>
</tr>
<tr>
<td>10 KG</td>
<td>RS. 300</td>
</tr>
<tr>
<td>25 KG</td>
<td>RS. 350</td>
</tr>
<tr>
<td>Add KG for 10KG & 25KG</td>
<td>RS. 30</td>
</tr>
</tbody>
</table>
<h4>Outside Of City TCS Red Box Courier Price List</h4>
<table>
<tbody>
<tr>
<td><b>Weight</b></td>
<td><b>Price</b></td>
</tr>
<tr>
<td>2 KG</td>
<td>RS. 152</td>
</tr>
<tr>
<td>5 KG</td>
<td>RS. 326</td>
</tr>
<tr>
<td>Addl KG for 2KG & 5KG</td>
<td>RS. 80</td>
</tr>
<tr>
<td>10 KG</td>
<td>RS. 517</td>
</tr>
<tr>
<td>25 KG</td>
<td>RS. 935</td>
</tr>
<tr>
<td>Addl KG for 10KG & 25KG</td>
<td>RS. 50</td>
</tr>
</tbody>
</table>
<h4>Send Second Day Express Courier Rate List</h4>
<table>
<tbody>
<tr>
<td><b>Weight</b></td>
<td><b>Price</b></td>
<td><b>Each Addl.0.5 KG</b></td>
<td><b>Destination</b></td>
</tr>
<tr>
<td>Up to 3 KG</td>
<td>Rs. 200  to 260</td>
<td>Rs. 70</td>
<td>Within City</td>
</tr>
</tbody>
</table>
<h4>Send Third Day Overland Express Courier Rate List</h4>
<table>
<tbody>
<tr>
<td><b>Weight</b></td>
<td><b>Price</b></td>
<td><b>Each Addl.0.5 KG</b></td>
<td><b>Destination</b></td>
</tr>
<tr>
<td>Up to 10 KG</td>
<td>Rs. 300  to 380</td>
<td>Rs. 70</td>
<td>Within City</td>
</tr>
</tbody>
</table>
<h4>Pakistan to Dubai Send TCS Courier Rates</h4>
<table>
<tbody>
<tr>
<td><b>Weight</b></td>
<td><b>Price</b></td>
</tr>
<tr>
<td>Send Courier</td>
<td>Pakistan to Dubai</td>
</tr>
<tr>
<td>Up to Half KG</td>
<td>Within 13.71 Dollars</td>
</tr>
<tr>
<td>In Addition to Half a KG</td>
<td>2.42 Dollar</td>
</tr>
<tr>
<td>Up to First KG</td>
<td>In 16 Dollar</td>
</tr>
<tr>
<td>In Addition to the Next Half KG</td>
<td>3.23 Dollar</td>
</tr>
</tbody>
</table>
<h4>Dubai to Pakistan Send TCS Courier Rate</h4>
<table>
<tbody>
<tr>
<td><b>Weight</b></td>
<td><b>Price</b></td>
</tr>
<tr>
<td>Send Courier</td>
<td>Dubai to Pakistan</td>
</tr>
<tr>
<td>For Half KG</td>
<td>Within 14.52 Dollars</td>
</tr>
<tr>
<td>In Addition to Half KG</td>
<td>4.84 Dollar</td>
</tr>
<tr>
<td>Up to First KG</td>
<td>In 24.19 Dollar</td>
</tr>
<tr>
<td>In Addition to the Next Half KG</td>
<td>4.84 Dollar</td>
</tr>
</tbody>
</table>
<h4>Charges for TCS Couriers Between Pakistan Towards the USA</h4>
If you really need to order a delivery man, TCS offers delivery companies in Pakistan. You can use these services to deliver your packages from Pakistan to the USA or from the USA to Pakistan.
<table>
<tbody>
<tr>
<td><b>Weight</b></td>
<td><b>Price</b></td>
</tr>
<tr>
<td>1 to 2 KG</td>
<td>15 Dollar</td>
</tr>
<tr>
<td>2  to 5  KG</td>
<td>25 Dollar</td>
</tr>
<tr>
<td>5  to 10 KG</td>
<td>35 Dollar</td>
</tr>
<tr>
<td>10  to 20 KG</td>
<td>50 Dollar</td>
</tr>
<tr>
<td>20 KG</td>
<td>100 Dollar</td>
</tr>
</tbody>
</table>
<h3>TCS Express and Logistics Tracking</h3>
There are always local and international delivery arrangements made by a reputable and top-notch courier service. To ensure punctual transportation and a productive meeting, it's important to have faith in and seek out an organization whose management practices are consistent with those of the Korean people. Tracking TCS is another option for booking group transportation that can be explored when making the initial contact. This is due to the fact that they can view sensitive information concerning their customers. They say it improves the functionality of CS Express and all the registry admin shares they distribute.
<h3>Driving license tracking TCS</h3>
Today, a big part of the country uses free electronic membership to keep track of driving permits. Driving licenses mostly have to do with minute-by-minute management of driving, like tracking and checking drivers' licenses on the web in different parts of the world. In the meantime, some parts of Pakistan also use Mubarak Koi to meet the process and efficiency of previous operations. TCS is taking advantage of this process to satisfy its customers.
<h3>TCS Tracking Lahore Branches list</h3>
Here We will tell you about the branches in TCS Lahore tracking.
<table>
<tbody>
<tr>
<td><b>Name of Branch</b></td>
<td><b>Contact Number</b></td>
<td><b>Location</b></td>
</tr>
<tr>
<td>Allama Iqbal Airport Express Center</td>
<td>0321- 4815943</td>
<td>Level-2, Airport Building, Allama Iqbal International Airport Lahore.</td>
</tr>
<tr>
<td>TCS Garden Town Express Center</td>
<td>042- 35855992</td>
<td>Shop# 1+2, Central Plaza, 1st floor, Near Barkat Market, LHR, Lahore.</td>
</tr>
<tr>
<td>TCS Gulberg Express Center</td>
<td>042- 35755028</td>
<td>58/D-1, Gulberg- III Lahore, Lahore.</td>
</tr>
<tr>
<td>TCS Harbanspura Branch</td>
<td>042- 37161751</td>
<td>Main canal road Harbanspura, Lahore.</td>
</tr>
<tr>
<td>TCS Canal Road Express Center</td>
<td>042- 3593233</td>
<td>Shop # 8, Doghar Market, Canal Road Lahore.</td>
</tr>
</tbody>
</table>
 
<h3>TCS Tracking Karachi Branches list</h3>
Here We will tell you about the branches in TCS Karachi tracking. .
<table>
<tbody>
<tr>
<td><b>Name of Branches</b></td>
<td><b>Contact Number</b></td>
<td><b>Location</b></td>
</tr>
<tr>
<td>Bilawal House Branch</td>
<td>021- 35874500</td>
<td>Shop # g – 19, Bilawal House Block 2, Clifton, Karachi.</td>
</tr>
<tr>
<td>Bahaduarabad Branch</td>
<td>021- 32074794</td>
<td>SHOP # 7, Plot no 24, Jan Center. Bahadurabad Commercial Area, Karachi.</td>
</tr>
<tr>
<td>Baldia Town Branch</td>
<td>0307-2189942</td>
<td>Shop no. 4. Plot no. 130, Sector – 5 j, Saeedabad, 24 ki Market. Baldia Town. Karachi.</td>
</tr>
<tr>
<td>Clifton Branch</td>
<td>021- 35820622</td>
<td>Shop # 5 & 16, Sasi Arcade,block-7, Clifton, Karachi.</td>
</tr>
<tr>
<td>Defense EC. Branch</td>
<td>021- 35314012</td>
<td>81-C, MAIN KORANGI ROAD, DHA, PHASE-II Exit, Karachi.</td>
</tr>
<tr>
<td>Cantt Cargo Branch</td>
<td>021-34283630</td>
<td>Shop # 1 & 2, Plot # 33, Street # cl-8, Near Bombay Hotel, Cantt Station, Karachi.</td>
</tr>
</tbody>
</table>
 
<h4><em>FAQs</em></h4>
<ul>
 	<li><strong>What is the tracking number of TCS?</strong></li>
</ul>
TCS (Tranzum Courier Services), which is based in Pakistan, is a courier and logistics company that gives tracking numbers for its shipments. If you sent or are expecting to get a package through TCS, you can find the tracking number on the receipt you got when you sent the package. If you are getting the package, the person who sent it should give you the tracking number. Once you have the tracking number, you can go to the TCS website and put it in the "Track Shipments" section to find out where and how your package is doing.

 
<ul>
 	<li><strong>How long does TCS take to deliver?</strong></li>
</ul>
TCS offers a variety of delivery services, such as same-day delivery, next-day delivery, and economy delivery. The distance and other factors can change the estimated delivery times for these services. TCS can deliver local packages within Pakistan the same day to some places and the next day to others. TCS offers both express and economy delivery options for international shipments. Delivery times vary depending on the service chosen and the country where the package is going.    
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