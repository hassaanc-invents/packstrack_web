<?php
include "connection.php";
session_start();
session_unset();
session_destroy();
?>
<!doctype html>
<html lang="en">
<head>
    <title>Packstrack - About Us</title>
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
                            <h1 class="display-4 text-muted">About Packs Track</h1>
                            <p class="lead text-muted mb-0">We will track your parcel.</p>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block"><img src="./images/packstrack-logo.webp" width="500px" height="300px" alt="" class="img-fluid"></div>
                    </div>
                </div>
                <div class="bg-white">
                    <div class="container py-5">
                        <div class="row align-items-center mb-5">
                            <div class="col order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-warning"></i>
                             <!-- Abput Blog Start -->

                             <h1>About Us</h1>
                             <p>Welcome to PacksTrack &ndash; Your Trusted Worldwide Courier Tracking Companion!</p>
                             <p>At PacksTrack, we understand that in today's fast-paced world, reliable courier services are essential for businesses and individuals alike. We strive to simplify the process of tracking your valuable packages by providing a comprehensive platform that allows you to conveniently monitor their journey from start to finish.</p>
                             <p><strong>Our Commitment:</strong></p>
                             <p>PacksTrack is committed to delivering an exceptional user experience, ensuring that you can effortlessly stay informed about the whereabouts of your shipments. We have developed a state-of-the-art tracking system that integrates with leading courier service providers worldwide, enabling you to track your packages across various carriers and destinations.</p>
                             <p><strong>Efficiency and Accuracy:</strong></p>
                             <p>With our advanced tracking technology, you can expect efficiency and accuracy in every tracking update. Our system is designed to provide real-time information on the status, location, and estimated delivery time of your packages. We leverage cutting-edge algorithms and data integration techniques to ensure that you receive the most up-to-date and reliable tracking information available.</p>
                             <p><strong>User-Friendly Interface:</strong></p>
                             <p>At PacksTrack, we believe that tracking your shipments should be a hassle-free experience. Our user-friendly interface is designed with simplicity in mind, allowing you to easily input your tracking numbers and retrieve the relevant information within seconds. Whether you're a seasoned logistics professional or a first-time user, our intuitive design ensures a seamless navigation experience.</p>
                             <p><strong>Global Coverage:</strong></p>
                             <p>No matter where your packages are headed, PacksTrack has you covered. We have established partnerships with major courier services around the globe, giving you access to a vast network of reliable carriers. From international shipments to local deliveries, we offer comprehensive tracking solutions that span continents, ensuring your peace of mind throughout the entire shipping process.</p>
                             <p>Customer Satisfaction:</p>
                             <p>At the core of our service is a strong dedication to customer satisfaction. We value your feedback and continuously strive to improve our platform based on your needs. Our support team is readily available to assist you with any inquiries or concerns you may have, ensuring that your experience with PacksTrack exceeds your expectations.</p>
                             <p><strong>Experience the PacksTrack Advantage:</strong></p>
                             <p>Discover the convenience and peace of mind that comes with effortless package tracking. Join thousands of satisfied customers who rely on PacksTrack for their worldwide courier tracking needs. Simply enter your tracking numbers and let us handle the rest. Trust us to be your reliable tracking companion every step of the way.</p>
                             <p>Thank you for choosing PacksTrack. We look forward to being your trusted partner in simplifying your courier tracking experience.</p>

                             <!-- About Blog End -->
                                <a href="privacypolicy" class="btn btn-light px-5 rounded-pill shadow-sm bg-warning py-3">Privacy Policy</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-light">
                    <div class="container py-5">
                        <div class="row mb-4">
                            <div class="col-lg-5">
                                <h2 class="display-4 font-weight-light text-muted">Our team</h2>
                            </div>
                        </div>

                        <div class="row text-center mb-0">
                            <!-- Team item-->
                            <div class="col-xl-4 col-sm-6 mb-5">
                                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="./images/manuella-nevoresky.webp" alt="packstrack founder" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                    <h5 class="mb-0">Manuella Nevoresky</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
                                    <ul class="social mb-0 list-inline mt-3">
                                        <li class="list-inline-item"><a href="#" class="text-warning"><i class="fa fa-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="text-warning"><i class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="text-warning"><i class="fa fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="text-warning    "><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End-->
                            <!-- Team item-->
                            <div class="col-xl-4 col-sm-6 mb-5">
                                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="./images/hassaanmaliq.webp" alt="packstrack developer" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                    <h5 class="mb-0">Hassaan Malick</h5><span class="small text-uppercase text-muted">Software Engineer - Founder</span>
                                    <ul class="social mb-0 list-inline mt-3">
                                        <li class="list-inline-item"><a href="https://www.facebook.com/hassaanmaliq" class="text-warning"><i class="fa fa-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a href="https://twitter.com/hassaanmaliq" class="text-warning"><i class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="https://www.instagram.com/hassaanmaliq" class="text-warning"><i class="fa fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="https://pk.linkedin.com/in/hassaan-malick-2a169a202" class="text-warning"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End-->
                            <!-- Team item-->
                            <div class="col-xl-4 col-sm-6 mb-5">
                                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="./images/ayazshareef.webp" alt="packstrack ceo" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                    <h5 class="mb-0">Ayaz Shareef</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
                                    <ul class="social mb-0 list-inline mt-3">
                                        <li class="list-inline-item"><a href="#" class="text-warning"><i class="fa fa-facebook-f"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="text-warning"><i class="fa fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="text-warning"><i class="fa fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="text-warning"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End-->
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