
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
  <meta name="description" content="Landmark Global is a tracking company operating in Canada with over 20,000 employees who spend 3.9 billion dollars annually across Canada">
<meta name="keywords" content="Landmark Tracking, landmark global tracking, Landmark Tracking Number, landmark tracking Canada">
<meta name="author" content="Packstrack">
<title>Landmark Tracking | Global Package Tracking</title>
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
        $blogId = "103";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="Landmark Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h2><span style="font-weight: 400;">Landmark Tracking </span></h2>
 

<span style="font-weight: 400;">Landmark Global is a tracking company operating in Canada with over 20,000 employees who spend 3.9 billion dollars annually across Canada and deliver goods to over 5 million addresses every day. It strives to provide a very good service to its customers, that's why it doesn't have late delivery of Parcel but its staff arrives full time.</span>

 

<b>landmark global tracking</b><span style="font-weight: 400;"> is not only limited to Canada but also provides global tracking services</span>

<span style="font-weight: 400;">If we talk about the landmark tracking number of the UK, it starts with the drop off in the UK center. landmark tracking Canada you keep your parcel description sending in your email where your package has reached.</span>

 

<span style="font-weight: 400;"> The Company also gives you a Unique email that is called Trace Number you can check that your package has reached them. To Track, you just have to fill in this tracking number on the website Remember that landmark racking keeps your parcel description of your parcel all the time. While your package will be reached by now and which steps it going through if the parcel is damaged You are offered the Return and Refund.</span>

 
<h3>Landmark Tracking Number</h3>
 

<span style="font-weight: 400;">Are you a Tracking that provides you with a lot of disturbance? You may not even have to worry about the particle in your package. you Can Choose landmark Tracking.</span>

<span style="font-weight: 400;">When your package Ship From the UK, it is measured before Shipping and is checked then your package is sent to you that reaches you after a few days The phase is the sea or the air that your package is delivered to you can also take 15 days and for more than a day you get your package. If Your package is late then the company promises You For refund of the shipping fee. This is a very Good Thing For Customers.</span>

<span style="font-weight: 400;">Leveraging its global market, Landmark delivers millions of parcels to more than 220 countries and also provides services that allow you to get your parcels from convenient locations. </span>

<span style="font-weight: 400;">Landmark Tracking Company has been providing its services worldwide for more than a decade. It has With infrastructure and capabilities for Shipping parcels You can also track <a class="text-primary" href="https://packstrack.com/intelcomtracking" target="_blank" rel="noopener">Intelcom Tracking</a></span>

 
<h3>How to Track Landmark Tracking Canada</h3>
 

<span style="font-weight: 400;">When your package is broadcast via Landmark tracking, you send landing parking lots to your package by email and give you a pin with which a number is called a number Through it you can address your home and how long will you get to know where your package is now.</span>

 
<ul>
 	<li><span style="font-weight: 400;">Open Google Chrome Search <a class="text-primary" href="https://packstrack.com/" target="_blank" rel="noopener">Packstrack.com</a></span></li>
 	<li><span style="font-weight: 400;">And pick Landmark tracking </span></li>
 	<li><span style="font-weight: 400;">Put your tracking number in the search bar </span></li>
 	<li><span style="font-weight: 400;">Your Tracking Status appears On your screen </span></li>
 	<li><span style="font-weight: 400;">Enjoy.</span></li>
</ul>
<b>Landmark Shipping Tracking Customer Support </b>

 
<table>
<tbody>
<tr>
<td><b>Courier</b></td>
<td><b>Contact Number</b></td>
<td><b>Email</b></td>
<td><b>Main Office Address</b></td>
</tr>
<tr>
<td><span style="font-weight: 400;">Sundarban Tracking</span></td>
<td><span style="font-weight: 400;">3222012345</span></td>
<td><a href="http://landmarkglobal.com/"><span style="font-weight: 400;">info@landmarkglobal.com</span></a></td>
<td>27 W Anapamu St 357, Santa Barbara, California, 93101, United States</td>
</tr>
</tbody>
</table>
 
<h3>FAQs:</h3>
 
<ul>
 	<li><strong>How to book Landmark Tracking?</strong></li>
</ul>
 

<span style="font-weight: 400;">In order to schedule a Landmark Tracking, you must do the following:</span>

 

<span style="font-weight: 400;">Choose the kind of <a href="https://landmarkglobal.com/" target="_blank"  class="text-primary">landmark tracking Canada</a> that you want to reserve. Landmark Trackings can in a variety of forms, including virtual tours, self-directed tours, and guided tours. </span><span style="font-weight: 400;">Pick a trustworthy tour company or travel agency that offers the Landmark Tracking you want to reserve. You can look for Landmark Trackings-related businesses online or get referrals from friends and family.</span>

 

