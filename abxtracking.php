
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
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive-table.css">
  <link rel="stylesheet" href="css/custom-scroll-bar.css">
  <link rel="icon" type="image/x-icon" href="./images/trackingLogo.png">
  <meta name="description" content=" ABX Express Tracking started its Malaysia and Brunei operations in Lebanon 29 years ago. Since then, the company">
<meta name="keywords" content="ABX Tracking, ABX Tracking Customer Service, ABX Express, ABX tracking number, ABX Tracking no">
<meta name="author" content="Packstrack">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/abxtracking"
  },
  "headline": "ABX Tracking - Track Your Package",
  "description": "ABX Express Tracking started its Malaysia and Brunei operations in Lebanon 29 years ago. Since then, the company has grown and now has 75 offices",
  "image": "https://packstrack.com/uploaded_files/ABX%20Tracking%20(1).webp",  
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
  "datePublished": "2023-01-27",
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
        $blogId = "62";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="ABX Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>ABX Tracking - Track Your Package</h1>
ABX Express Tracking started its Malaysia and Brunei operations in Lebanon 29 years ago. Since then, the company has grown and now has 75 offices and service centers all over the country that serve the whole country. We are able to offer services that our competitors talk about and use their logistics infrastructure because we have a team of over 800 trained employees across the board and a senior management program from major players in the industry. Improves their relationship with their customers by making them more efficient and productive, and makes sure that their solutions are affordable.
<h2>How To track ABX Express tracking</h2>
Please follow these steps:
<ul>
 	<li aria-level="1">First, you have a valid <b><a class="text-primary" href="https://my.kex-express.com/tracking" target="_blank" rel="noopener">Abx tracking number.</a></b></li>
 	<li aria-level="1">Enter your tracking number into our real-time tracker.</li>
 	<li aria-level="1">Press the track button.</li>
 	<li aria-level="1">Wait for a moment while it is processing.</li>
 	<li aria-level="1">In no time you will see the current status of the parcel.</li>
 	<li aria-level="1">If you face any problems you can contact ABX Tracking.</li>
</ul>
<h3>ABX Tracking Customer Service</h3>
If you want to know ABX tracking service charges you can contact them. If you have any questions you can contact them. Here will give abx tracking customer service number.
<table>
<tbody>
<tr>
<td><b>Courier</b></td>
<td><b>Contact Number</b></td>
<td><b>Email</b></td>
<td><b>Main Office Address</b></td>
</tr>
<tr>
<td>ABX Tracking</td>
<td>603-80843111</td>
<td>my.welisten@kex-express.com</td>
<td>Lot 651, 1st Floor Jalan Subang 1, Taman Perindustrian Sg Penaga, 47600 Subang Jaya, Selangor</td>
</tr>
</tbody>
</table>
<h3>ABX Express</h3>
ABX Express MSDN Bhd, also known as ABX Express, is a logistics and delivery service company that was founded in 1984 in East Malaysia. It has been a healthcare provider for more than 30 years. A BX Express has more than 3,000 workers, more than 2,500 vehicles on the road, and more than 100 branch officers all over Malaysia. Cross-border solutions include both last-mile delivery and products and services that add value to what the customer already has.    ABX Express provides documents and door-to-door express delivery. This high-tech computerized tracking system can tell you exactly where your important business correspondence is, from the point where it was picked up to where it will end up. It's also the best way to get the package there quickly and safely. You can also track <b><a class="text-primary" href="https://packstrack.com/bestexpresstracking" target="_blank" rel="noopener">Best Express Trackinga></a></b>
<h3>ABX Express Tracking</h3>
ABX Express Tracking is based in Sabah, Malaysia, which is where most of its business is done. Among other things, it offers a UPS service within the same state within minutes from one country to another. There is also delivery at night. Companies have put more than 75 service centers on a map of Malaysia that they use to meet with and please their leaders. A company can use the services of other brands like FedEx-TNT or USPS to deliver packages or services anywhere in the world, as long as they meet where they meet. Being part of abx tracking Malaysia has given them a global presence, even though their offices are only in Malaysia.
<h3>ABX tracking working hour</h3>
<div>Monday-Friday (08 00 am-05 30pm)</div>
<div>Saturday (08 00 am-12 00 pm)</div>
<div>Email: my.welisten@kex-express.com</div>
<h3>ABX tracking number</h3>
When you use no tracking abx to send a package, you get a tracking number. This tracking number tells you everything you need to know about your package. When does the pass come? With this number, you can find out where your package is. You'll get an email with this tracking number abx. When your package is shipped, you can use this number to track it on our website, and you can check the address by going to ABX Painting's original website. If you can't figure out how to track your package, we'll show you the whole process here. You can also track <b><a class="text-primary" href="https://packstrack.com/poslajutracking" target="_blank" rel="noopener">Poslaju Tracking</a>.</b>
<h3>Tracking ABX Charge Price List</h3>
<ol>
 	<li>The estimated cost of shipping a package is based on our retail store's drop-off service. The price changes depending on where the package is going and how big and heavy it is.</li>
