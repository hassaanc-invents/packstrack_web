
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
  <meta name="description" content="Poslaju, the country's largest courier service, prides itself on its fast and reliable same-day delivery services and dedicated staff.">
<meta name="keywords" content="Poslaju Tracking, Tracking Poslaju, Tracking number poslaju, poslaju tracking number,no tracking poslaju">
<meta name="author" content="Packstrack">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/poslajutracking"
  },
  "headline": "Poslaju Tracking - Track Your Package",
  "description": "Poslaju, the country's largest courier service, prides itself on its fast and reliable same-day delivery services and dedicated staff",
  "image": "https://packstrack.com/uploaded_files/POS%20Laju%20(1)%20(2)%20(1).webp",  
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
  "datePublished": "2023-01-28",
  "dateModified": "2023-03-13"
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
        $blogId = "67";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="Poslaju Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1 class="LC20lb MBeuO DKV0Md">Poslaju Tracking - Track Your Package</h1>
Poslaju, the country's largest courier service, prides itself on its fast and reliable same-day delivery services and dedicated staff. With our network and supporting staff, we are able to accommodate the requirements of our clients. If you need a quick and secure delivery service, you may have trouble obtaining it in your country. With the service's support of over 10,000 retail locations and the ability to customize delivery based on where you are in Malaysia, receiving packages has never been simpler. They are a provider of mobile packages.

 

Most of the delivery service's employees work extra hours and on weekends to accommodate the needs of their customers, who are willing to pay a premium for guaranteed on-time delivery. If you want to save time and effort, you can use an electronic service that allows you to drop off your package without the use of Whatsapp, as well as an online packing service and a few minutes. Having this information at your disposal will allow you to track the package's whereabouts.

 
<h2>How To track Poslaju tracking</h2>
Please follow these steps to follow your package without wasting your time.
<ul>
 	<li>First, you have a valid <b><a class="text-primary" href="https://tracking.pos.com.my/tracking" target="_blank" rel="noopener">Tracking Number</a>.</b></li>
 	<li>Enter your tracking number into the search bar.</li>
 	<li>Then click the track button.</li>
 	<li>Wait for a moment.</li>
 	<li>In no time you will know the current status of your package.</li>
 	<li>If you face any problem you can contact Poslaju customer support.</li>
</ul>
<h3>Poslaju tracking Customer support</h3>
If you want to know their shipping charges you can contact with. here we will give you their contact number and email.
<table>
<thead>
<tr>
<th>Courier</th>
<th>Contact Number</th>
<th>Email</th>
<th>Main Office Address</th>
</tr>
</thead>
<tbody>
<tr>
<td>Poslaju Tracking</td>
<td>+603 2267 2267</td>
<td>care@pos.com.my</td>
<td>Dayabumi Complex, 50670 Kuala Lumpur, Malaysia.</td>
</tr>
</tbody>
</table>
 

You can get in touch with Poslaju's helpful customer service team via any of several different channels. If you prefer to call, you can use the phone number provided above. If you prefer to send an email, you can use the email address provided above. You prefer to use an online contact form, you can use the link provided above to access the form on the Poslaju website. It's important to keep in mind that the hours and locations where customer service is offered can change. If you have tried all of the above and still have not been able to get in touch with Poslaju, perhaps you should try again later.
<h3 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">Tracking Poslaju</span></h3>
<div></div>
<div>Above, it was mentioned that the Tracking Poslaju can be used to check a package. However, in order to ensure that you receive an accurate update, you must adhere to the following guidelines: If you have access to a computer and an internet connection, you can have a tummy tuck performed by the lets or their agents at any time. Permeable and legitimate track number  11 takes time to track, which is why there is a dedicated technology built into the online motivation tracking system, which allows you to recalculate your position in a matter of seconds. merely take note of the verses Because of this verse, you should never neglect any of the technique numbers if you plan on checking more than one at a time.</div>
<div></div>
<div>

There are other ways to track a package besides doing so from a computer. Their tracking system also has a specialized app for Android smartphones, so you can keep tabs on your loved ones even if you can't be near a computer. In order to use it, you must first register for an account and wait for it to load. This must be done before you can use the app's features, but once your account has been approved, you can. To get as close as it can, tracking also has a facial social media account. Facebook, Twitter, Google Plus, LinkedIn, YouTube, and many more all have excellent resources for information and news. You can also track <b><a class="text-primary" href="https://packstrack.com/lineclearexpress" target="_blank" rel="noopener">Line Clear Express</a>.</b>

</div>
<h3>Book a POSlajau Shipment</h3>
Please fill out this form and know your shipping charges.

