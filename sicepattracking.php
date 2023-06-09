
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
  <meta name="description" content=" Sicepat tracking was built in 2004 to transport and transport things from one place to another i.e. from one country or one Country to another city">
<meta name="keywords" content="Sicepat Tracking, tracking sicepat reg, sicepat tracking resi number,">
<meta name="author" content="Packstrack"> 
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/sicepattracking"
  },
  "headline": "Sicepat Tracking - Track Your Package",
  "description": "sicepat tracking was built in 2004 to transport and transport things from one place to another i.e. from one country or one Country to another city.",
  "image": "https://packstrack.com/uploaded_files/Sicepat.webp",  
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
  "datePublished": "2023-01-29",
  "dateModified": "2023-03-30"
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
        $blogId = "73";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="Sicepat Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>Sicepat Tracking - Track Your Package</h1>
If we talk about this tracking, this sicepat tracking was built in 2004 to transport and transport things from one place to another i.e. from one country or one Country to another city. Tracking is being used as a courier in the bazaar, people can track their parcels from this Tracking and are also in it the great convenience is that this train has also provided the facility of receipt. Every customer who uses it is given a receipt along with the item which is received by the company. This courier Company also use in Indonesia because most people use it.

<iframe src="https://www.sicepat.com/checkAwb" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="1000px" width="100%" allowfullscreen></iframe>

It is trusted and working Last Many Years.   Users who are checking the receipts given by tracking sicepat halu Google are facing problems checking how to find the status of the package sent by sicepat halu tracking. And where he has reached so far, he is given a number by Email, he can know all the details through a number, that too without any movement. You can track cek sicepat tracking with the information provided by both of them and you can check your Package through them to find out where your package has reached. If they had difficulty finding the tracking number, now they can easily find their package using this number.
<h2>How To Track Package Through tracking sicepat reg</h2>
If we talk about how to track the tracking package then it is a very easy way how can we track tracking sicepat gokil package given tracking then it is very easy way to follow the below steps can do.
<ul>
 	<li aria-level="1">First of all check your email you receive a tracking number through Couriour company.</li>
 	<li aria-level="1">After Pick The Tracking Number</li>
 	<li aria-level="1">You will see the Track button On the Website</li>
 	<li aria-level="1">Put your Number on this button</li>
 	<li aria-level="1">You will see your order status easily</li>
</ul>
 
<h3>How to find sicepat tracking resi number?</h3>
Have you ordered something online and you don't know how to track and track your package, we'll tell you the easiest way to do it. It's easy for everyone to see where your baby is from. You'll have an email entered there. They can also send you tracking via email. Also if you get a tracking id and facing a problem in track then you can contact customer service which is very easy and it is available free of charge.
<h3>What does sicepat reg tracking status mean?</h3>
If you are using This courier Tracking Number Then This is a very Important Step for you Because This is Very Important For Everyone This is Some Important Guidelines For everyone.   Manifested, the package has been received and recorded at the Sicepat office or agent
<ul>
 	<li>On Transit, packages are in transit at one of the collection warehouses and are ready to be delivered the next day.</li>
 	<li>On Process, the package is in the process of being sent to be delivered to the destination address.</li>
 	<li>Received on Destination, packages have arrived in one of the cities for transit or distribution or for delivery.</li>
 	<li>Delivered, the package has been delivered and received at the destination address.</li>
 	<li>Not Home, the package has been delivered to the destination address, but no one can receive the package.</li>
</ul>
 
<h3>Customer Service tracking resi sicepat</h3>
 
<table>
<tbody>
<tr>
<td><b>Contact Information</b></td>
<td><b>Details</b></td>
</tr>
<tr>
<td>Telephone Number</td>
<td>021-5020-0050</td>
</tr>
<tr>
<td>Contact Email</td>
<td>customer.care@sicepat.com</td>
</tr>
<tr>
<td>Main Office Address</td>
<td>Jl.Daanmogot II No.100 M-N Kelurahan Duri Kapa, Kecamatan Kebon Jeruk, Jakarta Barat, Indonesia</td>
</tr>
</tbody>
</table>
<b>Conclusion </b><b>tracking sicepat</b><b> : </b>I hope After reading this article you will know all about tracking You will Know all about how to track your package online. If you face any problem you can contact with customer support number. Here we have provided you. We have to give you all details about the courier company after ready this article if you have any questions you can ask us.
    
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