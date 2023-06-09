
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
  <meta name="description" content=" Rivigo is one of the biggest courier companies in India. Rivigo Tracking is a first tracking that grows very fast. It was founded in 2004 by Mr. Deepak Garg">
<meta name="keywords" content="Rivigo Tracking, Rivigo Transport Tracking, Rivigo Tracking Check Online, How To Check Rivigo tracking Online, Rivigo tracking customer care number">
<meta name="author" content="Packstrack">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/rivigotracking"
  },
  "headline": "Rivigo Tracking | Track your Parcel",
  "description": "Rivigo is one of the biggest courier companies in India. Rivigo Tracking is a first tracking that grows very fast.",
  "image": "https://packstrack.com/uploaded_files/rivigo%20(1).webp",  
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
  "datePublished": "2023-01-09",
  "dateModified": "2023-03-01"
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "How do I track my Rivigo Tracking number?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Follow these steps to track your Rivigo tracking number:
Visit the Rivigo website or get the Rivigo app on your phone.
Click on the link that says \"Track a Shipment.\"
In the field provided, type in your Rivigo tracking number.
Click the \"Track\" button to see where your shipment is right now.
You can also track your Rivigo shipment through third-party shipment tracking websites by
entering your Rivigo tracking number in the search bar on their website."
    }
  },{
    "@type": "Question",
    "name": "How to book a shipment on Rivigo tracking?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Follow these steps to book a shipment on Rivigo:
Visit the Rivigo website or get the Rivigo app on your phone.
Click on the option \"Book a Shipment.\"
Enter the locations of where to pick up and where to deliver, as well as the date and time.
Enter the size and weight of the package.
Choose the kind of vehicle that can carry the shipment.
You can choose any extra services you need, like packing, loading, unloading, etc.
Enter your contact information and any special shipping instructions.
Review the information you've put in and click \"Confirm Booking\" to finish the booking process.
You can also book a shipment by calling Rivigo's customer service line or talking to a Rivigo representative in your area."
    }
  },{
    "@type": "Question",
    "name": "How can I contact with Rivigo Tracking?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "You can track your package and ask Rivigo other questions in the following ways: ☑. Customer service number: If you have any questions about tracking, booking, pricing, etc., you can call Rivigo's customer service number at 1-800-123-2000. ☑. Email: If you have any questions or concerns, you can send an email to customercare@rivigo.com. ☑. Live Chat: You can talk to a customer service representative through the Rivigo website or app's live chat feature. ☑. Social Media: You can contact Rivigo through their official Facebook, Twitter, LinkedIn, and Instagram accounts. ☑. Contact form: You can also send questions and concerns to Rivigo by filling out the contact form on its website. ☑. Local representative: If you live in an area where there is a Rivigo representative, you can also talk to them directly if you have any questions or concerns."
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
        $blogId = "36";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="Rivigo Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1 style="text-align: center;">Rivigo Tracking | Track your Parcel</h1>
 
<iframe src="https://www.rivigo.com/support/#trackshipment" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="800px" width="100%" allowfullscreen></iframe>

 
<h2>Rivigo Tracking</h2>
Rivigo is one of the biggest courier companies in India. Rivigo Tracking is a first tracking that grows very fast. It was founded in 2004 by Mr. Deepak Garg. Rivingo Tracking is a Logistic courier company that is investing in Pipeline. They are launching new technology technics. They are using modern ways of shipping and transport. They are solving the issue of the shortage of truck drivers with new technics.
<h2></h2>
<h3>Rivigo Transport Tracking</h3>
<h2></h2>
Rivigo Transport Tracking's primary goal is to protect and fast human beings, Transport, and Delivery. It is very safe. You can trust it. Rivigo tracking consignments Promise to deliver your product on time. They provide a Good Transport. They have buses or vans for school and college students. They have a team of experienced people for your service. Rivigo services tracking are giving its services in many states of India. You can also enjoy their service. You can also track <b><a href="https://packstrack.com/anjanicouriertracking" target="_blank"  class="text-primary">Anjani Courier Tracking</a></b>

<h2></h2>
<h3>Rivigo Tracking Check Online</h3>
When you send anything via Rivigo Courier tracking they give a tracking number. They send this tracking to your Gmail. If you book a ticket they also give you a number. This tracking number contains all the details of your package. You can check it online. Here we will guide you on how to check Rivigo Tracking online.
<h2></h2>
<h3>How To Check Rivigo tracking Online</h3>
Follow these steps to Check Rivigo tracking online.
<h2></h2>
<ul>
 	<li aria-level="1">First, you have a tracking number that is given by <b><a href="https://www.trackmycouriers.com/rivigo-tracking/" target="_blank"  class="text-primary">"Rivigo tracking"</a></b>
.</li>
 	<li aria-level="1">Enter your tracking into our real-time tracker.</li>
 	<li aria-level="1">Then press track for processing.</li>
 	<li aria-level="1">Soon you will know the complete details.</li>
 	<li aria-level="1">If you face any problem you can contact Rivigo tracking contact number.</li>
</ul>
<h2></h2>
<h3>Rivigo tracking customer care number</h3>
<h2></h2>
If you face any problem or want to know about their services you can contact Rivigo's tracking customer care number. Here we will give you their Contact number and Gmail. You can also track <b><a href="https://packstrack.com/vtranstracking" target="_blank"  class="text-primary">V Trans Tracking</a></b>
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
<td>Rivigo tracking</td>
<td>1800-121-8966</td>
<td>service@rivigo.com</td>
<td>Plot No. 90, sector-44, Gurugram, Haryana-12203</td>
</tr>
</tbody>
</table>
 
<h3>FAQs</h3>
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group dark:bg-gray-800">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="relative flex w-[calc(100%-50px)] flex-col gap-1 md:gap-3 lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<ul>
 	<li class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap"><strong>How do I track my Rivigo Tracking number?</strong></li>
</ul>
</div>
<div class="text-gray-400 flex self-end lg:self-center justify-center mt-2 gap-3 md:gap-4 lg:gap-1 lg:absolute lg:top-0 lg:translate-x-full lg:right-0 lg:mt-0 lg:pl-2 visible">

Follow these steps to track your Rivigo tracking number:
<ol>
 	<li>Visit the Rivigo website or get the Rivigo app on your phone.</li>
 	<li>Click on the link that says "Track a Shipment."</li>
 	<li>In the field provided, type in your Rivigo tracking number.</li>
 	<li>Click the "Track" button to see where your shipment is right now.</li>
 	<li>You can also track your Rivigo shipment through third-party shipment tracking websites by</li>
 	<li>entering your Rivigo tracking number in the search bar on their website.</li>
</ol>
</div>
<div class="flex justify-between"></div>
</div>
</div>
</div>
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group bg-gray-50 dark:bg-[#444654]">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="w-[30px] flex flex-col relative items-end">
<ul>
 	<li class="relative h-[30px] w-[30px] p-1 rounded-sm text-white flex items-center justify-center"><strong>How to book a shipment on Rivigo tracking?</strong></li>
</ul>
</div>
<div class="relative flex w-[calc(100%-50px)] flex-col gap-1 md:gap-3 lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<div class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap">
<div class="markdown prose w-full break-words dark:prose-invert dark">

Follow these steps to book a shipment on Rivigo:
<ol>
 	<li>Visit the Rivigo website or get the Rivigo app on your phone.</li>
 	<li>Click on the option "Book a Shipment."</li>
 	<li>Enter the locations of where to pick up and where to deliver, as well as the date and time.</li>
 	<li>Enter the size and weight of the package.</li>
 	<li>Choose the kind of vehicle that can carry the shipment.</li>
 	<li>You can choose any extra services you need, like packing, loading, unloading, etc.</li>
 	<li>Enter your contact information and any special shipping instructions.</li>
 	<li>Review the information you've put in and click "Confirm Booking" to finish the booking process.</li>
 	<li>You can also book a shipment by calling Rivigo's customer service line or talking to a Rivigo representative in your area.</li>
</ol>
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group dark:bg-gray-800">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="relative flex w-[calc(100%-50px)] flex-col gap-1 md:gap-3 lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<ul>
 	<li class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap"><strong>How can I contact with Rivigo Tracking?</strong></li>
</ul>
</div>
<div class="flex justify-between"></div>
</div>
</div>
</div>
You can track your package and ask Rivigo other questions in the following ways:

☑. Customer service number: If you have any questions about tracking, booking, pricing, etc., you can call Rivigo's customer service number at 1-800-123-2000.

☑. Email: If you have any questions or concerns, you can send an email to customercare@rivigo.com.

☑. Live Chat: You can talk to a customer service representative through the Rivigo website or app's live chat feature.

☑. Social Media: You can contact Rivigo through their official Facebook, Twitter, LinkedIn, and Instagram accounts.

☑. Contact form: You can also send questions and concerns to Rivigo by filling out the contact form on its website.

☑. Local representative: If you live in an area where there is a Rivigo representative, you can also talk to them directly if you have any questions or concerns.
    
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