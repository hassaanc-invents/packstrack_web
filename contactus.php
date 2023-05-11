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
        <h1>Contact Us</h1>
            <p>Thank you for choosing PacksTrack as your go-to platform for worldwide courier tracking. We value your feedback, inquiries, and suggestions. Our dedicated support team is ready to assist you with any questions or concerns you may have.</p>
            <p><strong>How Can We Help You?</strong></p>
            <p>Whether you have a question about our tracking services, need assistance with a specific shipment, or want to provide feedback on your experience using PacksTrack, we're here to help. Our knowledgeable support staff is equipped to handle a wide range of inquiries and will provide prompt and reliable assistance.</p>
            <p><strong>Contact Options:</strong></p>
            <p>To get in touch with our team, you can choose one of the following contact options:</p>
            <p><strong>Email:</strong> You can send us an email at support@packstrack.com, and we will respond to your query as quickly as possible. Please provide detailed information regarding your inquiry so that we can assist you effectively.</p>
            <p><strong>Contact Form:</strong> Alternatively, you can fill out the contact form below with your name, email address, and message. We encourage you to provide as much detail as possible to help us understand your request better. Once we receive your submission, one of our team members will get back to you promptly.</p>
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
              <!-- =================Form End===================== -->
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
        <p><strong>Social Media:</strong> You can also reach out to us through our official social media channels. Follow us on Twitter and Facebook to stay updated with the latest news and announcements from PacksTrack. You can send us a direct message or post your query on our social media pages, and we'll respond as soon as we can.</p>
        <p><strong>We're Here for You:</strong></p>
        <p>At PacksTrack, we value your satisfaction and are committed to providing top-notch customer service. Our team is dedicated to ensuring that your experience with our platform is smooth and problem-free. Whether you have a general question, need technical support, or require assistance with a specific tracking issue, we're here to assist you every step of the way.</p>
        <p>We appreciate your trust in PacksTrack and look forward to serving you. Reach out to us today, and let us help you with your courier tracking needs.</p>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <?php
  include "scripts.php";
  ?>
</body>

</html>