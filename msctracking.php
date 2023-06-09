
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
  <meta name="description" content="MSC Tracking operates worldwide and has operations in 155 countries and has more than five hundred local offices in different countries">
<meta name="keywords" content="MSC Tracking, MSC Container Tracking, How To Track MSC Line Tracking, Medu Tracking, MSC Cargo Tracking,">
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
        $blogId = "89";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="MSC Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>MSC Tracking - Shipping Container Tracking and Tracing</h1>
MSC Tracking operates worldwide and has operations in 155 countries and has more than five hundred local offices in different countries that are doing their work. To facilitate trade so that they can easily move their goods from one place to another and that too at a very low cost.  If I talk about tracking, it gives its users 11 number records that tell you where your package has reached and how long it will take to reach you, if any. In case of a problem, you can visit their customer support by calling or calling to ask for your package details. They have a fleet of 490 container ships and play more than two hundred routes around the world that can deliver any package you want anywhere in the world. You can get your package from any country in the world to your city you can through MSC line tracking
<h2>MSC Container Tracking</h2>
MSC, which stands for Mediterranean Shipping Company, is a global shipping company that lets its customers track their containers. This lets customers know where and how their cargo is doing while it is being moved by MSC vessels. Customers can track a container by going to MSC's website and entering the container number or the number on the bill of lading. The website will then show information like where the container is now when the <span class="">MSC tracking container is</span> expected to arrive, and where it has been before. Through MSC's online customer portal, some customers may also be able to get more information and tracking options.
<h3>How To Track MSC Line Tracking</h3>
The main problem is Some People Do not know How To track MSC bl Tracking. We will Inform You How to Track it. This is a very simple and easy method every common person can use it easily.
<ul>
 	<li>First of all, go to <b><a class="text-primary" href="https://www.msc.com/en/track-a-shipment" target="_blank" rel="noopener">Packstrack.com.</a></b></li>
 	<li>Then select MSC Vessel tracking and click on select.</li>
 	<li>Put The Tracking Number</li>
 	<li>Click On the Track Button</li>
 	<li>You will see Your tracking status</li>
 	<li>If you see any kind of problem Then You can reach customer support easily.</li>
 	<li>Enjoy</li>
</ul>
<h3>Medu Tracking</h3>
MSC is a large company that provides various services in different countries and its network is spread all over the world. There are many other means of working. The company works with various companies and provides offline as well as online services to customers, which further expands its network. A wide range of container services has been launched to increase the business and many people are benefiting from it. MSC has a huge number of employees working after the break due to which its packages are not late and arrive on time. If we talk about their employees, they have more than 70 thousand employees. MSC container tracking was founded in 1970 and its offices were established in Switzerland in 1978 its first office was built in the north of Switzerland and is owned by a family that you can call the Aponte family. You can also track <b><a class="text-primary" href="https://packstrack.com/safexpresstracking" target="_blank" rel="noopener">Safexpress Tracking.</a></b>
<h3>MSC Cargo Tracking</h3>
If you have any questions you can contact MSC Tracking Customer Support. Here we will give you their contact number and email.
<table>
<tbody>
<tr>
<td><b>Courier</b></td>
<td><b>Contact Number</b></td>
<td><b>Email</b></td>
<td><b>Main Office Address</b></td>
</tr>
<tr>
<td>Ekart Tracking</td>
<td>91 1204595555</td>
<td>info@msc.com</td>
<td>
<div class="msc-our-offices__item">3rd Floor, Room No 302, Ashok Bhopal Chambers</div>
<div class="msc-our-offices__item">S.P. Road</div>
<div class="msc-our-offices__item">IN - 500 003 INDIA</div></td>
</tr>
</tbody>
</table>
 
<h4>FAQs</h4>
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group dark:bg-gray-800">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="relative flex w-[calc(100%-50px)] md:flex-col lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<ul>
 	<li class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap"><strong>Where can I get tracking for my MSC Tracking?</strong></li>
