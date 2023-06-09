
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
  <meta name="description" content="Leopard Courier Tracking was established in 1983.  It is a courier company operating mainly in Pakistan.">
<meta name="keywords" content="leopard Tracking, Leopard Courier Tracking, Leopards Courier Service, leopard Tracking Number, LCS Tracking, How To Track Leopards Courier Package Online?">
<meta name="author" content="Packstrack">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/leopardtracking"
  },
  "headline": "Leopard Tracking",
  "description": "eopard Courier Tracking was established in 1983.  It is a courier company operating mainly in Pakistan.",
  "image": "https://packstrack.com/uploaded_files/Add%20a%20heading%20(14)%20(1).webp",  
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
  "datePublished": "2023-01-16",
  "dateModified": "2023-03-03"
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "How do I track my leopard courier shipment?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "First, you have a valid tracking number.
Then Go to LEOPARDS TRACKING.
Enter your tracking Into the search bar and click the track button.
In no time you will know the status of your package."
    }
  },{
    "@type": "Question",
    "name": "How much time does leopard tracking Pakistan take to deliver packages?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The delivery time for Leopard Courier in Pakistan can vary depending on several factors such as the destination, the type of service, the size and weight of the package, and the shipping method chosen. In general, Leopard Courier offers a range of domestic and international delivery options that cater to various delivery needs and budgets. For example, their Express service offers next-day delivery within major cities in Pakistan, while their Economy service can take up to 2-3 business days for delivery. The delivery time for international shipments can vary depending on the destination country, customs clearance, and other factors such as weather or transportation delays. In general, international shipments can take between 2-7 business days for delivery."
    }
  },{
    "@type": "Question",
    "name": "What is the CN number?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "A package's CN number is its unique identifier for monitoring purposes. To check on the delivery's progress and whereabouts at any time, simply enter that number here. Entering the CN number into Leopard Courier's monitoring system will provide you with up-to-date information on the whereabouts of your shipment. The CN number is a nine-digit string of letters and numbers that serves as a unique identifier for your shipment."
    }
  }]
}
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3178647601743652"
     crossorigin="anonymous"></script>
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
        $blogId = "50";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="Leopard Courier Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>leopard Tracking - Track your Parcel</h1>
<div>
<div>

<strong>Leopard Courier Tracking</strong> was established in 1983.  It is a courier company operating mainly in Pakistan. It has more than 1036 offices across Pakistan with 164 major hubs. You can use this service to send and receive parcels, couriers, and other services for our convenience, including enterprise software, educational services, technology software, and more. <strong>LCS tracking</strong> is very easy anyone can track their parcel across the country. We provide various services for our convenience including Enterprise Software Education Services in Technology Software and many more. <strong>Leopard Tracking</strong> is now very easy in Pakistan. If you search for the Leopard field then you have come to the right site. You can track any LCS package using Leopard Courier Tracking ID. If your supplier has sent your parcel, you can check the status of your parcel online on this site.
<h2>Leopard Courier Tracking Online check</h2>
When you use leopard courier tracking to send the package, they will give you a tracking number. With this tracking number or <strong>CN numbe</strong>r, you can find out where your package is and when it will get to you. Here, we'll tell you how to track your leopard courier package online. Here are some easy steps you can follow online to track your package.
<ul>
 	<li>First, you have a tracking number that is given to you by Leopard express tracking.</li>
 	<li>Insert the Tracking ID into the tracker.</li>
 	<li>Then click the track button.</li>
 	<li>Shortly you will know complete details about your package.</li>
 	<li>If your package is going to the wrong address or is lost during transit you can call or message leopard customer service.</li>
 	<li>We will also provide you with the leopard’s contact number and EMAIL.</li>
