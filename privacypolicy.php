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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="./images/trackingLogo.png">
</head>
<body>
    <div class="wrapper ">
        <!-- Page Content  -->
        <div id="content" class="">
            <?php
            include "nav.php"
            ?>
            <div>
                <div class="container py-5">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-6">
                            <h1 class="display-4 text-muted">Privacy Policy</h1>
                            <!-- <p class="lead text-muted mb-0">We will track your parcel.</p> -->
                        </div>
                        <div class="col-lg-6 d-none d-lg-block"><img src="./images/packstrack-logo.webp" width="500px" height="300px" alt="" class="img-fluid"></div>
                    </div>
                </div>
                <div class="bg-white">
                    <div class="container py-5">
                        <div class="row align-items-center mb-5">
                            <div class="col order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-warning"></i>
<p>At PacksTrack, we are committed to protecting the privacy and security of your personal information. This Privacy Policy outlines how we collect, use, disclose, and safeguard the information you provide to us when using our website.</p>
<p><strong>Information We Collect:</strong></p>
<p>When you visit our website, we may collect certain personally identifiable information from you, including but not limited to your name, email address, and tracking numbers. We collect this information for the purpose of providing you with our tracking services and improving your overall user experience.</p>
<p><strong>Use of Information:</strong></p>
<p>The information we collect is used to deliver the services you request, personalize your experience on our website, and communicate with you regarding your tracked shipments. We may also use your information to improve our website's functionality, enhance our tracking services, and conduct statistical analysis.</p>
<p><strong>Information Sharing and Disclosure:</strong></p>
<p>We value your privacy and will not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as outlined in this Privacy Policy. We may share your information with trusted third-party service providers who assist us in operating our website, conducting our business, or servicing you, as long as they agree to keep your information confidential.</p>
<p><strong>Data Security:</strong></p>
<p>We take reasonable measures to protect the security and integrity of your personal information. However, please note that no data transmission over the internet or electronic storage method can guarantee absolute security. While we strive to protect your personal information, we cannot guarantee its security with 100% certainty.</p>
<p><strong>Cookies and Tracking Technologies:</strong></p>
<p>Our website may use cookies and other tracking technologies to enhance your browsing experience and collect information about how you use our site. These technologies may automatically collect certain information, such as your IP address, browser type, operating system, and clickstream data. You can choose to disable or manage cookies through your browser settings, although this may affect your ability to use certain features of our website.</p>
<p><strong>Third-Party Links:</strong></p>
<p>Our website may contain links to third-party websites. Please note that we have no control over the content, privacy policies, or practices of these third-party sites. We encourage you to review the privacy policies of any external sites you visit.</p>
<p><strong>Children's Privacy:</strong></p>
<p>Our services are not intended for individuals under the age of 13. We do not knowingly collect personal information from children. If we become aware that we have inadvertently collected personal information from a child under the age of 13, we will take immediate steps to delete that information from our records.</p>
<p><strong>Changes to this Privacy Policy:</strong></p>
<p>We reserve the right to update or modify this Privacy Policy at any time without prior notice. We encourage you to review this policy periodically to stay informed about how we collect, use, and protect your personal information.</p>
<p><strong>Contact Us:</strong></p>
<p>If you have any questions, concerns, or requests regarding this Privacy Policy or our privacy practices, please contact us at privacy@packstrack.com.</p>
                                <a href="contactus" class="btn btn-light px-5 rounded-pill shadow-sm bg-warning py-3">Write us an Email</a>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    </div>
    <?php
    include "scripts.php";
    ?>
</body>

</html>