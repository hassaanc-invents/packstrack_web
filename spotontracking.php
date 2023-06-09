
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
  <meta name="description" content="Spoton Tracking was started by a private company in 2012 after TNT India helped with logistics ">
<meta name="keywords" content="Spoton Tracking, Spoton Courier Tracking, Spoton Logistics Tracking, Spoton Tracking Number, Spoton Pincode Tracking">
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
        $blogId = "98";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="Spoton Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>Spoton Tracking - Track Your Package</h1>
Spoton Tracking was started by a private company in 2012 after TNT India helped with logistics when Spoton grew its services and attracted more investors. Widely known as a Logistics Solutions Company, Proposed Logistics is now offering Indian Logistics and Courier services. It is finding its niche in India, where it employs more than 1600 people and has more than 250 offices. Spoton Tracking has a unique business model in which its investments in technology and operations are used to run its warehouses and vehicles. This gives Spoton some advantages in the logistics industry, such as access to information and rapid service development, especially when it comes to meeting business registration requirements.

<iframe style="border: 0px #ffffff none;" src="https://trackcourier.io/spoton-courier-tracking?" name="myiFrame" width="100%" height="500px" frameborder="1" marginwidth="0px" marginheight="0px" scrolling="no" allowfullscreen="allowfullscreen"><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start">﻿</span></iframe>
<h2>Spoton Courier Tracking</h2>
Spoton now provides many services in India But physically it start providing its services in 2018 to become the main courier and logistics company in India. Today they are providing several services like Transport by air and sea. They had invested a lot in technology like its interface, account management, and general operations as well as a 24-hour customer service contact center. Spoton Courier Tracking provided door-to-door courier services in 22000 India there it is becoming famous among people. They are also providing their services on a business scale like sending stock labeling and 3PL services. They also provide pickup services. They had 13 major depots and 35 transit hubs. They provide safe and fast courier delivery services.
<h3>Spoton Logistics Tracking</h3>
Spoton Logistics Tracking is a logistics company with services available all over India. Other couriers are slower and less safe than them. They offer good quality at a low price. They use cotton to pack. They have trained people who can safely deliver your package. They work in both small and large cities in India. They move your things from one place to another. The family takes care of loved ones and friends. They have a group of trucks and cars that work together. GPS systems are built into their vehicles so that you can get up-to-date information about where your package is now and when will be it delivered.
<h3>Spoton Tracking Number</h3>
Spoton Tracking Number is a code that is given to every package so that it can be found. You get a tracking number when it is ready for you. You will get an email with a tracking number. This number keeps a full record of your package and lets you know where it is and when it will get to you. With the help of the street number, you can find out where your package is. You can see that their vehicles have GPS systems, which makes it easy to find where the package is. You can also track <a class="text-primary" href="https://packstrack.com/bluedarttracking" target="_blank" rel="noopener">Blue Dart Tracking</a>
<h3>How To Track Spoton Online Tracking</h3>
If you want to track your package online you are in right place. Here we will tell you how to track your package online. We will tell you some easy steps by following these steps you will able to track your package without wasting your time.
<ul>
 	<li aria-level="1">First, you have a valid tracking number from the <b><a class="text-primary" href="https://trackcourier.io/spoton-courier-tracking" target="_blank" rel="noopener">spoton tracking courier.</a></b></li>
 	<li aria-level="1">Enter your tracking number into the search bar.</li>
 	<li aria-level="1">Then press the track button.</li>
 	<li aria-level="1">Wait for a moment while it is processing.</li>
 	<li aria-level="1">In no time you will see the current status of your package.</li>
 	<li aria-level="1">If you feel any problem you can contact spoton courier's tracking phone number.</li>
</ul>
 
<h3>Spoton courier tracking customer support number</h3>
If you have any questions or want to know their service charges you can contact them. Here we will give their contact and email.
<table>
<tbody>
<tr>
<td><b>Courier</b></td>
<td><b>Contact Number</b></td>
<td><b>Email</b></td>
<td><b>Main Office Address</b></td>
</tr>
<tr>
<td>Spoton Courier Tracking</td>
<td>1800-200-1414</td>
<td>info@spoton.co.in</td>
<td>Thanavan, #23/24, 1st Floor, Infantry Road, Shivaji Nagar, Bangalore-560001, India</td>
</tr>
</tbody>
</table>
 
<h3>Spoton Pincode Tracking</h3>
The company details are as follows:
<table>
<tbody>
<tr>
<td>Funded by</td>
<td>Private company “ India equity partners”</td>
</tr>
<tr>
<td>Headquarters</td>
<td>Banglore</td>
</tr>
<tr>
<td>Employees working</td>
<td>1600+</td>
</tr>
<tr>
<td>Locations covered</td>
<td>300+</td>
</tr>
<tr>
<td>Pin codes</td>
<td>22000</td>
</tr>
<tr>
<td>Major depots</td>
<td>13</td>
</tr>
<tr>
<td>Transit Hubs</td>
<td>35</td>
</tr>
<tr>
<td>Vehicles</td>
<td>447</td>
</tr>
</tbody>
</table>
 