</ul>
<iframe src="https://www.leopardscourier.com/" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="700px" width="100%" allowfullscreen></iframe>
<h3>leopard Tracking helpline number</h3>
Many people face difficulty tracking their packages and they want to contact leopard tracking with any complaints. We will give leopard customer care number and Gmail.
<table>
<thead>
<tr>
<th>COURIER</th>
<th>CONTACT NUMBER</th>
<th>EMAIL</th>
</tr>
</thead>
<tbody>
<tr>
<td>Leopard Tracking</td>
<td>(021) 111-300-786</td>
<td>customerservice@leopardscourier.com</td>
</tr>
</tbody>
</table>
</div>
<h3>Leopard Courier Tracking</h3>
Leopard is a courier and logistics company. It has provided its services all over Pakistan. And also trying to grow their business in other countries. They also provide their service to Europe countries with the help of big courier companies. FedEx, UPS, USPS, DHL, etc... The Leopard Courier business in Pakistan provides a service called "Leopard Courier tracking," which enables customers to monitor the whereabouts of their packages and parcels while they are in transit. Customers are given access to real-time tracking information for their packages from the time they are picked up until they are delivered.
<div>
<h3>Leopard Courier Tracking Pakistan</h3>
<strong>Leopards Courier Service</strong> is a Pakistani Courier and integrated logistics firm created by Mian Jahangir Shahid in 1983. After migrating to Karachi in the 1970s, Mian Jahangir Shahid worked in various businesses. He began his career in the manufacturing sector where he handled business correspondence due to the lack of a safe and organized courier or mail service. This gave him the idea to start his own delivery and logistics business.  <strong>leopard courier tracking number</strong> started with five locations and currently has thousands of sites in Pakistan and worldwide with delivery vehicles Leopards Courier and Boeing Cargo aircraft. There are relationships. Leopards Courier Service owns multiple storage and fulfillment facilities in Pakistan.
<h4>LCS Tracking After Dispatch</h4>
When people have to leave all their work and come to the reading offices, they have to wait for hours to collect them, yet they have to circle around. People need to ask some simple questions to solve this problem. It was not that easy, LCS planned to run an online system for our convenience. Finally, in 1985, LCS Tracking got facilities like the internet, after which it became more popular than usual, after that many of our problems were solved. Because after the digital system, we can now track the package and know where they are at the moment. It gives a lot of peace of mind whether you have sent him a parcel related to your family's ailments, this is one of the best courier services in Pakistan which is gaining a reputation for getting the job done. You can also track

