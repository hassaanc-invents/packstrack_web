
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
  <meta name="description" content="Daewoo tracking Service has been providing convenience to customers since the launch of Express in Pakistan">
<meta name="keywords" content="Daewoo Tracking, Daewoo Express, Daewoo Pakistan">
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
        $blogId = "87";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="Daewoo FastEx Cargo Service" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>Daewoo Tracking</h1>
Daewoo tracking Service has been providing convenience to customers since the launch of Express in Pakistan its offices are open 24 hours all week throughout Pakistan. Daewoo fastex tracking provides safe and fastest cargo service to its client. Apart from the central bus terminal, they have a nationwide presence for cargo collection strategy. If you are using Daewoo Cargo Tracking, you can check the details of your package by entering your number, where your package is, and how long it will take to receive your package.
<h3></h3>
If we talk about a company, it was formed in 1998. It was formed at that time for the purpose could have a bus business, but with the passage of time, they changed their view of work. And now used for transport package mean delivery and many people in Pakistan want to use this company because it also provides very high-quality service to its customers due to which their clients use their service again and again.
<h3></h3>
<h2 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">Daewoo Cargo Tracking</span></h2>
<h3></h3>
If we talk about the transportation needs of people, there are many companies all over the world that are available for detailing and servicing people's packages and providing different types of services to people. They also provide parcel delivery and overseas parcel delivery services as well as services like Daewoo tracking number so it is very popular in Pakistan. You can also track <a class="text-primary" href="https://packstrack.com/tcstracking" target="_blank" rel="noopener">TCS Tracking.</a>
<h3></h3>
<iframe style="border: 0px #ffffff none;" src="https://fastex.pk/" name="myiFrame" width="100%" height="500px" frameborder="1" marginwidth="0px" marginheight="0px" scrolling="no" allowfullscreen="allowfullscreen"><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start">﻿</span></iframe>

Daewoo tracking number Services
<ul>
 	<li aria-level="1">SMART CARGO</li>
 	<li aria-level="1">COURIER</li>
 	<li aria-level="1">COD</li>
 	<li aria-level="1">GLOBEX</li>
 	<li aria-level="1">GREETINGS</li>
</ul>
<h3>How to Track Daewoo Fastex Tracking Number</h3>
The simple and easy way is not complicated we will share all details on how to track Daewoo tracking numbers by clicking. Follow Some simple steps
<ul>
 	<li aria-level="1">First of all, you have a valid tracking number from <b><a class="text-primary" href="https://fastex.pk/" target="_blank" rel="noopener">Daewoo Tracking.</a></b></li>
 	<li aria-level="1">Then you will see the Search button on the upper side</li>
 	<li aria-level="1">Put your tracking number in the search bar</li>
 	<li aria-level="1">You will see your tracking status</li>
 	<li aria-level="1">If you have any problem you can contact your customer support</li>
 	<li aria-level="1">Enjoy</li>
