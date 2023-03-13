<?php
$sideBarDataQuery = "SELECT * from blog_information ORDER BY blog_id DESC Limit 6";
$sideBarData = mysqli_query($conn, $sideBarDataQuery) or die("Blog Data Cant Fetch");
include "webcrawler.php";
?>
<nav class="navbar navbar-expand-md navbar-light bg-dark text-light p-3 navbar-fixed-top">
    <a href="#" class="navbar-brand text-white">
        <img src="./images/packstrack-logo.webp" width="90px" height="50px" alt="Packs Track">
        <span class="ml-2">Packs Track</span></a>
    <button class="navbar-toggler btn btn-primary ml-5 text-light py-2" type="button" data-toggle="collapse" data-target="#hostelnav" aria-controls="hostelnav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
        <span class="sr-only">Toggle Menu</span>
    </button>
    <div id="hostelnav" class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active mr-3">
                <a class="nav-link text-light" href="index">Home</a>
            </li>
            <li class="nav-item dropdown mr-3">
                <a class="nav-item nav-link dropdown-toggle mr-md-2 text-light" disabled href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Track Courier
                </a>
                <div class="dropdown-menu bg-dark dropdown-menu-right" aria-labelledby="bd-versions" style="border: 1px solid #ffc107;">
                    <?php
                    if (mysqli_num_rows($sideBarData) > 0) {
                        while ($sideBarSingleData = mysqli_fetch_assoc($sideBarData)) {
                            $fileOpen = $sideBarSingleData['tracking_site_name'];
                            $finalFileOpen =  strtolower(str_replace(' ', '', $fileOpen));
                    ?>
                            <a class="dropdown-item text-warning" href="<?php echo $finalFileOpen ?>"><?php echo $sideBarSingleData['tracking_site_name'] ?></a>
                            </a>
                    <?php
                        }
                    }
                    ?>
                    <hr class="bg-warning">
                    <a href="trackingcompanies" class="dropdown-item text-warning">View All Companies</a>
                </div>
            </li>
            <li class="nav-item mr-3" disabled>
                <a class="nav-link text-light" href="aboutus" disabled>About</a>
            </li>
            <li class="nav-item mr-3">
                <a class="nav-link text-light" href="contactus">Contact</a>
            </li>
        </ul>
    </div>
</nav>