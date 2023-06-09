
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
  <meta name="description" content="Shopee Express Customer Service   Shopee Express is an international courier company that is providing its services all over the world. It is especially in Thailand, Vietnam, Indonesia, Malaysia, and the Philippines.">
<meta name="keywords" content="Chăm sóc khách hàng Shopee Expres,Layanan pelanggan Shopee Express, Penjagaan pelanggan Shopee Express">
<meta name="author" content="Packstrack">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://packstrack.com/shopeeexpresscs"
  },
  "headline": "Shopee Express Customer Support",
  "description": "Shopee Express Customer Service   Shopee Express is an international courier company that is providing its services all over the world. It is especially in Thailand, Vietnam, Indonesia, Malaysia, and the Philippines.",
  "image": "https://packstrack.com/uploaded_files/77-771090_logo-shopee-icon-png-transparent-png.png",  
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
  "datePublished": "2022-12-06",
  "dateModified": "2023-02-27"
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
        $blogId = "24";
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
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="Shopee Express Customer Support" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        <span style="font-weight: 400;">Shopee Express Customer Service</span>

 

<span style="font-weight: 400;">Shopee Express is an international courier company that is providing its services all over the world. It is especially in Thailand, Vietnam, Indonesia, Malaysia, and the Philippines. It has established its headquarters and branches in different countries. Here we will tell you about its main offices in major countries its contact number and email. You can see the email address and contact number of the country you live in and their main office address. Here we will provide you Shopee Express customer service number and email for all countries. You can contact them when you face any problem or you want to use their services. Contacting them is easy and completely free</span>

 

<span style="font-weight: 400;">ฝ่ายบริการลูกค้าของ Shopee Express Thailand</span>

 

<span style="font-weight: 400;">Here we will provide you the Contact number of Shopee express customer service number.</span>

 
<table>
<tbody>
<tr>
<td><span style="font-weight: 400;">Country</span></td>
<td><span style="font-weight: 400;">Contact Number</span></td>
<td><span style="font-weight: 400;">Email</span></td>
<td><span style="font-weight: 400;">Head Office Address</span></td>
</tr>
<tr>
<td><span style="font-weight: 400;">Thailand</span></td>
<td><span style="font-weight: 400;">02-026-1499</span></td>
<td><span style="font-weight: 400;">support_th@ninjavan.co.th</span></td>
<td><span style="font-weight: 400;">89 AIA Capital Center Building, 24th Floor, Ratchadaphisek Road, Din Daeng, Din Daeng, Bangkok 10400</span></td>
</tr>
</tbody>
</table>
 

<span style="font-weight: 400;">Chăm sóc khách hàng Shopee Express</span>

 
<table>
<tbody>
<tr>
<td><span style="font-weight: 400;">Country</span></td>
<td><span style="font-weight: 400;">Contact Number</span></td>
<td><span style="font-weight: 400;">Email</span></td>
<td><span style="font-weight: 400;">Head Office Address</span></td>
</tr>
<tr>
<td><span style="font-weight: 400;">Vietnam</span></td>
<td><span style="font-weight: 400;">19002042</span></td>
<td><span style="font-weight: 400;">cskh@spx.vn</span></td>
<td><span style="font-weight: 400;">17th Floor, Saigon Centre 2 Building, No. 67, Le Loi Street, Ben Nghe Ward, 1 District, Ho Chi Minh City, Vietnam.</span></td>
</tr>
</tbody>
</table>
 

<span style="font-weight: 400;">Layanan pelanggan Shopee Express</span>

 
<table>
<tbody>
<tr>
<td><span style="font-weight: 400;">Country</span></td>
<td><span style="font-weight: 400;">Contact Number</span></td>
<td><span style="font-weight: 400;">Email</span></td>
<td><span style="font-weight: 400;">Head Office Address</span></td>
</tr>
<tr>
<td><span style="font-weight: 400;">Indonesia</span></td>
<td><span style="font-weight: 400;">1500702</span></td>
<td><span style="font-weight: 400;">help@support.shopee.co.id</span></td>
<td><span style="font-weight: 400;">SCBD Lot 10, Jl Jend Sudirman Kav. 52-53, 29F Jakarta Selatan, Jakarta 12190, Indonesia</span></td>
</tr>
</tbody>
</table>
 

<span style="font-weight: 400;">Penjagaan pelanggan Shopee Express</span>

 
<table>
<tbody>
<tr>
<td><span style="font-weight: 400;">Country</span></td>
<td><span style="font-weight: 400;">Contact Number</span></td>
<td><span style="font-weight: 400;">Email</span></td>
<td><span style="font-weight: 400;">Head Office Address</span></td>
</tr>
<tr>
<td><span style="font-weight: 400;">Malaysia</span></td>
<td><span style="font-weight: 400;">6 032 777 9222</span></td>
<td><span style="font-weight: 400;">support@shopee.com.my</span></td>
<td><span style="font-weight: 400;">Shopee Mobile Malaysia Sdn Bhd Suite 18.01, Level 18, The Gardens North Tower, Mid Valley City, Lingkaran Syed Putra, Kuala Lumpur, Kuala Lumpur 59200 Malaysia</span></td>
</tr>
</tbody>
</table>
 

<span style="font-weight: 400;">Shopee Express Customer Care Number</span>

 
<table>
<tbody>
<tr>
<td><span style="font-weight: 400;">Country</span></td>
<td><span style="font-weight: 400;">Contact Number</span></td>
<td><span style="font-weight: 400;">Email</span></td>
<td><span style="font-weight: 400;">Head Office Address</span></td>
</tr>
<tr>
<td><span style="font-weight: 400;">Philippines</span></td>
<td><span style="font-weight: 400;">632 880 5200</span></td>
<td><span style="font-weight: 400;">help@support.shopee.ph</span></td>
<td><span style="font-weight: 400;">Shopee Philippines 5 Science Park Dr, Shopee Building Singapore, Sg 118265 Singapore</span></td>
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