</ul>
<h3 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">Daewoo Fastex Tracking Helpline number</span></h3>
If you have any questions you can contact them. If you want to their service charges, don't worry here we will give you their contact number and email.
<table>
<tbody>
<tr>
<td><b>Courier</b></td>
<td><b>Contact Number</b></td>
<td><b>Email</b></td>
<td><b>Main Office Address</b></td>
</tr>
<tr>
<td>TIKI Tracking</td>
<td>042-111-007-009</td>
<td> info@fastex.pk</td>
<td>231-A Ferozepur Road Lahore 54000 Pakistan</td>
</tr>
</tbody>
</table>
<h2></h2>
<h3 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">Daewoo Fastex Cargo Tracking </span>Branches List</h3>
<div></div>
<table>
<tbody>
<tr>
<td><b>Branch</b></td>
<td><b>Contact number</b></td>
<td><b>Branch</b></td>
</tr>
<tr>
<td>Abbottabad</td>
<td>(0992) 384718</td>
<td>NEAR MISSILE CHOWK MANDAN MANSEHRA ROAD ABBOTTABAD</td>
</tr>
<tr>
<td>BAHAWALPUR</td>
<td>0336 0444654</td>
<td>AHMAD PUR ROAD NEAR SADIQ PUBLIC SCHOOL BAHAWALPUR</td>
</tr>
<tr>
<td>BATKHELA</td>
<td>0306 5668954</td>
<td>SAHAB MARKET MAIN BAAZAR BATKHELA</td>
</tr>
<tr>
<td>BHAKKAR</td>
<td>0331-1007008</td>
<td>OPP. GENERAL BUS STAND JHANG ROAD BHAKKAR</td>
</tr>
<tr>
<td>BHALWAL</td>
<td>03-311-007-009</td>
<td>KISAN PETROL PUMP NEAR LARI ADDA BHALWAL</td>
</tr>
<tr>
<td>CHINIOT</td>
<td>042-111-007-009</td>
<td>OPP. WAPDA OFFICE NEAR ROYAL CNG PUMP LAHORE ROAD CHINIOT</td>
</tr>
<tr>
<td>DERA GHAZI KHAN</td>
<td>03-311-007-009</td>
<td>OPP. GENERAL BUS STAND NEAR BAKKAR MANDI, DEAR GHAZI KHAN</td>
</tr>
<tr>
<td>DERA ISMAIL KHAN</td>
<td>042-111-007-009</td>
<td>OPP. KHAN PLAZA BANU ADDA NEAR THE GENERAL BUS STAND DERA ISMAIL KHAN</td>
</tr>
<tr>
<td>FAISALABAD</td>
<td>03-311-007-009</td>
<td>CHOWK AKBAR ABAD NEAR ALLIED HOSPITAL PUNJPULAN ROAD FAISALABAD</td>
</tr>
<tr>
<td>GUJRANWALA</td>
<td>042-111-007-009</td>
<td>GT ROAD RWP NEAR RESCUE 1122 GUJRANWALA</td>
</tr>
<tr>
<td>GUJRAT</td>
<td>03-311-007-009</td>
<td>UBL BANK NEAR PSO PUMP OPP.SUFI HOTEL GT ROAD GUJRAT</td>
</tr>
<tr>
<td>JHANG</td>
<td>042-111-007-009</td>
<td>ISLAM NAGAR, SAFDER NAZEER PETROL PUMP BHAKKAR ROAD JHANG</td>
</tr>
<tr>
<td>KARACHI</td>
<td>03-311-007-009</td>
<td>SECTOR 3B CORRIDOR AREA KDA SCHEME 33, BURRAQ PETROL PUMP MAIN HIGHWAY KARACHI</td>
</tr>
<tr>
<td>KHANEWAL</td>
<td>042-111-007-009</td>
<td>FORK EVENT NAIZI CHOWK MULTAN ROAD KHANEWAL</td>
</tr>
<tr>
<td>LAHORE</td>
<td>03-311-007-009</td>
<td>TOKHAR NIAZ BAIG NEAR PSO PUMP LAHORE</td>
</tr>
<tr>
<td>MARDAN</td>
<td>042-111-007-009</td>
<td>OPP. RAILWAY STATION, IRUM COLONY NOWSHERA ROAD MARDAN</td>
</tr>
<tr>
<td>MIANWALI</td>
<td>03-311-007-009</td>
<td>PF ROAD, NEAR FLAVOUR CITY HOTEL MAINWALI</td>
</tr>
<tr>
<td>MORO</td>
<td>042-111-007-009</td>
<td>FALAK BYCO PUMP NEAR ALAMIN HOTEL DADU BYPASS MORO</td>
</tr>
<tr>
<td>MULTAN</td>
<td>03-311-007-009</td>
<td>OPP. TTC COLLAGE NEAR CHOWK KUMHARA WALA KHANEWAL ROAD MULTAN</td>
</tr>
<tr>
<td>MURREE</td>
<td>042-111-007-009</td>
<td>NEAR SMART HOTEL, LAHORE BOOK DEPOT CARD MURREE</td>
</tr>
<tr>
<td>NOWSHERA</td>
<td>03-311-007-009</td>
<td>NEAR CMH, GT ROAD NOWSHEHRAH, GT ROAD NOWSHEHRA</td>
</tr>
<tr>
<td>PESHAWAR</td>
<td>042-111-007-009</td>
<td>OPP. GENERAL BUS STAND, G.T. ROAD, PESHAWAR</td>
</tr>
</tbody>
</table>
<b>Daewoo Fastex Cargo Tracking</b> <b>Conclusion: </b>I hope After reading this article you will know all about mean you will know about the history and also know how to track the package if you have any problem then how to contact customer support and some extra information. If you have any more questions then you can contact customer support to get the best solution for your problem.    
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