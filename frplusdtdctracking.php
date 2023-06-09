
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
  <meta name="description" content="Desk To Desk Courier & Cargo is an Indian Courier company. It is known as FR Plus DTDC Tracking. Its headquarter is in Bangalore and Karnataka..">
<meta name="keywords" content="FR Plus DTDC Tracking, FR DTDC Plus, DTDC, FR Plus DTDC tracking Check Online">
<meta name="author" content="Packstrack">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/frplusdtdctracking"
  },
  "headline": "FR Plus DTDC Tracking | Track your Parcel Here",
  "description": "Desk To Desk Courier & Cargo is an Indian Courier company. It is known as FR Plus DTDC Tracking. Its headquarter is in Bangalore and Karnataka.",
  "image": "https://packstrack.com/uploaded_files/fr%20(1).webp",  
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
      "url": "png"
    }
  },
  "datePublished": "2023-01-05",
  "dateModified": "2023-02-28"
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
        $blogId = "30";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="FR Plus DTDC Tracking " width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1 style="text-align: center;">FR Plus DTDC Tracking | Track your Parcel Here</h1>
<h2>FR Plus DTDC Tracking</h2>
Desk To Desk Courier & Cargo is an Indian Courier company. It is known as FR Plus DTDC Tracking. Its headquarter is in Bangalore and Karnataka. It handles more than 12 million deliveries in a month. It is very famous in India. It is very fast and saves courier companies. It provides Its services at very cheap rates. It has an experienced team to deliver your parcel very safely and fast.  It has many trucks and cargo for distribution. If you are a Business scale man and want to ship anything surely you will choose FR Plus.
<h3>FR DTDC Plus</h3>
FR DTSC Plus is very famous in India. Most people use this tracking for courier services. It has many cargo and trucks to deliver your package. DTDC fr plus is doing their services in many stats and many pin codes of India. Their service is very quick and safe. They are using modern technology to improve their services. FR DTDC Plus trying to make their branches in every state of India. Most people trust their services.
<h3>FR Plus DTDC tracking Check Online</h3>
When you use FR Plus DTDC Tracking to ship or order something, they give you a number. This tracking number has all the information about your package. This number lets you know when your package will arrive. You are emailed or texted this tracking number. You can get the tracking number back from customer service if you lose it. With the help of a tracking number, we'll show you how simple and easy it is to track your package online. You will be able to check your package in less time and without wasting time. You can find out where your package is by carefully following a few easy steps. You can also track <a class="text-primary" href="https://packstrack.com/vtranstracking" target="_blank" rel="noopener">V Trans Tracking</a>
<h3>How To track FR Plus DTDC Tracking Online</h3>
Please follow these steps to Track FR DTDC tracking online.
<ul>
 	<li>First, you have a valid tracking number by <a class="text-primary" href="https://www.dtdc.in/tracking.asp" target="_blank" rel="noopener">DTDC tracking</a>
.</li>
 	<li>Enter your tracking number into our real-time tracker.</li>
 	<li>Then press the track button to track your package.</li>
 	<li>Soon you will know all about your package.</li>
 	<li>If you face any problem you can contact FR Plus customer Support.</li>
</ul>
<h3>FR Plus Customer Support</h3>
<table>
<tbody>
<tr>
<td><strong>Courier</strong></td>
<td><strong>Contact Number</strong></td>
<td><strong>Email</strong></td>
<td><strong>Main Office Address</strong></td>
</tr>
<tr>
<td>FR Plus DTDC</td>
<td>+91 80 33004444</td>
<td>ustomersupport@dtdc.com</td>
<td>#269, Lahari Towers, 1st Main, Albert Victor Road, Chamrajpet, Bangalore, Karnataka, India - 560018</td>
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