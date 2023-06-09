
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
  <meta name="description" content=" GMS Courier Tracking is one of the largest express distribution Companies in the country. Its main office is in Bangalore.">
<meta name="keywords" content="GMS Courier Tracking, GMS Courier tracking Check Online, GMS Worldwide Express Customer Care, How do I track my GMS Courier tracking?">
<meta name="author" content="Packstrack">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/gmscouriertracking"
  },
  "headline": "GMS Courier Tracking _ Track your Package",
  "description": "GMS Courier Tracking is one of the largest express distribution Companies in the country. Its main office is in Bangalore.",
  "image": "https://packstrack.com/uploaded_files/gms%20(1).webp",  
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
  "datePublished": "2023-01-14",
  "dateModified": "2023-03-03"
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
        $blogId = "46";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>GMS Courier Tracking _ Track your Package</h1>
<h2></h2>
<b>GMS Courier Tracking</b> is one of the largest express distribution Companies in the country. Its main office is in Bangalore. It was founded in 2006. GMS has a wide reach across the country because it has offices in key places. GMS offers a wide range of services all over the country, both by air and on the ground, for both small and large packages. GMS offers GMS Gold for instant delivery of documents and small parcels. GMS Gold offers refunds and delivery as promised. Thanks to advanced technology, GMS is able to provide real-time information about the status as well as your flight schedule data interchange.
<h2></h2>
GMS Courier Tracking works in more than 30000 different places in India. They have four main offices, five regional offices, 106 companies, and more than twelve hundred branches. GMS is a company that delivers packages both inside and outside of the country. GMS is run by a board of directors and professionals in central management. Their goal is to deliver packages to people in India on time. You can also Track <b><a class="text-primary" href="https://packstrack.com/marutiaircourier" target="_blank" rel="noopener">Maruti Air Courier</a></b>
<h2>GMS Courier</h2>
A nationwide provider of courier and shipping services, GMS Courier is headquartered in India. When it comes to logistics and delivery, GMS Courier has you covered. They offer services like air freight, surface cargo, and both domestic and foreign courier delivery. The company's presence in India is significant, as evidenced by its network of over 5000+ locations throughout the nation. Additionally, they have partnerships with additional transportation and courier firms to offer worldwide service. When you send with GMS Courier, you can expect real-time tracking and SMS/email alerts so that you always know where your package is in transit. When customers have questions or concerns, they can contact GMS Courier's dedicated customer support staff for assistance. Customers can reach them via a toll-free number or via web chat, both of which are made available at no extra cost. The business takes great pride in its dedication to its customers, dependability, and punctuality of deliveries. Additionally, they are committed to operating in an environmentally responsible and sustainable manner.
<h3>GMS Courier tracking Check Online</h3>
You can check your Package status online by tracking number. Here we can completely guide you on how you can Check <b><a class="text-primary" href="https://gmsworldwide.com/" target="_blank" rel="noopener">GMS Courier Tracking Status Online</a></b>
<b>.</b> Here are a Few Simple Steps To Track your Order. Please Follow these steps:
<h2></h2>
<ul>
 	<li aria-level="1">First, you have a valid tracking number.</li>
 	<li aria-level="1">Put it into the tracking box.</li>
 	<li aria-level="1">Then click the track button.</li>
 	<li aria-level="1">Within a second you will know your tracking status.</li>
</ul>
<h4>GMS Worldwide Express Customer Care</h4>
Here we can tell you GMS worldwide Express Customer Care Contact Number and Email.
<table>
  <tr>
    <th>Courier</th>
    <th>Contact Number</th>
    <th>Email</th>
    <th>Main Office Address</th>
  </tr>
  <tr>
    <td>GMS Tracking</td>
    <td>08026941251</td>
    <td>corp@gmsworldwide.com</td>
    <td>189/1, 6th Cross, 3rd Main, Chamrajpet BANGALORE – 560018, Karnataka</td>
  </tr>
</table>

<h2></h2>
<h4>How do I track my GMS tracking?</h4>
GMS will give you a tracking number for your package when it is ready to be tracked by Courier. You can get real-time updates about your Package through this tracking number. You can locate your package by entering the tracking number on our website. Enter your tracking number here and we'll let you know where your package is now and when it will arrive. If you've lost your tracking number, you can get it again by contacting customer service. You can also track <b><a class="text-primary" href="https://packstrack.com/vtranstracking" target="_blank" rel="noopener">V Trans Tracking</a></b>
<h2></h2>
<h4>GMS Tracking Contact Numbers and Branches</h4>
Many people do not know about GMS contact numbers. Here we will tell you about the <b>GMS contact number</b>. We will also tell you about the branches of GMS courier Tracking in India.
<h2></h2>
<table>
<tbody>
<tr>
<td><b>City</b></td>
<td><b>Contact Numbers</b></td>
<td><b>Emails</b></td>
<td>Address</td>
</tr>
<tr>
<td>Ahmedabad</td>
<td>7940069655</td>
<td>csdamd@gmsworldwide.com</td>
<td>A/2, Vasupujya Chambers, B/H Navdeep Building, Near Income Tax Circle Ashram Road, Ahmedabad, Gujarat, India - 380014</td>
</tr>
<tr>
<td>Bangalore</td>
<td>8026941250</td>
<td>corp@gmsworldwide.com</td>
<td>No. 189/1, 3rd Main, 6th Cross, Chamrajpet, Bangalore, Karnataka, India - 560018</td>
</tr>
<tr>
<td>Mumbai</td>
<td>2265613870</td>
<td>prakash.k@gmsworldwide.co</td>
<td>Mumbai, Maharashtra, India - 400099</td>
</tr>
<tr>
<td>New Delhi</td>
<td>9818646144</td>
<td>csddel@gmsworldwide.com</td>
<td>No.F -139, Mayapuri Indl Area, Phase -2, New Delhi, Delhi, India - 110064</td>
</tr>
</tbody>
</table>
<h2></h2>
     
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