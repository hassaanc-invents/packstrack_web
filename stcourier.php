
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
  <meta name="description" content=" You can track your ST Courier package online instead of going to the courier office to find out about it">
<meta name="keywords" content="ST Courier Tracking, ST courier tracking status, ST Courier Tracking AfterShip">
<meta name="author" content="Packstrack">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/stcourier"
  },
  "headline": "ST Courier Tracking | Track your Package",
  "description": "Instead of going to the courier office, you can track your ST Courier package online. Because during the sharing process, we'll give you an online tool to check on your ST Courier Tracking.",
  "image": "https://packstrack.com/uploaded_files/st.webp",  
  "author": {
    "@type": "Person",
    "name": "Packstrak",
    "url": "https://packstrack.com/images/aboutLogo.png"
  },  
  "publisher": {
    "@type": "Organization",
    "name": "Usman",
    "logo": {
      "@type": "ImageObject",
      "url": "https://packstrack.com/images/aboutLogo.png"
    }
  },
  "datePublished": "2023-01-01",
  "dateModified": "2023-02-27"
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "HowTo", 
  "name": "How do I track my St Courier order?",
  "description": "Here are a few easy ways to find out where your order is. You should do the following:
First, you have a valid St. courier tracking number.
Use our tracker to tell us where you are.
Then click the Track button to find out where your package is.
You won't have to wait long to see everything about your package.
If you have any problems, you can call St. courier tracking customer support.",
  
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
        $blogId = "25";
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
        <h1 style="text-align: center;">ST Courier Tracking | Track your Package</h1>
 
<iframe class="custom-scroll-bar" width="100%" height="400px" src="http://www.erpstcourier.com/awb_tracking2.php"></iframe>
 

 
<h2>ST Courier Tracking</h2>
Instead of going to the courier office, you can track your ST Courier package online. Because during the sharing process, we'll give you an online tool to check on your ST Courier Tracking. This is the best way to keep track of how your work is going and what the latest news is. Provides Give us a try if you want the best and most reliable courier service and for your package to arrive on time and in good condition. So we can meet your needs, we're at home when it's the worst time for you.
<h3>ST courier tracking status</h3>
People's Choice is the slogan for ST Cargo Services, and this instruction was made to appeal to those clients. Dr. K. Ansari is the chairman and owner of ST Courier, and he and his staff are dedicated to giving their customers fast, good service at a good price. They also say they are good at solving engineering and same-day delivery problems that are common in the Korean market. ST courier tracking status has more than 2700 delivery hubs in more than 15000 places and more than 1500 franchises in 15 states.
<h3>How do I track my St Courier order?</h3>
Here are a few easy ways to find out where your order is. You should do the following:
<ul>
 	<li>First, you have a valid St. courier tracking number.</li>
 	<li>Use our tracker to tell us where you are.</li>
 	<li>Then click the <b><a class="text-primary" href="http://stcourier.com/" target="_blank" rel="noopener">Track</a></b> button to find out where your package is.</li>
 	<li>You won't have to wait long to see everything about your package.</li>
 	<li>If you have any problems, you can call St. courier tracking customer support.</li>