</ul>
</div>
<div class="text-gray-400 flex self-end lg:self-center justify-center mt-2 gap-4 lg:gap-1 lg:absolute lg:top-0 lg:translate-x-full lg:right-0 lg:mt-0 lg:pl-2 visible"></div>
</div>
</div>
</div>
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group bg-gray-50 dark:bg-[#444654]">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="relative flex w-[calc(100%-50px)] md:flex-col lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<div class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap">
<div class="markdown prose w-full break-words dark:prose-invert light">

You can track your MSC container by visiting the MSC website, on the website you will find a "Tracking" or "Track & Trace" option. You will be prompted to enter the container number or bill of lading number, and then you will be able to see the current location, estimated time of arrival, and previous ports of call for your container. If you have any issues, you can also reach out to MSC's customer service for assistance with tracking your container.
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group dark:bg-gray-800">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="relative flex w-[calc(100%-50px)] md:flex-col lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<ul>
 	<li class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap"><strong>Where can MSC Tracking deliver?</strong></li>
</ul>
</div>
</div>
</div>
</div>
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group bg-gray-50 dark:bg-[#444654]">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="relative flex w-[calc(100%-50px)] md:flex-col lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<div class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap">
<div class="markdown prose w-full break-words dark:prose-invert light">MSC is a global shipping company it operates in many countries worldwide. They have a network of ports and terminals, and they transport cargo to and from destinations all over the world. They have services that connect major trade lanes such as Asia, Europe, North America, South America, Africa, and Oceania. So, MSC tracking can deliver to a wide range of destinations depending on the route of the vessel and the cargo being transported. However, it's best to contact MSC's customer service and provide them with the specific details of your shipment to determine the exact delivery location.</div>
</div>
</div>
</div>
</div>
</div>
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group dark:bg-gray-800">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="relative flex w-[calc(100%-50px)] md:flex-col lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<ul>
 	<li class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap"><strong>How long does it take for MSC Tracking to deliver?</strong></li>
</ul>
</div>
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
<div class="markdown prose w-full break-words dark:prose-invert light">The time it takes for an MSC container to be delivered will depend on a variety of factors, such as the origin and destination of the cargo, the shipping route, and any potential delays or unforeseen events. MSC offers a variety of services with different transit times, such as express services, regular services, and economy services. Express services are the quickest, regular services are the most common, and economy services are the slowest. Typically, transit times for cargo shipped from Asia to North America can take around 4-6 weeks.</div>
<div></div>
<div class="markdown prose w-full break-words dark:prose-invert light">

While cargo shipped from Europe to Asia can take around 2-4 weeks. However, it is important to note that these are approximate transit times and actual transit times can vary depending on the specific circumstances of the shipment. To get a more accurate estimate of the delivery time for your shipment, it is best to contact MSC's customer service and provide them with the specific details of your shipment.
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group dark:bg-gray-800">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="relative flex w-[calc(100%-50px)] md:flex-col lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<ul>
 	<li class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap"><strong>Is MSC Tracking shipping expensive?</strong></li>
</ul>
</div>
<div class="text-gray-400 flex self-end lg:self-center justify-center mt-2 gap-4 lg:gap-1 lg:absolute lg:top-0 lg:translate-x-full lg:right-0 lg:mt-0 lg:pl-2 visible"></div>
</div>
</div>
</div>
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group bg-gray-50 dark:bg-[#444654]">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="relative flex w-[calc(100%-50px)] md:flex-col lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<div class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap">
<div class="markdown prose w-full break-words dark:prose-invert light">The cost of shipping with MSC will vary depending on several factors, such as the origin and destination of the cargo, the size, and weight of the container, the type of cargo being shipped, and the level of service required. In general, shipping by sea is generally considered less expensive than shipping by air, but it does take longer. MSC, like other shipping companies, offers a range of services at different price points. Express services are generally more expensive than regular and economy services due to the shorter transit times.</div>
<div></div>
<div class="markdown prose w-full break-words dark:prose-invert light">

It is difficult to give a definitive answer on whether MSC shipping is expensive or not without knowing the specifics of your shipment. Shipping costs can also vary depending on factors such as the current market conditions and the demand for shipping capacity. It is recommended to get a quote from MSC or other shipping companies and compare the prices to determine the best option for your shipment.
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group dark:bg-gray-800">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="relative flex w-[calc(100%-50px)] md:flex-col lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<ul>
 	<li class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap"><strong>What is MSC Tracking Shipping Fee?</strong></li>
</ul>
</div>
</div>
</div>
</div>
<div class="w-full border-b border-black/10 dark:border-gray-900/50 text-gray-800 dark:text-gray-100 group bg-gray-50 dark:bg-[#444654]">
<div class="text-base gap-4 md:gap-6 m-auto md:max-w-2xl lg:max-w-2xl xl:max-w-3xl p-4 md:py-6 flex lg:px-0">
<div class="relative flex w-[calc(100%-50px)] md:flex-col lg:w-[calc(100%-115px)]">
<div class="flex flex-grow flex-col gap-3">
<div class="min-h-[20px] flex flex-col items-start gap-4 whitespace-pre-wrap">
<div class="markdown prose w-full break-words dark:prose-invert light">

MSC, like other shipping companies, charges a variety of fees for its services. The specific fees that will be charged for a shipment will depend on several factors such as the origin and destination of the cargo, the size and weight of the container, the type of cargo being shipped, and the level of service required. Some of the fees that MSC may charge include:
<ul>
 	<li>Freight charges: This is the fee for transporting the cargo from the origin to the destination. It is based on the cargo's weight or volume and the distance it needs to be shipped.</li>
 	<li>Terminal handling charges: This is the fee charged by the terminal operators at the ports of loading and discharge for handling the containers.</li>
 	<li>Customs clearance fees: This fee is charged for clearing the cargo through customs at the ports of loading and discharge.</li>
 	<li>Documentation fees: This is the fee for preparing and processing the necessary shipping documents for the cargo.</li>
 	<li>Insurance: This is the fee for insuring the cargo against loss or damage during transport.</li>
</ul>
It is difficult to give an estimate of the shipping fee without knowing the specifics of the cargo and the route, it is recommended to contact MSC or other shipping companies and get a quote based on your shipment details.

<h4><b>Conclusion</b></h4>
This article is for people who are using MSC tracking bl and do not know how to track the package through tracking id. After reading this article you will be able how to track packages and if they face any problems then customer support information is also available You can use customer support if you have any problems.    
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