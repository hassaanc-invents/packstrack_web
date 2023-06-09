
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
  <meta name="description" content=" Express shipping company GDEX Express was founded in 1997 to serve domestic and international clients. It manages a network of 136 locations in East and West Malaysia">
<meta name="keywords" content="gdex tracking, gdex tracking number, tracking gdex, tracking number gdex,gdex tracking no, gdex tracking Malaysia">
<meta name="author" content="Packstrack">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/gdextracking"
  },
  "headline": "GDEX Tracking | e-Tracking - GD Express Sdn Bhd",
  "description": "GDEX Express was founded in 1997 to serve domestic and international clients. It manages a network of 136 locations in East and West Malaysia, including 59 branches",
  "image": "https://packstrack.com/uploaded_files/POS%20Laju%20(2)%20(1).webp",  
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
  "datePublished": "2023-01-29",
  "dateModified": "2023-03-14"
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
        $blogId = "68";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="GDEX Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>GDEX Tracking | e-Tracking - GD Express Sdn Bhd</h1>
Express shipping company GDEX Express was founded in 1997 to serve domestic and international clients. It manages a network of 136 locations in East and West Malaysia, including 59 branches, 2 substations, 52 agents, and centers. More than 400 vehicles and vans make up GDEX's fleet, all of which are used for local call delivery of documents and packages between stations and Line Hoon Lat, the country's national lines. The GDEX serves as the organizational cornerstone for the firm's lightning-fast service.

Their primary responsibility is to transport documents and packages for local collection and delivery between stations and national centers from which the line originates. The company's express delivery service is stated to be employed for operations and is designed around the end-hospital model whereby client products are collected through branches, with a central clearing hub for clearance. after which they are shipped off to their eventual destination. GD Group currently employs more than 2,000 people.
<h2>How To track GDEX Tracking Number?</h2>
Please follow these steps to track your package without wasting your time.
<ul>
 	<li aria-level="1">First, you have a valid <b><a class="text-primary" href="https://www.gdexpress.com/c/malaysia/e-tracking.html" target="_blank" rel="noopener">Tracking Number.</a></b></li>
 	<li aria-level="1">Enter your tracking number in the search bar.</li>
 	<li aria-level="1">Then press the track button.</li>
 	<li aria-level="1">Wait for a moment.</li>
 	<li aria-level="1">In no time you will know the current status of your package.</li>
 	<li aria-level="1">If you face any problem you can contact the GDEX customer support number.</li>
</ul>
 
<h3>GDEX Tracking Customer Support</h3>
If you want to know the service charges you can contact them. Here we will provide your contact number and Email.
<table>
<tbody>
<tr>
<td><b>Courier</b></td>
<td><b>Contact Number</b></td>
<td><b>Email</b></td>
<td><b>Main Office Address</b></td>
</tr>
<tr>
<td>GGDEX Tracking</td>
<td>General Line:03-7787 2222</td>
<td>helpdesk@gdexpress.com</td>
<td>No 19 Jalan Tandang, 46050 Petaling Jaya, Selangor Darul Ehsan Malaysia.</td>
</tr>
</tbody>
</table>
 
<h3>GDEX tracking number</h3>
Your package will be given a tracking number, which is a special code that will allow you to monitor its whereabouts. You will receive this train number in an email. All of your package information can be found in the tracking number gdex you were given. Using the tracking number, you can check the current location of your package and see if you have received it.GDEX Tracking number is the only way to verify the status of your package; here, we'll walk you through the straightforward procedure that can be used to do so. You can also track <b><a class="text-primary" href="https://packstrack.com/glstracking" target="_blank" rel="noopener">GLS tracking.</a></b>
<h3>Tracking GDEX</h3>
Local express delivery service GDEX received ISO Team Management System certification for all 25 of its divisions in 2013. GDEX achieved ISO ecosystem certification in November 2012, and in November 2019 they upgraded their quality management to ISO, covering twenty-seven different departments. GDEX, formerly known as JKLISMSDEC, is an electronic market that merged with its holding company, GD Express Carrier Bhd, in 2005. In 2012, GD reported that it had released information about Ashda Hassan Capital and the 2011–2016 World Bursa Security Men's Market.
<h3>GDEX Tracking Malaysia</h3>
Your GD Express Sdn Bhd delivered package can be tracked online. Please enter your consignment number in the GDX Every Business & Household tracking form's corresponding field to check the status of your shipment. services as a direct solution to Korea's needs and cost reduction issues because it has a deep understanding of Korea's specific challenges that can be researched in full, prices checked, purchases made, and shipping status tracked through the firm's website. The website makes it possible to track your order and see where it is in the delivery process. Customers can put their minds at ease by looking up their GDEX track number. Because of the company's efforts to expand its offerings, millions of people all over the world now have easier access to reliable courier services. You can also track <b><a class="text-primary" href="https://packstrack.com/sdatracking" target="_blank" rel="noopener">SDA Tracking.</a></b>

 
<h3 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">GDEX Tracking no</span></h3>
<div class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">GDEX Tracking no</span> is a string of letters and numbers that usually starts with "4" or "8" and ends with "MY." A typical GDEX tracking number, for example, might look like this: 4166881234MY or 8166881234MY. Visit the GDEX website and enter your tracking number in the "Track & Trace" tool to find out where your shipment is. You can also use third-party websites or mobile apps that support GDEX tracking to track the package. Once you put in your no<span class=""> tracking gdex</span>, you'll be able to see the real-time status of your shipment, such as where the package is, when it's expected to arrive, and if there have been any delivery attempts or delays. You can call their customer service if you have any questions or concerns about your GDEX shipment.</div>
<div></div>    
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