</ol>
<ol start="2">
 	<li>When the service fee is paid, SST will be added.</li>
</ol>
<ol start="3">
 	<li>The rate for a shipment is based on the total weight or dimensions of all the packages in that shipment, whichever is higher.</li>
</ol>
Example of the total size: (The total is length, width, and height) 10cm + 10cm + 10cm = 30cm
<ol start="4">
 	<li>The estimate of the delivery fee is just for your reference. KEX can change the prices at any time, based on what the company thinks is best.</li>
</ol>
<table>
<tbody>
<tr>
<td rowspan="2"><b>WEIGHT (in Kg)</b></td>
<td colspan="2"><b>PENINSULAR MALAYSIA</b></td>
<td colspan="2"><b>EAST MALAYSIA</b></td>
</tr>
<tr>
<td><b>MAJOR (RM)</b></td>
<td><b>MINOR (RM)</b></td>
<td><b>MAJOR (RM)</b></td>
<td><b>MINOR (RM)</b></td>
</tr>
<tr>
<td>1</td>
<td>8</td>
<td>9.6</td>
<td>16</td>
<td>18.4</td>
</tr>
<tr>
<td>2</td>
<td>9.6</td>
<td>11.2</td>
<td>30.4</td>
<td>32.8</td>
</tr>
<tr>
<td>3</td>
<td>11.2</td>
<td>12.8</td>
<td>44.8</td>
<td>47.2</td>
</tr>
<tr>
<td>4</td>
<td>12.8</td>
<td>14.4</td>
<td>59.2</td>
<td>61.6</td>
</tr>
<tr>
<td>5</td>
<td>14.4</td>
<td>16</td>
<td>73.6</td>
<td>76</td>
</tr>
<tr>
<td>6</td>
<td>16</td>
<td>17.6</td>
<td>88</td>
<td>90.4</td>
</tr>
<tr>
<td>7</td>
<td>17.6</td>
<td>19.2</td>
<td>102.4</td>
<td>104.8</td>
</tr>
<tr>
<td>8</td>
<td>19.2</td>
<td>20.8</td>
<td>116.8</td>
<td>119.2</td>
</tr>
<tr>
<td>9</td>
<td>20.8</td>
<td>22.4</td>
<td>`</td>
<td>133.6</td>
</tr>
<tr>
<td>10</td>
<td>22.4</td>
<td>24</td>
<td>145.6</td>
<td>148</td>
</tr>
<tr>
<td>Additional 1kg up to 20 Kg</td>
<td>1.6</td>
<td>1..60</td>
<td>14.4</td>
<td>14.4</td>
</tr>
<tr>
<td>Above 20kg additional per kg</td>
<td>4</td>
<td>5</td>
<td>20</td>
<td>23</td>
</tr>
</tbody>
</table>
<h3>ABX Tracking no</h3>
Delivery via tracking abx express typically takes one to three days, beginning the day following collection and extending to two or three days for international destinations. In addition, ABX Express partners with other major international couriers including UPS, FedEx, DHL, etc., so it may be sent overseas. This tracking number is available for use on our site, and the physical address may be obtained by visiting ABX Painting's official website. Will detail every step you need to take to ensure the integrity of your shipment.
    
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