</ul>
<h3>St courier tracking customer care</h3>
If you have any trouble tracking the package, you can call St. courier tracking customer service. You can also call them if you want to know how much the service costs. If you lose your tracking number, you can get it back by getting in touch with them. You can also Track <b><a class="text-primary" href="https://packstrack.com/vtranstracking" target="_blank" rel="noopener">V Trans Tracking</a></b>
<table>
<tbody>
<tr>
<td><strong>Courier</strong></td>
<td><strong>Contact Number</strong></td>
<td><strong>Email</strong></td>
<td><strong>Main Office Address</strong></td>
</tr>
<tr>
<td>St courier tracking</td>
<td>04461266666</td>
<td>helpdesk@stcourier.com</td>
<td>ST Courier Pvt Ltd 199, Hariyan Street C.Pallavaram, Chennai – 600 043 Tamilnadu, India</td>
</tr>
</tbody>
</table>
<h3>ST Courier Tracking AfterShip</h3>
Tracking the ST Courier AfterShip began as a cargo service in the place where history began. It was made to meet the business and personal delivery needs of their customers in cities and small towns as a top destination for same-day transportation. They are just getting started and will be open 24 hours a day, 365 days a year to serve their customers. Their team, which has a lot of experience, works hard to give customers the best. It all started in 2007.
<h3>St courier online tracking</h3>
Based on what its clients want, St courier online tracking tries to be at the top of the justice business. And because they believe in doing good work, these logistics service teams are in the lead. People who need to get somewhere quickly should use their air mode. This team of four professionals figures out the cheapest way to deliver a package for your business. They do this by making plans and making sure there are set procedures for delivery. They are very flexible and can meet the needs of their customers without any breaks or delays. Tracking st courier gives you 19 ways to get in touch, which saves you time. Choose City Courier Chairman for a more business-wide route map. You can get your kids to school on time quickly and easily, and no one will steal them. They offer a tracking service. They have what they need to meet your supply chain's needs. They are changes made to the air just for you. The way the system works makes it more likely that important Their information system is simple and easy to use.
<h3>ST Courier tracking number</h3>
You get a tracking number when you ship or order a product through ST tracking. Your ST Courier tracking number tells you everything you need to know about your package. You can search for st courier tracking no online. Here, we'll show you how to find a tracking number online quickly and easily. You can also track <strong><a href="https://packstrack.com/anjanicouriertracking" target="_blank" rel="noopener">Anjani Courier Tracking</a></strong>
<h3>St courier tracking branches and pin codes</h3>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div> Here we will tell you the branches and pin codes of st courier tracking.</div>
<table>
<tbody>
<tr>
<td><strong>City</strong></td>
<td><strong>Contact Numbers</strong></td>
<td><strong>Emails</strong></td>
<td><strong>Address</strong></td>
</tr>
<tr>
<td>Ambattur</td>
<td>91 44 42174777 +91 7871074777</td>
<td>info@stcourier.com</td>
<td>31, First Floor, Menambedu road, SIDCO Industrial Estate, Ambattur, Tamil Nadu, India - 600098</td>
</tr>
<tr>
<td>Coimbatore</td>
<td>91 422 4398301 +91 9698003777 +91 9688703777</td>
<td>info@stcourier.com</td>
<td>No. 143-A, Nava India, Main Road, Coimbatore, Tamil Nadu, India - 641004</td>
</tr>
<tr>
<td>Guindy</td>
<td>91 44 22666666 +91 9942690246</td>
<td>info@stcourier.com</td>
<td>199, Hariyan Street, C.Pallavaram, Guindy, Tamil Nadu, India - 600043</td>
</tr>
<tr>
<td>Medavakkam</td>
<td>91 44 49589934 +91 8428722293</td>
<td>stcouriermedavakkam@gmail.com</td>
<td>No.6/8, Velachery Main Road, Medavakkam, Tamil Nadu, India - 600098</td>
</tr>
<tr>
<td>Pudukottai</td>
<td>91 9176989330 +91 7299957592</td>
<td>info@stcourier.com</td>
<td>SPM Book Shop, 5, SPN Plaza, West Main Street, Pudukottai, Tamil Nadu, India - 622001</td>
</tr>
<tr>
<td>Purasaiwalkam</td>
<td>91 44 42600011 +91 9884455723 +91 7299650005</td>
<td>ar.express.info@gmail.com</td>
<td>No:15, Purasai Tower, Ground floor, 19/10-Ponnappa Street, Purasaiwalkam, Tamil Nadu, India - 600084</td>
</tr>
<tr>
<td>Salai</td>
<td>91 9688155077 +91 9688355077 +91 7871911407</td>
<td>rashokanpdy@gmail.com</td>
<td>230, Ground Floor, Thiruvalluvar, Salai, Puducherry, India - 605013</td>
</tr>
<tr>
<td>Trichy</td>
<td>91 9688899700 +91 9688899800 +91 9688899100</td>
<td>info@stcourier.com</td>
<td>79, Ramakrishna Nagar, Kallukuzhi, Trichy, Tamil Nadu, India - 620020</td>
</tr>
</tbody>
</table>
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
</div>
<h3>St courier tracking Services</h3>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>

ST Courier is making deliveries faster and more flexible. It has things to offer like<strong>:</strong>
<ul>
 	<li>Air mode</li>
 	<li>Surface mode</li>
 	<li>INTL Brochure</li>
 	<li>ST priority</li>
 	<li>E-commerce</li>
 	<li>Courier tools</li>
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