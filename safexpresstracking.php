
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
  <meta name="description" content="Safexpress Tracking was founded in 1997 with a singular goal: to deliver top-tier logistics services to its clients and ensure their success.">
<meta name="keywords" content="Safexpress Tracking, Safexpress Courier Tracking, Safexpress Tracking Number, Safexpress Tracking Contact Number">
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
        $blogId = "91";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="Safexpress Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>Safexpress Tracking - Track Shipment</h1>
Safexpress Tracking was founded in 1997 with a singular goal: to deliver top-tier logistics services to its clients and ensure their success. Since then, the company has established itself as the unrivaled leader in the supply chain and logistics industry in India, boasting unparalleled knowledge and market expertise. With a comprehensive range of innovative supply chain services, including Express Distribution, 3PL, and Consulting, Safexpress provides value-added logistics solutions to nine distinct business verticals, including Apparel & Lifestyle, E-commerce, Healthcare, Hi-Tech, Publishing, Automotive, Engineering & Electrical Hardware, FMCG & Consumer Electronics, and Institutional.

Safexpress's state-of-the-art logistics solutions enable its clients to concentrate on their core competencies, while the company's world-class warehousing and time-definite delivery services help businesses maximize their value at every level. Overall, Safexpress is dedicated to providing logistics excellence to its customers and ensuring their success in every way possible.
<h3></h3>
<h2>Safexpress Courier Tracking</h2>
The expansion of their service area to nearly all of India has contributed to their success. Every major city has one of its warehouses. It services over 32000 pin codes throughout India. You can use its convenient online booking and pickup system. As the name implies, they employ highly trained professionals who carefully handle your package before ensuring its prompt delivery.
<h3></h3>
<h3>Safexpress Tracking Number</h3>
<h3></h3>
Each package is given a special number called a tracking number to keep tabs on its whereabouts. When you receive your package or any of your stock, you'll notice a series of letters and numbers on the outside of the box or certificate. When the business is ready to send it out, you will be given a tracking number. This number is emailed to you as a tracking reference. A package number will be assigned to your bill if you decide to use this service. Using this tracking number, you can find out exactly where your package is at any given time. Within this article, you will learn all there is to know about the parcel tracking procedure.  You may also like <b><a class="text-primary" href="https://packstrack.com/omlogistics" target="_blank" rel="noopener">Om Logistics</a>.</b>
<h3></h3>
<h3>How to track Safexpress Tracking Online</h3>
<h3></h3>
You've come to the right place if you're looking for information on how to track your package, as we'll be sharing a quick and easy method with you. Just do what it says.
<h3></h3>
<ul>
 	<li aria-level="1">First, you have a valid <b><a class="text-primary" href="http://www.safexpress.com/Portal/faces/TrackShipment.jspx;portalCookie=GXP0kvKGHfzn28vBR9hN1XFjHfGLd9SKYnMGQ6GFWn0fnyNVL1KZ!737198023?_afrLoop=21334782298046132&_afrWindowMode=0&_afrWindowId=null&_adf.ctrl-state=nxdatq996_1#!%40%40%3F_afrWindowMode%3D0%26_afrLoop%3D21334782298046132%26_afrWindowId%3Dnull%26_adf.ctrl-state%3Dnxdatq996_5" target="_blank" rel="noopener">tracking number.</a></b></li>
 	<li aria-level="1">Then enter your tracking number into the search bar.</li>
 	<li aria-level="1">Then press the Track button.</li>
 	<li aria-level="1">Please wait for a moment while it is processing.</li>
 	<li aria-level="1">In no time you will see the current status of your package.</li>
 	<li aria-level="1">If you face any problem you can contact the Safexpress customer support number.</li>
