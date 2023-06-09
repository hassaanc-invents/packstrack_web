
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
  <meta name="description" content="UMAC Tracking is a courier service that works in many countries. It sends your package safely to places like the Philippines, Canada, the United States">
<meta name="keywords" content="UMAC Tracking, UMAC Express Cargo, Umac Cargo boxes, Freedom Umac tracking Internationally, FAQs">
<meta name="author" content="Packstrack">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/umacexpresscargo"
  },
  "headline": "UMAC Tracking - Track your Package",
  "description": "UMAC Tracking is a courier service that works in many countries. It sends your package safely to places like the Philippines, Canada, the United States, Spain, and Hong Kong.",
  "image": "https://packstrack.com/uploaded_files/umac%20(1).webp",  
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
  "datePublished": "2023-01-13",
  "dateModified": "2023-03-03"
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "How long does the company UMAC take to ship the order?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "UMAC's website says that they are a freight forwarding company that specializes in sending boxes from the United States to the Philippines. Delivery times for their shipping services can vary based on things like the destination, the shipping method, and the time it takes to clear customs."
    }
  },{
    "@type": "Question",
    "name": "How do you track your Balikbayan box?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "You will need the tracking number or waybill number provided by the shipping firm in order to trace your Balikbayan box. This number will be printed on the label or receipt you received after sending the package. Your Balikbayan box can be tracked once you obtain the tracking number by visiting the shipping company's website or contacting customer service. You can check the current position and status of your shipment in real time by entering the corresponding tracking number into one of the many online tracking tools provided by shipping providers. To follow the progress of your Balikbayan box, follow these general steps:
Get the waybill or tracking number the shipping firm gave your package.
For tracking information on your Balikbayan box, go to the website of the shipping business or courier service you used.
Find the option to \"Track Your Shipment\" or \"Track and Trace\" on the website.
If you have a tracking number, please enter it here.
If you want to know where your package is and whether or not it has arrived, click the \"Track\" or \"Submit\" buttons.
  You can reach out to the shipping company's customer service department for help if you're having trouble following the shipment of your Balikbayan box or if you have any other queries about the shipping procedure."
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
        $blogId = "44";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="UMAC Express Cargo" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>UMAC Tracking - Track your Package</h1>
UMAC Tracking is a courier service that works in many countries. It sends your package safely to places like the Philippines, Canada, the United States, Spain, and Hong Kong. It is a very fast and safe courier service that also lets you keep track of your package online. Your package can be followed. Their cars have GPS systems that show you where they are right now. They will deliver your package from your door to theirs in the same city, and they also do international logistics. By air cargo, they send your package to other countries. They offer a variety of services, such as freight forwarding, 3PL services, inventory management, and the delivery of large numbers of packages by air cargo trucks. Shipping and shipping by sea are included.
<h2>UMAC Express Cargo</h2>
<h2></h2>
UMAC is one of the best courier companies in the Philippines. The company was founded in 1988 as Pioneer Industries. This system started as Forex Cargo. In 2003, the company evolved and was then named UMAC. After the death of the owner of the forex company, it came out as UMAC Inc. Express. They provide the best services with Experience.
<h2></h2>
<b>UMAC Cargo Express</b> is a new courier company that promises to deliver your packages faster than ever. With UMS Cargo you can count on fast, reliable service for your shipments. It is a truckload company that provides prompt service to many business people and organizations. They have a network of large trucks to state-of-the-art vehicles that deliver large and small packages to you quickly and efficiently. They offer different shipping solutions to suit your needs. You can also Track
<b><a class="text-primary" href="https://packstrack.com/forextracking" target="_blank" rel="noopener">Forex Tracking</a></b>
<h2></h2>
<h3>Umac Cargo boxes</h3>
<h2></h2>
It delivers high-quality packages to you at an affordable price so you can be sure your package will arrive on time and in perfect condition. <b>UMAC cargo boxes</b> are ideal for those who trade in bulk as it is very secure. You can place your items in cargo boxes and deliver them anywhere. Track your shipment is easy with CargoBox.
<h2></h2>
<b>UMAC Philippines tracking</b> is important because it gets your packages safely to you. You can track your cargo packages using the UMAC tracking tool. <b>UMAC Forward Tracking</b> The tool helps you track your package. You can also track <b><a class="text-primary" href="https://packstrack.com/shopeeexpress" target="_blank" rel="noopener">Shopee Express</a></b>
<h2></h2>
<h3>How to track your Umac Express Cargo Online?</h3>
<h2></h2>
When you send any item to any destination via UMAC Cargo Express, UMAC gives you a tracking number through which you can check your package. You can know the complete details of where your package is now and when it will reach you. Most people don't know how to track their packages online. Here we will tell you how you can check your package express cargo packages online. Following are the simple steps you can follow to track your package.
<h2></h2>
<ul>
 	<li aria-level="1">First, you have a valid tracking number.</li>
 	<li aria-level="1">Enter your tracking number in the UMAC Cargo Express Tracking box.</li>
 	<li aria-level="1">Within a few seconds, you will know complete details about your package.</li>
 	<li aria-level="1">If you believe there is something wrong with your package or it is going to the wrong address, you can contact <b><a class="text-primary" href="http://www.umaccargo.net/" target="_blank" rel="noopener">"UMAC Express Cargo customer support."</a></b></li>
</ul>
<h2></h2>
<iframe src="https://umactracking.com/" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="500px" width="100%" allowfullscreen></iframe>
<h4>Umac Cargo Contact Number</h4>
<h2></h2>
If you want to contact UMAC for any complaint or guidance on the <b>UMAC Cargo contact number </b>then we will provide you the UMAC contact number Gmail and address.
<h2></h2>
<table>
<tbody>
<tr>
<td><b>Contact Number</b></td>
<td><b>Gmail</b></td>
<td><b>Address</b></td>
</tr>
<tr>
<td>+632 – 9414212</td>
<td>customerservice@umaccargo.net</td>
<td>UMAC FORWARDERS EXPRESS INC, 130 Ipil St. cor. Ipil Ext., Marikina Heights, Marikina City 1810, Philippines</td>
</tr>
</tbody>
</table>
<h2></h2>
<h4>Freedom Umac tracking Internationally</h4>
<h2></h2>
Balikbayan Box is a box that is used to deliver packages to relatives and loved ones. It is a special type of container for transporting packages from one place to another. Balikbayan Box is a box that is different from the normal shopping box used by international NGOs. It is used to help people living in other countries send parcels to their family and friends in the Philippines.
<h2></h2>
You can ship your custom made to over 30 countries like Canada, the UK, the USA, Singapore, the Philippines, Korea, Spain, certain states, Florida, Hawaii, Washington, California, and many more. This tool will provide you with<b> UMAC International Cargo tracking.</b>
<h2></h2>
<h4>UMAC Express Cargo Branches</h4>
UNAC does not only operate from the Philippines but operates all over the world.  Here we will tell you the branch of UMAC CARGO EXPRESS about it so that you can benefit from them.
<ul>
 	<li><em>Forex New Zealand</em></li>
 	<li><em>Australia</em></li>
 	<li><em>HONG KONG</em></li>
 	<li><em>UNITED KINGDOM</em></li>
 	<li><em>SOUTH KOREA</em></li>
 	<li><em>UNITED STATES</em></li>
 	<li><em>FREEDOM CARGO</em></li>
 	<li><em>(HOUSTON)</em></li>
 	<li><em>SPAIN</em></li>
 	<li><em>UMAC TORONTO</em></li>
 	<li><em>CANADA</em></li>
</ul>
<h3>Branches of UMAC in the world</h3>
<table dir="ltr" border="1" cellspacing="0" cellpadding="0"><colgroup> <col width="100" /> <col width="100" /> <col width="100" /> <col width="100" /></colgroup>
<tbody>
<tr>
<td data-sheets-value="{"1":2,"2":"Country"}">Country</td>
<td data-sheets-value="{"1":2,"2":"Address"}">Address</td>
<td data-sheets-value="{"1":2,"2":"Telephone Numbers"}">Telephone Numbers</td>
<td data-sheets-value="{"1":2,"2":"Email"}">Email</td>
</tr>
<tr>
<td data-sheets-value="{"1":2,"2":"Bahrain"}">Bahrain</td>
<td data-sheets-value="{"1":2,"2":"Shop 77 Bldg. 77B Road 318 Blk. 321 Gudaibiya, Manama Bahrain"}">Shop 77 Bldg. 77B Road 318 Blk. 321 Gudaibiya, Manama Bahrain</td>
<td data-sheets-value="{"1":2,"2":"Hotline: +973 80001160<br>Tel: +973 17242480<br>Moblie/Whatsapp: +973 33266691"}">Hotline: +973 80001160<br>Tel: +973 17242480<br>Moblie/Whatsapp: +973 33266691</td>
<td data-sheets-value="{"1":2,"2":"forexcargo_umacbahrain@yahoo.com"}" data-sheets-hyperlink="mailto:forexcargo_umacbahrain@yahoo.com">forexcargo_umacbahrain@yahoo.com</td>
</tr>
<tr>
<td data-sheets-value="{"1":2,"2":"Bahrain"}">Bahrain</td>
<td data-sheets-value="{"1":2,"2":"Dubai Creek Tower Office 5B Baniyas Road Deira Dubai, UAE"}">Dubai Creek Tower Office 5B Baniyas Road Deira Dubai, UAE</td>
<td data-sheets-value="{"1":2,"2":"Tel. #: +971 4 2959966<br>+971 56 5251671<br>+971 56 5251672"}">Tel. #: +971 4 2959966<br>+971 56 5251671<br>+971 56 5251672</td>
<td data-sheets-value="{"1":2,"2":"info@egtcargo.com"}" data-sheets-hyperlink="mailto:info@egtcargo.com">info@egtcargo.com</td>
</tr>
<tr>
<td data-sheets-value="{"1":2,"2":"Guam"}">Guam</td>
<td data-sheets-value="{"1":2,"2":"136 Kayen Chando Road Suite 113 Daily Plaza Building Dededo, Guam"}">136 Kayen Chando Road Suite 113 Daily Plaza Building Dededo, Guam</td>
<td data-sheets-value="{"1":2,"2":"Tel. #: 671-637-5618<br>671-637-5619"}">Tel. #: 671-637-5618<br>671-637-5619</td>
<td data-sheets-value="{"1":2,"2":"umac_guam@yahoo.com"}" data-sheets-hyperlink="mailto:umac_guam@yahoo.com">umac_guam@yahoo.com</td>
</tr>
<tr>
<td data-sheets-value="{"1":2,"2":"Palau"}">Palau</td>
<td data-sheets-value="{"1":2,"2":"Shell Gas Station, Medalaii Koror, Palau 96940"}">Shell Gas Station, Medalaii Koror, Palau 96940</td>
<td data-sheets-value="{"1":2,"2":"Tel. #: (680) 488-2088<br>(680) 775-2297"}">Tel. #: (680) 488-2088<br>(680) 775-2297</td>
<td data-sheets-value="{"1":2,"2":"annaliza.vistal@pre-palau.com"}" data-sheets-hyperlink="mailto:annaliza.vistal@pre-palau.com">annaliza.vistal@pre-palau.com</td>
</tr>
<tr>
<td data-sheets-value="{"1":2,"2":"Korea"}">Korea</td>
<td data-sheets-value="{"1":2,"2":"Gimahae City, Jingyoungeup Hanrimro 1205-39 South Korea"}">Gimahae City, Jingyoungeup Hanrimro 1205-39 South Korea</td>
<td data-sheets-value="{"1":2,"2":"Tel. #:(82) 10-2880-4780<br>#:(82) 10-3444-4780"}">Tel. #:(82) 10-2880-4780<br>#:(82) 10-3444-4780</td>
<td data-sheets-value="{"1":2,"2":"korea@umaccargo.net"}" data-sheets-hyperlink="mailto:korea@umaccargo.net">korea@umaccargo.net</td>
</tr>
<tr>
<td data-sheets-value="{"1":2,"2":"Hong Kong"}">Hong Kong</td>
<td data-sheets-value="{"1":2,"2":"11/flr Unit-B, Block - 1, YAU TONG INDUSTRIAL BLDG. #2 Shung Shun St. Yau Tong, Kowloon, HK"}">11/flr Unit-B, Block - 1, YAU TONG INDUSTRIAL BLDG. #2 Shung Shun St. Yau Tong, Kowloon, HK</td>
<td data-sheets-value="{"1":2,"2":"Tel. #: +852-2348-6080"}">Tel. #: +852-2348-6080</td>
<td data-sheets-value="{"1":2,"2":"damito_anna.umac@yahoo.com.ph"}" data-sheets-hyperlink="mailto:damito_anna.umac@yahoo.com.ph">damito_anna.umac@yahoo.com.ph</td>
</tr>
<tr>
<td data-sheets-value="{"1":2,"2":"Hong Kong"}">Hong Kong</td>
<td data-sheets-value="{"1":2,"2":"Unit G, 2/F, Kwai Shun Industrial Center, North Wing, 51-63 Container Port Road, Kwai Chung, New Territories, Hong Kong"}">Unit G, 2/F, Kwai Shun Industrial Center, North Wing, 51-63 Container Port Road, Kwai Chung, New Territories, Hong Kong</td>
<td data-sheets-value="{"1":2,"2":"Tel. #: +852 2104 7363/ +852 6378 7363"}">Tel. #: +852 2104 7363/ +852 6378 7363</td>
<td data-sheets-value="{"1":2,"2":"usendhk@gmail.com"}" data-sheets-hyperlink="mailto:usendhk@gmail.com">usendhk@gmail.com</td>
</tr>
<tr>
<td data-sheets-value="{"1":2,"2":"Macau"}">Macau</td>
<td data-sheets-value="{"1":2,"2":"82 Rua da Alfandega, Edf. Veng Leong<br>R/C Macau"}">82 Rua da Alfandega, Edf. Veng Leong<br>R/C Macau</td>
<td data-sheets-value="{"1":2,"2":"Tel. #: (853) 289-39473"}">Tel. #: (853) 289-39473</td>
<td data-sheets-value="{"1":2,"2":"brigilbellasus@yahoo.com.ph"}" data-sheets-hyperlink="mailto:brigilbellasus@yahoo.com.ph">brigilbellasus@yahoo.com.ph</td>
</tr>
<tr>
<td data-sheets-value="{"1":2,"2":"Greece"}">Greece</td>
<td data-sheets-value="{"1":2,"2":"Theofilopolou 16, Neo Cosmo Athens, Greece"}">Theofilopolou 16, Neo Cosmo Athens, Greece</td>
<td data-sheets-value="{"1":2,"2":"306-937850505, +30-6932088918, +30-2107775998"}">306-937850505, +30-6932088918, +30-2107775998</td>
<td data-sheets-value="{"1":2,"2":"tanagonleonilo_ugr@yahoo.com"}" data-sheets-hyperlink="mailto:tanagonleonilo_ugr@yahoo.com">tanagonleonilo_ugr@yahoo.com</td>
</tr>
<tr>
<td data-sheets-value="{"1":2,"2":"Italy"}">Italy</td>
<td data-sheets-value="{"1":2,"2":"Via Ippo Dromo 61, Milan, IT"}">Via Ippo Dromo 61, Milan, IT</td>
<td data-sheets-value="{"1":2,"2":"39 3397148011"}">39 3397148011</td>
<td data-sheets-value="{"1":2,"2":"umacitaly@yahoo.com"}" data-sheets-hyperlink="mailto:umacitaly@yahoo.com">umacitaly@yahoo.com</td>
</tr>
<tr>
<td data-sheets-value="{"1":2,"2":"Spain"}">Spain</td>
<td data-sheets-value="{"1":2,"2":"Calle Paseo de las Flores, 6 28823 - Coslada - Madrid"}">Calle Paseo de las Flores, 6 28823 - Coslada - Madrid</td>
<td data-sheets-value="{"1":2,"2":"34 662 092 444 / +34 915 717 728"}">34 662 092 444 / +34 915 717 728</td>
<td data-sheets-value="{"1":2,"2":"umac_spain@yahoo.es"}" data-sheets-hyperlink="mailto:umac_spain@yahoo.es">umac_spain@yahoo.es</td>
</tr>
<tr>
<td data-sheets-value="{"1":2,"2":"UK"}">UK</td>
<td data-sheets-value="{"1":2,"2":"Unit 7 Alpha Estate, Clayton Road, Hayes, Middlesex, UK UB3 1BB"}">Unit 7 Alpha Estate, Clayton Road, Hayes, Middlesex, UK UB3 1BB</td>
<td data-sheets-value="{"1":2,"2":"(44) 2088137064 / 08800280880"}">(44) 2088137064 / 08800280880</td>
<td data-sheets-value="{"1":2,"2":"sales@forexcargouk.com, ukforex@aol.com, ukforexltd@yahoo.co.uk"}" data-sheets-hyperlinkruns="{"1":0,"2":"mailto:sales@forexcargouk.com"}{"1":22}{"1":24,"2":"mailto:ukforex@aol.com"}{"1":39}{"1":41,"2":"mailto:ukforexltd@yahoo.co.uk"}{"1":63}">sales@forexcargouk.com, ukforex@aol.com, ukforexltd@yahoo.co.uk</td>
</tr>
<tr>
<td data-sheets-value="{"1":2,"2":"Iceland"}">Iceland</td>
<td data-sheets-value="{"1":2,"2":"354-7872423, 00354-7787407896689"}">354-7872423, 00354-7787407896689</td>
<td data-sheets-value="{"1":2,"2":"--------"}">--------</td>
<td data-sheets-value="{"1":2,"2":"rem.global_transport@yahoo.com, umacscandinavia@gmail.com"}" data-sheets-hyperlinkruns="{"1":0,"2":"mailto:rem.global_transport@yahoo.com"}{"1":30}{"1":32,"2":"mailto:umacscandinavia@gmail.com"}{"1":57}">rem.global_transport@yahoo.com, umacscandinavia@gmail.com</td>
</tr>
<tr>
<td data-sheets-value="{"1":2,"2":"Norway"}">Norway</td>
<td data-sheets-value="{"1":2,"2":"Mollegata 102, 4008 Stravanger Norway"}">Mollegata 102, 4008 Stavanger Norway</td>
<td data-sheets-value="{"1":2,"2":"47 45393204"}">47 45393204</td>
<td data-sheets-value="{"1":2,"2":"--------"}">--------</td>
</tr>
<tr>
<td data-sheets-value="{"1":2,"2":"Australia"}">Australia</td>
<td data-sheets-value="{"1":2,"2":"18 Broadbhurst Road Ingleburn, NSW 2565"}">18 Broadhurst Road Ingleburn, NSW 2565</td>
<td data-sheets-value="{"1":2,"2":"Phone: 02 8777 0000, Fax.: 02 9826 7133, TOLL FREE: 1300 136 739"}">Phone: 02 8777 0000, Fax.: 02 9826 7133, TOLL-FREE: 1300 136 739</td>
<td data-sheets-value="{"1":2,"2":"send@forexworld.com.au, info@forexworld.com.au"}" data-sheets-hyperlinkruns="{"1":0,"2":"mailto:send@forexworld.com.au"}{"1":22}{"1":24,"2":"mailto:info@forexworld.com.au"}{"1":46}">send@forexworld.com.au, info@forexworld.com.au</td>
</tr>
</tbody>
</table>
<h4><em>FAQs</em></h4>
<ul>
 	<li><strong>How long does the company UMAC take to ship the order?  </strong></li>
</ul>
UMAC's website says that they are a freight forwarding company that specializes in sending boxes from the United States to the Philippines. Delivery times for their shipping services can vary based on things like the destination, the shipping method, and the time it takes to clear customs.
<ul>
 	<li><strong>How do you track your Balikbayan box?</strong></li>
</ul>
You will need the tracking number or waybill number provided by the shipping firm in order to trace your Balikbayan box. This number will be printed on the label or receipt you received after sending the package.

Your Balikbayan box can be tracked once you obtain the tracking number by visiting the shipping company's website or contacting customer service. You can check the current position and status of your shipment in real time by entering the corresponding tracking number into one of the many online tracking tools provided by shipping providers.

To follow the progress of your Balikbayan box, follow these general steps:
<ol>
 	<li>Get the waybill or tracking number the shipping firm gave your package.</li>
 	<li>For tracking information on your Balikbayan box, go to the website of the shipping business or courier service you used.</li>
 	<li>Find the option to "Track Your Shipment" or "Track and Trace" on the website.</li>
 	<li>If you have a tracking number, please enter it here.</li>
 	<li>If you want to know where your package is and whether or not it has arrived, click the "Track" or "Submit" buttons.</li>
</ol>
 

You can reach out to the shipping company's customer service department for help if you're having trouble following the shipment of your Balikbayan box or if you have any other queries about the shipping procedure.

     
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