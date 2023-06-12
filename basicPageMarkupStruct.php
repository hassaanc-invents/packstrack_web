<?php
$markupBeforeForm = '
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
  <?php
  include "AdsCodeHead.php";
  ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive-table.css">
  <link rel="icon" type="image/x-icon" href="./images/trackingLogo.png">
  ';
$markupMidData = '
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
        
        ';
$submitForm = '  
<div class="row text-center">
<div class="rounded m-auto"><img src="<?php echo "uploaded_files/" . $imageLink; ?>" alt="';
$submitFormAfterAlt = '" width="150" height="150px" class="img-fluid rounded-circle  border-dark mb-3 img-thumbnail shadow-sm">
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
        ';

$blog_website_name = "'" . 'tracking_site_name' . "'";
$blog_image_link_name = "'" . 'blog_image_path' . "'";
$blogId = "'" . 'blog_id' . "'";
$markupAfterForm = '    
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
              if($blogShowArray[0]===$getSingleDisc[' . $blogId . '] || $blogShowArray[1]===$getSingleDisc[' . $blogId . '] || $blogShowArray[2]===$getSingleDisc[' . $blogId . ']){
              $fileOpen = $getSingleDisc[' . $blog_website_name . '];
              $finalFileOpen =  strtolower(str_replace(" ", "", $fileOpen));
          ?>
              <div class="col-lg-4 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 h-100"><a href="<?php echo $finalFileOpen; ?>" class="text-muted"><img src="<?php echo "./uploaded_files/" . $getSingleDisc[' . $blog_image_link_name . ']; ?>" alt="" width="100" height="100px" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"></a>
                  <h6 class="mb-0"><a href="<?php echo $finalFileOpen; ?>" class="text-muted"><?php echo $getSingleDisc[' . $blog_website_name . ']; ?></a></h6><span class="small text-muted"><a href="<?php echo $finalFileOpen; ?>" class="text-muted"><u>Track</u></a></span>
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
</html>';
