
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
  <meta name="description" content=" Are you looking for a website to Track Madhur Courier tracking? You are in right place">
<meta name="keywords" content="Madhur Courier Tracking, How to track Madhur's Courier Tracking?, Madhur courier Tracking Customer Support Number, Madhur Courier Service Tracking, Madhur Courier Tracking Status Online">
<meta name="author" content="Packstrack">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/madhurcouriertracking"
  },
  "headline": "Madhur Courier Tracking | Track your Parcel",
  "description": "Are you looking for a website to Track Madhur Courier tracking? You are in right place. Many websites show wrong information.",
  "image": "https://packstrack.com/uploaded_files/madhur%20(1).webp",  
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
  "datePublished": "2023-01-08",
  "dateModified": "2023-03-01"
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "How do I track my Madhur Courier Tracking?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "With Madhur Courier Services, you will need your tracking number or reference number to track your shipment. This number is usually given to you when you schedule the shipment or when the courier company confirms it. Follow these steps to find out where your package is:
Go to the website for Madhur Courier Services: If Madhur Courier Services has a website, go to it and look for a section that says \"Tracking\" or \"Shipment Status.\"
Type in your track number: On the tracking page, put your shipment's tracking number or reference number in the space provided.
Track your shipment: After entering your tracking number, click \"Track\" or a similar button to see where your shipment is at the moment."
    }
  },{
    "@type": "Question",
    "name": "How long does Madhur courier take to deliver?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Delivery times for Madhur Courier Services depend on a number of things, like where the shipment is going, which shipping method is used, and how many shipments the company is handling at the time."
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
        $blogId = "34";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="Madhur Courier Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1 style="text-align: center;">Madhur Courier Tracking | Track your Parcel</h1>
 
<iframe src="https://www.madhurcouriers.in/(S(1x2ot3x5iqrhlyv0kdpnwamg))/CNoteTracking" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="400px" width="100%" allowfullscreen></iframe>
 
<h2>Madhur Courier Tracking</h2>
<h2></h2>
Are you looking for a website to Track Madhur Courier tracking? You are in right place. Many websites show wrong information. Here you can track your package in our real-time tracker. Our status tracker is real-time which means unlike other websites you won't be redirected to another website or you won't experience a delay in terms of layman some websites provide tracking service and Once all the details are entered, they are not redirected and wasted time. Any full tracking to solve these problems goes forward to give the value of time and energy to its users. Just enter your Madhurt Tracking Number in the form and press No more worries.
<h2></h2>
We help you to easily access the online tracking system operated by us to easily track the current status of the shipment instead of calling the Madhur Courier tracking customer service center at your location.
<h2></h2>
<h3>How to track Madhur's Courier Tracking?</h3>
When you send anything via Madhur Courier Tracking online, They give a tracking number. With this tracking number, you can track your Package online. Here we tell you how to track Madhur courier tracking online.
<h2></h2>
<ul>
 	<li aria-level="1">First, you have a tracking number that is given by <b><a class="text-primary" href="https://www.citylinkexpress.com/track-your-shipment/" target="_blank" rel="noopener">Madhur courier tracking</a></b>
.</li>
 	<li aria-level="1">Enter your tracking number into our real-time tracker.</li>
 	<li aria-level="1">Then click the track button for your package status.</li>
 	<li aria-level="1">In a few seconds, you will know the complete details.</li>
 	<li aria-level="1">If you face any problem you can contact Customer support.</li>
</ul>
<h2></h2>
<h3>Madhur courier Tracking Customer Support Number</h3>
If you want to contact the Madhur Courier tracking Customer Support number, we will provide you here.
<h2></h2>
<table>
<tbody>
<tr>
<td>Courier</td>
<td>Contact Number</td>
<td>Email</td>
<td>Address</td>
</tr>
<tr>
<td>Madhur Courier Tracking</td>
<td>0755- 4022222 / 4022211.</td>
<td>query@madhurexpress.net</td>
<td>231/232 Shalimar Trade Centre Hamidia Road, Bhopal-462001 Madhya Pradesh, India.</td>
</tr>
</tbody>
</table>
<h2></h2>
<h4>Madhur Courier Service Tracking</h4>
<h2></h2>
You can track any Madhur tracking number with the help of our tracking tool and find out the current status of your package. Here we will tell you the simple way to check the package so that you can easily check your package without wasting your time.
<h2></h2>
MSC-  Madhur Courier Tracking is one of the best and most famous express delivery in India. The company started its services in Bhopal in 1986 and now it has a network of more than 60,000 Pincodes and 24,60 franchisees. Madhur courier tracking number has gained a strong foothold in thousands of its cargo and textile and other small-scale industrial sectors. However, apart from the expertise in the garment market, the wisdom extends from other provinces to finance, telecom, mobile banking, and pharmaceuticals. You can also track <b><a class="text-primary" href="https://packstrack.com/gatitracking" target="_blank" rel="noopener">Gati Tracking</a></b>
<h2></h2>
<h3>Madhur Courier Tracking Status Online</h3>
<h2></h2>
Madhuri Courier Track your pass and document by simply selecting the courier company as the carrier and entering your consignment. You don't need pages on Madhur's website so what are you waiting, for now, track your package. Madhur Courier Services has done its important services under different names for various segments of industries. Madhur courier service DONATION DISTRIBUTOR COURIER FAST EXPRESS DELIVERY AND ONLY FOR SCHOOL CARGO OVERWEIGHT CONSIGNMENTS INCLUDING CUSTOM FORMALITIES INTERNATIONAL SERVICES A value-added service is offered for international delivery such as all its friend's entry tracking. Convenience Madurai's instant proof of easy payment options and supply chain solutions for your cargo at any time, if needed, is a delivery and distribution service with outstanding achievements from 28 years.
<h2></h2>
<h3>Madhur Courier Network</h3>
<h2></h2>
Madhur Courier Tracking Services is one of the most knowledgeable tracking services in all over India. Madhur Courier Network is one of the first Indian Express to be established in India but the history of any train service starts from the capital city of Bhopal. Originating from the state of Madhya Pradesh, India, Huzur Service was founded in 1985. Madhur Courier Company has been operating for the past two and a half years. The tracking company spread in different parts will work successfully for the country at this time. Initially, this online track textile tracking set as his core member because but first wants to gain market power within the small-scale industry.
<h2></h2>
<h3>Madhur courier tracking online</h3>
The service provides an online Madhur tracking number, after which you select location contact information, which region of India you want to wash the parcel, a specific address for the city, and an email address contact information. Furthermore, after adding the tracking number mentioned in the small example box, the pin codes of that particular city are clicked on a button on the mother online train website. One of the easiest things about Mandar online train service is that you can easily track the parcel within a few seconds, so Dragon Service has made sure that it is easy to track your package. You can check the status and in case of any complaint you can contact them and it is completely free. You can also track <b><a class="text-primary" href="https://packstrack.com/vtranstracking" target="_blank" rel="noopener">V Trans Tracking</a></b>
<h3>FAQs</h3>
<ul>
 	<li><strong>How do I track my Madhur Courier Tracking?</strong></li>
</ul>
With Madhur Courier Services, you will need your tracking number or reference number to track your shipment. This number is usually given to you when you schedule the shipment or when the courier company confirms it.

Follow these steps to find out where your package is:
<ol>
 	<li>Go to the website for Madhur Courier Services: If Madhur Courier Services has a website, go to it and look for a section that says "Tracking" or "Shipment Status."</li>
 	<li>Type in your track number: On the tracking page, put your shipment's tracking number or reference number in the space provided.</li>
 	<li>Track your shipment: After entering your tracking number, click "Track" or a similar button to see where your shipment is at the moment.</li>
</ol>
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group dark:bg-gray-800">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="relative flex w-[calc(100%-50px)] flex-col gap-1 md:gap-3 lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group bg-gray-50 dark:bg-[#444654]">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<ul>
 	<li><strong>How long does Madhur courier take to deliver?</strong></li>
</ul>
<div class="relative flex w-[calc(100%-50px)] flex-col gap-1 md:gap-3 lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<div class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap">
<div class="markdown prose w-full break-words dark:prose-invert dark">

Delivery times for Madhur Courier Services depend on a number of things, like where the shipment is going, which shipping method is used, and how many shipments the company is handling at the time.
    
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