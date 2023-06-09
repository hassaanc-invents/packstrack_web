
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
  <meta name="description" content=" The Director of Ondot courier and cargo LTD is Lata Sinha, while the managing director is Mr. Jugnu Jayant.">
<meta name="keywords" content=" Ondot Courier Tracking
, Ondot Courier Tracking Check Online, Ondot Courier Tracking Customer Support, www Ondot Info Courier Tracking">
<meta name="author" content="Packstrack">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/ondotcouriertracking"
  },
  "headline": "Ondot Courier Tracking | Track your Package",
  "description": "The Director of Ondot courier and cargo LTD is Lata Sinha, while the managing director is Mr. Jugnu Jayant. Ashish Pate is a regional director, and Sanjeev Kumar is a regional manager.",
  "image": "https://packstrack.com/uploaded_files/Ondot%20v%20(1).webp",  
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
  "datePublished": "2023-01-02",
  "dateModified": "2023-02-27"
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
        $blogId = "26";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="Ondot Courier Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1 style="text-align: center;">Ondot Courier Tracking | Track your Package</h1>
 

 

 

 

 
<h2>Ondot Courier Tracking</h2>
The Director of Ondot courier and cargo LTD is Lata Sinha, while the managing director is Mr. Jugnu Jayant. Ashish Pate is a regional director, and Sanjeev Kumar is a regional manager. In terms of finances and accounts, Alok Parkash is in charge. Mr. Anil Sharma is in charge of quality control. Roughly 10,000 people are always on the clock for us.   All hours of the day and night, they have over 10,000 workers. Ondot Courier Tracking is a logistics firm founded in 2019 with headquarters in Delhi, and we're here to help you. It's useful for tracking everything from envelopes to aircraft. They are doing my work for me.
<h3>Ondot Courier Tracking Check Online</h3>
When you ship anything via Ondot tracking they give you a tracking number. This tracking number contains all the details about your package you can track it online. Here we will guide you on how to track Ondot tracking online. Please follow these steps.
<ul>
 	<li aria-level="1">First, you have a valid tracking number.</li>
 	<li aria-level="1">Enter your AWB number into the search bar.</li>
 	<li aria-level="1">Then click the <b><a class="text-primary" href="http://ondotcouriers.co.in/tracking.aspx" target="_blank" rel="noopener">"Track Button"</a></b> to track your package.</li>
 	<li aria-level="1">In no time you will know about your package's current status.</li>
 	<li aria-level="1">If you face any difficulty you can contact Ondot customer support.</li>