<span style="font-weight: 400;">To find out if the Landmark Tracking you wish to reserve is available and how much it will cost, get in touch with the tour organizer or travel company. Make sure to provide information about your party size, the date and time you wish to reserve, and any unique requirements you may have. </span><span style="font-weight: 400;">To reserve your reservation, provide the required information. Your full name, contact information, and payment information might be included in this.</span>

 

<span style="font-weight: 400;">Read over any terms and conditions offered by the tour operator or travel agency after receiving confirmation of your reservation. In case you need to cancel the reservation, be sure you are aware of the cancellation policy. </span><span style="font-weight: 400;">Investigate the area, the weather, and the necessary equipment before you landmark</span><span style="font-weight: 400;"> shipping tracking</span><span style="font-weight: 400;">. A passport or other form of identification, as well as any tickets or vouchers needed for the Landmark Tracking, should all be in your possession.</span>

 
<ul>
 	<li><b>How should I track my Landmark Tracking?</b></li>
</ul>
 

<span style="font-weight: 400;">You can stay organized and get the most out of your trip by keeping track of your landmark tracking. The following steps can help you track your landmark tracking:</span>

<span style="font-weight: 400;">Organize a schedule: Make a list of all the sights you wish to see, along with an estimate of how much time you will spend at each spot. This will make it easier for you to remember where you need to go and when. </span><span style="font-weight: 400;">Use a map or GPS to help you find your way around: Bring a map of the area with you, or use a GPS-enabled gadget. You can keep on course and prevent getting lost by doing this. </span><span style="font-weight: 400;">Take pictures: Take pictures of every monument and place you visit. After your trip, you can use these pictures to make a photo album or scrapbook as a memento of your experience.</span>

 

<span style="font-weight: 400;">Keep a diary: Note down your impressions, observations, and recollections of each site you visit. This might be a fantastic technique to consider your experience and keep in mind every little thing. </span><span style="font-weight: 400;">Maintain organization by keeping all of your receipts, tickets, and other relevant papers in one location, such as a folder or wallet. You will find it simple to access the data you require when you require it as a result. </span><span style="font-weight: 400;">Be prepared for unforeseen circumstances, such as bad weather, snarled transit, or other potential problems. Making the most of your landmark tracking might help you stay on course by having a backup plan in place.</span>

 
<ul>
 	<li><b>How long does Landmark Tracking take to deliver?</b></li>
</ul>
 

<span style="font-weight: 400;">The type of Landmark Tracking you have ordered, the location of the landmarks and sites you are visiting, and the mode of transportation you are using are some of the variables that affect how long it takes for Landmark Tracking to be delivered. </span><span style="font-weight: 400;">For instance, a self-guided tour of a city's landmarks may usually be finished in a day or two, whereas a tour of a rural area's landmarks may take several days or longer.</span>

 

<span style="font-weight: 400;">If you are ordering a </span><span style="font-weight: 400;">landmark delivery tracking</span><span style="font-weight: 400;">, delivery can occur right away after the ordering process is finished, or you might have access to the tour at a later time. </span><span style="font-weight: 400;">For a more precise delivery time estimate, it is best to check with the tour operator or travel agency where you made your Landmark Tracking reservation. They will be able to give you particular information regarding the delivery timetable and your </span><span style="font-weight: 400;">landmark package tracking</span>

<span style="font-weight: 400;">.</span>
<ul>
 	<li><b>Where can I find the Pincode Locator Landmark Tracking?</b></li>
</ul>
 

<span style="font-weight: 400;">Postal numbers usually referred to as PIN codes or ZIP codes, are frequently used in tracking systems to find landmarks and other locations. By searching online for postal code directories or mapping websites that provide this type of tracking service, you can locate a Pincode Locator </span><span style="font-weight: 400;">landmark global tracking Canada</span><span style="font-weight: 400;">. </span><span style="font-weight: 400;">Many websites, including India Post, Pin Code India, and Google Maps, among others, provide Pincode Locators. Simply input the postal code or address of the landmark or venue you want to find, and the website will give you the address as well as any other details, including the neighboring eateries and other services, as well as the location.</span>

 

<span style="font-weight: 400;">You might need to hunt for a business that specializes in offering this kind of service if you're searching for a more specialist Landmark Tracking service. You can look for such businesses online or ask friends and family for referrals.</span>

     
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