</ul>
<div class="wrapper d-flex align-items-stretch">
<div id="content" class="">
<div class="d-flex">
<div class="p-lg-3 p-sm-5">
<h3>Safexpress Tracking Contact Number</h3>
<h3></h3>
If you have any questions and want to know their service charges you can contact Safexpress Tracking Contact Number. Here we will give you their contact number and email.
<h3></h3>
<table>
<tbody>
<tr>
<td><b>Courier</b></td>
<td><b>Contact Number</b></td>
<td><b>Email</b></td>
<td><b>Main Office Address</b></td>
</tr>
<tr>
<td>Safexpess Tracking</td>
<td>1800 113 113</td>
<td>track@safexpress.com</td>
<td>NH 8, Block B, Mahipalpur Extension, Mahipalpur, New Delhi, Delhi</td>
</tr>
</tbody>
</table>
<h3></h3>
<h3>Safexpress Branches</h3>
<h3></h3>
<table>
<tbody>
<tr>
<td><b>Branch</b></td>
<td><b>Contact number</b></td>
<td><b>Address</b></td>
</tr>
<tr>
<td>Agra</td>
<td>919311113113</td>
<td>SAFEXPRESS LOGISTICS PARK AGRA-DELHI NH-2 KEETHAM AGRA – 282007 UTTAR PRADESH</td>
</tr>
<tr>
<td>Ahmedabad</td>
<td>919587042001</td>
<td>Galaxy Bazar, Gurukul, Ahmedabad, Gujarat 380052, India</td>
</tr>
<tr>
<td>Allahabad</td>
<td>9105322230750</td>
<td>Sayed Serawan, Manauri Af, Allahabad – 212212, Manauri Airforce Station</td>
</tr>
<tr>
<td>Ambala</td>
<td>911800113113</td>
<td>NH-73, SHAHABAD-SAHA ROAD, Shahbad, Haryana 136135, India</td>
</tr>
<tr>
<td>Bhopal</td>
<td>919285105652</td>
<td>Adhishware Housing Complex, National Highway 86, Raisen Road, Bhopal – 462022, Near Lnct College</td>
</tr>
<tr>
<td>Bhiwandi</td>
<td>911800113113</td>
<td>Thane – Bhiwandi Rd, Opposite Rajlaxmi compound tulsi bhai Tare building gala no 2, Swaraj Nagar, Puranik Villas, Kalher, Bhiwandi, Maharashtra 421302, India</td>
</tr>
<tr>
<td>Bangalore</td>
<td></td>
<td>SAFEXPRESS LOGISTICS PARK RAMASANDRA, NARASPURA HOBLI DIST. & TALUK – KOLAR BANGALORE</td>
</tr>
<tr>
<td>Bhubaneswar</td>
<td>918918316717</td>
<td>SAFEXPRESS LOGISTICS PARK PLOT NO-B/1/A, B2,B3, FOOD PROCESSING PARK KHURDA INDUSTRIAL ESTATE, DIST.-KHURDA BHUBANESHWAR</td>
</tr>
<tr>
<td>Chennai</td>
<td>919345356667</td>
<td>1/1, Muthu Gramani Street, Periyamet, Opposite Periamet Police Station, Chennai, Tamil Nadu 600007, India</td>
</tr>
<tr>
<td>Coimbatore</td>
<td>919360669763</td>
<td>23 Spk Building Avinashi Civil Road Goldwins Aerodrome, Coimbatore-641014, Tamil Nadu, India</td>
</tr>
<tr>
<td>Chandigarh</td>
<td>1838673682586</td>
<td>SAFEXPRESS LOGISTICS PARK VILLAGE-DARIA MAKHAN MAJRA ROAD CHANDIGARH – 160101 CHANDIGARH</td>
</tr>
<tr>
<td>Delhi</td>
<td>911800113113</td>
<td>NH 8, Block B, Mahipalpur Extension, Mahipalpur, New Delhi, Delh</td>
</tr>
<tr>
<td>Dehradun</td>
<td>919368888414</td>
<td>NH 72A, Mohabbewala, Dehradun, Uttarakhand 248001, India</td>
</tr>
<tr>
<td>Dhanbad</td>
<td>911143113113</td>
<td>SAFEXPRESS CENTRE NEAR COLD STORAGE, BARA JAMUA NH-2, LOHAR BARWA, BARWADDA DHANBAD – 826001 JHARKHAND</td>
</tr>
<tr>
<td>Faridabad</td>
<td>919555725557</td>
<td>G-29, DLF CENTER POINT, GROUND FLOOR, Mathura Rd, Sector 11C, Faridabad, Haryana 121006, India</td>
</tr>
<tr>
<td>Gorakhpur</td>
<td>917499991040</td>
<td>SAFEXPRESS LOGISTICS PARK VILLAGE KOLIYA, BEHIND BPCL PETROL PUMP NEAR MRF TYRE GODOWN, LUCKNOW HIGHWAY GORAKHPUR</td>
</tr>
<tr>
<td>Gurgaon</td>
<td>918383069500</td>
<td>Shop No. 4, Deep Plaza Complex, Near Rajeev Chowk, Sohna Road, Gurugram, Haryana 122001, India</td>
</tr>
<tr>
<td>Guwahati</td>
<td>918811037322</td>
<td>SAFEXPRESS LOGISTICS PARK OPP. ARMY CAMP CHANGSARI, KAMRUP RURAL, NH-31 GUWAHATI – 781007 ASSAM</td>
</tr>
<tr>
<td>Hyderabad</td>
<td>919315465977</td>
<td>Safex Cargo Complex, Old Bowenpally Check Post, Secunderabad, Hyderabad – 500003, Opp Hotel Priyadarshini</td>
</tr>
<tr>
<td>Hubli</td>
<td>918362356533</td>
<td>Koravi Bhawan, Hosur Road, New Cotton Market, Hubli – 580029, Nr Jain Mandir (Also Serves Dharwad)</td>
</tr>
<tr>
<td>Jaipur</td>
<td>919828694651</td>
<td>Hawa Sadak Rd, near Laxmi Dharam Kanta, Patel Nagar, Geejgarh Vihar Colony, Bais Godam, Jaipur, Rajasthan 302006, India</td>
</tr>
<tr>
<td>Jamshedpur</td>
<td>919832111872</td>
<td>SAFEXPRESS LOGISTICS PARK NH-33 BHILAIPAHARI JAMSHEDPUR</td>
</tr>
<tr>
<td>Kolkata</td>
<td>918818039681</td>
<td>8/2, Doctor Biresh Guha Street, Park Circus, Ballygunge, Kolkata, West Bengal 700017, India</td>
</tr>
<tr>
<td>Lucknow</td>
<td>919568955552</td>
<td>Rana Pratap Marg, Civil Lines, Lucknow, Uttar Pradesh 226001, India</td>
</tr>
<tr>
<td>Mumbai</td>
<td>919820728650</td>
<td>Raiker Chamber, Shop No. 5, Opposite Neelkanth Tower, Govandi East, Mumbai, Maharashtra 400088, India</td>
</tr>
<tr>
<td>Madurai</td>
<td>919360105227</td>
<td>SAFEXPRESS LOGISTICS PARK CS/5, SIDCO INDUSTRIAL ESTATE KAPPALUR, STATE BANK ROAD</td>
</tr>
<tr>
<td>Noida</td>
<td>919899131819</td>
<td>Sk-241A Gali No-2 Noida, Near Sec-66, Sector 66, Noida, Gautam Budh Nagar</td>
</tr>
<tr>
<td>Patna</td>
<td>919334919155</td>
<td>SAFEXPRESS LOGISTICS PARK NH-30, BYE PASS ROAD,KARMALICHAK NEAR DIDARGANJ TOLL PLAZA. PATNA</td>
</tr>
<tr>
<td>Pune</td>
<td>1838698081748</td>
<td>Pune Nagar Road, Wagholi., in front of Wagheshwar Palace, Pune, Maharashtra 412207, India</td>
</tr>
<tr>
<td>Ranchi</td>
<td>916512461580</td>
<td>Safex Cargo Complex, Nh 33, Namkum, Ranchi – 834010, Lowadih Chowk</td>
</tr>
<tr>
<td>Raipur</td>
<td>911800113113</td>
<td>SAFEXPRESS LOGISTICS PARK RING ROAD NO. 3 VIDHAN SABHA CHOWK, SAKRI RAIPUR (CG) – 493111 CHHATTISGARH</td>
</tr>
<tr>
<td>Rajkot</td>
<td>919824342645</td>
<td>SAFEXPRESS LOGISTICS PARK HN 8B, OPP IOC GAS PLANT NEAR SAAT HANUMAN TEMPLE, NAVAGAM RAJKOT</td>
</tr>
<tr>
<td>Surat</td>
<td>1831987366587</td>
<td>41/42 Royal Township, , Opp Jaipur Golden Transport Saaroli, Surat – 395001 Gujarat</td>
</tr>
<tr>
<td>Srinagar</td>
<td>1839217790000</td>
<td>SAFEXPRESS LOGISTICS PARK NO. 27F, TRANSPORT NAGAR FRUIT MANDI, PARIMPORA, OPP. J & K BANK SRINAGAR</td>
</tr>
<tr>
<td>Thrissur</td>
<td>919497183806</td>
<td>SAFEXPRESS CENTRE NO. 18/360A, NH-47, BYE PASS ROAD PO. MARATHAKARA THRISSUR – 680306 KERALA</td>
</tr>
<tr>
<td>Vijayawada</td>
<td>911800113113</td>
<td>SAFEX CARGO COMPLEX D.NO.54-6-42,SHOP NO-22,PLOT NO-131 5TH CROSS ROAD, 4TH LANE,JAWAHAR AUTO NAGAR VIJAYAWADA</td>
</tr>
<tr>
<td>Vapi</td>
<td>911800113113</td>
<td>SAFEXPRESS LOGISTICS PARK NH-8, VILLAGE-SALVAV DIST.-VALSAD VAPI – 382424</td>
</tr>
</tbody>
</table>
<h3></h3>
<h4>FAQs</h4>
<h3></h3>
<ul>
 	<li aria-level="1"><b>How can I track my Safexpress?</b></li>