<b><a class="text-primary" href="https://packstrack.com/tcstracking" target="_blank" rel="noopener">TCS Tracking</a></b>
<h3>leopard Tracking Number</h3>
<strong>LCS serves</strong> every location in Pakistan It is considered to be the most extensive and reliable courier service in Pakistan allowing customers to schedule shipments to any UAE at over 7000 Express Centers in Pakistan. Even better, New Parts offers a free service in which they will come to your home and buy the products for you. leopard tracking pk makes the delivery of your packages or anything else like gifts or documents reliable and fast.
<h4>leopard Courier Near me</h4>
Leopard tracking is the biggest courier company in Pakistan. It gives its services very fast at a very low price. They delivered your package on time. If your package is lost or damaged during transit they offer you a complete refund. Leopard gives his services in every city in Pakistan. They have many cargos and tracks to deliver your package on time. They have many branches and offices all over Pakistan.
<h4>Leopards Courier Charges List</h4>
Below are the rate lists for <b><a class="text-primary" href="https://leopardcouriertracking.com/rates/" target="_blank" rel="noopener">Leopard courier rates</a></b> so you can check them out.
<h4>Leopard Cash on Delivery (C.O.D) Charges:</h4>
<table>
<tbody>
<tr>
<td><strong>Weight</strong></td>
<td><strong>Within City</strong></td>
<td><strong>Same Area</strong></td>
<td><strong>Different Area</strong></td>
</tr>
</tbody>
</table>
<table>
<tbody>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>Up to 500 Grams</td>
<td>Rs.140.00</td>
<td>Rs.200.00</td>
<td>Rs.280.00</td>
</tr>
<tr>
<td>501 Grams to 1 KG</td>
<td>Rs.190.00</td>
<td>Rs.260.00</td>
<td>Rs.340.00</td>
</tr>
<tr>
<td>Each Additional 500 Grams</td>
<td>Rs.95.00</td>
<td>Rs.130.00</td>
<td>Rs.170.00</td>
</tr>
</tbody>
</table>
<h4>Leopard C.O.D Over Land Charges:</h4>
<table>
<tbody>
<tr>
<td><strong>Weight</strong></td>
<td><strong>Weight Within City</strong></td>
<td><strong>Same Area</strong></td>
<td><strong>Different Area</strong></td>
</tr>
</tbody>
</table>
<table>
<tbody>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>Minimum – 10KG</td>
<td>Rs.600.00</td>
<td>Rs.600.00</td>
<td>Rs.600.00</td>
</tr>
<tr>
<td>Each Additional 500 Grams</td>
<td>Rs.60.00</td>
<td>Rs.60.00</td>
<td>Rs.60.00</td>
</tr>
</tbody>
</table>
<h4>C.O.D Economy Charges</h4>
<table>
<tbody>
<tr>
<td><strong>Weight</strong></td>
<td><strong>Within City</strong></td>
<td><strong>Same Area</strong></td>
<td><strong>Different Area</strong></td>
</tr>
</tbody>
</table>
<table>
<tbody>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>Minimum – 10KG</td>
<td>Rs.400.00</td>
<td>Rs.400.00</td>
<td>Rs.400.00</td>
</tr>
<tr>
<td>Each Additional 500 Grams</td>
<td>Rs.80.00</td>
<td>Rs.80.00</td>
<td>Rs.80.00</td>
</tr>
</tbody>
</table>
<h4>COD Leopard Overnight Charges</h4>
<table>
<tbody>
<tr>
<td><strong>Weight</strong></td>
<td><strong>Within in City</strong></td>
<td><strong>Zone A- Major</strong></td>
<td><strong>Zone B- Other</strong></td>
</tr>
</tbody>
</table>
<table>
<tbody>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>Up to 500 Grams</td>
<td>Rs.120.00</td>
<td>Rs.160.00</td>
<td>Rs.180.00</td>
</tr>
<tr>
<td>501 Grams to 1 KG</td>
<td>Rs.150.00</td>
<td>Rs.180.00</td>
<td>Rs.220.00</td>
</tr>
<tr>
<td>Each Additional KG</td>
<td>Rs.120.00</td>
<td>Rs.160.00</td>
<td>Rs.170.00</td>
</tr>
</tbody>
</table>
<h4>Leopard Yellow Box Charges</h4>
<table>
<tbody>
<tr>
<td><strong>Weight</strong></td>
<td><strong>Different Locations</strong></td>
</tr>
</tbody>
</table>
<table>
<tbody>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td>Minimum 1 KG</td>
<td>Rs. 200.00</td>
</tr>
<tr>
<td>25 KG</td>
<td>Rs. 2500.00</td>
</tr>
<tr>
<td>Each Additional 1 KG</td>
<td>Rs. 160</td>
</tr>
</tbody>
</table>
<h4>Leopards Courier Charges List</h4>
Below are the rate lists for <a href="https://leopardcouriertracking.com/rates/"><strong>Leopard courier rates</strong></a> so you can check them out.
<h4>Leopard Cash on Delivery (C.O.D) Charges:</h4>
<table>
<tbody>
<tr>
<td><strong>Weight</strong></td>
<td><strong>Within City</strong></td>
<td><strong>Same Area</strong></td>
<td><strong>Different Area</strong></td>
</tr>
</tbody>
</table>
<table>
<tbody>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>Up to 500 Grams</td>
<td>Rs.140.00</td>
<td>Rs.200.00</td>
<td>Rs.280.00</td>
</tr>
<tr>
<td>501 Grams to 1 KG</td>
<td>Rs.190.00</td>
<td>Rs.260.00</td>
<td>Rs.340.00</td>
</tr>
<tr>
<td>Each Additional 500 Grams</td>
<td>Rs.95.00</td>
<td>Rs.130.00</td>
<td>Rs.170.00</td>
</tr>
</tbody>
</table>
<h4>Leopard C.O.D Over Land Charges:</h4>
<table>
<tbody>
<tr>
<td><strong>Weight</strong></td>
<td><strong>Weight Within City</strong></td>
<td><strong>Same Area</strong></td>
<td><strong>Different Area</strong></td>
</tr>
</tbody>
</table>
<table>
<tbody>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>Minimum – 10KG</td>
<td>Rs.600.00</td>
<td>Rs.600.00</td>
<td>Rs.600.00</td>
</tr>
<tr>
<td>Each Additional 500 Grams</td>
<td>Rs.60.00</td>
<td>Rs.60.00</td>
<td>Rs.60.00</td>
</tr>
</tbody>
</table>
<h4>C.O.D Economy Charges</h4>
<table>
<tbody>
<tr>
<td><strong>Weight</strong></td>
<td><strong>Within City</strong></td>
<td><strong>Same Area</strong></td>
<td><strong>Different Area</strong></td>
</tr>
</tbody>
</table>
<table>
<tbody>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>Minimum – 10KG</td>
<td>Rs.400.00</td>
<td>Rs.400.00</td>
<td>Rs.400.00</td>
</tr>
<tr>
<td>Each Additional 500 Grams</td>
<td>Rs.80.00</td>
<td>Rs.80.00</td>
<td>Rs.80.00</td>
</tr>
</tbody>
</table>
<h4>COD Leopard Overnight Charges</h4>
<table>
<tbody>
<tr>
<td><strong>Weight</strong></td>
<td><strong>Within in City</strong></td>
<td><strong>Zone A- Major</strong></td>
<td><strong>Zone B- Other</strong></td>
</tr>
</tbody>
</table>
<table>
<tbody>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>Up to 500 Grams</td>
<td>Rs.120.00</td>
<td>Rs.160.00</td>
<td>Rs.180.00</td>
</tr>
<tr>
<td>501 Grams to 1 KG</td>
<td>Rs.150.00</td>
<td>Rs.180.00</td>
<td>Rs.220.00</td>
</tr>
<tr>
<td>Each Additional KG</td>
<td>Rs.120.00</td>
<td>Rs.160.00</td>
<td>Rs.170.00</td>
</tr>
</tbody>
</table>
<h4>Leopard Yellow Box Charges</h4>
<table>
<tbody>
<tr>
<td><strong>Weight</strong></td>
<td><strong>Different Locations</strong></td>
</tr>
</tbody>
</table>
<table>
<tbody>
<tr>
<td></td>
<td></td>
</tr>
<tr>
<td>Minimum 1 KG</td>
<td>Rs. 200.00</td>
</tr>
<tr>
<td>25 KG</td>
<td>Rs. 2500.00</td>
</tr>
<tr>
<td>Each Additional 1 KG</td>
<td>Rs. 160</td>
</tr>
</tbody>
</table>
<h4>Leopard Courier Pakistan Branches & Contact Numbers</h4>

