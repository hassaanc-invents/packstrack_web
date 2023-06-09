
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
  <meta name="description" content=" ACPL Tracking was established in 1989s and is an incorporated transport of industrial goods list service provider">
<meta name="keywords" content="ACPL Tracking, ACPL tracking Customer support number, How to Track ACPL Tracking, ACPL Cargo Online Tracking, ACPL Cargo Tracking">
<meta name="author" content="Packstrack">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/acpltracking"
  },
  "headline": "ACPL Tracking - Track Your Package",
  "description": "ACPL Tracking was established in 1989s and is an incorporated transport of industrial goods list service provider with a strong branch presence",
  "image": "https://packstrack.com/uploaded_files/ACPL%20(1).webp",  
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
  "datePublished": "2023-01-21",
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
        $blogId = "54";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="ACPL Tracking" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <h1>ACPL Tracking - Track Your Package</h1>
<h3></h3>
ACPL Tracking was established in 1989s and is an incorporated transport of industrial goods list service provider with a strong branch presence in Tarshi and Natick Gujarat and Goa region with more than 110 branches. Provides on-time delivery through 29 districts and 100 customer decks across western and southern India. A highly maintained fleet of over 500 vehicles ensures safe, speedy, and committed delivery across the region. Allows us to provide customized supply chain solutions to customers across industries.

<iframe src="https://acplcargo.com/vehicle_tracking.php" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="400px" width="100%" allowfullscreen></iframe>
<h3></h3>
ACPL Avinash Carrier Transport helps you deliver the merchandise purchased from the merchant to your address. This USPS Tracking FedEx Express Tracking Device is a popular shopping provider like UPS Tracking and DHL Tracking. The number is given so that it can be identified. The tracking number should be available to you on the merchant's website. Enables international tracking of transport for such person.
<h2>How to Track ACPL Tracking</h2>
<ul>
 	<li>First, you have a valid tracking number from <b><a class="text-primary" href="https://acplcargo.com/" target="_blank" rel="noopener">ACPL Tracking.</a></b></li>
 	<li>Enter your tracking number into the search bar.</li>
 	<li>Then click the track button.</li>
 	<li>Wait a moment while it is processing.</li>
 	<li>Soon you will have all the details about your package.</li>
 	<li>If face any problem you contact ACPL tracking Customer support.</li>
