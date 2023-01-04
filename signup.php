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
    <div class="wrapper align-items-stretch">
        <!-- Page Content  -->
        <div id="" class="" >
            <?php
            include "nav.php"
            ?>
            <section id="loginSection" class="mb-5" style="padding-top: calc(100vh - 650px);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <div class="card mt-5">
                                <div class="card-header">
                                    <h5 class="card-title">Admin Signup</h5>
                                </div>
                                <div class="card-body">
                                    <form action="codeFormSubmit.php" method="post">
                                        <div class="form-group">
                                            <label for="loginEmail">Name</label>
                                            <input type="text" name="name" id="loginEmail" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="loginEmail">Phone Number</label>
                                            <input type="text" name="phone" id="loginEmail" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="loginEmail">Email</label>
                                            <input type="email" name="email" id="loginEmail" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" id="password" class="form-control" required>
                                        </div>
                                        <div>
                                        <div class="form-group">
                                            <label for="note" class="text-danger"><b>Note:</b> After submitting your Signup Data, your request will be reviewed by the Super Admin then your Account will be Verfied and You will be able to login to the system.</label>
                                        </div>
                                        </div>
                                        <button type="submit" name="signup" value="signup"  class="btn btn-dark btn-block">Sign Up</button>
                                    </form>
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