<table>
<tbody>
<tr>
<td><strong>CITY</strong></td>
<td><strong>EMAILS</strong></td>
<td><strong>ADDRESS</strong></td>
<td><strong>CONTACT NUMBERS</strong></td>
</tr>
<tr>
<td>Faisalabad</td>
<td>fsd@leopardscourier.com</td>
<td>37-W-1, Madina Town, Faisalabad, Pakistan</td>
<td>+92 041 8732162</td>
</tr>
<tr>
<td>Hyderabad</td>
<td>hyderabad@leopardscourier.com</td>
<td>B-168/A, Block D, Unit No. 7, Latifabad, Hyderabad, Pakistan</td>
<td>+92 022 3817060</td>
</tr>
<tr>
<td>Islamabad</td>
<td>islamabad@leopardscourier.com</td>
<td>Leopards House, Raja Nizam Uddin Road, Iqbal Town, Islamabad, Pakistan</td>
<td>+92 051 2824743 +92 051 2801267</td>
</tr>
<tr>
<td>Karachi</td>
<td>karachi@leopardscourier.com</td>
<td>19-F, Block 6, P.E.C.H.S. Karachi, Karachi, Pakistan</td>
<td>+92 0214548041 +92 0214552376</td>
</tr>
<tr>
<td>Lahore</td>
<td>lahore@leopardscourier.com</td>
<td>20-K Gullberg III, Lahore, Pakistan</td>
<td>+9204235714810 +92 042 5761775</td>
</tr>
<tr>
<td>Multan</td>
<td>mux@leopardscourier.com</td>
<td>516- Railway Road, Near Chowk Aziz Hotel, Multan, Pakistan</td>
<td>+92 0614511434 +92 0614511594</td>
</tr>
<tr>
<td>Peshawar</td>
<td>peshawar@leopardscourier.com</td>
<td>Gul Bahar Main Chowk No.1, Peshawar, Peshawar, Pakistan</td>
<td>+92 0912216450 +92 0912217725 +92 0912217725</td>
</tr>
<tr>
<td>Quetta</td>
<td>quetta@leopardscourier.com</td>
<td>2, Hassan Plaza Patial Bagh, Quetta, Pakistan</td>
<td>+92 0812829250</td>
</tr>
<tr>
<td>Rawalpindi</td>
<td>rawalpindi@leopardscourier.com</td>
<td>Leopards House, N-E 4, Behind Moti Mahal Cinema, Saddar, Rawalpindi, Pakistan</td>
<td>+92 0515500876</td>
</tr>
</tbody>
</table>
<h4>INTERNATIONAL</h4>
<h2><strong> </strong></h2>
<ul>
 	<li><strong><em>DUBAI</em></strong></li>
