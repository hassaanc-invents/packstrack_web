
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
  <meta name="description" content="Maruti Air Courier Tracking is one of the largest courier companies in India. It makes your packages reach you quickly and safely">
<meta name="keywords" content="Maruti Air Courier Tracking, Shree Maruti Air Courier Tracking, Shree Maruti Air Courier Tracking Status Online, Shree Maruti Air Courier Tracking,Maruti Air Courier Customer Support Number,">
<meta name="author" content="Packstrack">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/marutiaircourier"
  },
  "headline": "Maruti Courier Tracking - Track your Package",
  "description": "Maruti Air Courier Tracking is one of the largest courier companies in India. It makes your packages reach you quickly and safely.",
  "image": "https://packstrack.com/uploaded_files/Add%20a%20heading%20(20)%20(1).webp",  
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
  "datePublished": "2023-01-15",
  "dateModified": "2023-03-03"
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "What is shree maruti courier service tracking Shipping Fee?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Courier services may charge more or less based on the dimensions and contents of the package, the distance it must travel, and the urgency with which it must arrive. When it comes to monitoring packages, many shipping companies now provide customers with online tracking tools. Such details may include the shipping company's present whereabouts, the expected delivery date, and any changes or delays that have occurred."
    }
  },{
    "@type": "Question",
    "name": "How long does it take for Maruti courier service tracking to deliver?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The delivery time for Maruti Courier Service can vary depending on various factors such as the distance the package needs to travel, the shipping method selected, the destination country, the customs clearance process, and any unexpected delays or issues during the shipping process. Maruti Courier Service may offer different delivery speed options such as express delivery or standard delivery, and the estimated delivery time will depend on the option selected. Generally, express delivery services tend to be faster but more expensive, while standard delivery may take longer but be more affordable. Usually, they would take 3 to 5 days to deliver your package."
    }
  },{
    "@type": "Question",
    "name": "Where can Maruti tracking courier deliver?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Maruti Courier Service is a delivery service based in India that operates both nationally and internationally. They have extensive delivery coverage both within India and internationally. The Maruti Courier Service can transport packages anywhere in India, including to smaller towns and rural areas. They can get their products and services to even the most inaccessible areas thanks to their vast network of outlets and transportation partners. Maruti Courier Service is a foreign shipping service that offers worldwide delivery. They may not be able to deliver to all nations due to restrictions imposed by shipping carriers, local customs policies, or other factors."
    }
  },{
    "@type": "Question",
    "name": "How to Track Maruti Air Courier Online?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Please check out www.maruticourier.com, the online home of Maruti Courier Service.
Use the \"Track Your Shipment Track Your Shipment\" link on the main page to check the status of your package.
To look up an AWB or a specific shipment, use the search bar. This information will be included on your shipping label or invoice.
To check on the location of your package, click the \"Track\" option.
If you select the \"Track\" option, Maruti Air Courier will show you the latest details about your shipment, such as its location, its delivery status, and any changes or delays that have occurred along the way."
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
        $blogId = "47";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="Maruti Air Courier Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>Maruti Courier Tracking - Track your Package</h1>
<h2> </h2>
<p><strong>Maruti Air Courier Tracking</strong> is one of the largest courier companies in India. It makes your packages reach you quickly and safely. If you order anything for business, then you will use Murthy Courier Tracking only. Murthy Air Courier Tracking has a number of air and ground vehicles through which it can deliver your packages to you very easily. It operates within many states and cities in India. They have a team of experienced and expert personnel to secure and deliver your package to you. They have branches and offices in many cities. People at these branches and offices are available 24 hours a day and are always available to guide you.</p>
<h2> </h2>
<h2>Shree Maruti Courier Tracking</h2>
<p>Shree Maruti Air Courier Tracking is also a branch of Maruti Air Courier Tracking. Here we will tell you how you can know your package status. We have a real-time tracker that lets you track your package in a matter of seconds. when you order something You are given a tracking number when your package is ready for the courier. With this tracking number, you can find out where your package is and when it will get to you. You can order any item and deliver it to your loved ones with <strong>Shree Maruti Air Courier Tracking</strong>. It protects your package and reaches you very fast. You can also track <strong><a class="text-primary" href="https://packstrack.com/ciptlcontainertracking" target="_blank">CIPTL Container Tracking</a></strong></p>
<h2> </h2>
<h3>Shree Maruti Courier Tracking Status</h3>
<p>You can check your order status of<strong> Maruti Air Courier Status Online</strong>. When you order or ship an item via Murati Air Courier Tracking, they give you a tracking number that will let you know where is your package currently and when will be it delivered. Here we will tell you how to check your package status online. You must have a tracking number to track your order. Here are a few simple steps for checking your package online. You must follow these steps;</p>
<h2> </h2>
<ul>
    <li>First, you have a valid tracking number for your order.</li>
    <li>If you forget your tracking number you can receive it from Murati Air Courie Customer Care.</li>
    <li>Enter your tracking number in the tracker box.</li>
    <li>Then track your order.</li>
    <li>Within a second you will know your package status.</li>
    <li>If your package is lost during transit or damaged you can call or message Customer support.</li>
</ul>
<iframe src="https://shreemaruti.com/" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="700px" width="100%" allowfullscreen></iframe>
<h2> </h2>
<h3>Maruti Air Courier Customer Support Number</h3>
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
            <td>Maruti Air Courier</td>
            <td>022-26814000</td>
            <td>marutiaircouriercargo@yahoo.com</td>
            <td>Shop 1 to 4, Chamunda Paradise, Behind Jivan Vikas Hospital, Sahar Road, Koldongri, Vileparle (East), Mumbai – 400057</td>
        </tr>
    </tbody>
</table>
<h3>Maruti Courier Tracking Number</h3>
<p>The tracking number is a unique code that is given by the courier company. When your parcel is ready to ship shree maruti air courier tracking give you a tracking number. They will send this code to your email. Maruti Courier tracking number is connected to the GPS system and tells about your package location. It tells yous where is your package now and when will it reach you. You can track this tracking number online and know about your parcel location. Here we will tell you how to track packages online. Here we will tell you some easy steps by following them you will be able to track your package without wasting your time.  You can also track < <strong><a class="text-primary" href="https://packstrack.com/vtranstracking" target="_blank">V Trans Tracking</a></strong></p>
<h4>Maruti Air Courier Branches</h4>
<p>Here of can tell you the branches of Maruti Air Courier Tracking.</p>
<h2> </h2>
<table>
    <tbody>
        <tr>
            <td><strong>City</strong></td>
            <td><strong>Contact Number</strong></td>
            <td><strong>Gmail</strong></td>
            <td><strong>Address</strong></td>
        </tr>
        <tr>
            <td><strong>Mumbai</strong></td>
            <td>+91 971666 666</td>
            <td>customercare@shreemaruticourier.com</td>
            <td>B/1101, Kanakia Wall Street, Chakala, Andheri-Kurla Road, Andheri (East), Mumbai, Maharashtra, India - 400093</td>
        </tr>
        <tr>
            <td><strong>Secunderabad</strong></td>
            <td>9393134610</td>
            <td>jayesh.lagdhir@shreemaruticourier.com</td>
            <td>Plot No 9, Bhel Colony, Opp British Paints, Near Swaminarayan Temple, Rasoolpur, Begumpet, Secunderabad, Telangana, India - 500003</td>
        </tr>
        <tr>
            <td><strong>New Delhi</strong></td>
            <td>7042500863</td>
            <td>gandhinagar.delhi@shreemaruticourier.com</td>
            <td>9/6142 G.F. Shivaji Gali Gandhinagar, New Delhi, Delhi, India - 100031</td>
        </tr>
        <tr>
            <td><strong>Ghaziabad</strong></td>
            <td>9310120695</td>
            <td>ghaziabad@shreemaruticourier.com</td>
            <td>52, Basement, Opp.Ambedkar Park, Navyug Market,, Ghaziabad, Uttar Pradesh, India - 201001</td>
        </tr>
        <tr>
            <td><strong>Pune</strong></td>
            <td>7359891918</td>
            <td>divyaraj@shreemaruticourier.com</td>
            <td>F1 Parmar Trade Center, Sadhu Wasvani Chowk, Pune, Maharashtra, India - 411001</td>
        </tr>
    </tbody>
</table>
<h4><em>FAQs</em></h4>
<ul>
    <li><strong>What is shree maruti courier service tracking Shipping Fee?</strong></li>
</ul>
<p>Courier services may charge more or less based on the dimensions and contents of the package, the distance it must travel, and the urgency with which it must arrive. When it comes to monitoring packages, many shipping companies now provide customers with online tracking tools. Such details may include the shipping company's present whereabouts, the expected delivery date, and any changes or delays that have occurred.</p>
<div>
    <div>
        <div>
            <div>
                <div>
                    <ul>
                        <li><strong>How long does it take for Maruti courier service tracking to deliver?</strong></li>
                    </ul>
                </div>
                <div>
                    <p>The delivery time for Maruti Courier Service can vary depending on various factors such as the distance the package needs to travel, the shipping method selected, the destination country, the customs clearance process, and any unexpected delays or issues during the shipping process. Maruti Courier Service may offer different delivery speed options such as express delivery or standard delivery, and the estimated delivery time will depend on the option selected. Generally, express delivery services tend to be faster but more expensive, while standard delivery may take longer but be more affordable. Usually, they would take 3 to 5 days to deliver your package.</p>
                </div>
                <div> </div>
            </div>
        </div>
    </div>
    <div>
        <div>
            <div>
                <div>
                    <div>
                        <div>
                            <div>
                                <div>
                                    <ul>
                                        <li><strong>Where can Maruti tracking courier deliver?</strong></li>
                                    </ul>
                                </div>
                                <div> </div>
                                <div> </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <div>
                                <div>
                                    <p>Maruti Courier Service is a delivery service based in India that operates both nationally and internationally. They have extensive delivery coverage both within India and internationally. The Maruti Courier Service can transport packages anywhere in India, including to smaller towns and rural areas. They can get their products and services to even the most inaccessible areas thanks to their vast network of outlets and transportation partners. Maruti Courier Service is a foreign shipping service that offers worldwide delivery. They may not be able to deliver to all nations due to restrictions imposed by shipping carriers, local customs policies, or other factors.</p>
                                    <p> </p>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <div>
                                        <div>
                                            <div>
                                                <div>
                                                    <div>
                                                        <div>
                                                            <ul>
                                                                <li><strong>How to Track Maruti Air Courier Online?</strong></li>
                                                            </ul>
                                                        </div>
                                                        <div> </div>
                                                        <div> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    <div>
                                                        <div>
                                                            <p>Here are the measures you can take to monitor your Suzuki Air Courier package online:</p>
                                                            <ol>
                                                                <li>Please check out www.maruticourier.com, the online home of Maruti Courier Service.</li>
                                                                <li>Use the "<b><a href="https://marutiair.com/Doc_Tracking.aspx?No" target="_blank"  class="text-primary">Track Your Shipment</a></b>
Track Your Shipment</a></strong>" link on the main page to check the status of your package.</li>
                                                                <li>To look up an AWB or a specific shipment, use the search bar. This information will be included on your shipping label or invoice.</li>
                                                                <li>To check on the location of your package, click the "Track" option.</li>
                                                                <li>If you select the "Track" option, Maruti Air Courier will show you the latest details about your shipment, such as its location, its delivery status, and any changes or delays that have occurred along the way.</li>
                                                            </ol>
                                                            <p>You can get in touch with Maruti Air Courier's customer support department if you have any trouble or questions while tracking your shipment online.</p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <div>
                                                                <div> </div>
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
            <div>
                <div>
                    <div>
                        <div> </div>
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