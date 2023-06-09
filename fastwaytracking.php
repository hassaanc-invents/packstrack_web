
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
  <meta name="description" content="Fastway Tracking is a delivery partner to more than 15,000 domestic and international lines, and it was founded in 2002 in Ireland">
<meta name="keywords" content="Fastway Tracking, Fastway Couriers Tracking, Fastway tracking number, Fastway couriers tracking Australia, Fastway tracking Ireland">
<meta name="author" content="Packstrack">
 <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/fastwaytracking"
  },
  "headline": "Fastway Tracking - Track your package",
  "description": "Fastway Tracking is a delivery partner to more than 15,000 domestic and international lines, and it was founded in 2002 in Ireland",
  "image": "https://packstrack.com/uploaded_files/Fastway%20Tracking%20(1).webp",  
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
  "datePublished": "2023-01-26",
  "dateModified": "2023-03-13"
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "How do I track my parcel with Fastway couriers?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Follow these steps to find out where your package is with Fastway couriers:
Go to www.fastway.com to check out the website for Fastway Couriers.
Click the button that says \"Track\" at the top of the page.
In the space provided, type your tracking number and click \"Track.\"
On the screen, you can see where your parcel is and what its current status is."
    }
  },{
    "@type": "Question",
    "name": "How long does Fastway Ireland take to deliver?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The time it takes for Fastway Ireland to deliver a package depends on a number of things, such as where the package came from and where it's going, the type of service chosen, and any unplanned events that may happen during the delivery process. Most of the time, Fastway Ireland can deliver local and regional parcels within Ireland the next day, and national parcels can be delivered within two to three days. Delivery times may be longer, though, in remote or rural areas or during busy times like the holidays."
    }
  },{
    "@type": "Question",
    "name": "What happens if my package never arrived?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "If you have a tracking number, check to see where your package is in the delivery process. There's a chance that the delivery was tried but failed, or that there was a mistake in the address. If there are any changes to the delivery or problems, they should be shown in the tracking information.
Get in touch with the carrier or courier: If the tracking information doesn't help you solve the problem, call the courier or carrier who is delivering your package. They might be able to give you more information or look into it more.
Contact the sender: If you were supposed to receive the package, you should contact the sender and let them know it hasn't arrived. They might be able to give you more information or file a claim on your behalf with the courier or carrier.
Start a claim: If you can't find your package or get the courier or carrier to fix the problem, you may need to start a claim for the lost or missing package. Most of the time, this means filling out a form and showing proof of the value and contents of the package. The courier or shipping company should be able to tell you more about how to file a claim."
    }
  }]
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
        $blogId = "65";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="Fastway Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <div>
<div>
<div>
<div>
<h1>Fastway Tracking - Track your package</h1>
Fastway Tracking is a delivery partner to more than 15,000 domestic and international lines, and it was founded in 2002 in Ireland, making it one of the oldest and largest trade organizations in the world. Twenty depots spread out across the country, plus a customer service center in the Hotel Langton and the main office in Dublin make up the network's total of twenty-four spots. Collaboration; makes possible over a million visits and 1.6 billion transistors.

</div>
</div>
</div>
<iframe src="https://www.fastway.co.za/our-services/track-your-parcel/" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="350px" width="100%" allowfullscreen></iframe>

<div>
<div>
<div>
<h2>Fastway Couriers Tracking</h2>
Fastway offers a low-priced, dependable local short-haul and national corridor tuition service in critical parts of Ireland and Northern Ireland, including three major cities. It understands that this procedure should be straightforward, which is why they provide a straightforward service without requiring customers to complete any complex formulae or keep any messy notes or consider numerous weighting times. If you need a package delivered locally, nationally, or to the United Kingdom, Fastway IE can help you out at a price that won't break the bank. You can also track <b><a class="text-primary" href="https://packstrack.com/sdatracking" target="_blank" rel="noopener">SDA Tracking</a></b>
<h3>How to track Fastway tracking</h3>
You can easily track your Fastway parcel. Here we will give you some easy tips. By following them you can track your package without wasting your time.
<ul>
 	<li>First, you have a valid tracking number.</li>
 	<li>Enter your tracking number into our real-time tracker.</li>
 	<li>Then press the track button.</li>
 	<li>Wait for a moment.</li>
 	<li>In no time you will see the current status of your package.</li>
 	<li>If you face any problem you can contact<b><a class="text-primary" href="https://www.fastway.ie/courier-services/track-your-parcel/" target="_blank" rel="noopener">Fastway tracking customer support.</a></b></li>
