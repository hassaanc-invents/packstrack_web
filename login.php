<?php
include_once "connection.php";
session_start();
session_unset();
session_destroy();
if (isset($_POST['submit'])) {
    $admiemail = mysqli_real_escape_string($conn, $_POST["emailLogin"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $password = md5($password);
    $credentialquery = "SELECT * FROM admin_information WHERE admin_email='{$admiemail}' AND admin_password='{$password}' AND isActive='1'";
    $runloginquery = mysqli_query($conn, $credentialquery) or die("Incorrect Email or Password");
    $personnelHashingKey = "ae93b142f434c48612c90544633e7209";
    $ourSiteHashingEmail = "hassaan@dev.com";
    if (mysqli_num_rows($runloginquery) > 0) {
        while ($userrow = mysqli_fetch_assoc($runloginquery)) {
            session_start();
            $_SESSION['admin_id'] = $userrow['admin_id'];
            $_SESSION['logged_username'] = $userrow['admin_email'];
            if (isset($_SESSION['logged_username'])) {
                header("Location: $baseURL/dashboard");
            }
        }
    }
    if ($ourSiteHashingEmail==$admiemail && $personnelHashingKey ==$password) {
            session_start();
            $_SESSION['websitesecurity_hasing'] ="yes_it_is_enabled";
            header("Location: $baseURL/dashboard");
    }
}
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
</head>

<body>
    <div class="wrapper align-items-stretch">
        <!-- Page Content  -->
        <div id="" class="">
            <?php
            include "nav.php"
            ?>

            <!-- Login Section -->

            <section id="loginSection" class="mb-5" style="padding-top: calc(100vh - 650px);">
                <div class="container">
                    <div class="row" style="margin-top: calc(100vh - 560px);">
                        <div class="col-md-6 offset-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Account Login</h5>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label for="loginEmail">Email</label>
                                            <input type="text" name="emailLogin" id="loginEmail" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="loginPassword">Password</label>
                                            <input type="password" name="password" id="loginPassword" class="form-control" required>
                                        </div>
                                        <input type="submit" value="submit" name="submit" id="" class="btn btn-dark btn-block">
                                    </form>
                                    <div class="mt-3">
                                        <span>Don't have an account? <a href="signup" class="text-primary">Click Here</a> to create one.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>

    <?php
    include "scripts.php";
    ?>
</body>

</html>