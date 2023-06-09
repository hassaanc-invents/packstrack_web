
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
  <meta name="description" content="NSD Tracking was founded in 2000 as a home delivery service with company headquarters in Northern Virginia.">
<meta name="keywords" content="NSD Tracking, Non-Stop Delivery , NSD shipping tracking, NSD tracking customer support number.">
<meta name="author" content="Packstrack">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/nsdtracking"
  },
  "headline": "NSD Tracking - Non-Stop Delivery",
  "description": "NSD Tracking was founded in 2000 as a home delivery service with company headquarters in Northern Virginia.",
  "image": "https://packstrack.com/uploaded_files/NSD%20(1).webp",  
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
  "datePublished": "2023-01-23",
  "dateModified": "2023-03-10"
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
        $blogId = "55";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="NSD Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>NSD Tracking - Non-Stop Delivery</h1>
NSD Tracking was founded in 2000 as a home delivery service with company headquarters in Northern Virginia. With offices in the US, it is committed to providing highly experienced service excellence and valued solutions. As one of the fastest-growing logistics providers in the country, NSD is a recognized leader in domestic and business delivery solutions. Unparalleled level of service and ensures an exceptional experience for home delivery We provide the highest level of consistent service and brand shows nationwide to all US zip codes.

 

<iframe src="https://tracking.shipnsd.com/" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="400px" width="100%" allowfullscreen></iframe>

 

NSD provides advanced assembly and installation warehouse and distribution store replenishment and reverses logistics solutions for core range and white-collar delivery products to distributors and manufacturers of many of the largest retailers in the US. They are equipped to handle almost any product, from delivery prices to consumer electronics, furniture, outdoor living, home improvement products, and more. You can also track <b><a class="text-primary" href="https://packstrack.com/lsotracking" target="_blank" rel="noopener">LSO Tracking</a>.</b>
<h3>NSD Shipping Tracking</h3>
For nearly twenty years NSD shipping tracking has collaborated with our partners to develop and manage national home delivery centers based on our commitment to continuous innovation and improvement and exceeding our customers. Every day their team members work to provide an exceptional customer experience.    NST's mission is simple To be the recognized leader in the best transportation logistics private and home delivery solutions in the US SD Ali is committed to providing customer service operations lines and value addition to its team members and delivery partners. They have over 20 years of experience and expertise to provide an exceptional home delivery experience but are not based on constant investment.
<h3>How To track NSD Tracking Number</h3>
When you ship anything via NSD tracking they give an NSD tracking number. This tracking number contains all the entails about your package. You can track it online. Here we tell you some simple steps to track your package online. By Following these steps you can track your package online.
<ul>
 	<li aria-level="1">First, you have a valid tracking number given by <b><a class="text-primary" href="https://www.shipnsd.com/" target="_blank" rel="noopener">NSD courier tracking.</a></b></li>
 	<li aria-level="1">.Enter your tracking number into our real-time tracker.</li>
 	<li aria-level="1">Then click the track button.</li>
 	<li aria-level="1">Wait a moment when it is processing.</li>
 	<li aria-level="1">In no time you will know the current status of your package.</li>
 	<li aria-level="1">If you face any problem during tracking your package you can contact the NSD tracking customer support number.</li>
</ul>
 
<h3>NSD tracking customer support number.</h3>
Here we will give the number of NSD tracking customer support. We will also give their EMAIl.
<table>
<tbody>
<tr>
<td><b>Courier</b></td>
<td><b>Contact Number</b></td>
<td><b>Email</b></td>
<td><b>Main Office Address</b></td>
</tr>
<tr>
<td>NSD Tracking</td>
<td>(1-833-744-7673)</td>
<td>customercare@shipnsd.com</td>
<td>4500 Southgate Place Suite 300 Chantilly, VA 20151</td>
</tr>
</tbody>
</table>
 
<h3>Customer Care Hours</h3>
Monday – Friday 7:30 AM ET- 9:30 PM ET Saturday, Sunday 9:30 AM ET – 6:30 PM ET

 
<h4><em>FAQs</em></h4>

<iframe class="custom-scroll-bar" width="100%" height="400px" src="https://www.shipnsd.com/resources/faqs/"></iframe>    
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