</ul>
Leopards Courier Services LLC, PLOT 157-0, Warehouse # 5, Lambordia Warehouse Compound, Al Qusais Industrial Area 4th, Dubai, UAE Website: <b><a href="http://leopardsexpress.com/" target="_blank"  class="text-primary">www.leopardsexpress.com</a></b> Contact #: +971-4-600522527
<h2><strong> </strong></h2>
<ul>
 	<li><em><strong>UNITED KINGDOM</strong></em></li>
</ul>
International House 24 Holborn Viaduct, EC1A 2BN United Kingdom Website: <a href="http://leopardsexpress.com/">www.leopardsexpress.com</a> Contact #: (+44) 2084326966
<h3><em><strong>FAQs</strong></em></h3>
<ul>
 	<li>
<div>
<div>
<div>
<div>
<div><em><strong>How do I track my leopard courier shipment?</strong></em></div>
</div>
</div>
</div>
</div>
<div>
<div></div>
</div></li>
</ul>
<ol>
 	<li>First, you have a valid tracking number.</li>
 	<li>Then Go to <a href="https://www.leopardscourier.com/leopards-tracking">LEOPARDS TRACKING</a>.</li>
 	<li>Enter your tracking Into the search bar and click the track button.</li>
 	<li>In no time you will know the status of your package.</li>
</ol>
</div>
</div>
<div><footer>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<ul>
 	<li><em><strong>How much time does leopard tracking Pakistan take to deliver packages?</strong></em></li>
</ul>
</div>
<div></div>
<div>

The delivery time for Leopard Courier in Pakistan can vary depending on several factors such as the destination, the type of service, the size and weight of the package, and the shipping method chosen.

In general, Leopard Courier offers a range of domestic and international delivery options that cater to various delivery needs and budgets. For example, their Express service offers next-day delivery within major cities in Pakistan, while their Economy service can take up to 2-3 business days for delivery.

The delivery time for international shipments can vary depending on the destination country, customs clearance, and other factors such as weather or transportation delays. In general, international shipments can take between 2-7 business days for delivery.

</div>
</div>
</div>
</div>
<div>
<div>
<div>
<ul>
 	<li><em><strong>What is the CN number?</strong></em></li>
</ul>
</div>
<div>
<div>
<div>
<div>A package's CN number is its unique identifier for monitoring purposes. To check on the delivery's progress and whereabouts at any time, simply enter that number here. Entering the CN number into Leopard Courier's monitoring system will provide you with up-to-date information on the whereabouts of your shipment. The CN number is a nine-digit string of letters and numbers that serves as a unique identifier for your shipment.</div>
    
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