<a href="https://www.pos.com.my/send/ratecalculator.html" target="_blank" rel="noopener"><img class="aligncenter wp-image-4031 size-full" src="https://patchserialkey.com/wp-content/uploads/2023/02/Screenshot-2023-02-22-140636.png" alt="poslaju tracking" width="1224" height="510" /></a>
<div>
<h3 class="css-a5m6co-text css-p8ym46-fontFamily css-11397xj-fontSize css-15qzf5r-display css-7bji7i-wordBreak"><span class="">Tracking number poslaju</span></h3>
When you send a package using the Poslaju courier service, you'll be given a tracking number. With this number, you can check on the delivery status of your package and find out when you can expect to receive it. Tracking numbers for Poslaju packages typically have 11 or 13 digits and may contain both alphabetic characters and numerical digits. When you ship a package through Poslaju, the <span class="">poslaju tracking number </span>will be included on the receipt you receive at the store or online. You can use the Pos Malaysia website or the Poslaju mobile app in conjunction with your Poslaju tracking number to monitor the delivery status of your package. If you know your package's tracking number, you can find out when it's expected to arrive and what its current status is. I really do hope this is useful. If you have any other inquiries, please let me know.
<div class="flex-1 overflow-hidden">
<div class="react-scroll-to-bottom--css-wjqyp-79elbk h-full dark:bg-gray-800">
<div class="react-scroll-to-bottom--css-wjqyp-1n7m0yu">
<div class="flex flex-col items-center text-sm h-full dark:bg-gray-800">
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group dark:bg-gray-800">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="relative flex w-[calc(100%-50px)] md:flex-col lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<h3 class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap">no tracking poslaju</h3>
</div>
<div class="text-gray-400 flex self-end lg:self-center justify-center mt-2 gap-4 lg:gap-1 lg:absolute lg:top-0 lg:translate-x-full lg:right-0 lg:mt-0 lg:pl-2 visible"></div>
</div>
</div>
</div>
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group bg-gray-50 dark:bg-[#444654]">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="w-[30px] flex flex-col relative items-end">
<div class="relative h-[30px] w-[30px] p-1 rounded-sm text-white flex items-center justify-center"></div>
</div>
<div class="relative flex w-[calc(100%-50px)] md:flex-col lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<div class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap">
<div class="markdown prose w-full break-words dark:prose-invert light">

If you are unable to track your Poslaju package using the tracking number, there could be a few reasons for this. Here are a few possible explanations:
<ol>
 	<li>The tracking number may be incorrect or invalid. Double-check the tracking number to make sure it is correct.</li>
 	<li>The package may not have been shipped yet. It can take some time for the tracking information to be updated after the package has been shipped.</li>
 	<li>The tracking information may not have been updated yet. Poslaju updates tracking information regularly, but it can take some time for the latest information to be reflected on the tracking website or app.</li>
 	<li>There may be a problem with the Poslaju tracking system. In rare cases, the tracking system may be experiencing technical issues that prevent tracking information from being displayed.</li>
</ol>
If you are unable to track your Poslaju package and none of the above explanations seem to apply, you can try contacting Pos Malaysia customer service for assistance. They should be able to help you resolve the issue and provide you with more information on the status of your package. You can also track <b><a class="text-primary" href="https://packstrack.com/tnttracking" target="_blank" rel="noopener">TNT Tracking</a>.</b>

</div>
</div>
</div>
<div class="text-gray-400 flex self-end lg:self-center justify-center mt-2 gap-4 lg:gap-1 lg:absolute lg:top-0 lg:translate-x-full lg:right-0 lg:mt-0 lg:pl-2 visible"></div>
</div>
</div>
</div>
<div class="w-full h-48 flex-shrink-0">
<div class="flex-1 overflow-hidden">
<div class="react-scroll-to-bottom--css-wjqyp-79elbk h-full dark:bg-gray-800">
<div class="react-scroll-to-bottom--css-wjqyp-1n7m0yu">
<div class="flex flex-col items-center text-sm h-full dark:bg-gray-800">
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group dark:bg-gray-800">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="relative flex w-[calc(100%-50px)] md:flex-col lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<h3 class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap">Cek tracking poslaju</h3>
</div>
<div class="text-gray-400 flex self-end lg:self-center justify-center mt-2 gap-4 lg:gap-1 lg:absolute lg:top-0 lg:translate-x-full lg:right-0 lg:mt-0 lg:pl-2 visible"></div>
</div>
</div>
</div>
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group bg-gray-50 dark:bg-[#444654]">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="w-[30px] flex flex-col relative items-end">
<div class="relative h-[30px] w-[30px] p-1 rounded-sm text-white flex items-center justify-center"></div>
</div>
<div class="relative flex w-[calc(100%-50px)] md:flex-col lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<div class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap">
<div class="markdown prose w-full break-words dark:prose-invert light">

To check the tracking information for a Poslaju package, you can use the Poslaju tracking system on the Pos Malaysia website or the Poslaju mobile app. Here's how:
<ol>
 	<li>Go to the Pos Malaysia website or open the Poslaju mobile app.</li>
 	<li>Click on the "Track & Trace" tab.</li>
 	<li>Enter your Poslaju tracking number in the designated field. This number should be provided to you on the receipt you received when you dropped off your package at a Poslaju location or when you received notification that your package had been shipped.</li>
 	<li>Click "Track" or "Search" to view the current status of your package and its estimated delivery date.</li>
</ol>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<h3>Conclusion Of Poslaju</h3>
<div class="flex-1 overflow-hidden">
<div class="react-scroll-to-bottom--css-wjqyp-79elbk h-full dark:bg-gray-800">
<div class="react-scroll-to-bottom--css-wjqyp-1n7m0yu">
<div class="flex flex-col items-center text-sm h-full dark:bg-gray-800">
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group bg-gray-50 dark:bg-[#444654]">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="relative flex w-[calc(100%-50px)] md:flex-col lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<div class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap">
<div class="markdown prose w-full break-words dark:prose-invert light">Pos Malaysia, the country's official postal service, also operates a courier service known as Poslaju. It provides shipping and delivery services to customers both at home and abroad. Go to the Pos Malaysia website and enter the tracking number for your Poslaju package to follow its progress. You will receive a receipt with your tracking number when you drop off your package at a Poslaju location or when you are notified that your package has been shipped. The tracking number allows you to check on the delivery of your package at any time. You can use the Poslaju mobile app to monitor the delivery of your packages in addition to the website. The app can be found in both the Apple App Store and the Google Play Store. Same-day delivery, next-day delivery, and even delivery to rural areas are all available through Poslaju. When you drop off your package at a Poslaju location or place an online order, you can select the delivery option that best suits your needs. Thank you for reading this, and I hope it is useful. If you have any other inquiries, please let me know.</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div></div>
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