</ul>
<h3></h3>
To track your Safexpress package, you will need to visit the Safexpress website and enter the tracking number for your package. Once you have entered the tracking number, you will be able to see the current status of your package, including its location and estimated delivery date. Additionally, you can also track your package by calling customer service or using the mobile app provided by Safexpress.
<h3></h3>
<ul>
 	<li aria-level="1"><b>How much does Safexpress cost?</b></li>
</ul>
<h3></h3>
Safexpress offers a range of services and the cost for each service will vary depending on factors such as the package's size, weight, destination, and delivery time frame. Additionally, additional services such as insurance or special handling may also be charged extra. You can get an estimate of the cost of your shipment by using the rate calculator on the Safexpress website, contacting customer service, or visiting a Safexpress location. It is always best to contact them directly for an accurate and detailed cost estimate for your specific package and shipping needs.
<h3></h3>
<ul>
 	<li aria-level="1"><b>How long does it take for Safexpress to deliver?</b></li>
</ul>
<h3></h3>
The delivery time for Safexpress packages will vary depending on the destination and the service selected. It is best to check with Safexpress for the estimated delivery time for your specific package and destination. Generally, for domestic shipments, Safexpress offers services with delivery times ranging from next-day delivery to 5-7 business days, and for international shipments, delivery times may take longer, depending on the country and service selected. Some services may also have a guaranteed delivery time frame. It is always best to contact them directly for an accurate delivery time estimate for your specific package and shipping needs.
<h3></h3>
<ul>
 	<li aria-level="1"><b>Where can Safexpress deliver?</b></li>
</ul>
<h3></h3>
Safexpress is an Indian-based logistics company that primarily delivers within India. They have a wide network of serviceable pin codes within India, covering almost every corner of the country. They also offer international delivery services to a few countries like Nepal, Bangladesh, Bhutan, and Sri Lanka. You can check the specific destinations they serve on their website by using the serviceability checker or contacting customer service.
    
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