</ul>
<h3>Fastway tracking Customer support number</h3>
Here we will give all the details about Fastway tracking customer support. Here we will give you their Customer support number and Email.
<table>
<tbody>
<tr>
<td><strong>Courier</strong></td>
<td><strong>Contact Number</strong></td>
<td><strong>Email</strong></td>
</tr>
<tr>
<td>Fastway Tracking</td>
<td>+353 1 4242 900</td>
<td>https://www.fastway.ie/</td>
</tr>
</tbody>
</table>
<h3>Fastway tracking number</h3>
A Fastway tracking number is a unique identification code assigned to a package or shipment by a courier company. This number allows you to track the progress of your package as it is being delivered to its final destination. You can use the tracking number to find out the current status of your package, as well as its estimated delivery date and time. Some courier companies also provide additional information about your packages, such as their weight, dimensions, and the location of the nearest pickup location. You can usually find your courier tracking number on the shipping label, your receipt, or in the confirmation email you received when you placed your order.
<h3>Fastway couriers tracking Australia</h3>
Fastway tracking Australia is dedicated to providing its customers with a smooth, stress-free, and hassle-free courier service experience. The company is able to keep its word because of the unwavering devotion of its franchise partners, who provide service for customers that is second to none. Time is of the essence for their clientele, and whether you're an Entry Mary-style internet startup or a Fortune 500 glass conglomerate, they've got a photographic solution for you. Throughout Ireland, from Belfast to the rest of the country, Car Kise has more than 450 franchisees that share the company's dedication to providing excellent service at every turn. This makes it distinct from the competition. You Can also track
<b><a class="text-primary" href="https://packstrack.com/glstracking" target="_blank" rel="noopener">GLS Tracking</a></b>
<h3>Fastway tracking Ireland</h3>
Franchisees of Fastway tracking Ireland use portable scanners to check packages at various different checkpoints before, during, and after delivery. In a matter of minutes, you may check the whereabouts of your package or look at the delivery address and the signed proof of delivery.
<h3>Delivery of Fastway Courier tracking</h3>
Many individuals are curious about Fast courier Tracking and would like to utilize it for their shipments, but they are worried about how long it will take to receive their packages. When sending a shipment from the United States to the United Kingdom or vice versa, how long will it take to arrive?
<ol>
 	<li>One, FAST's voice-to-home services are used daily by people and businesses in Ireland to receive packages within one to two working days.</li>
 	<li>Have their pick of services that provide a speedy and reliable courier service to any location in the Republic of Ireland and Northern Ireland.</li>
 	<li>Within three business days, packages shipped internationally to England, Scotland, or Wales will arrive at their destination.</li>
 	<li>All packages are carefully selected and delivered by hand, so customers can be assured that they will be greeted by friendly and trustworthy delivery people.</li>
</ol>
</div>
</div>
</div>
</div>
<div><footer>
<div>
<div>
<h4><em>FAQs</em></h4>
<ul>
 	<li><em><strong>How do I track my parcel with Fastway couriers?</strong></em></li>
</ul>
Follow these steps to find out where your package is with Fastway couriers:
<ol>
 	<li>Go to www.fastway.com to check out the website for Fastway Couriers.</li>
 	<li>Click the button that says "Track" at the top of the page.</li>
 	<li>In the space provided, type your tracking number and click "Track."</li>
 	<li>On the screen, you can see where your parcel is and what its current status is.</li>
</ol>
<ul>
 	<li><em><strong>How long does Fastway Ireland take to deliver?</strong></em></li>
</ul>
The time it takes for Fastway Ireland to deliver a package depends on a number of things, such as where the package came from and where it's going, the type of service chosen, and any unplanned events that may happen during the delivery process. Most of the time, Fastway Ireland can deliver local and regional parcels within Ireland the next day, and national parcels can be delivered within two to three days. Delivery times may be longer, though, in remote or rural areas or during busy times like the holidays.
<ul>
 	<li><em><strong>What happens if my package never arrived?</strong></em></li>
</ul>
<ol>
 	<li>If you have a tracking number, check to see where your package is in the delivery process. There's a chance that the delivery was tried but failed, or that there was a mistake in the address. If there are any changes to the delivery or problems, they should be shown in the tracking information.</li>
 	<li>Get in touch with the carrier or courier: If the tracking information doesn't help you solve the problem, call the courier or carrier who is delivering your package. They might be able to give you more information or look into it more.</li>
 	<li>Contact the sender: If you were supposed to receive the package, you should contact the sender and let them know it hasn't arrived. They might be able to give you more information or file a claim on your behalf with the courier or carrier.</li>
 	<li>Start a claim: If you can't find your package or get the courier or carrier to fix the problem, you may need to start a claim for the lost or missing package. Most of the time, this means filling out a form and showing proof of the value and contents of the package. The courier or shipping company should be able to tell you more about how to file a claim.</li>
</ol>
</div>
</div>
</footer></div>    
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