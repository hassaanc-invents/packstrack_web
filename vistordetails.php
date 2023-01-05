<?php
include "connection.php";
check_login($conn);
$userTotalQuery = "SELECT * FROM our_visitors";
$userDetailQueryRun = mysqli_query($conn, $userTotalQuery) or die("Rows Cant Count");
?>

<!doctype html>
<html lang="en">

<head>
    <title>Packs Track</title>
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
            
<div id="action" class="bg-light py-3 mb-3">
    <div class="d-flex">
        <div class="col">
            <div class="row">
            <div class="col-md-2 mb-2 offset-md-10">
                    <a href="logout" class="btn btn-dark btn-block text-white">
                        Logout
                    </a>
                </div>
            </div>
            <div class="row px-2 mt-3 custom-scroll-bar" style="max-height: 480px; overflow-x:auto">
                <table class="table table-striped" >
                    <thead class="thead-dark">
                        <tr>
                            <th>User IP</th>
                            <th>Current Page</th>
                            <th>Referrer</th>
                            <th>IMP Time</th>
                            <th>Agent Details</th>
                            <th>Visits</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                      <?php
  if (mysqli_num_rows($userDetailQueryRun) > 0) {
    while ($singleVisits = mysqli_fetch_assoc($userDetailQueryRun)) {
          
?>
                      
                                <tr>
                                    <td>
                                        <?php
                                        echo $singleVisits['ip'];
                                        ?>
                                    </td>
                                    <td >
                                        <?php
                                        echo $singleVisits['current_page'];
                                        ?>
                                    </td>
                                    <td >
                                        <?php
                                        echo $singleVisits['referrer'];
                                        ?>
                                    </td>
                                    <td >
                                        <?php
                                        echo $singleVisits['imp_time'];
                                        ?>
                                    </td>
                                    <td >
                                        <?php
                                        echo $singleVisits['user_agent'];
                                        ?>
                                    </td>
                                    <td >
                                        <?php
                                        echo $singleVisits['total_visits'];
                                        ?>
                                    </td>
                                   
                                </tr>

                                <?php
}
}
?>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
    <!-- Blog Modal Added -->
    <?php
    include "scripts.php";
    ?>
</body>

</html>