</ul>
<h3>ACPL tracking Customer support number</h3>
<table>
<tbody>
<tr>
<th>Courier</th>
<th>Contact Number</th>
<th>Email</th>
<th>Main Office Address</th>
</tr>
<tr>
<td>ACPL Tracking</td>
<td>8805797979</td>
<td>info@acplcargo.com</td>
<td>Plot No-105, Old MIDC, Pune Bangalore Highway, Beside Mahindra Show Room, Satara – 415 004</td>
</tr>
</tbody>
</table>
<h3>ACPL Cargo Online Tracking</h3>
<h3></h3>
ACPL Cargo Online Tracking introduced door-to-door service in 1989 to meet different customer classes in the market as ECPL business grew in terms of services and revenue, shifting from peak cargo service to cargo and logistics AC service The network was expanded to include interstate operations and the Southern Express extended to 24 hours. After the company's formal launch as Kailash Kher, the initial industry operations were underway in 1987 under the Companies Act 1956 as Aam Shari Private Limited. Utilization is prioritized and ACPL remains focused on its mission to ensure punctuality and punctuality.
<h3></h3>
A highly maintained fleet of over 900 vehicles ensures the safest speed and committed delivery across the region. ACPL has been continuously evolving its approach by placing the customer's human at the center of the business decision-making process, enabling it to provide customized supply chain solutions to customers across industries. This is even more relevant in the context of an upcoming GSP regime that will significantly change the supply chain model adopted by consumers for their businesses. You can also track <b><a class="text-primary" href="https://packstrack.com/marutiaircourier" target="_blank" rel="noopener">Maruti Air Courier.</a></b>
<h3></h3>
<h4>ACPL Cargo Tracking</h4>
<h3></h3>
APCL Courier tracking has reorganized the use of technology in business operations to focus on marketing and to improve operational efficiency and service quality. It has established separate vertical and corporate functions. By doing 14 more operations, PL became a process-oriented organization. During this time, to sustain itself, CPL kept revising its core value proposition and the sophistication with which its fund office was built. 100,000,000 tracking service standards to provide information to the service on complaints and grievances and more. And it was found that by using modern electronic data to prepare comments on Omar's desk, important information could be improved to keep users focused on their core business.
<h3></h3>
<h3></h3>
<h4>Acpl Courier Branch List</h4>
<figure class="wp-block-table">
<table>
<tbody>
<tr>
<td><strong>Branch</strong></td>
<td><strong>Contact number</strong></td>
<td><strong>Address</strong></td>
</tr>
<tr>
<td><strong>Ahmedabad</strong></td>
<td>+91 76230 06212</td>
<td>Plot no: 35/A, Road NO-52 Hindustan Marble Road, opp. Jay Chemical, GIDC, Odhav, Ahmedabad, Gujarat 382415, India</td>
</tr>
<tr>
<td>Bangalore</td>
<td>+91 91649 52003</td>
<td>No,32/4 North, near M T B School, Garudachar Palya, Mahadevapura, Bengaluru, Karnataka 560048, India</td>
</tr>
<tr>
<td>Transport Bhiwandi</td>
<td>+91 83789 29479</td>
<td>Shop No B – 1,2,3 Ma Padmavati compound, opp. Laxman weight bridge Anjur phata dapoda, road, Dapode, Bhiwandi, Maharashtra 421302, India</td>
</tr>
<tr>
<td>Chakan</td>
<td>+91 89757 55215</td>
<td>Shop No.1, Balaji Nagar, Near Kanya High School, Nashik – Pune Hwy, Chakan, Maharashtra 410501, India</td>
</tr>
<tr>
<td>Goregaon</td>
<td>+91 73500 07288</td>
<td>Gala no. 30, deven estate, IB Patel Rd, opp. Bhola Bhagwan Industrial Estate, Goregaon ( E, Mumbai, Maharashtra 400063, India</td>
</tr>
<tr>
<td>Ichalkaranji</td>
<td>+91 88888 53354</td>
<td>NEAR Manere Highschool KABNUR ICHALKARANJI, Maharashtra 416116 India</td>
</tr>
<tr>
<td>Mumbai</td>
<td>+91 73500 07288</td>
<td>Gala no. 30, deven estate, IB Patel Rd, opp. Bhola Bhagwan Industrial Estate, Goregaon ( E, Mumbai, Maharashtra 400063, India</td>
</tr>
<tr>
<td>Masjid Bunder</td>
<td>+91 98814 99479</td>
<td>Post Office, Zainab Manzil, Shop No:3 ,Gr.Floor, Shaida Marg, Near, 1st Flank Rd, Chinchbunder, Masjid Bandar, Mumbai, Maharashtra 400009, India</td>
</tr>
<tr>
<td>Peenya</td>
<td>+91 9071736657</td>
<td>Plot No. 319, 8th Cross, 4th Phase, 4th Main, Peenya, Bangalore – 560058</td>
</tr>
<tr>
<td>Vasai</td>
<td>+91 98811 29979</td>
<td>Agrawal Naka, Sativali Rd, Dist, Vasai East, Maharashtra 401208, India</td>
</tr>
<tr>
<td>Vatva</td>
<td>+91 76230 06217</td>
<td>Shed no 63, Pushkar estate, 2, opp. Torrent Power House, Phase I, GIDC Vatwa, Ahmedabad, Gujarat 380050, India</td>
</tr>
<tr>
<td>Vapi</td>
<td>+91 76230 06240</td>
<td>Shop no:18, Plot no: 291, Rashmi Compound, Phase 2 Sardar Chowk, opp. Patel weight bridge, Vapi, Gujarat 396195, India</td>
</tr>
<tr>
<td>Wagholi</td>
<td>+91 8975759341 +91 8975759342</td>
<td>Shree Krishna Warehouse, Gate 1124, Pune Nagar Highway, Wagholi Manjri Road, Wagholi, Pune – 412207, Behind Wagholi Vegetable Markey</td>
</tr>
<tr>
<td>Transport Pune</td>
<td>+91 78880 29079</td>
<td>S.No.56/14/2, Shop No.1, Mumbai -Banglore Highway, Nr Gold’s Gym, Sinhgad, Sinhgad Rd, Pune, Maharashtra 411041, India</td>
</tr>
<tr>
<td>Transport Belgaum</td>
<td>+91 90711 10370</td>
<td>Plot no-10, near Bhatkande school, Kapileswar Colony, Shahapur, Belgaum, Karnataka 590001, India</td>
</tr>
</tbody>
</table>
</figure>
<h4>Company details</h4>
<div class="code-block code-block-2"></div>
<figure class="wp-block-table">
<table>
<tbody>
<tr>
<td>Branches</td>
<td>250+</td>
</tr>
<tr>
<td>Districts covered</td>
<td>85+</td>
</tr>
<tr>
<td>Transhipments hubs</td>
<td>20+</td>
</tr>
<tr>
<td>Vehicles</td>
<td>900+</td>
</tr>
<tr>
<td>Network</td>
<td>Expanding from North India Rajkot to South India Coimbatore</td>
</tr>
<tr>
<td>Regions</td>
<td>24 regions across the western and southern parts of India</td>
</tr>
<tr>
<td>Satisfied customers</td>
<td>150000+</td>
</tr>
<tr>
<td>Consignments delivered successfully</td>
<td>3399502</td>
</tr>
<tr>
<td>Mission</td>
<td>Provide excellence in their services and in-time delivery</td>
</tr>
</tbody>
</table>
</figure>    
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