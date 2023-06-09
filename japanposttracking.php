
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
  <meta name="description" content="Japan Post Tracking is the country's national postal service. It is in charge of getting mail and packages to people all over Japan.,">
<meta name="keywords" content="Japan Post Tracking, Tracking Japan Post, Japan Post EMS Tracking, How to track japan post-tracking?, Japan post tracking customer service">
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
        $blogId = "82";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="Japan Post Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>Japan Post Tracking - Track Your package</h1>
Japan Post Tracking is the country's national postal service. It is in charge of getting mail and packages to people all over Japan. Since its founding in 1871, the company has been giving the people of Japan reliable and efficient postal services. One of the most important things that Japan Post does is keep track of mail and packages. Customers can use this service to keep track of their deliveries and make sure their mail or packages get where they need to go on time. We'll look at the Japan Post tracking service and how it works in this article.
<h2></h2>
It has two types of tracking services: one for mail and packages sent within Japan, and one for mail and packages sent outside of Japan. You can follow their mail or packages as they move through the Japanese postal system using the domestic tracking service. You can track their mail or packages as they move through the postal systems of other countries with the international tracking service. Customers need to sign up for a Japan Post account before they can use the tracking service. This can be done online, and the process is easy and takes only a few minutes. Once a customer is signed up, they can log in to their account and use the tracking number that Japan Post gives them to track their mail or packages.
<h2></h2>
<h2>Tracking Japan Post</h2>
<h2></h2>
A unique code is given to each piece of mail or package when it is sent. This code is the tracking number. With this code, you can check online to see how far along the delivery is. Customers can also use the tracking number at any time to find out where their package is in the delivery process. The tracking service tells customers everything they need to know about where their mail or packages are. This includes where the mail or package is right now when it is expected to arrive, and any other relevant information. The customer can also get an email or text message when their mail or package is delivered. You can also track <b><a class="text-primary" href="https://packstrack.com/yamatotransport" target="_blank" rel="noopener">Yamato Transport</a>.</b>
<h3><span class="___SText_v2vqb-ko_" data-ui-name="Link.Text">Japan Post EMS Tracking</span></h3>
It has a number of other ways to help customers track their mail and packages besides the tracking service. Some of these are the ability to ask for delivery confirmation, the ability to ask for redelivery, and the ability to ask for a refund if a letter or package is lost, stolen, or damaged. Customers who want to make sure their mail or packages get to their destination on time can use the Japan Post tracking service. The service is easy to use, gives detailed information about how deliveries are going, and have a number of other features that help customers track their mail and packages.
<h2></h2>
Overall, Japan Post is a reliable and effective mail service that offers a variety of ways for customers to track their mail and packages. Japan Post has the tools and resources to make sure that your mail or package gets to its destination on time and in good condition, whether you are sending a letter or a package.
<h2></h2>
<h3>How to track japan Post-tracking?</h3>
<h2></h2>
Follow these easy steps to track a Japan Post package:
<h2></h2>
Go to the website for Japan Post and sign in to your account. If you don't have an account, click the "Register" button to make one.
<h2></h2>
<ul>
 	<li aria-level="1">Click the "<b><a class="text-primary" href="https://trackings.post.japanpost.jp/services/srv/search/?locale=en" target="_blank" rel="noopener">Track & Trace</a></b>" button once you have logged in.</li>
 	<li aria-level="1">Put the tracking number for your mail or package in the field that says "Tracking Number." You can find this number on the shipping label or in the email you got letting you know the package was sent.</li>
 	<li aria-level="1">Click the "Track" button to see where your delivery is in the process.</li>
 	<li aria-level="1">You will be able to see where your mail or package is right now when it is expected to arrive, and any other important information.</li>
 	<li aria-level="1">You can also set up alerts for your delivery, like email or SMS messages, so that you know when your mail or package has been delivered.</li>
 	<li aria-level="1">If there are any problems with your delivery, you can get help from Japan Post's customer service.</li>
 	<li aria-level="1">If you want to track a package that is being sent internationally, you can use the tracking number to do so on the website of the postal service of the country where the package is being sent.</li>
 	<li aria-level="1">For international tracking, you can use the Japan Post Global tracking service, which will let you track your package until it gets to its final destination.</li>
</ul>
<h2></h2>
<h3>Japan Post Tracking Customer Srvice</h3>
<h2></h2>
Japan Post offers a range of customer service options to help customers with their tracking needs. Customers can contact Japan Post customer service by phone, email, or in person at a post office.
<h2></h2>
<table>
<tbody>
<tr>
<td><b>Courier</b></td>
<td><b>Contact Number</b></td>
<td><b>Email</b></td>
</tr>
<tr>
<td>Japan Post Tracking</td>
<td>0120-46-1111</td>
<td>info@post.japanpost.jp</td>
</tr>
</tbody>
</table>
<h2></h2>
<h3>Japan post tracking FAQs</h3>
<h2></h2>
Japan Post offers a range of services to help customers track their mail and parcels, and as
<h2></h2>
<ul>
 	<li><strong>Q: How do I track my Japan Post delivery?</strong></li>
</ul>
<h2></h2>
A: To track your Japan Post delivery, you will need to log in to your Japan Post account and enter the tracking number for your mail or parcel in the designated field. You can also track your package by visiting the Japan Post website and entering the tracking number in the tracking field.
<h2></h2>
<ul>
 	<li><strong>Q: How accurate is the tracking information provided by Japan Post?</strong></li>
</ul>
<h2></h2>
A: Japan Post uses advanced technology to track its deliveries and provides accurate and up-to-date information about the progress of your mail or parcel. However, there may be some delays or inaccuracies due to unforeseen circumstances such as weather or traffic.
<h2></h2>
<ul>
 	<li><strong>Q: How long does it take for my Japan Post delivery to be tracked?</strong></li>
</ul>
<h2></h2>
A: Japan Post updates the tracking information for domestic deliveries as soon as the package is scanned into the system. For international deliveries, it may take a few days for the tracking information to be updated as the package moves through different postal systems.
<h2></h2>
<ul>
 	<li><strong>Q: Can I track my Japan Post delivery without an account?</strong></li>
</ul>
<h2></h2>
A: Yes, you can track your Japan Post delivery without an account. You can enter the tracking number on the Japan Post website and view the status of your delivery.
<h2></h2>
<ul>
 	<li><strong>Q: What should I do if my Japan Post delivery is delayed or lost?</strong></li>
</ul>
<h2></h2>
A: If your Japan Post delivery is delayed or lost, you can contact Japan Post customer service for assistance. They will investigate the issue and provide you with further information on the status of your delivery. You can also request a delivery confirmation, request redelivery, or request a refund if a mail or parcel is lost or damaged.
<h2></h2>
<ul>
 	<li><strong>Q: What if my package is being delivered to an international destination?</strong></li>
</ul>
<h2></h2>
A: If your package is being delivered to an international destination, you can use the Japan Post Global tracking service which will give you the ability to track your package until it reaches its final destination.
<h2></h2>
<ul>
 	<li><strong>Q: Can I track my package in real-time?</strong></li>
</ul>
<h2></h2>
A: Yes, you can track your package in real-time by visiting the Japan Post website and entering the tracking number in the tracking field. The website will provide you with detailed information about the current location of your mail or parcel, the expected delivery date, and any other relevant information.
<h2></h2>
In conclusion, Japan Post offers a reliable and efficient tracking service that provides customers with detailed information about the progress of their deliveries. If you have any questions about the tracking process, It is available to help.    
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