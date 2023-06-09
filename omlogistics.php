
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
  <meta name="description" content=" Om Logistics Tracking is a courier and logistics company that provides its services all over India">
<meta name="keywords" content="Om Logistics Tracking, Om Logistics Ltd Tracking, Om Logistics Tracking Number, Om Logistics Tracking Customer Care Number">
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
        $blogId = "96";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="Om Logistics" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1 dir="ltr">Om Logistics Tracking- Top Logistics Services Provider</h1>
 
<p dir="ltr">Om Logistics Tracking is a courier and logistics company that provides its services all over India. It is one of the largest logistics companies in India. It has done its services in almost all big and small cities of India. It offers the fastest and most secure service. If you want to ship something on a business scale, then you should definitely choose Om Logistics. Because it is very safe and when it comes to its service charges, its service charges are very low compared to other courier companies, they provide you with good quality at a low cost. This is the reason why it has become so popular in a very short time.</p>
 
<h2 dir="ltr">Om Logistics Ltd Tracking</h2>
 
<p dir="ltr">OML Logistics tracks your package till it safely reaches you They have a network of trucks that they can use to deliver your goods to you fast and securely. Your package was carefully packed before being cotton-sealed. Their employees are professionals and experts. In the event that they take longer than expected to deliver the package, providers will refund your service fees. If your package is lost or damaged during transit they will give you a complete refund. So don't be afraid to send your parcel with Om Logistics.</p>
 
<h3 dir="ltr">Om Logistics Tracking Number</h3>
 
<p dir="ltr">OML Logistics tracks your package till it safely reaches you They have a network of trucks that they can use to deliver your goods to you fast and securely. Your package was carefully packed before being cotton-sealed. They employ professionals. In the event that they take longer than expected to deliver the package, providers will refund your service fees. You can also track <a class="text-primary" href="https://packstrack.com/bluedarttracking" target="_blank" rel="noopener">Blue Dart Tracking</a></p>
 
<h3 dir="ltr">How to Track Om Logistics Tracking Number?</h3>
 
<p dir="ltr">If you want to track your parcel, you are in right place. Here we will tell you how to track packages without wasting your time. Here we will tell you some easy steps. By following you will be able to track your package. Follow these steps.</p>
 
<ul>
 	<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">First, You have a valid <b><a href="https://omlogistics.co.in/">tracking number.</a></b></p>
</li>
 	<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Enter your tracking number into the search bar.</p>
</li>
 	<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Then press the Track button.</p>
</li>
 	<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Wait for a moment while it is processing.</p>
</li>
 	<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">In no time you will see the current status of your package.</p>
</li>
</ul>
 
<h3 dir="ltr">Om Logistics Tracking Customer Care Number</h3>
 
<p dir="ltr">If you face any problem during transit you can contact Om Logistics Customer care number. You can also contact them to know their service charges. Here we will give you their contact number and email.</p>

<div dir="ltr" align="left">
<table><colgroup> <col width="90" /> <col width="111" /> <col width="157" /> <col width="301" /></colgroup>
<tbody>
<tr>
<td>
<p dir="ltr">Courier</p>
</td>
<td>
<p dir="ltr">Contact Number</p>
</td>
<td>
<p dir="ltr">Email</p>
</td>
<td>
<p dir="ltr">Main Office Address</p>
</td>
</tr>
<tr>
<td>
<p dir="ltr">Om logistics</p>
</td>
<td>
<p dir="ltr">011 4597 0302/</p>
</td>
<td>
<p dir="ltr">omgroup@omlogistics.co.in</p>
</td>
<td>
<p dir="ltr">130, Transport Center, Ring Road, Punjabi Bagh, New Delhi, Delhi, India - 110035</p>
</td>
</tr>
</tbody>
</table>
</div>
 
<h3 dir="ltr">Om Logistics Tracking Branches and their Contact Information</h3>
<p dir="ltr">Here we will share information about their big offices in India.</p>
 
<div dir="ltr" align="left">
<table><colgroup> <col width="114" /> <col width="124" /> <col width="204" /> <col width="250" /></colgroup>
<tbody>
<tr>
<td>
<p dir="ltr">City</p>
</td>
<td>
<p dir="ltr">Contact Numbers</p>
</td>
<td>
<p dir="ltr">Emails</p>
</td>
<td>
<p dir="ltr">Address</p>
</td>
</tr>
<tr>
<td>
<p dir="ltr">New Delhi</p>
</td>
<td>
<p dir="ltr">91 11 45970200</p>
</td>
<td>
<p dir="ltr">binola_ops@omlogistics.co.in</p>
</td>
<td>
<p dir="ltr">130, Transport Center, Ring Road, Punjabi Bagh, New Delhi, Delhi, India - 110035</p>
</td>
</tr>
<tr>
<td>
<p dir="ltr">Gurgaon</p>
</td>
<td>
<p dir="ltr">91 9811121899</p>
</td>
<td>
<p dir="ltr">binola_ops@omlogistics.co.in</p>
</td>
<td>
<p dir="ltr">Plot No. 1, Binola Industrial Area Near Terrysoft, Gurgaon, Haryana, India - 122001</p>
</td>
</tr>
<tr>
<td>
<p dir="ltr">Pune</p>
</td>
<td>
<p dir="ltr">91 9881777001</p>
</td>
<td>
<p dir="ltr">pune_hrd@omlogistics.co.in</p>
</td>
<td>
<p dir="ltr">Gate No. 113, Chimbli Phata, Near Indryani River Nasik Pune Highway Chakan, Pune, Maharashtra, India - 410501</p>
</td>
</tr>
<tr>
<td>
<p dir="ltr">Chennai</p>
</td>
<td>
<p dir="ltr">91 9282170456</p>
</td>
<td>
<p dir="ltr">chennai_am@omlogistics.co.in</p>
</td>
<td>
<p dir="ltr">Echoor Village & Post Thenneri, Via Behind Samsung India Electronics Sunguvachatram, Sripermbudur Taluk, Chennai, Tamil Nadu, India - 631604</p>
</td>
</tr>
<tr>
<td>
<p dir="ltr">Bengaluru</p>
</td>
<td>
<p dir="ltr">91 80 29720142</p>
</td>
<td>
<p dir="ltr">bngnm_am@omlogistics.co.in</p>
</td>
<td>
<p dir="ltr">No 8/1, 2nd Floor, 2nd Main Road, Raghavendra Layout, Next to RNS Motors, Behind Hotel Marks Grandeur, Yeshwanthpur, Bengaluru, Karnataka, India - 560022</p>
</td>
</tr>
<tr>
<td>
<p dir="ltr">Ahmedabad</p>
</td>
<td>
<p dir="ltr">91 9714502053</p>
</td>
<td>
<p dir="ltr">ahmedabad@omlogistics.co.in</p>
</td>
<td>
<p dir="ltr">Survey No 862, Behind Kankavati Hotel Village Rajoda, Sarkhej Bavla Highway, Ahmedabad, Gujarat, India - 382220</p>
</td>
</tr>
<tr>
<td>
<p dir="ltr">Mumbai</p>
</td>
<td>
<p dir="ltr">91 22 42280606</p>
</td>
<td>
<p dir="ltr">ro_mumbai@omlogistics.co.in</p>
</td>
<td>
<p dir="ltr">Shop No. 3, East Bharat Kunj Society, Shraddhanand Road, Vileparle East, Mumbai, Maharashtra, India - 400057</p>
</td>
</tr>
</tbody>
</table>
</div>    
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