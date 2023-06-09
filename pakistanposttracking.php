
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
  <meta name="description" content="Pakistan Post Tracking Pakistan Post is a state-owned company that has been around since 1947. It is the largest and most important.">
<meta name="keywords" content="Pakistan post tracking, Pakistan post office tracking, Pakistan post tracking id, ums tracking Pakistan post, Pakistan post tracking number">
<meta name="author" content="Packstrack">


<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/pakistanposttracking"
  },
  "headline": "Pakistan Post Tracking - Track Your Parcel",
  "description": "Pakistan Post Tracking Pakistan Post is a state-owned company that has been around since 1947. It is the largest and most important postal service in Pakistan,",
  "image": "",  
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
  "datePublished": "2023-01-26",
  "dateModified": "2023-03-10"
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
        $blogId = "61";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="Pakistan Post Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1 class="text-muted display-5">Pakistan Post Tracking - Track Your Parcel</h1>
<div class="d-flex justify-content-between"></div>
Pakistan Post Tracking Pakistan Post is a state-owned company that has been around since 1947. It is the largest and most important postal service in Pakistan, with more than 44,000 employees and a network of more than 5,000 vehicles. The national postal service helps more than fifty million people in the United States and millions more around the world through its overseas post offices.   Pakistan Post Tracking is run by the Postal Administration Council and helps customers with all of their delivery logistics and fulfillment needs. Pakistan Post is a good postal service, but it also offers other services, like Pakistan Savings and Postal Life Insurance. Services at the Post Office It also runs services for the federal and provincial governments that serve as tax and utility bill collection points.

<iframe src="https://ep.gov.pk/international_tracking.asp" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="180px" width="100%" allowfullscreen></iframe>
<h2>How To track Pakistan Post tracking</h2>
If you're having trouble tracking your package with Pakistan Post Tracking, you've come to the right place. Here, we'll show you how to track your package online. Here are some easy steps you can take to keep track of yourself without wasting time.
<ul>
 	<li aria-level="1">First, you have a valid <b><a class="text-primary" href="https://ep.gov.pk/track.asp" target="_blank" rel="noopener">Post-Tracking Number</a></b>.</li>
 	<li aria-level="1">Enter your tracking number into the search bar.</li>
 	<li aria-level="1">Press the track button.</li>
 	<li aria-level="1">Wait for a while when it is processing.</li>
 	<li aria-level="1">In no time you will know all about your parcel.</li>
 	<li aria-level="1">If you face any problem you can contact Post tracking customer support.</li>
</ul>
 
<h3>Pakistan Post tracking Helpline</h3>
Here we will give you their helpline number and Gmail so that you can contact them.
<table>
<tbody>
<tr>
<td><b>Courier</b></td>
<td><b>Contact Number</b></td>
<td><b>Email</b></td>
<td><b>Main Office Address</b></td>
</tr>
<tr>
<td>Pakistan post office</td>
<td>051-111-111-117</td>
<td>customercare@pakpost.gov.pk</td>
<td>Directorate General, Pakistan Post, Sector G-8/4, Islamabad-44080</td>
</tr>
</tbody>
</table>
 
