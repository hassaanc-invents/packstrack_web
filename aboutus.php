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
                            <h1 class="display-4 text-muted">About Packs Track</h1>
                            <p class="lead text-muted mb-0">We will track your parcel.</p>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block"><img src="./images/aboutLogo.png" alt="" class="img-fluid"></div>
                    </div>
                </div>
                <div class="bg-white">
                    <div class="container py-5">
                        <div class="row align-items-center mb-5">
                            <div class="col order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-warning"></i>
                                <p class=" text-muted mb-4">Worldtrack is the official order tracking website of the world's largest courier companies. We have real time tracker which will track and complete your order in few seconds. If you face any problem in tracking the order, we will tell you the solution. We will track your order and let you know where it is now and how long it will take to reach you.</p>
                                <p class=" text-muted mb-4">
                                    We will tell you in detail about all courier services in the world. When did they start and in which country are they performing their services? Here we will provide you customer care support numbers of all courier companies. We will provide you with their original email and address of their main office and their branches.
                                </p>
                                <p class=" text-muted mb-4">
                                    We are at your service 24 hours a day and if you have any problem you can contact us and we will give you the best solution. We have a team of experienced and expert people who collect data from all the courier companies in the world, analyze it and present it to you. If you have any problem feel free to contacts us. Thanks!
                                </p>
                                <p class=" text-muted mb-4">
                                    You only need the tracking number to track your order here. You will enter your number in our real time tracker and you will get the information. Here we will teach you how to track order through email as well. You will be told that you can also get your package information by sending your tracking number to the customer support number.
                                </p>
                                <p class=" text-muted mb-4">
                                    This website will also give you a complete guide on what to do if your package gets damaged or lost during the transaction. We will tell you which courier company is providing the best services in your area so that you can take advantage of it. We will tell you how you can send your package to your friends or loved ones through any courier company and how much it will cost you.
                                </p>
                                <a href="#" class="btn btn-light px-5 rounded-pill shadow-sm bg-warning py-3">Learn More</a>
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
                                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-4.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
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
                                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="./images/hassaanmaliq.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
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
                                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="./images/ayazshareef.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
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