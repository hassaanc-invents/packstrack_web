
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
  <meta name="description" content="Concor Tracking gives its customers end-to-end logistics solutions, such as tracking services for containers.">
<meta name="keywords" content="Concor Tracking, Concor container tracking, Container Tracking Concor, Concor Tracking Number, How To track Concor Tracking number">
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
        $blogId = "95";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="Concor Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>Concor Tracking - Track and Trace your Parcel</h1>
Container Corporation of India Ltd (CONCOR), which is run by the Indian government, is in charge of tracking the movement of containers. This is called "Concor Container Tracking." Concor Tracking gives its customers end-to-end logistics solutions, such as tracking services for containers. Customers can find out where their containers are and what's going on with them by going to the CONCOR website or calling customer service. By giving customers real-time information about their containers, the service helps them improve the efficiency of their supply chain, cut costs, and optimize their supply chain. Under the Companies Act, Container and Position of India Limited was formed in March 1988. It started doing business in November 1989, when it took over the existing ICDS seven networks for train transport services.

 

The goal was to help freight lines' container cargo handlers do a better job. In March 1988, the Companies Act recognized the Container and Position of India Limited as the country's largest inland transport company. So it's not surprising that Concor and India's most reliable and fastest logistics company is Concor. The company offers logistics services on land and sea, as well as 3 PLs. Their network is spread out all over India and acts as a supply chain that shares up-to-date information while goods are being shipped. It was made so that you can track your packages, and it started running in November 1989. It took over the ICDS seven networks for freight lines, which were already in place. I was supposed to improve how well container cargo handlers did their jobs.
<h2>Concor container tracking</h2>
The company has a full transportation plan for India that includes both land and sea transport. Rail is the backbone of the country's multi-modal logistics support system, but it also meets needs from door to door. We also offer road services, whether you're shipping internationally or just within the country. As a customer-driven company, Concor is focused on providing quality logistics solutions at reasonable prices. From goods to stones and everything in between, if you need us for anything, we are there for you.
<h3>Container Tracking Concor</h3>
Since it started, it has grown to have the largest network of ECDSCFs 8 in India, making it the undisputed market leader for domestic rail transportation services. Aside from this, it has also put a lot of effort into managing ports, building air cargo complexes, and setting up cold chains. The company has played a role and will continue to play a role in providing multi-modal logistics support for India's international and domestic logistics and trade, even though rail is the mainstay of our transportation plant to meet the needs of road services and domestic services. It is also used to do business between countries. You can also track <a class="text-primary" href="https://packstrack.com/marutiaircourier" target="_blank" rel="noopener">Maruti Air Courier</a>
<h3>Concor Tracking Number</h3>
Each package is given a unique code or Unicode, that can be used to track it. With this number, you can find out where your package is. If you're sending something somewhere, the tracking number will be on the invoice. Here, we'll explain what it is, how to use it, and how to get it back if you lose it. How to get better You can get your check number back if you lose it by calling the tracking number support. With this tracking number, you can find out where your package is. You can track your package and find out how long it will take to get to you. You can talk to customer service if you have any problems. Here, we'll show you how to use the Internet to track a Concor tracking number.
<h3>How To track Concor Tracking number</h3>
Here we will tell you the easy way to track the package following which you will be able to track your package without wasting time. Please follow the below steps.
<ul>
 	<li aria-level="1">First, You have a valid b><a class="text-primary" href="https://concorindia.co.in/containerquery.aspx" target="_blank" rel="noopener">"tracking number"</a>.</li>
 	<li aria-level="1">Enter your tracking number into the search bar.</li>
 	<li aria-level="1">Then press the Track button.</li>
 	<li aria-level="1">In no time you will see the current status of your package.</li>
 	<li aria-level="1">If you face any issues you can contact Concur customer support.</li>
</ul>
<h3>Concor Customer Support</h3>
If you face any issues or want to know their service charges. Here we will give you their contact number and email.
<table>
<tbody>
<tr>
<td><b>Courier</b></td>
<td><b>Contact Number</b></td>
<td><b>Email</b></td>
<td><b>Main Office Address</b></td>
</tr>
<tr>
<td>Concor Tracking</td>
<td>91-11-41222500</td>
<td>co.pro@concorindia.com</td>
<td>CONCOR Bhawan, C-3, Mathura Road, Opposite Apollo Hospital New Delhi – 110  076</td>
</tr>
</tbody>
</table>
Branches of Concor Tracking   Here are some branches are their address
<table>
<tbody>
<tr>
<td><b>Branch City</b></td>
<td><b>Contact Number</b></td>
<td><b>Address</b></td>
</tr>
<tr>
<td>Bangalore</td>
<td>91 80 2845 2086</td>
<td>Whitefield, Whitefield Main Road (2,353.39 km) Bangalore, Karnataka, India -560066</td>
</tr>
<tr>
<td>Hyderabad</td>
<td>91 40 2370 8080</td>
<td>Shakti Nagar, Moosapet, Hyderabad, Telangana 500018</td>
</tr>
<tr>
<td><i>Jaipur</i></td>
<td>91 141 240 5800</td>
<td>CONCOR, Kanakpura, Gokulpura, Jaipur, Rajasthan 302012</td>
</tr>
</tbody>
</table>
<h3>FAQs</h3>
<ul>
 	<li aria-level="1"><b>How long does it take for Concor tracking to deliver?</b></li>
</ul>
The time it takes for a shipment tracked by Concor (Container Corporation of India Limited) to arrive depends on a number of things, like where the shipment came from and where it's going, how it's being sent (by air, sea, or rail), and whether or not customs or regulatory clearances are needed. Without more information, it is not possible to say when something will be delivered.
<ul>
 	<li aria-level="1"><b>Is Concor tracking shipping expensive?</b></li>
</ul>
The cost of shipping with Concor (Container Corporation of India Limited) depends on a number of things, such as the size and weight of the shipment, the origin and destination of the shipment, and the mode of transport (air, sea, or rail). You should also think about things like insurance, customs duties, and any other extra costs that might apply to your shipment. Shipping costs can't be figured out with Concor without more specific information.    
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