<h3>Pakistan Post Office Tracking</h3>
One of the oldest government offices in the subcontinent is the Pakistan Post Office tracking. It began to work as the Post and Telegraph Department in 1947. started working as a department attached to another. Representing a country Pakistan Post is in a unique position to help improve Pakistan's image and social growth because of how well-known its brand is and how many post offices it has. The main job of the government is to put policies into action.
<h3>Pakistan Post International Tracking</h3>
In addition to domestic parcel services, Pakistan Post offers a variety of international services that, when combined with Universal Postal Union service standards, ensure that your parcel money or contents will be delivered safely and correctly at a price that is lower than other services. Pakistan Post is making investments in its technology and postal efficiency and building up its role as a major postal service in the region. This means that many parcels ordered from abroad end up at Pakistan Post. Mail has been delivered as part of a postal service, and it will end up in Pakistan. You can also track <b><a class="text-primary" href="https://packstrack.com/tcstracking" target="_blank" rel="noopener">TCS online tracking.</a></b>
<h3>Pakistan post tracking ums</h3>
For example, if you want to order a package from China through a logistics company like 4PX or Cainino, you will often use Pakistan Post as a local courier service to get the package to its final destination in the country. Pakistan Post also works with a number of international carriers to send packages out of Pakistan. The source will be fixed, and exporting will be taken care of by HLL or GeoDes in the country in Europe where the data is going.    If you use Pakistan post tracking ums, packages will be handled by the national courier of the country where the parcel is going, such as Japan Postal Service Post or last post in France.
<h3>Pakistan Post tracking id</h3>
Millions of packages are sent by Pakistan post tracking every week. So, they give your package a tracking number so you can find it. This is called a "Tracking ID" from Pakistan Post. This ID has all the information about your package on it. With this tracking number, people will be able to find your package. You'll get an email with this tracking number. If you lost this ID, you can call the tracking helpline number for Pakistan Post.
<h3>UMS Tracking Pakistan Post</h3>
Because Pakistan Post uses a lot of different boards and logistics partners to deliver packages, it can be hard for both consumers and businesses to figure out how to track Pakistan Post packages. Many packages from Pakistan need to be checked. In fact, many people wonder if they need to change to access Pakistan Post tracking because their packages change landers, which can cause more trouble if they do. Who will take over their job overseas if they aren't sure?
<h3>Pakistan Post Tracking Number</h3>
When you ship something via Post tracking they give you a tracking number for when it will be shipped. With this tracking number, you can track your package. This tracking number tells you where your package is now and when it will come to you. You can track the Pakistan Post tracking number. Here we will tell you how to track the Pakistan post tracking number. You can also track <b><a class="text-primary" href="https://packstrack.com/leopardtracking" target="_blank" rel="noopener">leopard Tracking</a>.</b>
<h3>Pakistan post ums tracking</h3>
In fact, it's because international postal services are getting more complicated that we made our site to help people track international packages. Together, they have made a system that lets people send packages around the world from a website. It can do that, which of course means it can track packages for Pakistan Post.
<h3>Pakistan Post Tracking App</h3>
Pakistan Post Tracking has made an app that people can use to make their lives easier. You can get this app by going to the store. After downloading, it's very easy to sign in and sign up. With this app, you can get your packages and send them anywhere or to yourself. You can order from anywhere with this app, and you can also find out how much the service costs.
<h3>Pakistan post tracking cod</h3>
Every week, buyers, sellers, and businesses ship millions of packages all over the world using a powerful system that lets users easily and conveniently measure their packages at the factory for free. If you go to the home page and enter your Pakistani track number or any other word tracking number and someone in the search bar, Packstrack will show you the most recent information about your package when you click on them. will start searching the web for the current status. The information you see will be as close to the time as possible, and you can track your package on tax track 24 hours a day, 7 days a week, or 365 days a year. And our installment number support is available 24 hours a day, 7 days a week if you have any problems.
<h3>Pakistan post parcel tracking</h3>
Pakistan Post has been in business for a long time and has built a large network of domestic post offices, mail pro-political branches, and mail forwarding terminals. This means that it can deliver goods quickly and efficiently within Pakistan. It is an international partner because of its logistics solutions and partnerships. Many courier companies, especially those that send packages from Pakistan, trust it.
<h3>Post office tracking Pakistan</h3>
One service provided by Pakistan Post which has proved to be particularly popular is its Cash On Delivery which means you can receive your package and pay your service charges at the time ie. You don't need to pay money in advance. With this app, you can check on your packages, send packages anywhere, or get packages from anywhere. You can also find out how much Pakistan Post Tracking costs through this app.
<h3>UMS tracking Pakistan post tracking</h3>
If you are using Pakistan Post for the first time or sending a package to Pakistan and want to check on its progress, go to the market and buy a pastry while the package is being processed by the postal service. Use the Pakistan Coast Guard as a customs service and post office.  Pakistan Post Tracking has made an app that people can use to make their lives easier. You can get this app by going to the store, and it's easy to sign in and sign up after you've got it.
<h4><em>FAQs</em></h4>
<ul>
 	<li><strong>How can I track my Pakistan Post parcel?</strong></li>
</ul>
Follow these steps to find out where your Pakistan Post package is:
<ul>
 	<li>Go to <b><a class="text-primary" href="https://ep.gov.pk/track.asp" target="_blank" rel="noopener">https://ep.gov.pk/track.asp</a></b> to find the Pakistan Post website.</li>
 	<li>Enter your tracking number into the space on the page that says "Tracking Number." Most of the time, the tracking number is a 13-digit number that you can find on the shipping receipt.</li>
 	<li>Click the "Track" button to see where your shipment is right now.</li>
</ul>    
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