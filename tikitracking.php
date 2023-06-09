
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
  <meta name="description" content="TIKI Tracking has started a campaign to get listed in the Nineteenth Century with their popular business in Indonesia and outbound lets">
<meta name="keywords" content="TIKI Tracking, How to Cek Tracking Resi TIKI, Tracking TIKI, TIKi Tracking Resi, TIKI Tracking Shipping Services">
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
        $blogId = "85";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="TIKI Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>TIKI Tracking - Lacak Kiriman</h1>
TIKI Tracking has started a campaign to get listed in the Nineteenth Century with their popular business in Indonesia and outbound lets in more than 500 offices. The many awards that TIKI Part Service Company has won, such as the 2015 Indonesia Wow brand and Titipan Kilat Soeprapto, TIKI Wisata (TIKITA), (TKS), and TIKI Logistik, show how successful they have been. (TIKINDO) Tiki's products and services have won awards like World Economy 2017 from Indonesia, Indonesia Prize Magazine 2017, New Courier Service from Rosewater and Marketing Machine, Top Broads Award, Service Quality Machine Award 2018 Result of Will He Transfer and by Self Transfer NC and Service by Indonesia Result 2016 Indonesia Year 2016 March Indonesia and Marxist Indonesia Most Women 2015.
<h2>How to Cek Tracking Resi TIKI</h2>
<h3></h3>
When you shipped something with TIKI tracking, They give you a tracking number. With this tracking number, you can track your package online. Here we will tell you how to track Tiki tracking numbers online. Please follow these steps.
<h3></h3>
<ul>
 	<li aria-level="1">First, you have a valid <b><a class="text-primary" href="https://www.tiki.id/id/tracking" target="_blank" rel="noopener">TIKI tracking number.</a></b></li>
 	<li aria-level="1">Enter your tracking number into the search bar.</li>
 	<li aria-level="1">Then press the track button.</li>
 	<li aria-level="1">Wait for a moment while it is processing.</li>
 	<li aria-level="1">In no time you will know the current status of your package.</li>
 	<li aria-level="1">If you face any problem you can contact TIKI Tracking customer support.</li>
</ul>
<h3>Tracking TIKI</h3>
<h3></h3>
PT Tiki Jalur Nugraha Ekakurir, which goes by the name TIKI, is Indonesia's top logistics and delivery company for online shopping. PT Pos Indonesia (Indonesia Post), which is owned by the government, is TIKI's parent company. TIKI offers a wide range of shipping services, such as same-day delivery, next-day delivery, and standard delivery. With TIKI's tracking system, customers can see where their packages are at all times. Once a package has been sent, customers can use the tracking number that TIKI gives them to check on the status of their package on the TIKI website or through the TIKI mobile app.
<h3></h3>
The tracking information shows where the package is right now when it is expected to arrive, and if there have been any updates or changes to the delivery schedule. TIKI also offers extra services like COD (Cash on Delivery), insurance, and a package return service. Overall, TIKI is thought to be one of the most reliable and effective delivery services in Indonesia. It is known for delivering on time and having great customer service.

 

You Can also track <b><a class="text-primary" href="https://packstrack.com/anterajatracking" target="_blank" rel="noopener">Anteraja Tracking</a>.</b>
<h3>TIKI Tracking Customer Support</h3>
<h3></h3>
If you have any questions and want to their service charges, you can contact them. Here we will give you the TIKI Tracking Customer number and email.
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
<td>TIKI Tracking</td>
<td>1500125</td>
<td>tiki@tiki.id</td>
<td>Jl. Raden Saleh Raya No. 2 Jakarta 10430 Indonesia.</td>
</tr>
</tbody>
</table>
<h3></h3>
<h3>TIKi Tracking Resi</h3>
<h3></h3>
When a package is shipped, TIKI gives it a tracking number called a "resi." With this number, you can find out where the package is in TIKI's delivery network. Customers can find out where their packages are by going to the TIKI website or using the TIKI mobile app and entering the resi number. The tracking information will show where the package is right now when it is expected to arrive, and if there have been any updates or changes to the delivery schedule. Customers can also get updates on package delivery via email or text message. It's important to know that TIKI's tracking information comes from the TIKI network and may not always be accurate or up-to-date. If you have any questions or concerns about your package, you can get help from TIKI's customer service.
<h3></h3>
<h3>TIKI Branch Offices throughout Indonesia</h3>
TIKI Tracking provides courier services all over Indonesia. They are present in almost all big and small cities in Indonesia, but people don't know that there is a PTKI branch in their city. Here we will tell you about the branches of TIKI  in all major cities of Indonesia and also tell you their address so that you can find the branch in your city. So you can benefit from it. To see branches please click on the Branches button.

<a class="mb-button mb-style-flat mb-size-default mb-corners-default mb-text-style-default " href="https://www.tiki.id/id/kontak" target="_blank" rel="noopener">Branches of TIKI  <i class="fa fa-arrow-right"></i> </a>
<h3>TIKI Tracking Shipping Services</h3>
TIKI is a package delivery service that offers various options for customers to choose from based on their needs and preferences. These options include Same Day Services (SDS), which allows for package delivery within a few hours, Over Night Services (ONS) for delivery the next day, Two Days Services (TDS) for delivery within two days, Holiday Delivery Services (HDS) for delivery on holidays, Regular (REG) for standard delivery within 3 to 7 days, Economy (ECO) for the cheapest option with delivery times of up to 6 to 14 days, International (INT) for package delivery to overseas destinations with varying estimated delivery times, and Trucking Service (TRC) for shipping heavy goods at a cost-effective price with a minimum weight of 10 kg per package and coverage in Java, Bali, and Sumatra with an estimated delivery time of 3-7 days depending on distance and terrain.    
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