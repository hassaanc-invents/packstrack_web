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
  <link rel="stylesheet" href="css/contact-us.css">
  <link rel="icon" type="image/x-icon" href="./images/trackingLogo.png">
</head>

<body>
  <div class="wrapper d-flex align-items-stretch">
    <!-- Page Content  -->
    <div id="content" class="">
      <?php
      include "nav.php";
      ?>
      <div class="main-conatiner">
        <h2>Please Get in touch and our expert support team will answer all your questions.</h2>

        <div class="contact-child-controller">
          <div class="main-contact-data">
            <div class="contact-form">
              <!-- -------------------------------Form Start------------------------------------------- -->
              <form action="" method="post" class="mt-1">
                <div class="full-name">
                  <input type="text" name="full_name" id="" class="full-name-input" required placeholder="Enter Your Full Name">
                </div>
                <div class="email-cont">
                  <input type="email" name="email_cont" id="" class="email-cont-input" required placeholder="Enter Your Email Here">
                </div>
                <div class="message">
                  <textarea name="message" id="" cols="30" rows="11" placeholder="Message..." required></textarea>
                </div>
                <div class="button">
                  <button type="submit" class="bg-dark button-text" value="submit" name="submit">Send</button>
                </div>
              </form>
            </div>
          </div>
          <?php
          if (isset($_POST['submit'])) {
            $contact_detail = array($_POST['full_name'], $_POST['email_cont'], $_POST['message']);
            $query = "INSERT INTO contact_us(full_name, email, message)
                VALUES('{$contact_detail[0]}','{$contact_detail[1]}','{$contact_detail[2]}')";
            $result = mysqli_query($conn, $query) or die("INSERTION FAILD");
            $finalMessage = wordwrap($contact_detail[2], 70);
            mail("hassaanmalick2001@gmail.com", "Via PackTrack Contact Us:", $finalMessage);
          }
          ?>
          <!-- Location Part Main -->
          <div class="location">
            <div class="responsive-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6639.0474975969155!2d73.00856932386962!3d33.69539399921819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfbe6b3168b499%3A0xf1c45770d2ab2a5b!2sF-10%20Markaz%20F-10%2C%20Islamabad%2C%20Islamabad%20Capital%20Territory%2C%20Pakistan!5e0!3m2!1sen!2s!4v1671385952010!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <?php
  include "scripts.php";
  ?>
</body>

</html>