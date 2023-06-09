
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
  <meta name="description" content=" V Trans Tracking is one of the best courier companies in India. It is very famous in India. It is a very safe way to ship your order.">
<meta name="keywords" content="V Trans Tracking, V Trans Cargo Tracking, V Trans Transport Tracking, V Trans Tracking Check Online, V Trans Tracking Customer Support Number">
<meta name="author" content="Packstrack">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/vtranstracking"
  },
  "headline": "V Trans Tracking | Track your Package",
  "description": "V Trans Tracking is one of the best courier companies in India. It is very famous in India. It is a very safe way to ship your order.",
  "image": "https://packstrack.com/uploaded_files/V%20Trans%20Tracking%20(1).webp",  
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
  "datePublished": "2023-03-10",
  "dateModified": "2023-03-01"
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "How do I track my V Trans Tracking?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Follow the steps below to find out where your V Trans package is:
Visit the site for V Trans: Go to https://www.vtransgroup.com/ to find out more about V Trans.
Find the option to track: Look on the homepage for a link that says \"Track Your Shipment.\" It is usually on the menu bar at the top.
Type in the details of your shipment: Fill out the tracking form with information about your shipment, such as the consignment number, reference number, or order number.
Click on \"Track Shipment.\" To start tracking, click on the \"Track Shipment\" button.
View the status of the shipment. Once you click the \"Track Shipment\" button, you'll be able to see the current status of your shipment, including where it is, how long it is expected to take to get there, and any new information about it.
If you are having trouble tracking your V Trans shipment or have any other questions about the tracking process, you can contact V Trans customer support for help."
    }
  },{
    "@type": "Question",
    "name": "How to book a shipment on V Trans Tracking?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "V-Trans is an Indian logistics company that helps with things like shipping and moving. Follow these steps to send a package through V-Trans Tracking:
Go to the V-Trans website (www.vtransgroup.com) and click on the \"Login\" button in the top right corner of the page.
If you already have a V-Trans account, enter your user ID and password and click the \"Login\" button. If you don't already have an account, you can make one by clicking \"Register\" and filling in the necessary information.
Click the \"Book a Shipment\" button once you have logged in.
Enter the details of your shipment, such as the origin and destination addresses, the type of shipment (parcel, document, or bulk), the weight and dimensions of the shipment, and any special instructions.
Choose the type of service and the type of transportation (air, sea, road, or rail) (express, standard, or economy).
Choose any extra services you might need, like insurance, packaging, or storage.
Review the details of your shipment and click the \"Book Shipment\" button to confirm your booking.
You will get a confirmation email with the details of your shipment and a tracking number that you can use to track your shipment on the V-Trans website."
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
        $blogId = "37";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1 style="text-align: center;">V Trans Tracking | Track your Package</h1>
<iframe src="https://vtransgroup.com/track-trace/" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="1000px" width="100%" allowfullscreen></iframe>
 
<h2>V Trans Tracking</h2>
V Trans Tracking is one of the best courier companies in India. It is very famous in India. It is a very safe way to ship your order. VTrans Courier Tracking is very fast. V trans has become a brand since 1958. It has caused businesses to change in new ways. The business has grown, the group has diversified, and it has changed from a local player in transport to a single-window logistics provider, but the answer to how to be strong on core values and ethics has not changed at all. It is present in India and in SAARC countries, where it is backed up by modern infrastructure. A passionate team and operations that are driven by technology work together to give our clients the best performance and take their supply chain efficiency to the next level.

 
<h3>V Trans Cargo Tracking</h3>
These are reliable partners for delivering your goods, and they use modern technology to connect nearby places. V Trans Cargo Tracking has staff who have been trained and have a lot of experience in protecting your cargo. They have offices where you can book and pick up orders. We are known for the wide range of services we offer, as well as our flexibility and expertise when it comes to servicing and finding the right solution.

 
<h3>V Trans Transport Tracking</h3>
V Trans also provide V Trans Transport Tracking. They provide transportation facilities for the convenience of people. So that it is easy for them to come and go somewhere. They also give special concessions to Students. They provide free service to the poor. They provide transport in many cities. They have buses for colleges and colleges. You can also track <a class="text-primary" href="https://packstrack.com/rivigotracking" target="_blank" rel="noopener">Rivigo Tracking</a>

 
<h3>V Trans Tracking Check Online</h3>
When you book a ticket for transport or send anything via V Trans Courier Tracking they give you a Tracking Number. You can Track it online. Here We can tell you How can You check Your Package Online. Tracking Number Provide Complete Details About Your Package. Please Follow These Steps:

 
<ul>
 	<li>First, You have a Tracking that is given from <a class="text-primary" href="https://vtransgroup.com/track-trace/" target="_blank" rel="noopener">V trans tracking </a>on your Gmail.</li>
 	<li>Enter Your Tracking In our Real-time tracker.</li>
 	<li>Then Click on the Track button.</li>
 	<li>Wait For a While it would take a few seconds for processing.</li>
 	<li>Soon you will know all about your package.</li>
 	<li>If you face any difficulty or your package is lost during transit you can contact V trans Customer Care.</li>
</ul>
<h3>V Trans Tracking Customer Support Number</h3>
If You want to book a Transport ticket you can contact V Trans Tracking Customer Support Number. If you face any Difficulty you can also contact customer support. If you want to ship your package via V Trans tracking you can contact them and also know their service charges.

Here will Give you v Trans Tracking Customer Support Number and Gmail.

 
<table>
<tbody>
<tr>
<td>Courier</td>
<td>Contact Number</td>
<td>Email</td>
<td>Address</td>
</tr>
<tr>
<td>VTrans Tracking</td>
<td>1800-220180</td>
<td>info@vtransgroup.com</td>
<td>Unit No. 06, Corporate Park, V.N. Purav Marg,

Chembur, Mumbai – 400071</td>
</tr>
</tbody>
</table>
 
<h3>V Trans Tracking Branches in India</h3>
Here you want to know the main branches of V Trans Tracking, Don't worry here we will tell you all details about branches.

 
<table>
<tbody>
<tr>
<td><strong>Branch</strong> <strong> </strong></td>
<td><strong>Contact number</strong></td>
<td><strong>Address</strong></td>
</tr>
<tr>
<td><strong> Ambattur</strong> <strong> </strong></td>
<td></td>
<td></td>
</tr>
<tr>
<td><strong> Chennai</strong> <strong> </strong></td>
<td>+919382935290</td>
<td>42, VILLAGE, Vadakarai, 2, Madhavaram High Rd, Redhills, Chennai, Tamil Nadu 600052, India</td>
</tr>
<tr>
<td><strong> Bhiwandi</strong> <strong> </strong></td>
<td>+912522645213</td>
<td>Val, Bhiwandi, Maharashtra 421302, India</td>
</tr>
<tr>
<td><strong> Bhopal</strong> <strong> </strong></td>
<td>+919300064406</td>
<td>249, C-Sector, Bhel, Bhopal – 462022, Indrapuri</td>
</tr>
<tr>
<td><strong> Coimbatore</strong> <strong> </strong></td>
<td>+919380706670</td>
<td>V-Trans India Ltd NEELAMBUR D. No.140/1, NEAR, NPS Nagar, Neelambur, Coimbatore, Tamil Nadu 641014, India</td>
</tr>
<tr>
<td><strong> Chhatral</strong> <strong> </strong></td>
<td>+912764233830</td>
<td>Kalol-Mehsana Highway,Chhatral, Kadi – Kalol Rd, near N.C.Desai Petrol Pump, Chhatral, Gujarat 382729, India</td>
</tr>
<tr>
<td><strong> Gandhidham</strong> <strong> </strong></td>
<td>+9712578800</td>
<td>Gandhidham, Gujarat 370201, India</td>
</tr>
<tr>
<td><strong> Gurgaon</strong> <strong> </strong></td>
<td>+919357715570</td>
<td>Kataria Ware House, 18th Mile Stone, Khawaspur Bawra, Patodi Road, Gurugram, Haryana 122503, India</td>
</tr>
<tr>
<td><strong> Hyderabad</strong> <strong> </strong></td>
<td>+914023077558</td>
<td> H. No. 5-5-35/153/3, Plot No. 80 Main Road, APIIC Rd, Prashanti Nagar, IE Kukatpally, Hyderabad, Telangana 500072, India</td>
</tr>
<tr>
<td><strong> Hubli</strong> <strong> </strong></td>
<td>+918364251674</td>
<td>M 10, 3rd Cross, 1st Gate, Industrial Estate, Gokul Road, Hubli, Karnataka 580030, India</td>
</tr>
<tr>
<td><strong> Jaipur</strong> <strong> </strong></td>
<td>+919024073310</td>
<td>Near Milan Cinema, Ajmer Delhi Bye Pass, Opposite. Road No.14, Vishwakarma Industrial Area, Jaipur – 302013</td>
</tr>
<tr>
<td><strong> Jodhpur</strong> <strong> </strong></td>
<td>+917228059328</td>
<td>Plot No 65 Transport Nagar Basni 2nd Phase Jodhpur Rajasthan
Jodhpur  ( Rajasthan ),   342005 India</td>
</tr>
<tr>
<td><strong> Kathwada</strong> <strong> </strong></td>
<td>+919328270728</td>
<td>V-Trans, SHOP NO.4,SHIV ESTATE,PLOT NO 558.NEAR VAMATEX MACHINERY OPP.ROAD NO.9/10, Kathwada GIDC, Kathwada, Gujarat 382415, India</td>
</tr>
<tr>
<td><strong> Kanpur</strong> <strong> </strong></td>
<td></td>
<td>SHESHNAG BUILDING, MAIN ROAD, O Block, Kidwai Nagar, Kanpur, Uttar Pradesh 208011, India</td>
</tr>
<tr>
<td><strong> Kalamboli</strong> <strong> </strong></td>
<td>+912227420793</td>
<td>Industrial Area, Kalamboli, Panvel, Navi Mumbai, Maharashtra 410218, India</td>
</tr>
<tr>
<td><strong> Ludhiana</strong> <strong> </strong></td>
<td>+919356658295</td>
<td>TRAFFIC LIGHT, BETWEEN, PLOT NO. 15/A, near GATE NO,5, Transport Nagar Samrala, Ludhiana, Punjab 141003, India</td>
</tr>
<tr>
<td><strong> Mumbai</strong> <strong> </strong></td>
<td>+912223713933</td>
<td> 99/101, Keshavji Naik Road, New Chinchbunder, Mumbai, Maharashtra 400009, India</td>
</tr>
<tr>
<td><strong> Mysore</strong> <strong> </strong></td>
<td>+918213294806</td>
<td>No 2203/05, B/H RMC Office, Sheshadri Iyer Road, Mysuru, Karnataka 570001, India</td>
</tr>
<tr>
<td><strong> Nashik</strong> <strong> </strong></td>
<td>+912532354771</td>
<td>NICE Area, MIDC, Parijat Nagar, Nashik, Maharashtra 422007, India</td>
</tr>
<tr>
<td><strong> Naroda</strong> <strong> </strong></td>
<td>+917922811215</td>
<td>79/1 Phase 2, , Nr Modern Bakery Cross Road
Naroda Gidc,
Ahmedabad – 382330
Gujarat</td>
</tr>
<tr>
<td><strong> Pune</strong> <strong> </strong></td>
<td>+911800220180</td>
<td>Pune, Maharashtra 412308, India</td>
</tr>
<tr>
<td><strong> Peenya</strong> <strong> </strong></td>
<td>+917483225582</td>
<td>NO. 554 A, 4TH PHASE, near SUB REGISTER OFFICE, Peenya, Bengaluru, Karnataka 560058, India</td>
</tr>
<tr>
<td><strong> Rajkot</strong> <strong> </strong></td>
<td>+919376902725</td>
<td>Vavdi, Rajkot, Gujarat 360004, India</td>
</tr>
<tr>
<td><strong> Sarkhej</strong> <strong> </strong></td>
<td>+917926891731</td>
<td>18/20 Prime Estate, Sarkhej Bavla Road, B/H Ekta Hotel
Sarkhej,
Ahmedabad – 382210
Gujarat</td>
</tr>
<tr>
<td><strong> Surat</strong> <strong> </strong></td>
<td>+919374681312</td>
<td>Godown No. 1-3, Behind Shivam Hospital, Surat – Palsana, Gujarat 394315, India</td>
</tr>
<tr>
<td><strong> Thane</strong> <strong> </strong></td>
<td>+918169686048</td>
<td>PLOT NO A-14 GALA NO G-5 SIDDHI INDUSTRIAL PLAZA PADWAL NAGAR WAGLE IND ESTATE THANE WEST 400604, Thane, Maharashtra 400604, India</td>
</tr>
<tr>
<td><strong> Udaipur</strong> <strong> </strong></td>
<td>+917228954683</td>
<td>Udai Sagar Rd, Opp. FCI Godown, near Aakashwani, U.L.T.Colony, Udaipur, Rajasthan 313001, India</td>
</tr>
</tbody>
</table>
 
<h3>FAQs</h3>
<ul>
 	<li><strong>How do I track my V Trans Tracking?</strong></li>
</ul>
 

Follow the steps below to find out where your V Trans package is:
<ol>
 	<li>Visit the site for V Trans: Go to https://www.vtransgroup.com/ to find out more about V Trans.</li>
 	<li>Find the option to track: Look on the homepage for a link that says "Track Your Shipment." It is usually on the menu bar at the top.</li>
 	<li>Type in the details of your shipment: Fill out the tracking form with information about your shipment, such as the consignment number, reference number, or order number.</li>
 	<li>Click on "Track Shipment." To start tracking, click on the "Track Shipment" button.</li>
 	<li>View the status of the shipment. Once you click the "Track Shipment" button, you'll be able to see the current status of your shipment, including where it is, how long it is expected to take to get there, and any new information about it.</li>
 	<li>If you are having trouble tracking your V Trans shipment or have any other questions about the tracking process, you can contact V Trans customer support for help.</li>
</ol>
<ul>
 	<li><strong>How to book a shipment on V Trans Tracking?</strong></li>
</ul>
V-Trans is an Indian logistics company that helps with things like shipping and moving. Follow these steps to send a package through V-Trans Tracking:
<ol>
 	<li>Go to the V-Trans website (www.vtransgroup.com) and click on the "Login" button in the top right corner of the page.</li>
 	<li>If you already have a V-Trans account, enter your user ID and password and click the "Login" button. If you don't already have an account, you can make one by clicking "Register" and filling in the necessary information.</li>
 	<li>Click the "Book a Shipment" button once you have logged in.</li>
 	<li>Enter the details of your shipment, such as the origin and destination addresses, the type of shipment (parcel, document, or bulk), the weight and dimensions of the shipment, and any special instructions.</li>
 	<li>Choose the type of service and the type of transportation (air, sea, road, or rail) (express, standard, or economy).</li>
 	<li>Choose any extra services you might need, like insurance, packaging, or storage.</li>
 	<li>Review the details of your shipment and click the "Book Shipment" button to confirm your booking.</li>
 	<li>You will get a confirmation email with the details of your shipment and a tracking number that you can use to track your shipment on the V-Trans website.</li>
</ol>    
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