<h3>Spoton Tracking branches in India</h3>
 
<table>
<tbody>
<tr>
<td><b>Branch</b></td>
<td><b>Contact number</b></td>
<td><b>Address</b></td>
</tr>
<tr>
<td>Amritsar</td>
<td>919855865896</td>
<td>Unnamed Road, Khankot, Punjab 143501, India</td>
</tr>
<tr>
<td>Bhopal</td>
<td>919071783694</td>
<td>Kokta Bypass Rd, transport nagar, Bhopal, Madhya Pradesh 462023, India</td>
</tr>
<tr>
<td>Chennai</td>
<td>9118002001414</td>
<td>Mahalakshmi Nagar, Velappanchavadi, Poonamallee, Chennai, Tamil Nadu 600077, India</td>
</tr>
<tr>
<td>Coimbatore</td>
<td>918874837333</td>
<td>TNT India Pvt. Ltd No-1990 Tricny Road, Singanallur, Coimbatore, Tamil Nadu 641062, India</td>
</tr>
<tr>
<td>Delhi</td>
<td>918851493895</td>
<td>Shop No 267, Kamla Market Opposite New Delhi Metro Exit No. 3, near Ajmeri Gate, Delhi, 110006, India</td>
</tr>
<tr>
<td>Hyderabad</td>
<td>918874837333</td>
<td>Door No-6,7&9 Bansal Chambers, Svcie, Near H,P Petrol Pump, Hyderabad, 500037, India</td>
</tr>
<tr>
<td>Indore</td>
<td>919513563452</td>
<td>Arjun Baroda, Indore – 453771</td>
</tr>
<tr>
<td>Jaipur</td>
<td>919314609302</td>
<td>Thakur Pachewar Ka Rasta, Ghat Darwaza, Jaipur, Rajasthan 302003, India</td>
</tr>
<tr>
<td>Kolhapur</td>
<td>919983948064</td>
<td>Shiroli, Kolhapur – 416212</td>
</tr>
<tr>
<td>Lucknow</td>
<td>917499496120</td>
<td>C-38, Transport Nagar, Kanpur Road, Lucknow, Uttar Pradesh 226012, India</td>
</tr>
<tr>
<td>Mumbai</td>
<td>918874837333</td>
<td>Vivek Industrial estate, Gala No-19, Uswala Lane, Walbhat Road,, Mumbai, Maharashtra 400063, India</td>
</tr>
<tr>
<td>Nagpur</td>
<td>919923368786</td>
<td>Shiv Kripa Complex, Shop No. 3, Amravati Road, Near Panchshil Automobile, Wardhana, Nagpur – 440023.</td>
</tr>
<tr>
<td>Nashik</td>
<td>18001021414</td>
<td>MIDC, Satpur Colony, Nashik, Maharashtra 422007, India</td>
</tr>
<tr>
<td>Pune</td>
<td>918874837333</td>
<td>Shop No-7 To 15, Satyam Apartment, A wing,, 8, Mula Rd, Khadki, Pune, Maharashtra 411003, India</td>
</tr>
<tr>
<td>Pondicherry</td>
<td>914133054000</td>
<td>Villupuram Main Road Villianur Bye Pass, Villianur, Pondicherry – 605110, Siva Ganapathy Nagar</td>
</tr>
<tr>
<td>Raipur</td>
<td>918001021414</td>
<td>DINSHAW ICE CREAM COMPOUND, NEAR MAHAKAUSHAL PETROL PUMP, OPP MAHINDRA TRUCKS AND BUSES, RAIPUR – 492099</td>
</tr>
<tr>
<td>Rajkot</td>
<td>919898052669</td>
<td>Ruda Transport Nagar Behind SatHanuman Temple Opp J.k. Tyre Rajkot -360005</td>
</tr>
<tr>
<td>Surat</td>
<td>917676223759</td>
<td>Plot No 118-122, Green Park, Sachin, Surat – 394230, Near Ashirwad Hotel, Unn Patiya</td>
</tr>
<tr>
<td>Trivandrum</td>
<td>917012575030</td>
<td>79/2060(1), Puthen Benglow, Puthenpalam Road, Vallakkadavu, thiruvananthapuram – 695008, Near Puthenpalam Bridge</td>
</tr>
<tr>
<td>Trichy</td>
<td>9118001021414</td>
<td>NO.25 GREEN MARKET, PAPPAKURUCHI MAIN ROAD, NORTH KATTUR, Tiruchchirappalli – 620019</td>
</tr>
<tr>
<td>Vijayawada</td>
<td>918874837333</td>
<td>Door No-76-13-99/5, By-Pass Road, Beside Bhysham Public School,, Vijayawada, 520012, India</td>
</tr>
<tr>
<td>Vadodara</td>
<td>918874837333</td>
<td>411/422, NH-8, Dashrath Vill, Opp. GSFC Nagar,, Near HP Petrol Pump, Vadodara, Gujarat 391740, India</td>
</tr>
</tbody>
</table>    
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