</ul>
<h3>Ondot Courier Tracking Customer Support</h3>
If you face any problem while tracking the package or want to know the delivery charges from them then you can contact them here will give you their contact number and email so that you can contact them.
<table>
<tbody>
<tr>
<td><b>Courier</b></td>
<td><b>Contact Number</b></td>
<td><b>Email</b></td>
<td><b>Main Office Address</b></td>
</tr>
<tr>
<td>Ondot Courier Tracking</td>
<td>+91-11-41101515</td>
<td>customercare@ondotexp.com</td>
<td>36 DLF Industrial Area, 2nd Floor, Opp. Fun Cinema, Moti Nagar, New Delhi 110015</td>
</tr>
</tbody>
</table>
<h3>www Ondot Info Courier Tracking</h3>
Their services are very fast and secure, they respond to the customer's requests in domestic and worldwide delivery and they give their services at very inexpensive rates. These provide a proper infrastructure that all 4000 booking centers work for support fifty regional offices and one hundred and fifty branch offices that manage the entire system infrastructure making proper faster way through which notices are more efficient.    Ondot delivery is an international and domestic shipping service that provides tracking and delivery status updates. It offers cost-effective and fast couriers through its nationwide all-India network and specializes in providing speed and instant delivery of documents to India Cell, metric class as well as to the deepest darkness of cities and villages from our mustache. When it comes to national and global corporate fleets, we are the go-to courier because of our competitive pricing and individualized service. You can also track <a class="text-success text-decoration-none" href="https://packstrack.com/vrltracking" target="_blank" rel="noopener"><strong>VRL Tracking</strong></a>
<h3>Ondot courier online tracking</h3>
Ondot courier online tracking is gearing up to provide exclusive services to its customers on the go and has rapidly become the most cost-effective and widely available courier service in India. Increase both in customer base and range of offerings. Established in 2019, with headquarters in Delhi, ondot info courier tracking was founded with the goal of providing low-cost, lightning-fast delivery to both consumers and businesses. Therefore, Inroad has reached numerous landmarks and is well on its way to achieving even more of them; it is now among the fastest-growing couriers and couriers in India and ranks among the country's top ten. Included in the group of courier services
<h3>Ondot courier tracking shipway</h3>
With over 4,000 booking center offices and the efficient operation of over 150 branch offices across the road network, Ondot courier tracking shipway has built a network that responds to the evolving needs of our clients. This network is coordinated from 15 highly sophisticated regional offices. has more help to provide, and it has proven time and time again that it has a special knack for coordinating services for the transportation system and the police force. You can also track <a class="text-success text-decoration-none" href="https://packstrack.com/gmscouriertracking" target="_blank" rel="noopener"><strong>GMS Courier Tracking</strong></a>
<h3>Ondot Courier Branch List</h3>
Here we will tell you the branches Of Ondot courier tracking.
<table>
<tbody>
<tr>
<td><b>Branch</b></td>
<td><b>Contact number</b></td>
<td><b>Address</b></td>
</tr>
<tr>
<td>Mumbai</td>
<td>91 22 2290 8976</td>
<td>Mahadev Darshan Building, Opp. Jeevan Vikas Hospital, Jeevan Vikas Kendra Marg, Koldongri, Andheri East, Mumbai, Maharashtra 400069, India</td>
</tr>
<tr>
<td>Raipur</td>
<td>771 4004544 +91 9302938319</td>
<td>106 ESSKAY PLAZA Near Anand TALKIES, Moudhapara, Moudhapara, Raipur-Chhattisgarh – 492001, Near Anand TALKIES</td>
</tr>
<tr>
<td>Udaipur</td>
<td>91 98299 64708</td>
<td>19 Mastana Pan Gali, Delhi Gate Cir, Udaipur, Rajasthan 313001, India</td>
</tr>
<tr>
<td>Vadodara</td>
<td>91 265 232 6790</td>
<td>Windsor Plaza, GF-2, RC Dutt Rd, Aradhana Society, Vishwas Colony, Alkapuri, Vadodara, Gujarat 390007, India</td>
</tr>
<tr>
<td>Delhi</td>
<td>91 11 4160 6570</td>
<td>Eros Apartments, 56, 203B, Nehru Place, New Delhi, Delhi 110019, India</td>
</tr>
<tr>
<td>Egmore</td>
<td>044 43180066 044 43180077 044 42638482</td>
<td>No 37, Ganesh Travels Building, Ground Floor, PCO Road, Egmore, Chennai – 600008, Near Egmore Railway Station n</td>
</tr>
<tr>
<td>Ernakulum</td>
<td>91 94474 64909</td>
<td>Pullepady Cross Rd, North Ernakulam, Pullepady, Kochi, Kerala 682018, India</td>
</tr>
<tr>
<td>Faridabad</td>
<td>91 129 487 4614</td>
<td>B-322 Nehru Ground, Nit, Opp. Punjab National Bank, New Industrial Town, Faridabad, Haryana 122001, India</td>
</tr>
<tr>
<td>Gurgaon</td>
<td>91 98183 94361</td>
<td>New Palam Vihar, Choma Phatak, Bajghera Road, Gurugram, Haryana 122017, India</td>
</tr>
<tr>
<td>Guwahati</td>
<td>361 2450957 / 9957105080 / 8011222110</td>
<td>G S Road, Bharalupar, Guwahati – 781007</td>
</tr>
<tr>
<td>Hyderabad</td>
<td>91 96424 02954</td>
<td>Kukatpally Housing Board Colony, Kukatpally, Hyderabad, Telangana 500072, India</td>
</tr>
<tr>
<td>Jaipur</td>
<td>91 98287 49789</td>
<td>Shop no 24, Nursery Cir, Block A, Vaishali Nagar, Jaipur, Rajasthan 302001, India</td>
</tr>
<tr>
<td>Kolkata</td>
<td>91 33 2585 3047</td>
<td>118, Selimpur Rd, Dhakuria, Selimpur, Kolkata, West Bengal 700031, India</td>
</tr>
<tr>
<td>Lucknow</td>
<td>7651911937 / 7054200530 / 9935390927</td>
<td>C-28, Under Ground Floor, Kulbhasker Complex, Latouche Road, Lucknow – 226002</td>
</tr>
<tr>
<td>Ludhiana</td>
<td>91 161 464 3097</td>
<td>Vishwakarma Chowk, Sant Pura, Miller Ganj, Ludhiana, Punjab 141003, India</td>
</tr>
<tr>
<td>Amritsar</td>
<td>91 97802 03013</td>
<td>Bhatia market, near bus stand, opp. conference hall, Amritsar, Punjab 143001, India</td>
</tr>
<tr>
<td>Bathinda</td>
<td>0164-2255407 / 164 3090977 / 9915570004</td>
<td>Near SK Gupta Skin Doctor, Santpura Road, Bhatinda – 151001</td>
</tr>
<tr>
<td>Bhopal</td>
<td>755 4252580 755 4030614 +91 9926383825 +91 9300001188</td>
<td>Plot No 137, Zone II, M P Nagar, Bhopal – 462011, Opp Vikramaditya College</td>
</tr>
<tr>
<td>Bhiwandi</td>
<td>7947179822</td>
<td>201 Sagar Residency Anand Nagar, G B Road, Kasarvadavali, Thane – 400615, Behind Royal Plaza Hotel</td>
</tr>
<tr>
<td>Bangalore</td>
<td>91 92415 07246</td>
<td>103, 5th Main,, 2nd Cross, B.T.M 2nd Stage, Bengaluru, Karnataka 560076, India</td>
</tr>
<tr>
<td>Chennai</td>
<td>91 44 2538 2974</td>
<td>1, Potters St, Periyapet, Saidapet, Chennai, Tamil Nadu 600015, India</td>
</tr>
</tbody>
</table>
<h3>Company Details</h3>
<table>
<tbody>
<tr>
<td><strong>Company shares</strong></td>
<td>Private Limited</td>
</tr>
<tr>
<td><b>Booking centers</b></td>
<td>400+</td>
</tr>
<tr>
<td><b>Zonal offices</b></td>
<td>4</td>
</tr>
<tr>
<td><b>Regional offices</b></td>
<td>15</td>
</tr>
<tr>
<td><b>Branch offices</b></td>
<td>150</td>
</tr>
<tr>
<td><b>Senior management personnel</b></td>
<td>250</td>
</tr>
<tr>
<td><b>Workers</b></td>
<td>10,000</td>
</tr>
</tbody>
</table>
<h3>Services</h3>
<ul>
 	<li aria-level="1">Pickup service across India</li>
 	<li aria-level="1">Delivery by express</li>
 	<li aria-level="1">A nationwide delivery service for small parcels up to 3 kg in weight</li>
 	<li aria-level="1">International express parcel services</li>
 	<li aria-level="1">Cargo service for heavy shipment</li>
 	<li aria-level="1">From remote parts of the country, reverse logistics can be performed</li>
 	<li aria-level="1">Cash on Delivery</li>
 	<li aria-level="1">Department of Defense</li>
</ul>    
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