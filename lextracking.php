
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
  <meta name="description" content="Lazada Express (LEX) Tracking is an order tracking and monitoring service offered by Lazada Express logistics.">
<meta name="keywords" content="Lex Tracking, Lazada Express Tracking, How to track LEX Tracking Number, Lex tracking Customer Support">
<meta name="author" content="Packstrack">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/lextracking"
  },
  "headline": "Lex Tracking",
  "description": "Lazada Express (LEX) Tracking is an order tracking and monitoring service offered by Lazada Express logistics.",
  "image": "https://packstrack.com/uploaded_files/lazada%20(1).webp",  
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
      "url": ""
    }
  },
  "datePublished": "2023-01-30",
  "dateModified": "2023-03-30"
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
        $blogId = "74";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="LEX tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1><span style="font-weight: 400;">Lex Tracking</span></h1>
 

<span style="font-weight: 400;">Lazada Express (LEX) Tracking is an order tracking and monitoring service offered by Lazada Express logistics. Customers may check the order's status in real-time and see when it's expected to arrive thanks to this service. By inputting their tracking number, customers of Lazada can check the status of their LEX shipments. Customers can check their Lazada app order history or the delivery confirmation email for their tracking number. Customers are able to see their order's expected delivery date, present position, and a history of delivery status updates once they enter their tracking number.</span>

 

<span style="font-weight: 400;">Customers can see the estimated delivery date of their order using LEX tracking based on the shipment address. The consumer might expect to receive the following types of updates from the tracking service:</span>

 
<ul>
 	<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Confirmed Order</span></li>
 	<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Packaged Orders</span></li>
 	<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Delivered orders</span></li>
 	<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Place a takeout or delivery order.</span></li>
 	<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">It arrived as ordered</span></li>
</ul>
 

<span style="font-weight: 400;">In conclusion, Lazada Express eLogistics' LEX tracking is a helpful tool that gives customers up-to-the-moment details on their items' whereabouts and projected delivery times.</span>

 
<h2><span style="font-weight: 400;">How to track LEX Tracking Number</span></h2>
 

<span style="font-weight: 400;">Follow these steps to track your package online without wasting your time.</span>

 
<ul>
 	<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">First, you have a Valid tracking number.</span></li>
 	<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Enter your tracking number into the search bar.</span></li>
 	<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Then press the track button.</span></li>
 	<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Wait for a moment while it is processing.</span></li>
 	<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">In no time you will see the current status of your package.</span></li>
 	<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">If you face any problem you can contact Lex tracking Customer Support.</span></li>
</ul>
 
<h3><span style="font-weight: 400;">Lex tracking Customer Support</span></h3>
<span style="font-weight: 400;">If you want to know their service charges or facing any issues you can contact them. Here we will give you their contact number and email.</span>

 
<table>
<tbody>
<tr>
<td><b>Courier</b></td>
<td><b>Contact Number</b></td>
<td><b>Email</b></td>
<td><b>Main Office Address</b></td>
</tr>
<tr>
<td><span style="font-weight: 400;">LEX Tracking</span></td>
<td><span style="font-weight: 400;">603-27286600</span></td>
<td><span style="font-weight: 400;">Customersupport@lex.com</span></td>
<td><span style="font-weight: 400;">Level 20, Menara Worldwide 198 Jalan Bukit Bintang 55100 Kuala Lumpur</span></td>
</tr>
</tbody>
</table>
 
<h3><span style="font-weight: 400;">Lex my tracking</span></h3>
<span style="font-weight: 400;">Lex Tracking is a logistics and delivery option given by the dominant Southeast Asian e-commerce platform, Lazada. Same-day and next-day delivery, in addition to more typical delivery windows, are all made available to Lazada merchants through this service.</span>

 

<span style="font-weight: 400;">To get products to customers quickly and easily, Lazada Express eLogistics has established a system of warehouses and distribution hubs and formed agreements with local couriers and logistics companies. Customers may check the status of their orders and get real-time updates via the Lazada app, which includes tracking and delivery confirmation.</span>

 

<span style="font-weight: 400;">The service provides additional services, such as Cash on delivery and Return and refund, to further simplify the buying experience for the customer.</span>

 

<span style="font-weight: 400;">In sum, Lazada Express eLogistics strives to provide a quick, efficient, and dependable delivery service for Lazada consumers, assisting in the timely and undamaged delivery of Lazada purchases.</span>

 
<h3><span style="font-weight: 400;">lex my tracking number</span></h3>
 

<span style="font-weight: 400;">Lazada Express (LEX) eLogistics assigns a tracking number, sometimes called a waybill number, to each product or shipment so that its location and delivery status can be followed in real-time. Customers can use this number in conjunction with LEX's tracking service to keep tabs on their packages' whereabouts within the company's logistics system. When an order is placed on Lazada, customers receive a confirmation email with a tracking number. You can find the tracking number, which is a string of letters and numbers, on the package's mailing label.</span>

 

<span style="font-weight: 400;">When a consumer receives their tracking number, they can check its status, see when it will arrive, and see a history of delivery status updates by entering it into the LEX tracking service on the Lazada website or app. Customers will be able to track their packages' whereabouts and expected delivery times in real-time with the help of this service. In conclusion, a tracking number is a unique number provided to a parcel by LEX eLogistics for the purpose of tracking and monitoring its movement and delivery status, and it is also used by customers to track their shipments using the LEX tracking service. Protect the tracking number since it will be required to check on the delivery status of your product and to sign for it when it arrives.</span>

     
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