<?php																																										

include "connection.php";
check_login($conn);
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
    <link rel="stylesheet" href="css/custom-scroll-bar.css">
    <link rel="icon" type="image/x-icon" href="./images/trackingLogo.png">
</head>

<body>
    <div class="wrapper d-flex align-items-stretch">
        <!-- Page Content  -->
        <div id="content" class="">
            <?php
            include "nav.php";
            ?>
            <?php
            include "adminAction.php"
            ?>
        </div>
    </div>
    <!-- Blog Modal Added -->
    <?php
    include "scripts.php";
    ?>
</body>

</html>